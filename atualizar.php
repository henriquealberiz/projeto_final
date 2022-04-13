<?php

//pegar os dados da tela
$id = $_POST["id"];
$nome = $_POST["nome"];
$estoque = $_POST["estoque"];
$valor = $_POST["valor"];
$categoria = $_POST["categoria"];


//abrir a conexão com o banco
include_once 'conexao.php';
include_once 'topo.php';
include_once 'rodape.php';


//montar a instrução de atualizar
$sql = "update produto set nome = '".$nome."', estoque = '".$estoque."', valor = '".$valor."', categoria = '".$categoria."' where idproduto = ".$id;

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
location.href= 'consulta.php';
</script>";
include_once 'rodape.php';
?>



