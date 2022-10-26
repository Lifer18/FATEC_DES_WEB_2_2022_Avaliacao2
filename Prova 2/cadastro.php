<?php
session_start();

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("location: index.php");
    exit;
}

require_once "sql/inserir.php";




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $inserir = new Inserir;

    if ($inserir->validar_post($_POST['nome'])) {
        $nome=$_POST['nome'];
        $nota=$_POST['nota'];
        $review=$_POST['review'];



        $validar = $inserir->review($nome,$nota,$review);

        if ($validar == false){

            echo"ERRO, VALOR NAO INSERIDO";
        }
    }
}
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
                <h2> Cadastro de Reviews </h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                
                    <div class="mb-3 pt-5">
                        <label for="nome" class="form-label"><h5>Nome do Jogo</h5></label>
                        <input type="text" name="nome" class="form-control" id="nome">                     
                        <div class="form-text">Informe o nome do jogo</div>           
                    </div>

                    <div class="mb-3">
                        <h5>Nota</h5>
                        <br/>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="nota" id="radio1" value="0" checked>
                            <label class="form-check-label" for="radio1">0</label>
                        </div>

                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="nota" id="radio1" value="1">
                            <label class="form-check-label" for="radio1">1</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nota" id="radio2" value="2">
                            <label class="form-check-label" for="radio2">2</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nota" id="radio3" value="3">
                            <label class="form-check-label" for="radio3">3</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nota" id="radio4" value="4">
                            <label class="form-check-label" for="radio4">4</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nota" id="radio5" value="5">
                            <label class="form-check-label" for="radio5">5</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nota" id="radio6" value="6">
                            <label class="form-check-label" for="radio6">6</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nota" id="radio7" value="7">
                            <label class="form-check-label" for="radio7">7</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nota" id="radio8" value="8">
                            <label class="form-check-label" for="radio8">8</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nota" id="radio9" value="9">
                            <label class="form-check-label" for="radio9">9</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="nota" id="radio10" value="10">
                            <label class="form-check-label" for="radio10">10</label>
                        </div>
                        <div class="form-text">Informe a nota dada do jogo</div>
                    </div>

                    <div class="mb-5">
                            <label for="review" class="form-label"><h5>Review resumido</h5></label>
                            <input type="text" class="form-control" name="review" id="review">
                            <div class="form-text">Informe seu review resumido do jogo</div>
                    </div>
                    <button type="submit" class="btn bg-primary p-3 text-white"><h5>Cadastrar</h5></button>
                    <a href="logado.php" class="btn btn-danger p-3"><h5>Voltar</h5></a>
                </form>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>