<?php
/* Smarty version 3.1.30, created on 2018-11-27 00:47:37
  from "C:\xampp2\htdocs\arbomex\Celaya\SabanaFundicion\templates\cabecera.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bfc8619834f35_82446266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72e75830210e76aa839e5959c9a66569ed5b5d59' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\arbomex\\Celaya\\SabanaFundicion\\templates\\cabecera.html',
      1 => 1543276055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfc8619834f35_82446266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Sabana Fundición</title>
    <link rel="apple-touch-icon" href="../theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="../css/jquery-ui.css" rel="stylesheet"  />
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!--BEGIN DATATABLE-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <!--END DATATABLE-->
    <!-- BEGIN Custom CSS-->

    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online">
                                <img src="../theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right"><a class="dropdown-item" href="#">
                                <span class="avatar avatar-online"><img src="../theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar">
                                <span class="user-name text-bold-700 ml-1"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></span></a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-unlock"></i>Cambiar contraseña</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="../admin/Login.php?action=salir"><i class="ft-power"></i> Salir</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="Chameleon admin logo" src="../images/logo_circulo.png"/>
                <h3 class="brand-text">Sabana Fundición</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active"><a href="index.html"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="charts.html"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Charts</span></a>
            </li>
            <li class=" nav-item"><a href="icons.html"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Icons</span></a>
            </li>
            <li class=" nav-item"><a href="cards.html"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Cards</span></a>
            </li>
            <li class=" nav-item"><a href="buttons.html"><i class="ft-box"></i><span class="menu-title" data-i18n="">Buttons</span></a>
            </li>
            <li class=" nav-item"><a href="typography.html"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Typography</span></a>
            </li>
            <li class=" nav-item"><a href="tables.html"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Tables</span></a>
            </li>
            <li class=" nav-item"><a href="form-elements.html"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Form Elements</span></a>
            </li>
            <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
            </li>
        </ul>
    </div>
    <div class="navigation-background"></div>
</div>

<?php }
}
