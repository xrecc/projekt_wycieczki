<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;
use core\ParamUtils;
use core\RoleUtils;
use app\forms\SignupForm;

class ListCtrl {

	private $records; 

	public function action_resultList(){
		
		try{
			$this->records = APP::getDB()->select("users", [
					"idusers",
					"imie",
					"nazwisko",
                    "haslo",
                    "czy_admin",
                    "email",
                    "numer_telefonu"
				]);
		} catch (PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas zapisu rekordu", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
		 
		App::getSmarty()->assign('users',$this->records);  
		App::getSmarty()->display('lista.html');
	}
}