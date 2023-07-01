<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use app\forms\SignupForm;
use PDOException;
use core\Validator;
use app\forms\HotelForm;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class ReservationCtrl {
    private $form;
	private $records;
	private $resHotel;
	
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
	
	// public function validate() {
	// 	if (! (isset ( $this->form->pass ) && isset ( $this->form->name ) && isset ( $this->form->surname ) && isset ( $this->form->email ) && isset ( $this->form->phonenumber ))) {
	// 		return false;
	// 	}
			
	// 	if (! App::getMessages()->isError ()) {
			
	// 		if ($this->form->pass == "") {
	// 			App::getMessages()->addMessage(new Message("Nie podano hasła", Message::ERROR )) ;
	// 		}
    //         if ($this->form->name == "") {
	// 			App::getMessages()->addMessage(new Message("Nie podano imienia", Message::ERROR )) ;
	// 		}
    //         if ($this->form->surname == "") {
	// 			App::getMessages()->addMessage(new Message("Nie podano nazwiska", Message::ERROR )) ;
	// 		}
    //         if ($this->form->email == "") {
	// 			App::getMessages()->addMessage(new Message("Nie podano adresu email", Message::ERROR )) ;
	// 		}
    //         if ($this->form->phonenumber == "") {
	// 			App::getMessages()->addMessage(new Message("Nie podano numeru telefonu", Message::ERROR )) ;
	// 		}
	// 	}
	// 	$v = new Validator();
	// 	$this->form->phonenumber = $v ->validateFromRequest('phonenumber', [
	// 		'numeric' => true,
	// 		'validator_message' => 'Możesz podawać tylko liczby'
	// 	]
	// 	);
		
	// 	return ! App::getMessages()->isError();
	// }
    // public function action_signup(){
	// 	$this->getParams();	
	// 	if ($this->validate()) {
	// 		try {
	// 			App::getDB()->insert("kontakt", [
	// 				"email" => $this->form->email,
	// 				"numer_telefonu" => $this->form->phonenumber
	// 			]);
				
	// 			App::getDB()->insert("users", [
	// 				"imie" => $this->form->name,
	// 				"nazwisko" => $this->form->surname,
	// 				"haslo" => $this->form->pass,
    //                 "czy_admin" => $this->form->isAdmin,
	// 				"kontakt_idkontakt" => App::getDB()->id("kontakt")
	// 			]);
					
	// 		} catch (PDOException $e){
	// 			App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas zapisu rekordu", Message::ERROR )) ;
	// 			if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());			
	// 		}
			
	// 		$this->generateView();

	// 	} else {
	// 		$this->action_signupShow();	
	// 	}		
	// }
    // public function generateView(){
    //     App::getSmarty()->display('general.tpl');
    // }
    // public function action_signupShow() {
		               
    //     App::getSmarty()->display("signup.tpl");
        
    // }
    public function action_reservationNew() {
		              
        try{
            $this->records = App::getDB()->select("hotel", [
                "@nazwa"
            ]);

        } catch (PDOException $e){
            App::getMessages()->addMessage(new Message("Wystąpił nieoczekiwany błąd podczas zapisu rekordu", Message::ERROR )) ;
                if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
        }	
         
        App::getSmarty()->assign('hotel',$this->records);         
        App::getSmarty()->display("rezerwacja.tpl");
        
    }
	public function action_reservationSave(){
		$this->getParams();	
        try{
            $this->resHotel = App::getDB()->get("hotel", [], array("idhotel"), array("nazwa" => $this->form->nazwa));
	} catch (PDOException $e){
		App::getMessages()->addMessage(new Message("Brak wyników", Message::ERROR )) ;
			if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
	}	
			App::getSmarty()->assign('rHotel',$this->resHotel);
			App::getSmarty()->display("generic.tpl");	
}
}