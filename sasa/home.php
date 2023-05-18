<?php
include "db.php";
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container">
        <div class="image-container">
            <img src="images/home.jpg" alt="" class="img">
        </div>
        <div class="content-container">
            <h1>Lorem ipsum dolor sit amet.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, tempora blanditiis voluptates
                reiciendis corporis fuga. Rem optio dolorem est iusto.</p>
            <div class="content-link">
                <a href="#packages">Our travel packages</a>
            </div>
        </div>
    </div>
    <div id="packages">
        <h1>Our Packages</h1>
        <!---------------Packages--------------->
        <div class="package-container">
            <div class="p_container">
                <?php 
                $query="SELECT * FROM packages";
                // send the query
                $select_all_packages=mysqli_query($connection,$query);
 
                // while looop to print the data
                while($row=mysqli_fetch_assoc($select_all_packages)){
                    $package_id=$row['package_id'];
                    $package_name=$row['package_location'];
                    $package_description=substr($row['package_description'],0,100);
                    $package_image=$row['package_image'];
                    $package_price=$row['package_price'];
                    $package_duration=$row['package_duration'];


                    ?>











                <!-- the html -->
                <div class="package">
                    <div class="content">
                        <!------Package Image------->
                        <img src="images/<?php echo "$package_image"; ?>" class="presentation_icon">
                        <!------paragraphe------->
                        <h6><?php echo "$package_name"; ?>
                        </h6>

                        <p> <?php echo "$package_description"; ?>
                        </p>
                        <div class="bottom">
                            <table>
                                <tr>
                                    <td class="price-all">
                                        <span class="material-symbols-outlined">payments</span>
                                        <span class="price"><?php echo "$package_price"; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="location-all">
                                        <span class="material-symbols-outlined">location_on</span>
                                        <span class="location"><?php echo "$package_name"; ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="duration-all">
                                        <span class="material-symbols-outlined" id="temp-margin"> date_range</span>
                                        <span class="duration"><?php echo "$package_duration"; ?></span>
                                    </td>
                                </tr>
                            </table>
                            <a href="package.php?p_id=<?php echo $package_id; ?>"> BOOK NOW </a>

                        </div>
                    </div>
                </div>
                <?php } ?>






            </div>
        </div>

    </div>


    <?php
include 'footer.php';
?>

</body>

</html>