<link rel="stylesheet" href="/style.css">

<div class="contact">
	<h1>Contact <?php echo $missionary ?></h1>
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
</div>