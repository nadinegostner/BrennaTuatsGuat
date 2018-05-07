<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/play'] = array('controller' => 'IndexController', 'uniqueName' => 'index');

$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.php'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/anmelden'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/registrierung.html'] = array('controller' => 'RegisterController', 'uniqueName' => 'registrierung');
$route['/registrierung.php'] = array('controller' => 'RegisterController', 'uniqueName' => 'registrierung');
$route['/register'] = array('controller' => 'RegisterController', 'uniqueName' => 'registrierung');
$route['/registrierung'] = array('controller' => 'RegisterController', 'uniqueName' => 'registrierung');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.php'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/abmelden'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

$route['/highscore'] = array('controller' => 'HighscoreController', 'uniqueName' => 'highscore');
$route['/highscore.php'] = array('controller' => 'HighscoreController', 'uniqueName' => 'highscore');
$route['/score'] = array('controller' => 'HighscoreController', 'uniqueName' => 'highscore');
$route['/highscore.html'] = array('controller' => 'HighscoreController', 'uniqueName' => 'highscore');

$route['/impressum'] = array('controller' => 'ImpressumController', 'uniqueName' => 'impressum');
$route['/impressum.php'] = array('controller' => 'ImpressumController', 'uniqueName' => 'impressum');
$route['/impressum.html'] = array('controller' => 'ImpressumController', 'uniqueName' => 'impressum');
