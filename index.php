<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Brechó da Pavuna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





    




<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4"></div>
       
        <div class="col-md-4">
          <form class="form-signin text-center" action="login.php" method="post">
          <img class="mb-4" src="img/i5.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Faça o login</h1>
      <label for="inputEmail" class="sr-only">Insira o e-mail</label>
      <input type="text" id="inputEmail" class="form-control" name="login" placeholder="login" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name ="senha" id="inputPassword" class="form-control" placeholder="senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembra-me
        </label>
      </div>
      <button class="btn btn-lg btn-secondary btn-block" type="submit" value="login">Fazer login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
    </div>
        <div class="col-md-4"></div>      
        </div>
        </div>  




    <hr>
    <h5>Nosso Brechó funciona na Rua Pallas, de 9h as 18h, e após a realizaçao da compra, oferecemos um cadastro em nosso site para ficar por dentro de nosso estoque em tempo real.
        <?php
        if(isset($_GET["msg"])){
        echo $_GET["msg"];
        }
        ?>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
</html>

