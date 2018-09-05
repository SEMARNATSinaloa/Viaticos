var tabla;

//Funcion que se ejecuta al inicio
function init()
{
    mostrarform(false);
    listar();

    $("#formulario").on("submit", function(e){
        guardaryeditar(e);
    })
}

//Funcion limpiar
function limpiar()
{
    $("#idcuotas").val("");
    $("#tipo_persona").val("");
    $("#pernocta").val("");
    $("#sinpernocta").val("");
    $("#estado").val("1");
}

//Funcion mostrar formulario
function mostrarform(flag)
{
    limpiar();
    if(flag)
    {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
    }
    else
    {
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnGuardar").prop("disabled", true);
    }
}

//Funcion cancelarform
function cancelarform()
{
    limpiar();
    mostrarform(false);
}

//Funcion listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
		  },
		"responsive": true,
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'lrtip',//dom: 'Bfrtip' Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/cuotas.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 10,//Paginación
	    "order": [[ 1, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

//Funcion para dar formato al monto con pernocta
$("#_pernocta").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});

//Funcion para dar formato al monto sin pernocta
$("#_sinpernocta").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});

//Funcion para guardar o editar
function guardaryeditar(e){
    e.preventDefault(); //No se activara la accion predeterminada del evento
    $("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../ajax/cuotas.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData:false,

        success: function(datos)
        {
            alert(datos);
            mostrarform(false);
            tabla.ajax.reload();
        }
    });

    limpiar();
}

function mostrar(idcuotas)
{
    $.post("../ajax/cuotas.php?op=mostrar",{idcuotas:idcuotas}, function(data, status)
        {
            data = JSON.parse(data);
            mostrarform(true);

            $("#tipo_persona").val(data.tipo_persona);
            $("#pernocta").val(data.pernocta);
            $("#sinpernocta").val(data.sinpernocta);
            $("#estado").val(data.estado);
            $("#idcuotas").val(data.idcuotas);
        });
}

//Funcion para desactivar registros
function desactivar(idcuotas)
{
    if(confirm("¿Esta seguro de desactivar la cuota?"))
    {

        $.post("../ajax/cuotas.php?op=desactivar",{idcuotas : idcuotas}, function(e){
            alert(e);
            tabla.ajax.reload();
        });
        
    }
    /*
    confirm("¿Esta seguro de desactivar la cuota?", function(result){
        alert(result);
        if(result)
        {
            $.post("../ajax/cuotas.php?op=desactivar",{idcuotas : idcuotas}, function(e){
                alert(e);
                tabla.ajax.reload();
            });
            
        }
    });
    */
}

//Funcion para activar registros
function activar(idcuotas)
{
    if(confirm("¿Esta seguro de activar la cuota?"))
    {

        $.post("../ajax/cuotas.php?op=activar",{idcuotas : idcuotas}, function(e){
            alert(e);
            tabla.ajax.reload();
        });
        
    }
    /*
    result=confirm("¿Esta seguro de activar la cuota?", function(result){
        alert(result);
        if(result)
        {
            $.post("../ajax/cuotas.php?op=activar",{idcuotas : idcuotas}, function(e){
                alert(e);
                tabla.ajax.reload();
            });
        }
    });
    */
}

//Funcion para eliminar registros
function eliminar(idcuotas)
{
    if(confirm("¿Esta seguro de eliminar la cuota?"))
    {

        $.post("../ajax/cuotas.php?op=eliminar",{idcuotas : idcuotas}, function(e){
            alert(e);
            tabla.ajax.reload();
        });
        
    }
    /*
    result=confirm("¿Esta seguro de activar la cuota?", function(result){
        alert(result);
        if(result)
        {
            $.post("../ajax/cuotas.php?op=activar",{idcuotas : idcuotas}, function(e){
                alert(e);
                tabla.ajax.reload();
            });
        }
    });
    */
}

init();