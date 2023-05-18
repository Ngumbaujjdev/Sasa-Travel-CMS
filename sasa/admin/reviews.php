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
            <!-- displaying diffrent package sites -->
            <?php
                    // using get to display data
                    if(isset($_GET['source'])){
                        $source=$_GET['source'];
                        // switch statement
                    }else{
                        $source="";
                    }
                        switch($source){
                            default:
                            // code here
                            include "includes/view_all_reviews.php";
                        }
                    
                    ?>























        </main>
    </div>

    <!-- js link -->
    <script src="./admin-js/admin-app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>