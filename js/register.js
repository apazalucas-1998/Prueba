$(document).ready(function(){

    $('#registrarse').click(function(){
        var errores1 = '';
        



        /*Validar Nombre*/

        if($('#nombre').val()==''){
            errores1 += '<p>Escriba su nombre </p>';
            $('#nombre').css("border-bottom-color", "red")
        } else{
            $('#nombre').css("border-bottom-color", "#d1d1d1")

        }

        /*Validar Nombre Materno*/

        if($('#nombrematerno').val()==''){
            errores1 += '<p>Escriba su nombre materno</p>';
            $('#nombrematerno').css("border-bottom-color", "red")
        } else{
            $('#nombrematerno').css("border-bottom-color", "#d1d1d1")

        }

        /*Validar Nombre Paterno*/

        if($('#nombrepaterno').val()==''){
            errores1 += '<p>Escriba su nombre paterno </p>';
            $('#nombrepaterno').css("border-bottom-color", "red")
        } else{
            $('#nombrepaterno').css("border-bottom-color", "#d1d1d1")

        }




        /*Validar Nombre Usuario*/

        if($('#nombreusuario1').val()==''){
            errores1 += '<p>Escriba un nombre de usuario</p>';
            $('#nombreusuario1').css("border-bottom-color", "red")
        } else{
            $('#nombreusuario1').css("border-bottom-color", "#d1d1d1")

        }
        /*Validar Correo*/

        if($('#email').val()==''){
            errores1 += '<p>Escriba su correo electronico</p>';
            $('#email').css("border-bottom-color", "red")
        } else{
            $('#email').css("border-bottom-color", "#d1d1d1")

        }


        //Validar contraseña

        if($('#contraseña1').val()==''){
            errores1 += '<p>Escriba su contraseña</p>';
            $('#contraseña1').css("border-bottom-color", "red")
        } else{
            $('#contraseña1').css("border-bottom-color", "#d1d1d1")

        }

        /*Terminos*/

        if($('#terminos').val()==''){
            errores1 += '<p>Acepte sus terminos</p>';
            $('#terminos').css("border-bottom-color", "red")
        } else{
            $('#terminos').css("border-bottom-color", "#d1d1d1")

        }
 

       /*Iniciando un registro del usuario*/
       
       if(errores1 == '' == false){
           var registro = '<div class="caja1">'+
                            '<div class="subcaja1">'+
                                    '<h3>Errores Encontrados</h3>'+
                                    '<i class="fas fa-times-circle"></i>'+  errores1+
                                        '<span id="bottom-close1">Cerrar</span>'+
                                    '</div>'+
                                 '</div>'



         $('body').append(registro);

       }

       //cerrando Registro

       $('#bottom-close1').click(function(){
           $('.caja1').remove();

       });

       


    });
});