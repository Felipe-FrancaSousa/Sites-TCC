<?php
	if(!$con = mysqli_connect('localhost', 'root', '')){
 		echo "Erro ao conectar a base de dados ;-;";
	}
	if(!mysqli_select_db($con, 'id8763774_emperor')){
 		echo "Erro ao selecionar a base de dados ;-;";
	}
	mysqli_query($con, "SET NAMES utf8");
?>