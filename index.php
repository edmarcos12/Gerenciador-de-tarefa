<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <title>Login</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
       </head>
<body>
<style>
        h2 {
            text-align: center;
            color: #0000FF;
        }
    </style>
    <?php include("validar-login.php");?>
    <div class="container mt-3">
    <div class="row justify-content-center">
    <div class="col-7">
    <h2>Gerenciador de Tarefas</h2>
    <h2>Realize seu login ou crie uma conta</h2>
    <form action="index.php" method="POST">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Entre com o seu email" name="email" required>
            </div>
             <div class="mb-3">
             <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha"required>
                </div>
                <button type="submit" class="btn btn-primary">Logar</button>
                <a href="form-criar-conta.php" class="btn btn-info">Criar Conta</a>
                </form>
            </div>
            </div>
            </div>
 </body>
</html>

        
    