<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('generalShow'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('generalShow', 'GeneralCtrl');
Utils::addRoute('searchShow', 'SearchCtrl');
Utils::addRoute('adminpanelShow', 'AdminPanelCtrl',["admin"]);
Utils::addRoute('hotelList', 'HotelListCtrl',["admin"]);
Utils::addRoute('reservationList', 'ReservationListCtrl',["admin"]);
Utils::addRoute('elementsShow', 'ElementsCtrl');
Utils::addRoute('searchResult', 'SearchCtrl');
Utils::addRoute('reservationNew', 'ReservationCtrl',["user", "admin"]);
Utils::addRoute('hotelShow', 'SearchCtrl',["user", "admin"]);
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('signupShow', 'SignupCtrl');
Utils::addRoute('signup', 'SignupCtrl');
Utils::addRoute('resultList', 'ListCtrl' ,["admin"]);
//Utils::addRoute('action_name', 'controller_class_name');