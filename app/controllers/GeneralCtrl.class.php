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
class GeneralCtrl {
    
    public function action_generalShow() {
		              
        
        App::getSmarty()->display("general.tpl");
        
    }
    
}
