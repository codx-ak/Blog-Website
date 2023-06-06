<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/style.css">
    <title>Sign Up</title>
</head>
<body>
    <?php include "header.php" ?>
    <div class="Container login">
        <div class="card">
            <h3 class="card-title">Create Account</h3>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Enter Name" id="">
                <input type="email" name="email" placeholder="Enter Email" id="">
                <input type="password" name="pass" placeholder="Enter Password" id="">
                <input class="btn btn-primary" type="submit" value="Sign Up">
                <span>or</span>
                <a href="login.php">Login Account</a>
            </form>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>