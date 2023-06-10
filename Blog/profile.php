<!DOCTYPE html>
<html lang="en">
<?php
include("connection.php");
error_reporting(0);
session_start();
if(empty($_SESSION["user_id"]))
{
	header('location:home.php');
}
else
{
    $user_id=$_SESSION['user_id'];
?>

<?php $qml ="select * from user where user_id= $user_id";
          $rest=mysqli_query($db, $qml); 
          $user_row=mysqli_fetch_array($rest);
              ?>

<?php
    if(isset($_POST['submit']))

    {
               
    if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['mobile']))
    {	
      echo "<script>alert('Opps fill the details!');</script>"; 
             
    }
    else
          {
 
				        $fname = $_FILES['file']['name'];
								$temp = $_FILES['file']['tmp_name'];
								$extension = explode('.',$fname);
								$extension = strtolower(end($extension));  
								$fnew = uniqid().'.'.$extension;
								$store = "uploads/".basename($fnew);                      
                      $sql = "UPDATE user set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',profile='.$fnew.' where user_id='$user_id')";
                      mysqli_query($db, $sql);                
                      move_uploaded_file($temp, $store);
                       echo "<script>alert('successfuly Updated !');</script>"; 
                        header("refresh:1;url=home.php");	
			  
            
	   
	   }

    }
    
    ?>
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
            <input type="text" placeholder="Enter Name" name="name" value="<?php echo $user_row['name'];?>">
            <input type="email" placeholder="Enter Email" name="email" id="" value="<?php echo $user_row['email'];?>">
            <input type="number" placeholder="Enter Number" name="mobile" id="">
            <input type="file" name="file" id="">
            <input class="btn btn-primary" type="submit" name="submit" value="Update">
        </form>  
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
}
?>
</html>