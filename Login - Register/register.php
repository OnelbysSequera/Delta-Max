<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrarse</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/56aef74e76.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="contenido">
      <header>
        <div class="logo-titulo">
          <a href="login.php"><img src="../img/logo-login.svg" class="logopag" alt="LOGO DE LA PAGINA"/></a>
        </div>

        <nav class="navegacion">
                <a class="navegacion__enlaces" href="../index.php">Inicio</a>
                <a class="navegacion__enlaces" href="">Ofertas</a>
                <a class="navegacion__enlaces" href="../nosotros.php">Nosotros</a>
                <a class="navegacion__enlaces" href="login.php">Iniciar sesión</a>
            </nav>
      </header>

      <div class="fondo-formr">
        <div class="contenedor-form login">
          <h2>Crear cuenta</h2>
          <form action="php/registro.php" method="POST" id="formulario">
            <div class="nom-apell">
              <div class="contenedor-input">
                <span class="icono"
                  ><i class="fa-sharp fa-solid fa-user"></i
                ></span>
                <input type="text" name="nombre" required/>
                <label for="#">Nombres</label>
              </div>

              <div class="contenedor-input">
                <span class="icono"
                  ><i class="fa-sharp fa-solid fa-user"></i
                ></span>
                <input type="text" name="apellido" required/>
                <label for="#">Apellidos</label>
              </div>
            </div>

            <div class="selectores-nac">
              <label for="documento">Documento de identificación</label>
              <div class="select">
                <select name="nacionalidad" id="nacionalidad" required>
                  <option value="CÉDULA DE IDENTIDAD">Cédula de identidad Venezolana</option>
                  <option value="CÉDULA EXTRANJERA">Cédula de identidad Extranjera</option>
                  <option value="RIF PERSONA NATURAL">RIF Persona natural</option>
                  <option value="RIF PERSONA JURÍDICA">RIF Persona juridica</option>
                  <option value="PASAPORTE">Pasaporte</option>
                  <option value="RIF-E">RIF-E</option>
                  <option value="RIF-V">RIF-V</option>
                  <option value="RIF-G">RIF-G</option>
                </select>
              </div>
            </div>

            <div class="contenedor-input">
              <span class="icono"
                ><i class="fa-sharp fa-solid fa-passport"></i
              ></span>
              <input type="text" name="documento" required/>
              <label for="#">Cédula</label>
            </div>

            <div class="contenedor-input">
              <span class="icono"
                ><i class="fa-sharp fa-solid fa-envelope"></i
              ></span>
              <input type="email" name="correo" required/>
              <label for="#">Email</label>
            </div>

            <div class="claves">
              <div class="contenedor-input">
                <span class="icono"><i class="fa-solid fa-lock"></i></span>
                <input type="password" name="clave" id="clave" required/>
                <label for="#">Contraseña</label>
              </div>

              <div class="contenedor-input">
                <span class="icono"><i class="fa-solid fa-lock"></i></span>
                <input type="password" id="confirmar-clave" required />
                <label for="#">Repetir Contraseña</label>
              </div>
            </div>

            <script>
              const formulario = document.getElementById('formulario');
              const clave = document.getElementById('clave');
              const confirmarClave = document.getElementById('confirmar-clave');

              formulario.addEventListener('submit', (event) => {
                if (clave.value !== confirmarClave.value) {
                  event.preventDefault();
                  alert('Las contraseñas no coinciden. Por favor, inténtalo de nuevo.');
                }
              });
            </script>



            <div class="contenedor-input">
              <span class="icono"
                ><i class="fa-sharp fa-solid fa-phone"></i
              ></span>
              <input type="text" name="numb_celular" required/>
              <label for="#">Numero de Teléfono</label>
            </div>

            <div class="contenedor-seleccion">
              <div class="selectores">
                <label for="genero">Genero</label>
                <div class="select">
                  <select name="genero" id="genero" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                </div>
              </div>

              <div class="selectores">
                <label for="estado">Estado</label>
                <div class="select">
                  <select name="estado" id="estado" required>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Anzoátegui">Anzoátegui</option>
                    <option value="Apure">Apure</option>
                    <option value="Aragua">Aragua</option>
                    <option value="Barinas">Barinas</option>
                    <option value="Bolívar">Bolívar</option>
                    <option value="Carabobo">Carabobo</option>
                    <option value="Cojedes">Cojedes</option>
                    <option value="Delta Amacuro">Delta Amacuro</option>
                    <option value="Falcón">Falcón</option>
                    <option value="Guárico">Guárico</option>
                    <option value="Lara">Lara</option>
                    <option value="Mérida">Mérida</option>
                    <option value="Miranda">Miranda</option>
                    <option value="Monagas">Monagas</option>
                    <option value="Nueva Esparta">Nueva Esparta</option>
                    <option value="Portuguesa">Portuguesa</option>
                    <option value="Sucre">Sucre</option>
                    <option value="Táchira">Táchira</option>
                    <option value="Trujillo">Trujillo</option>
                    <option value="La Guaira">La Guaira</option>
                    <option value="Yaracuy">Yaracuy</option>
                    <option value="Zulia">Zulia</option>
                    <option value="Distrito Capital">Distrito Capital</option>
                    <option value="Dependencias Federales">Dependencias Federales</option>
                  </select>
                </div>
              </div>

              <div class="selectores">
                <label for="municipio">Municipio</label>
                <div class="select">
                  <select name="municipio" id="municipio" required>
                    <option value="Alto Orinoco">Alto Orinoco</option>
                    <option value="Atabapo">Atabapo</option>
                    <option value="Atures">Atures</option>
                    <option value="Autana">Autana</option>
                    <option value="Manapiare">Manapiare</option>
                    <option value="Maroa">Maroa</option>
                    <option value="Río Negro">Río Negro</option>
                    <option value="Anaco">Anaco</option>
                    <option value="Aragua">Aragua</option>
                    <option value="Manuel Ezequiel Bruzual">Manuel Ezequiel Bruzual</option>
                    <option value="Diego Bautista Urbaneja">Diego Bautista Urbaneja</option>
                    <option value="Fernando Peñalver">Fernando Peñalver</option>
                    <option value="Francisco Del Carmen Carvajal">Francisco Del Carmen Carvajal</option>
                    <option value="General Sir Arthur McGregor">General Sir Arthur McGregor</option>
                    <option value="Guanta">Guanta</option>
                    <option value="Independencia">Independencia</option>
                    <option value="José Gregorio Monagas">José Gregorio Monagas</option>
                    <option value="Juan Antonio Sotillo">Juan Antonio Sotillo</option>
                    <option value="Juan Manuel Cajigal">Juan Manuel Cajigal</option>
                    <option value="Libertad">Libertad</option>
                    <option value="Francisco de Miranda">Francisco de Miranda</option>
                    <option value="Pedro María Freites">Pedro María Freites</option>
                    <option value="Píritu">Píritu</option>
                    <option value="San José de Guanipa">San José de Guanipa</option>
                    <option value="San Juan de Capistrano">San Juan de Capistrano</option>
                  </select>
                </div>
              </div>

              <div class="selectores">
                <label for="parroquia">Parroquia</label>
                <div class="select">
                  <select name="parroquia" id="parroquia" required>
                    <option value="Alto Orinoco">Alto Orinoco</option>
                    <option value="Huachamacare Acanaña">Huachamacare Acanaña</option>
                    <option value="Marawaka Toky Shamanaña">Marawaka Toky Shamanaña</option>
                    <option value="Mavaka Mavaka">Mavaka Mavaka</option>
                    <option value="Sierra Parima Parimabé">Sierra Parima Parimabé</option>
                    <option value="Ucata Laja Lisa">Ucata Laja Lisa</option>
                    <option value="Yapacana Macuruco">Yapacana Macuruco</option>
                    <option value="Caname Guarinuma">Caname Guarinuma</option>
                    <option value="Fernando Girón Tovar">Fernando Girón Tovar</option>
                    <option value="Luis Alberto Gómez">Luis Alberto Gómez</option>
                    <option value="Pahueña Limón de Parhueña">Pahueña Limón de Parhueña</option>
                    <option value="Platanillal Platanillal">Platanillal Platanillal</option>
                    <option value="Samariapo">Samariapo</option>
                    <option value="Sipapo">Sipapo</option>
                    <option value="Munduapo">Munduapo</option>
                    <option value="Guayapo">Guayapo</option>
                    <option value="Alto Ventuari">Alto Ventuari</option>
                    <option value="Medio Ventuari">Medio Ventuari</option>
                    <option value="Bajo Ventuari">Bajo Ventuari</option>
                    <option value="Victorino">Victorino</option>
                    <option value="Comunidad">Comunidad</option>
                    <option value="Casiquiare">Casiquiare</option>
                    <option value="Cocuy">Cocuy</option>
                    <option value="San Carlos de Río Negro">San Carlos de Río Negro</option>
                    <option value="Solano">Solano</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="terminos-condic">
              <label for="terminos">
              <input name="terminos" type="checkbox" required/>He leido los <a href="#">Terminos y Condiciones</a> y estoy de acuerdo</label>
            </div>

            <button type="submit" class="btn">Registar</button>

            <div class="iniciar-sesion">
              <p>¿Ya tienes una cuenta? <a href="login.php"> Inicia sesión</a></p>
            </div>

          </form>
        </div>
      </div>
    </div>

    <footer>
      <p class="footer__texto">E-Commerce | Todos los derechos reservados 2023.</p>
    </footer>
  </body>
</html>
