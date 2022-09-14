<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="estilos_login.css">
<title>Formulario de Login</title>
    
</head>
<body>

<section id="sec1">
<img src="cinco.svg">
<div class="container" style="width: 300px; align-content: center;">
<h1>Ingresar</h1>
<form action="validar.php" method="post">
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" name="email"placeholder="Email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="formGroupExampleInput2" name="pass" placeholder="Contraseña">
  </div>
  <button type="submit" class="btn btn-primary btn-lg" name="enviar">Ingresar</button>
</form>
</br>
<a href="index.html">
  <button type="submit" class="btn btn-primary btn-lg" name="enviar" style="margin-left: 10px">Volver al inicio</button>
</a>
</br>
</br>
</section>
  
</body>
</html>