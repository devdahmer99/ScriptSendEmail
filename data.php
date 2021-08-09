<?php
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if(isset($_POST['email']) && !empty($_POST['email'])){
    $name = addcslashes($_POST['name']);
    $email = addcslashes($_POST['email']);
    $message = addcslashes($_POST['message']);


    $for = "eduardodahmer99@gmail.com";
    $subject = "Email de Teste";
    $body = "Name: ".$name." - Email: ".$email." - Message: ".$message;
    $header = "From: eduardodahmer99@gmail.com"."\r\n"."Reply-To: "
    .$email."\r\n"." X-Mailer: PHP/".phpversion();

    mail($for, $subject, $body, $header);
    echo "<h1>Email Enviado com Sucesso!</h1>";
    exit;
} else {
    echo "Falha ao enviar email";
}