<?php

    function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = "") {
        echo "Destinatários: ".$destinatarios."<br>";
        echo "CC:" .$cc. "<br>";
        echo "Assunto: ".$assunto."<br>";
        echo "Mensagem: ".$mensagem."<br>";
    }

    sendEmail(
        "alheirosbwebweb@gmail.com",
        "alheirosb@gmail.com",
        "Argumentos Nomeados",
        "Dominando a feature de argumentos nomeados do PHP8"
    );

    echo "<br>";

?>