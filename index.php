<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="js/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="css/fixed.css">
    <!-- Custom CSS -->
   <link rel="stylesheet" type="text/css" href="css/signUp.css">

   </head>

<body>

    <div class="parent" >
    <div class="parent-left">
        <img src="ABUpix.png" alt="">
    </div>
    <div class="parent-right">
        <h1 class="name">Ahmadu Bello University
        </h1>  
        <h3>Zaria-Nigeria</h3>
    </div>
    </div>
    <form action="admin/index.php" >
        <div class="container">
            <p>Only authenticated users can access. please login</p>
            <hr>
            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="email" required><br>
            <label for="password"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="password" required><br>
            
            <button type="submit" class="signUp">Login</button>
        </div>
    </form>
</body>
</html>