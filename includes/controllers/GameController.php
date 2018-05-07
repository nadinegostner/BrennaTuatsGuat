<?php

class GameController extends Controller
{
    protected $viewFileName = "game"; //this will be the View that gets the data...
    protected $loginRequired = false;


    public function run()
    {
        $this->view->title = "Game";
    }



}