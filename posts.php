<?php
    include_once './header.php';
    include_once './database.php';
?>    

<h1>Objave</h1>

<a href="post_add.php" class="button alt">Dodaj objavo</a>

<?php 
$user_id = $_SESSION['user_id'];

 $query = "SELECT * FROM posts WHERE user_id=$user_id";
 
   $result = mysqli_query($link, $query);
   
   
   ?>


<table> 
 
     <tr>
     
         <th> Ime </th>
         <th> Opis  </th>
         <th> Gumb </th>
         
     
     </tr>
     
     <?php
     
      while ($row = mysqli_fetch_array($result)) 
             
         {
          echo '<tr>';
          
            echo'<td>'.$row['title'].'</td>';
            echo'<td>'.$row['content'].'</td>';
            echo'<td>';
            echo '<a href="post_delete.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure?\');"> delete </a>';
            echo '<a href="post_edit.php?id='.$row['id'].'"> edit </a>';
            echo '</td>';
            
          echo '</tr>';
            
         
         }
     
     ?>
 
 </table>

<?php
    include_once './footer.php';
?>