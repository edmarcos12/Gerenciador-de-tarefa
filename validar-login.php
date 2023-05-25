<?php 
session_start();
if(isset($_POST["email"])){
    include('conectar.php');
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $retorno = conectar("select * from usuarios where email = '$email' and senha = '$senha';");
    if($linha = $retorno->fetch_assoc()){
        $_SESSION['email'] = $linha['email'];
        $_SESSION['id_admin'] = $linha['id'];
        echo "<script>window.location.replace('admin.php');</script>";
    }else{
        echo "Credenciais incorretas, por favor tente outra vez!";
    }
}
?>