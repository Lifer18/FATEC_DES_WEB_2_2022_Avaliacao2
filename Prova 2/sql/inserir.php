<?php
require_once("conexao.php");
    class Inserir extends Banco{
        public function validar_post($nome)
        {
            if (isset($nome) && $nome <> ""){
                return true;
            }
            else{
                return false;
            }
        }
    
        public function review($nome, $nota, $review){
            $conn = banco::conectar();
            
            $sql = "INSERT INTO review (Nome, Nota, Review) VALUES ('".$nome."', '".$nota."','".$review."')";

            $conn->query($sql);

            $conn->close();

            return true;
        }
    }
?>