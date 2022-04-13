<?php
include_once 'topo.php';


// retirar a decodificação
// base64_decode
$id = base64_decode($_GET["id"]);
$sql = "delete from usuario where idusuario = ".$id;

include_once 'conexao.php';

if(mysqli_query($con,$sql)){
    $msg = "Usuario excluido com Sucesso!";
}else{
    $msg = "Erro ao Excluir";
}
mysqli_close($con);
echo "<script>alert('".$msg."');
location.href= 'consultausu.php';
</script>";
include_once 'rodape.php';


?>