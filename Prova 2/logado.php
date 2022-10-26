<?php
session_start();

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("location: index.php");
    exit;
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
        <section class="mt-5 pt-5">
            <div class="p-5 verdeforte">
                <div class="mx-auto" style="width: 300px;">
                    <h2 class="px-2 mb-5"> Seja bem-vindo </h2>
                    <a href="cadastro.php" class="botoes btn btn-primary mb-5 p-3">Cadastrar Reviews</a>
                    <a href="cadastrados.php" class="botoes btn btn-info mb-5 p-3 text-white">Ver Reviews Cadastradas</a>
                    <a href="deslogar.php" class="botoes btn btn-danger mb-5 p-3">Sair da conta</a>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>