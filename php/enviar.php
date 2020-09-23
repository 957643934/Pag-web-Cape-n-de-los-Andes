<?php  
	
	if (isset($_POST['enviar'])) {
		if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
			$destinatario = 'cjun.jhojan.aylas.p20@gmail.com';
			$name = $_POST['name'];
			$asunto = $_POST['asunto'];
			$msg = $_POST['msg'];
			$email = $_POST['email'];
			$header = "From: noreply@example.com" . "\r\n"
			$header = "Reply-To: noreply@example.com" . "\r\n"
			$header = "X-Mailer: PHP/" . phpversion();
			$mail = @mail($destinatario,$email,$asunto,$msg,$header);
			if ($mail) {
				echo "<h4>¡Mail enviado exitosamente!</h4>";
			}
	}
?>