<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('loginShow'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('generalShow', 'GeneralCtrl' ,["user", "admin"]);
Utils::addRoute('searchShow', 'SearchCtrl');
Utils::addRoute('adminpanelShow', 'AdminPanelCtrl');
Utils::addRoute('hotelList', 'HotelListCtrl');
Utils::addRoute('reservationList', 'ReservationListCtrl');
Utils::addRoute('elementsShow', 'ElementsCtrl');
Utils::addRoute('searchResult', 'SearchCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('signupShow', 'SignupCtrl');
Utils::addRoute('signup', 'SignupCtrl');
Utils::addRoute('resultList', 'ListCtrl' ,["admin"]);
//Utils::addRoute('action_name', 'controller_class_name');