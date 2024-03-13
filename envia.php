<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);

    $destinatario = "btavares.nicolas@gmail.com";
    $assunto = "SITE PORTFÓLIO NT - Contato";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone;

    $cabecalho = "From: nbtvrs@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer: PHP/".phpversion();      

    if(mail($destinatario, $assunto, $corpo, $cabecalho)){
        echo("E-mail enviado com sucesso.")
    }else{
        echo("Houve um erro ao enviar o e-mail");
    }

?>