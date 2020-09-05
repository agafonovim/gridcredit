<?php
	$pdo = new PDO('mysql:host=localhost;dbname=gridbase', 'root', "Ytjxtymnfrbbgkj[jqgfhjkm1235689");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
?>