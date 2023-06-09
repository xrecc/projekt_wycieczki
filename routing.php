<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('generalShow'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('generalShow', 'GeneralCtrl');

Utils::addRoute('adminpanelShow', 'AdminPanelCtrl',["admin"]);

Utils::addRoute('elementsShow', 'ElementsCtrl');

Utils::addRoute('signupShow', 'SignupCtrl');
Utils::addRoute('signup', 'SignupCtrl');

Utils::addRoute('hotelShow', 'SearchCtrl',["user", "admin"]);
Utils::addRoute('hotelList', 'HotelListCtrl',["admin"]);
Utils::addRoute('hotelEdit', 'HotelListCtrl',["admin"]);
Utils::addRoute('hotelUpdate', 'HotelListCtrl',["admin"]);
Utils::addRoute('hotelDelete', 'HotelListCtrl' ,["admin"]);

Utils::addRoute('usersList',    'ListCtrl');
Utils::addRoute('usersListPart','ListCtrl');

Utils::addRoute('reservationSave', 'ReservationCtrl',["user", "admin"]);
Utils::addRoute('reservationNew', 'ReservationCtrl',["user", "admin"]);
Utils::addRoute('reservationList', 'ReservationListCtrl',["admin"]);
Utils::addRoute('reservationUser', 'ReservationListCtrl',["user", "admin"]);
Utils::addRoute('reservationDelete', 'ReservationListCtrl' ,["admin"]);

Utils::addRoute('resultList', 'ListCtrl' ,["admin"]);
Utils::addRoute('resultEdit', 'ListCtrl' ,["admin"]);
Utils::addRoute('resultDelete', 'ListCtrl' ,["admin"]);
Utils::addRoute('resultUpdate', 'ListCtrl' ,["admin"]);

Utils::addRoute('searchHotel',    'SearchCtrl');
Utils::addRoute('searchHotelPart','SearchCtrl');
Utils::addRoute('searchResult', 'SearchCtrl');
Utils::addRoute('searchShow', 'SearchCtrl');
Utils::addRoute('searchHotelList',    'HotelListCtrl',["admin"]);
Utils::addRoute('searchHotelListPart','HotelListCtrl',["admin"]);
Utils::addRoute('searchReservationList',    'ReservationListCtrl',["admin"]);
Utils::addRoute('searchReservationListPart','ReservationListCtrl',["admin"]);

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
//Utils::addRoute('action_name', 'controller_class_name');