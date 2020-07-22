<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="author" content="Esteban Quito">
    <meta name="description" content="Las mejores bicicletas electricas para toda la ciudad de Buenos Aires ,Argentina en otros paises">
    <meta name="keywords" content="Bicicletas , Historia , Ventas, Registro , Ejercicios , Regalo" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximun-scale=1.0" user-scalable=si>
 
    <title> Formulario Login</title>
    <link rel="stylesheet" href="http://localhost/Proyecto1/css3/registro1.css">
    <link rel="stylesheet" href="http://localhost/Proyecto1/css3/menu2.css">
    <link rel="stylesheet" href="http://localhost/Proyecto1/css/all.min.css"><!--Font awesome-->
    <link rel="stylesheet" href="http://localhost/Proyecto1/css3/registro.css">
    <link rel="shortcut icon" href="http://localhost/Proyecto1/fondo/Logo_VL.png" type="image/x-icon">
    <script  type="text/Javascript" src="http://localhost/Proyecto1/js/menu.js"></script>
    <script src="http://localhost/Proyecto1/js/jquery.js"></script>
    <script src="http://localhost/Proyecto1/js/index.js"></script>
    <script src="http://localhost/Proyecto1/js/register.js"></script>
    <script src="http://localhost/Proyecto1/js/login.js"></script>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<style>
    .mod1,.mod2{
        height: 300vh;
    }

</style>

<!-- errores  LOGIN
<div class="caja">
    <div class="subcaja">
        <h3>Errores Encontrados</h3>
        <p><i class="fas fa-times-circle"></i>Escriba Un Nombre de usuario </p>
        <p><i class="fas fa-times-circle"></i>Ingrese su contraseña</p>
        <span id="bottom-close">Cerrar</span>
        
    </div>
</div>

-->

 <!--<div class="caja1">
    <div class="subcaja1">
        <h3>Errores Encontrados</h3>
        <p><i class="fas fa-times-circle"></i>Escriba Nombre</p>
        <p><i class="fas fa-times-circle"></i>Escriba Nombre Materno </p>
        <p><i class="fas fa-times-circle"></i>Escriba Nombre Paterno </p>
        <p><i class="fas fa-times-circle"></i>Escriba Un Nombre de usuario </p>
        <p><i class="fas fa-times-circle"></i>Escriba Un Correo Electronico </p>
        <p><i class="fas fa-times-circle"></i>Ingrese su contraseña</p>
        <p><i class="fas fa-times-circle"></i>Acepte los terminos</p>
        <span id="bottom-close1">Cerrar</span>
        
    </div>
</div>

-->










<header class="mod1">
        <div class="menu_bar">
            <a href="#" class="btn-menu"><i class="fas fa-list"></i>Menu</a>
        </div>
                
        <nav class="mod2">
            <ul class="ul">
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
              <div class="flechas"style=" font-size:50px; position: relative; transition:1.8s;bottom:100px;">
  
  <span><a href="Plantilla.html"><i class="izquierda    fas fa-arrow-circle-left" style="color: red;"></i></a></span>
  </div>








    <div class="container">
        <div class="form-box">
            <div class="button-box">
                <div id="elegir"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Iniciar Sesion</button>
                    <button type="button" class="toggle-btn" onclick="registrar()">Registrarse</button>

            </div>
            <div class="redes">
                <a href="https://api.whatsapp.com/send?phone=541125370740"title="Enviar un Mensaje"> <img class="wsp" src="http://localhost/Proyecto1/fondo/whatsappneon.jpg" alt="Imagen whatsapp"height="45px"> </a>
                <a href="https://www.facebook.com/estebanquito.234"title="Enviar un Mensaje"> <img class="fb" src="http://localhost/Proyecto1/fondo/facebookneon.jpg" alt="Imagen facebook" height="45px"></a>
               <a href="https://www.instagram.com/eltuturri/"title="Enviar un Mensaje">  <img class="ig" src="http://localhost/Proyecto1/fondo/instagramneon.jpg" alt="Imagen instagram" ></a>
               <a href="mailto:apelukavc04@gmail.com"title="Enviar un Correo">  <img class="em" src="http://localhost/Proyecto1/fondo/emailneon.jpg " alt="Imagen Correo"> </a>
            </div>




            <form action="index.php" id="login" class="input-group" method="POST">
                <input type="text"  id="nombreusuario" class="input-field" placeholder="Nombre de Usuario:" style="color:#fff;" required>
                <input type="password" id="contraseña" class="input-field" placeholder="Contraseña:" style="color:#fff;" required>
                <input type="checkbox" id="rcontraseña" class="check-box"><span> Recordar Contraseña.</span>
                <button type="submit"  id="acceder" value="Acceder" class="submit-btn">Acceder</button>
            </form>






            <form action="registroexcitoso.php" id="registrar"  class="input-group1">
            <input type="text" id="nombre" class="input-field" placeholder="Nombre:"style="color:#fff;" required>
            <input type="text" id="nombrematerno" class="input-field" placeholder="Apellido Materno:"style="color:#fff;" required>
            <input type="text" id="nombrepaterno" class="input-field" placeholder="Apellido Paterno:"style="color:#fff;" required>
            <div class="label"   style="color:gray;"> Fecha Nacimiento: </div>
                <input type="date" id="fechanac"  min="1950-12-31" max="2013-12-31" value="0000-00-00" >
                <div class="label" style="color:gray;"> Sexo: </div>
                <select id="sexo">
                        <option value="-1" disabled selected> Eliga una opcion</option>
                        <option value="0" style="color:#000;">Masculino</option>
                        <option value="1"style="color:#000;">Femenino</option>
                        <option value="2"style="color:#000;"> Indefinido</option>
                    </select>

                <input type="text" id="nombreusuario1" class="input-field" placeholder="Nombre de Usuario:" required>
                <input type="text"  id="email" class="input-field" placeholder="Correo Electronico:" required>
                <input type="password" id="contraseña1"  class="input-field" placeholder="Contraseña:" required>
                
                <input type="checkbox" id="terminos" class="check-box"><span> Acepto los terminos y Condiciones.</span>
                <button type="submit" id="registrarse" class="submit-btn">Registrarse</button>
            </form>
        </div>
    </div>




    <div class="form-box2">

    
    </div>


    <footer>Diseñado y Desarrollado por Lucas Apaza - Libertad - Merlo - 2020</footer>
    


    <script>
      var x = document.getElementById("login");
      var y = document.getElementById("registrar");
    var z = document.getElementById("elegir");
    
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
    
    function registrar(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "120px";
    }
    </script>

</nav>
    </header>

 

</body>
</html>