<?php
session_start();
require 'conecteaza.php';
include 'cap.php';
?>


<head>
  <title>Coș de cumpărături</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <h1>Coș de cumpărături</h1>

  <div id="product-list">
    <!-- Aici afișăm lista de produse din baza de date -->
  </div>

  <h2>Coșul meu</h2>
  <div id="cart">
    <!-- Aici afișăm conținutul coșului de cumpărături -->
  </div>

  <!--<button onclick="checkout()">Finalizare comandă</button>-->
</body>
</html>




    <!------cart--------->
<?php
    print "<div class='small-container cart-page'>";
        print "<table>";

            print "<tr>";
                print "<th>Produs</th>";
                print "<th>Cantitate</th>";
                print "<th>Valoare</th>";
            print "</tr>";

		$sesiune=$_SESSION['key_admin'];
		$total=0;
		$sir="select * from cos where sesiune='".$sesiune."' and isnull(livrat)";
		//print $sir;

		$resursa=mysqli_query($con,$sir);
		while ($row=mysqli_fetch_array($resursa)){
			$descriere=$row['descriere'];
			$descriere2=$row['descriere2'];
			$cantitate=$row['cantitate'];
			$suma=$row['amount_p'];
			$suma=floatval($suma);
			$total=$total+$suma;
			print "<div class='small-container cart-page'><tr><td>".$descriere."  ".$descriere2." </td><td> ".$cantitate."</td><td> ".$suma." lei</td></tr></div>";
		}
		

        print "</table>";

        print "<div class='total-price'>";
            print "<table>";
                print "<tr>";
                    print "<td>Subtotal</td>";
                    print "<td>$total lei</td>";
                print "</tr>";

                print "<tr>";
                    print "<td>TVA</td>";
                    print "<td>19%</td>";
                print "</tr>";

                print "<tr>";
                    print "<td>Total</td>";
                    print "<td>".$total*1.19." lei</td>";
                print "</tr>";
				print "</table>";
				print "</div>";
			print "</div>";

				print "<table>";
                print "<tr>";
					print "<form action='finalizare_comanda.php' method='post'>";
						print "<td colspan='3'><input type='submit' name='submit' value='Plata' ></td>";
					print "</form>";
                print "</tr>";
				print "</table>";
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


