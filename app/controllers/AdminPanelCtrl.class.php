<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class AdminPanelCtrl {
    
    public function action_adminpanelShow() {
		             
        App::getSmarty()->display("adminpanel.tpl");
        
    }
    
}
