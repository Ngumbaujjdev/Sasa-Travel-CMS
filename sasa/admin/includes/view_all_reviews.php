<h1>Reviews</h1>



<div class="pk__card-container">
    <!-- to perfom all the actions for the reviews -->
    <?php
$query="SELECT * FROM reviews";
// the result to get all the reviews dynamicaly
$select_all_reviews=mysqli_query($connection,$query);
// to check if the query went through
if(!$select_all_reviews){
    die("QUERY FAILED");
}
// use a while looop to get all of them
while($row=(mysqli_fetch_assoc($select_all_reviews))){
    // pulling the data
    $review_id=$row['review_id'];
    $review_phone=$row['review_phone'];
    $review_content=$row['review_content'];
    $review_email=$row['review_email'];
    $review_name=$row['review_name'];
    ?>
    <div class="card">
        <p><span>id:</span> <?php echo "$review_id"; ?></p>
        <p><span>Name:</span><?php echo "$review_name"; ?> </p>
        <p><span>Email:</span><?php echo "$review_email"; ?></p>
        <p><span>Number:</span> <?php echo "$review_phone"; ?></p>
        <p><span>Message:</span> <?php echo "$review_content"; ?></p>
        <div class="buttons">
            <button class='delete'><a href='reviews.php?source=delete&review_id=<?php echo $review_id; ?>'>
                    delete</a></button>

        </div>



    </div>
    <?php } ?>

</div>
<!-- delete query -->
<?php
// get the review id
if(isset($_GET['review_id'])){
    $review_id=$_GET['review_id'];
     $query="DELETE FROM reviews WHERE review_id={$review_id}";
     $delete_query=mysqli_query($connection,$query);
     if(!$delete_query){
                            // 
       die("query failed");
       }   
}
?>