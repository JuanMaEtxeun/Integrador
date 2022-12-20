/*<?php
 


//conexion bbdd

$conexion = mysqli_connect("localhost","root","","bsasconferencia");

if(mysqli_connect_errno()){

    echo "Error en la conexión"; // puede ir un alert

}else{

    echo"";
}
echo "viene de registrarse";

$nombre = $_POST['nombre_reg'];
$apellido = $_POST['apellido_reg'];
$correo = $_POST['correo_reg'];
$dni = $_POST['dni_reg'];
$password = $_POST['password_reg'];

// cargar datos en la bb dd


$queryInsertar ="INSERT INTO usuarios VALUES('','$nombre','$apellido','$correo','$dni','$password')";
$insert = mysqli_query($conexion,$queryInsertar);

if(!$queryInsertar){
  echo "Ha ocurrido un error al insertar datos: ". mysqli_error(($conexion));
}

$consultas = mysqli_query($conexion,"SELECT*FROM usuarios");
//$lista=mysqli_fetch_assoc($consultas);



 /*while($lista=mysqli_fetch_array($consultas)){

    echo $lista['nombre']." "."<br>".$lista['apellido']." "."<br>".$lista['correo'];
 }*/

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

    <title>Datos</title>

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
                              <a class="nav-link" href="comprarTicket.html"  style="color:green">Comprar Entradas</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                    

                </div>
            </nav>
      </header>  

                  
    

    <main>
     
    <div class = "container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>  
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>

  <?php
  
  $consultas = mysqli_query($conexion,"SELECT*FROM usuarios");
  while($lista=mysqli_fetch_array($consultas)){
    ?>
    <tr>
      <th scope="row"></th>
      <td><?php echo $lista['id']?></td>
      <td><?php echo $lista['nombre']?></td>
      <td><?php echo $lista['apellido']?></td>
      <td><?php echo $lista['correo']?></td>
      

    </tr>

    <?php
    }
    ?>

</tbody>
</table>
    </div>
    </main>  

   

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
