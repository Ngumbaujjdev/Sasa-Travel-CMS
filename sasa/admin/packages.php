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
                            case "add_package";
                            include "includes/add_package.php";
                            break;
                            case "edit_package";
                            include "includes/edit_package.php";
                            break;
                            default:
                            // code here
                            include "includes/view_all_packages.php";
                        }
                    
                    ?>








        </main>
    </div>

    <!-- foter -->
    <?php
    include "includes/admin_footer.php";
    
    
    
    ?>