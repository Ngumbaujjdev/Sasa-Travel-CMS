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
if(isset($_GET['p_id'])){
    $package_id=$_GET['p_id'];
}


// query to select all the packages to display as the values
$query="SELECT * FROM packages WHERE package_id=$package_id";

// select that unique post
$select_package_by_id=mysqli_query($connection,$query);

// while loop to get the data
while($row=mysqli_fetch_assoc($select_package_by_id)){
    // pull the data and assign
    $package_id=$row['package_id'];
    $package_price=$row['package_price'];
    $package_description=$row['package_description'];
    $package_duration=$row['package_duration'];
    $package_location=$row['package_location'];
    $package_image=$row['package_image'];
    
}
// to check for the post




if(isset($_POST['submit'])){
     $package_name=$_POST['location'];
     $package_price=$_POST['price'];


    $package_image=$_FILES['image']['name'];
    $package_image_temp=$_FILES['image']['tmp_name'];
   




    // image end
    $package_duration=$_POST['duration'];
    $package_description=$_POST['desc'];


    // upload the image to permanently
    move_uploaded_file($package_image_temp,"../images/$package_image");
    // to check if the image is empty
// send the query to update

          $query = "UPDATE packages SET ";
          $query .="package_price  = '{$package_price}', ";
          $query .="package_description='{$package_description}',";
          $query .="package_image='{$package_image}',";
          $query .="package_location='{$package_location}',";
          $query .="package_duration='{$package_duration}'";
          $query .="WHERE package_id='{$package_id}'";


        //   update packages query
        $update_package=mysqli_query($connection,$query);
        // to check if query went succesufuly
        // if no query fail
    if($update_package){
        echo "<div class='alert success'>
  <span class='closebtn'>&times;</span>  
  update successful.
</div>";
    }else{
        die("query failed");
    }
}





    







?>














<section id="paymentForm">
    <h1>update</h1>

    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">

            <input type="text" value='<?php echo $package_location; ?>' name="location" id="">

            <input type="number" value='<?php echo $package_price; ?>' name="price" id="">

            <input type="file" name="image" id="" placeholder="">
            <br>
            <img width="100" src="../images/<?php echo $package_image; ?> " alt="">
            <br>

            <input type="text" value='<?php echo $package_duration; ?>' name="duration" id="">



            <textarea name="desc" id="" cols="30" rows="10"
                placeholder="enter description"><?php echo $package_description; ?></textarea>
            <button type="submit" name="submit">publish</button>


        </form>
    </div>
</section>