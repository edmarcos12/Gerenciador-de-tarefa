<?php 
$tpMsg = $msg = $nome = $id = "";
if(isset($_POST['submit'])){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $gravar = true;
    if ($nome=="") {
        $gravar = false;
        $msg .= "Por favor, preencha o nome da tarefa.<br>";    
    }else{
    if ($gravar) {
    if ($id == ""){
         $sql = "insert into tarefas (nome,id_usuario) values('$nome','$id_admin')";
     }else{
     $sql = "update tarefas set nome = '$nome' where id = $id";
     }
     }
     conectar($sql);
     $msg = "Gravado com Sucesso!";
     $tpMsg = "success";
     $nome = $id = "";
    }
}
if (isset($_GET['editar'])){
    $id = $_GET['editar'];
}
    if ($id != ""){
    $sql = "select * from tarefas where id = $id";
    $result = conectar($sql);
    $linha = $result->fetch_assoc();
    $nome = $linha["nome"];
}
if (isset($_GET['apagar'])){
    $id = $_GET['apagar'];
    $sql = "select * from tarefas where id = $id";
    $result = conectar($sql);
    $linha = $result->fetch_assoc();
    $sql = "delete from tarefas where id = $id";
    $result = conectar($sql);    
}
?>