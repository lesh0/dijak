<?php
    include_once './database.php';
    $post_id= (int)$_GET['id'];
    
    $query = "DELETE FROM post WHERE id=$post_id";
    
    mysqli_query($link, $query);
    
   
    
    header("location: posts.php");
?>
