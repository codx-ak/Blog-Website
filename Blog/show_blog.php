<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/style.css">
</head>
<body>
<?php include "header.php" ?>
    <div class="dashboard">
        <div class="menu card">
            <div class="card-header mt-2 p-4">
                <h4>Blog Website</h4>
            </div>
            <div class="card-body">
            <a class="btn border-bottom" href="profile.php">Account</a>
                <a class="btn border-bottom" href="dashboard.php">Dashboard</a>
                <a class="btn border-bottom" href="show_blog.php">All Blogs</a>
                <a class="btn " href="show_draft.php">Draft Blogs</a>
            </div>
        </div>
        <div class="container show-blog">
            <a href="add_blog.php" class="btn btn-primary" style="margin-left:80%; margin-bottom:0.5rem">create new blog</a>
            <div class="card text-center w-100">
                <div class="card-header">
                    <div class="row p-2 m-0  title">
                        <div class="col-1">S.no</div>
                        <div class="col-5">title</div>
                        <div class="col-3">date</div>
                        <div class="col-1">edit</div>
                        <div class="col-1">view</div>
                        <div class="col-1">delete</div>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row border-bottom p-2">
                        <div class="col-1">1</div>
                        <div class="col-5">Ak</div>
                        <div class="col-3">date</div>
                        <div class="col-1"><a class="btn btn-outline-success" href="#">view</a></div>
                        <div class="col-1"><a class="btn btn-outline-warning" href="#">edit</a></div>
                        <div class="col-1"><a class="btn btn-outline-danger" href="#">delete</a></div>
                    </div>
                    <div class="row border-bottom p-2">
                        <div class="col-1">1</div>
                        <div class="col-5">Ak</div>
                        <div class="col-3">date</div>
                        <div class="col-1"><a class="btn btn-outline-success" href="#">view</a></div>
                        <div class="col-1"><a class="btn btn-outline-warning" href="#">edit</a></div>
                        <div class="col-1"><a class="btn btn-outline-danger" href="#">delete</a></div>
                    </div>
                    
                </div>
            </div>
        </div>
 

        </div>
    </div>
    <?php include "footer.php" ?>
</body>
</html>