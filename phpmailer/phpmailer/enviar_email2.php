<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


		<?php

			$nome = $_POST['nome'];
		    $email = $_POST['email'];
		    $telefone = $_POST['telefone'];
		    $seguro = $_POST['seguro'];
		    $horario = $_POST['horario'];
		    $mensagem = $_POST['mensagem'];

			require_once("PHPMailerAutoload.php");


			$mail = new PHPMailer();

			$mail->isSMTP();

			$mail->CharSet = 'UTF-8';

			$mail->SMTPOptions = array('ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true)
			);

			$mail->Host = "";//aqui

			$mail->SMTPSecure = "tls";//ssl

			$mail->Port = 587;

			$mail->SMTPAuth = true;

			$mail->Username = '';//aqui

			$mail->Password = '';//aqui

			$mail->setFrom ('');//aqui
			$mail->addAddress('');//aqui

			$mail->isHTML(true);// Set email format to HTML
		    $mail->Subject = 'Contato pelo Site';
		    $mail->Body    = "Olá,<br><br>Nova Mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Telefone: $telefone <br>Seguro: $seguro <br> Horario: $horario <br> Mensagem: $mensagem <br>";

			if($mail->send()){
				echo "enviado com suceso!";
			}else{
				echo "Erro:", $mail->ErrorInfo;
			}

		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            // $(function(){
            //     window.location.href = '../../chat.html';
            // })
        </script>
    </body>
</html>
