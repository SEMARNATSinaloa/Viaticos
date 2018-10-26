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
    
    $('#fechai').datepicker({
        autoclose: true,
        language: 'es'
    })

    $('#fechaf').datepicker({
        autoclose: true,
        language: 'es'

    })

    $('#añop').datepicker({
        autoclose: true,
        language: 'es',
        format: " yyyy",
        viewMode: "years",
        minViewMode: "years"
    })

    

    /*restar dos fechas con dias habiles

        $fecha1 = strtotime('2010-10-20'); 
        $fecha2 = strtotime('2010-10-25'); 
        for($fecha1;$fecha1<=$fecha2;$fecha1=strtotime('+1 day ' . date('Y-m-d',$fecha1))){ 
            if((strcmp(date('D',$fecha1),'Sun')!=0) || (strcmp(date('D',$fecha1),'Sat')!=0)){
                echo date('Y-m-d D',$fecha1) . '<br />'; 
            }
        }  

    */


    //iCheck for checkbox and radio inputs
    //$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    /*$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass   : 'iradio_minimal-blue'
    })*/

    //when the Add Field button is clicked
    /*$("#add").click(function (e) {
        e.preventDefault();
        //Append a new row of code to the "#items" div
        $("#items").append('asdf'); 
       });

    $("body").on("click", ".delete", function (e) {
        e.preventDefault();
        this.parent("div").remove();
    });*/

}

function compararfechas(){
    var compara = document.getElementById("#fechai");
    alert(compara);

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