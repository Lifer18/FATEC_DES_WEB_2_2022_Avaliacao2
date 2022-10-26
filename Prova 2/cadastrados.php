<?php
session_start();
require_once "sql/buscar.php";

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("location: index.php");
    exit;
}

$count = 1;

?>
 
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="_css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container text-white">
        <section class="mt-2 pt-5">
            <div class="p-5 verdeforte">
                <h2> Reviews Cadastradas </h2>
                <?php
                    $busca = new Buscar;                    
                    while ($busca->validarBusca($count)) {
                ?>
                    <div class="mb-3 pt-5">
                        <h3>Review <?php echo $count ?>
                        <br/>
                    </div> 
                    
                        <div class="border border-3 p-5 pb-0 border-opacity-25 border-white bg-light bg-opacity-25 mb-3">
                            <h5>Nome do Jogo</h5>
                            <p class="font-weight-bold">
                                <?php
                                $line = $busca->buscarReview($count);
                                echo $line[0]."<br>";
                                ?>
                            </p>
                            <br/>
                        </div>
                    
                        <div class="border border-3 p-5 pb-0 border-opacity-25 border-white bg-light bg-opacity-25 mb-3">
                            <h5>Nota</h5>
                            <p class="font-weight-bold">
                                <?php
                                echo $line[1]."<br>";
                                ?>
                            </p>
                            <br/>
                        </div>
                
                        <div class="border border-3 p-5 pb-0 border-opacity-25 border-white bg-light bg-opacity-25 mb-5">     
                            <h5>Review</h5> 
                            <p class="font-weight-bold">
                                <?php
                                echo $line[2]."<br>";
                                ?>
                            </p>
                            <br/>
                        </div>
                <?php
                $count ++;
                        }
                ?>
                <a href="logado.php" class="btn btn-danger p-3"><h5>Voltar</h5></a>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>