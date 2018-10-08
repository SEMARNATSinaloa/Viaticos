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
    $('#fecha').datepicker({
        autoclose: true,
        language: 'es'
      })

    $('#just1fin').datepicker({
        autoclose: true,
        language: 'es',
        orientation: "bottom"
    })

    $('#just1ffin').datepicker({
        autoclose: true,
        language: 'es',
        orientation: "bottom"
    })

    $('#just2fin').datepicker({
        autoclose: true,
        language: 'es',
        orientation: "bottom"
    })

    $('#just2ffin').datepicker({
        autoclose: true,
        language: 'es',
        orientation: "bottom"
    })

    $('#just3fin').datepicker({
        autoclose: true,
        language: 'es',
        orientation: "bottom"
    })

    $('#just3ffin').datepicker({
        autoclose: true,
        language: 'es',
        orientation: "bottom"
    })

    $('#just4fin').datepicker({
        autoclose: true,
        language: 'es',
    })

    $('#just4ffin').datepicker({
        autoclose: true,
        language: 'es',
    })



    //iCheck for checkbox and radio inputs
    //$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
    })

    //when the Add Field button is clicked
    $("#add").click(function (e) {
        e.preventDefault();
        //Append a new row of code to the "#items" div
        $("#items").append('asdf'); 
       });

    $("body").on("click", ".delete", function (e) {
        e.preventDefault();
        this.parent("div").remove();
    });

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