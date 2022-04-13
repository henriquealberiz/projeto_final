
<?php include_once 'topo.php';

$nome = $_POST["nome"];
$login = $_POST["login"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$perfil = $_POST["perfil"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$ibge = $_POST["ibge"];
include_once 'conexao.php';
 $sql ="insert into usuario values
 (null,'".$nome."','".$login."','".$email."','".$senha."','".$perfil."','".$cep."','".$rua."','".$bairro."','".$cidade."','".$estado."','".$ibge."')";
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
location.href= 'cad_user.php';
</script>";
include_once 'rodape.php';
?>