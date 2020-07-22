/*BICI ELECTRICAS*/

let imagenes1 = ['img/slider1.jpg','img/slider2.jpg','img/slider3.jpg','img/slider4.jpg'];
let contador1 = 0;

function carrousel1(direccion){
let direccion2 = direccion;

if(direccion2=='atras1'){
  if(contador1==0){
    document.getElementById('imagen1').src= imagenes1[imagenes1.length-1];
    contador1++;
  }else if (contador1<imagenes1.length-1) {
    document.getElementById('imagen1').src= imagenes1[imagenes1.length - contador1];
    contador1++;

  }else {
    document.getElementById('imagen1').src= imagenes1[0];
    contador1=0;
  }
}

if(direccion2=='adelante1'){
  if(contador1==0){
    document.getElementById('imagen1').src= imagenes1[0];
    contador1++;
  }else if (contador1<imagenes1.length-1) {
    document.getElementById('imagen1').src= imagenes1[contador1];
    contador1++;

  }else {
    document.getElementById('imagen1').src= imagenes1[imagenes1.length-1];
    contador1=0;
  }
}

}