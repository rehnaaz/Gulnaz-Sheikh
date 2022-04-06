<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="assests/myStyles.css">
</head>
<body>

<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
  $titleErr = $bodyErr = " " ;
  $title = $body = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["title"])) {
    $titleErr = "Title is required";
  }
   else {
    $title = test_input($_POST["title"]);
  }
  if (empty($_POST["body"])) {
    $bodyErr = "Please body";
  } 
  else {
    $body = test_input($_POST["body"]);
  }   
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


include "config.php";

	if(isset($_REQUEST['Submit'])) {; echo "<br";exit;

	// print_r($_POST)

	// echo "values in GET"; print_r($_GET); echo "<br>";
	// echo "values in POST"; print_r($_POST); echo "<br";
	// echo "values in REQUEST"; print_r($_REQUEST)
		$date = date('Y-M-D h:m:s');
	// print_r($_date);

		// Insert query
		$query = "INSERT INTO user_registrations (first_name, last_name, gender, city, address, created) values ('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['gender']."','".$_POST['city']."','".$_POST['address']."','".$date."') ";

		// Run query
		$response = mysqli_query($connection, $query);
		if ($response){
		echo ("data inserted successfully");
		}else{
			echo ("data not inserted");
		}
  }
?>

<div id="midsection" >
		<div style="padding: 10px">
<p><span class="error">* Required Field</span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Title: <input type="text" name="title">
  <span class="error">* <?php echo $titleErr;?></span>
  <br><br>
  Body: <input type="text" name="body">
  <span class="error">* <?php echo $bodyErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $title;
echo "<br>";
echo $body;
echo "<br>";
?>

</div>
	</div>

</body>

</body>
</html>