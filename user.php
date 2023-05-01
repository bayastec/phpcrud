<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>createUser</title>
</head>
<body>
    
<div class="root">
    <h1 class="header">user registration</h1>
    <div class="form-container">
        <form action="crud.php" method="post" autocomplete="off">
            <div class="form-all">
                <div class="label">
                   <label for="fname">First Name</label><br>
                    <input type="text" class="input" name="fname" >
               </div>
               <div class="label">
                    <label for="lname">Last Name</label><br>
                     <input type="text" class="input" name="lname" >
                </div>
                <div class="label">
                    <label for="email">Email</label><br>
                     <input type="email" class="input" name="email" >
                </div>
                <div class="label">
                     <label for="password">password</label><br>
                    <input class="input"  type="password"  name="password" >
                </div>
                <div class="label">
                    <label for="gender">Gender</label><br>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                </div>  
                <input class="sign"type="submit" name="submit" value="sign up" >
        </div>
        </form>
    </div>
    
</div>
</body>
</html>