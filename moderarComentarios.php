<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de comentário php</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>

  <!--Aqui é onde sera feito avaliação dos comentários  se seram publicados ao post ou não no caso esta pagina ficaria somente visível para o administrador -->

<h2 style= "text-align:center">Moderar comentários</h2>

<br>
    <h2>Comentário</h2>
       <?php
       require_once 'conecta.php';
        //Aqui faz a busca de comentarios no banco para serem aprovadas ou não
         $busca = $conexao->query ("SELECT * FROM comentarios.comentario WHERE moderador = 'nao'");
               while ($lista = $busca -> fetch(PDO::FETCH_ASSOC)){
                 $idcoment   =  $lista['id'];
                 $nome = $lista['nome'];
                 $email = $lista['email'];
                 $empresa = $lista['empresa'];
                 $comentario = $lista['comentario'];
                   echo "<p><strong>Nome:</strong> $nome</p>
                     <p><strong>E-Mail:</strong> $email</p>
                     <p><strong>Empresa:</strong> $empresa</p>
                     <p><strong>Comentário:</strong> <br> $comentario</p><br>

                     <p><span><a href='aprovar.php?id=$idcoment'>Aprovar</span></a> ou <span><a href='reprovar.php?id=$idcoment'>Reprovar</a></span></p><br><br>";
                }
       ?>
      
<hr />
    <p><a href="primeiroPost.php">Voltar</a> Para visualizar comentários aprovados no post</p>
  
</body>
</html>