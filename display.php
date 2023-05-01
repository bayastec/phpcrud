<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>readUser</title>
</head>
<body  onload="print()">
    <div class="container">
 <button class="add-btn"><a href="user.php">Add user</a></button>
<table> <tr>
     <td>id</td>
     <td>fname</td>
     <td>lname</td>
     <td>email</td>
     <td>password</td>
     <td>gender</td>
     <td>manage</td>
 </tr>
 <tbody>
     <?php
     include 'connect.php';
   $sql="SELECT * FROM `users`";
   $result=mysqli_query($connect,$sql);
   if($result==TRUE){
     while( $row=mysqli_fetch_assoc($result)){
         $id=$row['id'];
         $firstname=$row['firstname'];
         $lastname=$row['lastname'];
         $email=$row['email'];
         $password=$row['password'];
         $gender=$row['gender'];
         echo'
         <tr>
            <td>'.$id.'</td>
             <td>'.$firstname.'</td>
             <td>'.$lastname.'</td>
             <td>'.$email.'</td>
             <td>'.$password.'</td>
             <td>'.$gender.'</td>
            <td>
              <button class="upadte"><a  href="update.php?updateid='.$id.'">update</a></button>
              <button class="delete"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
             </td>
          </tr>
         ';
     }
   }  
     ?>
   
</tbody>
</table>
    </div>
</body>
</html>