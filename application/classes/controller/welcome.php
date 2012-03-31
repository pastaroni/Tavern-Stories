<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template_TavernStories {

	public function action_index()
	{
		$this->template->title.=" | Welcome";
		$view = new View("welcome/index");
		$this->template->content = $view;
	}

} // End Welcome
