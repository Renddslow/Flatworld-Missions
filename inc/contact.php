<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message" . $message;

	//TODO: send email

	header("Location: contact.php?status=thanks");
	exit;
}

?>

<link rel="stylesheet" href="/style.css">

<div class="contact">
	<h1>Contact <?php echo $missionary ?></h1>

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
			</table>
			<input type="submit" value="Send">
		</form>
	<?php } ?>
</div>