<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Pok&eacute;lect - <?=$sub_title;?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?=base_url();?>res/css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="shortcut icon" href="<?=base_url();?>res/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?=base_url();?>res/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url();?>res/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url();?>res/img/apple-touch-icon-114x114.png">

</head>
<body style="margin-top: 75px;">
    <header id="main-bar" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
                <a href="<?=base_url();?>" class="navbar-left">
                    <img src="<?=base_url();?>res/img/logos/pokelect-logo-2x.png" width="150" height="45" />
                </a>
                <ul class="nav navbar-nav navbar-left">
                <li><?=anchor('site/about','<i class="fa fa-info-circle"></i> About');?></li>
                    <li><?=anchor('site/contact','<i class="fa fa-envelope"></i> Contact');?></li>
                    <li><?=anchor('site/faq','<i class="fa fa-info-circle"></i> FAQ\'s');?></li>
                </ul>
            <ul class="nav navbar-nav nav-pills navbar-right">
                <?php if($this->session->userdata('is_logged_in')):?>
                    <li><?=anchor('store/basket','<i class="fa fa-shopping-cart"></i>');?></li>
                    <li><?=anchor('site/members_area','<i class="fa fa-user"></i> My Profile <b class="caret"></b>');?></li>
                    <li><?=anchor('user/logout','<i class="fa fa-power-off"></i>');?></li>
                <?php else: ?>
                   <li class="basket"><?=anchor('store/basket','<i class="fa fa-shopping-cart"></i> Basket','class="dropdown" data-toggle="dropdown"');?></a>
                        <ul id="menu-basket" class="dropdown-menu" role="menu" arialabelledby="basket">
                            <li><?=anchor('store/basket','<i class="fa fa-shopping-cart"></i> 0 Items in Your Basket');?></li>
                        </ul>
                    </li>
                    <li class="power"><a href="#" class="dropdown" data-toggle="dropdown"><i class="fa fa-power-off"></i></a>
                        <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="power">
                            <li><?=anchor('user/login','Login');?></li>
                            <li><?=anchor('user/register','Register');?></li>
                        </ul>
                    </li>
                <?php endif; ?>
                </ul>
            </div>
        </nav>
        <div class="clearfix" />
    </header>
    <div class="container">