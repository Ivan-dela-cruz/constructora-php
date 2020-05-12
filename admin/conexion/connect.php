<?php
	$mysqli= new mysqli("localhost", "root", "", "constructora");
	if(mysqli_connect_errno()){
		echo "<p>Este sitio esta presentando problemas</p>";
	}
	$mysqli->set_charset("utf8");
