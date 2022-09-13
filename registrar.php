<?php
include("con_db.php");
if( isset ( $_POST['enviar'] ) ) {
if (strlen($_POST['nombre'])>=1 && strlen($_POST['email'])>=1){
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $contraseña =  trim($_POST['pass']);
        $consulta = "INSERT INTO datos(nombre,contraseña,email) VALUES ('$nombre','$email','$contraseña')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado){
            ?>
            <div class="alert alert-success" role="alert">
  Usuario registrado exitosamente!
</div>
                            <?php
                            }else{
                                ?>
                               <div class="alert alert-warning" role="alert">
  Complete los datos por favor
</div>
                                <?php
                            }
        }else{
            ?> <div class="alert alert-warning" role="alert">
             Complete los datos por favor
          </div>
            <?php
        }
    }
?>