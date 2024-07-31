<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['e-mail']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $destino = "vitorcorretor98@outlook.com";
    $assunto = "Coleta de Dados - Portfolio Pessoal";

    $corpo = "Nome: ".$nome."\n".$email."\n".$telefone."\n".$mensagem;

    $cabeca = "From: vitorferreira9802@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso");
    }else{
        echo("Houve um erro ao enviar o e-mail");
    }

?>