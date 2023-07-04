<?php

namespace app\controllers;

use core\SessionUtils;
use PDOException;
use core\App;
use core\Message;
use core\ParamUtils;
use app\forms\Form;
use core\Validator;

class ListCtrl {

	private $records; 
	private $record; 
	private $form;
	private $resultsPerPage;
	private $offset;
	private $totalResults;
	public function __construct(){
		$this->form = new Form();
	}
	
	public function getParams(){
		$this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błąd');
		$this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->phonenumber = ParamUtils::getFromRequest('phonenumber');
        $this->form->isAdmin = 0;
		$this->form->page = ParamUtils::getFromGet('page');
	}
	
	public function validate() {
		if (! (isset ( $this->form->pass ) && isset ( $this->form->name ) && isset ( $this->form->surname ) && isset ( $this->form->email ) && isset ( $this->form->phonenumber ))) {
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
		$v = new Validator();
		$this->form->phonenumber = $v ->validateFromRequest('phonenumber', [
			'numeric' => true,
			'validator_message' => 'Możesz podawać tylko liczby'
		]
		);
		
		return ! App::getMessages()->isError();
	}
	public function action_resultList(){

		$this->resultsPerPage = 10;
		$this->form->page = isset($this->form->page) ? intval($this->form->page) : 1;

		$this->offset = ($this->form->page - 1) * $this->resultsPerPage;

		try{
			$this->records = App::getDB()->select("kontakt", array("[><]users" => array("idkontakt" => "kontakt_idkontakt")),
			array("users.idusers","users.imie","users.nazwisko","users.haslo","users.czy_admin","kontakt.email","kontakt.numer_telefonu"), array('LIMIT' => [$this->offset, $this->resultsPerPage]));
			$this->totalResults = App::getDB()->count('users');
		} catch (PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas wyświetlania użytkowników", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
		
		App::getSmarty()->assign('users',$this->records);
		App::getSmarty()->assign('form', $this->form); 
		App::getSmarty()->display('lista.tpl');
	}
	public function validateEdit(){
		$this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błąd');
		return !App::getMessages()->isError();
	}
	public function validateSearch(){
		$this->form->surname = ParamUtils::getFromRequest('surname');
		return !App::getMessages()->isError();
	}
	public function action_resultEdit(){
		$this->getParams();	
		if ($this->validateEdit()) {
			try {
				$record = App::getDB()->get("users", "*",[
					"idusers" => $this->form->id
				]);
						
				$this->form->id = $record['idusers'];
				SessionUtils::store('idusers', $this->form->id);
				$this->form->name = $record['imie'];
				$this->form->surname = $record['nazwisko'];
				$this->form->pass = $record['haslo'];
			} catch (PDOException $e){
				App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas edycji użytkowników", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());			
			}
		}	
			App::getSmarty()->assign('form', $this->form);
			App::getSmarty()->display('edituser.tpl');
				
	}
	public function action_resultUpdate(){
		$this->getParams();	
		$this->form->id = SessionUtils::load('idusers', true);
		if (!empty($this->form->id)) {
			try {
				App::getDB()->update("users", [
					"imie" => $this->form->name,
					"nazwisko" => $this->form->surname,
					"haslo" => $this->form->pass,
				], [
					"idusers" => $this->form->id
				]);
			} catch (PDOException $e){
				App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas edycji użytkowników", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());			
			}
			
		}	
			App::getRouter()->forwardTo('resultList');
				
	}

	public function action_resultDelete(){
		if ($this->validateEdit()) {
			try {
				App::getDB()->delete("users", [
					"idusers" => $this->form->id
				]);
				
			} catch (PDOException $e){
				App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas usuwania użytkowników", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());			
			}
			
		}	
		App::getRouter()->forwardTo('resultList');	
	}
	public function load_data() {
        
        $this->validateSearch();

    
        $search_params = []; 
        if (isset($this->form->surname) && strlen($this->form->surname) > 0) {
            $search_params['nazwisko[~]'] = $this->form->surname . '%';
        }

 
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        
        $where ["ORDER"] = "nazwisko";
       

        try {
            $this->records = App::getDB()->select("kontakt", array("[><]users" => array("idkontakt" => "kontakt_idkontakt")),
			array("users.idusers","users.imie","users.nazwisko","users.haslo","users.czy_admin","kontakt.email","kontakt.numer_telefonu"), $where);
        } catch (PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas usuwania użytkowników", Message::ERROR )) ;
			if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());
        }
		App::getSmarty()->assign('users',$this->records);  

    }

    public function action_usersList() {
        $this->load_data();
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('users', $this->records);  
        App::getSmarty()->display('lista.tpl');
    }

    public function action_usersListPart() {
        $this->load_data();
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('users', $this->records);
        App::getSmarty()->display('searchlista.tpl');
    }
}
