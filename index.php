<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/style.css">
    <title>Home</title>
</head>
<body>
<div class="header Conatiner">
    <nav>
        <div class="logo">Blog</div>
        <div class="nav">
            <a  class="btn" href="Blog/login.php">Sign In</a>
            <a class="btn btn-warning" href="Blog/signup.php">Create your blog</a>
</div>
        </div>
    </nav>
</div>
    <div class="home">
        <h1 class="text-white">Publish your passions, your way</h1>
        <p class="text-white" >Create a unique and beautiful blog easily.</p>
        <a class="btn btn-warning" href="Blog/signup.php">Create your blog</a>
    </div>
    <div class="home-2">
        <h2 class="ms-2 ">Choose the perfect design</h2>
        <p>Create a beautiful blog that fits your style. Choose from a selection of easy-to-use templates – all with flexible layouts and hundreds of background images – or design something new. </p>
    </div>
    <div class="home-3">
        <h2>Join millions of others</h2>
        <p>Whether sharing your expertise, breaking news, or whatever’s on your mind, you’re in good company on Blogger. Sign up to discover why millions of people have published their passions here.</p>
        <a class="btn btn-warning" href="Blog/signup.php">Create your blog</a>
    </div>

    <?php include "Blog/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>