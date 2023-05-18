<?php
include 'header.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/variables.css">
</head>

<body>
    <section id="landing-page">
        <div class="title">
            <h2>ABOUT US</h2>
        </div>
    </section>
    <section id="about">
        <div class="about-img box">
            <img src="./images/about-img.jpg" alt="" srcset="">
        </div>
        <div class="about-content box">
            <h3>About Us</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, illum. Cumque quis perspiciatis nulla ullam
                consequatur fugiat quasi quibusdam voluptates.</p>
        </div>
    </section>
    <?php
include 'includes/review.php';
?>



    <?php
include 'footer.php';
?>
</body>

<!-- js -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</html>