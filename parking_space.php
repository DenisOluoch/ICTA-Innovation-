<?php include 'main.php';?>
<!DOCTYPE HTML>
<html>
<head>
<script src="mootools-core.js" type="text/javascript"></script>
	<script src="mootools-more.js" type="text/javascript"></script>
	<script src="Source/Locale.en-US.DatePicker.js" type="text/javascript"></script>
	<script src="Source/Picker.js" type="text/javascript"></script>
	<script src="Source/Picker.Attach.js" type="text/javascript"></script>
	<script src="Source/Picker.Date.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="inc/css/structure.css">
<link href="style.css" rel="stylesheet" />
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('----'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});

	</script>
</head>

<form class="box login" action="process-book-2.php" method="post">
	<fieldset class="boxBody">
	<label><strong>Parking Details</strong></label>
	<hr />
	   <label>Recommended Region For You - as per your vehicles body size</label>
	   <select name="street" class="cjComboBox" >
			<option value="Ronald Ngala Street">Ronald Ngala Street - Cars Only</option>
			<option value="Oginga Odinga Street">Oginga Odinga Street - Cars only</option>
			<option value="Sosiani Street">Sosiani Street - Lorries and Cars</option>
			<option value="DArap Moi Street">Arap Moi Street - tLorries Only</option>
			<option value="Oloo Street"> Oloo Street-  Cars Only</option>
			<option value="Farmers Street">Farmers Street- Lorries Only</option>
		</select>
		
		<select name="plot" class="cjComboBox" >
			<option value="PL 001">PL 001</option>
			<option value="PL 002">PL 002</option>
			<option value="PL 003">PL 003</option>
			<option value="PL 004">PL 004</option>
			<option value="PL 005">PL 005</option>
			<option value="PL 006">PL 006</option>
			<option value="PL 007">PL 007</option>
			<option value="PL 008">PL 008</option>
			<option value="PL 009">PL 009</option>
			<option value="PL 010">PL 010</option>
		</select>
		
	<label>Plate Number</label>
	  <input type="text" tabindex="3" name="plateno" placeholder="eg. KCD 123W" required>
	  
	<label><strong>Billing Information</strong></label>
	<hr />
	<label>Enter Credit Card Number:</label>
	<input type="text" name="account" placeholder="Card Number" required title="Credit card number" maxlength="14"/> 
	 
	   <label>Amount to be charged: Ksh. 100/-</label>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Proceed to Date & Time" tabindex="4">
	</footer>
</form>
</html>
