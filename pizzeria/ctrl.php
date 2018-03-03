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
	case 'user/order':
	    control('/controllers/user/','OrdersController','generateView',['user']);
	case 'user/order/add':
	    control('/controllers/user/','OrdersController','addToOrder',['user']);
	case 'user/order/remove':
	    control('/controllers/user/','OrdersController','removeFromOrder',['user']);
	case 'user/order/send':
	    control('/controllers/user/','OrdersController','sendOrder',['user']);
	case 'user/order/confirm':
	    control('/controllers/user/','ConfirmOrderController','generateView',['user']);
	case 'user/order/completed':   
	    control('/controllers/user/','CompletedOrderController','generateView',['user']);
	case 'user/order-status':
	    control('/controllers/user/','OrderStatusController','generateView',['user']);
	    
	    
	case 'admin/home':
	    control('/controllers/admin/','HomeController','generateView',['admin']);
	case 'admin/products':
	    control('/controllers/admin/','ProductsController','generateView',['admin']);
	case 'admin/products-action':
	    control('/controllers/admin/','ProductsController','action',['admin']);
	case 'admin/history':
	    control('/controllers/admin/','HistoryController','generateView',['admin']);
	case 'admin/orders/waiting-orders':
	    control('/controllers/admin/orders/','WaitingOrdersController','generateView',['admin']);
	case 'admin/orders/queue-of-orders':
	    control('/controllers/admin/orders/','QueueOfOrdersController','generateView',['admin']);
	case 'admin/orders/queue-of-orders-preparing':
	    control('/controllers/admin/orders/','QueueOfOrdersController','prepareOrder',['admin']);
	case 'admin/orders/preparing-orders':
	    control('/controllers/admin/orders/','PreparingOrdersController','generateView',['admin']);
	case 'admin/orders/preparing-orders-ready':
	    control('/controllers/admin/orders/','PreparingOrdersController','orderReady',['admin']);
	case 'admin/orders/ready-orders':
	    control('/controllers/admin/orders/','ReadyOrdersController','generateView',['admin']);
	case 'admin/orders/ready-orders-action':
	    control('/controllers/admin/orders/','ReadyOrdersController','action',['admin']);
	case 'admin/orders/sended-orders':
	    control('/controllers/admin/orders/','SendedOrdersController','generateView',['admin']);
	case 'admin/orders/sended-orders-action':
	    control('/controllers/admin/orders/','SendedOrdersController','action',['admin']);
	case 'admin/orders/order-details':
	    control('/controllers/admin/orders/','OrderDetailsController','generateView',['admin']);
	case 'admin/orders/order-details-state':
	    control('/controllers/admin/orders/','OrderDetailsController','action',['admin']);
	default :
		control('/controllers/main/','HomeController','generateView');
}