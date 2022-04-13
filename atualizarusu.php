<?php

//pegar os dados da tela
$id = $_POST["id"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];


//abrir a conexão com o banco
include_once 'conexao.php';
include_once 'topo.php';
include_once 'rodape.php';


//montar a instrução de atualizar
$sql = "update usuario set nome = '".$nome."', login = '".$login."', email = '".$email."', cidade = '".$cidade."' where idusuario = '".$id."'";

// executar
$rs = mysqli_query($con,$sql);
if($rs){
    $msg = "Atualizado com sucesso";
    }else{
        $msg = "Erro ao atualizar";
    }
    
//fechar conexão com o banco
mysqli_close($con);
echo "<script>alert('".$msg."');
location.href= 'consultausu.php';
</script>";
include_once 'rodape.php';
?>

