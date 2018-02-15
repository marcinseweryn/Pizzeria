<?php
require_once 'init.php';

getConf()->login_action = 'login'; // akcja przekierowania dla chronionej zawartości gdy użytkownik nie zalogowany

switch ($action){
    case 'menu':
        control('/controllers/main/','MenuController','generateView');
    case 'gallery':
        control('/controllers/main/','GalleryController','generateView');
    case 'about':
        control('/controllers/main/','AboutController','generateView');
    case 'registration':
        control('/controllers/main/','RegistrationController','generateView');
    case 'register':
        control('/controllers/main/','RegistrationController','registerUser');
    case 'login':
        control('/controllers/main/','LoginController','generateView');
	case 'loginToPizzeria':
		control('/controllers/main/','LoginController','loginToPizzeria');
	case 'logoff':
	    control('/controllers/main/','LoginController','logoff');
	case 'user/home':
		control('/controllers/user/','HomeController','generateView',['user']);
	case 'user/menu':
		control('/controllers/user/','MenuController','generateView',['user']);
	case 'user/orders':
	    control('/controllers/user/','OrdersController','generateView',['user']);
	case 'user/order/pizza':
	    control('/controllers/user/','OrdersController','generateView',['user']);
	case 'personListPart': //AJAX - wysłanie samej tabeli HTMLowej
		control('/app/person/list/','PersonListCtrl','goShowPart');
	default :
		control('/controllers/main/','HomeController','generateView');
}