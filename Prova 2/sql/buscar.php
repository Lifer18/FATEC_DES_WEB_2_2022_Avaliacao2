<?php
require("conexao.php");

class Buscar extends Banco{

    public function validarBusca($count){
        $conn = banco::conectar();
        $sql = "SELECT IdReview FROM review WHERE IdReview = ".$count."";
        $result = $conn->query($sql);
        $retorno = false;

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row){
                    $retorno = true;
                }
            }
        }
        $conn->close();
        return $retorno;

    }


    public function buscarReview($count){
        $conn = banco::conectar();
        $sql = "SELECT Nome,Nota,Review FROM review WHERE IdReview = ".$count."";
        $result = $conn->query($sql);
        $retorno = [];

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $retorno[0] = $row['Nome'];
                $retorno[1] = $row['Nota'];
                $retorno[2] = $row['Review'];
            }
        }

        return $retorno;
        $conn->close();
    }
}
?>