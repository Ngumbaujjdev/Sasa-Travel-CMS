<!-- add style form -->
<?php
include "includes/style_form.php";

?>
<!-- The styled alert -->
<?php
include "includes/style_alert.php";

?>
<!-- recieving the form -->
<?php
if(isset($_POST['create_user'])){
    $username=$_POST['name'];
    $useremail=$_POST['email'];
    $userpassword=$_POST['password'];
    $usertype=$_POST['type'];


    // query
    $query="INSERT INTO users(user_name,user_email,user_password,user_type)";
    $query.="VALUES('{$username}','{$useremail}','{$userpassword}','{$usertype}')";


    // send the query
    $create_user_query=mysqli_query($connection,$query);

    // if no query fail
    if($create_user_query){
        echo "<div class='alert success'>
  <span class='closebtn'>&times;</span>  
  user was added successful.
</div>";
    }else{
        die("query failed");
    }
}





?>
























<main class="main">
    <!-- the entry form section -->
    <section id="paymentForm">
        <h1>add user</h1>

        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">

                <input type="text" name="name" id="" placeholder="name of the user">
                <input type="email" name="email" id="" placeholder="email of the user">
                <input type="password" name="password" id="" placeholder="password of the user">
                <input type="text" name="type" placeholder="user_type:admin or user">


                <button type="submit" name="create_user">Add</button>


            </form>
        </div>
    </section>

</main>