<?php 
include('conectar.php');
$msg= "Atenção! Senha e confirmar senha devem ser iguais!";
$tpMsg = "warning";
if(isset($_POST["email"])){
    $email = $_POST["email"];
    $retorno = conectar("select * from usuarios where email = '$email';");
     if($linha = $retorno->fetch_assoc()){
        $msg = "Email já Existe!";
    }else{
        if($_POST["senha"] == $_POST["confirmarSenha"]){
        $senha = $_POST["senha"];
        $sql="insert into usuarios(email,senha) values ('$email','$senha')";
        conectar($sql);
        $msg = "Novo usuário criado!";
        $tpMsg = "success";
     }else{
       $msg = "Senhas Divergentes!";
     }
    }
}
?>
