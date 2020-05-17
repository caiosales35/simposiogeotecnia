<?php
    if(!isset($_POST["nome"])
       || !isset($_POST["email"])
       || !isset($_POST["mensagem"])) {

        header("Location: " . $_SERVER["HTTP_REFERER"]);
        exit;
    }

    $email_to = "caiosales35@gmail.com";

    if(!isset($_POST["tipo"])) {
        $email_subject = "Contato Simpósio de Geotecnia e Meio Ambiente ";
    } else {
        $email_subject = "Contato Simpósio de Geotecnia e Meio Ambiente - " . $_POST["tipo"];
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
