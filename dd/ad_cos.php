<?php
	session_start();
	require 'conecteaza.php';
	$id_produs=$_POST['id_produs'];
	$suma=$_POST['suma'];	
	$descriere=$_POST['descriere'];	
	$descriere2=$_POST['descriere2'];
	$id_utilizator=$_POST['id_utilizator'];
	$sesiune=$_SESSION['key_admin'];
	$data_comanda=date("Y.m.d");

	$sir="insert into cos (id_p, cantitate, id_utilizator, amount_p, descriere, descriere2, sesiune, data_comanda) values ($id_produs, 1,$id_utilizator, $suma, '".$descriere."', '".$descriere2."','".$sesiune."','".$data_comanda."')";
	//print $sir;
	
	mysqli_query($con,$sir);
	print "<br /><br /><br /><center><strong>Cosul a fost actualizat cu succes</strong></center>";
	print "<meta HTTP-EQUIV='Refresh' CONTENT='1; URL=cos.php'>";
/*
	print "<br />1. produs=$id_produs";
	print "<br />2. suma=$suma";
	print "<br />3. descriere=$descriere";
	print "<br />4. descriere2=$descriere2";
	print "<br />5. id utilizator=$id_utilizator";
	print "<br />6. sir=$sir";
	print "<br />7. sesiune=$sesiune";
	print_r($_SESSION);
	
*/
?>