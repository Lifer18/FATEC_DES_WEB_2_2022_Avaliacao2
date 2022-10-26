<?php
require_once "sql/login.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $login = new login;
    $validar = $login->validarLogin($_POST['usuario'],$_POST['senha']);
    
    if($validar==true){
        $_SESSION['logado'] = TRUE;
         header("location: logado.php");
    } else {
        $_SESSION['logado'] = FALSE;
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
        <section class="mt-5 pt-5">
            <div class="p-5 verdeforte">
                <h2> Login </h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-5 pt-5">
                    <label for="usuario" class="form-label"><h5>Usuario</h5></label>
                    <input type="text" class="form-control" name="usuario" id="usuario">
                    <div class="form-text">Informe seu usuario</div>
                    </div>
                    <div class="mb-5">
                        <label for="senha" class="form-label"><h5>Senha</h5></label>
                        <input type="password" class="form-control" name="senha" id="senha">
                        <div class="form-text">Informe sua senha</div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 p-3"><h5>Entrar</h5></button>
                </form>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>