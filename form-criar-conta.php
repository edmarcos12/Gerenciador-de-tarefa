<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include('criar-conta.php');?>
<div class="container mt-3">
    <div class="row justify-content-center">
    <div class="col-7">
        <h2>Criar nova conta</h2>
        <div class="alert alert-<?php echo $tpMsg;?>">
        <?php echo $msg;?> 
        </div>
        <form action="form-criar-conta.php" method="POST">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Entre com o seu email" name="email" required>
        </div>
        <div class="mb-3 mt-3">
             <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha" required>
        </div>
        <div class="mb-3 mt-3">
             <label for="comfirmarSenha" class="form-label">Confirmar senha:</label>
            <input type="password" class="form-control" id="confirmarSenha" placeholder="Repita a sua senha" name="confirmarSenha" required>
        </div>
             <button type="submit" class="btn btn-primary">Cadastrar</button>
             <a href="index.php" class="btn btn-info">Voltar</a>
             </form>
        </div>
        </div>
     </div>
</body>
</html>