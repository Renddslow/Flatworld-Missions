<?php include('missionaries.php'); 

?>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);

	if ($name == "" OR $email == "" OR $message == "") {
		echo "You must specify a value for name, email address, and message.";
		exit;
	}

	foreach( $_POST as $value ) {
		if( stripos($value, 'Content-Type:') !== FALSE ){
			echo "There was a problem with the information you entered.";
			exit;
		}
	}

	if ($_POST["address"] != ""){
		echo "Your form submission has an error.";
		exit;
	}

	require_once("phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();

	if (!$mail->ValidateAddress($email)) {
		echo "You must specify a valid email address.";
		exit;
	}


	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message" . $message;

	$mail->SetFrom($email, $name);

	$address = $missionaries[];
	$mail->AddAddress($address, );

	$mail->Subject    = "PHPMailer Test Subject via mail(), basic";

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

	$mail->MsgHTML($body);

	$mail->AddAttachment("images/phpmailer.gif");      // attachment
	$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  echo "Message sent!";
	}

	header("Location: contact.php?status=thanks");
	exit;
}

?>

<link rel="stylesheet" href="/style.css">

<div class="contact">
	<h1>Contact <?php echo $missionary_name; ?></h1>

	<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
		<h3>Thanks for the email! We'll get back to you as soon as we can!</h3>
	<?php } else {?>

		<form method="post" action="contact.php">
			<table>
				<tr>
					<th>
						<label for="name">Name</label>
					</th>
					<td>
						<input type="text" name="name" id="name">
					</td>
				</tr>
				<tr>
					<th>
						<label for="email">Email</label>
					</th>
					<td>
						<input type="text" name="email" id="email">
					</td>
				</tr>
				<tr>
					<th>
						<label for="message">Message</label>
					</th>
					<td>
						<textarea type="text" name="message" id="message"></textarea>
					</td>
				</tr>
				<tr style="display: none;">
					<th>
						<label for="address">Address</label>
					</th>
					<td>
						<input type="text" name="address" id="address">
						<p>Humans (and other organic life): please leave this field blank.</p>
					</td>
				</tr>
			</table>
			<input type="submit" value="Send">
		</form>
	<?php } ?>
</div>