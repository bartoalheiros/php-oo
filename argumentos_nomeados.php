<?php

    function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = "") {
        echo "Destinatários: ".$destinatarios."<br>";
        echo "CC:" .$cc. "<br>";
        echo "Assunto: ".$assunto."<br>";
        echo "Mensagem: ".$mensagem."<br>";
    }

    echo "<br>";

    sendEmail(
        assunto: "Argumentos Nomeados",
        destinatarios: "alheirosbwebweb@gmail.com",
        mensagem: "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo "<br>";

    sendEmail(
        "alheirosbwebweb@gmail.com",
        "alheirosb@gmail.com",
        "Argumentos Nomeados",
        "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo "<br>";

?>