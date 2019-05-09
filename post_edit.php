<?php
include_once './header.php';
include_once './database.php';

$post_id = (int)$_GET['id'];
$query = "SELECT * FROM posts WHERE id=$post_id";
$result = mysqli_query($link, $query);
$post = mysqli_fetch_array($result);

?>
        <h1>Uredi opravilo:</h1>
        <form action="post_insert.php" method="post">
            <input type="hidden" name="id" value="<?php echo $post['id'];?>"/>
            <input type="text" name="title" value="<?php echo $post['title'];?>" placeholder="Vnesi naslov:" required="required"/>
            <textarea cols="7" rows="7" name="description" placeholder="Vnesi opis:"><?php echo $post['description'];?></textarea>
            <input type="submit" name="submit" value="Shrani">
        </form>
<?php
        include_once './footer.php';
?>




