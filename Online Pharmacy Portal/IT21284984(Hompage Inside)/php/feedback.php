<?php 

ini_set('display_errors', 1);
include'db.conn.php'; 
if(isset($_POST['submit1']))
 {

$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];

echo $comments;

$query =  "INSERT INTO feedback(name, email, phone, feedback) VALUES ('$name','$email','$num','$comments')";
$result = mysqli_query($conn, $query);
header("location:Home_page.php?Feedback=success");


	   }



?>