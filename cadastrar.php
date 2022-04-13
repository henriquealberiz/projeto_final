<?php include_once 'topo.php';
$nome = $_POST["nome"];
$estoque = $_POST["estoque"];
$valor = $_POST["valor"];
$categoria = $_POST["categoria"];
include_once 'conexao.php';
 $sql ="insert into produto values
 (NULL,'".$nome."','".$estoque."','".$valor."','".$categoria."')";
$result = mysqli_query($con,$sql);
if($result){   
    // echo"Gravado com sucesso!";
    $msg = "Gravado com sucesso!";
}else{    
    //echo"Erro ao Gravar!";}
$msg = "Erro ao Gravar!";
}
//fechar conexao com o banco
mysqli_close($con);
echo "<script>alert('".$msg."');
location.href= 'consulta.php';
</script>";
include_once 'rodape.php';
?>


