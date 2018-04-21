<?php


class ProfilController extends Controller
{
	protected $viewFileName = "profil"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Profil";
		$this->view->username = $this->user->username;

		$this->view->userid = UserModel::getDataById($this->user->userid);
		//Model für Highscore & Profil!?
	}

}