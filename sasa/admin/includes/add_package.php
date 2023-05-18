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
if(isset($_POST['create_package'])){
    $package_name=$_POST['name'];
    $package_price=$_POST['price'];


    $package_image=$_FILES['image']['name'];
    $package_image_temp=$_FILES['image']['tmp_name'];
   




    // image end
    $package_duration=$_POST['duration'];
    $package_description=$_POST['desc'];


    // upload the image to permanently
    move_uploaded_file($package_image_temp,"../images/$package_image");

    // query
    $query="INSERT INTO packages(package_price,package_description,package_image,package_location,package_duration)";
    $query.="VALUES({$package_price},'{$package_description}','{$package_image}','{$package_name}','{$package_duration}')";


    // send the query
    $create_package_query=mysqli_query($connection,$query);

    // if no query fail
    if($create_package_query){
        echo "<div class='alert success'>
  <span class='closebtn'>&times;</span>  
  Your query was successful.
</div>";
    }else{
        die("query failed");
    }
}





?>
























<main class="main">
    <!-- the entry form section -->
    <section id="paymentForm">
        <h1>add package</h1>

        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">

                <input type="text" name="name" id="" placeholder="name of the package">

                <input type="number" name="price" id="" placeholder="price">

                <input type="file" name="image" id="">

                <input type="text" name="duration" id="" placeholder="enter duration">



                <textarea name="desc" id="" cols="30" rows="10" placeholder="enter description"></textarea>
                <button type="submit" name="create_package">publish</button>


            </form>
        </div>
    </section>

</main>