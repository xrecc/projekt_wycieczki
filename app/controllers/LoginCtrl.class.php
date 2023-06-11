<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\RoleUtils;
use app\forms\LoginForm;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class LoginCtrl {
    private $form;
	
	public function __construct(){
		$this->form = new LoginForm();
	}
	
	public function getParams(){
		$this->form->login = ParamUtils::getFromRequest('login');
		$this->form->pass = ParamUtils::getFromRequest('pass');
	}
	
	public function validate() {
		if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
			return false;
		}
			
		if (! App::getMessages()->isError ()) {
			
			if ($this->form->login == "") {
				App::getMessages()->addMessage(new Message("Nie podano loginu", Message::ERROR )) ;
			}
			if ($this->form->pass == "") {
				App::getMessages()->addMessage(new Message("Nie podano hasła", Message::ERROR )) ;
			}
		}

		if ( !App::getMessages()->isError() ) {
		
			if ($this->form->login == "admin" && $this->form->pass == "admin") {

				RoleUtils::addRole('admin');

			} else if ($this->form->login == "user" && $this->form->pass == "user") {

				RoleUtils::addRole('user');

			} else {
				App::getMessages()->addMessage(new Message("Niepoprawny login lub hasło", Message::ERROR )) ;
			}
		}
		
		return ! App::getMessages()->isError();
	}
	
	public function action_login(){

		$this->getParams();
		
		if ($this->validate()){
			App::getSmarty()->display("general.html");
		} else {
			$this->action_loginShow(); 
		}
		
	}
	
	public function action_logout(){
		session_destroy();
		App::getMessages()->addMessage(new Message("Poprawnie wylogowano z systemu", Message::INFO )) ;

		$this->action_loginShow();		 
	}
    public function action_loginShow() {
		               
        App::getSmarty()->display("login.html");
        
    }
    
}
