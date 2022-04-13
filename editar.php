<?php include_once 'topo.php'; 

// resgate de dados da URL
$id = base64_decode($_GET["id"]);
// montar a instrução para selecionar o registro na base de dados
$sql = "select * from produto where idproduto=".$id;

// abrir a conexão com o banco
include_once 'conexao.php';

// executar
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) == 1){
    $reg = mysqli_fetch_array($rs);
}
?>
<h3>Atualizar Produto</h3>
<form class="formgroup" action="atualizar.php" method="post">
Nome.:<br>
<input type="text" name="nome"
 id="nome" class="form-control"  value="<?php echo $reg["nome"]; ?>"/>
<br/>
Estoque.:<br>
<input type="text" name="estoque" 
id="estoque" class="form-control"  value="<?php echo $reg["estoque"]; ?>"/>
<br/>
Valor.:<br>
<input type="text" name="valor"
 id="valor" class="form-control"  value="<?php echo $reg["valor"]; ?>" />
<br/>
Categoria.:<br/>
<select name="categoria" id="categoria" class="form-control" >
    <option value="<?php echo $reg["categoria"]; ?>"><?php echo $reg["categoria"]; ?></option>
    <option value="eletronico">ELETRÔNICO</option>
    <option value="roupa">ROUPAS</option>
    <option value="brinquedo">BRINQUEDO</option>
    <option value="casa">CASA</option>
</select> 
<br/><br/>
<input type="hidden" name="id" value="<?php echo $reg["idproduto"]; ?>;"/>
<input type="submit" value="Atualizar Produto" class="btn btn-primary"/>  
<input type="reset" value="Limpar Campos" class="btn btn-warning"/>
</form>
<?php include_once 'rodape.php'; ?>