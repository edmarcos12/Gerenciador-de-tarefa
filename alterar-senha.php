<?php
session_start();
$msg="";
$tpMsg = "warning";
if(isset($_POST['senha_atual'])){
    $email=$_SESSION['email'];
    $admin_id=$_SESSION['id_admin'];
    $senha_atual=$_POST['senha_atual'];
    include('conectar.php');
    $sql = "select * from usuarios where email = '$email';";
    $result = conectar($sql);
    $linha = $result->fetch_assoc();
    //echo $sql;
    if ($senha_atual == $linha["senha"]){
     if ($_POST['nova_senha'] == $_POST['confirmar_senha']){
            $nova_senha = $_POST['nova_senha'];
            $sql = "update usuarios set senha = '$nova_senha' where id = $admin_id";
            conectar($sql);
            $msg =  "Senha Atualizada!";
            $tpMsg = "success";
        }else{
            $msg =  "Nova senha e confirmar não são iguais!";
        }
            }else{
            $msg= "Senha atual não confere";
        }
    }   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-6">
        <h2>Atualizar Senha</h2>
    <form action="editar-senha.php" method="POST">
    <div class="mb-3 mt-3">
    <label for="senha_atual">Senha Atual:</label>
    <input type="password" name="senha_atual" id="senha_atual" required>
    </div>
    <div class="mb-3 mt-3">
    <label for="nova_senha">Nova Senha:</label>
    <input type="password" name="nova_senha" id="nova_senha" required>
    </div>
    <div class="mb-3 mt-3">
    <label for="confirmar_senha">Confirmar Senha:</label>
    <input type="password" name="confirmar_senha" id="confirmar_senha" required>
    </div>
    <button type="submit" class="btn btn-danger">Alterar senha</button>
    <a href="admin.php" class="btn btn-info">Voltar</a>
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
    </div>
    </div>
    <?php }?>
</body>
</html>