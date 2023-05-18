 <h1> Users</h1>
 <div class="users-table">
     <table width="100%">
         <thead>
             <tr>
                 <td class="id-head">Id</td>
                 <td class="username-head">Username</td>
                 <td class="email-head">Email</td>
                 <td class="password-head">Password</td>
                 <td class="usertype-head">User type</td>
                 <td class="action-head">Action</td>
             </tr>
         </thead>
         <tbody>
            
             <?php
            // the query to select all packages
            $query="SELECT * FROM users";
            // 
            $show_all_users=mysqli_query($connection,$query);


            // while loop to display all the packages
            while($row=mysqli_fetch_assoc($show_all_users)){
             $user_id=$row['user_id'];
             $user_name=$row['user_name'];
             $user_email=$row['user_email'];
             $user_password=$row['user_password'];
             $user_type=$row['user_type'];

            //  displaying the data
           echo "<tr>";
           echo " <td class='id-body'>{$user_id}</td>";
           echo " <td class='username-body'>{$user_name}</td>";
           echo "  <td class='email-body'>{$user_email}</td>";
           echo"   <td class='password-body'>{$user_password}</td>";
           echo"   <td class='usertype-body'>{$user_type}</td>";
           echo "
                 <td>
                     <div class='action-btn'>
                         <button class='btn-edit'><a href='users.php?source=edit_user&user_id={$user_id}'>Update</a></button>
                         <button class='btn-delete'><a href='users.php?source=delete_user&user_id={$user_id}'>Delete</a></button>
                     </div>
                 </td>";
          
            echo " </tr>";




            }    
      ?>
         </tbody>
     </table>
 </div>
 <?php
                    if(isset($_GET['user_id'])){
                        $user_id=$_GET['user_id'];
                        $query="DELETE FROM users WHERE user_id={$user_id}";
                        $delete_query=mysqli_query($connection,$query);
                        if(!$delete_query){
                            // 
                            die("query failed");
                        }
                        
                        
                    }
                    
                    
                    
                    
                    
                    ?>