<?php
  
  include_once 'topouser.php'; 
  echo"<h1>Veja os nossos produtos</h1>";
  include_once 'conexao.php';   
  $sql = "select * from produto ORDER BY nome ASC";    
  $rs = mysqli_query($con,$sql);    
  if(mysqli_num_rows($rs) > 0){
      ?>


      <table table class="table table-striped">
          <tr>
              <th>Nome</th>
              <th>Estoque</th>
              <th>Valor</th>
              <th>Categoria</th>           
          <tr>
                       
      <?php        
      while($linha = mysqli_fetch_array($rs)){
          ?>
          <tr>
              <td><?php echo $linha["nome"]; ?></td>
              <td><?php echo $linha["estoque"]; ?></td>
              <td><?php echo $linha["valor"]; ?></td>
              <td><?php echo $linha["categoria"]; ?></td>
              
      </tr>
      </tbody>
      <?php          } ?>
      </table>
       
      <h5>Caso tenha interesse em nossos produtos, entre em contato via telefone (021) 3456-7890 ou atraves do email brechopavuna@gmail.com<h5>
      <?php
  }else{
      echo"não existe produto cadastrado";    }
  mysqli_close($con);
  include_once 'rodape.php';
  ?>
<a href="sair.php"> Sair</a>
<p>


<br/>

