<?php include_once 'topo.php'; ?>
<html>
    <head>
    <title>Brechó da Pavuna</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
    <!-- Adicionando Javascript -->
    <script>

    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                           
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
    </head>

    <body>
    
    <!-- Inicio do formulario -->
      <form method="post" action="cadastrarusu.php">

        <label>Nome:
        <br><input name="nome" type="text" id="nome" /></label><br />
        <label>Perfil:
        <br><input name="perfil" type="text" id="perfil" /></label><br />
        <label>login:
        <br><input name="login" type="text" id="login" /></label><br />
        
        <label>E-mail:
        <br><input name="email" type="text" id="login" /></label><br />
               
        <label>Senha:
        <br><input name="senha" type="text" id="senha" onkeyPress="validatePassword()"/></label><br />
        
        <label>Confirmar senha:
        <br><input name="senha" type="text" id="confirmarSenha"  onkeyPress="validatePassword()" /></label><br />
        <script>
        var password = document.getElementById("senha");
          var confirm_password = document.getElementById("confirmarSenha");
        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Senhas diferentes!");
            document.getElementById("senha").style.borderColor="#FF0000";
            document.getElementById("confirmarSenha").style.borderColor="#FF0000";
          } else {
            confirm_password.setCustomValidity('');
            document.getElementById("senha").style.borderColor="#028200";
            document.getElementById("confirmarSenha").style.borderColor="#028200";
          }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
      </script>

        <label>Cep:
        <br><input name="cep" type="text" id="cep" 
               onblur="pesquisacep(this.value);" /></label><br />
        <label>Rua:
        <br><input name="rua" type="text" id="rua" size="40" /></label><br />
        <label>Bairro:
        <br><input name="bairro" type="text" id="bairro"/></label><br />
        <label>Cidade:
        <br><input name="cidade" type="text" id="cidade" /></label><br />
        <label>Estado:
        <br><input name="estado" type="text" id="uf"  /></label><br />
        <label>IBGE:
        <br><input name="ibge" type="text" id="ibge" /></label><br />
        <br><input type="submit" value="Cadastrar Usuario" class="btn btn-primary"/>
      </form>
       
    </body>

    </html>
    <?php include_once 'rodape.php'; ?>
<a href="sair.php"> sair</a>
<br/>
    