<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/style.css">
</head>
<body>
<?php include "header.php" ?>
<div class="Home-page">
</div>
<h2 class="text-center m-2 p-4 container">Blogs</h2>
<div class="blog-card container d-flex gap-1">
    <a href="blog.php" class="card">
        <div class="image">
            <img src="../Assets/m1.jpg" alt="">
        </div>
        <div class="content">
            <h6>Lorem, ipsum dolor.</h6>
            <h4>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.ipsum dolor sit amet..</h4>
            <p>9 mins ago</p>
        </div>
    </a>
    <a href="blog.php" class="card">
        <div class="image">
            <img src="../Assets/m2.jpg" alt="">
        </div>
        <div class="content">
            <h6>Lorem, ipsum dolor.</h6>
            <h4>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.ipsum dolor sit amet..</h4>
            <p>9 mins ago</p>
        </div>
    </a>
    <a href="blog.php" class="card">
        <div class="image">
            <img src="../Assets/m3.jpg" alt="">
        </div>
        <div class="content">
            <h6>Lorem, ipsum dolor.</h6>
            <h4>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.ipsum dolor sit amet..</h4>
            <p>9 mins ago</p>
        </div>
    </a>
    
</div>
<a href="blogs.php"class="btn btn-warning"style="margin:1rem 45%">Read More</a>
<?php include "footer.php" ?>
</body>
</html>