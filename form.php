
<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "portfolio";


$con = mysqli_connect($server , $user , $password , $database);

 if(!$con){
     die("Connection failed". mysqli_connect_error());}
 else{
  //echo "Successfully Connected";
 }

 if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];


    $query =  "INSERT INTO `form` (`name`, `email`, `message`) VALUES ('$name', '$email',  '$message')";

  $res = mysqli_query($con , $query);
     if($res){
         header('location: index.php?MessageSubmitted');
     }
     else{
         echo "Error";
     }

    }
    ?>
