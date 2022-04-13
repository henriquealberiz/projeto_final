<?php include_once 'topo.php'; 

// resgate de dados da URL
$id = base64_decode($_GET["id"]);
// montar a instrução para selecionar o registro na base de dados
$sql = "select * from usuario where idusuario=".$id;

// abrir a conexão com o banco
include_once 'conexao.php';

// executar
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) == 1){
    $reg = mysqli_fetch_array($rs);
}
?>
<h3>Atualizar Usuario</h3>
<form class="formgroup" action="atualizarusu.php" method="post">
Nome.:<br>
<input type="text" name="nome"
 id="nome" class="form-control"  value="<?php echo $reg["nome"]; ?>"/>
<br/>
login.:<br>
<input type="text" name="login" 
id="login" class="form-control"  value="<?php echo $reg["login"]; ?>"/>
<br/>
Email.:<br>
<input type="text" name="email"
 id="email" class="form-control"  value="<?php echo $reg["email"]; ?>" />
<br/>
Cidade.:<br>
<input type="text" name="cidade"
 id="cidade" class="form-control"  value="<?php echo $reg["cidade"]; ?>" />
<br/>
<br/><br/>
<input type="hidden" name="id" value="<?php echo $reg["idusuario"]; ?>;"/>
<input type="submit" value="Atualizar Usuario" class="btn btn-primary"/>  
<input type="reset" value="Limpar Campos" class="btn btn-warning"/>
</form>
<?php include_once 'rodape.php'; ?>