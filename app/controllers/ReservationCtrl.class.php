<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\SessionUtils;
use PDOException;
use core\Validator;
use app\forms\Form;

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
		$this->form = new Form();
	}
	
	public function getParams(){
		$this->form->kraj = ParamUtils::getFromRequest('kraj');
		$this->form->nazwa = ParamUtils::getFromRequest('nazwa');
        $this->form->gwiazdki = ParamUtils::getFromRequest('gwiazdki');
        $this->form->amount = ParamUtils::getFromRequest('amount');
        $this->form->hotname = ParamUtils::getFromRequest('hotname');
	}
	public function validate(){
		$today = date('Y-m-d');
		if (! App::getMessages()->isError ()) {
			
			if ($this->form->startdate < $today) {
				App::getMessages()->addMessage(new Message("Nie możesz podawać daty z przeszłości", Message::ERROR )) ;
			}
			if ($this->form->enddate <= $this->form->startdate) {
				App::getMessages()->addMessage(new Message("Data zakończenia musi być większa od daty początkowej", Message::ERROR )) ;
			}
		}
		return ! App::getMessages()->isError();
	}
	public function validateSave(){		
		$v = new Validator();
		$startdate = $v->validateFromPost('startdate', [
            'trim' => true,
            'required' => true,
            'required_message' => "Wprowadź datę rozpoczęcia wycieczki",
            'date_format' => 'Y-m-d',
            'validator_message' => "Niepoprawny format daty. Przykład: 2023-08-24"
        ]);
		$enddate = $v->validateFromPost('enddate', [
            'trim' => true,
            'required' => true,
            'required_message' => "Wprowadź datę zakończenia wycieczki",
            'date_format' => 'Y-m-d',
            'validator_message' => "Niepoprawny format daty. Przykład: 2023-08-24"
        ]);
		if ($v->isLastOK()) {
            $this->form->startdate = $startdate->format('Y-m-d');
			$this->form->enddate = $enddate->format('Y-m-d');
        }
		
		return !App::getMessages()->isError();
	}
	public function action_reservationSave(){
		$this->getParams();	
		if ($this->validateSave() && $this->validate()) {
        try{
			App::getDB()->insert("rezerwacja", [				
				"data_start" => $this->form->startdate,
				"data_end" => $this->form->enddate,
				"hotel_idhotel" => SessionUtils::load("hotelID", true),
				"users_idusers" => implode(SessionUtils::load('id', true))
			]);
	} catch (PDOException $e){
		App::getMessages()->addMessage(new Message("Błąd podczas rezerwacji", Message::ERROR )) ;
			if (App::getConf()->debug) App::getMessages()->addMessage($e->getMessage());				
		}	
		$this->generateView();
	}
	
}
	public function generateView(){
		App::getRouter()->forwardTo('generalShow');	
	}
}