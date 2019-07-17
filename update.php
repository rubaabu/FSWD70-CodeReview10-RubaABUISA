<?php 

require_once 'actions/db.php';

if($_GET['medias_id']) {
   $id = $_GET['medias_id'];

   $sql = "SELECT * FROM medias WHERE medias_id = {$id}" ;
   $result = $conn->query($sql);

   $data = $result->fetch_assoc();

   $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update book</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
        <tr>
               <th>ID</th >
               <td><input  type="text" name="medias_id"  placeholder="medias_id" value="<?php echo $data['medias_id']; ?>"  /></td>
           </tr >
           <tr>
               <th>Title</th >
               <td><input  type="text" name="title"  placeholder="title" value="<?php echo $data['title']; ?>"  /></td>
           </tr >     
           <tr>
               <th>author</th>
               <td><input  type="text" name="author" placeholder="author" value ="<?php echo $data['author']; ?>" /></td >
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type="text"  name="ISBN" placeholder ="ISBN" value= "<?php echo $data['ISBN']; ?>" /></td>
           </tr> 
           <tr>
               <th>short description </th>
               <td><input  type="text" name="short_description" placeholder="short_description" value= "<?php echo $data['short_description']; ?>" /></td>
           </tr>
           <tr>
               <th>publish date </th>
               <td><input  type="text" name="publish_date" placeholder="publish_date" value= "<?php echo $data['publish_date']; ?>" /></td>
           </tr>
           <tr>
               <th>publisher </th>
               <td><input  type="text" name="publisher" placeholder="publisher" value= "<?php echo $data['publisher']; ?>" /></td>
           </tr>
           <tr>
               <th>type </th>
               <td><input  type="text" name="type" placeholder="type" value= "<?php echo $data['type']; ?>" /></td>
           </tr>
           <tr>
               <th>status </th>
               <td><input  type="text" name="status" placeholder="status" value= "<?php echo $data['status']; ?>" /></td>
           </tr>

           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']; ?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "1index.php"><button  type="button" >Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >
