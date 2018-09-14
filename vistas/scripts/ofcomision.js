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

    $('#fechaof').datepicker({
        autoclose: true,
        language: 'es',
        orientation: "bottom"
    })

    $('#fechacoinicio').datepicker({
        autoclose: true,
        language: 'es',
        //orientation: "bottom"
    })

    $('#fechacofin').datepicker({
        autoclose: true,
        language: 'es',
        //orientation: "bottom"
    })

    //iCheck for checkbox and radio inputs
    //$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
    })


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