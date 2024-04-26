<?php
	session_start();
	if(isset($_SESSION['logado'])) {
		if($_SESSION['logado'] != true) {
			header("location:login/");
		}
	} else {
		header("location:login/");
	}
?>
