<form method="get">
  <label for="quantity">number 1:</label>
  <input type="number" id="quantity" name="number1">
  <label for="quantity">number 2:</label>
  <input type="number" id="quantity" name="number2">
  <input type="submit" value="Submit">
</form>

<?php 

echo  $_GET["number1"] . "*" . $_GET["number2"] . "=" . $_GET["number1"] * $_GET["number2"]  ; 
?>



