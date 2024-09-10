
<?php
if(isset( $_POST['lado1'])){
$valor1 = 0;
$valor2 = 0;
$valor3 = 0;
    echo " ";
    $valor1 = $_POST['lado1'];
    $valor2 = $_POST['lado2'];
    $valor3 = $_POST['lado3'];

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
    <title>Triangulos</title>
    
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
              <a class="nav-link active" aria-current="page" style="margin-right: 20px;"  href="grau.php"><h5 style="color: rgb(255, 255, 255);">Temperatura </h5></a>
              
            
          
          </div>
        </div>
      </nav>

    <div class="site">
        <div class="container-t">
            <div class="metade">
            <h1 style="margin-top: 60px; color:white; " >Triângulos</h1>
            <form method="post" action="triangulo.php">
                <div class="form-group">
                <label for="peso"  style="margin-top: 20px; color:white; " >Valor A:</label>
                <input  placeholder="Digite o valor do lado A" type="number" id="lado1" name="lado1" step="0.1" min="0" required>
                </div>
                <div class="form-group">
                <label for="peso " style="margin-top: 10px; color:white;">Valor B:</label>
                <input  placeholder="Digite o valor do lado B" type="number" id="lado2" name="lado2" step="0.1" min="0" required>
                </div>
                <div class="form-group">
                <label for="peso" style="margin-top: 10px; color:white;">Valor C:</label>
                <input  placeholder="Digite o valor do lado C" type="number" id="lado3" name="lado3" step="0.1" min="0" required>
                </div>
                <div class="form-group">
                <button type="submit" style="margin-top: 10px;">Calcular </button>
                </div>
            </form>
            </div>   
            <div class="o"></div>
        </div>
        <div class="php">
            <?php 
            if(!empty($valor1)){
            if($valor1 == $valor2 && $valor3 == $valor2){
                echo '<p style="margin-top: 60px; color:white">O Triângulo é Equilatero </p>';
                echo '<img class="triangulo" src="./img/equilatero.png">';
            }elseif ($valor1 != $valor2 && $valor3){
                echo '<p style="margin-top: 60px; color:white">O Triângulo é Escaleno </p>';
                echo '<img class="triangulo" src="./img/escaleno.png">';
            }else{
                echo '<p style="margin-top: 60px; color:white">O Triângulo é Isóceles</p>';
                echo '<img class="triangulo" src="./img/isoceles.png">';
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
