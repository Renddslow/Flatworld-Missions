<form method="post" action="">
				<label for="first_names">Missionary's First Name(s)</label>
				<input type="text" name="first_names" id="first_names">
				<label for="last-name">Missionary's Last Name</label>
				<input type="text" name="last_name" id="last_name">
				<label for="country">Country</label>
				<input type="text" name="country" id="country">
				<label for="region">Region</label>
				<input type="text" name="region" id="region"> 
				<label for="description">Description</label>
				<textarea name="paragraph" id="paragraph"></textarea>
				<label for
				<input type="submit" value="Post">
			</form>

<?php

class simpleCMS {
	var $host;
	var $user;
	var $password;
	var $table;

	public function display_public() {

	}

	public function display_admin() {

		 return <<<ADMIN_FORM


			<form method="post" action="">
				<label for="first_names">Missionary's First Name(s)</label>
				<input type="text" name="first_names" id="first_names">
				<label for="last-name">Missionary's Last Name</label>
				<input type="text" name="last_name" id="last_name">
				<label for="country">Country</label>
				<input type="text" name="country" id="country">
				<label for="region">Region</label>
				<input type="text" name="region" id="region"> 
				<label for="description">Description</label>
				<textarea name="paragraph" id="paragraph"></textarea>
				<label for
				<input type="submit" value="Post">
			</form>

		ADMIN_FORM;
	}

	public function write() {

	}

	public function connect() {

	}

	private function buildDB() {
		$sql = <<<mysql_query
			CREATE TABLE IF NOT EXISTS missionaries (

			)
	}

}
?>
