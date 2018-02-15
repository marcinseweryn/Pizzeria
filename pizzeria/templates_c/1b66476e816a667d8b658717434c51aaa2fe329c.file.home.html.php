<?php /* Smarty version Smarty-3.1.17, created on 2018-02-14 17:51:57
         compiled from "D:\xampp\htdocs\pizzeria\views\main\home.html" */ ?>
<?php /*%%SmartyHeaderCode:13975434395a83170cc21688-03427787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b66476e816a667d8b658717434c51aaa2fe329c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pizzeria\\views\\main\\home.html',
      1 => 1518361894,
      2 => 'file',
    ),
    '0f125a840b4bfcda1702d31d40c4323206de8124' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pizzeria\\templates\\main.html',
      1 => 1518627109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13975434395a83170cc21688-03427787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5a83170cc7e2d7_14502931',
  'variables' => 
  array (
    'conf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83170cc7e2d7_14502931')) {function content_5a83170cc7e2d7_14502931($_smarty_tpl) {?><!DOCTYPE html>
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

	
<!-- slider -->
<div class="slider">
       <div class="owl-carousel owl-one owl-theme">
           <div class="item">
               <div class="slider-img"> <img src="./images/slider_1.jpg" alt=""></div>
               <div class="container">
                   <div class="row">
                       <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                           <div class="slider-captions">
                               <h1 class="slider-title">Restaurant Responsive Free Template</h1>
                               <p class="slider-text hidden-sm hidden-xs">Morbi rutrum neque diamr turpis lorem ipsum dauisque.
                               </p>
                               <a href="#" class="btn btn-default btn-lg hidden-sm hidden-xs">Reserve Your Table</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="item">
               <div class="slider-img"><img src="./images/slider_2.jpg" alt=""></div>
               <div class="container">
                   <div class="row">
                       <div class="col-lg-7 col-md-12 col-sm-12  col-xs-12">
                           <div class="slider-captions">
                               <h1 class="slider-title">Vegan Restaurant Bootstrap Website Template</h1>
                               <p class="slider-text hidden-sm hidden-xs">Integer ac pharetra arcu, nec porttitor uis idleo sagittis cursus. </p>
                               <a href="#" class="btn btn-default btn-lg hidden-sm hidden-xs">Get Free Download</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="item">
               <div class="slider-img"><img src="./images/slider_3.jpg" alt=""></div>
               <div class="container">
                   <div class="row">
                       <div class="col-lg-7 col-md-12 col-sm-12  col-xs-12">
                           <div class="slider-captions">
                               <h1 class="slider-title">Vegiterian Restaurant Free Website
</h1>
                               <p class="slider-text hidden-sm hidden-xs">Duisac semper lacus,at fringilla arcuuspendisse arcu ipsum. </p>
                               <a href="#" class="btn btn-default btn-lg hidden-sm hidden-xs">Download Now</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- /.slider -->
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
            <!-- starter -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="menu-block">
              	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                  	<h3 class="menu-title">Starter</h3>
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
                      <div class="row">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                              <div class="dish-img"><a href="#"><img src="./images/menu_dish_1.jpg" alt="" class="img-circle"></a></div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                              <div class="dish-content">
                                  <h5 class="dish-title"><a href="#">Aloo and Dal ki Tikki</a></h5>
                                  <span class="dish-meta">Onion  /  Tomato</span>
                                 
                               </div>
                           </div>
                                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3">
                                   <div class="dish-price">
                                   	<p>$10</p>
                               	</div>
                               </div>
                               <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3">
                               	<div class="dish-price">
                                   	<p>$12</p>
                              		</div>
                              	</div>
                              	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                               	<div class="dish-price">
                                   	<p>$15</p>
                               	</div>
                               </div>
                               <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                              		<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
                               </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                              <div class="dish-img"><a href="#"><img src="./images/menu_dish_1.jpg" alt="" class="img-circle"></a></div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="dish-content">
                                  <h5 class="dish-title"><a href="#">Aloo and Dal ki Tikki</a></h5>
                                  <span class="dish-meta">Onion  /  Tomato</span>
                                 
                               </div>
                           </div>
                                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                                   <div class="dish-price">
                                   	<p>$10</p>
                               	</div>
                               </div>
                               <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                               	<div class="dish-price">
                                   	<p>$12</p>
                              		</div>
                              	</div>
                              	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                               	<div class="dish-price">
                                   	<p>$15</p>
                               	</div>
                               </div>
                               <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              		<i class="glyphicon glyphicon-star"></i>
                               </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                              <div class="dish-img"><a href="#"><img src="./images/menu_dish_1.jpg" alt="" class="img-circle"></a></div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="dish-content">
                                  <h5 class="dish-title"><a href="#">Aloo and Dal ki Tikki</a></h5>
                                  <span class="dish-meta">Onion  /  Tomato</span>
                                 
                               </div>
                           </div>
                                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                                   <div class="dish-price">
                                   	<p>$10</p>
                               	</div>
                               </div>
                               <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                               	<div class="dish-price">
                                   	<p>$12</p>
                              		</div>
                              	</div>
                              	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                               	<div class="dish-price">
                                   	<p>$15</p>
                               	</div>
                               </div>
                               <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                              		<i class="glyphicon glyphicon-star"></i>
                               </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /.starter -->
        </div>
    </div>
</div>
<!-- /.menu -->

<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-4 col-sm-5 col-xs-12">
                <div class="widget-schedule">
                    <div class="schedule-content">
                        <h3 class="schedule-title">Pizzeria Opening Hours</h3>
                        <div class="schedule-icon">
                            <i class="icon-cutlery-set-of-three-pieces"></i>
                        </div>
                        <div class="schedule-time">
                            <h5 class="time-title">Monday - Friday</h5>
                            <p>11:00 AM to 11:00 PM</p>
                        </div>
                        <div class="schedule-time">
                            <h5 class="time-title">Saturday - Sunday</h5>
                            <p>10:00 AM to 12:00 PM</p>
                        </div>
                        <div class="schedule-line"></div>
                        <div class="schedule-call">000 000 000</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="book-form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h2 class="mb30">Login</h2>

                        </div>
                        <form>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="login"> Login</label>
                                    <input id="login" type="text" placeholder="Login" class="form-control" required>
                                </div>
                            </div>
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only" for="password"> Password</label>
                                    <input id="password" type="p" placeholder="Password" class="form-control" required>
                                </div>
                            </div>
                           
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <button type="submit" name="log-in" class="btn btn-primary">LOG IN</button>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <button type="submit" name="register" class="btn btn-primary">Registration</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
