<?php
session_start();

// resgate de dados da tela

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

//abrir a conexao com o banco
include_once 'conexao.php';

//montar a instrução para ir ao banco

$sql = "select * from usuario where login ='".$login."' and senha='".$senha."'" ;

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
    $_SESSION["nome"] = $row["nome"];
    $_SESSION["perfil"] = $row["perfil"];
    $_SESSION["tempo"] = time(); // guarda o momento exato do login


   header("location:painel.php");
}else{
    $msg = "login/senha invalidos!";
    header("location:index.php?msg=".$msg);
}
?>