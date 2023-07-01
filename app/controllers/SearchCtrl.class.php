<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use app\forms\HotelForm;
use core\Utils;

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
    private $form;
    public function __construct(){
		$this->form = new HotelForm();
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
            App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas zapisu rekordu", Message::ERROR )) ;
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
			array("hotel.nazwa(hotname)","miasto.nazwa", "hotel.cena_za_noc", "miasto.kraj","hotel.gwiazdki", "hotel.zdjecie"), array("AND" => array("miasto.nazwa" => $this->form->nazwa, "miasto.kraj" => $this->form->kraj, "hotel.gwiazdki" => $this->form->amount)));
            //     if($isCountryCityStars){
                    // $this->aaa = App::getDB()->select("miasto", [
                    //     "nazwa",
                    //     "kraj"     
                    // ],[    
                    //     "AND" =>[           
                    //     "nazwa" => $this->form->nazwa,
                    //     "kraj" => $this->form->kraj
                    //     ]
                    // ]);
                
        } catch (\PDOException $e){
			App::getMessages()->addMessage(new Message("Brak wyników", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
                App::getSmarty()->assign('results',$this->isHotel);
                App::getSmarty()->display("generic.tpl");	
                
			// else {
			// 	$isAccountUser = App::getDB()->has("kontakt", array("[><]users" => array("idkontakt" => "kontakt_idkontakt")),
			// array("AND" => array("kontakt.email" => $this->form->login, "users.haslo" => $this->form->pass, "users.czy_admin" => 0)));

			// 		if($isAccountUser)
			// 		{
			// 			RoleUtils::addRole('user');
			// 		}
			// 		else{
			// 			App::getMessages()->addMessage(new Message("Niepoprawny login lub hasło", Message::ERROR ));
			// 		}
			// }
        }
        public function validateShow(){
            $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wykonanie aplikacji');
            return !App::getMessages()->isError();
        }
        public function action_hotelShow(){
            if($this->validateShow()){
			
                try{
                    $this->selHotel = App::getDB()->select("miasto", array("[><]hotel" => array("idmiasto" => "miasto_idmiasto")),
                    array("hotel.id","hotel.nazwa(hotname)","miasto.nazwa", "hotel.cena_za_noc", "miasto.kraj","hotel.gwiazdki", "hotel.zdjecie"), array("hotel.id" => $this->form->id));
                } catch (\PDOException $e){
                    App::getMessages()->addMessage(new Message("Brak wyników", Message::ERROR )) ;
                        if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());
                }
                App::getSmarty()->assign('hotel',$this->selHotel);
                App::getSmarty()->display("hotel.tpl");	
            }
        }
}
