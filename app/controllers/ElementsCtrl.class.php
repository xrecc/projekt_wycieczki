<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\HotelForm;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class ElementsCtrl {
    private $recordshotel; 
	private $form;
	public function __construct(){
		$this->form = new HotelForm();
	}

	public function getParams(){

	}
    public function action_elementsShow() {
		$this->getParams();
        try{
			$this->recordshotel = App::getDB()->select("hotel", array("[><]kontakt" => array("kontakt_idkontakt" => "idkontakt")),
			array("hotel.nazwa","hotel.gwiazdki","hotel.data_powstania","hotel.cena_za_noc","hotel.basen","hotel.all_inclusive","hotel.zdjecie","kontakt.numer_telefonu"));

		} catch (\PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas zapisu rekordu", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
		 
		App::getSmarty()->assign('hotel',$this->recordshotel);  
		App::getSmarty()->display('hotel.tpl');
	}
        
    
}