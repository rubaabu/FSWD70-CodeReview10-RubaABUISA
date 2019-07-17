<?php 

require_once 'actions/db.php';

if ($_GET['medias_id']) {
   $id = $_GET['medias_id'];

   $sql = "SELECT * FROM medias WHERE medias_id = {$id}" ;
   $result = $conn->query($sql);
   $data = $result->fetch_assoc();

   $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete</title>
</head>
<body>

<h3>Do you really want to delete this book?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "medias_id" value="<?php echo $data['medias_id'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="1index.php">< button type="button">No, go back!</button ></a>
</form>

</body>
</html>

<?php
}
?>