<?php include_once 'topo.php'; ?>
<?php
    echo"Seja bem-vindo  ".$_SESSION["nome"];
    echo"";
    ?>
<h3>Novo Produto</h3>

<form class="formgroup" action="cadastrar.php" method="post">
Nome.:<br>
<input type="text" name="nome"
 id="nome" class="form-control" />
<br/>
Estoque.:<br>
<input type="text" name="estoque" 
id="estoque" class="form-control" />
<br/>
Valor.:<br>
<input type="text" name="valor"
 id="valor" class="form-control" />
<br/>
Categoria.:<br/>
<select name="categoria" id="categoria" class="form-control" >
    <option value="">Selecione</option>
    <option value="eletronico">ELETRÔNICO</option>
    <option value="roupa">ROUPAS</option>
    <option value="brinquedo">BRINQUEDO</option>
    <option value="casa">CASA</option>
</select> 
<br/><br/>

<input type="submit" value="Cadastrar Produto" class="btn btn-primary"/>  
<input type="reset" value="Limpar Campos" class="btn btn-warning"/>
</form>
<?php include_once 'rodape.php'; ?>
<a href="sair.php"> sair</a>
<br/>
