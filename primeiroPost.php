<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de comentário php</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>

 <!--Aqui entra o seu Post ou artigo -->
 
<h2>Noticia</h2>

<!--Aqui entra o seu Post ou artigo -->


<hr />
    <h2>Comentário</h2>
       <?php
       require_once 'conecta.php';
        //Aqui faz a busca de comentarios no banco
         $busca = $conexao->query ("SELECT * FROM comentarios.comentario WHERE identificacao = '1' AND moderador = 'sim'");
               while ($lista = $busca -> fetch(PDO::FETCH_ASSOC)){
                 $nome = $lista['nome'];
                 $empresa = $lista['empresa'];
                 $comentario = $lista['comentario'];

                 //buscar imagem
                 $email = $lista['email'];
                 $hash = md5( strtolower( trim( $email ) ) );   
                 $avatar = "http://www.gravatar.com/avatar/$hash?d=mm&s=100&r=g";      
                                     
                     echo "
                     <div class='dadosUsuario'>
                     <div class='foto'><div class='avatar'><img  src='$avatar' alt='Avatar usuário $nome' title='Avatar do usuário'/></div></div>
                       <p><strong>Nome:</strong> $nome</p>
                        <p><strong>E-Mail:</strong> $email</p>
                         <p><strong>Empresa:</strong> $empresa</p>
                          <p><strong>Comentário:</strong> <br> $comentario</p>
                          <div class='clear'></div>
                     </div>
                     <hr />
                     ";
                }
       ?>


   <h2>Deixe seu comentário</h2>
    
    <form action="cadastrarComentario.php" method="post">
    	<fieldset>
    			<legend>Preencha os campos abaixo</legend>

    			 <label for="Nome">Nome</label>
    			  <input type="text" name="nome" />
    			   <div class="clear"></div>

    			<label for="Email">E-mail</label>
    			 <input type="text" name="email" />
    			  <div class="clear"></div>
            <!--Coloquei o campo empresa que fiz com foco de um site de serviços tercerizados-->
    			<label for="Empresa">Empresa</label>
    			 <input type="text" name="empresa" />
    			  <div class="clear"></div>

    			<label for="comentario">Deixe seu comentário</label>
    			 <textarea name="comentario" rows="10" cols="60"></textarea>
    			  <div class="clear"></div>
    			  <input class="botao" type="submit" value="Comente" />
                  <input type="hidden" name="identificacao" value="1">
                  <input type="hidden" name="moderador" value="nao">
    	</fieldset>
    </form>

</body>
</html>