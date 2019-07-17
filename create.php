<!DOCTYPE html>
<html>
<head>
   <title></title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </ style>

</head>
<body>

<fieldset >
   <legend>Add book</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Title</th>
               <td><input  type="text" name="title"  placeholder="title" /></td >
           </tr>     
           <tr>
               <th>author</th>
               <td><input  type="text" name="author" placeholder="author" /></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td>< input type="text"  name="ISBN" placeholder ="ISBN" /></td>
           </tr>
           <tr>
               <th>short description </th>
               <td><input  type="text" name="short_description" placeholder="short_description" /></td>
           </tr>
           <tr>
               <th>publish date </th>
               <td><input  type="text" name="publish_date" placeholder="publish_date" /></td>
           </tr>
           <tr>
               <th>publisher </th>
               <td><input  type="text" name="publisher" placeholder="publisher" /></td>
           </tr>
           <tr>
               <th>type </th>
               <td><input  type="text" name="type" placeholder="type" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert book</button></td>
               <td ><a href= "1index.php"><button  type="button">Back</ button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>