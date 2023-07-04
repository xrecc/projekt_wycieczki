<?php

namespace app\controllers;

use core\App;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class AdminPanelCtrl {
    
    public function action_adminpanelShow() {
		             
        $this->generateView();
        
    }
    public function generateView(){
        App::getSmarty()->display("adminpanel.tpl");
    }
    
}
