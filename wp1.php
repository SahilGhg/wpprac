<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>WP 1</title>
<style>
   body {
	font-family: Arial, sans-serif;
	margin: 20px;
}
   form {
	max-width: 400px;
	display: table;
	padding: 10px;
	border: thin #7e7e7e;
	background-color: lightsalmon;
	border-radius: 5px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
	margin: 0 auto;
}
   legend{
	font-weight: bold;
}
   div.tableRow {
	display: table-row;
}
   input[type="text"], input[type="password"], input[type="email"], input[type="date"], textarea, select {
	display: table-cell;
	vertical-align: top;
	padding: 10px;
	width: 100%;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin: 5px 0;
}
   
   input[type="submit"] {
	background-color: green;
	color: black;
	padding: 10px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	font-size: 16px;
}
   input[type="submit"]:hover {
	background-color: lightgreen;
	border-color: #999;
}
   label {
	display: table-cell;
	padding: 3px;
	margin: 5px 0;
}
   label:first-child{
	text-align: right;
}
   input[type="text"]:hover,
   input[type="password"]:hover,
   input[type="email"]:hover,
   input[type="date"]:hover{
	border-color: #999;
}
   input[type="radio"], input[type="checkbox"] {
	margin-right: 5	px;
}
    
   .error {
	color:red;
}
</style>
</head>
<body>
<form id="regForm" action="<?php echo htmlspecialchars($_SERVER]["PHP_SELF"]); ?>" method="POST">
	<fieldset>
	  <legend>Registration details</legend>
	  <div class="tableRow">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
	  </div>

	  <div class="tableRow">	
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
	  </div>

	  <div class="tableRow">
		<label for="confirmPassword">Confirm Password:</label>
		<input type="password" name="confirmPassword" id="confirmPassword">
	  </div>

	  <div class="tableRow">
		<label for="email">Email Address:</label>
		<input type="text" name="email" id="email">
	  </div>

	  <div class="tableRow">
		<label for="mobile">Mobile Number:</label>
		<input type="text" name="mobile" id="mobile">
	  </div>

	  <div class="tableRow">
		<label>Gender:</label>
		<input type="radio" name="gender" id="male">
		  <label for="male">Male</label>
		<input type="radio" name="gender" id="female">
		  <label for="female">Female</label>
		<input type="radio" name="gender" id="other">
		  <label for="other">Other</label>
	  </div>

	  <div class="tableRow">
		<label for="dob">Date of birth:</label>
		<input type="date" name="dob" id="dob">
	  </div>

	  <div class="tableRow">
		<label for="address">Address:</label>
		<textarea name="address" id="address"></textarea>
	  </div>

	  <div class="tableRow">
		<label>Availability:</label>
		<input type="checkbox" name="availability" id="mrng">
	  	<label for="mrng">Morning</label>
		<input type="checkbox" name="availability" id="afternoon">
	  	<label for="afternoon">Afternoon</label>
		<input type="checkbox" name="availability" id="eve">
	  	<label for="eve">Evening</label>
		<input type="checkbox" name="availability" id="wknd">
	  	<label for="wknd">Weekend</label>
	  </div>

	  <div class="tableRow">
		<label>Area of interest:</label>
		<select name="interest">
			<option value="setup">Event setup</option>
			<option value="reg">Registration</option>
			<option value="clean">Clean-up</option>
			<option value="other">other</option>
		</select>
	  </div>

	  <div class="tableRow">
	        <label></label>
		<input type="submit" value="Submit">
	  </div>
	</fieldset>
</form>
<script>
	document.getElementById("regForm").addEventListener("submit",event);
	function event() {
		var isValid = true;
		var email = document.getElementById("email").value;
		var atposition = email.indexOf("@");
		var dotposition = email.lastIndexOf(".");
		
		if(atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length)    {
			isValid = false;
			document.getElementById("email").classList.add("error");
			alert("Please enter a valid email address");
		  }
		else {
			document.getElementById("email").classList.remove("error");
		  }
	
		var mobile = document.getElementById("mobile").value;
		var mobilePattern = /^\d{10}$/;
		if(mobile.length !==10) {
		alert("Phone number must be exactly 10 digits long.");
		isValid = false;
}
		if(!isValid) {
	event.preventDefault();
}
}
</script>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST" {
  $username = $_POST['username'];
		
  if(!filter_var
}
?>
</body>
</html>