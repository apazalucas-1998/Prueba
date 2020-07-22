$(document).ready(function(){
  
    $('#btnSend').click(function(){
        var errores = '';
        


        //Validar nombre==========================
        if($('#names').val() == ''){
            errores += '<p>Escriba un nombre</p>';
            $('#names').css("border-bottom-color","#F14B4B")
        } else{
            $('#names').css("border-bottom-color","#d1d1d1")
        }


         //Validar correo==========================
        if($('#email').val() == ''){
            errores += '<p>ingrese un correo</p>';
            $('#email').css("border-bottom-color","#F14B4B")
        } else{
            $('#email').css("border-bottom-color","#d1d1d1")
        }


         //Validar mensaje==========================
        if($('#mensaje').val() == ''){
            errores += '<p>Escriba un mensaje</p>';
            $('#mensaje').css("border-bottom-color","#F14B4B")
        } else{
            $('#mensaje').css("border-bottom-color","#d1d1d1")
        }

            //Enviando mensaje

            if(errores == '' == false){

                // <<<<<<<<=========================COPIADO DESDE contactos.php 
                var mensajeMoral = '<div class="modal_wrap">'+
                                      '<div class="mensaje_modal">'+
                                          '<h3>Errores encontrados</h3>'+
                                          '<i class="fas fa-times-circle"></i>'+    errores+
                                             ' <span id="btn_Close">Cerrar</span>'+
                                      '</div>'+
                                    '</div>'
                
                
                $('body').append(mensajeMoral);
            }

            //Cerrando Modal

            $('#btn_Close').click(function(){
                $('.modal_wrap').remove();
            });

    });
});