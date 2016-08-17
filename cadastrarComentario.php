<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de comentário</title>
	<link rel="stylesheet" href="estilo.css">

</head>
<body>
 <div id="seguraConteudo">
 <?php
 //Variáveis responsáveis por receber os dados inserido no formulário de comentário.
$nome = $_POST['nome'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$comentario = $_POST['comentario'];
$moderador = $_POST['moderador'];
$identificacao = $_POST['identificacao'];

if (($nome == "")||($email == "" || ($comentario == "") || ($empresa == ""))){
echo "<p>Preencha corretamente os campos!</p>";
echo "<p><a href='primeiroPost.php'>Voltar</a></p>";
return false;
}
if(substr_count($email, "@") == 0 || substr_count($email, ".") == 0) {
echo "<p>Preencha corretamente com os dados solicitado!</p>";
echo "<p><a href='primeiroPost.php'>Voltar</a></p>";
return false;	
}

/* Aqui entra a parte que eviará um e-mail para o resposável pelo post assim que
   alguém fizer um comentário*/

/*$headers = "Content-type:text/html; charset=UTF-8";
$headers = "From: $email";
$para 	 = "user@servidordeemail.com.br";
$mensagem .= "De: $nome";
$mensagem .= "E-mail: $email";
$mensagem .= "Empresa: $empresa";
$mensagem .= "Comentario: $comentario";

$envia = mail($para, "Novo comentario no post!", $mensagem, $headers);
*/

/* require_once responsavel para incluir um arquivo e garantir que ele seja chamado uma vez. Dica experimente usar somente o require e veja o resultado assim aprederá na prática */ 

require_once 'conecta.php';

//Resposavel por inserir no banco de dados as informações contidas nos comentários
$insere = $conexao->query("INSERT INTO comentarios.comentario (id, nome, email, empresa, comentario, identificacao, moderador) VALUES ('NULL', '$nome', '$email', '$empresa', '$comentario', '$identificacao', '$moderador')");

//Mostra para o Usuário uma mensagem que seu comentário foi  concluido
echo "<p><strong>$nome</strong>, Seu comentário foi efetuado com sucesso! Obrigado!";
   echo "<p><a href='primeiroPost.php'>Voltar</a></p>";
?>	
 </div>
</body>
</html>