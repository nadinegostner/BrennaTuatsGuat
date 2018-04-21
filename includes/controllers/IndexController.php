<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 */
class IndexController extends Controller
{
	protected $viewFileName = "index"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{
		$this->view->title = "Start";
		$this->view->username = $this->user->username;

		$this->view->userid = UserModel::getDataById($this->user->userid);
	}

}