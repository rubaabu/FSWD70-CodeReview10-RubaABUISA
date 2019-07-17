<?php 

require_once 'db.php';

if ($_POST) {
   $medias_id = $_POST['medias_id'];
   $title = $_POST['title'];
   $author = $_POST['author'];
   $ISBN = $_POST[ 'ISBN'];
   $short_description = $_POST['short_description'];
   $publish_date = $_POST['publish_date'];
   $publisher = $_POST['publisher'];
   $type = $_POST['type'];
   $status = $_POST['status'];

   $medias_id = $_POST['medias_id'];

   $sql = "UPDATE medias SET medias_id = '$medias_id', title = '$title', author = '$author', ISBN = '$ISBN' , short_description ='$short_description', publish_date = '$publish_date', publisher ='$publisher', type ='$type', status ='$status'  WHERE medias_id = {$medias_id}" ;
   if($conn->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../1index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $conn->close();

}

?>