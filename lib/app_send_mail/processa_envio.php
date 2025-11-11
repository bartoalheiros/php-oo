<?php
    
    require "./bibliotecas/PHPMailer/Exception.php";
    require "./bibliotecas/PHPMailer/OAuth.php";
    require "./bibliotecas/PHPMailer/PHPMailer.php";
    require "./bibliotecas/PHPMailer/POP3.php";
    require "./bibliotecas/PHPMailer/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // print_r($_POST);

    class Mensagem {
        private $destino = null;
        private $assunto = null;
        private $mensagem = null;
        public $status = array( 'codigo_status' => null, 'descricao_status' => '');

        public function __get($atributo) {
            return $this->$atributo;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        public function mensagemValida() {
            if(empty($this->destino) || empty($this->assunto) || empty($this->mensagem)) {
                return false;
            }

            return true;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('destino', $_POST['destino']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);
    
    
    // print('<br>');
    // print_r($mensagem);

    if(!($mensagem->mensagemValida())) {
        echo 'Mensagem não é válida';
        header('Location: index.php');
    } 

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'alheirosbwebweb@gmail.com';                     //SMTP username
        $mail->Password   = 'lwmw uwdc qaof bcyi';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('alheirosbwebweb@gmail.com', 'Web Completo Remetente');
        $mail->addAddress('alheirosbwebweb@gmail.com', 'Web Completo Destinatário');     //Add a recipient
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Oi. Eu sou o assunto.';
        $mail->Body    = 'Oi, Eu sou o conteúdo do <strong>e-mail</strong>';
        $mail->AltBody = 'Oi. Eu sou o conteúdo do e-mail.';

        $mail->send();

        $mensagem->status['codigo_status'] = 1;
        $mensagem->status['descricao_status'] = 'E-mail enviado com sucesso';

    } catch (Exception $e) {

        $mensagem->status['codigo_status'] = 2;
        $mensagem->status['descricao_status'] = 'Não foi possível enviar o e-mail. Detalhes do erro:' . $mail->ErrorInfo;
    }
?>

<html>
    <head>

    </head>

    <body>

        <div class="container">
            <div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p>Seu app de envio de e-mails particular!</p>
			</div>

            <class class="row">
                <div class="col-md-12">
                    <?php if($mensagem->status['codigo_status'] == 1) { ?>

                        <div class="container">
                            <h1 class="display-4 text-success">Sucesso</h1>
                            <p><?php $mensagem->status['descricao_status'] ?></p>
                            <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                        </div>

                    <?php } ?>
                       
                    <?php if($mensagem->status['codigo_status'] == 2) { ?>
                          
                        <div class="container">
                            <h1 class="display-4 text-danger">Ops!</h1>
                            <p><?php $mensagem->status['descricao_status'] ?></p>
                            <a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                        </div>

                    <?php } ?>   
                </div>
            </class>
        </div>
        
    </body>
</html>