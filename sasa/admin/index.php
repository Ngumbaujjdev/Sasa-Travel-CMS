<!-- include the header -->
<?php
include "../db.php";
include "includes/header.php";
?>


<body>
    <!-- include the add admin -->
    <?php
include "includes/add_admin.php";

?>

    <div class="grid-container">
        <?php include('header.php'); ?>
        <?php include('includes/admin_sidebar.php'); ?>
        <main class="main">
            <h1>Dashboard</h1>
            <div class="box-container">
                <div class="card">
                    <h3>users</h3>
                    <?php
            // count the total user and display all of them
            $query="SELECT COUNT(*) as total_users FROM users";
            $result=mysqli_query($connection,$query);
            $row=mysqli_fetch_assoc($result);
            $total_users=$row['total_users'];

            echo"<h4>{$total_users}</h4>";
            
            
            
            ?>



                </div>





                <div class="card">
                    <h3>Packages</h3>
                    <!-- d -->
                    <!-- display the number  dynamically -->
                    <?php
            // count the total user and display all of them
            $query="SELECT COUNT(*) as total_packages FROM packages";
            $result=mysqli_query($connection,$query);
            $row=mysqli_fetch_assoc($result);
            $total_packages=$row['total_packages'];

            echo"<h4>{$total_packages}</h4>";
            ?>

                </div>






                <div class="card">
                    <h3>Reviews</h3>
                    <?php
            // count the total user and display all of them
            $query="SELECT COUNT(*) as total_reviews FROM reviews";
            $result=mysqli_query($connection,$query);
            $row=mysqli_fetch_assoc($result);
            $total_reviews=$row['total_reviews'];

            echo"<h4>{$total_reviews}</h4>";
            
            
            
            ?>



                </div>
            </div>
        </main>
    </div>

    <!-- foter -->
    <?php
    include "includes/admin_footer.php";
    
    
    
    ?>