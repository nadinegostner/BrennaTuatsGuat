<?php

class HighscoreController extends Controller
{
	protected $viewFileName = "highscore"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Highscore";
		$this->view->username = $this->user->username;
		$this->view->userid = $this->user->userid;

		$this->view->highscores = HighscoreModel::getAllScores();
	}



}