<?php

# alterar a variavel abaixo colocando o seu email

$destinatario = "EmperorArtsContato@gmail.com";

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$telefone = $_POST['telefone'];

 // monta o e-mail na variavel $body

$body = "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Telefone: " . $telefone . "\n\n";
$body = $body . $mensagem . "\n\n";

// envia o email
if(mail("EmperorArtsContato@gmail.com", "Contato de cliente", $body, "From:" . $email)){
        echo "Email enviado com sucesso!";
    }

header("location: index.php");

?>
