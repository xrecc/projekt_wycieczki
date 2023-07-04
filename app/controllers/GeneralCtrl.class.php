<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\SessionUtils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class GeneralCtrl {
    private $records;
    
    public function action_generalShow() {
		$usern = SessionUtils::load('id', true);
		try{
			$this->records = App::getDB()->select("users", array("imie"), array("idusers" => $usern));

		} catch (\PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas zapisu rekordu", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
		 
		$this->generateView();
	}            
        
    public function generateView(){
		App::getSmarty()->assign('username',$this->records); 
		App::getSmarty()->display("general.tpl");
	}    
}
    

