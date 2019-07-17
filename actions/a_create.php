<?php 

require_once 'db.php';

if ($_POST) {
   $medias_id         = $_POST['medias_id'];
   $title             = $_POST['title'];
   $author            = $_POST['author'];
   $ISBN              = $_POST['ISBN'];
   $short_description = $_POST['short_description'];
   $publish_date      = $_POST['publish_date'];
   $publisher         = $_POST['publisher'];
   $type              = $_POST['type'];
   


   $sql = "INSERT INTO medias (medias_id, title, author, ISBN, short_description, publish_date, publisher, type) 
           VALUES ('$medias_id','$title', '$author', '$ISBN', '$short_description','$publish_date','$publisher','$type')";
    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../1index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>