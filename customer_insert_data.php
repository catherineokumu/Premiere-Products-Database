<?php
     include('includes/connect_mysql.php');	
	 
	$cstnumber=$last=$first=$street=$city=$state=$code=$balance=$limit=$rep_id="";
	// If you do not place the above formula, you might run into 
	// UNDEFINED INDEX ERROR
	
	if (isset($_POST['submitted'])){	
	$cstnumber = $_POST['cstnumber'];
	$last = $_POST['last'];
	$first = $_POST['first'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$code = $_POST['code'];
	$balance = $_POST['balance'];
	$limit = $_POST['limit'];
	$rep_id = $_POST['rep_id'];	
	}
	
	
	
	$sqlinsert = "INSERT INTO customer (cstnumber, last, first, street, city, state,
	zipCode, balance, creditLimit, rep_id) VALUES ('$cstnumber', '$last', '$first', '$street', '$city',
	'$state', '$code', '$balance', '$limit', '$rep_id');";
	
	if (!mysqli_query($conn, $sqlinsert)) {
		die ('<h2><i>Error inserting new record</i></h2>');
		} //End of nested if statement
		
		$newrecord = "<h2><i>1 record added to the database</i></h2>";
	
 // End of the main if statement
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Data into DB</title>
</head>
<body><h4>
PREMIERE PRODUCTS DATABASE
<form action="customer_insert_data.php" method="POST">
<input type="hidden" name="submitted" value="true">
<br>
<fieldset>
<legend>CUSTOMER TABLE</legend>
<br>
<label>Customer Number: <input type="text" name="cstnumber" /></label>
<br>
<br>
<label>Last Name: <input type="text" name="last" /></label>
<br>
<br>
<label>First Name: <input type="text" name="first" /></label>
<br>
<br>
<label>Street: <input type="text" name="street"/></label>
<br>
<br>
<label>City: <input type="text" name="city" /></label>
<br>
<br>
<label>State: <input type="text" name="state" /></label>
<br>
<br>
<label>Zip Code: <input type="text" name="code" /></label>
<br>
<br>
<label>Balance: <input type="text" name="balance" /></label>
<br>
<br>
<label>Credit Limit <input type="text" name="limit" /></label>
<br>
<br>
<label>Sales Rep Number: <input type="text" name="rep_id" /></label>
<br>
<br>
</fieldset>
<br>
<input type="submit" name="ENTER DATA" />
</form>
<br>
<?php
echo $newrecord
?>
</body>
</html>