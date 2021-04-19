<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// Here we are setting the variables to zero
$name = $hometown = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Method is post
  $name = test_input($_POST["name"]);
  $hometown = test_input($_POST["hometown"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {                // trim is for white spaces
  $data = trim($data);
  $data = stripslashes($data);              // stripslashes to take away back slashes
  $data = htmlspecialchars($data);          // this helps sanitize the code
  return $data;
}
?>

<h2>PHP Form Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  // $_SERVER["PHP_SELF"] brings data back to existing file/page
  Name: <input type="text" name="Name">                                             // This secures the code from attacks
  <br><br>
  Hometown : <input type="text" name="Hometown">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $hometown;
echo "<br>";
echo $gender;
?>

</body>
</html>