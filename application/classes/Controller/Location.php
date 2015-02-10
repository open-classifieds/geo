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

    }


    public function action_regions()
    {
       
    }

    



} // End Welcome
