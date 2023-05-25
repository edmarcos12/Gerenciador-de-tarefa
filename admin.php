<?php 
$msg="";
include('validar-sessao.php');
include('conectar.php');
include('gravar-tarefa.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12">
     <h2>Gerenciador de tarefa</h2>
      <form action="admin.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $id;?>">
     <div class="mb-3 mt-3">
     <label for="nome" class="form-label">Qual e a tarefa desejada </label>
     <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome;?>">
     <button type="submit" class="btn btn-primary" name="submit">Registrar</button>
     <a href="admin.php" class="btn btn-info">Nova tarefa</a>
     <a href="editar-senha.php" class="btn btn-danger">Alterar a senha</a>
     <a href="logout.php" class="btn btn-danger">Sair</a>
     </form>
     <?php 
     if ($msg != ""){
    ?>
     <br>
 <div class="alert alert-<?php echo $tpMsg;?> alert-dismissible">
 <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
 <strong> <?php echo $msg;?></strong>
</div>
 </div>
 <?php }?>
</div>
<?php 
include('listar-tarefa.php');
?>
</div>
</body>
</html>