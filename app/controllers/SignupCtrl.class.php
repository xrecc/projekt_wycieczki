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
class SignupCtrl {
    
    public function action_signupShow() {
		               
        App::getSmarty()->display("signup.html");
        
    }
    
}