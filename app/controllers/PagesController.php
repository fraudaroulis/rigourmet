<?php

class PagesController extends BaseController {

	public function getIndex()
	{
		return View::make('site.homepage.homepage');
	}

	public function getQuestionnaires()
	{
		$this->layout->content = View::make('extra.questionnaires');
	}

	public function getTest()
	{
		$this->layout->content = View::make('layouts.profile_master');
	}

	
}
