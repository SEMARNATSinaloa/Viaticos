//Funcion que se ejecuta al inicio
function init()
{
    $("#bloque1").hide();
    //$("#añop2").attr("visible", false);
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
        language: 'es',
        orientation: "bottom"
    })

    $('#fechaf').datepicker({
        autoclose: true,
        language: 'es',
        orientation: "bottom"

    })



    $('#añop1').datepicker({
        autoclose: true,
        language: 'es',
        format: " yyyy",
        viewMode: "years",
        minViewMode: "years"
    })

    $('#añop2').datepicker({
        autoclose: true,
        language: 'es',
        format: " yyyy",
        viewMode: "years",
        minViewMode: "years"
    })

    $("#add1").click(function() {

        $("#periodo2").attr("disabled", false);
        $("#añop2").attr("disabled", false);
        
        var intId = $("#otroPeriodo div").length + 1;
        //console.log($("#otroPeriodo div").length);
        var fieldWrapper = $("<div class=\"fieldwrapper col-lg-12 col-smd-12\" id=\"field" + intId + "\"/>");
        //var fName = $("<input type=\"text\" class=\"fieldname\" />");
        //var fType = $("<select class=\"fieldtype\"><option value=\"checkbox\">Checked</option><option value=\"textbox\">Text</option><option value=\"textarea\">Paragraph</option></select>");
        //var fType = $("<div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\"><div class=\"input-group\"><span class=\"input-group-addon\">-</span><input name=\"ndoc\" id=\"ndoc\" type=\"text\" required class=\"form-control\" placeholder=\"No. de documento\"><span class=\"input-group-addon\">-</span><input name=\"fechadoc\" id=\"fechadoc\" type=\"text\" required class=\"form-control\" placeholder=\"Fecha\"><span class=\"input-group-addon\">-</span><input name=\"importe\" id=\"importe\" type=\"text\" required class=\"form-control\" placeholder=\"Importe $\"></div></div>");
        var inputfecha = $("<input type=\"text\" class=\"form-control pull-right\" name=\"fechaip2\" id=\"fechaip2\" required>").datepicker( {autoclose: true, language: 'es', orientation: "bottom"});
        var fType = $("<div class=\"row\"><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"><label for=\"fechaip2\">Fecha Inicial: </label><div class=\"input-group date\"><div id=\"prueba\" class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>"+inputfecha+"</div></div><div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\"><label for=\"fechafp2[]\">Fecha Final: </label><div class=\"input-group date\"><div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div><input type=\"text\" class=\"form-control pull-right\" name=\"fechafp2[]\" id=\"fechafp2[]\" required></div></div></div>");
        var removeButton = $("<button class=\"btn btn-danger\" type=\"submit\" value=\"\"><i class=\"fa fa-trash\"></i></button>");
        removeButton.click(function() {
            $(this).parent().remove();
            if($("#otroPeriodo div").length < 10)
                {
                    $("#add1").attr("disabled", false);
                    if($("#otroPeriodo div").length < 1)
                    {
                        $("#periodo2").val("-");
                        //$("#añop2").val("");
                        $("#bloque1").hide();
                    }
                }
        });
        $("#fechaip2").datepicker({
            autoclose: true,
            language: 'es',
            orientation: "bottom"
            
        })
        console.log("se agrego picker");


        //fieldWrapper.append(fName);
        $("#bloque1").show();
        fieldWrapper.append(fType);
        fieldWrapper.append(removeButton);

        $("#otroPeriodo").append(fieldWrapper);
        
        if($("#otroPeriodo div").length >= 10)
        {
            $("#add1").attr("disabled", true);
            //console.log($("#otroPeriodo div").length >= 10);
        }

        
    });

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

function asignarDatepicker(){
    $(this).datepicker({
        autoclose: true,
        language: 'es',
        orientation: "bottom"
    })
}




init();