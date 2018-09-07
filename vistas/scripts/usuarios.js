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
    $("#pwd").val("");
    $("#apellidop").val("");
    $("#apellidom").val("");
    $("#nombre").val("");
    $("#correo").val("");
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
					url: '../ajax/usuarios.php?op=listar',
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

//Funcion para guardar o editar
function guardaryeditar(e){
    e.preventDefault(); //No se activara la accion predeterminada del evento
    $("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../ajax/usuarios.php?op=guardaryeditar",
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

function mostrar(correo)
{
    $.post("../ajax/usuarios.php?op=mostrar",{correo:correo}, function(data, status)
        {
            data = JSON.parse(data);
            mostrarform(true);

            $("#pwd").val(data.pwd);
            $("#apellidop").val(data.apellidop);
            $("#apellidom").val(data.apellidom);
            $("#nombre").val(data.nombre);
            $("#correo").val(data.correo);
            $("#estado").val(data.estado);
        });
}

//Funcion para desactivar registros
function desactivar(correo)
{
    if(confirm("¿Esta seguro de desactivar al usuario?"))
    {
        $.post("../ajax/usuarios.php?op=desactivar",{correo : correo}, function(e){
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
function activar(correo)
{
    if(confirm("¿Esta seguro de activar al usuario?"))
    {

        $.post("../ajax/usuarios.php?op=activar",{correo : correo}, function(e){
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