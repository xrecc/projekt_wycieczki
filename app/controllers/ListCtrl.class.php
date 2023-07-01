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
			$this->records = App::getDB()->select("kontakt", array("[><]users" => array("idkontakt" => "kontakt_idkontakt")),
			array("users.idusers","users.imie","users.nazwisko","users.haslo","users.czy_admin","kontakt.email","kontakt.numer_telefonu"));
			// $this->records = APP::getDB()->select("users", [
			// 	"[<>]kontakt" =>["kontakt_idkontakt"=>"kontakt_id"]
			// ],[
			// 		"users.idusers",
			// 		"users.imie",
			// 		"users.nazwisko",
            //         "users.haslo",
            //         "users.czy_admin",
            //         "kontakt.email",
            //         "kontakt.numer_telefonu"
			// 	]);
		} catch (PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas zapisu rekordu", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
		 
		App::getSmarty()->assign('users',$this->records);  
		App::getSmarty()->display('lista.tpl');
	}
}