<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="index.css">
</head>
<body>  
<ul class="tabs">
    <li><a href="index.php#home">Home</a></li>
        <li><a href="index.php#Hobbies">Hobbies</a></li>
        <li><a href="index.php#contact">Links</a></li>
    
  </ul>
   <div style = "text-align: center;
    color:rgb(85, 19, 19);">
<br><br><br><br>
<?php

$name = $email = $style = $message = $payment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $payment = test_input($_POST["payment"]);
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
  Payment: <input type="text" name="payment">
  <br><br>
  Message: <textarea name="message" rows="5" cols="40"></textarea>
  <br><br>
  Style:
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
echo $payment;
echo "<br>";
echo $message;
echo "<br>";
echo $style;
?>
 </div>
</body>
</html>