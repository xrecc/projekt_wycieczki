<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;

class ReservationListCtrl {

	private $records; 
	private $databet;

	public function action_reservationList(){
		
		try{
			$this->records = App::getDB()->select("rezerwacja", array("[><]hotel" => array("hotel_idhotel" => "idhotel"), "[><]users" => array("users_idusers" => "idusers"), "[><]kontakt" => array("users.kontakt_idkontakt" => "idkontakt")),
			array("hotel.idhotel","hotel.nazwa", "hotel.cena_za_noc", "hotel.all_inclusive", "users.imie","users.nazwisko", "kontakt.email", "kontakt.numer_telefonu"));

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
		 
		App::getSmarty()->assign('rezerwacja',$this->records); 
		App::getSmarty()->assign('aaa', $this->databet); 
		App::getSmarty()->display('listarezerwacji.html');
	}
}