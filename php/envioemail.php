<?php
    if(!isset($_POST["nome"])
       || !isset($_POST["email"])
       || !isset($_POST["mensagem"])) {

        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit;
    }

    $email_to = "matheus.bortoleto@catijr.com.br";

    if(!isset($_POST["tipo"])) {
        $email_subject = "Pedido de orçamento";
    } else {
        $email_subject = "Pedido de orçamento - " . $_POST["tipo"];
    }

    $name = $_POST["nome"];
    $email = $_POST["email"];
    $message = $_POST["mensagem"];

    $email_message = $name . "\r\n" . $message ;

    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if(!mail($email_to, $email_subject, $email_message, $headers)) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit;
    }

    header("Location: ../confirmacao.html");
?>