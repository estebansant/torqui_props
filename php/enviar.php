<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
if(isset($_POST['submit'])){
	$to = "estebansant30@gmail.com";
	$name = $_POST['fname'];
    $surname = $_POST['lname'];
	$from = $_POST['email'];
	$phone = $_POST['phone'];
	$message = "Este mensaje fue enviado por: " . $name . $surname . " \r\n <br>" . "Teléfono de contacto: " . $phone . " \r\n <br>" . $_POST['message'] . "<br> Enviado el: " . date('d/m/Y', time());
	$subject = "Nueva consulta para Torqui Propiedades";
	$headers = "De:" . $from;
	$result = mail($to,$subject,$message,$headers);

	if ($result) {
		echo '<script type="text/javascript">alert("Tu mensaje fue enviado con éxito!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		echo '<script type="text/javascript">alert("Lo siento, no pudimos enviar tu mensaje, veulve a intentarlo más tarde.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
}
?>