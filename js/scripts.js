var campos = ['','fecha','turno','no_olla','modelo','cavidad','dureza_min','nodularidad',
    'nod','perlita','ferrita','carburos','grafito_tipo','grafito_tamanio','esteadita','porcentaje_si',
    'porcentaje_mn','porcentaje_p','porcentaje_mg','porcentaje_cr','porcentaje_ni','porcentaje_mo',
    'porcentaje_cu','porcentaje_al','porcentaje_ti','porcentaje_v','porcentaje_sn','porcentaje_pb',
    'porcentaje_c','porcentaje_s','sangrado','vaciado','kg','tiempo','dia','semana','mes','anio','hoja_inspeccion',
    'familia','dureza_max','grafito_tamanio_max'];

var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");

var b64 = "";
var b64_2 = "";

toDataURL('http://198.139.19.88/ab01/Fundicion/SabanaFundicion/images/logo_arbomex.png');
toDataURL2('http://198.139.19.88/ab01/Fundicion/SabanaFundicion/images/Logo_50.png');

var buttonCommon = {
    exportOptions: {
        format: {
            body: function (data, column, row, node) {
                //select
                if (row === 4 || row === 12 || row === 38 || row === 39)
                    return $(data).find("option:selected").text();
                else if (row === 6 || row === 13){

                    let hijos = $(data).children();
                    let nodos = hijos[0].childNodes;

                    let min = nodos[0].innerText;
                    let max = nodos[2].innerText;
                    return min + "/" + max;
                }
                else return $(data).html();
            }
        }
    }
};

$(document).ready( function () {

    var t =  $('#tableData').DataTable({
        "ajax":"../peticiones/ReadOnlyData.php",

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
        dom: 'Bfrtip',
        buttons: [
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
        ]
    });

    $('#txtBuscar').keyup(function(){
        t.search($(this).val()).draw() ;
    });

    $('#btnExcel').on('click', function() {
        $('.buttons-excel').click()
    });

    $('#btnPdf').on('click', function() {
        $('.buttons-pdf').click()
    });

    $('#btnShowModalAddElement').click(function () {
        $.ajax({
            url: '../peticiones/CreateData.php',
            method: 'get',
            dataType: 'json',
            success: function (data) {
                let num_id = parseInt(data[0]['id']);
                let username = data[0]['username'];
                let id = "id_" + num_id;
                let f = new Date();

                let clock = new Date();
                let hour = clock.getHours();
                let minutes = clock.getMinutes();
                let seconds = clock.getSeconds();
                let semana = clock.getWeekOfYear();
                let turno = '';
                let dia = "";

                if (minutes < '10')
                    minutes = '0'+minutes;

                if (hour < '10')
                    hour = '0'+hour;

                let print_clock = hour + ":" + minutes + ":" + seconds;

                if (print_clock >= '06:00:00' && print_clock < '14:30:00')
                    turno = '1ero';
                else if(print_clock >= '14:30:00' && print_clock <= '21:29:59')
                    turno = '2do';
                else if (print_clock >= '21:30:00' && print_clock <= '23:59:59')
                    turno = '3ero';
                else if (print_clock >= '00:00:00' && print_clock < '05:59:59')
                    turno = '3ero';

                if(f.getDate() < '10')
                    dia = "0"+f.getDate();

                t.row.add( [
                    '<div style="width: 10px;"><button onclick="deleteData('+num_id+')" class="la la-trash"></button></div>',
                    '<div class="status_'+id+'" style="width: 10px; background: red; color: transparent">s</div>',
                    '<div style="width: 100px;">'+num_id+'</div>',
                    '<div style="width: 100px; border-bottom: 1px solid black;">'+ f.getFullYear() + "-" + (f.getMonth() +1 ) + "-" +dia+'</div>',
                    '<div style="border-bottom: 1px solid black;">'+turno+'</div>',
                    '<div class='+id+' onblur="updateData(this,3);" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div style="border-bottom: 1px solid black;">' +
                    '<select style="border: 0;" class="familia'+id+'" onchange="updateDataCombo(this,39);">' + obtenerFamilias() +'</div>',
                    '<div style="border-bottom: 1px solid black;"><select  style="border: 0;" class="model'+id+'" onchange="updateDataCombo(this,4);">' +
                    '                        <option selected disabled="true">Seleccionar</option>\n' +
                    '                    </select></div>',
                    '<div class='+id+' onblur="updateData(this,5);" contentEditable="true" ondblclick="habilitarDiv(this)"  style="border-bottom: 1px solid black;"></div>',
                    '<div class="container" style="width: 200px;"><div class="row"><div class="col-5 '+id+'" ondblclick="habilitarDiv(this)" onblur="updateData(this,6);" contentEditable="true" style="border-bottom: 1px solid black;"></div><span>/</span><div class="col-5 '+id+'" ondblclick="habilitarDiv(this)" onblur="updateData(this,40);" contentEditable="true" style="border-bottom: 1px solid black;"></div></div>',
                    '<div class='+id+' onblur="updateData(this,7);" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,8);" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,9);" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,10)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,11)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div style="border-bottom: 1px solid black;">' +
                    '<select style="border: 0;" class="'+id+'" onchange="updateDataCombo(this,12);">' +
                    '<option>a+b</option><option>IYII</option>' +
                    '</select>' +
                    '</div>',
                    '<div class="container" style="width: 200px;"><div class="row"><div class="col-5 '+id+'" ondblclick="habilitarDiv(this)" onblur="updateData(this,13);" contentEditable="true" style="border-bottom: 1px solid black;"></div><span>+</span><div class="col-5 '+id+'" ondblclick="habilitarDiv(this)" onblur="updateData(this,41);" contentEditable="true" style="border-bottom: 1px solid black;"></div></div>',
                    '<div class='+id+' onblur="updateData(this,14)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,15)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,16)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,17)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,18)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,19)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,20)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,21)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,22)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,23)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,24)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,25)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,26)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,27)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,28)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,29)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,30)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,31)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,32)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,33)" contentEditable="true" ondblclick="habilitarDiv(this)" style="border-bottom: 1px solid black;"></div>',
                    '<div class='+id+' onblur="updateData(this,34)" style="border-bottom: 1px solid black;">'+diasSemana[f.getDay()]+'</div>',
                    '<div class='+id+' onblur="updateData(this,35)" style="border-bottom: 1px solid black;">'+semana+'</div>',
                    '<div class='+id+' onblur="updateData(this,36)" style="border-bottom: 1px solid black;">'+(f.getMonth()+1)+'</div>',
                    '<div class='+id+' onblur="updateData(this,37)" style="border-bottom: 1px solid black;">'+f.getFullYear()+'</div>',
                    '<div style="border-bottom: 1px solid black;">' +
                    '<select style="border: 0" class="hoja'+id+'" onchange="updateDataCombo(this,38)">' +
                    '<option>DHIF-053</option>' +
                    '<option>DHIF-069</option>' +
                    '<option>DHIF-075</option>' +
                    '<option>DHIF-077</option>' +
                    '<option>DHIF-078</option>' +
                    '<option>DHIF-079</option>' +
                    '<option>DHIF-084</option>' +
                    '<option>DHIF-087</option>' +
                    '<option>DHIF-089</option>' +
                    '<option>DHIF-091</option>' +
                    '<option>DHIF-092</option>' +
                    '<option>DHIF-093</option>' +
                    '<option>DHIF-094</option>' +
                    '<option>DHPF-051 #6</option>' +
                    '<option>DHPF-069 #4</option>' +
                    '<option>DHPF-072 #1</option>' +
                    '<option>DHPF-072 #2</option>' +
                    '<option>DHPF-072 #3</option>' +
                    '<option>DHPF-075 #1</option>' +
                    '<option>DHPF-075 #2</option>' +
                    '<option>DHPF-075 #3</option>' +
                    '<option>DHPF-078</option>' +
                    '<option>DHPF-079</option>' +
                    '<option>DHPF-084</option>' +
                    '<option>DHPF-087</option>' +
                    '<option>DHPF-089</option>' +
                    '<option>DHPF-091</option>' +
                    '<option>DHPF-092</option>' +
                    '<option>DHPF-094</option>' +
                    '<option>#N/A</option>' +
                    '</select>' +
                    '</div>',
                    '<div style="border-bottom: 1px solid black;">'+username+'</div>'
                ] ).draw( false );
            }
        });
    });

    $('#tabla').on('keypress', 'td', function(e) {
        if (e.keyCode === 13){
            let hijos = $(this).children();
            hijos[0].blur(); //quitar foco del div que se esta editando
            e.preventDefault();
            //$(this).blur();
            //window.getSelection().removeAllRanges();
        }
    });
});

//Event = objeto
//value = numero para el campo a actualizar
function updateDataCombo(event,value) {

    let id_arr = $(event).attr('class').split("_");
    let clase = $(event).attr('class');
    let valor = $(event).find('option:selected').text();
    let campo = campos[value];
    let id = id_arr[1];

    //combo hojas
    if (clase.includes("model")){
        let modelo = $("."+clase).find('option:selected').text();
        let combo_hojas = $('.hojaid_'+id);
        console.log(modelo);
        combo_hojas.html('');
        combo_hojas.append(obtenerHojas(modelo));
        combo_hojas.trigger("change");
     }

    //combo de familia
    if (clase.includes("familia")){
       let familia =  $("."+clase).find('option:selected').text();
       let combo_familia =  $('.modelid_'+id);

       switch (familia) {
           case 'American Axle':
               combo_familia.html('');
               combo_familia.append(obtenerModelos(1));
               combo_familia.trigger("change");
           break;
           case 'Chevy':
               combo_familia.html('');
               combo_familia.append(obtenerModelos(2));
               combo_familia.trigger("change");
           break;
           case 'Copeland':
               combo_familia.html('');
               combo_familia.append(obtenerModelos(3));
               combo_familia.trigger("change");
           break;
           case 'Daimler':
               combo_familia.html('');
               combo_familia.append(obtenerModelos(4));
               combo_familia.trigger("change");
           break;
           case 'Detroit Diesel':
               combo_familia.html('');
               combo_familia.append(obtenerModelos(5));
               combo_familia.trigger("change");
           break;
           case 'Kawasaki':
               combo_familia.html('');
               combo_familia.append(obtenerModelos(6));
               combo_familia.trigger("change");
           break;
           case 'Mazda':
               combo_familia.html('');
               combo_familia.append(obtenerModelos(7));
               combo_familia.trigger("change");
           break;
           case 'Pentastar':
               combo_familia.html('');
               combo_familia.append(obtenerModelos(8));
               combo_familia.trigger("change");
           break;
           case 'Upgrade':
               combo_familia.html('');
               combo_familia.append(obtenerModelos(9));
               combo_familia.trigger("change");
           break;
           case 'Refaccion':
               combo_familia.html('');
               combo_familia.append(obtenerModelos(10));
               combo_familia.trigger("change");
           break;
       }
    }

   $.ajax({
        method: 'post',
        url: '../peticiones/UpdateData.php',
        data: {id:id, valor:valor, campo:campo},
        success: function () {
           // $('#tableData').DataTable().ajax.reload();
        }
   });
}

function updateData(event,value) {
    let id_arr = $(event).attr('class').split("_");
    let valor = $(event).html();
    let campo = campos[value];
    let id = id_arr[1];
    let contador_status = 0;

    if (valor === '') {
        valor = '0';
        contador_status++;
        $(event).html('0');
    }

    $.ajax({
        method: 'post',
        url: '../peticiones/UpdateData.php',
        data: {id:id, valor:valor, campo:campo},
        success: function () {
            //$('#tableData').DataTable().ajax.reload();
            $(event).attr('contenteditable','false');
        }
    });
}

function habilitarDiv(event) {
    $(event).attr('contenteditable','true');
    $(event).focus();
}

function obtenerModelos(id) {
    let combo = "";
    $.ajax({
        url: '../peticiones/modelos/select.php',
        method: 'GET',
        data: {id:id},
        dataType: 'json',
        async: false,
        success: function (response) {

            combo += '<option selected disabled="true">Seleccionar</option>';
            $.each(response, function (key,value) {
                combo += '<option>'+value.modelo+'</option>';
            });
        }
    });
    return combo;
}

function obtenerHojas(modelo) {
    let combo = "";
    $.ajax({
       url: '../peticiones/hojas_inspeccion/select.php',
       method: 'GET',
       data: {modelo:modelo},
       dataType: 'json',
       async: false,
       success: function (response) {
           $.each(response, function (key,value) {
               combo += '<option>'+value.hoja_inspeccion+'</option>';
           })
       }
    });
    return combo;
}

function obtenerFamilias() {
    let combo = "";
    $.ajax({
       url: '../peticiones/familia/select.php',
       method: 'get',
       dataType: 'json',
       async: false,
       success: function (response) {
           combo += '<option selected disabled="true">Seleccionar</option>';
           $.each(response, function (key,value) {
               combo += '<option>'+value.familia+'</option>';
           });
       }
    });
    return combo;
}

function deleteData(id) {
    $.ajax({
        url: '../peticiones/DeleteData.php',
        method: 'post',
        data: {id:id},
        success: function () {
            $('#tableData').DataTable().ajax.reload();
        }
    });
}

function toDataURL(url) {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
        var reader = new FileReader();
        reader.onloadend = function() {
            //callback(reader.result);
            b64 = reader.result;
        };
        reader.readAsDataURL(xhr.response);
    };
    xhr.open('GET', url);
    xhr.responseType = 'blob';
    xhr.send();
}

function toDataURL2(url) {
    var xhr = new XMLHttpRequest();
    xhr.onload = function() {
        var reader = new FileReader();
        reader.onloadend = function() {
            //callback(reader.result);
            b64_2 = reader.result;
        };
        reader.readAsDataURL(xhr.response);
    };
    xhr.open('GET', url);
    xhr.responseType = 'blob';
    xhr.send();
}