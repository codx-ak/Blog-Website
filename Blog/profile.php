<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/style.css">
    <title>Profile</title>
</head>
<body>
<?php include "header.php" ?>
    <div class="Container profile d-flex justify-content-end align-items-center ">
        <div class="card me-4">
        <h3 class="card-title">Account</h3>
        <form action="" method="post">
            <input type="text" placeholder="Enter Name">
            <input type="email" placeholder="Enter Email" name="" id="">
            <input type="number" placeholder="Enter Number" name="" id="">
            <input type="file" name="" id="">
            <input class="btn btn-primary" type="submit" value="Update">
        </form>  
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>