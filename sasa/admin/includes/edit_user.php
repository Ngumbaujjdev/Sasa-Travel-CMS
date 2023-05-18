<!-- add style form -->
<?php
include "includes/style_form.php";

?>
<!-- The styled alert -->
<?php
include "includes/style_alert.php";

?>
<?php
// to check the id of the package
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
}


// query to select all the packages to display as the values
$query="SELECT * FROM users WHERE user_id=$user_id";

// select that unique post
$select_users_by_id=mysqli_query($connection,$query);

// while loop to get the data
while($row=mysqli_fetch_assoc($select_users_by_id)){
    // pull the data and assign
    $user_id=$row['user_id'];
    $user_name=$row['user_name'];
    $user_email=$row['user_email'];
    $user_password=$row['user_password'];
    $user_type=$row['user_type'];
   
    
}





if(isset($_POST['update'])){
     $username=$_POST['name'];
     $useremail=$_POST['email'];
     $userpassword=$_POST['password'];
     $usertype=$_POST['type'];
     







    // to check if the image is empty
// send the query to update

          $query = "UPDATE users SET ";
          $query .="user_name = '{$username}', ";
          $query .="user_email='{$useremail}',";
          $query .="user_password='{$userpassword}',";
          $query .="user_type='{$usertype}'";
           $query .="WHERE user_id='{$user_id}'";
         


        //   update packages query
        $update_user=mysqli_query($connection,$query);
        // to check if query went succesufuly
        // if no query fail
    if($update_user){
        echo "<div class='alert success'>
  <span class='closebtn'>&times;</span>  
  update successful.
</div>";
    }else{
        echo "<div class='alert success'>
  <span class='closebtn'>&times;</span>  
  error
</div>";
       
    }
}





    







?>














<section id="paymentForm">
    <h1>update user</h1>

    <div class="form">
        <form action="" method="post">
            <input type="text" name="name" value="<?php echo $user_name; ?>">
            <input type="email" name="email" id="" value="<?php echo $user_email; ?>">
            <input type="password" name="password" id="" value="<?php echo $user_password ?>">
            <input type="text" name="type" value="<?php echo $user_type ?>">


            <button type="submit" name="update">Update</button>

        </form>
    </div>
</section>