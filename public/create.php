
<?php

require_once "create.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php require_once "header.php" ?>
 
   <div class="container">
           <h2 class="text-primary h2 p-3 mt-4">Create Post</h2>
     <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

<div class="row">
    <div class="col-md-6 mb-3">
    <div class="form-group">
     <label for="name">Enter Your Name</label>
     <input type="text" name="username" class="form-control">
 </div>
    </div>
    <div class="col-md-6 mb-3">
    <div class="form-group">
     <label for="name">Enter Your Post Subject</label>
     <input type="text" name="subject" class="form-control">
 </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-lg-6 mb-3">
        <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Enter Your Message"></textarea>
    </div>
</div>
         <input type="submit" value="Submit" class="form-control btn btn-primary" name="submit">
</form>
   </div>



    <script src="js/bootstrap.min.js"></script>
</body>
</html>