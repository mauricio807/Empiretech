<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$telefone = addcslashes($_POST['telefone']);
$mensagem = addcslashes($_POST['msg']);

$to = "mauriciomarinho807@gmail.com"; //alterar para o email de contato 
$subject = "Empire TECH
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Telefone: ".$telefone."\r\n".
        "Mensagem: ".$mensagem;

$header = "From: mauriciomarinho807@gmail.com"."\r\n". //alterar o email - Esse email precisa pertencer ao dominio no qual o script ta rodando
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();
            
if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");
}else{

    echo("O Email não pode ser enviado");
}

}

?>