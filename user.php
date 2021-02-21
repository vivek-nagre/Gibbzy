<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="gibbzy.css">
</head>
<body>
  

<script src="./js/bootstrap.min.js"></script>
</body>
</html> -->



<?php
$con=mysqli_connect('localhost','root','');
if ($con) {
  echo "<h1>Done</h1>";
  echo "submitted";
}
else{
  echo "something went wrong";
}
mysqli_select_db($con,'gibbzy');
$fsrt=$_POST['name'];
$srname=$_POST['lstname'];
$mail=$_POST['email'];
$mobile=$_POST['num'];
$comment=$_POST['comment'];
$address=$_POST['add'];
$city=$_POST['city'];
// $state=$_POST['state'];
$zip=$_POST['zip'];
$query="INSERT INTO `client_data`(`NAME`, `LAST_NAME`, `EMAIL`, `CONTACT`, `QUERY`, `ADDRESS`, `CITY`, `ZIP`) 
VALUES ('$fsrt', '$srname', '$mail', '$mobile','$comment','$address', '$city','$zip')";

mysqli_query($con,$query);


?>