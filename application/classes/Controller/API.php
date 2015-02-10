<?php

class Controller_API extends Controller {

    //this is what will be returned
    protected $result = NULL;
    protected $locations = NULL;
    protected $locale  = 'en_US';
    protected $chained = FALSE;

    /**
     * in this case the construct will take care of the AUTH of the request
     * 
     */
    public function __construct($request, $response)
    {
        $this->chained = (Core::request('chained')==1)?TRUE:FALSE;

        //@todo get locale Model_Locale::current
        $this->locale  = 'en_US';
        parent::__construct($request, $response);
    }

    public function after()
    {
        if ($this->result === NULL)
        {
            if ($this->chained)
            {
                $this->result = $this->locations->as_array('id_location','name');
            }
            else
            {
                $locations_array = array();
                foreach ($this->locations as $id_location => $location)
                    $locations_array[$id_location] = $location->as_array();

                $this->result = $locations_array;
            }
        }
        

        $this->response->headers('Content-type','application/javascript');
        $this->response->body(json_encode($this->result));
    }


    public function action_countries()
    {
        $locations = New Model_Location();

        $this->locations = $locations->where('parent_deep','=',0)
                    ->where('id_location','!=',1)
                    ->order_by('name','ASC')
                    ->cached()->find_all(); 
    }


    public function action_regions()
    {
        $country = New Model_Location();
        $country->where('id_location','=',Core::get('country'))
                ->where('parent_deep','=',0)
                ->cached()->find();

        if ($country->loaded())
        {
            $regions = New Model_Location();

            $this->locations = $regions->where('id_location_parent','=',$country->id_location)
                                    ->where('parent_deep','=',1)
                                    ->order_by('name','ASC')
                                    ->cached()->find_all();
        }
        
    }

    public function action_cities()
    {
        $regions_array = array();

        //its a country lets get all the regions TODO directly usinf id_region
        if (Core::get('country')!==NULL)
        {

            $regions = New Model_Location();
            $regions = $regions->where('id_location_parent','=',Core::get('country'))
                                ->where('parent_deep','=',1)
                                ->order_by('name','ASC')
                                ->cached()->find_all();
            foreach ($regions as $r)
                $regions_array[] = $r->id_location;
        }
        //TODO directly using id_country
        elseif (Core::get('region')!==NULL)
        {
            $regions_array[] = Core::get('region');
        }

        if (!empty($regions_array))
        {
            //get all the cities
            $cities = New Model_Location();

            $this->locations = $cities->where('id_location_parent','in',$regions_array)
                                    ->where('parent_deep','=',2)
                                    ->cached()->find_all();
        }
        
    }


    

} // End Blog
