<?php 

require_once 'db.php';

if ($_POST) {
   $id = $_POST['medias_id'];

   $sql = "DELETE FROM medias WHERE medias_id = {$medias_id}";
    if($conn->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../1index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $conn->close();
}

?>