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
        $idRecuperado =  $_GET['id'];
        $Reprova = $conexao->query("DELETE from comentarios.comentario where id = '$idRecuperado'");
       ?>
      
<hr />
    <p><a href="moderarComentarios.php">Voltar</a>Para visualizar comentários aprovados no post</p>
  
</body>
</html>