<?php

echo "viene de registrarse";

$nombre = $_POST['nombre_reg'];
$apellido = $_POST['apellido_reg'];
$correo = $_POST['correo_reg'];
$dni = $_POST['dni_reg'];
$password = $_POST['password_reg'];

echo $nombre;

echo $apellido;
echo $correo;
echo $dni;
echo $password;

$conexion = mysqli_connect("localhost","root","","bsasconferencia");

if(mysqli_connect_errno()){

    echo "Error en la conexión"; // puede ir un alert

}else{

    echo"";
}

$queryInsertar ="INSERT INTO usuarios VALUES('','$nombre','$apellido','$correo','$dni','$password')";
$insert = mysqli_query($conexion,$queryInsertar);

if(!$queryInsertar){
  echo "Ha ocurrido un error al insertar datos: ". mysqli_error(($conexion));
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="Stylesheet" href="ticket.css">

    <title>bienvenido</title>

  </head>

  <body>
    <header>
        
              <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    Conf. Bs As
                    </a>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                      <div class="container-fluid">
                        <a class="navbar-brand" href="index.html">La conferancia</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="index.html#Los_oradores">Los oradores</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="index.html#lugar_fecha">Lugar y Fecha</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="index.html#conviertete_orador">Conviértete en Orador</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="comprarTicket.html" style="color:green">Comprar Entradas</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                    

                </div>
            </nav>
      </header>  

                  
    

    <main>

    </main>  
    
    <!--*******************************fin descuentos***********************-->   
    
    <!--VENTAS DE TICKET-->    

        <section class="ticket">

          <div class="container" id="ticket_container">
            <div class="row g-3 mt-3">

              <div class="valor" id="valor_ticket">
                
                <h1 id="orador">Bienvenido <br><?php echo $nombre."<br>". $apellido;?></h1>
                
              </div>
            </div>

          
       
   

            
          
  <!--**************************** boton enviar borrar eliminar editar*********************-->          
            <div class="row mt-3" id="botones"><!--row 5 borrar y resumen -->
            
              <div class="col-5">
                <button id="borrar" type="reset"  class="btn">Editar</button>
              </div>
          
              <div class="col-5">
                <button id="calcular" type="submit"  class="btn">Eliminar</button>
              </div>
              
            </div>
          </form>  
        </div>
      </section>


<!--*************************************footer**********************************************-->
        <footer>
          
            <ul>
              <a href="#">Preguntas Frecuentes</a>
              <a href="#">Contáctanos</a>
              <a href="#">Prensa</a>
              <a href="#">Conferencia</a>
              <a href="#">Termminos y Condiciones</a>
              <a href="#">Privacidad</a>
              <a href="#">Estudiantes</a>
              

            </ul>

        </footer>
   
    



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
    <script src="index.js"></script>
  
</body>
</html>