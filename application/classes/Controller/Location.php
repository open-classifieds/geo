<?php

class Controller_Location extends Controller_Template {

	public function action_countries()
	{
        $countries = json_decode(Core::curl_get_contents(Route::URL('api',array('action'=>'countries'))));

        $letters = array();
        foreach ($countries as $country) 
        {
            if (isset($letters[$country->name[0]]))
                $letters[$country->name[0]] = $letters[$country->name[0]]+1;
            else
                $letters[$country->name[0]] = 1;
        }

        $this->template->content = View::factory('countries',array('countries'=>$countries,'letters'=>$letters));
	}

    public function action_country()
    {
        $country = New Model_Location();
        $country->where('seoname','=',$this->request->param('country'))
                ->where('parent_deep','=',0)
                ->cached()->find();


        if ($country->loaded())
        {
            $url = Route::URL('api',array('action'=>'regions')).'?country='.$country->id_location;
            $regions =  json_decode(Core::curl_get_contents($url));

            $letters = array();
            foreach ($regions as $region) 
            {
                if (isset($letters[$region->name[0]]))
                    $letters[$region->name[0]] = $letters[$region->name[0]]+1;
                else
                    $letters[$region->name[0]] = 1;
            }

            $this->template->content = View::factory('regions',array('regions'=>$regions,'letters'=>$letters,'country'=>$country));

        }
        //not found in DB
        else
        {
            //throw 404
            throw HTTP_Exception::factory(404,__('Page not found'));
        }
        
    }


    public function action_region()
    {
       d($this->request->param('country').$this->request->param('region'));
    }

    



} // End Welcome
