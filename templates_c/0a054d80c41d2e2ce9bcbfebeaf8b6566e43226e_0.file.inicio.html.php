<?php
/* Smarty version 3.1.30, created on 2018-12-27 09:23:26
  from "C:\xampp2\htdocs\Arbomex\Celaya\SabanaFundicionCambios2\templates\inicio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c24ee6e6b86a0_92782222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a054d80c41d2e2ce9bcbfebeaf8b6566e43226e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Arbomex\\Celaya\\SabanaFundicionCambios2\\templates\\inicio.html',
      1 => 1545924204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5c24ee6e6b86a0_92782222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<style>
    .requestwizard-modal{
        background: rgba(255, 255, 255, 0.8);
        box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
    }
    .requestwizard-step p {
        margin-top: 10px;
    }

    .requestwizard-row {
        display: table-row;
    }

    .requestwizard {
        display: table;
        width: 100%;
        position: relative;
    }

    .requestwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .requestwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .requestwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }

    .modal-confirm {
        color: #636363;
        width: 400px;
    }
    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }
    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }
    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }
    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }
    .modal-confirm .modal-body {
        color: #999;
    }
    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }
    .modal-confirm .modal-footer a {
        color: #999;
    }
    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }
    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }
    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        min-width: 120px;
        border: none;
        min-height: 40px;
        border-radius: 3px;
        margin: 0 5px;
        outline: none !important;
    }
    .modal-confirm .btn-info {
        background: #c1c1c1;
    }
    .modal-confirm .btn-info:hover, .modal-confirm .btn-info:focus {
        background: #a8a8a8;
    }
    .modal-confirm .btn-danger {
        background: #f15e5e;
    }
    .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }
    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }

    .demo {
        display: inline-block;
        padding: 50px;
        background-color: #fff;
        border-radius: 20px;
        color: #666;
        text-align: center;
        width: 100px;
    }

    .demo__content {
        text-align: left;
        display: inline-block;
        margin-left: -54px;
    }

    .demo__title {
        font-size: 50px;
        font-weight: bold;
        text-transform: uppercase;
        padding-bottom: 30px;
    }

    .switcher {
        position: relative;
        display: inline-block;
        cursor: pointer;
        padding-left: 100px;
        height: 40px;
        line-height: 40px;
        margin: 5px;
        font-size: 30px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .switcher input {
        display: none;
    }

    .switcher__indicator::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 40px;
        width: 40px;
        background-color: #d5d5d5;
        border-radius: 50%;
        transition: all 0.3s ease;
        -webkit-animation-name: pulsein;
        animation-name: pulsein;
        -webkit-animation-duration: 0.3s;
        animation-duration: 0.3s;
    }
    .switcher__indicator::before {
        content: "";
        position: absolute;
        top: 16px;
        left: 0;
        width: 80px;
        height: 8px;
        background-color: #d5d5d5;
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    input:checked + .switcher__indicator::after {
        background-color: #29ce9a;
        -webkit-transform: translateX(40px);
        transform: translateX(40px);
        -webkit-animation-name: pulseout;
        animation-name: pulseout;
        -webkit-animation-duration: 0.3s;
        animation-duration: 0.3s;
    }
    input:checked + .switcher__indicator::before {
        background-color: #29ce9a;
    }
    input:disabled + .switcher__indicator::after, input:disabled + .switcher__indicator::before {
        background-color: #e5e5e5;
    }

    @-webkit-keyframes pulsein {
        0%,
        100% {
            top: 0px;
            height: 40px;
            width: 40px;
        }
        50% {
            top: 6px;
            height: 28px;
            width: 52px;
        }
    }

    @keyframes pulsein {
        0%,
        100% {
            top: 0px;
            height: 40px;
            width: 40px;
        }
        50% {
            top: 6px;
            height: 28px;
            width: 52px;
        }
    }

    @-webkit-keyframes pulseout {
        0%,
        100% {
            top: 0px;
            height: 40px;
            width: 40px;
        }
        50% {
            top: 6px;
            height: 28px;
            width: 52px;
        }
    }
    @keyframes pulseout {
        0%,
        100% {
            top: 0px;
            height: 40px;
            width: 40px;
        }
        50% {
            top: 6px;
            height: 28px;
            width: 52px;
        }
    }

    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
/*    input[type='checkbox'] {
        display: block;
        margin: 20px auto
    }
    input[type='checkbox']:after{
        line-height: 1.5em;
        content: '';
        display: inline-block;
        width: 18px;
        height: 18px;
        border: 1px solid rgb(192,192,192);
        border-radius: 3px;
        background: #fff;
    }


    input[type='checkbox']:checked:after {
        content: "\f00c";
        font-family: fontawesome;
        background-color: #fff;
        color: #fff;
        text-align: center;
        font-size: 13px;
        line-height: 18px;
        background: #775BA3;
        border-color: transparent;
    }*/
</style>

<!---- Modal show info--->
<div class="modal" id="modalinfo" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Información</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active"  id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Reporte Metalurgico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Análisis Químico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Temperatura e Inoculante</a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <form id="formMetalurgico">
                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>Fecha</label>
                                    <input id="inputFecha" type="text" class="form-control" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Turno</label>
                                    <input id="inputTurno" type="text" class="form-control" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Familia</label>
                                    <select disabled id="selectFamilia" class="form-control" onchange="obtenerModelosUpdate()">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['familias']->value, 'familia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['familia']->value) {
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['familia']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['familia']->value['familia'];?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label>Modelo</label>
                                    <select disabled id="selectModelo" class="form-control" onchange="obtenerModelos()">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modelos']->value, 'modelo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['modelo']->value) {
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['familia']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['modelo']->value['modelo'];?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </select>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>No. Olla</label>
                                    <input id="inputOlla" name="inputOlla" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Cavidad</label>
                                    <input id="inputCavidad" name="inputCavidad" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Dureza Min</label>
                                    <input id="inputDurezaMin" name="inputDurezaMin" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Dureza Max</label>
                                    <input id="inputDurezaMax" name="inputDurezaMax" type="text" class="form-control onlynum" disabled>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>% Nodularidad</label>
                                    <input id="inputNodularidad" name="inputNodularidad" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>NOD/mm2</label>
                                    <input id="inputNod" name="inputNod" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Perlita</label>
                                    <input id="inputPerlita" name="inputPerlita" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Ferrita</label>
                                    <input id="inputFerrita" name="inputFerrita" type="text" class="form-control onlynum" disabled>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>% Carburos</label>
                                    <input id="inputCarburos" name="inputCarburos" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Tipo Grafito</label>
                                    <input id="inputTipoGrafito" name="inputTipoGrafito" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Grafito Tamaño Min</label>
                                    <input id="inputGrafitoMin" name="inputGrafitoMin" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Grafito Tamaño Max</label>
                                    <input id="inputGrafitoMax" name="inputGrafitoMax" type="text" class="form-control onlynum" disabled>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>Esteadita</label>
                                    <input id="inputEsteadita" name="inputEsteadita" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">
                                    <label style="visibility: hidden">s</label>
                                    <button type="button" id="btnCancelarUno" style="display: none" onclick="cancelarActualizarMetalurgico()" class="btn btn-outline-danger form-control">Cancelar</button>
                                </div>
                                <div class="col-md-3">
                                    <label style="visibility: hidden">s</label>
                                    <button type="button" id="btnEditarUno" onclick="seleccionarEvento(this)" class="btn btn-outline-blue form-control">Editar</button>
                                </div>
                            </div>

                            <input type="hidden" name="id1" id="id1">
                        </form>
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <form id="formQuimico">
                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>% Si</label>
                                    <input id="inputSi" name="inputSi" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Mn</label>
                                    <input id="inputMn" name="inputMn" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% P</label>
                                    <input id="inputP" name="inputP" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Mg</label>
                                    <input id="inputMg" name="inputMg" type="text" class="form-control onlyfloat" disabled>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>% Cr</label>
                                    <input id="inputCr" name="inputCr" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Ni</label>
                                    <input id="inputNi" name="inputNi" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Mo</label>
                                    <input id="inputMo" name="inputMo" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Cu</label>
                                    <input id="inputCu" name="inputCu" type="text" class="form-control onlyfloat" disabled>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>% V</label>
                                    <input id="inputV" name="inputV" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Sn</label>
                                    <input id="inputSn" name="inputSn" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Pb</label>
                                    <input id="inputPb" name="inputPb" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% C</label>
                                    <input id="inputC" name="inputC" type="text" class="form-control onlyfloat" disabled>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>% S</label>
                                    <input id="inputS" name="inputS" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">
                                    <label style="visibility: hidden">s</label>
                                    <button type="button" id="btnEditarDos" onclick="seleccionarEvento(this)" class="btn btn-outline-blue form-control">Editar</button>
                                </div>
                            </div>
                            <input type="hidden" id="id2" name="id2">
                        </form>
                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <form id="formTemperatura">
                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>Sangrado °C</label>
                                    <input id="inputSangrado" name="inputSangrado" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Vaciado °C</label>
                                    <input id="inputVaciado" name="inputVaciado" type="text" class="form-control onlynum" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Kg</label>
                                    <input id="inputKg" name="inputKg" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Tiempo</label>
                                    <input id="inputTiempo" name="inputTiempo" type="text" class="form-control onlynum" disabled>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">

                                </div>
                                <div class="col-md-3">
                                    <label style="visibility: hidden">% S</label>
                                </div>
                                <div class="col-md-3">
                                    <label style="visibility: hidden">s</label>
                                    <button type="button" id="btnEditarTres" onclick="seleccionarEvento(this)" class="btn btn-outline-blue form-control">Editar</button>
                                </div>
                            </div>
                            <input type="hidden" id="id3" name="id3">
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="eliminarClaseSelected()">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!---- Modal create excel--->
<div class="modal" id="modalexcel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generar Reporte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-6">
                        <label class="form-check-label">Fecha Inicio:</label>
                        <input type="text" id="f1" required class="form-control onlyfloat"  placeholder="Fecha Inicio">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label">Fecha Fin:</label>
                        <input type="text" id="f2" required class="form-control onlyfloat" placeholder="Fecha Fin">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="crearExcel()" data-dismiss="modal">Generar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal add -->
<div class="modal fade" id="requestform" tabindex="-1" role="dialog"  aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 600px">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Steps starts here -->
                <div class="requestwizard">
                    <div class="requestwizard-row setup-panel">
                        <div class="requestwizard-step">
                            <a href="#step-1" type="button" class="btn btn-primary ">Metalurgico</a>
                        </div>
                        <div class="requestwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default" disabled="disabled">Quimico</a>
                        </div>
                        <div class="requestwizard-step">
                            <a href="#step-3" type="button" class="btn btn-default" disabled="disabled">Temperatura</a>
                        </div>
                    </div>
                </div>

                <form role="form" id="formMetalurgicoAdd">
                    <div class="row setup-content" id="step-1">
                        <div class="form-row col-md-12 mt-2">
                            <div class="col-md-3">
                                <label class="form-check-label">Familia</label>
                                <select class="form-control" name="familia"  id="familias" onchange="obtenerModelos();">
                                    <option selected disabled>Familia</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['familias']->value, 'familia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['familia']->value) {
?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['familia']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['familia']->value['familia'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">Modelo</label>
                                <select class="form-control" name="modelos" id="modelos" onchange="obtenerHojas()">
                                    <option selected disabled >Modelo</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">No. Olla</label>
                                <input type="text" required class="form-control onlynum" placeholder="No. Olla" name="olla">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">Cavidad</label>
                                <div class="input-group">
                                    <div class="input-group-prepend" style="width: 25px">
                                        <div class="input-group-text">
                                            <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkCavidad">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control onlynum" name="cavidad" id="newCavidad" placeholder="Cavidad">
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-2 col-md-12">
                            <div class="col-md-3">
                                <label class="form-check-label">Dureza Min</label>
                                <div class="input-group">
                                    <div class="input-group-prepend" style="width: 25px">
                                        <div class="input-group-text">
                                            <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkDurezaMin">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control onlynum" id="newDurezaMin" name="dureza" placeholder="Dureza Min">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">Dureza Max</label>
                                <div class="input-group">
                                    <div class="input-group-prepend" style="width: 25px">
                                        <div class="input-group-text">
                                            <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkDurezaMax">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control onlynum" id="newDurezaMax"  name="dureza_min" placeholder="Dureza Max">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">Nodularidad</label>
                                <div class="input-group">
                                    <div class="input-group-prepend" style="width: 25px">
                                        <div class="input-group-text">
                                            <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkNodularidad">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control onlynum" id="newNodularidad"  name="nodularidad" placeholder="Nodularidad">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">NOD/mm2</label>
                                <div class="input-group">
                                    <div class="input-group-prepend" style="width: 25px">
                                        <div class="input-group-text">
                                            <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkNod">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control onlynum" id="newNod"  name="nod" placeholder="NOD/mm2">
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-2 col-md-12">
                            <div class="col-md-3">
                                <label class="form-check-label">%Perlita</label>
                                <input type="text" class="form-control onlynum" name="perlita" placeholder="% Perlita" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">%Ferrita</label>
                                <input type="text" class="form-control onlynum" name="ferrita" placeholder="% Ferrita" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">%Carburos</label>
                                <input type="text" class="form-control onlynum" name="carburos" placeholder="% Carburos" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">Grafito</label>
                                <select class="form-control" name="grafito">
                                    <option selected disabled>Grafito</option>
                                    <option>IYII</option>
                                    <option>A+B</option>
                                    <option>III</option>
                                    <option>A+E</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row mt-2 col-md-12">
                            <div class="col-md-3">
                                <label class="form-check-label">Grafito Min</label>
                                <input type="text" class="form-control onlynum" name="grafitotamanio" placeholder="Grafito Min" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">Grafito Max</label>
                                <input type="text" class="form-control onlynum" name="grafitotamaniomin" placeholder="Grafito max" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">Esteadita</label>
                                <input type="text" class="form-control onlynum" name="esteadita" placeholder="Esteadita" required>
                            </div>
                            <input type="hidden" value="metalurgico" name="opcion">
                            <div class="col-md-3">
                                <label class="form-check-label" style="visibility: hidden">Esteadita</label>
                                <button id="btnGuardarMetalurgico" onclick="agregarMetalurgico()" class="btn btn-primary" type="button" >Guardar</button>
                                <!--<button class="btn btn-primary nextBtn" type="button" >Siguiente</button>-->
                            </div>
                        </div>
                    </div>
                </form>

                <form id="formQuimicoAdd">
                    <div class="row setup-content" id="step-2">
                        <div class="form-row col-md-12 mt-2">
                            <div class="col-md-3">
                                <label class="form-check-label">% Si</label>
                                <input type="text" required class="form-control onlyfloat" name="si" placeholder="% Si">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% Mn</label>
                                <input type="text" required class="form-control onlyfloat" name="mn" placeholder="% Mn">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% P</label>
                                <input type="text" required class="form-control onlyfloat" name="p" placeholder="% P">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% Mg</label>
                                <input type="text" required class="form-control onlyfloat" name="mg" placeholder="% Mg">
                            </div>
                        </div>

                        <div class="form-row mt-2 col-md-12">
                            <div class="col-md-3">
                                <label class="form-check-label">% Cr</label>
                                <input type="text" required class="form-control onlyfloat" name="cr" placeholder="% Cr">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% Ni</label>
                                <input type="text" required class="form-control onlyfloat" name="ni" placeholder="% Ni">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% Mo</label>
                                <input type="text" required class="form-control onlyfloat" name="mo" placeholder="% Mo">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% Cu</label>
                                <input type="text" required class="form-control onlyfloat" name="cu" placeholder="% Cu">
                            </div>
                        </div>

                        <div class="form-row mt-2 col-md-12">
                            <div class="col-md-3">
                                <label class="form-check-label">% Al</label>
                                <input type="text" required class="form-control onlyfloat" name="al" placeholder="% Al">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% Ti</label>
                                <input type="text" required class="form-control onlyfloat" name="ti" placeholder="% Ti">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% V</label>
                                <input type="text" required class="form-control onlyfloat" name="v" placeholder="% V">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% Sn</label>
                                <input type="text" required class="form-control onlyfloat" name="sn" placeholder="% Sn">
                            </div>
                        </div>

                        <div class="form-row mt-2 col-md-12">
                            <div class="col-md-3">
                                <label class="form-check-label">% Pb</label>
                                <input type="text" required class="form-control onlyfloat" name="pb" placeholder="% Pb">
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% C</label>
                                <input type="text" class="form-control onlyfloat" name="c" placeholder="% C" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">% S</label>
                                <input type="text" class="form-control onlyfloat" name="s" placeholder="% S" required>
                            </div>
                            <input type="hidden" value="quimico" name="opcion">
                            <div class="col-md-3">
                                <label class="form-check-label" style="visibility: hidden">% S</label>
                                <button class="btn btn-primary pull-right" type="button" onclick="agregarQuimico()">Guardar</button>
                            </div>
                        </div>
                    </div>
                </form>

                <form id="formTemperaturaAdd">
                    <div class="row setup-content" id="step-3">
                        <div class="form-row col-md-12 mt-2">
                            <div class="col-md-3">
                                <label class="form-check-label">Sangrado °C</label>
                                <input type="text" class="form-control onlynum" name="sangrado" placeholder="Sangrado °C" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">Vaciado °C</label>
                                <input type="text" class="form-control onlynum" name="vaciado" placeholder="Vaciado °C" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">Kg</label>
                                <input type="text" class="form-control onlyfloat" name="kg" placeholder="Kg" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-check-label">Tiempo</label>
                                <input type="text" class="form-control onlynum" name="tiempo" placeholder="Tiempo" required>
                            </div>
                        </div>
                        <div class="form-row mt-2 col-md-12">
                            <div class="col">
                                <button class="btn btn-primary nextBtn pull-right" type="button" onclick="setdata()">Finalizar</button>
                            </div>
                        </div>
                    </div>
                </form>

                    <div class="row setup-content" id="step-5">
                        <div class="form-row col-md-12">

                        </div>
                        <div class="form-row mt-2 col-md-12">
                            <div class="col-md-6">
                                <input type="text" name="hoja" id="hoja">
                              <!-- <select class="form-control" name="hoja" id="hoja">
                                   <option selected disabled >Hoja inspeccion</option>
                               </select>-->
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<!--Modal eliminar--->
<div id="modalEliminar" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box" style="margin-left: 35px">
                    <i class="material-icons">&#xE5CD;</i>
                </div>
                <h4 class="modal-title" style="margin-top: 4px">¿Eliminar registro?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer" style="margin-right: 35px">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                <button id="btnEliminar" type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<!---- Modal filter--->
<div class="modal" id="modalfilter" tabindex="-1" role="dialog">
    <div class="modal-dialog" style="width: 300px" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Filtrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="demo">
                    <div class="demo__content">
                        <label class="switcher">
                            <input id="checkMetalurgico" type="checkbox" checked/>
                            <div class="switcher__indicator"></div><span>Reporte Metalurgico</span>
                        </label><br/><br/>
                        <label class="switcher">
                            <input id="checkQuimico" type="checkbox" checked/>
                            <div class="switcher__indicator"></div><span>Análisis Químico</span>
                        </label><br/><br/>
                        <label class="switcher">
                            <input id="checkTemperatura" type="checkbox" checked/>
                            <div class="switcher__indicator"></div><span>Temperatura</span>
                        </label><br/><br/>
                        <label class="switcher">
                            <input id="checkNotas" type="checkbox" checked/>
                            <div class="switcher__indicator"></div><span>Notas</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!--Content-->
<div class="">
    <div class="content-wrapper">
        <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button  data-toggle="modal" data-target="#requestform" style="margin-left: 5px; margin-top: 5px;" type="button" title="Agregar" class="btn btn-success btn-circle mr-1 mb-1"><i class="fas fa-plus"></i></button>
                        <button style="margin-left: 5px; margin-top: 5px;" title="Eliminar"  class="btn btn-danger btn-circle mr-1 mb-1 btn-lg" id="deleteTriger"><i class="far fa-trash-alt"></i></button>
                        <button data-toggle="modal" data-target="#modalfilter" style="margin-left: 5px; margin-top: 5px;" id="btnOcultar" title="filtrar" class="btn btn-circle btn-info mr-1 mb-1"><i class="fas fa-filter"></i></button>
                        <button  id="btnEliminarModal" data-toggle="modal" data-target="#modalEliminar" class="btn btn-danger btn-min-width mr-1 mb-1" disabled style="margin-top: 5px; visibility: hidden">Eliminar</button>
                        <h4 class="card-title"></h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <!--<div class="heading-elements" style="margin-top: -50px; background: transparent">-->

                            <ul class="list-inline mb-0">
                                <li><a><input id="txtBuscar" class="mainLoginInput" type="text" placeholder="&#61442; Buscar..."></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw" onclick="recargarTabla()"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show" style="margin-top: -30px">
                        <div class="table-responsive" id="tabla">
                            <table class="display table " id="tableData" width="100%" style="text-align: center;">
                                <thead class="thead-default" style="color: black; font-family: 'Comfortaa', cursive, 'Times New Roman', Times, serif; font-weight: bold">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th colspan="12" style="color: black; background: orangered">Reporte metalurgico de ollas coladas</th>
                                    <th colspan="13" style="color: black; background: green">Análisis quimico</th>
                                    <th colspan="2" style="color: black; background: green">Determ. C & S</th>
                                    <th colspan="2" style="color: black; background: yellow">Temperatura</th>
                                    <th colspan="2" style="color: black; background: yellow">Inoculante</th>
                                    <th colspan="7">Referencias notas</th>
                                </tr>
                                <tr>
                                    <th style="pointer-events:none"></th>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Turno</th>
                                    <th>No. Olla</th>
                                    <th>Familia</th>
                                    <th>Modelo</th>
                                    <th>Cavidad</th>
                                    <th>Dureza min</th>
                                    <th>Dureza max</th>
                                    <th>% Nodularidad</th>
                                    <th>NOD/mm2</th>
                                    <th>% Perlita</th>
                                    <th>% Ferrita</th>
                                    <th>% Carburos</th>
                                    <th>Grafito tipo</th>
                                    <th>Grafito tamaño min</th>
                                    <th>Grafito tamaño max</th>
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
                                    <th></th>
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
?>



<?php echo '<script'; ?>
>
    var t = null;
    var ultimo_id_insert = 0;
    $(document).ready(function () {

        crearTabla();

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });
        $('div.setup-panel div a.btn-primary').trigger('click');
    });

    function crearTabla() {
         t =  $('#tableData').DataTable({
             serverSide: true,

             ajax:{
                 url :"../peticiones/ReadOnlyData.php", // json datasource
                 type: "post",  // method  , by default get
                 error: function(){  // error handling
                     $(".employee-grid-error").html("");
                     $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                     $("#employee-grid_processing").css("display","none");
                 }
             },

             columnDefs: [
                 {
                     "targets": 0,
                     "orderable": false,
                     "searchable": false
                 },
                 /*{
                     "targets": [ 5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35 ],
                     "visible": false,
                     "searchable": false
                 },*/
                 {
                     targets:1,
                     render: function ( data, type, row, meta ) {
                         if(type === 'display'){
                             //data = '<a href="basic.php?game=' + encodeURIComponent(data) + '">' + data + '</a>';
                             data = '<a href="#modalinfo" data-toggle="modal" data-target="#modalinfo">' + data + '</a>';
                         }
                         return data;
                     }
                 }
             ],
             fixedColumns:   {
                 leftColumns: 7

             },
             destroy: true,
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
             dom: "frtiS",
             scrollY: 300,
             scrollX: true,

             deferRender: true,
             scroller: {
                 loadingIndicator: true
             }
         /*   buttons: [
                'copy', $.extend(true, {}, buttonCommon, {
                    extend: "csv"
                }), $.extend(true, {}, buttonCommon, {
                    extend: "excel"
                }), $.extend(true, {}, buttonCommon, {
                    extend: "pdf",
                    orientation: 'landscape',
                    pageSize: 'A2',
                    title: null,
                    exportOptions: {
                        columns: [ 2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41 ]
                    },
                    customize: function(doc) {
                        doc.defaultStyle.alignment = 'center';
                        doc.styles.tableHeader.alignment = 'center';

                        doc['footer'] = (function (page, pages) {
                            return {
                                image: b64_2,
                                margin: [1010, -220, -820, 0]
                            }
                        });

                        doc.content.splice(0, 0, {
                            margin: [-76, -35, 40, 20],
                            alignment: 'left',
                            image: b64
                        });
                    }
                })
            ]*/
        });
    }

    $("#bulkDelete").on('click',function() { // bulk checked
        var status = this.checked;
        $(".deleteRow").each( function() {
            $(this).prop("checked",status);
        });
    });

    $('#deleteTriger').on("click", function(event){ // triggering delete one by one
        $('#modalEliminar').modal('show');
    });

    $('#txtBuscar').keyup(function(){
        t.search($(this).val()).draw() ;
    });

    function eliminarClaseSelected(){
        $('#tableData tbody tr').each(function () {
            console.log($(this)[0].className);
            $(this).removeClass('selected');
        });
    }

    $('#tableData tbody').on( 'click', 'tr', function (evt) {

        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            $('#btnEliminarModal').prop('disabled',true);
            $(this).find("td:first input:checkbox").prop("checked",false);
        }
        else {
            t.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#btnEliminarModal').prop('disabled',false);
            $(this).find("td:first input:checkbox").prop("checked",true);

            var dataArr = [];
            var rows = $('tr.selected');
            var rowData = t.rows( rows ).data();

            $.each($(rowData[0]),function(key,value){
                dataArr.push(value);
            });
        }

        //poner datos en el modal
        // metalurgico
        $('#selectFamilia').trigger('change');
        $('#id1').val(dataArr[1]);
        $('#inputFecha').val(dataArr[2]);
        $('#inputTurno').val(dataArr[3]);
        $('#inputOlla').val(dataArr[4]);
        $("#selectFamilia option:contains("+dataArr[5]+")").attr('selected', 'selected');
        $("#selectModelo option:contains("+dataArr[6]+")").attr('selected', 'selected');
        $('#inputCavidad').val(dataArr[7]);
        $('#inputDurezaMin').val(dataArr[8]);
        $('#inputDurezaMax').val(dataArr[9]);
        $('#inputNodularidad').val(dataArr[10]);
        $('#inputNod').val(dataArr[11]);
        $('#inputPerlita').val(dataArr[12]);
        $('#inputFerrita').val(dataArr[13]);
        $('#inputCarburos').val(dataArr[14]);
        $('#inputTipoGrafito').val(dataArr[15]);
        $('#inputGrafitoMin').val(dataArr[16]);
        $('#inputGrafitoMax').val(dataArr[17]);
        $('#inputEsteadita').val(dataArr[18]);

        //quimico
        $('#id2').val(dataArr[1]);
        $('#inputSi').val(dataArr[19]);
        $('#inputMn').val(dataArr[20]);
        $('#inputP').val(dataArr[21]);
        $('#inputMg').val(dataArr[22]);
        $('#inputCr').val(dataArr[23]);
        $('#inputNi').val(dataArr[24]);
        $('#inputMo').val(dataArr[25]);
        $('#inputCu').val(dataArr[26]);
        $('#inputAl').val(dataArr[27]);
        $('#inputTi').val(dataArr[28]);
        $('#inputV').val(dataArr[29]);
        $('#inputSn').val(dataArr[30]);
        $('#inputPb').val(dataArr[31]);
        $('#inputC').val(dataArr[32]);
        $('#inputS').val(dataArr[33]);

        //Temperatura e inoculante
        $('#id3').val(dataArr[1]);
        $('#inputSangrado').val(dataArr[34]);
        $('#inputVaciado').val(dataArr[35]);
        $('#inputKg').val(dataArr[36]);
        $('#inputTiempo').val(dataArr[37]);

    } );

    $('#checkCavidad').on('change', function (e) {
       if ($(this).prop('checked')){
           $('#newCavidad:text').val('N/A');
           $('#newCavidad').prop('disabled',true);
       }
       else{
           $('#newCavidad:text').val('');
           $('#newCavidad').prop('disabled',false);
       }
    });

    $('#checkDurezaMin').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#newDurezaMin:text').val('N/A');
            $('#newDurezaMin').prop('disabled',true);
        }
        else{
            $('#newDurezaMin:text').val('');
            $('#newDurezaMin').prop('disabled',false);
        }
    });

    $('#checkDurezaMax').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#newDurezaMax:text').val('N/A');
            $('#newDurezaMax').prop('disabled',true);
        }
        else{
            $('#newDurezaMax:text').val('');
            $('#newDurezaMax').prop('disabled',false);
        }
    });

    $('#checkNodularidad').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#newNodularidad:text').val('N/A');
            $('#newNodularidad').prop('disabled',true);
        }
        else{
            $('#newNodularidad:text').val('');
            $('#newNodularidad').prop('disabled',false);
        }
    });

    $('#checkNod').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#newNod:text').val('N/A');
            $('#newNod').prop('disabled',true);
        }
        else{
            $('#newNod:text').val('');
            $('#newNod').prop('disabled',false);
        }
    });

    $('#btnEliminar').click(function (){
        var dataArr = [];
        var rows = $('tr.selected');
        var rowData = t.rows( rows ).data();
        $.each($(rowData),function(key,value){
            dataArr.push(value[0]);
        });

        eliminarDato(dataArr[0]); // id
    });

    function eliminarDato(id) {

        if( $('.deleteRow:checked').length > 0 ){  // at-least one checkbox checked
            var ids = [];
            $('.deleteRow').each(function(){
                if($(this).is(':checked')) {
                    ids.push($(this).val());

                }
            });
            var ids_string = ids.toString();  // array to string conversion
            $.ajax({
                type: "POST",
                url: "../peticiones/DeleteData.php",
                data: {id:ids_string},
                success: function(result) {
                    $('#modalEliminar').modal('hide');
                    t.draw(); // redrawing datatable
                },
                async:false
            });
        }
    }

    function cancelarActualizarMetalurgico() {
        $('#inputOlla').attr('disabled',true);
        $('#selectFamilia').attr('disabled',true);
        $('#selectModelo').attr('disabled',true);
        $('#inputCavidad').attr('disabled',true);
        $('#inputDurezaMin').attr('disabled',true);
        $('#inputDurezaMax').attr('disabled',true);
        $('#inputNodularidad').attr('disabled',true);
        $('#inputNod').attr('disabled',true);
        $('#inputPerlita').attr('disabled',true);
        $('#inputFerrita').attr('disabled',true);
        $('#inputCarburos').attr('disabled',true);
        $('#inputTipoGrafito').attr('disabled',true);
        $('#inputGrafitoMin').attr('disabled',true);
        $('#inputGrafitoMax').attr('disabled',true);
        $('#inputEsteadita').attr('disabled',true);
        $('#btnCancelarUno').fadeOut('slow');
        $('#btnEditarUno').removeClass('btn-success');
        $('#btnEditarUno').addClass('btn-outline-blue');
        $('#btnEditarUno').html('Editar');
    }

    function seleccionarEvento(e) {
        if ($(e).hasClass('btn-outline-blue')) {
            if ($(e).attr('id') === 'btnEditarUno') {
                $(e).removeClass('btn-outline-blue');
                $(e).addClass('btn-success');
                $(e).html('Guardar');

                //habilitar form 1
                $('#inputOlla').attr('disabled',false);
                $('#selectFamilia').attr('disabled',false);
                $('#selectModelo').attr('disabled',false);
                $('#inputCavidad').attr('disabled',false);
                $('#inputDurezaMin').attr('disabled',false);
                $('#inputDurezaMax').attr('disabled',false);
                $('#inputNodularidad').attr('disabled',false);
                $('#inputNod').attr('disabled',false);
                $('#inputPerlita').attr('disabled',false);
                $('#inputFerrita').attr('disabled',false);
                $('#inputCarburos').attr('disabled',false);
                $('#inputTipoGrafito').attr('disabled',false);
                $('#inputGrafitoMin').attr('disabled',false);
                $('#inputGrafitoMax').attr('disabled',false);
                $('#inputEsteadita').attr('disabled',false);

                $('#btnCancelarUno').fadeIn('slow');

            } else if ($(e).attr('id') === 'btnEditarDos') {
                $(e).removeClass('btn-outline-blue');
                $(e).addClass('btn-success');
                $(e).html('Guardar');

                //habilitar form 2
                $('#inputSi').attr('disabled',false);
                $('#inputMn').attr('disabled',false);
                $('#inputP').attr('disabled',false);
                $('#inputMg').attr('disabled',false);
                $('#inputCr').attr('disabled',false);
                $('#inputNi').attr('disabled',false);
                $('#inputMo').attr('disabled',false);
                $('#inputCu').attr('disabled',false);
                $('#inputAl').attr('disabled',false);
                $('#inputTi').attr('disabled',false);
                $('#inputV').attr('disabled',false);
                $('#inputSn').attr('disabled',false);
                $('#inputPb').attr('disabled',false);
                $('#inputC').attr('disabled',false);
                $('#inputS').attr('disabled',false);
            } else if($(e).attr('id') === 'btnEditarTres') {
                $(e).removeClass('btn-outline-blue');
                $(e).addClass('btn-success');
                $(e).html('Guardar');

                //habilitar form 3
                $('#inputSangrado').attr('disabled',false);
                $('#inputVaciado').attr('disabled',false);
                $('#inputKg').attr('disabled',false);
                $('#inputTiempo').attr('disabled',false);
            }
        } else if ($(e).hasClass('btn-success')) {
            if ($(e).attr('id') === 'btnEditarUno') {
                $(e).removeClass('btn-success');
                $(e).addClass('btn-outline-blue');
                $(e).html('Editar');

                //hacer update
                actualizarMetalurgico();
                $('#btnCancelarUno').fadeOut('slow');

                //des-habilitar form 1
                $('#inputOlla').attr('disabled',true);
                $('#selectFamilia').attr('disabled',true);
                $('#selectModelo').attr('disabled',true);
                $('#inputCavidad').attr('disabled',true);
                $('#inputDurezaMin').attr('disabled',true);
                $('#inputDurezaMax').attr('disabled',true);
                $('#inputNodularidad').attr('disabled',true);
                $('#inputNod').attr('disabled',true);
                $('#inputPerlita').attr('disabled',true);
                $('#inputFerrita').attr('disabled',true);
                $('#inputCarburos').attr('disabled',true);
                $('#inputTipoGrafito').attr('disabled',true);
                $('#inputGrafitoMin').attr('disabled',true);
                $('#inputGrafitoMax').attr('disabled',true);
                $('#inputEsteadita').attr('disabled',true);
            } else if($(e).attr('id') === 'btnEditarDos') {
                $(e).removeClass('btn-success');
                $(e).addClass('btn-outline-blue');
                $(e).html('Editar');

                //hacer update
                actualizarQuimico();

                //des-habilitar form 2
                $('#inputSi').attr('disabled',true);
                $('#inputMn').attr('disabled',true);
                $('#inputP').attr('disabled',true);
                $('#inputMg').attr('disabled',true);
                $('#inputCr').attr('disabled',true);
                $('#inputNi').attr('disabled',true);
                $('#inputMo').attr('disabled',true);
                $('#inputCu').attr('disabled',true);
                $('#inputAl').attr('disabled',true);
                $('#inputTi').attr('disabled',true);
                $('#inputV').attr('disabled',true);
                $('#inputSn').attr('disabled',true);
                $('#inputPb').attr('disabled',true);
                $('#inputC').attr('disabled',true);
                $('#inputS').attr('disabled',true);
            } else if($(e).attr('id') === 'btnEditarTres') {
                $(e).removeClass('btn-success');
                $(e).addClass('btn-outline-blue');
                $(e).html('Editar');

                //hacer update
                actualizarTemperatura();

                //des-habilitar form 3
                $('#inputSangrado').attr('disabled',true);
                $('#inputVaciado').attr('disabled',true);
                $('#inputKg').attr('disabled',true);
                $('#inputTiempo').attr('disabled',true);
            }
        }
    }

    function obtenerModelosUpdate() {
        let id = $('#selectFamilia').val();
        $.ajax({
            url: '../peticiones/modelos/select.php',
            method: 'GET',
            data: {id:id},
            dataType: 'json',
            async: false,
            success: function (response) {
                $('#selectModelo').html('');
                $.each(response, function (key,value) {
                    $('#selectModelo').append('<option>'+value.modelo+'</option>');
                });
            }
        });
    }

    function obtenerModelos() {
        let id = $('#familias').val();
        $.ajax({
            url: '../peticiones/modelos/select.php',
            method: 'GET',
            data: {id:id},
            dataType: 'json',
            async: false,
            success: function (response) {
                $('#modelos').html('');
                $('#modelos').append('<option selected disabled="true">Modelo</option>');
                $.each(response, function (key,value) {
                    $('#modelos').append('<option>'+value.modelo+'</option>');
                });
            }
        });
    }

    function obtenerHojas() {
        let modelo = $('#modelos option:selected').text();
        $.ajax({
            url: '../peticiones/hojas_inspeccion/select.php',
            method: 'GET',
            data: {modelo:modelo},
            dataType: 'json',
            async: false,
            success: function (response) {
                $('#hoja:text').val('');

                $.each(response, function (key,value) {
                    $('#hoja:text').val(value.hoja_inspeccion);
//                    $('#hoja').append('<option>'+value.hoja_inspeccion+'</option>');
                });
            }
        });
    }
    
    function actualizarMetalurgico() {
        $.ajax({
           url: '../peticiones/sabana/UpdateMetalurgico.php',
           method: 'post',
           data: $('#formMetalurgico').serialize() + '&selectFamilia=' + $('#selectFamilia option:selected').text() +
            '&selectModelo='+ $('#selectModelo option:selected').text(),
           success: function () {
               t.draw();
               //crearTabla();
           }
        });
    }

    function actualizarQuimico() {
        $.ajax({
           url: '../peticiones/sabana/UpdateQuimico.php',
           method: 'post',
           data: $('#formQuimico').serialize(),
           success: function () {
               t.draw();
               //crearTabla();
           }
        });
    }

    function actualizarTemperatura() {
        $.ajax({
           url: '../peticiones/sabana/UpdateTemperaturaInoculante.php',
           method: 'post',
           data: $('#formTemperatura').serialize(),
           success: function () {
              t.draw();
               // crearTabla();
           }
        });
    }
    
    function setdata() {
        $.ajax({
            method: 'post',
            url: '../peticiones/InsertData.php',
            data: $('form').serialize() + '&familia=' + $('#familias option:selected').text(),
            success: function () {
                crearTabla();
            }
        });
    }

    (function($) {
        $.fn.inputFilter = function(inputFilter) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                }
            });
        };
    }(jQuery));

    $(".onlynum").inputFilter(function(value) {
        return /^-?\d*$/.test(value); });

    $(".onlyfloat").inputFilter(function(value) {
        return/^-?\d*[.,]?\d*$/.test(value); });

    $('#checkMetalurgico').on('change',function () {
        if ($('#checkMetalurgico').prop('checked')){ //activar columnas de metalurgico
            t.columns( [7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22] ).visible( true );
        } else { // desactivar columnas de metalurgico
            t.columns( [7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22] ).visible( false );
        }
    });

    $('#checkQuimico').on('change',function () {
        if ($('#checkQuimico').prop('checked')){ //activar columnas de quimico
            t.columns( [19,20,21,22,23,24,25,26,27,28,29,30,31,32,33] ).visible( true );
        } else { // desactivar columnas de metalurgico
            t.columns( [19,20,21,22,23,24,25,26,27,28,29,30,31,32,33] ).visible( false );
        }
    });

    $('#checkTemperatura').on('change',function () {
        if ($('#checkTemperatura').prop('checked')){ //activar columnas de metalurgico
            t.columns( [34,35,36,37] ).visible( true );
        } else { // desactivar columnas de metalurgico
            t.columns( [34,35,36,37] ).visible( false );
        }
    });

    $('#checkNotas').on('change',function () {
        if ($('#checkNotas').prop('checked')){ //activar columnas de notas
            t.columns( [38,39,40,41,42,43,44] ).visible( true );
        } else { // desactivar columnas de notas
            t.columns( [38,39,40,41,42,43,44] ).visible( false );
        }
    });

    function recargarTabla() {
        t.draw();
    }

    function agregarMetalurgico() {
        if (ultimo_id_insert !== 0){ // se hace update

        } else { // se hace insert
            $.ajax({
                url: '../peticiones/InsertData.php',
                method: 'post',
                data: $('#formMetalurgicoAdd').serialize(),
                dataType: 'json',
                success: function (response) {
                    t.draw();
                    ultimo_id_insert = response[0].id;
                }
            });
        }
    }

    function agregarQuimico() {
        if (ultimo_id_insert !== 0) { // se hace update

        } else { // se hace insert
            $.ajax({
               url: '../peticiones/InserData.php',
               method: 'post',
               data: $('#formQuimicoAdd').serialize(),
               dataType: 'json',
               success: function (response) {
                   t.draw();
                   ultimo_id_insert = response[0].id;
               }
            });
        }
    }

    $( "#f1" ).datepicker({ dateFormat: "yy-mm-dd" });
    $( "#f2" ).datepicker({ dateFormat: "yy-mm-dd" });

    function crearExcel() {
        let f1 = $('#f1').val();
        let f2 = $('#f2').val();

        window.open('../peticiones/CreateExcel.php?f1='+f1+'&f2='+f2,'_self');

        $('#f1').val('');
        $('#f2').val('');

    }
<?php echo '</script'; ?>
>
<?php }
}
