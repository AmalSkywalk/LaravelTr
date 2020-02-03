<?php 
	
		session_start();

		$uname="";
		$uemail="";

		if (isset($_POST['submit'])) {
		$uname = $_POST['name'];
		$uemail = $_POST['email'];


		}

 ?>