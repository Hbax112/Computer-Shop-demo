<?php
?>
<br><br>
<h2>Despre noi</h2>
<br><br>
<p>Adresa: Romania, Timisoara<br><br>
Tel: +4077.123.456<br><br>
<p>Email<span id="mySpan" style="color:black;"> <a href="mailto:diana.sirbu03@e-uvt.ro">computershop@gmail.com</a> <br></p>
</span> 

<select onchange="myFunction(this);" size="3">
  <option>block
  <option>inline
  <option>none
</select>

<script>
function myFunction(x) {
  var whichSelected = x.selectedIndex;
  var sel = x.options[whichSelected].text;
  var elem = document.getElementById("mySpan");
  elem.style.display = sel;
}
</script>
<br><br>
</body>
</html>
<?php
?>