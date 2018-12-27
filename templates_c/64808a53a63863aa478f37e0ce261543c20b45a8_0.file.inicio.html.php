<?php
/* Smarty version 3.1.30, created on 2018-12-05 17:54:22
  from "C:\xampp2\htdocs\Arbomex\Celaya\SabanaFundicionCambios\templates\inicio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c08652e252055_71265141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64808a53a63863aa478f37e0ce261543c20b45a8' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Arbomex\\Celaya\\SabanaFundicionCambios\\templates\\inicio.html',
      1 => 1544054059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5c08652e252055_71265141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="">
    <div class="content-wrapper">
        <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button id="btnShowModalAddElement" style="margin-left: 5px; margin-top: 5px;" type="button" class="btn btn-success btn-min-width mr-1 mb-1">Agregar</button>
                        <h4 class="card-title"></h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <!--<div class="heading-elements" style="margin-top: -50px; background: transparent">-->

                            <ul class="list-inline mb-0">
                                <li><a><input id="txtBuscar" class="mainLoginInput" type="text" placeholder="&#61442; Buscar..."></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show" style="margin-top: -30px">
                        <div class="table-responsive" id="tabla">
                            <table class="table" id="tableData" style="text-align: center;">
                                <thead class="thead-dark">
                                <tr>
                                    <th colspan="17">Reporte metalurgico de ollas coladas</th>
                                    <th colspan="13">Análisis quimico</th>
                                    <th colspan="2">Determ. C & S</th>
                                    <th colspan="2">Temperatura</th>
                                    <th colspan="2">Inoculante</th>
                                    <th colspan="7">Referencias notas</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Turno</th>
                                    <th>No. Olla</th>
                                    <th>Familia</th>
                                    <th>Modelo</th>
                                    <th>Cavidad</th>
                                    <th>Dureza</th>
                                    <th>% Nodularidad</th>
                                    <th>NOD/mm2</th>
                                    <th>% Perlita</th>
                                    <th>% Ferrita</th>
                                    <th>% Carburos</th>
                                    <th>Grafito tipo</th>
                                    <th>Grafito tamaño</th>
                                    <th>Esteadita</th>
                                    <th>% Si</th>
                                    <th>% Mn</th>
                                    <th>% P</th>
                                    <th>% Mg</th>
                                    <th>% Cr</th>
                                    <th>% Ni</th>
                                    <th>% Mo</th>
                                    <th>% Cu</th>
                                    <th>% Al</th>
                                    <th>% Ti</th>
                                    <th>% V</th>
                                    <th>% Sn</th>
                                    <th>% Pb</th>
                                    <th>% C</th>
                                    <th>% S</th>
                                    <th>Sangrado °C</th>
                                    <th>Vaciado °C</th>
                                    <th>Kg</th>
                                    <th>Tiempo</th>
                                    <th>Dia</th>
                                    <th>Semana</th>
                                    <th>Mes</th>
                                    <th>Año</th>
                                    <th>Hoja inspección</th>
                                    <th>Usuario</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table head options end -->
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:pie.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
