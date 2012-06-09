$(document).ready(function(){
    /* formulario login */
    $('#login').validate({
        onfocusout: false,
        invalidHandler : function(e,validator){
            var errors = validator.numberOfInvalids();
            $('.alert').hide();
            $('.container').append('<div class="mensaje-flotante"><div class="alert alert-error fade in"><h3>Hay errores en el formulario</h3> Complete nuevamente los datos y reintente el ingreso a la plataforma <a data-dismiss="alert" class="close">×</a></div></div>');
        },
        submitHandler : function(){
            $('.alert').hide();
            $('.container').append('<div class="mensaje-flotante"><div class="alert alert-success fade in"><h3>Procesando información</h3> Estamos corroborando la información. En breves segundos ingresaras a la plataforma <a data-dismiss="alert" class="close">×</a></div></div>'); 
        },
        errorPlacement: function() {
           return true;
        }        
    });
    /* formulario contrasena */
    $('#contrasena').validate({
        onfocusout: false,
        invalidHandler : function(e,validator){
            var errors = validator.numberOfInvalids();
            $('.alert').hide();
            $('.container').append('<div class="mensaje-flotante"><div class="alert alert-success fade in"><h3>Procesando información</h3> Estamos corroborando la información. En breves segundos ingresaras a la plataforma <a data-dismiss="alert" class="close">×</a></div></div>'); 
        },
        submitHandler : function(){
            $('.alert').hide();
            $('.container').append('<div class="mensaje-flotante"><div class="alert alert-success fade in"><h3>Procesando información</h3> Estamos corroborando la información. En breves segundos ingresaras a la plataforma <a data-dismiss="alert" class="close">×</a></div></div>'); 
        },
        errorPlacement: function() {
           return true;
        }        
    });    
});