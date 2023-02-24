<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="pizza-slice-vector-icon.jpg">
  </head>
<body>
  <link rel="stylesheet" href="style.css">

<form action="action_page.php"autocomplete>
<center><h1  style="font-size:350%;">PLACE YOUR ORDER FOR PIZZA</h1></center>

<fieldset>
    <legend>PERSONAL INFO:</legend>
<label for="name">NAME:</label>     <!--name-->
<input type="text" id="name" name="name"autofocus ><br><br>

<label for="address">ADDRESS:</label>     <!--address-->
<input type="text" id="address" name="address"required ><br><br>

<label for="email">EMAIL:</label>  <!--email-->
<input type="email" id="email" name="email"required><br><br>

<label for="phone">CONTACT NUMBER:</label>
  <input type="tel" id="phone" name="phone" placeholder="198-24-478" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
  <small>Format: 123-45-678</small><br><br>
</fieldset><br><br>


<label for="quantity"><b>QUANTITY</b>(between 1 and 5):</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5"><br><br>

<label for="size" style="font-size:200%;"><b>CHOICE OF SIZE</b></label><br><!--size-->
<select id="size" for="size" name="size" >
    <option value="size">SMALL(4 slices)&nbsp &nbsp &nbsp +$3.00</option>
    <option value="size">MEDIUM(6 slices)&nbsp &nbsp &nbsp +$4.00</option>
    <option value="size">LARGE(8 slices)&nbsp &nbsp &nbsp +$5.00</option>
    <option value="size">EXTRA LARGE(10 slices)&nbsp &nbsp &nbsp +$7.50</option>
</select><br><br>

<P style="font-size:200%;"><strong>CHOICE OF CRUST:</strong></P>
<input type="radio" id="re4gular" name="CRUST" value="REGULAR"><!--crust-->
<label for="re4gular">REGULAR</label><br>
<input type="radio" id="thin" name="CRUST" value="thin">
<label for="thin">THIN</label><br>
<input type="radio" id="thick" name="CRUST" value="thick">
<label for="thick">THICK</label>,<br><br>



<label for="cheese" style="font-size:200%;"><b>CHOICE OF CHEESE</b></label><br><!--cheese-->
<select id="cheese" for="cheese" name="cheese" >
    <option value="cheese">REGULAR</option>
    <option value="cheese">EASY CHEESE</option>
    <option value="cheese">NO CHEESE</option>
    <option value="cheese">EXTRA CHEESE &nbsp &nbsp &nbsp +$1.50</option>
</select><br><br>

<label for="toppings" style="font-size:200%;"><b>CHOICE OF TOPPINGS</b></label><br>

  <input type="checkbox" id="topping1" name="topping1" value="BLACK OLIVES"><!--toppings-->
  <label for="topping1"> BLACK OLIVES</label><br>
  <input type="checkbox" id="topping2" name="topping2" value="GREEN OLIVES">
  <label for="topping2"> GREEN OLIVES</label><br>
  <input type="checkbox" id="topping3" name="topping3" value="BROCCOLI">
  <label for="topping3"> BROCCOLI</label><br>
  <input type="checkbox" id="topping4" name="topping4" value="GREEN PEPPERS">
  <label for="topping4"> GREEN PEPPERS</label><br>
  <input type="checkbox" id="topping5" name="topping5" value="JALAPEO PEPPERS">
  <label for="topping5"> JALAPEO PEPPERS</label><br>
  <input type="checkbox" id="topping6" name="topping6" value="RED PEPPERS">
  <label for="topping6"> RED PEPPERS</label><br>
  <input type="checkbox" id="topping7" name="topping7" value="MUSHROOMS">
  <label for="topping7"> MUSHROOMS</label><br>
  <input type="checkbox" id="topping8" name="topping8" value="TOMATOES">
  <label for="topping8"> TOMATOES</label><br>
  <input type="checkbox" id="topping9" name="topping9" value="SWEET CORN">
  <label for="topping9"> SWEET CORN</label><br>
  <input type="checkbox" id="topping10" name="topping10" value="PEPPERONI">
  <label for="topping10"> PEPPERONI</label><br>
  <input type="checkbox" id="topping11" name="topping11" value="BACON">
  <label for="topping11"> BACON</label><br>
  <input type="checkbox" id="topping12" name="topping12" value="HAM">
  <label for="topping12"> HAM</label><br>
  <input type="checkbox" id="topping13" name="topping13" value="GROUND BEEF">
  <label for="topping13"> GROUND BEEF</label><br>
  <input type="checkbox" id="topping14" name="topping14" value="GRILLED PANEER">
  <label for="topping14"> GRILLED PANEER</label><br>
  <input type="checkbox" id="topping15" name="topping15" value="GRILLED CHICKEN">
  <label for="topping15"> GRILLED CHICKEN</label><br>
  <input type="checkbox" id="topping16" name="topping116" value="CAPSICUM">
  <label for="topping16"> CAPSICUM</label><br><br>



<label for="dips" style="font-size:200%;"multiple><b>CHOICE OF DIPS</b></label><br><!--dips-->
<select id="dips" for="dips" name="dips" >
    <option value="dips">CREAMY GARLIC</option>
    <option value="dips">HOT AND SPICY</option>
    <option value="dips">JALAPENO CHEDDAR</option>
    <option value="dips">RANCH</option>
</select><br><br>

<label for="shapes" style="font-size:200%;"><b>CHOICE OF SHAPE</b></label><br><!--shapes-->
<select id="shapes" for="shapes" name="shapes" >
    <option value="shapes">ROUND</option>
    <option value="shapes">SQUARE</option>
    <option value="shapes">HEART</option>
    <option value="shapes">TRIANGLE</option>
</select><br><br>


<textarea name="MESSAGE" rows="10" cols="20">ADD A MESSAGE:</textarea><br><br>
<button type="button" onclick="alert('refill the form!')">RESET!</button><br><br>
<input type="submit" value="SUBMIT"><BR><BR>

<center><p style="font-size:200%;">ENJOY YOUR DELICIOUS PIZZA</p></center>
</form>

</body>


</html>