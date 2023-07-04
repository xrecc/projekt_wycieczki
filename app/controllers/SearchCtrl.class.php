<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use app\forms\Form;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class SearchCtrl {
    private $recordskraj;
    private $recordsmiasto;
    private $isHotel;
    private $selHotel;
    private $records;
    private $form;
    public function __construct(){
		$this->form = new Form();
	}
    public function getParams(){
		$this->form->kraj = ParamUtils::getFromRequest('kraj');
		$this->form->nazwa = ParamUtils::getFromRequest('nazwa');
        $this->form->gwiazdki = ParamUtils::getFromRequest('gwiazdki');
        $this->form->amount = ParamUtils::getFromRequest('amount');
        $this->form->hotname = ParamUtils::getFromRequest('hotname');
        
	}
    
    public function action_searchShow() {
		try{
            $this->recordskraj = App::getDB()->select("miasto", [
                "@kraj"
            ]);
            $this->recordsmiasto = App::getDB()->select("miasto", [
                "@nazwa"
            ]);
        } catch (\PDOException $e){
            App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas wyświetlania wyników", Message::ERROR )) ;
                if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
        }	
         
        App::getSmarty()->assign('kraj',$this->recordskraj);
        App::getSmarty()->assign('miasto',$this->recordsmiasto);          
        App::getSmarty()->display("search.tpl");
        
    }
    public function action_searchResult(){
         $this->getParams();	
        try{
            $this->isHotel = App::getDB()->select("miasto", array("[><]hotel" => array("idmiasto" => "miasto_idmiasto")),
			array("hotel.idhotel","hotel.nazwa(hotname)","miasto.nazwa", "hotel.cena_za_noc", "miasto.kraj","hotel.gwiazdki", "hotel.zdjecie"), array("AND" => array("miasto.nazwa" => $this->form->nazwa, "miasto.kraj" => $this->form->kraj, "hotel.gwiazdki" => $this->form->amount)));

                
        } catch (\PDOException $e){
			App::getMessages()->addMessage(new Message("Brak wyników", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
                App::getSmarty()->assign('results',$this->isHotel);
                App::getSmarty()->display("generic.tpl");	
                
        }
        public function validateSearch(){
            $this->form->hotname = ParamUtils::getFromRequest('hotname');
            return !App::getMessages()->isError();
        }
        public function load_data() {
            
            $this->validateSearch();
    
        
            $search_params = []; 
            if (isset($this->form->hotname) && strlen($this->form->hotname) > 0) {
                $search_params['hotel.nazwa[~]'] = $this->form->hotname . '%';
            }
    
     
            $num_params = sizeof($search_params);
            if ($num_params > 1) {
                $where = ["AND" => &$search_params];
            } else {
                $where = &$search_params;
            }
            
            $where ["ORDER"] = "hotel.nazwa";
           
    
            try {
                $this->records = App::getDB()->select("miasto", array("[><]hotel" => array("idmiasto" => "miasto_idmiasto")),
                array("hotel.idhotel","hotel.nazwa(hotname)","miasto.nazwa", "hotel.cena_za_noc", "miasto.kraj","hotel.gwiazdki", "hotel.zdjecie"), $where);
            } catch (\PDOException $e){
                App::getMessages()->addMessage(new Message("Brak wyników", Message::ERROR )) ;
                if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());
            }
            App::getSmarty()->assign('results',$this->records);  
    
        }
        public function action_searchHotel() {
            $this->load_data();
            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->assign('hotel', $this->records);  
            App::getSmarty()->display('generic.tpl');
        }
    
        public function action_searchHotelPart() {
            $this->load_data();
            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->assign('hotel', $this->records);
            App::getSmarty()->display('searchgeneric.tpl');
        }
    }
    
