<?php /* Smarty version Smarty-3.1.17, created on 2018-02-14 17:57:53
         compiled from "D:\xampp\htdocs\pizzeria\views\main\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:18648398995a83851992ce25-83548328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04f0761b839eee23aedafc561a1d63d3067c8801' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pizzeria\\views\\main\\menu.html',
      1 => 1518532985,
      2 => 'file',
    ),
    '0f125a840b4bfcda1702d31d40c4323206de8124' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pizzeria\\templates\\main.html',
      1 => 1518627109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18648398995a83851992ce25-83548328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5a838519a87e29_38433871',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a838519a87e29_38433871')) {function content_5a838519a87e29_38433871($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Pizzeria</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7cZilla+Slab:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
   <!-- top-bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-5 hidden-xs">
                    <div class="support-bar">
                        <span class="support-icon"><i class="icon-circular-clock"></i></span>
                        <p class="support-text">
                            Mon to Fri : 11:00am - 11:00pm
                            <br> Sat to Sun : 10:00am - 12:00pm
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2 col-xs-12">
                    <div class="logo">
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home">
                    		<h1>
	                    		<img src="./images/pizza-logo.png" alt="">
	                    		PIZZERIA NONAME
	                    		<img src="./images/pizza-logo.png" alt="">
                    		</h1>	
                    	</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 hidden-xs">
                    <div class="support-bar">
                        <div class="support-icon"><i class="fa fa-home"></i></div>
                        <p class="support-text"> City, Street 123
                            <br> 000 000 000
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.top-bar -->
    <!-- header-section-->
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- navigations-->
                    <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home">Home</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
menu">Menu</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
gallery">Gallery</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
about">About</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registration">Registration</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
    <!-- menu -->

	

<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>Menu</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Pizzas -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="menu-block">
              	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                  	<h3 class="menu-title">Pizzas</h3>
                  </div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                  	<h3 class="menu-title">25cm</h3>
                  </div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                  	<h3 class="menu-title">35cm</h3>
                  </div>
                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                  	<h3 class="menu-title">45cm</h3>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                  	<h3 class="menu-title">Rating</h3>
                  </div>
                  <div class="menu-content">
                  
                  <?php  $_smarty_tpl->tpl_vars['pizza'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pizza']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pizzas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pizza']->key => $_smarty_tpl->tpl_vars['pizza']->value) {
$_smarty_tpl->tpl_vars['pizza']->_loop = true;
?>
					<div class="row"><div class="col-lg-1 col-md-1 col-sm-1 col-xs-4"><div class="dish-img"><a href="#"><img src="./images/menu_dish_1.jpg" alt="" class="img-circle"></a></div></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-8"><div class="dish-content"><h5 class="dish-title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['pizza']->value["name"];?>
</a></h5><span class="dish-meta"><?php echo $_smarty_tpl->tpl_vars['pizza']->value["description"];?>
</span></div></div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-3"><div class="dish-price"><p>$<?php echo $_smarty_tpl->tpl_vars['pizza']->value["price"]*0.7;?>
</p></div></div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-3"><div class="dish-price"><p>$<?php echo $_smarty_tpl->tpl_vars['pizza']->value["price"];?>
</p></div></div><div class="col-lg-1 col-md-1 col-sm-1 col-xs-2"><div class="dish-price"><p>$<?php echo $_smarty_tpl->tpl_vars['pizza']->value["price"]*1.4;?>
</p></div></div><div class="col-lg-2 col-md-2 col-sm-2 col-xs-3"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div></div>
					<?php } ?>
                      
                  </div>
              </div>
          </div>
          <!-- /Pizzas-->
        </div>
    </div>
</div>

    <!-- /.menu -->
  
   
    <!-- footer -->
    <div class="footer">
        <!-- tiny-footer -->
        <div class="container">
            <div class="row">
                <div class="tiny-footer">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Copyright © 
                        	<a href="https://github.com/marcinseweryn" target="_blank" class="copyrightlink">Marcin Seweryn</a>
                       		 All Rights Reserved 
                         	<br> Template Design by
                            <a href="https://easetemplate.com/" target="_blank" class="copyrightlink">EaseTemplate</a>
                    	</p>
                    </div>
                </div>
            </div>
            <!-- /. tiny-footer -->
        </div>
    </div>
    <!-- /.footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/sticky-header.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/multiple-carousel.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/date.js"></script>
</body>

</html><?php }} ?>
