<?php
class Connection {

	public function connect() {
		return new PDO ("mysql:host=localhost; dbname=final_bnhs","root","");
	}

}
?>