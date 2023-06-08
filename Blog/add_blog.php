<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write Blogs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/style.css">
</head>
<body>
<?php include "header.php" ?>
    <div class="Container blog">
    <div class="sidemenu d-flex justify-content-end me-4 gap-4">
            <input class="btn btn-danger" type="button" value="Cancel">
            <input class="btn btn-success" type="button" value="Save">
            <input  class="btn btn-primary" type="button" value="Publish">
        </div>    
    <div class="card m-3 p-2">
            <div class="card-header d-flex gap-4">
                <div class="image">
                    <img src="../Assets/img1.png" alt="">
                </div>
                <input type="text" placeholder="Enter Blog Title">
            </div>
            <div class="card-body">
                <textarea name="" placeholder=" write blog here ....." id="" cols="100" rows="17"></textarea>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
</html>