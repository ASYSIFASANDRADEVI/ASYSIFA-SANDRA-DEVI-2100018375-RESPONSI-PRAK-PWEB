<?php
	echo "<head><title> SUDAH SELESAI, TERIMA KASIH </head></tittle>";
	$name= $_POST['name'];
	$Subject= $_POST['Subject'];
	$model= $_POST['model'];
	$hari= $_POST['hari'];
	$waktu= $_POST['waktu'];

	$fp = fopen("file.txt", "a+");
	fputs($fp,"$name|$Subject|$model|$hari|$waktu\n");
	fclose($fp);
	echo "<a href = index.html> HOME </a><br>";
?>