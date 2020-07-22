<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="http://localhost/Proyecto1/css3/registro.css">
</head>
<body>
    <div class="container">
       <header>Registro de usuarios</header>
       <div class="form-princ">
            <form action="#">

                <!-- PAGINA 1 -->
                <div class="pagina">
                    <div class="titulo">Informacion Principal</div>
                    <div class="campo">
                        <div class="label"> Nombre: </div>
                         <input type="text" id="nombres" placeholder="Nombre">
                    </div>

                    <div class="campo">
                    <div class="label"> Apellido Paterno:</div>
                        <input type="text" id="apellido1" placeholder="Apellido Paterno">

                    </div>

                    <div class="campo">
                    <div class="label">Apellido Materno: </div>
                        <input type="text" id="apellido2"  placeholder="Apellido Materno">
                    </div>

                    <div class="campo">
                        <button>Siguente</button>
                    </div>

                </div>

                <!-- PAGINA 2 -->
                <div class="pagina">
                    <div class="titulo">Informacion Secundaria</div>
                    <div class="campo">
                        <div class="label"> Fecha Nacimiento: </div>
                         <input type="date" id="fechanac"  min="1950-12-31" max="2013-12-31" value="1998-10-10" >
                    </div>

                    <div class="campo">
                    <div class="label"> Sexo: </div>
                    <select id="sexo">
                        <option value="-1" disabled selected> Eliga una opcion</option>
                        <option value="0">Masculino</option>
                        <option value="1">Femenino</option>
                        <option value="2"> Sin especificar</option>
                    </select>
                       
                    </div>

                    <div class="campo btns">
                    <button class="volver-pag1   volver">Atras</button>
                        <button class="adelante-pag3  adelante">Siguente</button>
                    </div>

                </div>

                  <!-- PAGINA 3 -->
                  <div class="pagina">
                    <div class="titulo">Informacion Contacto</div>
                    <div class="campo">
                        <div class="label"> Correo Electronico: </div>
                         <input type="text" id="correo" placeholder="Correo Electronico" >
                    </div>

                    <div class="campo">
                    <div class="label"> Numero Telefonico </div>
                         <input type="text" id="numCel" placeholder="Numero Telefonico">
                    </div>

                    <div class="campo btns">
                    <button class="volver-pag2   volver">Atras</button>
                        <button class="adelante-pag4  adelante">Siguente</button>
                    </div>

                </div>

                <!-- PAGINA 4 -->
                <div class="pagina">
                    <div class="titulo">Informacion de inicio sesion</div>
                    <div class="campo">
                        <div class="label"> Nombre de Usuario: </div>
                         <input type="text" id="usuario" placeholder="Nombre de Usuario" >
                    </div>

                    <div class="campo">
                    <div class="label"> Contraseña </div>
                         <input type="password" id="contra" placeholder="Contraseña">
                    </div>

                    <div class="campo btns">
                    <button class="volver-pag3   volver">Atras</button>
                        <button class="Fin">Finalizar</button>
                    </div>

                </div>
            
            </form>
       </div>
    </div>
</body>
</html>