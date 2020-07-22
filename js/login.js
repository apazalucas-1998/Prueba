$(document).ready(function(){

    $('#acceder').click(function(){
        var errores = '';
        

        /*Validar Nombre Usuario*/

        if($('#nombreusuario').val()==''){
            errores += '<p>Escriba un nombre de usuario</p>';
            $('#nombreusuario').css("border-bottom-color", "red")
        } else{
            $('#nombreusuario').css("border-bottom-color", "#d1d1d1")

        }

        //Validar contraseña

        if($('#contraseña').val()==''){
            errores += '<p>Escriba su contraseña</p>';
            $('#contraseña').css("border-bottom-color", "red")
        } else{
            $('#contraseña').css("border-bottom-color", "#d1d1d1")

        }

       /*Iniciando una nueva session*/
       
       if(errores == '' == false){
           var session = '<div class="caja">'+
                            '<div class="subcaja">'+
                                    '<h3>Errores Encontrados</h3>'+
                                    '<i class="fas fa-times-circle"></i>'+  errores+
                                        '<span id="bottom-close">Cerrar</span>'+
                                    '</div>'+
                                 '</div>'



         $('body').append(session);

       }

       //cerrando session

       $('#bottom-close').click(function(){
           $('.caja').remove();

       });

       


    });
});