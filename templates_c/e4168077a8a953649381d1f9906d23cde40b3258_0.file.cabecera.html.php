<?php
/* Smarty version 3.1.30, created on 2018-12-04 12:04:12
  from "C:\xampp2\htdocs\Arbomex\Celaya\SabanaFundicionCambios\templates\cabecera.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c06c19c386899_23741456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4168077a8a953649381d1f9906d23cde40b3258' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Arbomex\\Celaya\\SabanaFundicionCambios\\templates\\cabecera.html',
      1 => 1543946623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c06c19c386899_23741456 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css">
    <!--END DATATABLE-->
    <!-- BEGIN Custom CSS-->
    <style>

        body {
            overflow-x: hidden;
        }

        #tableData_filter{
            margin-top: -23px;
            margin-left: 1040px;
            z-index: 5;
            position: fixed;
            visibility: hidden;
        }

        .dt-buttons {
            visibility: hidden;
        }
    </style>
    <style>
        @import "//netdna.bootstrapcdn.com/font-awesome/3.0/css/font-awesome.css";

        .mainLoginInput{
            height: 25px;
            width: 150px;
            padding: 0px;
            font-size: 15px;
            margin: 5px 0;
        }

        .mainLoginInput::-webkit-input-placeholder {
            font-family: FontAwesome;
            font-weight: normal;
            overflow: visible;
            vertical-align: top;
            display: inline-block !important;
            padding-left: 5px;
            padding-top: 2px;
            color: hsl(9, 40%, 60%);
        }

        .mainLoginInput::-moz-placeholder  {
            font-family: FontAwesome;
            font-weight: normal;
            overflow: visible;
            vertical-align: top;
            display: inline-block !important;
            padding-left: 5px;
            padding-top: 2px;
            color: hsl(9, 40%, 60%);
        }

        .mainLoginInput:-ms-input-placeholder  {
            font-family: FontAwesome;
            font-weight: normal;
            overflow: visible;
            vertical-align: top;
            display: inline-block !important;
            padding-left: 5px;
            padding-top: 2px;
            color: hsl(9, 40%, 60%);
        }
    </style>
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-block d-md-none">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-download"></i><span class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <div class="arrow_box">
                                <a class="dropdown-item" href="#" id="btnPdf"><i class="la la-file-pdf-o"></i> PDF</a>
                                <a class="dropdown-item" href="#" id="btnExcel"><i class="la la-file-excel-o"></i> Excel</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="avatar avatar-online">
                                <img src="../images/user.jpg" alt="avatar"><i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right"><a class="dropdown-item" href="#">
                                <span class="avatar avatar-online"><img src="../images/user.jpg" alt="avatar">
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


  <div class="main-menu menu-fixed " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg" style="height: 10px;">
    <div class="navbar-header" style="background: #262d47">
        <ul class="">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html">
                <h3 class="brand-text" style="color:white; ">Sabana Fundición</h3></a></li>
        </ul>
    </div>
    
</div>   
 
<?php }
}
