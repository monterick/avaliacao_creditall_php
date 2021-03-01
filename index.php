<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link type="text/css" rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <title>Tarefa Creditall</title>
</head>
<body>
<?php
include 'modal.php';
?>

<div id="app">
    <header class="header">
    <h1> <i class="fa fa-home"></i> Tarefa Creditall</h1>
    </header>

    <nav class="menu">
    <button class="btn btn-success" onclick="modalCadastrar()"><i class="fa fa-users"></i> [+] Consumidor</button>
    </nav>

    <div class="content">    
    <div class="container">
    <H1> <i class="fa fa-users red"></i> LISTAR CONSUMIDORES</H1>
    <?php include 'mensagens.php';?>
    <table class="table table-striped">
        <thead>
            <th>ID_CONSUMIDOR</th>
            <th>NOME_CONSUMIDOR</th>
            <th>DATA_NASCIMENTO</th>
            <th>RENDIMENTO</th>
            <th>EDITAR</th>
            <th>EXCLUIR</th>
        </thead>
        <tbody>
        <?php
        $op = "listar";
        include './controller/controller.php';
        foreach($result as $key => $value){
        ?>
      <tr>
      <td><?php echo $value['ID_CONSUMIDOR'];?></td>
      <td><?php echo $value['NOME_CONSUMIDOR'];?></td>
      <td><?php echo date('d/m/Y',strtotime($value['DATA_NASCIMENTO']));?></td>
      <td><?php echo "R$: ".$value['RENDIMENTO'];?></td>
      <td><button type="button" class="btn btn-warning" onclick="modalEditar(<?php echo $value['ID_CONSUMIDOR'];?>,'<?php echo $value['NOME_CONSUMIDOR'];?>','<?php echo $value['DATA_NASCIMENTO'];?>',<?php echo $value['RENDIMENTO'];?>)"><i class="fa fa-pencil"></i></button></td>
      <td><button type="button" class="btn btn-danger" onclick="excluir(<?php echo $value['ID_CONSUMIDOR'];?>)"><i class="fa fa-trash"></i></button></td>
      </tr>
      <?php
        }
      ?>        
        </tbody> 
    </table>
    <nav aria-label="Page navigation example">
  <ul class="pagination">
    
    <?php
    echo "<li class='page-item'><a class='page-link' href='index.php?pagina=".($pagina-1)."'>Anterior</a></li>";

    for ($i=1; $i < $numPaginas + 1 ; $i++) { 
    echo "<li class='page-item'><a class='page-link' href='index.php?pagina=".$i."'>".$i."</a></li>";
    }
    echo "<li class='page-item'><a class='page-link' href='index.php?pagina=".($pagina+1)."'>Next</a></li>";
    ?>    
    
  </ul>
</nav>
    </div>
    </div>

    <footer class="footer">
    <span>Candidato<strong> Ricardo do Monte </strong>01/03/2021</span>
    </footer>

    </div>
    <script type="text/javascript" src="./js/scripts.js"></script>
    <script type="text/javascript" src="./bootstrap-5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    
</body>
</html>