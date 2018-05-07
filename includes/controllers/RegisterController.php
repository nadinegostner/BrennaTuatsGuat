<?php

class RegisterController extends Controller
{
	protected $viewFileName = "registrierung"; //this will be the View that gets the data...
	protected $loginRequired = false;


	public function run()
	{
		$this->view->title = 'Registrierung';

		$this->checkForRegisterPost();
	}



	private function checkForRegisterPost()
	{


		if(!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'register')
		{
			$requiredFields = array('username', 'pwd', 'pwd2');

			$error = false;
			$errorFields = array();

			foreach($requiredFields as $fieldName)
			{
			    /*checks if fields are empty*/
				if(!isset($_POST[$fieldName]) || $_POST[$fieldName] == '')
				{
					$error = true;
					$errorFields[$fieldName] = "Bitte Wert eingeben!";
				}
			}

			/*__Kontrolle funktioniert nicht!! keine Registrierung aber auch keine Ausgabe der Fehlermeldungen__*/
			if(!$error)
			{
				$password = $_POST['pwd'];
				$username = $_POST['username'];

				if(strlen($password) < 8) //check if password is long enough
				{
					$error = true;
					$errorFields['pwd'] = "Passwort ist zu kurz! Bitte mindestens 8 Zeichen eingeben";
				}
				else if($password != $_POST['pwd2']) //check if password matches password repetition
				{
					$error = true;
					$errorFields['pwd2'] = "Passwort Wiederholung entspricht nicht dem gleichen Wert von Passwort!";
				}

				if(!$error)
				{
				    $mail = $_POST['mail'];
				    $firstname = $_POST['firstname'];
				    $lastname = $_POST['lastname'];


					//check if username exists already...
					if(User::existsWithUsername($username) == false)
					{
						User::createUser(array('username' => $username, 'pwd' => $password, 'mail' => $mail, 'firstname' => $firstname, 'lastname' => $lastname));

						$this->view->RegisterSuccessful = true;
					}
					else
					{
						$errorFields['username'] = "Benutzername ist schon vorhanden!";

						$this->view->UsernameExists = true;
					}

				}
			}

			$this->view->errorFields = $errorFields;
		}
	}
}