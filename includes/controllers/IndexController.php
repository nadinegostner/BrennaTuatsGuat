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
		$this->view->userid = $this->user->userid;

		$this->checkForScoreSave();
	}

	public function checkForScoreSave()
    {
        if(isset($_POST['action']) && $_POST['action'] == 'saveScore')
        {
            //get values
            $score = $_POST['score'];
            $userid = $this->user->userid;
            $difficulty = $_POST['difficulty'];


            //save values
            HighscoreModel::saveHighscore($userid, $score, $difficulty);

            $jsonResponse = new JSON();
            $jsonResponse->result = true;
            $jsonResponse->setMessage('saved it');
            $jsonResponse->send();
        }
    }

}