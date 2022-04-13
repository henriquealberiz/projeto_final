    
    <?php  
    include_once 'topo.php';    
    echo"<h1>Consultar Usuario</h1>";
    include_once 'conexao.php';   
    $sql = "select * from usuario ORDER BY nome ASC";    
    $rs = mysqli_query($con,$sql);    
    if(mysqli_num_rows($rs) > 0){
        ?>
<p>Pesquise por:</p>
<input id="myInput" type="text" placeholder="Procurar..">
<br><br>
        <table table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>Login</th>
                <th>Email</th>
                <th>Cidade</th>
                <th>Editar</th>
                <th>Excluir</th>
                
            <tr>               
        <?php        
        while($linha = mysqli_fetch_array($rs)){
            ?>
            <tbody id="myTable">
            <tr>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["login"]; ?></td>
                <td><?php echo $linha["email"]; ?></td>
                <td><?php echo $linha["cidade"]; ?></td>
                <td>
                <a href="editarusu.php?id=<?php echo base64_encode($linha["idusuario"]); ?>">
                editar
                </a>
                </td>
                <!-- CHAMA A EXCLUSÃO-->
                <!-- iremos codificar id na URL -->
                <td>
                <a href="excluirusu.php?id=<?php echo base64_encode($linha["idusuario"]); ?>">

                 excluir
                </a></td>
        </tr>
        </tbody>
        <?php          } ?>
        </table>
        <?php
    }else{
        echo"não existe usuario cadastrado";    }
    mysqli_close($con);
    include_once 'rodape.php';
    ?>
    <a href="sair.php"> sair</a>
<br/>