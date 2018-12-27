<?php
/* Smarty version 3.1.30, created on 2018-12-17 00:01:36
  from "C:\xampp2\htdocs\Arbomex\SabanaFundicionCambios\templates\inicio.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c173bc0303f60_58750605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2f147b07889619fec4cd868d5333c4b86422e45' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\Arbomex\\SabanaFundicionCambios\\templates\\inicio.html',
      1 => 1545026483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabecera.html' => 1,
    'file:pie.html' => 1,
  ),
),false)) {
function content_5c173bc0303f60_58750605 (Smarty_Internal_Template $_smarty_tpl) {
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
</style>

<!---- Modal --->
<!-- line modal -->
<div class="modal fade" id="requestform" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 600px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" >Nuevo Registro</h3>
            </div>
            <div class="modal-body">
                <!-- Steps starts here -->
                <div class="requestwizard">
                    <div class="requestwizard-row setup-panel">
                        <div class="requestwizard-step">
                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                            <p>Reporte metalurgico</p>
                        </div>
                        <div class="requestwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p>Análisis quimico</p>
                        </div>
                        <div class="requestwizard-step">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p>DETERM. C & S</p>
                        </div>
                        <div class="requestwizard-step">
                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                            <p>Temperatura</p>
                        </div>
                        <div class="requestwizard-step">
                            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                            <p>Inoculante</p>
                        </div>
                    </div>
                </div>

                <form role="form" method="post" action="../test.php">
                    <div class="row setup-content" id="step-1">
                        <div class="form-row ml-5">
                            <div class="col-md-6">
                                <input type="text" required class="form-control" placeholder="No. Olla" name="olla">
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" id="familias" onchange="obtenerModelos();">
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
                        </div>

                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <select class="form-control" id="modelos">
                                    <option selected disabled >Modelo</option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Cavidad" required>
                            </div>

                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Dureza" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="% Nodularidad" required>
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="NOD/mm2" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="% Perlita" required>
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="% Ferrita" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="% Carburos" required>
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                               <select class="form-control">
                                   <option selected disabled>Grafito</option>
                                   <option>IYII</option>
                                   <option>A+B</option>
                                   <option>III</option>
                                   <option>A+E</option>
                               </select>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Grafito tamaño" required>
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Esteadita" required>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
                            </div>
                        </div>

                    </div>

                    <div class="row setup-content" id="step-2">
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% Si">
                            </div>
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% Mn">
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% P">
                            </div>
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% Mg">
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% Cr">
                            </div>
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% Ni">
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% Mo">
                            </div>
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% Cu">
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% Al">
                            </div>
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% Ti">
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% V">
                            </div>
                            <div class="col">
                                <input type="text" required class="form-control" placeholder="% Sn">
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <input type="text" style="width: 200px" required class="form-control" placeholder="% Pb">
                            </div>
                            <div class="col">
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
                            </div>
                        </div>
                    </div>

                    <div class="row setup-content" id="step-3">
                        <div class="form-row ml-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="% C" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="% S" required>
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
                            </div>
                        </div>
                    </div>

                    <div class="row setup-content" id="step-4">
                        <div class="form-row ml-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Sangrado °C" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Vaciado °C" required>
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                                <button class="btn btn-primary nextBtn pull-right" type="button" >Siguiente</button>
                            </div>
                        </div>
                    </div>

                    <div class="row setup-content" id="step-5">
                        <div class="form-row ml-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Kg" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Tiempo" required>
                            </div>
                        </div>
                        <div class="form-row ml-3 mt-2">
                            <div class="col">
                               <select class="form-control" style="width: 200px;">
                                   <option selected disabled>Hoja inspeccion</option>
                               </select>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary nextBtn pull-right" type="submit" >Siguiente</button>
                            </div>
                        </div>
                    </div>
                </form>


                <!-- Form ends here -->
            </div>
        </div>
    </div>
</div>


<div class="">
    <div class="content-wrapper">
        <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button  data-toggle="modal" data-target="#requestform" style="margin-left: 5px; margin-top: 5px;" type="button" class="btn btn-success btn-min-width mr-1 mb-1">Agregar</button>
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
?>



<?php echo '<script'; ?>
>
    $(document).ready(function () {

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

    function obtenerModelos() {
        let combo = "";
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

    function setdata() {

    }
<?php echo '</script'; ?>
>
<?php }
}
