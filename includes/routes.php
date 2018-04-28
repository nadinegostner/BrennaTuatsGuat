<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/play'] = array('controller' => 'IndexController', 'uniqueName' => 'index');

$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/anmelden'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/registrierung.html'] = array('controller' => 'RegisterController', 'uniqueName' => 'register');
$route['/register'] = array('controller' => 'RegisterController', 'uniqueName' => 'register');
$route['/registrierung'] = array('controller' => 'RegisterController', 'uniqueName' => 'register');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/abmelden'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/highscore'] = array('controller' => 'HighscoreController', 'uniqueName' => 'highscore');
$route['/highscore.html'] = array('controller' => 'HighscoreController', 'uniqueName' => 'highscore');
$route['/score'] = array('controller' => 'HighscoreController', 'uniqueName' => 'highscore');