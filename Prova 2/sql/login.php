<?php
require("conexao.php");

class Login extends Banco{
    public function validarLogin($usuario, $senha){
        $conn = banco::conectar();
        $sql = "SELECT Usuario, Senha FROM login";
        $result = $conn->query($sql);
        $retorno = false;

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if(($usuario==$row["Usuario"]) && ($senha==$row["Senha"])){
                    $retorno = true;
                }
            }
        }
        $conn->close();
        return $retorno;
    }
}
