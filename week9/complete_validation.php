<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="forms.css">
</head>
<body>  
<div class="tabs">
    <ul>
        <li><a href="index.php#home">HOME</a></li>
        <li><a href="index.php#Hobbies">HOBBIES</a></li>
        <li><a href="index.php#Contact">LINKS</a></li>
        
       
      </ul>
  </div>
<br><br><br><br><br><br><br><br><br><br><br>
<?php

$name = $email = $gender = $message = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $message = test_input($_POST["message"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Who u?</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Message: <textarea name="message" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $message;
echo "<br>";
echo $gender;
?>

</body>
</html>