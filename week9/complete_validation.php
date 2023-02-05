<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="index.css">
</head>
<body>  
<ul class="tabs">
    <li><a href="#home">Home</a></li>
        <li><a href="#Hobbies">Hobbies</a></li>
        <li><a href="#contact">Links</a></li>
    
  </ul>
   
<br><br><br><br>
<?php

$name = $email = $style = $message = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $message = test_input($_POST["message"]);
  $style = test_input($_POST["style"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2> REQUEST COMMISSION</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Message: <textarea name="message" rows="5" cols="40"></textarea>
  <br><br>
  style:
  <input type="radio" name="style" value="female">OUTLINE
  <input type="radio" name="style" value="male">COLOR
  <input type="radio" name="style" value="other">FULLY RENDERED
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
echo $style;
?>

</body>
</html>