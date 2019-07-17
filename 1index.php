<?php require_once 'actions/db.php'; ?> 

<!DOCTYPE html>
<html>
<head>
   <title>Medias</title>
   <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <style type="text/css">
       .manageUser {
           width : 75%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>
<h2>Welcome to the library</h2>
<div class ="manageUser">
   
   <table  class="table table-striped">
       <thead>
           <tr>
               <th>ID</th>
               <th>Title</th>
               <th>Author</th>
               <th>ISBN</th>
               <th>short_description</th>
               <th>publish_date</th>
               <th>publisher</th>
               <th>type</th>
               <th>status</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM medias ";
           // $result = $conn->query($sql);
           $result = mysqli_query($conn,$sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['medias_id']." </td>
                       <td>" .$row['title']."  </td>
                       <td>" .$row['author']."</td>
                       <td>" .$row['ISBN']."  </td>
                       <td>" .$row['short_description']."  </td>
                       <td>" .$row['publish_date']."  </td>
                       <td>" .$row['publisher']."  </td>
                       <td>" .$row['type']."  </td>
                       <td>" .$row['status']."  </td>
                       <td>
                           <a href='update.php?id=" .$row['medias_id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['medias_id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           $result->free();
            ?>

            
       </tbody>
   </table>

   <fieldset >
   <legend>Add book</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
        <tr>
               <th>ID</th >
               <td><input class="form-control" type="text" name="medias_id"  placeholder="medias_id" /></td >
           </tr>
           <tr>
               <th>Title</th >
               <td><input class="form-control" type="text" name="title"  placeholder="title" /></td >
           </tr>     
           <tr>
               <th>author </th>
               <td><input class="form-control" type="text" name="author" placeholder="author" /></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input class="form-control" type="text"  name="ISBN" placeholder ="ISBN" /></td>
           </tr>
           <tr>
               <th>short description </th>
               <td><input class="form-control" type="text" name="short_description" placeholder="short_description" /></td>
           </tr>
           <tr>
               <th>publish date </th>
               <td><input class="form-control" type="text" name="publish_date" placeholder="publish_date" /></td>
           </tr>
           <tr>
               <th>publisher </th>
               <td><input class="form-control" type="text" name="publisher" placeholder="publisher" /></td>
           </tr>
           <tr>
               <th>type </th>
               <td><input class="form-control" type="text" name="type" placeholder="type" /></td>
           </tr>

           <tr>
               <td><button type ="submit">Insert book</button></td>
               <td ><a href= "index.php"><button  type="button">Back</ button></a></td>
           </tr >
       </table>
   </form>

</fieldset >
   
</div>
<hr />
<hr />
<hr />
</body>
</html>