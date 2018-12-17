$(document).ready(function() {
    $("#add1").click(function() {
        
        var intId = $("#gastosFact div").length + 1;
        //console.log($("#gastosFact div").length);
        var fieldWrapper = $("<div class=\"fieldwrapper col-lg-12 col-smd-12\" id=\"field" + intId + "\"/>");
        //var fName = $("<input type=\"text\" class=\"fieldname\" />");
        //var fType = $("<select class=\"fieldtype\"><option value=\"checkbox\">Checked</option><option value=\"textbox\">Text</option><option value=\"textarea\">Paragraph</option></select>");
        //var fType = $("<div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\"><div class=\"input-group\"><span class=\"input-group-addon\">-</span><input name=\"ndoc\" id=\"ndoc\" type=\"text\" required class=\"form-control\" placeholder=\"No. de documento\"><span class=\"input-group-addon\">-</span><input name=\"fechadoc\" id=\"fechadoc\" type=\"text\" required class=\"form-control\" placeholder=\"Fecha\"><span class=\"input-group-addon\">-</span><input name=\"importe\" id=\"importe\" type=\"text\" required class=\"form-control\" placeholder=\"Importe $\"></div></div>");
        var fType = $("<br><div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-ticket\"></i></span><input name=\"factura[]\" id=\"factura[]\" type=\"text\" required class=\"form-control\" placeholder=\"Factura\"><span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span><input name=\"fechaFac[]\" id=\"fechaFac[]\" type=\"text\" required class=\"form-control\" placeholder=\"Fecha\"><span class=\"input-group-addon\"><i class=\"fa fa-money\"></i></span><input name=\"importeFac[]\" id=\"importeFac[]\" type=\"text\" required class=\"form-control\" placeholder=\"Importe\"></div>");
        var removeButton = $("<button class=\"btn btn-danger\" type=\"submit\" value=\"\"><i class=\"fa fa-trash\"></i></button>");
        removeButton.click(function() {
            $(this).parent().remove();
            if($("#gastosFact div").length < 20)
                {
                    $("#add1").attr("disabled", false);
                }
        });
        //fieldWrapper.append(fName);
        fieldWrapper.append(fType);
        fieldWrapper.append(removeButton);
        $("#gastosFact").append(fieldWrapper);
        
        if($("#gastosFact div").length >= 20)
        {
            $("#add1").attr("disabled", true);
            console.log($("#gastosFact div").length >= 20);
        }
        
    });

    $("#add2").click(function() {
        var intId = $("#gastosNotas div").length + 1;
        var fieldWrapper = $("<div class=\"fieldwrapper col-lg-12 col-smd-12\" id=\"field" + intId + "\"/>");
        var fName = $("<input type=\"text\" class=\"fieldname\" />");
        //var fType = $("<select class=\"fieldtype\"><option value=\"checkbox\">Checked</option><option value=\"textbox\">Text</option><option value=\"textarea\">Paragraph</option></select>");
        //var fType = $("<div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\"><div class=\"input-group\"><span class=\"input-group-addon\">-</span><input name=\"ndoc\" id=\"ndoc\" type=\"text\" required class=\"form-control\" placeholder=\"No. de documento\"><span class=\"input-group-addon\">-</span><input name=\"fechadoc\" id=\"fechadoc\" type=\"text\" required class=\"form-control\" placeholder=\"Fecha\"><span class=\"input-group-addon\">-</span><input name=\"importe\" id=\"importe\" type=\"text\" required class=\"form-control\" placeholder=\"Importe $\"></div></div>");
        var fType = $("<br><div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-ticket\"></i></span><input name=\"conceptoGas[]\" id=\"conceptoGas[]\" type=\"text\" required class=\"form-control\" placeholder=\"Concepto\"><span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span><input name=\"fechaGas[]\" id=\"fechaGas[]\" type=\"text\" required class=\"form-control\" placeholder=\"Fecha\"><span class=\"input-group-addon\"><i class=\"fa fa-money\"></i></span><input name=\"importeGas[]\" id=\"importeGas[]\" type=\"text\" required class=\"form-control\" placeholder=\"Importe $\"></div>");
        //var removeButton = $("<input type=\"button\" class=\"btn btn-danger\" >");
        var removeButton = $("<button class=\"btn btn-danger\" type=\"submit\" value=\"\"><i class=\"fa fa-trash\"></i></button>");
        removeButton.click(function() {
            $(this).parent().remove();
            if($("#gastosNotas div").length < 20)
                {
                    $("#add2").attr("disabled", false);
                }
        });
        //fieldWrapper.append(fName);
        fieldWrapper.append(fType);
        fieldWrapper.append(removeButton);
        $("#gastosNotas").append(fieldWrapper);
        //console.log(intId);
        if($("#gastosNotas div").length >= 20)
        {
            $("#add2").attr("disabled", true);
            console.log($("#gastosNotas div").length >= 20);
        }

    });

    /*
    $("#preview").click(function() {
        $("#yourform").remove();
        var fieldSet = $("<fieldset id=\"yourform\"><legend>Your Form</legend></fieldset>");
        $("#buildyourform div").each(function() {
            var id = "input" + $(this).attr("id").replace("field","");
            var label = $("<label for=\"" + id + "\">" + $(this).find("input.fieldname").first().val() + "</label>");
            var input;
            switch ($(this).find("select.fieldtype").first().val()) {
                case "checkbox":
                    input = $("<input type=\"checkbox\" id=\"" + id + "\" name=\"" + id + "\" />");
                    break;
                case "textbox":
                    input = $("<input type=\"text\" id=\"" + id + "\" name=\"" + id + "\" />");
                    break;
                case "textarea":
                    input = $("<textarea id=\"" + id + "\" name=\"" + id + "\" ></textarea>");
                    break;    
            }
            fieldSet.append(label);
            fieldSet.append(input);
        });
        $("body").append(fieldSet);
    });
    */
  });
 

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
    $('#fechaof').datepicker({
        autoclose: true,
        language: 'es'
      })

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

    $('#fechamininicio').datepicker({
        autoclose: true,
        language: 'es',
        //orientation: "bottom"
    })

    $('#fechaminfin').datepicker({
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