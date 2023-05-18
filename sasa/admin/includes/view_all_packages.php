<main class="main">
    <h1>View Packages</h1>
    <div class="pk__card-container">
        <?php
            // the query to select all packages
            $query="SELECT * FROM packages";
            // 
            $show_all_packages=mysqli_query($connection,$query);


            // while loop to display all the packages
            while($row=mysqli_fetch_assoc($show_all_packages)){
             $package_id=$row['package_id'];
             $package_price=$row['package_price'];
             $package_description=$row['package_description'];
             $package_image=$row['package_image'];
             $package_location=$row['package_location'];
             $package_duration=$row['package_duration'];


            //  displaying the data
           echo "<div class='card'>";
           echo "  <img src='../images/{$package_image}'>";
           echo "  <p><span>id:</span> {$package_id}</p>";
           echo " <p><span>Title:</span> {$package_location}</p>";
           echo"  <p><span>Description:</span>{$package_duration}</p>";
           echo"  <p><span>Location:</span>{$package_location}</p>";
           echo"  <p><span>Duration:</span>{$package_duration}</p>";
           echo"  <p><span>Price:</span>{$package_price}</p>";
           echo "<div class='buttons'>
                <button class='update'><a href='packages.php?source=edit_package&p_id={$package_id}'>Update</a></button>
                <button a class='delete'><a href='packages.php?source=delete&p_id={$package_id}'>Delete</a></button>
            </div>";
            echo " </div>";





            }    
      ?>





















    </div>
    </div>
</main>
</div>
<!-- the delete function -->

<?php
                    if(isset($_GET['p_id'])){
                        $package_id=$_GET['p_id'];
                        $query="DELETE FROM packages WHERE package_id={$package_id}";
                        $delete_query=mysqli_query($connection,$query);
                        if(!$delete_query){
                            // 
                            die("query failed");
                        }
                        
                        
                    }
                    
                    
                    
                    
                    
                    ?>