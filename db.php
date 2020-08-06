<?php
	$mysqli = new mysqli('localhost', 'root', '', 'zakamat');

	if (mysqli_connect_errno()) {
	    print_f("Соединение не установлено", mysql_connect_error());
	    exit();
	}
	$mysqli->set_charset('utf8');    
?>