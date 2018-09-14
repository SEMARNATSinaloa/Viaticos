//Funcion que se ejecuta al inicio
function init()
{
    //mostrarform(false);
    //listar();
    
/*
    $("#formulario").on("submit", function(e){
        guardaryeditar(e);
    })
*/  
    //Date picker
    $('#fechainicio').datepicker({
        autoclose: true,
        language: 'es'
      })

    $('#fechafin').datepicker({
    autoclose: true,
    language: 'es'
    })

}

//Funcion cancelarform
function cancelarform()
{
    limpiar();
}

//Funcion limpiar
function limpiar()
{
    $("#departamento").val("");
    $("#noficio").val("");
    $("#nombre").val("");
    $("#puesto").val("");
    $("#destino").val("");
    $("#duracion").val("");
    $("#fechainicio").val("");
    $("#fechafin").val("");
    $("#objetivo").val("");
    $("#jefeinmediato").val("");
    $("#puestojefe").val("");
}

//Funcion para guardar o editar
function guardaryeditar(e){
    //e.preventDefault(); //No se activara la accion predeterminada del evento
    //$("#btnImprimir").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);
/*
    $.ajax({
        url: "reportes/ofcomision.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData:false,

        success: function(datos)
        {
            alert(data);
        }
    });
*/
    limpiar();
}

init();