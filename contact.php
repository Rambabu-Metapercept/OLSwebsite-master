<?php
$field_name = $_POST['username'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_subject = $_POST['subject'];
$field_message = $_POST['message'];

$mail_to = 'hemal@metapercept.com';
$subject = $field_subject;

$from = "test@learnol.co";

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Phone: '.$field_phone."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$from."\r\n";
$headers .= 'Reply-To: '.$from."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Sucess Message');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Error Message');
		window.location = 'contact.html';
	</script>
<?php
}
?>
