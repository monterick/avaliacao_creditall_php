<?php

if(filter_input(INPUT_POST,"operacao")){
    $operacao = filter_input(INPUT_POST,"operacao");
}elseif(filter_input(INPUT_GET,"operacao")){
    $operacao =filter_input(INPUT_GET,"operacao");  
}else{
    $operacao = $op;
}


if($operacao == "listar"){
include './connection/conexao.php';

$pagina = isset($_GET['pagina']) ?$_GET['pagina'] : 1;
if($pagina == 0){
    $pagina = 1;
}
$sql = "select * from consumidor";
$consumidores = $conexao->query($sql);
$total = mysqli_num_rows($consumidores);

$registros = 2;

$numPaginas = ceil($total/$registros);
if($pagina >$numPaginas){
    $pagina = $numPaginas;
}

$inicio = ($registros*$pagina)-$registros;

$sql = "select * from consumidor limit $inicio,$registros";
$consumidores = $conexao->query($sql);
$total = mysqli_num_rows($consumidores);
$result = array();
while($linha = mysqli_fetch_array($consumidores)){
$result[] = $linha;
}


}elseif($operacao == "cadastrar"){
$nome = filter_input(INPUT_POST,"nome");
$nascimento =  filter_input(INPUT_POST,"nascimento");
$rendimento = filter_input(INPUT_POST,"rendimento");
$dados = array($nome,$nascimento,$rendimento);
include '../model/consumidor.php';
$user = new Consumidor();
$result = $user->cadastrar($dados);

if($result){
 header("location: ../index.php?msg=cadSuccess");
}else{
    header("location: ../index.php?msg=cadErr");
}

}elseif($operacao == "editar"){
    $id = filter_input(INPUT_POST, "editid");
    $nome = filter_input(INPUT_POST, "editnome");
    $nascimento = filter_input(INPUT_POST, "editnascimento");
    $rendimento = filter_input(INPUT_POST, "editrendimento");
    $dados = array($id,$nome,$nascimento,$rendimento);
    include '../model/consumidor.php';
    $user = new Consumidor();
    $result = $user->editar($dados);
    if($result){
        header("location: ../index.php?msg=editSuccess");
       }else{
           header("location: ../index.php?msg=editErr");
       }   

}elseif($operacao == "excluir"){
   $id = filter_input(INPUT_GET,"id");
   $dados = array($id);
   include '../model/consumidor.php';
   $user = new Consumidor();
   $result = $user->excluir($dados);
   if($result){
       header("location: ../index.php?msg=delSuccess");
   }else{
        header("location: ../index.php?msg=delErr"); 
   }  
}


?>