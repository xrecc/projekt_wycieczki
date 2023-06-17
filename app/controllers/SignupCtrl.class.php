<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use app\forms\SignupForm;
use PDOException;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class SignupCtrl {
    private $form;
	
	public function __construct(){
		$this->form = new SignupForm();
	}
	
	public function getParams(){
		$this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->phonenumber = ParamUtils::getFromRequest('phonenumber');
        $this->form->isAdmin = 0;
	}
	
	public function validate() {
		if (! (isset ( $this->form->login ) && isset ( $this->form->pass ) && isset ( $this->form->name ) && isset ( $this->form->surname ) && isset ( $this->form->email ) && isset ( $this->form->phonenumber ))) {
			return false;
		}
			
		if (! App::getMessages()->isError ()) {
			
			if ($this->form->pass == "") {
				App::getMessages()->addMessage(new Message("Nie podano hasła", Message::ERROR )) ;
			}
            if ($this->form->name == "") {
				App::getMessages()->addMessage(new Message("Nie podano imienia", Message::ERROR )) ;
			}
            if ($this->form->surname == "") {
				App::getMessages()->addMessage(new Message("Nie podano nazwiska", Message::ERROR )) ;
			}
            if ($this->form->email == "") {
				App::getMessages()->addMessage(new Message("Nie podano adresu email", Message::ERROR )) ;
			}
            if ($this->form->phonenumber == "") {
				App::getMessages()->addMessage(new Message("Nie podano numeru telefonu", Message::ERROR )) ;
			}
		}
		
		return ! App::getMessages()->isError();
	}
    public function action_signup(){
		$this->getParams();	
		if ($this->validate()) {
			try {
				APP::getDB()->insert("users", [
					"imie" => $this->form->name,
					"nazwisko" => $this->form->surname,
					"haslo" => $this->form->pass,
                    "czy_admin" => $this->form->isAdmin,
                    "email" => $this->form->email,
					"numer_telefonu" => $this->form->phonenumber
				]);
					
			} catch (PDOException $e){
				App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas zapisu rekordu", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());			
			}
			
			$this->generateView();

		} else {
			$this->action_signupShow();	
		}		
	}
    public function generateView(){
        App::getSmarty()->display('general.html');
    }
    public function action_signupShow() {
		               
        App::getSmarty()->display("signup.html");
        
    }
    
}