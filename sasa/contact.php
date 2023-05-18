<?php 
include "header.php";
include "db.php";
include "admin/includes/style_alert.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/variables.css">
    <title>Document</title>
</head>

<body>

    <!-- landing page -->
    <section id="landing-page">
        <div class="title">
            <h2>CONTACT US</h2>
        </div>


        <!-- contact us form -->
        <section id="contact-us">
            <div class="column-map box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7088231429652!2d36.75495481398308!3d-1.3512454360797144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f0539d06c89e1%3A0x60bd2ddb85416853!2zMcKwMjEnMDQuMyJTIDM2wrA0NScyNS41IkU!5e0!3m2!1sen!2ske!4v1678096006636!5m2!1sen!2ske"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="form box">
                <?php
        if(isset($_POST['create-review'])){
            $reviewer_name=$_POST['name'];
            $reviewer_email=$_POST['email'];
            $reviewer_number=$_POST['number'];
            $review_content=$_POST['content'];


            // query to insert
            // query
        $query="INSERT INTO reviews(review_name,review_email,review_phone,review_content)";
        $query.="VALUES('{$reviewer_name}','{$reviewer_email}',{$reviewer_number},'{$review_content}')";

        $review_insert=mysqli_query($connection,$query);
        if($review_insert){
            echo "<div class='alert success'>
  <span class='closebtn'>&times;</span>  
  review send successful.
</div>";
        }else{
            die("query failed");
        }
        


        }
        
        
        
        
        
        
        ?>












                <h4>SAY SOMETHING</h4>
                <form action="" method="post">
                    <input type="text" name="name" id="" placeholder="Enter name">
                    <input type="email" name="email" id="" placeholder="Enter email">
                    <input type="number" name="number" id="" placeholder="Enter number">
                    <textarea name="content" id="" cols="30" rows="10" placeholder="say something"></textarea>
                    <button type="submit" name="create-review">Submit</button>

                </form>
            </div>
        </section>
        <?php
include 'footer.php';
?>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>