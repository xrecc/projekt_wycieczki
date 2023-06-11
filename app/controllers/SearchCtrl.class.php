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
class SearchCtrl {
    
    public function action_searchShow() {
		             
        App::getSmarty()->display("search.html");
        
    }
    
}
