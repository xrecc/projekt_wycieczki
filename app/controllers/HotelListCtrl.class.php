<?php

namespace app\controllers;

use PDOException;
use core\App;
use core\Message;
use core\ParamUtils;
use core\RoleUtils;
use app\forms\SignupForm;

class HotelListCtrl {

	private $records; 

	public function action_hotelList(){
		
		try{
			$this->records = App::getDB()->select("kontakt", array("[><]hotel" => array("idkontakt" => "kontakt_idkontakt")),
			array("hotel.idhotel","hotel.nazwa","hotel.gwiazdki","hotel.data_powstania","hotel.cena_za_noc","hotel.basen","hotel.all_inclusive", "kontakt.email","kontakt.numer_telefonu"));

		} catch (PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas zapisu rekordu", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
		 
		App::getSmarty()->assign('hotel',$this->records);  
		
		App::getSmarty()->display('listahoteli.tpl');
	}
}