<?php

class ProfilController extends Controller
{
    protected $viewFileName = "profil"; //this will be the View that gets the data...
    protected $loginRequired = false;

    public function run()
    {
        $this->view->title = "Profil";

        if($this->isLoggedIn){
            $this->view->username = $this->user->username;

            $this->view->userid = UserModel::getDataById($this->user->userid);
        }else{

        }

        //Model für Highscore & Profil!?
    }

}