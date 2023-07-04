<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;
use core\ParamUtils;
use app\forms\Form;

class ReservationListCtrl {

	private $records; 
	private $databet;
	private $form;
	private $resultsPerPage;
	private $offset;
	private $totalResults;
	public function __construct(){
		$this->form = new Form();
	}

	public function action_reservationList(){
		
		$this->resultsPerPage = 3;
		$this->form->page = isset($this->form->page) ? intval($this->form->page) : 1;

		$this->offset = ($this->form->page - 1) * $this->resultsPerPage;

		try{
			$this->records = App::getDB()->select("rezerwacja", array("[><]hotel" => array("hotel_idhotel" => "idhotel"), "[><]users" => array("users_idusers" => "idusers"), "[><]kontakt" => array("users.kontakt_idkontakt" => "idkontakt")),
			array("rezerwacja.idrezerwacji","hotel.idhotel","hotel.nazwa", "hotel.cena_za_noc", "hotel.all_inclusive", "users.imie","users.nazwisko", "kontakt.email", "kontakt.numer_telefonu", "rezerwacja.data_start", "rezerwacja.data_end"), array('LIMIT' => [$this->offset, $this->resultsPerPage]));


		} catch (PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas zapisu rekordu", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
		 
		App::getSmarty()->assign('rezerwacja',$this->records); 
		App::getSmarty()->display('listarezerwacji.tpl');
	}
	public function validateEdit(){
		$this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błąd');
		return !App::getMessages()->isError();
	}
	
	public function action_reservationDelete(){
		if ($this->validateEdit()) {
			try {

				App::getDB()->delete("rezerwacja", [
					"idrezerwacji" => $this->form->id
				]);
				
			} catch (PDOException $e){
				App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas usuwania użytkowników", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());			
			}
			
		}	
		App::getRouter()->forwardTo('reservationList');		
	}
	public function validateSearch(){
		$this->form->surname = ParamUtils::getFromRequest('surname');
		return !App::getMessages()->isError();
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
			$this->records = App::getDB()->select("rezerwacja", array("[><]hotel" => array("hotel_idhotel" => "idhotel"), "[><]users" => array("users_idusers" => "idusers"), "[><]kontakt" => array("users.kontakt_idkontakt" => "idkontakt")),
			array("rezerwacja.idrezerwacji","hotel.idhotel","hotel.nazwa", "hotel.cena_za_noc", "hotel.all_inclusive", "users.imie","users.nazwisko", "kontakt.email", "kontakt.numer_telefonu", "rezerwacja.data_start","rezerwacja.data_end"), $where);

        } catch (PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas usuwania użytkowników", Message::ERROR )) ;
			if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());
        }
		App::getSmarty()->assign('rezerwacja',$this->records);  

    }
	public function action_searchReservationList() {
        $this->load_data();
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('rezerwacje', $this->records);  
        App::getSmarty()->display('listarezerwacji.tpl');
    }

    public function action_searchReservationListPart() {
        $this->load_data();
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('rezerwacje', $this->records);
        App::getSmarty()->display('searchlistarezerwacji.tpl');
    }
}