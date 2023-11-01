<?php
global $nume;
require 'conecteaza.php';
if(!empty($_SESSION["id_utilizator"])){
    $id_utilizator = $_SESSION["id_utilizator"];
    $result = mysqli_query($con, "SELECT * FROM admin WHERE id_utilizator = $id_utilizator");
    $row = mysqli_fetch_assoc($result);


    if(mysqli_num_rows($result) > 0){
        $nume=$row['nume'];
    }


}
else{
    header("Location login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComputerShop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'cap.php' ?>;


	<br>
    <h2>Bine ai revenit, <?php echo ucfirst($row["nume"]); ?></h2>
    <a href="logout.php"><button type="submit" class="btn">Logout</button></a>
    
 

  <form class="form-container1" action="https://formspree.io/f/mdovrlzv" method="POST" id="contact-form">

            <h2>Contacteaza-ne</h2>
            <br>
            <center><div id="validare-msg"  ></div></center>
            
            <div class = "nc" style= "margin-top:10px;">
                <label class = "p1">Adresă email</label>
                <br>
                <input type="text" class="chenarInput" id="Mail"  name="Email">
            </div>
    
           <div class="intrebare">
                <textarea id = "mesaj" name="Mesaj" cols="30" rows="10" placeholder="Textul tau..."  required></textarea>
    
           </div>
    
            <center><button type="submit" class="buton" onclick="validareMail()">Trimite</button></center>
        </form>
    </div>
    <br>
    <br>
    <br>

    <script>
        function validareMail()
        {
            let x = document.getElementById("Mail");
            const sablon = /\S+@\S+\.\S+/;
            if(!x.value.match(sablon))
                document.getElementById("validare-msg").innerHTML = "Adresa de email invalidă!";
        }        
    </script>


<?php include 'coada.php' ?>

</body>
</html>