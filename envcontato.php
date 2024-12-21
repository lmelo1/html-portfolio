<?php
if (!empty($_POST['nome'])) {
    $enviado = envcontato();
    if ($enviado) {
        echo ("<div><h3 style='text-align:center; color:blue;'>Mensagem enviada com sucesso. Aguarde que entraremos em contato. Obrigada.</h3></div>");
        echo ("<div><h3 style='text-align:center; color:yellow;'>Voltando...</h3></div>");
    } else {
        echo ("<div><h3 style='text-align:center; color:red;'>Sua mensagem não pode ser enviada. Tente novamente mais tarde. Obrigada.</h3></div>");
        echo ("<div><h3 style='text-align:center; color:yellow;'>Voltando...</h3></div>");
    }
    echo " <meta http-equiv='refresh' content=3;URL='/index.php'>";
}

function envcontato()
{
    $para = "contato@samantamelo.vet.br";
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $subject = $_POST['assunto'];
    $message = $_POST['mensagem'];

    $mensagem = "Nome: $name <br>";
    $mensagem .= "Email: $email <br>";
    $mensagem .= "Assunto: $subject <br>";
    $mensagem .= "Mensagem: $message <br>";

    $headers = "From: contato@samantamelo.vet.br\n";
    $headers .= "MIME-Version: 1.1\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "Reply-To: " . $email . " ";

    if (mail($para, $subject, $mensagem, $headers, "-r" . $para)) {
        return true;
    } else {
        return false;
    }
}
