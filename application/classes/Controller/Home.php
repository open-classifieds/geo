<?php

class Controller_Home extends Controller_Template {

	public function action_index()
	{        
        $this->template->content = View::factory('home');
	}

} // End Welcome
