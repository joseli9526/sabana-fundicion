<?php
/* Smarty version 3.1.30, created on 2019-01-17 11:26:05
  from "C:\xampp2\htdocs\Arbomex\Celaya\SabanaFundicionCambios2\templates\inicio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c40baad291f04_15741503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a054d80c41d2e2ce9bcbfebeaf8b6566e43226e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Arbomex\\Celaya\\SabanaFundicionCambios2\\templates\\inicio.html',
      1 => 1547745963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5c40baad291f04_15741503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:cabecera.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<style>
    .element {
        display: inline-flex;
        align-items: center;
    }
    .fa-camera {
        margin: 10px;
        cursor: pointer;
        font-size: 30px;
    }
    i:hover {
        opacity: 0.6;
    }


    th, td {
        white-space: nowrap;
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
        font-size: 25px;
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

    .btn-group.bootstrap-select select {
        width: 1px !important;
    }


</style>

<!--Modal success-->
<div id="modalsuccess" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons" style="color: darkgreen">&#xE876;</i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Registro agregado con éxito!</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!--Modal success add user-->
<div id="modalsuccessadduser" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons" style="color: darkgreen">&#xE876;</i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Usuario registrado con éxito!</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!--Modal success reset-->
<div id="modalsuccessreset" class="modal fade" style="z-index: 100000">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons" style="color: darkgreen">&#xE876;</i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Contraseña restablecida con exito!</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal add modelos -->
<div class="modal" id="modaladdmodel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar modelos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="form-check-label">Familias:</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="selectfamiliasadd" onchange="obtenerModelosAdd()">
                                    <option selected value="">Seleccionar</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-light" id="btnAbrirAddFamilia"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="form-check-label">Modelos:</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="selectmodelosadd">
                                    <option selected value="">Seleccionar</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-light" id="btnAbrirAddModelo"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"  onclick="cerrarModalAddModelos()">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal add familia -->
<div class="modal" id="modaladdfamilia" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar familia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-12">
                        <label class="form-check-label">Nombre:</label>
                        <input type="text" id="nombreFamiliaAdd" required class="form-control"  placeholder="Nombre">
                        <span id="erroragregarfamilia" style="color: red; display: none">Familia ya registrada</span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="agregarFamilia()">Agregar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal add modelo -->
<div class="modal" id="modaladdmodelo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar modelo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formModelos" enctype="multipart/form-data" >
                <div class="modal-body">
                    <h4 id="textomodelo">Agregar modelo para la familia: </h4>
                        <div class="form-row col-md-12 mt-2">
                            <div class="col-md-12">
                                <label class="form-check-label">Nombre:</label>
                                <input type="text" autocomplete="off" name="inputaddmodeloname" id="nombreModeloAdd" required class="form-control"  placeholder="Nombre">
                                <span style="color: red; display: none" id="mensajeaddmodelo">Modelo ya registrado</span>
                            </div>
                        </div>
                        <div class="form-row col-md-12 mt-2">
                            <div class="col-md-12">
                                <label class="form-check-label">Archivo (5MB):</label>
                                <input type="file" id="inputarchivo" data-max-size="5000000"  name="archivoaddmodelo" class="form-control">
                                <span id="mensajearchivo" style="display: none; color: red">El archivo supera el tamaño máximo.</span>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit modelo -->
<div class="modal" id="modaleditmodelo" tabindex="-1" role="dialog" style="z-index: 10000;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditarmodelo" enctype="multipart/form-data" >
                <div class="modal-body">
                    <div class="form-row col-md-12 mt-2">
                        <div class="col-md-12">
                            <label class="form-check-label">Familia:</label>
                            <select class="form-control" id="selectfamiliaeditmodelo">

                            </select>
                        </div>
                    </div>
                    <div class="form-row col-md-12 mt-2">
                        <div class="col-md-12">
                            <label class="form-check-label">Modelo:</label>
                            <input class="form-control" id="selectmodeloeditmodelo" />
                        </div>
                    </div>
                    <div class="form-row col-md-12 mt-2">
                        <div class="col-md-12">
                            <label class="form-check-label">Archivo (5MB):</label>
                            <input type="file" id="inputarchivoeditarmodelo" data-max-size="5000000"  name="archivoeditmodelo" class="form-control">
                            <span id="mensajearchivoeditarmodelo" style="display: none; color: red">El archivo supera el tamaño máximo.</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="editarModelo()">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal show modelos -->
<div class="modal" id="modalshowmodelos" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modelos registrados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="tablamodelos" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Familia</th>
                                <th>Modelo</th>
                                <th>Hoja inspección</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
        </div>
    </div>
</div>

<!---- Modal show/edit info--->
<div class="modal" id="modalinfo" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Información</h5>
                <button type="button" class="close" onclick="cerrarModalUpdate()" aria-label="Close">
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
                                    <input id="inputOlla" name="inputOlla" type="text" class="form-control onlynum" autocomplete="off" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-check-label">Cavidad</label>
                                    <div class="input-group" style="margin-top: 7px">
                                        <div class="input-group-prepend" style="width: 25px">
                                            <div class="input-group-text">
                                                <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkCavidadEdit" disabled>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control onlynum" name="inputCavidad" id="inputCavidad" placeholder="Cavidad" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-check-label">Dureza Min</label>
                                    <div class="input-group" style="margin-top: 7px">
                                        <div class="input-group-prepend" style="width: 25px">
                                            <div class="input-group-text">
                                                <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkDurezaMinEdit" disabled>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control onlynum" name="inputDurezaMin" id="inputDurezaMin" placeholder="Dureza Min" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-check-label">Dureza Max</label>
                                    <div class="input-group" style="margin-top: 7px">
                                        <div class="input-group-prepend" style="width: 25px">
                                            <div class="input-group-text">
                                                <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkDurezaMaxEdit" disabled>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control onlynum" name="inputDurezaMax" id="inputDurezaMax" placeholder="Dureza Max" autocomplete="off" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label class="form-check-label">% Nodularidad</label>
                                    <div class="input-group" style="margin-top: 7px">
                                        <div class="input-group-prepend" style="width: 25px">
                                            <div class="input-group-text">
                                                <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkNodularidadEdit" disabled>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control onlynum" name="inputNodularidad" id="inputNodularidad" placeholder="% Nodularidad" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-check-label">NOD/mm2</label>
                                    <div class="input-group" style="margin-top: 7px">
                                        <div class="input-group-prepend" style="width: 25px">
                                            <div class="input-group-text">
                                                <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkNodEdit" disabled>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control onlynum" name="inputNod" id="inputNod" placeholder="NOD/mm2" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>% Perlita</label>
                                    <input id="inputPerlita" name="inputPerlita" type="text" placeholder="% Perlita" class="form-control onlynum" autocomplete="off" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Ferrita</label>
                                    <input id="inputFerrita" name="inputFerrita" type="text" placeholder="% Ferrita" class="form-control onlynum" autocomplete="off" disabled>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>% Carburos</label>
                                    <input id="inputCarburos" name="inputCarburos" type="text" placeholder="% Carburos" class="form-control onlynum" autocomplete="off" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Tipo Grafito</label>
                                    <select name="inputTipoGrafito" id="selectTipoGrafito" class="form-control" disabled>
                                        <option disabled value="">Grafito</option>
                                        <option>IYII</option>
                                        <option>A+B</option>
                                        <option>III</option>
                                        <option>A+E</option>
                                    </select>
                                    <!--<input id="inputTipoGrafito" name="inputTipoGrafito" type="text" class="form-control onlynum" disabled>-->
                                </div>
                                <div class="col-md-3">
                                    <label>Grafito Tamaño Min</label>
                                    <input id="inputGrafitoMin" name="inputGrafitoMin" type="text" placeholder="Grafito Min" class="form-control onlynum" autocomplete="off" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>Grafito Tamaño Max</label>
                                    <input id="inputGrafitoMax" name="inputGrafitoMax" type="text" placeholder="Grafito Max" class="form-control onlynum" autocomplete="off" disabled>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>Esteadita</label>
                                    <input id="inputEsteadita" name="inputEsteadita" type="text" placeholder="Esteadita" class="form-control onlynum" autocomplete="off" disabled>
                                </div>
                                <div class="col-md-3" id="divLocalizacionEdit" style="display: none">
                                    <label>Localización</label>
                                    <select class="form-control" disabled id="selectLocalizacionEdit" name="selectLocalizacionEdit">
                                        <option>Apoyo 1</option>
                                        <option>Leva 1</option>
                                        <option>Leva 8</option>
                                        <option>Nariz</option>
                                        <option>Leva 9</option>
                                    </select>
                                    <!--<button id="btnGuardarMetalurgico" class="btn btn-success" style="margin-top: 20px" type="submit">Guardar</button>-->
                                    <!--<button class="btn btn-primary nextBtn" type="button" >Siguiente</button>-->
                                </div>
                                <div class="col-md-3">
                                    <label style="visibility: hidden">s</label>
                                   <!-- <button type="button" id="btnCancelarUno" style="display: none" onclick="cancelarActualizarMetalurgico()" class="btn btn-outline-danger form-control">Cancelar</button>-->
                                </div>
                                <div class="col-md-3">
                                    <label style="visibility: hidden">s</label>
                                    <!--<button type="button" id="btnEditarUno" onclick="seleccionarEvento(this)" class="btn btn-outline-blue form-control">Editar</button>-->
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
                                    <label>% Al</label>
                                    <input id="inputAl" name="inputAl" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Ti</label>
                                    <input id="inputTi" name="inputTi" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% V</label>
                                    <input id="inputV" name="inputV" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% Sn</label>
                                    <input id="inputSn" name="inputSn" type="text" class="form-control onlyfloat" disabled>
                                </div>
                            </div>

                            <div class="form-row col-md-12">
                                <div class="col-md-3">
                                    <label>% Pb</label>
                                    <input id="inputPb" name="inputPb" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% C</label>
                                    <input id="inputC" name="inputC" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label>% S</label>
                                    <input id="inputS" name="inputS" type="text" class="form-control onlyfloat" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label style="visibility: hidden">s</label>
                                    <!--<button type="button" id="btnCancelarDos" style="display: none" onclick="cancelarActualizarQuimico()" class="btn btn-outline-danger form-control">Cancelar</button>-->
                                </div>
                                <div class="col-md-3">
                                    <label style="visibility: hidden">s</label>
                                    <!--<button type="button" id="btnEditarDos" onclick="seleccionarEvento(this)" class="btn btn-outline-blue form-control">Editar</button>-->
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
                                    <label style="visibility: hidden">s</label>
                                    <!--<button type="button" id="btnCancelarTres" style="display: none" onclick="cancelarActualizarTemperatura()" class="btn btn-outline-danger form-control">Cancelar</button>-->
                                </div>
                                <div class="col-md-3">
                                    <label style="visibility: hidden">s</label>
                                    <!--<button type="button" id="btnEditarTres" onclick="seleccionarEvento(this)" class="btn btn-outline-blue form-control">Editar</button>-->
                                </div>
                            </div>
                            <input type="hidden" id="id3" name="id3">
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnCancelarTres" style="display: none" onclick="cancelarUpdate()" class="btn btn-outline-danger">Cancelar</button>
                <button type="button" id="btnEditarTres" onclick="seleccionarEvento(this)" class="btn btn-outline-blue">Editar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="cerrarModalUpdate()">Cerrar</button>
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
<div class="modal" id="requestform" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Registros</h5>
                <button type="button" class="close" onclick="cerrarModalAdd()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active"  id="pills-home-tab2" data-toggle="pill" href="#pills-home2" role="tab" aria-controls="pills-home2" aria-selected="true">Reporte Metalurgico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  id="pills-profile-tab2" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile2" aria-selected="false">Análisis Químico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact2" aria-selected="false">Temperatura e Inoculante</a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent2">
                    <!--Inputs compartidos-->
                    <div class="form-row col-md-12">
                        <div class="col-md-3">
                            <label class="form-check-label">Familia</label>
                            <select class="form-control" name="familia" id="familias" onchange="obtenerModelos();" required>
                                <option selected disabled value="">Familia</option>
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
                            <select class="form-control" name="modelos" id="modelos" onchange="obtenerHojas()" required>
                                <option selected disabled value="">Modelo</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-check-label">No. Olla</label>
                            <input type="text" id="newOlla" required class="form-control onlynum" placeholder="No. Olla" name="olla" autocomplete="off">
                        </div>
                        <div class="col-md-3">
                            <label class="form-check-label">Cavidad</label>
                            <div class="input-group">
                                <div class="input-group-prepend" style="width: 25px">
                                    <div class="input-group-text">
                                        <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkCavidad">
                                    </div>
                                </div>
                                <input type="text" class="form-control onlynum" name="cavidad" id="newCavidad" placeholder="Cavidad" autocomplete="off" required>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show active" id="pills-home2" role="tabpanel" aria-labelledby="pills-home-tab">
                        <form role="form" id="formMetalurgicoAdd">
                                <div class="form-row mt-2 col-md-12">
                                    <div class="col-md-3">
                                        <label class="form-check-label">Dureza Min</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend" style="width: 25px">
                                                <div class="input-group-text">
                                                    <input type="checkbox" style="margin-left: -15px" title="N/A" id="checkDurezaMin">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control onlynum" id="newDurezaMin" name="dureza" placeholder="Dureza Min" autocomplete="off" required>
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
                                            <input type="text" class="form-control onlynum" id="newDurezaMax"  name="dureza_min" placeholder="Dureza Max" autocomplete="off" required>
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
                                            <input type="text" class="form-control onlynum" id="newNodularidad"  name="nodularidad" placeholder="Nodularidad" autocomplete="off" required>
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
                                            <input type="text" class="form-control onlynum" id="newNod"  name="nod" placeholder="NOD/mm2" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mt-2 col-md-12">
                                    <div class="col-md-3">
                                        <label class="form-check-label">%Perlita</label>
                                        <input type="text" id="newPerlita" class="form-control onlynum" name="perlita" placeholder="% Perlita" autocomplete="off" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">%Ferrita</label>
                                        <input type="text" id="newFerrita" class="form-control onlynum" name="ferrita" placeholder="% Ferrita" autocomplete="off" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">%Carburos</label>
                                        <input type="text" id="newCarburos" class="form-control onlynum" name="carburos" placeholder="% Carburos" autocomplete="off" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">Grafito</label>
                                        <select class="form-control" id="newGrafito" name="grafito" required>
                                            <option selected disabled value="">Grafito</option>
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
                                        <input type="text" id="newGrafitoMin" class="form-control onlynum" name="grafitotamanio" placeholder="Grafito Min" autocomplete="off" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">Grafito Max</label>
                                        <input type="text" id="newGrafitoMax" class="form-control onlynum" name="grafitotamaniomin" placeholder="Grafito max" autocomplete="off" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">Esteadita</label>
                                        <input type="text" id="newEsteadita" class="form-control onlynum" name="esteadita" placeholder="Esteadita" autocomplete="off" required>
                                    </div>
                                    <input type="hidden" id="ocultometal" value="metalurgico" name="opcion">
                                    <input type="hidden" name="hoja" id="hoja">
                                    <div class="col-md-3" id="divLocalizacion" style="display: none">
                                        <label class="form-check-label">Localización</label>
                                        <select class="form-control" id="selectLocalizacion" name="selectLocalizacion">
                                            <option>Apoyo 1</option>
                                            <option>Leva 1</option>
                                            <option>Leva 8</option>
                                            <option>Nariz</option>
                                            <option>Leva 9</option>
                                        </select>
                                        <!--<button id="btnGuardarMetalurgico" class="btn btn-success" style="margin-top: 20px" type="submit">Guardar</button>-->
                                        <!--<button class="btn btn-primary nextBtn" type="button" >Siguiente</button>-->
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab2">
                        <form id="formQuimicoAdd">
                                <div class="form-row col-md-12">
                                    <div class="col-md-3">
                                        <label class="form-check-label">% Si</label>
                                        <input type="text" id="newSi" required class="form-control onlyfloat" autocomplete="off" name="si" placeholder="% Si">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">% Mn</label>
                                        <input type="text" id="newMn" required class="form-control onlyfloat" autocomplete="off" name="mn" placeholder="% Mn">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">% P</label>
                                        <input type="text" id="newP" required class="form-control onlyfloat" autocomplete="off" name="p" placeholder="% P">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">% Mg</label>
                                        <input type="text" id="newMg" required class="form-control onlyfloat" autocomplete="off" name="mg" placeholder="% Mg">
                                    </div>
                                </div>

                                <div class="form-row mt-2 col-md-12">
                                    <div class="col-md-3">
                                        <label class="form-check-label">% Cr</label>
                                        <input type="text" id="newCr" required class="form-control onlyfloat" autocomplete="off" name="cr" placeholder="% Cr">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">% Ni</label>
                                        <input type="text" id="newNi" required class="form-control onlyfloat" autocomplete="off" name="ni" placeholder="% Ni">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">% Mo</label>
                                        <input type="text" id="newMo" required class="form-control onlyfloat" autocomplete="off" name="mo" placeholder="% Mo">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">% Cu</label>
                                        <input type="text" id="newCu" required class="form-control onlyfloat" autocomplete="off" name="cu" placeholder="% Cu">
                                    </div>
                                </div>

                                <div class="form-row mt-2 col-md-12">
                                    <div class="col-md-3">
                                        <label class="form-check-label">% Al</label>
                                        <input type="text" id="newAl" required class="form-control onlyfloat" autocomplete="off" name="al" placeholder="% Al">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">% Ti</label>
                                        <input type="text" id="newTi" required class="form-control onlyfloat" autocomplete="off" name="ti" placeholder="% Ti">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">% V</label>
                                        <input type="text" id="newV" required class="form-control onlyfloat" autocomplete="off" name="v" placeholder="% V">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">% Sn</label>
                                        <input type="text" id="newSn" required class="form-control onlyfloat" autocomplete="off" name="sn" placeholder="% Sn">
                                    </div>
                                </div>

                            <div class="form-row mt-2 col-md-12">
                                <div class="col-md-3">
                                    <label class="form-check-label">% Pb</label>
                                    <input type="text" id="newPb" required class="form-control onlyfloat" autocomplete="off" name="pb" placeholder="% Pb">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-check-label">% C</label>
                                    <input type="text" id="newC" class="form-control onlyfloat" name="c" autocomplete="off" placeholder="% C" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-check-label">% S</label>
                                    <input type="text" id="newS" class="form-control onlyfloat" name="s" autocomplete="off" placeholder="% S" required>
                                </div>
                            </div>

                            <div class="form-row mt-2 col-md-12">
                                <div class="col-md-3">

                                </div>
                                    <input type="hidden" id="ocultoquimi" value="quimico" name="opcion">
                                <div class="col-md-3">
                                    <label class="form-check-label" style="visibility: hidden">% S</label>
                                    <!--<button class="btn btn-primary pull-right" type="submit">Guardar</button>-->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                        <form id="formTemperaturaAdd">
                                <div class="form-row col-md-12">
                                    <div class="col-md-3">
                                        <label class="form-check-label">Sangrado °C</label>
                                        <input type="text" id="newSangradoTemperatura" class="form-control onlynum" autocomplete="off" name="sangrado" placeholder="Sangrado °C" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">Vaciado °C</label>
                                        <input type="text" id="newVaciadoTemperatura" class="form-control onlynum" autocomplete="off" name="vaciado" placeholder="Vaciado °C" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">Kg</label>
                                        <input type="text" id="newKgTemperatura" class="form-control onlyfloat" autocomplete="off" name="kg" placeholder="Kg" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-check-label">Tiempo</label>
                                        <input type="text" id="newTiempoTemperatura" class="form-control onlynum" autocomplete="off" name="tiempo" placeholder="Tiempo" required>
                                    </div>
                                </div>
                            <div class="form-row col-md-12">
                                <div class="col-md-3">

                                </div>
                            </div>
                            <input type="hidden" id="ocultotemp" value="temperatura" name="opcion">
                                <div class="form-row mt-2 col-md-12">
                                    <div class="col">
                                        <!--<button class="btn btn-primary nextBtn pull-right" type="submit">Guardar</button>-->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button class="btn btn-success nextBtn pull-right" onclick="insertData()" type="button">Guardar</button>
                <button type="button" class="btn btn-secondary" onclick="cerrarModalAdd()">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal add user -->
<div class="modal" id="modaladduser" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear usuario</h5>
                <button type="button" class="close" onclick="cerrarModalAddUser()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-6">
                        <label class="form-check-label">Nombre:</label>
                        <input type="text" id="nombreusuarioadd" required class="form-control"  placeholder="Nombre">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label">Apellido:</label>
                        <input type="text" id="apellidousuarioadd" required class="form-control"  placeholder="Apellido">
                    </div>
                </div>
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-6">
                        <label>Correo:</label>
                    <div class="input-group" style="margin-top: -7px">
                        <input type="text" id="correousuarioadd"  class="form-control" placeholder="Correo">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">@arbomex.com.mx</span>
                        </div>
                    </div>
                    </div>
                    <!--<div class="col-md-6">
                        <label class="form-check-label">Correo:</label>
                        <input type="email" id="correousuarioadd" required class="form-control" placeholder="Correo">
                    </div>-->
                    <div class="col-md-6">
                        <label class="form-check-label">Usuario:</label>
                        <input type="text" id="userusuarioadd" required class="form-control"  placeholder="Usuario">
                    </div>
                </div>
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-6">
                        <label class="form-check-label">Contraseña:</label>
                        <input type="password" id="passusuarioadd" required class="form-control"  placeholder="Contraseña">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label">Rol:</label>
                        <select class="form-control" id="selectrolusuarioadd">
                            <option selected disabled value="">Seleccionar rol</option>
                            <?php if ($_smarty_tpl->tpl_vars['rol']->value != 'Supervisor') {?>
                            <option value="1">Administrador</option>}
                            <?php }?>
                            <option value="2">Supervisor</option>
                            <option value="3">Usuario</option>
                        </select>
                    </div>
                </div>
                <br><br>
                <div class="alert alert-success" style="text-align: center; font-size: 15px; display: none" role="alert" id="alertausuario">
                    Usuario creado correctamente!
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="crearUsuario()">Crear</button>
                <button type="button" class="btn btn-secondary" onclick="cerrarModalAddUser()">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal edit user -->
<div class="modal" id="modaladituser" style="z-index: 10000" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar usuario</h5>
                <button type="button" class="close" onclick="cerrarModalAddUser()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-6">
                        <label class="form-check-label">Nombre:</label>
                        <input type="text" id="nombreusuarioedit" required class="form-control"  placeholder="Nombre">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label">Apellido:</label>
                        <input type="text" id="apellidousuarioedit" required class="form-control"  placeholder="Apellido">
                    </div>
                </div>
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-6">
                        <label>Correo:</label>
                        <div class="input-group" style="margin-top: -7px">
                            <input type="text" id="correousuarioedit"  class="form-control" placeholder="Correo">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon22">@arbomex.com.mx</span>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-6">
                        <label class="form-check-label">Correo:</label>
                        <input type="email" id="correousuarioadd" required class="form-control" placeholder="Correo">
                    </div>-->
                    <div class="col-md-6">
                        <label class="form-check-label">Usuario:</label>
                        <input type="text" id="userusuarioedit" required class="form-control"  placeholder="Usuario">
                    </div>
                </div>
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-6">
                        <label class="form-check-label">Rol:</label>
                        <select class="form-control" id="selectrolusuarioedit">
                            <option selected disabled value="">Seleccionar rol</option>
                            <?php if ($_smarty_tpl->tpl_vars['rol']->value != 'Supervisor') {?>
                            <option value="1">Administrador</option>}
                            <?php }?>
                            <option value="2">Supervisor</option>
                            <option value="3">Usuario</option>
                        </select>
                    </div>
                </div>
                <br><br>
                <div class="alert alert-success" style="text-align: center; font-size: 15px; display: none" role="alert" id="alertausuarioedit">
                    Usuario creado correctamente!
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="actualizarUsuario()">Actualizar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal show users -->
<div class="modal" id="modalshowusers" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lista de usuarios</h5>
                <button type="button" class="close" onclick="cerrarModalShowUsers()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="tablausuarios" class="table table-bordered" width="100%" style="text-align: center">
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Usuario</td>
                            <td>Correo</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="cerrarModalShowUsers()">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal cambiar pass -->
<div class="modal" id="modalpass" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cambiar contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-6">
                        <label class="form-check-label">Nueva contraseña:</label>
                        <input type="password" id="pass1" required class="form-control"  placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label">Confirmar contraseña:</label>
                        <input type="password" id="pass2" required class="form-control" placeholder="">
                    </div>
                    <input type="hidden" id="validarpass" value="contrasena">
                </div><br>
                <div class="alert alert-danger" style="text-align: center; font-size: 15px; display: none" role="alert" id="alertacambiarpass">
                    Las contraseñas no coinciden
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="actualizarPass()">Cambiar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal reset password -->
<div class="modal" id="modalpassreset" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cambiar contraseña</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row col-md-12 mt-2">
                    <div class="col-md-6">
                        <label class="form-check-label">Nueva contraseña:</label>
                        <input type="password" id="pass1reset" required class="form-control"  placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label">Confirmar contraseña:</label>
                        <input type="password" id="pass2reset" required class="form-control" placeholder="">
                    </div>
                    <input type="hidden" id="validarpassreset" value="contrasena">
                </div><br>
                <div class="alert alert-danger" style="text-align: center; font-size: 15px; display: none" role="alert" id="alertaresetpass">
                    Las contraseñas no coinciden
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="btnResetPass">Cambiar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!--<div class="modal fade" id="" tabindex="-1" role="dialog"  aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 600px">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                &lt;!&ndash; Steps starts here &ndash;&gt;
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

                <div class="row setup-content" id="step-5">
                    <div class="form-row col-md-12">
                </div>
                    <div class="form-row mt-2 col-md-12">
                        <div class="col-md-6">
                       &lt;!&ndash; <select class="form-control" name="hoja" id="hoja">
                               <option selected disabled >Hoja inspeccion</option>
                           </select>&ndash;&gt;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

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

<!-- Modal eliminar usuario -->
<div id="modalEliminarUsuario" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box" style="margin-left: 35px">
                    <i class="material-icons">&#xE5CD;</i>
                </div>
                <h4 class="modal-title" style="margin-top: 4px">¿Eliminar usuario?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer" style="margin-right: 35px">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                <button id="btnEliminarUsuario" type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal eliminar modelo -->
<div id="modalEliminarModelo" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box" style="margin-left: 35px">
                    <i class="material-icons">&#xE5CD;</i>
                </div>
                <h4 class="modal-title" style="margin-top: 4px">¿Eliminar modelo?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer" style="margin-right: 35px">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                <button id="btnEliminarModelo" type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal eliminar familia -->
<div id="modalEliminarFamilia" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box" style="margin-left: 35px">
                    <i class="material-icons">&#xE5CD;</i>
                </div>
                <h4 class="modal-title" style="margin-top: 4px">¿Eliminar familia?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer" style="margin-right: 35px">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                <button id="btnEliminarFamilia" type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<!---- Modal filter--->
<div class="modal" id="modalfilter" tabindex="-1" role="dialog">
    <div class="modal-dialog" style="width: 300px" role="document">
        <div class="modal-content" style="height: 545px">
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
                        <button id="btnModalAdd" onclick="abrirModalAdd()" style="margin-left: 5px; margin-top: 5px;" type="button" title="Agregar" class="btn btn-success btn-circle mr-1 mb-1"><i class="fas fa-plus"></i></button>
                        <?php if ($_smarty_tpl->tpl_vars['rol']->value != 'usuario') {?>
                            <button style="margin-left: 5px; margin-top: 5px;" title="Eliminar" disabled class="btn btn-danger btn-circle mr-1 mb-1 btn-lg" id="deleteTriger"><i class="far fa-trash-alt"></i></button>
                        <?php }?>
                        <button data-toggle="modal" data-target="#modalfilter" style="margin-left: 5px; margin-top: 5px;" id="btnOcultar" title="filtrar" class="btn btn-circle btn-info mr-1 mb-1"><i class="fas fa-filter"></i></button>

                        <!--<button id="btnEliminarModal" data-toggle="modal" data-target="#modalEliminar" class="btn btn-danger btn-min-width mr-1 mb-1" disabled style="margin-top: 5px; visibility: hidden">Eliminar</button>-->

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
                            <table class="display table"  id="tableData" width="100%" style="text-align: center;">
                                <thead class="thead-default" style="color: black; font-family: 'Comfortaa', cursive, 'Times New Roman', Times, serif; font-weight: bold">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th colspan="14" style="color: black; background: orangered">Reporte metalurgico de ollas coladas</th>
                                    <th colspan="13" style="color: black; background: green">Análisis quimico</th>
                                    <th colspan="3" style="color: black; background: green">Determ. C & S</th>
                                    <th colspan="2" style="color: black; background: yellow">Temperatura</th>
                                    <th colspan="3" style="color: black; background: yellow">Inoculante</th>
                                    <th colspan="6">Referencias notas</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>Status</th>
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
                                    <th>Localización</th>
                                    <th>Usuario</th>
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
                                    <th>Usuario</th>
                                    <th>Sangrado °C</th>
                                    <th>Vaciado °C</th>
                                    <th>Kg</th>
                                    <th>Tiempo</th>
                                    <th>Usuario</th>
                                    <th>Dia</th>
                                    <th>Semana</th>
                                    <th>Mes</th>
                                    <th>Año</th>
                                    <th>Hoja inspección</th>
                                </tr>
                                </thead>
                                <tbody style="color: black">

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
    var t2 = null;
    var t3 = null;
    var id_eliminar = 0;
    var id_actualizar_usuario = 0;
    var id_reset = 0;
    var id_eliminar_modelo = 0;
    var familia_eliminar = ''
    var opcionInsertar = 1;
    var opcionEditar = 1;
    var ultimo_id_insert = 0;

    $(document).ready(function () {
        crearTabla();
    });

    function crearTabla() {
        let rol = '<?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
';

         t =  $('#tableData').DataTable({
             serverSide: true,
             
             ajax:{
                 url :"../peticiones/ReadOnlyData.php", // json datasource
                 type: "post",  // method  , by default get
                 error: function(){  // error handling
                   console.log('error al mostrar datos')
                 }
             },
             columnDefs: [
                 {
                     "targets": 0,
                     "orderable": false,
                     "searchable": false
                 },
                 {
                     targets:2,
                     render: function ( data, type, row, meta ) {
                         if(type === 'display'){
                             //data = '<a href="basic.php?game=' + encodeURIComponent(data) + '">' + data + '</a>';
                             if (rol !== 'usuario')
                                data = '<a href="#" onclick="abrirModalInfo();">' + data + '</a>';
                         }
                         return data;
                     },
                 },
                 {
                     targets:47,
                     render: function ( data, type, row, meta ) {
                         if(type === 'display'){
                             //data = '<a href="basic.php?game=' + encodeURIComponent(data) + '">' + data + '</a>';
                             //if (rol !== 'usuario')
                                 data = '<a href="#" onclick="abrirPDF(\'' + row[47] + '\');" >'+data+'</a>';
                         }
                         return data;
                     },
                 }
             ],
             fixedColumns:   {
                 leftColumns: 8
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
             scrollY: $(window).height()-280,
             //scrollY: 300,
             scrollX: true,
             deferRender: true,
             scroller: {
                 loadingIndicator: true
             }
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
        t.draw();
    }

    $('#tableData tbody').on( 'click', 'tr', function (evt) {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            $('#deleteTriger').prop('disabled',true);
            $(this).find("td:first input:checkbox").prop("checked",false);
        }
        else {
            t.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteTriger').prop('disabled',false);
            $(this).find("td:first input:checkbox").prop("checked",true);

            var dataArr = [];
            var rows = $('tr.selected');
            var rowData = t.rows( rows ).data();

            $.each($(rowData[0]),function(key,value){
                dataArr.push(value);
            });
        }
        //console.log(dataArr);
        //poner datos en el modal
        // metalurgico
        $('#selectFamilia').trigger('change');
        $('#id1').val(dataArr[2]);
        $('#inputFecha').val(dataArr[3]);
        $('#inputTurno').val(dataArr[4]);
        $('#inputOlla').val(dataArr[5]);
        $("#selectFamilia option:contains("+dataArr[6]+")").attr('selected', 'selected');
        $("#selectModelo option:contains("+dataArr[7]+")").attr('selected', 'selected');
        $('#inputCavidad').val(dataArr[8]);
        $('#inputDurezaMin').val(dataArr[9]);
        $('#inputDurezaMax').val(dataArr[10]);
        $('#inputNodularidad').val(dataArr[11]);
        $('#inputNod').val(dataArr[12]);
        $('#inputPerlita').val(dataArr[13]);
        $('#inputFerrita').val(dataArr[14]);
        $('#inputCarburos').val(dataArr[15]);
        $("#selectTipoGrafito option:contains("+dataArr[16]+")").attr('selected','selected');
        $('#inputGrafitoMin').val(dataArr[17]);
        $('#inputGrafitoMax').val(dataArr[18]);
        $('#inputEsteadita').val(dataArr[19]);

        console.log(dataArr[6]);
        if (dataArr[6] === 'Mazda') {
            $('#divLocalizacionEdit').fadeIn('slow');
            $("#selectLocalizacionEdit option:contains("+dataArr[20]+")").attr('selected','selected');
        } else {
            $('#divLocalizacionEdit').fadeOut('slow');
        }

        if (dataArr[7] === 'N/A')
            $('#checkCavidadEdit').attr('checked',true);
        else
            $('#checkCavidadEdit').attr('checked',false);
        
        if (dataArr[8] === 'N/A')
            $('#checkDurezaMinEdit').attr('checked',true);
        else
            $('#checkDurezaMinEdit').attr('checked',false);

        if (dataArr[9] === 'N/A')
            $('#checkDurezaMaxEdit').attr('checked',true);
        else
            $('#checkDurezaMaxEdit').attr('checked',false);

        if (dataArr[10] === 'N/A')
            $('#checkNodularidadEdit').attr('checked',true);
        else
            $('#checkNodularidadEdit').attr('checked',false);

        if (dataArr[11] === 'N/A')
            $('#checkNodEdit').attr('checked',true);
        else
            $('#checkNodEdit').attr('checked',false);

        //quimico
        $('#id2').val(dataArr[2]);
        $('#inputSi').val(dataArr[22]);
        $('#inputMn').val(dataArr[23]);
        $('#inputP').val(dataArr[24]);
        $('#inputMg').val(dataArr[25]);
        $('#inputCr').val(dataArr[26]);
        $('#inputNi').val(dataArr[27]);
        $('#inputMo').val(dataArr[28]);
        $('#inputCu').val(dataArr[29]);
        $('#inputAl').val(dataArr[30]);
        $('#inputTi').val(dataArr[31]);
        $('#inputV').val(dataArr[32]);
        $('#inputSn').val(dataArr[33]);
        $('#inputPb').val(dataArr[34]);
        $('#inputC').val(dataArr[35]);
        $('#inputS').val(dataArr[36]);

        //Temperatura e inoculante
        $('#id3').val(dataArr[2]);
        $('#inputSangrado').val(dataArr[38]);
        $('#inputVaciado').val(dataArr[39]);
        $('#inputKg').val(dataArr[40]);
        $('#inputTiempo').val(dataArr[41]);
    } );

    $('#checkCavidad').on('change', function (e) {
       if ($(this).prop('checked')){
           $('#newCavidad').val('N/A');
           $('#newCavidad').css('pointer-events', 'none');
       }
       else{
           $('#newCavidad').val('');
           $('#newCavidad').css('pointer-events', 'all');
       }
    });

    $('#checkDurezaMin').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#newDurezaMin').val('N/A');
            $('#newDurezaMin').css('pointer-events','none');
        }
        else{
            $('#newDurezaMin').val('');
            $('#newDurezaMin').css('pointer-events','all');
        }
    });

    $('#checkDurezaMax').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#newDurezaMax').val('N/A');
            $('#newDurezaMax').css('pointer-events','none');
        }
        else{
            $('#newDurezaMax').val('');
            $('#newDurezaMax').css('pointer-events','all');
        }
    });

    $('#checkNodularidad').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#newNodularidad').val('N/A');
            $('#newNodularidad').css('pointer-events','none');
        }
        else{
            $('#newNodularidad').val('');
            $('#newNodularidad').css('pointer-events','all');
        }
    });

    $('#checkNod').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#newNod').val('N/A');
            $('#newNod').css('pointer-events','none');
        }
        else{
            $('#newNod').val('');
            $('#newNod').css('pointer-events','all');
        }
    });

    $('#checkCavidadEdit').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#inputCavidad').val('N/A');
            $('#inputCavidad').css('pointer-events', 'none');
        }
        else{
            $('#inputCavidad').val('');
            $('#inputCavidad').css('pointer-events', 'all');
        }
    });

    $('#checkDurezaMinEdit').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#inputDurezaMin').val('N/A');
            $('#inputDurezaMin').css('pointer-events','none');
        }
        else{
            $('#inputDurezaMin').val('');
            $('#inputDurezaMin').css('pointer-events','all');
        }
    });

    $('#checkDurezaMaxEdit').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#inputDurezaMax').val('N/A');
            $('#inputDurezaMax').css('pointer-events','none');
        }
        else{
            $('#inputDurezaMax').val('');
            $('#inputDurezaMax').css('pointer-events','all');
        }
    });

    $('#checkNodularidadEdit').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#inputNodularidad').val('N/A');
            $('#inputNodularidad').css('pointer-events','none');
        }
        else{
            $('#inputNodularidad').val('');
            $('#inputNodularidad').css('pointer-events','all');
        }
    });

    $('#checkNodEdit').on('change', function (e) {
        if ($(this).prop('checked')){
            $('#inputNod').val('N/A');
            $('#inputNod').css('pointer-events','none');
        }
        else{
            $('#inputNod').val('');
            $('#inputNod').css('pointer-events','all');
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

    function insertData() {
        let data = null;
        let familia = $('#familias option:selected').text();
        let modelo = $('#modelos option:selected').text();
        let olla = $('#newOlla').val();
        let cavidad = $('#newCavidad').val();
        let hoja = $('#hoja').val();
        let contador = 0;

        if (familia === 'Familia') {
            $('#familias').css('border-color', 'red');
            contador++;
        } else
            $('#familias').css('border-color', '#babfc7');

        if (modelo === 'Modelo') {
            $('#modelos').css('border-color', 'red');
            contador++;
        } else
            $('#modelos').css('border-color', '#babfc7');

        if (olla === '') {
            $('#newOlla').css('border-color', 'red');
            contador++;
        } else
            $('#newOlla').css('border-color', '#babfc7');

        if (cavidad === '') {
            $('#newCavidad').css('border-color', 'red');
            contador++;
        } else
            $('#newCavidad').css('border-color', '#babfc7');

        if (opcionInsertar === 1) { //metalurgico
            if ($('#newGrafito option:selected').text() === 'Grafito') {
                $('#newGrafito').css('border-color', 'red');
                contador++;
            } else
                $('#newGrafito').css('border-color', '#babfc7');

            $('#formMetalurgicoAdd').find(':input').each(function () {
                var elemento= this;
                console.log(elemento.id);
                if (elemento.value === '') {
                    $("#" + elemento.id).css('border-color', 'red');
                    contador++;
                }
                else
                    $("#"+elemento.id).css('border-color','#babfc7');
            });
            data = $('#formMetalurgicoAdd').serialize()+'&familia='+familia+'&modelos='+modelo+'&olla='+olla+'&cavidad='+cavidad+'&hoja='+hoja;
        } else if (opcionInsertar === 2) { //quimico
            $('#formQuimicoAdd').find(':input').each(function () {
                var elemento= this;
                if (elemento.value === '') {
                    $('#' + elemento.id).css('border-color', 'red');
                    contador++;
                }
                else
                    $('#'+elemento.id).css('border-color','#babfc7');
            });
            data = $('#formQuimicoAdd').serialize()+'&familia='+familia+'&modelos='+modelo+'&olla='+olla+'&cavidad='+cavidad+'&hoja='+hoja;
        } else if (opcionInsertar === 3) { //temperatura
            $('#formTemperaturaAdd').find(':input').each(function () {
                var elemento= this;
                if (elemento.value === '') {
                    $('#' + elemento.id).css('border-color', 'red');
                    contador++;
                }
                else
                    $('#'+elemento.id).css('border-color','#babfc7');
            });
            data = $('#formTemperaturaAdd').serialize()+'&familia='+familia+'&modelos='+modelo+'&olla='+olla+'&cavidad='+cavidad+'&hoja='+hoja;
        }

        if (contador === 0) {
             $.ajax({
                 url: '../peticiones/InsertData.php',
                 method: 'post',
                 data: data,
                 success: function () {
                     $('#requestform').modal('hide'); //cerrar modal de add data
                     $('#modalsuccess').modal('show'); //mostrar modal de confirmacion
                     //limpiar campos
                     //metalurgico
                     $("#familias option[value='']").prop('selected', true);
                     //$("#modelos option[value='']").prop('selected', true);
                     $("#modelos").find('option').remove().end().append("<option selected disabled value=''>Modelo</option>");
                     $("#divLocalizacion").fadeOut('slow');

                     $('#newOlla').val('');
                     $('#newCavidad').val('');
                     $('#newDurezaMin').val('');
                     $('#newDurezaMax').val('');
                     $('#newNodularidad').val('');
                     $('#newNod').val('');
                     $('#newPerlita').val('');
                     $('#newFerrita').val('');
                     $('#newCarburos').val('');
                     $("#newGrafito option[value='']").prop('selected', true);
                     $('#newGrafitoMin').val('');
                     $('#newGrafitoMax').val('');
                     $('#newEsteadita').val('');
                     //quimico
                     $('#newSi').val('');
                     $('#newMn').val('');
                     $('#newP').val('');
                     $('#newMg').val('');
                     $('#newCr').val('');
                     $('#newNi').val('');
                     $('#newMo').val('');
                     $('#newCu').val('');
                     $('#newAl').val('');
                     $('#newTi').val('');
                     $('#newV').val('');
                     $('#newSn').val('');
                     $('#newPb').val('');
                     $('#newC').val('');
                     $('#newS').val('');
                     //temperatura
                     $('#newSangradoTemperatura').val('');
                     $('#newVaciadoTemperatura').val('');
                     $('#newKgTemperatura').val('');
                     $('#newTiempoTemperatura').val('');

                     t.draw();
                 }
              });
        }
    }

    function cancelarUpdate() {
        $('#deleteTriger').prop('disabled',true);
        if (opcionEditar === 1) {
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
            $('#selectTipoGrafito').attr('disabled',true);
            $('#inputGrafitoMin').attr('disabled',true);
            $('#inputGrafitoMax').attr('disabled',true);
            $('#inputEsteadita').attr('disabled',true);
            $('#checkCavidadEdit').attr('disabled',true);
            $('#checkDurezaMinEdit').attr('disabled',true);
            $('#checkDurezaMaxEdit').attr('disabled',true);
            $('#checkNodularidadEdit').attr('disabled',true);
            $('#checkNodEdit').attr('disabled',true);
            $('#selectLocalizacionEdit').attr('disabled',true);
            $('#btnCancelarTres').fadeOut('slow');
            $('#btnEditarTres').removeClass('btn-success');
            $('#btnEditarTres').addClass('btn-outline-blue');
            $('#btnEditarTres').html('Editar');
        } else if (opcionEditar === 2) {
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
            $('#btnCancelarTres').fadeOut('slow');
            $('#btnEditarTres').removeClass('btn-success');
            $('#btnEditarTres').addClass('btn-outline-blue');
            $('#btnEditarTres').html('Editar');
        } else if (opcionEditar === 3) {
            $('#inputSangrado').attr('disabled',true);
            $('#inputVaciado').attr('disabled',true);
            $('#inputKg').attr('disabled',true);
            $('#inputTiempo').attr('disabled',true);
            $('#btnCancelarTres').fadeOut('slow');
            $('#btnEditarTres').removeClass('btn-success');
            $('#btnEditarTres').addClass('btn-outline-blue');
            $('#btnEditarTres').html('Editar');
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
        $('#selectTipoGrafito').attr('disabled',true);
        $('#inputGrafitoMin').attr('disabled',true);
        $('#inputGrafitoMax').attr('disabled',true);
        $('#inputEsteadita').attr('disabled',true);
        $('#checkCavidadEdit').attr('disabled',true);
        $('#checkDurezaMinEdit').attr('disabled',true);
        $('#checkDurezaMaxEdit').attr('disabled',true);
        $('#checkNodularidadEdit').attr('disabled',true);
        $('#checkNodEdit').attr('disabled',true);
        $('#selectLocalizacionEdit').attr('disabled',true);
        $('#btnCancelarUno').fadeOut('slow');
        $('#btnEditarUno').removeClass('btn-success');
        $('#btnEditarUno').addClass('btn-outline-blue');
        $('#btnEditarUno').html('Editar');
    }

    function cancelarActualizarQuimico() {
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
        $('#btnCancelarDos').fadeOut('slow');
        $('#btnEditarDos').removeClass('btn-success');
        $('#btnEditarDos').addClass('btn-outline-blue');
        $('#btnEditarDos').html('Editar');
    }

    function cancelarActualizarTemperatura() {
        $('#inputSangrado').attr('disabled',true);
        $('#inputVaciado').attr('disabled',true);
        $('#inputKg').attr('disabled',true);
        $('#inputTiempo').attr('disabled',true);
        $('#btnCancelarTres').fadeOut('slow');
        $('#btnEditarTres').removeClass('btn-success');
        $('#btnEditarTres').addClass('btn-outline-blue');
        $('#btnEditarTres').html('Editar');
    }

    function seleccionarEvento(e) {
        if ($(e).hasClass('btn-outline-blue')) {
            if (opcionEditar === 1) {
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
                $('#selectTipoGrafito').attr('disabled',false);
                $('#inputGrafitoMin').attr('disabled',false);
                $('#inputGrafitoMax').attr('disabled',false);
                $('#inputEsteadita').attr('disabled',false);
                $('#checkCavidadEdit').attr('disabled',false);
                $('#checkDurezaMinEdit').attr('disabled',false);
                $('#checkDurezaMaxEdit').attr('disabled',false);
                $('#checkNodularidadEdit').attr('disabled',false);
                $('#checkNodEdit').attr('disabled',false);
                $('#selectLocalizacionEdit').attr('disabled',false);

                $('#btnCancelarTres').fadeIn('slow');

            } else if (opcionEditar === 2) {
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

                $('#btnCancelarTres').fadeIn('slow');
            } else if(opcionEditar === 3) {
                $(e).removeClass('btn-outline-blue');
                $(e).addClass('btn-success');
                $(e).html('Guardar');

                //habilitar form 3
                $('#inputSangrado').attr('disabled',false);
                $('#inputVaciado').attr('disabled',false);
                $('#inputKg').attr('disabled',false);
                $('#inputTiempo').attr('disabled',false);

                $('#btnCancelarTres').fadeIn('slow');
            }
        } else if ($(e).hasClass('btn-success')) {
            if (opcionEditar === 1) {
                $(e).removeClass('btn-success');
                $(e).addClass('btn-outline-blue');
                $(e).html('Editar');

                //hacer update
                actualizarMetalurgico();
                $('#btnCancelarTres').fadeOut('slow');

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
                $('#selectTipoGrafito').attr('disabled',true);
                $('#inputGrafitoMin').attr('disabled',true);
                $('#inputGrafitoMax').attr('disabled',true);
                $('#inputEsteadita').attr('disabled',true);
                $('#checkCavidadEdit').attr('disabled',true);
                $('#checkDurezaMinEdit').attr('disabled',true);
                $('#checkDurezaMaxEdit').attr('disabled',true);
                $('#checkNodularidadEdit').attr('disabled',true);
                $('#checkNodEdit').attr('disabled',true);
                $('#selectLocalizacionEdit').attr('disabled',true);

            } else if(opcionEditar === 2) {
                $(e).removeClass('btn-success');
                $(e).addClass('btn-outline-blue');
                $(e).html('Editar');

                //hacer update
                actualizarQuimico();
                $('#btnCancelarTres').fadeOut('slow');

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
            } else if(opcionEditar === 3) {
                $(e).removeClass('btn-success');
                $(e).addClass('btn-outline-blue');
                $(e).html('Editar');

                //hacer update
                actualizarTemperatura();
                $('#btnCancelarTres').fadeOut('slow');

                //des-habilitar form 3
                $('#inputSangrado').attr('disabled',true);
                $('#inputVaciado').attr('disabled',true);
                $('#inputKg').attr('disabled',true);
                $('#inputTiempo').attr('disabled',true);
            }
        }
    }

    function cerrarModalUpdate() {
        $('#modalinfo').modal('hide');
        $('#deleteTriger').prop('disabled',true);
        cancelarActualizarMetalurgico();
        cancelarActualizarQuimico();
        cancelarActualizarTemperatura();
        t.draw();
    }

    function cerrarModalAdd() {
        $('#requestform').modal('hide');
        //limpiar campos
        //metalurgico
        $("#familias option[value='']").prop('selected', true).css('border-color', '#babfc7');
        $("#familias").css('border-color', '#babfc7');
        $("#modelos").find('option').remove().end().append("<option selected disabled value=''>Modelo</option>").css('border-color', '#babfc7');;

        $('#newOlla').val('').css('border-color', '#babfc7');
        $('#newCavidad').val('').css('border-color', '#babfc7');
        $('#newDurezaMin').val('').css('border-color', '#babfc7');
        $('#newDurezaMax').val('').css('border-color', '#babfc7');
        $('#newNodularidad').val('').css('border-color', '#babfc7');
        $('#newNod').val('').css('border-color', '#babfc7');
        $('#newPerlita').val('').css('border-color', '#babfc7');
        $('#newFerrita').val('').css('border-color', '#babfc7');
        $('#newCarburos').val('').css('border-color', '#babfc7');
        $("#newGrafito option[value='']").prop('selected', true).css('border-color', '#babfc7');
        $("#newGrafito").css('border-color', '#babfc7');
        $('#newGrafitoMin').val('').css('border-color', '#babfc7');
        $('#newGrafitoMax').val('').css('border-color', '#babfc7');
        $('#newEsteadita').val('').css('border-color', '#babfc7');
        //quimico
        $('#newSi').val('').css('border-color', '#babfc7');
        $('#newMn').val('').css('border-color', '#babfc7');
        $('#newP').val('').css('border-color', '#babfc7');
        $('#newMg').val('').css('border-color', '#babfc7');
        $('#newCr').val('').css('border-color', '#babfc7');
        $('#newNi').val('').css('border-color', '#babfc7');
        $('#newMo').val('').css('border-color', '#babfc7');
        $('#newCu').val('').css('border-color', '#babfc7');
        $('#newAl').val('').css('border-color', '#babfc7');
        $('#newTi').val('').css('border-color', '#babfc7');
        $('#newV').val('').css('border-color', '#babfc7');
        $('#newSn').val('').css('border-color', '#babfc7');
        $('#newPb').val('').css('border-color', '#babfc7');
        $('#newC').val('').css('border-color', '#babfc7');
        $('#newS').val('').css('border-color', '#babfc7');
        //temperatura
        $('#newSangradoTemperatura').val('').css('border-color', '#babfc7');
        $('#newVaciadoTemperatura').val('').css('border-color', '#babfc7');
        $('#newKgTemperatura').val('').css('border-color', '#babfc7');
        $('#newTiempoTemperatura').val('').css('border-color', '#babfc7');
    }

    function abrirModalInfo() {
        $('#pills-home-tab').trigger('click');
        $('#modalinfo').modal('show');

        /*if ($('#inputCavidad').val() === 'N/A')
          $('#checkCavidadEdit').attr('checked',true);*/
    }

    function abrirModalAdd() {
        $('#pills-home-tab2').trigger('click');
        $('#requestform').modal('show');
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
        let familia = $('#familias option:selected').text();

        if (familia === 'Mazda')
            $('#divLocalizacion').fadeIn('slow');
        else
            $('#divLocalizacion').fadeOut('slow');
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

    function obtenerModelosQuimico() {
        let id = $('#familiasQuimico').val();
        $.ajax({
            url: '../peticiones/modelos/select.php',
            method: 'GET',
            data: {id:id},
            dataType: 'json',
            async: false,
            success: function (response) {
                $('#modelosQuimico').html('');
                $('#modelosQuimico').append('<option selected disabled="true">Modelo</option>');
                $.each(response, function (key,value) {
                    $('#modelosQuimico').append('<option>'+value.modelo+'</option>');
                });
            }
        });
    }

    function obtenerModelosTemperatura() {
        let id = $('#familiasTemperatura').val();
        $.ajax({
            url: '../peticiones/modelos/select.php',
            method: 'GET',
            data: {id:id},
            dataType: 'json',
            async: false,
            success: function (response) {
                $('#modelosTemperatura').html('');
                $('#modelosTemperatura').append('<option selected disabled="true">Modelo</option>');
                $.each(response, function (key,value) {
                    $('#modelosTemperatura').append('<option>'+value.modelo+'</option>');
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
                $('#hoja').val('');

                $.each(response, function (key,value) {
                    $('#hoja').val(value.hoja_inspeccion);
//                    $('#hoja').append('<option>'+value.hoja_inspeccion+'</option>');
                });
            }
        });
    }

    function obtenerHojasQuimico() {
        let modelo = $('#modelosQuimico option:selected').text();
        $.ajax({
            url: '../peticiones/hojas_inspeccion/select.php',
            method: 'GET',
            data: {modelo:modelo},
            dataType: 'json',
            async: false,
            success: function (response) {
                $('#hojaquimico').val('');

                $.each(response, function (key,value) {
                    $('#hojaquimico').val(value.hoja_inspeccion);
//                    $('#hoja').append('<option>'+value.hoja_inspeccion+'</option>');
                });
            }
        });
    }

    function obtenerHojasTemperatura() {
        let modelo = $('#modelosTemperatura option:selected').text();
        $.ajax({
            url: '../peticiones/hojas_inspeccion/select.php',
            method: 'GET',
            data: {modelo:modelo},
            dataType: 'json',
            async: false,
            success: function (response) {
                $('#hojaTemperatura').val('');

                $.each(response, function (key,value) {
                    $('#hojaTemperatura').val(value.hoja_inspeccion);
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
           }
        });
    }
    
/*    function setdata() {
        $.ajax({
            method: 'post',
            url: '../peticiones/InsertData.php',
            data: $('form').serialize() + '&familia=' + $('#familias option:selected').text(),
            success: function () {
                crearTabla();
            }
        });
    }*/

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
        t.columns.adjust().draw();
        if ($('#checkMetalurgico').prop('checked')){ //activar columnas de metalurgico
            t.columns( [7,8,9,10,11,12,13,14,15,16,17,18,19,20,21] ).visible( true );
        } else { // desactivar columnas de metalurgico
            t.columns( [7,8,9,10,11,12,13,14,15,16,17,18,19,20,21] ).visible( false );
        }
    });

    $('#checkQuimico').on('change',function () {
        if ($('#checkQuimico').prop('checked')){ //activar columnas de quimico
            t.columns( [22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37] ).visible( true );
            t.columns.adjust().draw();
        } else { // desactivar columnas de metalurgico
            t.columns( [22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37] ).visible( false );
            t.columns.adjust().draw();
        }
    });

    $('#checkTemperatura').on('change',function () {
        if ($('#checkTemperatura').prop('checked')){ //activar columnas de metalurgico
            t.columns( [38,39,40,41,42] ).visible( true );
            t.columns.adjust().draw();
        } else { // desactivar columnas de metalurgico
            t.columns( [38,39,40,41,42] ).visible( false );
            t.columns.adjust().draw();
        }
    });

    $('#checkNotas').on('change',function () {
        if ($('#checkNotas').prop('checked')){ //activar columnas de notas
            t.columns( [43,44,45,46,47] ).visible( true );
            t.columns.adjust().draw();
        } else { // desactivar columnas de notas
            t.columns( [43,44,45,46,47] ).visible( false );
            t.columns.adjust().draw();
        }
    });

    function recargarTabla() {
        t.draw();
    }

    $('#formMetalurgicoAdd').submit(function (e) {
        $.ajax({
            url: '../peticiones/InsertData.php',
            method: 'post',
            data: $('#formMetalurgicoAdd').serialize()+'&familia='+$('#familias option:selected').text(),
            success: function () {
                t.draw();
               /* $('#requestform').modal('hide'); //ocultar modal de agregar
                //poner cajas y combos en blanco
                $("#familias option[value='']").prop('selected',true);
                $('#modelos option:contains("Modelo")').prop('selected',true);
                $('#newOlla').val('');
                $('#newCavidad').val('');
                $('#newDurezaMin').val('');
                $('#newDurezaMax').val('');
                $('#newNodularidad').val('');
                $('#newNod').val('');
                $('#newPerlita').val('');
                $('#newFerrita').val('');
                $('#newCarburos').val('');
                $('#inputTipoGrafito option:contains("Grafito")').prop('selected',true);
                $('#newGrafitoMin').val('');
                $('#newGrafitoMax').val('');
                $('#newEsteadita').val('');*/
            }
        });
        e.preventDefault();
    });

    $('#formQuimicoAdd').submit(function (e) {
        $.ajax({
            url: '../peticiones/InsertData.php',
            method: 'post',
            data: $('#formQuimicoAdd').serialize()+'&familia='+$('#familiasQuimico option:selected').text(),
            success: function () {
                t.draw();
                /* $('#requestform').modal('hide'); //ocultar modal de agregar
                 //poner cajas y combos en blanco
                 $("#familias option[value='']").prop('selected',true);
                 $('#modelos option:contains("Modelo")').prop('selected',true);
                 $('#newOlla').val('');
                 $('#newCavidad').val('');
                 $('#newDurezaMin').val('');
                 $('#newDurezaMax').val('');
                 $('#newNodularidad').val('');
                 $('#newNod').val('');
                 $('#newPerlita').val('');
                 $('#newFerrita').val('');
                 $('#newCarburos').val('');
                 $('#inputTipoGrafito option:contains("Grafito")').prop('selected',true);
                 $('#newGrafitoMin').val('');
                 $('#newGrafitoMax').val('');
                 $('#newEsteadita').val('');*/
            }
        });
        e.preventDefault();
    });

    $('#formTemperaturaAdd').submit(function (e) {
        $.ajax({
            url: '../peticiones/InsertData.php',
            method: 'post',
            data: $('#formTemperaturaAdd').serialize()+'&familia='+$('#familiasQuimico option:selected').text(),
            success: function () {
                t.draw();
                /* $('#requestform').modal('hide'); //ocultar modal de agregar
                 //poner cajas y combos en blanco
                 $("#familias option[value='']").prop('selected',true);
                 $('#modelos option:contains("Modelo")').prop('selected',true);
                 $('#newOlla').val('');
                 $('#newCavidad').val('');
                 $('#newDurezaMin').val('');
                 $('#newDurezaMax').val('');
                 $('#newNodularidad').val('');
                 $('#newNod').val('');
                 $('#newPerlita').val('');
                 $('#newFerrita').val('');
                 $('#newCarburos').val('');
                 $('#inputTipoGrafito option:contains("Grafito")').prop('selected',true);
                 $('#newGrafitoMin').val('');
                 $('#newGrafitoMax').val('');
                 $('#newEsteadita').val('');*/
            }
        });
        e.preventDefault();
    });

    $( "#f1" ).datepicker({ dateFormat: "yy-mm-dd" });
    $( "#f2" ).datepicker({ dateFormat: "yy-mm-dd" });

    function crearExcel() {
        let f1 = $('#f1').val();
        let f2 = $('#f2').val();

        window.open('../peticiones/CreateExcel.php?f1='+f1+'&f2='+f2,'_self');

        $('#f1').val('');
        $('#f2').val('');
    }

    function crearUsuario() {
        let nombre = $('#nombreusuarioadd').val();
        let apellido = $('#apellidousuarioadd').val();
        let correo = $('#correousuarioadd').val() + '@arbomex.com.mx';
        let contrasena = $('#passusuarioadd').val();
        let usuario = $('#userusuarioadd').val();
        let rol = $('#selectrolusuarioadd option:selected').text();

        if ((nombre && correo && apellido && contrasena && usuario) !== '') {
            $.ajax({
                url: '../admin/Usuarios.php',
                method: 'post',
                data: {accion:'add',nombre:nombre,apellido:apellido,usuario:usuario,correo:correo,contrasena:contrasena,rol:rol},
                success: function () {
                    $('#nombreusuarioadd').val('');
                    $('#correousuarioadd').val('');
                    $('#apellidousuarioadd').val('');
                    $('#passusuarioadd').val('');
                    $('#userusuarioadd').val('');
                    $("#selectrolusuarioadd option[value='']").prop('selected', true);
                    $("#modaladduser").modal('hide');
                   /* $('#alertausuario').fadeIn('slow');
                    setTimeout(function() {
                        $('#alertausuario').fadeOut('slow');
                    }, 2000);*/
                }
            });
        } else {
            alert('Debe llenar todos los campos');
        }
    }
    
    function actualizarPass() {
        let pass1 = $('#pass1').val();
        let pass2 = $('#pass2').val();
        let opcion = $('#validarpass').val();
        
        if (pass1 === pass2) {
            $.ajax({
                url: '../admin/Usuarios.php',
                method: 'post',
                data: {password:pass2,accion:opcion},
                success: function () {
                    $('#pass1').val('');
                    $('#pass2').val('');
                }
            })
        } else {
            $('#alertacambiarpass').fadeIn('slow');
            setTimeout(function () {
                $('#alertacambiarpass').fadeOut('slow');
            },2000);
        }
    }

    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href"); // activated tab

        if (target === '#pills-home2') {
            opcionInsertar = 1;
        } else if (target === '#pills-profile2') {
            opcionInsertar = 2;
        } else if (target === '#pills-home'){
            opcionEditar = 1;
        } else if (target === '#pills-profile') {
            opcionEditar = 2;
        } else if (target === '#pills-contact') {
            opcionEditar = 3;
        } else {
            opcionInsertar = 3;
        }
    });

    function abrirPDF(file) {
        window.open('../filespdf/'+file+'.pdf');
    }

    $("#nombreusuarioadd").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 122) && (inputValue !== 32 && inputValue !== 0)){
            event.preventDefault();
        }
    });

    $("#apellidousuarioadd").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 122) && (inputValue !== 32 && inputValue !== 0)){
            event.preventDefault();
        }
    });

    $('#correousuarioadd').blur(function () {
       let correo = $(this).val();
       let correo_arr = correo.split('@');
       $('#userusuarioadd').val(correo_arr[0]);
       $('#userusuarioadd').prop('disabled',true);
    });

    function cerrarModalAddUser() {
         $('#nombreusuarioadd').val('');
         $('#apellidousuarioadd').val('');
         $('#correousuarioadd').val('');
         $('#passusuarioadd').val('');
         $('#userusuarioadd').val('');
         $('#selectrolusuarioadd option:selected').text();
         $('#modaladduser').modal('hide');
    }

    function crearTablaUsers() {
       t2 = $('#tablausuarios').DataTable({
           "processing": true,
           "serverSide": true,
            ajax:{
                url :"../peticiones/ShowUsers.php", // json datasource
                type: "post",  // method  , by default get
                error: function(){  // error handling
                    console.log('error al mostrar datos')
                }
            },
           columnDefs: [
               {
                   "targets": [0,1,2,3,4],
                   "orderable": false,

               },
           ],
           destroy: true,
           dom: "frtip",
           "pageLength": 5,
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
           }
        });
    }

    function abrirModalShowUsers() {
        crearTablaUsers();
        $('#modalshowusers').modal('show');
    }

    function cerrarModalShowUsers() {
        $('#modalshowusers').modal('hide');
    }
    
    function eliminarUsuario(id) {
       $('#modalEliminarUsuario').modal('show');
       id_eliminar = id;
    }

    $('#btnEliminarUsuario').click(function () {
        $.ajax({
            url: '../peticiones/usuarios/DeleteUser.php',
            data: {id:id_eliminar},
            method: 'post',
            success: function () {
                // t2.draw();
                crearTablaUsers();
                $('#modalEliminarUsuario').modal('hide');
                t2.draw();
            }
        });
    });

    function resetPassword(id) {
        $('#modalpassreset').modal('show');
        id_reset = id;
    }

    $('#btnResetPass').click(function () {
        let pass1 = $('#pass1reset').val();
        let pass2 = $('#pass2reset').val();

        if (pass1 === '' || pass2 === '') {
            $('#alertaresetpass').html('Debe llenar todos los campos');
            $('#alertaresetpass').fadeIn('slow');
            setTimeout(function () {
                $('#alertaresetpass').fadeOut('slow');
            },2000);
        } else {
            if(pass2 === pass1) {
                $.ajax({
                    url: '../peticiones/usuarios/ResetPassword.php',
                    data: {id: id_reset,pass:pass1},
                    method: 'post',
                    success: function () {
                        $('#modalsuccessreset').modal('show');
                        $('#modalpassreset').modal('hide');
                        $('#pass1reset').val('');
                        $('#pass2reset').val('');
                    }
                })
            } else {
                $('#alertaresetpass').fadeIn('slow');
                setTimeout(function () {
                    $('#alertaresetpass').fadeOut('slow');
                },2000);
            }
        }

    });
    
    function abrirModalAddModelo() {
        $('#modaladdmodel').modal('show');
        obtenerFamiliasAdd();
    }

    function obtenerFamiliasAdd() {
        $.ajax({
            url: '../peticiones/familia/select.php',
            method: 'get',
            dataType: 'json',
            success: function (response) {
                $('#selectfamiliasadd').empty();
                $('#selectfamiliasadd').append('<option selected value="">Seleccionar</option>');
                $.each(response,function (key,value) {
                    $('#selectfamiliasadd').append('<option value="'+value.id+'">'+value.familia+'</option>');
                })
            }
        });
    }
    
    function obtenerModelosAdd() {
        let id = $('#selectfamiliasadd').val();
        $.ajax({
           url: '../peticiones/modelos/select.php',
           method: 'get',
           data: {id:id},
           dataType: 'json',
           success: function (response) {
               $('#selectmodelosadd').empty();
               $('#selectmodelosadd').append('<option selected value="">Seleccionar</option>');
               $.each(response, function (key,value) {
                   $('#selectmodelosadd').append('<option value="'+value.id+'">'+value.modelo+'</option>');
               })
           }
        });
    }

    $('#btnAbrirAddFamilia').click(function () {
        $('#modaladdfamilia').modal('show');
    });

    function agregarFamilia() {
       let nombre = $('#nombreFamiliaAdd').val();
       $.ajax({
          url: '../peticiones/familia/insert.php',
          method: 'post',
          data: {familia:nombre},
          success: function (data) {
              if (data === 'error') {
                $('#nombreFamiliaAdd').css('border-color','red');
                $('#erroragregarfamilia').fadeIn('slow');
                setTimeout(function () {
                    $('#nombreFamiliaAdd').css('border-color','');
                    $('#erroragregarfamilia').fadeOut('slow');
                }, 2000);
              } else {
                  $('#nombreFamiliaAdd').val('');
                  $('#modaladdfamilia').modal('hide');
              }
              obtenerFamiliasAdd();
          }
       });
    }

    $('#btnAbrirAddModelo').click(function () {
       let familia = $('#selectfamiliasadd option:selected').text();
       if (familia !== 'Seleccionar') {
           $('#modaladdmodelo').modal('show');
           $('#textomodelo').html('Agregar modelo para la familia: ' + familia);
       }
    });

    $('#formModelos').on('submit',function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        let id_familia = $("#selectfamiliasadd").val();
        formData.append('id_familia',id_familia);

        var isOk = true;
        $('input[type=file][data-max-size]').each(function(){
            if(typeof this.files[0] !== 'undefined'){
                var maxSize = parseInt($(this).attr('data-max-size'),10),
                    size = this.files[0].size;
                isOk = maxSize > size;
            }
        });

        if (isOk){
            $.ajax({
                url: '../peticiones/modelos/insert.php',
                method: 'post',
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    if (response === 'error'){
                        $('#nombreModeloAdd').css('border-color','red');
                        $('#mensajeaddmodelo').fadeIn('slow');
                        setTimeout(function () {
                            $('#nombreModeloAdd').css('border-color','');
                            $('#mensajeaddmodelo').fadeOut('slow');
                        },2000)
                    } else {
                        $('#nombreModeloAdd').val('');
                        $('#modaladdmodelo').modal('hide');
                        $('#selectfamiliasadd').trigger('change');
                    }
                }
            });
        } else {
            $('#inputarchivo').css('border-color','red');
            $('#mensajearchivo').fadeIn('slow');
            setTimeout(function () {
                $('#mensajearchivo').fadeOut('slow');
                $('#inputarchivo').css('border-color','');
            }, 2000);
        }

        $('#selectfamiliasadd').trigger('change');
    });

    function crearTablaModelos() {
        t3 = $('#tablamodelos').DataTable({
            "processing": true,
            "serverSide": true,
            destroy: true,
            "pageLength": 5,
            dom: "frtip",
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
            "ajax":{
                url :"../peticiones/modelos/selectTabla.php", // json datasource
                type: "post",  // method  , by default get
                error: function(){  // error handling

                }
            }
        });
    }

    function cerrarModalAddModelos() {
        $('#modaladdmodel').modal('hide');
        $('#selectmodelosadd').empty();
        $('#selectmodelosadd').append('<option selected="" value="">Seleccionar</option>');
    }

    function abrirModalShowModelos() {
        crearTablaModelos();
        $('#modalshowmodelos').modal('show');
    }

    function abrirModalEliminarModelo(id) {
        id_eliminar_modelo = id;
        $('#modalEliminarModelo').modal('show');
    }

    function abrirModalEliminarFamilia(familia) {
        familia_eliminar = familia;
        $('#modalEliminarFamilia').modal('show');
    }

    $('#btnEliminarFamilia').on('click',function () {
        $.ajax({
            url: '../peticiones/familia/delete.php',
            method: 'post',
            data: {familia:familia_eliminar},
            success: function () {
                $('#modalEliminarFamilia').modal('hide');
                t3.draw();
            }
        })
    });

    $('#btnEliminarModelo').on('click',function () {
        $.ajax({
            url: '../peticiones/modelos/delete.php',
            method: 'post',
            data: {id:id_eliminar_modelo},
            success: function () {
                $('#modalEliminarModelo').modal('hide');
                t3.draw();
            }
        })
    });

    function eliminarModelo(id) {
        $.ajax({
            url: '../peticiones/modelos/delete.php',
            method: 'post',
            data: {id:id},
            success: function () {
             t3.draw();
            }
        })
    }

    function eliminarArchivo(id) {
        $.ajax({
           url: '../peticiones/hojas_inspeccion/delete.php',
           method: 'post',
           data: {id:id},
           success: function () {
               t3.draw();
           }
        });
    }
    
    function subirArchivo(e,id) {
        let arreglo_ruta = $(e).val().split("\\");
        let val = $(e).val();
        let formulario = $(e).parent();
        $(e).siblings('span').text(arreglo_ruta[2]);
        var form = new FormData();
        let file = $(e).prop('files');

        form.append('id',id);
        form.append('file',file[0]);

        $.ajax({
           url: '../peticiones/hojas_inspeccion/insert.php',
           method: 'post',
           processData: false,
           contentType: false,
           data: form,
           success: function () {
               
           }
        });
    }

    function subir(e) {
        let id = $(e).attr('id');
        let arreglo_id = id.split('_');
        $("#inputsubirarchivo_"+arreglo_id[1]).trigger('click');
    }

    function abrirModalEditarModelo(e) {
        $('#modaleditmodelo').modal('show');
        let row = $(e).parent().parent();
        let datos = row[0]['cells'];
        let familia_actual = datos[1].innerHTML;
        let modelo_actual = datos[2].innerHTML;
        $('#selectmodeloeditmodelo').val(modelo_actual).prop('disabled',true);

        $.ajax({
            url: '../peticiones/familia/select.php',
            method: 'get',
            dataType: 'json',
            success: function (response) {
                $('#selectfamiliaeditmodelo').empty();
                $.each(response,function (key,value) {
                    if (value.familia === familia_actual)
                        $('#selectfamiliaeditmodelo').append('<option value="'+value.id+'" selected>'+value.familia+'</option>');
                    else
                        $('#selectfamiliaeditmodelo').append('<option value="'+value.id+'">'+value.familia+'</option>');
                })
            }
        });

    }

    function editarModelo() {
        var form = new FormData();
        let familia = $('#selectfamiliaeditmodelo').val();
        let modelo = $('#selectmodeloeditmodelo').val();
        let file = $('#inputarchivoeditarmodelo').prop('files');
        form.append('familia',familia);
        form.append('modelo',modelo);
        form.append('file',file[0]);

        $.ajax({
           url: '../peticiones/modelos/update.php',
           method: 'post',
           data: form,
           processData: false,
           contentType: false,
           success: function () {
                t3.draw(false);
                $('#inputarchivoeditarmodelo').val('');
                $('#modaleditmodelo').modal('hide');
           }
        });
    }

    $("#nombreusuarioadd").on('blur',function () {
        let cadena = $(this).val().replace(/\b\w/g, l => l.toUpperCase());
        $(this).val(cadena);
    });

    $('#apellidousuarioadd').on('blur',function () {
        let cadena = $(this).val().replace(/\b\w/g, l => l.toUpperCase());
        $(this).val(cadena);
    });

    $("#nombreusuarioedit").on('blur',function () {
        let cadena = $(this).val().replace(/\b\w/g, l => l.toUpperCase());
        $(this).val(cadena);
    });

    $('#apellidousuarioedit').on('blur',function () {
        let cadena = $(this).val().replace(/\b\w/g, l => l.toUpperCase());
        $(this).val(cadena);
    });

    function abriModalEditUser(id) {
        id_actualizar_usuario = id;
        $.ajax({
            url: '../peticiones/usuarios/select.php',
            method: 'get',
            data: {id:id},
            dataType: 'json',
            success: function (response) {
                $.each(response, function (key,value) {
                    $('#nombreusuarioedit').val(value.name);
                    $('#apellidousuarioedit').val(value.apellido);
                    $('#correousuarioedit').val(value.email);
                    $('#userusuarioedit').val(value.user);
                    $("#selectrolusuarioedit option:contains("+value.rol+")").attr('selected', 'selected');
                    $('#modaladituser').modal('show');
                })
            }
        });
    }
    
    function actualizarUsuario() {
        let nombre = $('#nombreusuarioedit').val();
        let apellido =  $('#apellidousuarioedit').val();
        let correo =   $('#correousuarioedit').val();
        let user = $('#userusuarioedit').val();
        let rol = $('#selectrolusuarioedit option:selected').text();

        $.ajax({
           url: '../peticiones/usuarios/update.php',
           method: 'post',
           data: {id:id_actualizar_usuario,usuario:user,nombre:nombre,apellido:apellido,correo:correo,rol:rol},
           success: function () {
               $('#modaladituser').modal('hide');
               t2.draw();
           }
        });
    }

<?php echo '</script'; ?>
>
<?php }
}
