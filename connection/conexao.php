<?php
     //Dados para conexão com o banco de dados:
     
     $Servidor = "localhost";
     $Schema = "creditall";
     $Usuario = "creditall";
     $Senha = "12345678";

     $conexao = new mysqli($Servidor,$Usuario,$Senha,$Schema);
     if(mysqli_connect_error()){
         echo "Erro na conexão, contrate o administrador do banco (44) 999340666";
     }
     else{
         echo "conectado";
     }

?>