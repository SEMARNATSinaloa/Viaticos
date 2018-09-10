//Funcion que se ejecuta al inicio
function init()
{
    //mostrarform(false);
    //listar();
    

    $("#formulario").on("submit", function(e){
        guardaryeditar(e);
    })
    
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



init();