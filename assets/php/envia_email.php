<?php
if (!empty($_POST)) {
    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Additional headers
    $headers .= 'To: Site DVS Solution <contato@dvs.solutions>' . "\r\n";
    $headers .= 'From: ' . $_POST['nome'] .  '<'. $_POST['email'] .'>' . "\r\n";
    
    $message = "Segue os dados que foram enviados pelo formulário de contato do site: <br/>"
            . "Nome: {$_POST['nome']}<br/>"
            . "E-Mail: {$_POST['email']} <br/>"
            . "Assunto: {$_POST['assunto']}<br/>"
            . "Mensagem: {$_POST['msg']}<br/>";
            
    if(mail("contato@dvs.solutions", "Envio de Formulario do Site". " - ". $_POST['assunto'], $message, $headers)){
        echo '<script type="text/javascript">alert("Mensagem enviada com sucesso!"); location.href="http://www.dvs.solutions/";</script>';
    }
}
?>