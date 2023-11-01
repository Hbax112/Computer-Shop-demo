<?php
session_start();
require 'conecteaza.php';
include 'cap.php';
$id_utilizator = $_SESSION["id_utilizator"];


$sir="select cos.id_p, cos.cantitate, cos.id_utilizator, cos.amount_p, cos.descriere, cos.sesiune, cos.livrat, cos.data_comanda, produse.name_p,produse.image_p from cos, produse where cos.id_p=produse.id_p and id_utilizator=$id_utilizator order by data_comanda, name_p";
//print $sir;
$resursa=mysqli_query($con,$sir);
print "<table border='1'><tr>";
print "<td>Data</td><td>Produs</td><td>Imagine</td><td>Descriere</td><td>Pret unitar</td><td>Cantitate</td></tr>";
	while ($row=mysqli_fetch_array($resursa)){
		$nume=$row['name_p'];
		$descriere=$row['descriere'];
		$cantitate=$row['cantitate'];
		$suma=$row['amount_p'];
		$data_comanda=$row['data_comanda'];
		print "<tr><td>$data_comanda</td><td>$nume</td><td>";
		print '<img src="data:image;base64,'.base64_encode($row['image_p']).'" alt="Image" >';
		print "</td><td>$descriere</td><td>$suma</td><td>$cantitate</td></tr>";
	} 
print"</table>";
?>        

<button onclick="topFunction()" id="myBtn" ><img src="imagini/b2.jpeg" width="70" height="50"/></button>

<script>

let mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>


<?php include 'coada.php'?>


