<?php

// Executa a conexao com o mysql e selecionar a base
include_once 'conexao.php';

//Recupera os dados enviados via POST
// recebe o Nome
$nome = $_POST["nome"];

$login = $_POST["login"];
// recebe o Email
$email = $_POST["email"];
// recebe a senha Digitada

$senha = md5($_POST["senha"]);
// Cria uma senha utilizando a criptografia de HASH em Md5

// recebe o perfil do usuario
$perfil = $_POST["perfil"];

$cep = $_POST["cep"];

$rua = $_POST["rua"];

$bairro = $_POST["bairro"];

$cidade = $_POST["cidade"];

$estado = $_POST["estado"];

$ibge = $_POST["ibge"];


//montar a query sql de gravação recebendo as variaveis via post
$sql = "insert into usuario values (null,'".$nome."','".$login."','".$email."','".$senha."','".$perfil."','".$cep."','".$rua."','".$bairro."','".$cidade."','".$estado."','".$ibge."')";

//Faz a conexao e executa a instrucao carregada na varivael $sql e os envia para o banco mysql.
if (mysqli_query($con, $sql)){
    // Caso a conexao esteja correta cria o retorno do cadastro
    $msg = "Cadastrado com sucesso!";
}else{    
    // Caso a conexao nao seja realizada cria o retorno do cadastro com erro
    $msg = "Erro ao Cadastrar";
}
// Encerra a conexão com o banco
mysqli_close($con);
// Cria um alert javascript carrega o conteúdo da variável $msg e redireciona para o index
echo "<script>alert ('".$msg."'); location.href=''menu_adm.php'';</script>"
        

?>