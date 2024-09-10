
<?php

$resultado = '';
$interpretacao = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = isset($_POST['peso']) ? ($_POST['peso']) : 0;
    $altura = isset($_POST['altura']) ? ($_POST['altura']) : 0;

    
}


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>IMC</title>
    
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background-color: #5a189a;">
          <a class="navbar-brand"><img src="./img/icon.png" width="120px" height="120px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" 
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
    
              
              <a class="nav-link active" aria-current="page" style="margin-right: 20px;" href="imc.php"><h5 style="color: rgb(255, 255, 255);">IMC</h5></a>
              <a class="nav-link active" aria-current="page" style="margin-right: 20px;"  href="idade.php"><h5 style="color: rgb(255, 255, 255);">Idade</h5></a>
              <a class="nav-link active" aria-current="page" style="margin-right: 20px;"  href="triangulo.php"><h5 style="color: rgb(255, 255, 255);">Triângulo</h5></a>
              <a class="nav-link active" aria-current="page" style="margin-right: 20px;"  href="grau.php"><h5 style="color: rgb(255, 255, 255);">Temperatura</h5></a>
              
            
          
          </div>
        </div>
      </nav>

    <div class="site">
        <div class="container-t">
            <div class="metade">
            <h1 style="margin-top: 60px; color:white" >Calculadora de IMC</h1>
        <form method="post">
                <div class="form-group">
                <label for="peso"  style="margin-top: 40px; color:white; " >Peso (kg):</label>
                <input  placeholder="Peso" type="number" id="peso" name="peso" step="0.1" min="0" required>
                </div>
                <div class="form-group">
                <label for="altura"  style="margin-top: 10px; color:white; " >Altura (m):</label>
                <input placeholder="Altura"  type="number" id="altura" name="altura" step="0.01" min="0" required>
                </div>
                <div class="form-group">
                <button  style="margin-top: 20px;" type="submit">Calcular </button>
                </div>
            </form>
            </div>
            <div class="o"></div>
        </div>
        <div class="php">
        <?php 
         if(!empty($altura)){
        if ($altura > 0) {
          $imc = $peso / ($altura * $altura);
  
          if ($imc < 18.5) {
              $interpretacao = 'Abaixo do peso';
              echo '<p style="margin-top: 60px; color: white;">Abaixo do peso </p>';
              echo '<img class="imc" src="./img/abaixo.png">';
          } elseif ($imc >= 18.5 && $imc < 24.9) {
              $interpretacao = 'Peso normal';
              echo '<p style="margin-top: 60px; color: white;">Peso normal</p>';
              echo '<img class="imc" src="./img/normal.png">';
          } elseif ($imc >= 25 && $imc < 29.9) {
              $interpretacao = 'Sobrepeso';
              echo '<p style="margin-top: 60px; color: white;">Sobrepeso</p>';
              echo '<img class="imc" src="./img/acima.png">';
          } else {
              $interpretacao = 'Obesidade';
              echo '<p  style="margin-top: 60px; color: white;">Obesidade</p>';
              echo '<img class="imc" src="./img/obeso.png">';
          }
  
          $resultado = number_format($imc, 2);
      } else {
          $resultado = 'Altura inválida';
      }
    }
        ?>   
        </div>
    </div>
            
    <footer
      class="bg-body-tertiary text-center text-lg-start"
      style="margin-top: 0px"
    >
      <div
        class="text-center p-3"
        style="background-color: #5a189a; color:white;">

      Geovana Fernandes Ryan Bernardes ©
      </div>
    </footer>

</body>
</html>
