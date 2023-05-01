<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="SELECT * FROM `users` WHERE id=$id";

$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$password=$row['password'];
$gender=$row['gender'];

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];

    $sql="UPDATE users SET id='$id',firstname='$fname',lastname='$lname',email='$email',password='$password',gender='$gender' WHERE id='$id'";
    $result=$connect->query($sql);
        if($result){
           header('location:display.php');
        }else{
          die(mysqli_error($connect));
        }        
    $conn->close();

    }
    ?>
<html>
    <head>
        <title>updateUser</title>
    </head>
<body>

<?php
    $id=$_GET["updateid"];
    ?>
    <div class="root">
        <h1 class="header">user registration</h1>
        <div class="form-container">

            <form action=" " method="post" autocomplete="off">
            <input type="hidden" name="id"  value="<?php  echo $id ; ?>">
                <div class="form-all">
                    <div class="label">
                       <label for="fname">First Name</label><br>
                        <input type="text" class="input" name="fname" placeholder="first name" value=<?php echo $firstname ?>>
                   </div>
                   <div class="label">
                        <label for="lname">Last Name</label><br>
                         <input type="text" class="input" name="lname" placeholder="last name"  value=<?php echo $lastname ?>>
                    </div>
                    <div class="label">
                        <label for="email">Email</label><br>
                         <input type="email" class="input" name="email" placeholder="email"  value=<?php echo $email ?>>
                    </div>
                    <div class="label">
                         <label for="password">Password</label><br>
                        <input class="input" type="password" name="password" placeholder="password"  value=<?php echo $password ?>>
                    </div>
                    <div class="label">
                        <label for="gender">Gender</label><br>
                        <input class="radio" type="radio" name="gender" value="male">Male
                        <input  class="radio" type="radio" name="gender" value="female">Female
                    </div>  
                    <input class="input-update"type="submit" name="submit" value="Update" >
            </div>
            </form>
        </div>
        
    </div>
</body>
</html>