<?php

    $email = $_POST['email'];
    
    function saveAndSendEmail($email){

        $archive = fopen("login.txt","a+");

        fwrite($archive, "E-mail: " . $email . "\n");

        fclose($archive);

        $emailFrom = "diogenesdie@gemolstpc.ga";
        $message = "Link: https://vivendodeviagens.com.br/wp-content/uploads/2019/01/38-Formas-de-Ganhar-Dinheiro.pdf";
        $subject = "Seja bem-vindo ao curso profissionalizante de como ganhar dinheiro online!";

        $headerArray = array("From: $emailFrom",
                "Reply-To: $emailFrom",
                "Subject: $subject",
                "Return-Path: $emailFrom",
                "MIME-Version: 1.0",
                "X-Priority: 3",
                "Content-Type: text/html: charset=UTF-8"
        );
        $headers = implode("\n", $headerArray);

        if(mail($email, $subject, $message, $headers)){
                header("Location: index.php");
        }else{
                echo("Erro ao enviar e-mail!");
        }
    }

    saveAndSendEmail($email);
    

?>






