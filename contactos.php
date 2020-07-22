<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="author" content="Esteban Quito">
    <meta name="description" content="Las mejores bicicletas electricas para toda la ciudad de Buenos Aires ,Argentina en otros paises">
    <meta name="keywords" content="Bicicletas , Historia , Ventas, Registro , Ejercicios , Regalo" >
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximun-scale=1.0" user-scalable=si>
 
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="css3/contactos1.css">
    <link rel="stylesheet" href="css/all.min.css"><!--Font awesome-->
    <link rel="stylesheet" href="css3/menu2.css">
    <link rel="shortcut icon" href="fondo/Logo_VL.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <script src="js/contact.js"></script>
    <script  type="text/Javascript" src="js/menu.js"></script>

</head>
<body>
    


<!--<div class="modal_wrap">
    <div class="mensaje_modal">
        <h3>Errores encontrados</h3>
        <p><i class="fas fa-times-circle"></i>Escriba un Nombre</p>
        <p><i class="fas fa-times-circle"></i>Ingrese un Correo Electronico</p>
        <p><i class="fas fa-times-circle"></i>Escriba un Mensaje</p>
         <span id="btn_Close">Cerrar</span>
    </div>
</div>

NOTA: ESTA ESCRuCTURA LO PASE A contact.js ============>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
-->

<style>
    .mod1,.mod2{
        height: 100vh;
    }
</style>
<header class="mod1">
    
        <div class="menu_bar">
            <a href="#" class="btn-menu"><i class="fas fa-list"></i>Menu</a>
        </div>
                
        <nav class="mod2">

        
            <ul class="ul">
                <div class="menu">
            
             <li><a href="index.php"><i class="fas fa-home"></i>Inicio</a></li>

                <li class="submenu"><a href="#"><i class="fas fa-rocket"></i>Proyectos<i class="sub1      fas fa-sort-down"></i></a>

                  <ul class="children">
                      
                      <li><a href="motores.php">Motores<i class="far fa-circle"></i></i></a></li>
                  </ul>

                </li>

                 <li><a href="estudiantes.php"><i class="fas fa-user-graduate"></i>Estudiantes</a></li>

                <li class="submenu2"><a href="#"><i class="far fa-image"></i>Galeria<i class="sub2       fas fa-sort-down"></i></a>
                <ul class="children2">
                    <li><a href="fotos.php">Fotos<i class="far fa-circle"></i></a></li>
                    
                </ul>
                </li> 
            
                <li class="submenu3"><a href="#">Mas<i class="sub3      fas fa-sort-down"></i></a>
                  <ul class="children3">
                      <li><a href="actividades.php">Actividades<i class="far fa-circle"></i></a> </li>
                      <li><a href="historias.php">Historias<i class="far fa-circle"></i></a> </li>
                      <li><a href="biografia.php">Biografia<i class="far fa-circle"></i></a></li>
                      <li><a href="contactos.php">Contactos<i class="far fa-circle"></i></a></li>
                  </ul>
              </li>
              
             

              <section class="sec1">

             <li><a class= "wsp1" href="https://api.whatsapp.com/send?phone=541125370740&"title="Enviar un Mensaje"><i class=" wsp      fab fa-whatsapp" style="color: green;"></i></a></li>
             <li><a href="https://www.facebook.com/estebanquito.234"title="Enviar un Mensaje"><i class=" fb       fab fa-facebook" style="color: #01579b;"></i></a></li>
             <li><a href="https://www.instagram.com/eltuturri/"title="Enviar un Mensaje"><i class=" ig       fab fa-instagram" style=" color:#ec407a;"></i></a></li>
             <li><a href="mailto:apelukavc04@gmail.com"title="Enviar un Correo" style="color:red;"><i class=" em       far fa-envelope"></i></a></li>

             
                  <li><a href="registro1.php"> <img class="login"  src="fondo/login.png" alt="Login" width="100%" height="100%"> </a></li>
                  </div>
                  </section>
            </ul>
            <div class="flechas"style="position: relative; transition:1.8s;top:-200px;">
  
  <span><a href="Plantilla.html"><i class="izquierda    fas fa-arrow-circle-left" style="color: red;"></i></a></span>
  </div>

       <section class="contenedor">

            <section class="contact_info">
                <section class="info_title">
                    <i class="fas fa-user"></i>
                    <h2>Informacion <br> de contacto</h2>
                </section>
            
               <section class="info_items">
                  <p><i class="far fa-envelope" style="color: red;"></i>apelukavc04@gmail.com</p>
                  <p><i class="fas fa-mobile-alt" style="color:yellow;"></i>+54 11 2537-0740</p>
              </section>
           </section>

           <form action="enviarcontact.php" method="POST" class="form_contact">
               <h2>Enviar un mensaje</h2>

               <div class="user_info">
                   <label for="names">Nombre *</label>
                   <input type="text" id="names" name="nombre" required>
                   
                   <label for="phone">Telefono / Celular</label>
                   <input type="text" id="phone" name="telefono">

                   <label for="email">Correo electronico *</label>
                   <input type="text" id="email" name="correo" required>

                   <label for="mensaje">Mensaje *</label>
                   <textarea " id="mensaje" name="mensaje" required></textarea>

                   <input type="submit"  value="Enviar Mensaje" id="btnSend">
               </div>
           </form>
       </section>


       <footer>Diseñado y Desarrollado por Lucas Apaza - Libertad - Merlo - 2020</footer>

       </nav>
    </header>
    


   

</body>
</html>