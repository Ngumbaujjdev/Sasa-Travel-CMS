<?php 
session_start();
?>




<?php 
include "header.php";
include "db.php";

?>
<?php
if(isset($_SESSION['user_email'])){
     header('location:payment.php');
}else{
     header('location: login.php');
}





?>