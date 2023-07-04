<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use app\forms\Form;
use core\SessionUtils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class ElementsCtrl {
    private $recordshotel; 
	private $form;
	public function __construct(){
		$this->form = new Form();
	}

	public function getParams(){
		$this->form->id = ParamUtils::getFromGet('id');
		SessionUtils::store("hotelID", $this->form->id);
	}
    public function action_elementsShow() {
		$this->getParams();
        try{
			$this->recordshotel = App::getDB()->select("hotel", array("[><]kontakt" => array("kontakt_idkontakt" => "idkontakt"), "[><]miasto" => array("miasto_idmiasto" => "idmiasto")),
			array("hotel.idhotel","hotel.nazwa","hotel.gwiazdki","hotel.data_powstania","hotel.cena_za_noc","hotel.basen","hotel.all_inclusive","hotel.zdjecie","kontakt.numer_telefonu", "miasto.nazwa(nazwamiasta)", "miasto.kraj"), array("hotel.idhotel" => $this->form->id));

		} catch (\PDOException $e){
			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas wyświetlania hoteli", Message::ERROR )) ;
				if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
		 
		App::getSmarty()->assign('hotel',$this->recordshotel); 
		App::getSmarty()->display('hotel.tpl');
	}
        
    
}