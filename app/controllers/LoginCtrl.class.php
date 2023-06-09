<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\RoleUtils;
use app\forms\Form;
use core\SessionUtils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class LoginCtrl {
    private $form;
	
	public function __construct(){
		$this->form = new Form();
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
			$isAccount = App::getDB()->has("kontakt", array("[><]users" => array("idkontakt" => "kontakt_idkontakt")),
			array("AND" => array("kontakt.email" => $this->form->login, "users.haslo" => $this->form->pass, "users.czy_admin" => 1)));

			if($isAccount){
				RoleUtils::addRole('admin');
				 $uzytkownik = App::getDB()->get("kontakt", array("[><]users" => array("idkontakt" => "kontakt_idkontakt")), array("users.idusers"), array("kontakt.email" => $this->form->login));
				 SessionUtils::store('id', $uzytkownik);
			}	
			else {
				$isAccountUser = App::getDB()->has("kontakt", array("[><]users" => array("idkontakt" => "kontakt_idkontakt")),
			array("AND" => array("kontakt.email" => $this->form->login, "users.haslo" => $this->form->pass, "users.czy_admin" => 0)));

					if($isAccountUser)
					{
						RoleUtils::addRole('user');
						$uzytkownik = App::getDB()->get("kontakt", array("[><]users" => array("idkontakt" => "kontakt_idkontakt")), array("users.idusers"), array("kontakt.email" => $this->form->login));
						SessionUtils::store('id', $uzytkownik);
					}
					else{
						App::getMessages()->addMessage(new Message("Niepoprawny login lub hasło", Message::ERROR ));
					}
			}
		
		}

		return ! App::getMessages()->isError();
	}
	
	public function action_login(){

		$this->getParams();
		
		if ($this->validate()){
			App::getRouter()->forwardTo('generalShow');
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
		               
        $this->generateView();
        
    }
    public function generateView(){
		App::getSmarty()->display("login.tpl");
	}
}