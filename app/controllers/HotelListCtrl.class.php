<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;
use core\ParamUtils;
use app\forms\Form;
use core\SessionUtils;

class HotelListCtrl {

	private $records; 
	private $form;
	private $resultsPerPage;
	private $offset;
	private $totalResults;
	public function __construct(){
		$this->form = new Form();
	}
	public function getParams(){
		$this->form->nazwa = ParamUtils::getFromRequest('nazwa');
        $this->form->gwiazdki = ParamUtils::getFromRequest('gwiazdki');
        $this->form->amount = ParamUtils::getFromRequest('amount');
		$this->form->page = ParamUtils::getFromGet('page');
	}
	public function action_hotelList(){
		
		$this->resultsPerPage = 3;
		$this->form->page = isset($this->form->page) ? intval($this->form->page) : 1;

		$this->offset = ($this->form->page - 1) * $this->resultsPerPage;

		try{
			$this->records = App::getDB()->select("kontakt", array("[><]hotel" => array("idkontakt" => "kontakt_idkontakt")),
			array("hotel.idhotel","hotel.nazwa","hotel.gwiazdki","hotel.data_powstania","hotel.cena_za_noc","hotel.basen","hotel.all_inclusive", "kontakt.email","kontakt.numer_telefonu"), array('LIMIT' => [$this->offset, $this->resultsPerPage]));
			$this->totalResults = App::getDB()->count('users');
		} catch (PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas wyświetlania hoteli", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
		App::getSmarty()->assign('hotel',$this->records);  		
		App::getSmarty()->display('listahoteli.tpl');
	}
	public function validateEdit(){
		$this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błąd');
		return !App::getMessages()->isError();
	}
	public function action_hotelEdit(){
		$this->getParams();	
		if ($this->validateEdit()) {
			try {
				$record = App::getDB()->get("hotel", "*",[
					"idhotel" => $this->form->id
				]);
						
				$this->form->id = $record['idhotel'];
				SessionUtils::store('idhotel', $this->form->id);
				$this->form->nazwa = $record['nazwa'];
				$this->form->gwiazdki = $record['gwiazdki'];
				$this->form->amount = $record['cena_za_noc'];
			} catch (PDOException $e){
				App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas edycji użytkowników", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());			
			}
		}	
			App::getSmarty()->assign('form', $this->form);
			App::getSmarty()->display('edithotel.tpl');
				
	}
	public function action_hotelUpdate(){
		$this->getParams();	
		$this->form->id = SessionUtils::load('idhotel', true);
		if (!empty($this->form->id)) {
			try {
				App::getDB()->update("hotel", [
					"nazwa" => $this->form->nazwa,
					"gwiazdki" => $this->form->gwiazdki,
					"cena_za_noc" => $this->form->amount,
				], [
					"idhotel" => $this->form->id
				]);
			} catch (PDOException $e){
				App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas edycji użytkowników", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());			
			}
			
		}	
			App::getRouter()->forwardTo('hotelList');
				
	}
	public function action_hotelDelete(){
		if ($this->validateEdit()) {
			try {

				App::getDB()->delete("hotel", [
					"idhotel" => $this->form->id
				]);
				
			} catch (PDOException $e){
				App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas usuwania użytkowników", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());			
			}
			
		}	
		App::getRouter()->forwardTo('hotelList');		
	}
	public function validateSearch(){
		$this->form->nazwa = ParamUtils::getFromRequest('name');
		return !App::getMessages()->isError();
	}
	public function load_data() {
        
        $this->validateSearch();

    
        $search_params = []; 
        if (isset($this->form->nazwa) && strlen($this->form->nazwa) > 0) {
            $search_params['nazwa[~]'] = $this->form->nazwa . '%';
        }

 
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        
        $where ["ORDER"] = "nazwa";
       

        try {
            $this->records = App::getDB()->select("kontakt", array("[><]hotel" => array("idkontakt" => "kontakt_idkontakt")),
			array("hotel.idhotel","hotel.nazwa","hotel.gwiazdki","hotel.data_powstania","hotel.cena_za_noc","hotel.basen","hotel.all_inclusive", "kontakt.email","kontakt.numer_telefonu"), $where);
        } catch (PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd", Message::ERROR )) ;
			if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());
        }
		App::getSmarty()->assign('hotel',$this->records);  

    }
	public function action_searchHotelList() {
        $this->load_data();
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('hotel', $this->records);  
        App::getSmarty()->display('listahoteli.tpl');
    }

    public function action_searchHotelListPart() {
        $this->load_data();
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('hotel', $this->records);
        App::getSmarty()->display('searchlistahoteli.tpl');
    }
}