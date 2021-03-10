
  <?php
      
   require_once "../private/posts.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <script src="js/jquery.min.js"></script>
     <link rel="stylesheet" href="css/bootstrap.min.css">

     <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php require_once('header.php')?>
   <div class="container mt-3">
   <div class="heading">
       <h1 class="sitetitle">MyBlog</h1>
       <p class="lead">
            Get Awesome And Accurate News Here
       </p>
   </div>
   </div>


      <section class="blogcon">
        <div class="container">
              <?php
             $data = FetchAll();


             foreach($data as $datum):

             ?>
              <div class="blog">
                <a href="post.php?id=<?php echo $datum['id']?>" title ="Posted By <?php  echo $datum['username']?>">
                >>  <?php echo $datum['title']?> <<
                </a>
              </div>

             <?php endforeach;?>
        </div>
      </section>
   
    <script src="js/bootstrap.min.js"></script>
</body>
</html>