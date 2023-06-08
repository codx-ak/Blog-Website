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
            <div class="card-header">
                <h4>AK</h4>
            </div>
            <div class="card-body">
                <a class="btn" href="#">Dashboard</a>
                <a class="btn" href="#">Create Blogs</a>
                <a class="btn" href="#">Edit Blogs</a>
                <a class="btn" href="#">Delete Blogs</a>
                <a class="btn" href="#">Draft Blogs</a>
            </div>
        </div>
        <div class="dashboard-box">
            <div class="card">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
</svg>
                <spa>Total Blogs</span>
            </div>
            <div class="card">
                <i></i>
                <span>Saved Blogs</span>
            </div>
            <div class="card">
                <i></i>
                <span>Published Blogs</span>
            </div>
            <div class="card">
                <i></i>
                <span>Total Reviews</span>
            </div>
            <div class="card">
                <i></i>
                <span>Reach</span>
            </div>
            <div class="card">
                <i></i>
                <span>Total likes</span>
            </div>
            <p>Copyrights 2023 @Ak Moorthi . All rights reserved </p>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
</html>