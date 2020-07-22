$(document).ready(main);

var contador5 = 1;

function main(){
    $('.menu_bar').click(function(){

        if(contador5 == 1){
            $('nav').animate({
                left: '0'
            })
            contador5 = 0;
        } else{
            contador5  = 1;

            $('nav').animate({
                left: '-100%'
            });
           
        }
    });

    // Mostramos  y ocultamos los submenu

    $('.submenu').click( function(){
        $(this).children('.children').slideToggle();

    });

    $('.submenu2').click( function(){
        $(this).children('.children2').slideToggle();

    });

    $('.submenu3').click( function(){
        $(this).children('.children3').slideToggle();

    });
}