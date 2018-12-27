<?php
/* Smarty version 3.1.30, created on 2018-11-27 15:45:09
  from "C:\xampp2\htdocs\Arbomex\Celaya\SabanaFundicion\templates\inicio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bfdbae585fa51_15622068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '402b08e9b2996a45228d1420418e7f5a475388c6' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Arbomex\\Celaya\\SabanaFundicion\\templates\\inicio.html',
      1 => 1543355040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5bfdbae585fa51_15622068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <button id="btnShowModalAddElement" type="button" class="btn btn-success btn-min-width mr-1 mb-1">Agregar</button>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Registros actuales</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">

                        <div class="table-responsive">
                            <table class="table" id="tableData" style="text-align: center">
                                <thead class="thead-dark">
                                <tr>
                                    <th rowspan="2">Fecha</th>
                                    <th rowspan="2">Turno</th>
                                    <th colspan="12">Reporte metalurgico de ollas coladas</th>
                                    <th colspan="13">Análisis quimico</th>
                                    <th colspan="2">Determ. C & S</th>
                                    <th colspan="2">Temperatura</th>
                                    <th colspan="2">Inoculante</th>
                                    <th colspan="6">Referencias notas</th>
                                </tr>
                                <tr>
                                    <th>No. Olla</th>
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
                                    <th>Familia</th>
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
