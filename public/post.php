
<?php
          session_start();

    

if(!isset($_GET['id'])){
    header('index.php');
}

              require_once "../private/posts.php";


              $data = fetchSingle($_GET['id']);

              if(!isset($_SESSION[$data['title']])){
                   $_SESSION[$data['title']] = $data['title'];

                        require_once "../private/db.php";

                          $pdo = Database();
                        $sql = "UPDATE posts SET views = :views WHERE id = :id";
                      
                          $stmt = $pdo->prepare($sql);


                          $stmt->execute(["views" => $data['views'] + 1 , "id" => $data['id']]);

              }

              $views = $data['views'] > 0 ? "Viewed By ".$data['views'] : "";
              $views .= $data['views']  > 1  ? " People " : " Person "; 

           
            
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post <?php echo $data['id']?></title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php require_once "header.php" ?>

           <div class="container  p-5 m-4">
                  <h1 class="text-primary h1 p-3-m-2"><?php echo $data['title']?></h1>
                    <p class="lead">
                        <?php echo $data['body']?>

                    </p>
                         
                   <small >Posted by <b><?php echo $data['username']?></b>   <?php echo $data['created_at']?> </small>
                   <br>
                 <small><?php echo $data['views'] > 0 ? $views : "" ?></small>
</br>                         
                   <a href="index.php" class="btn btn-outline-success mt-3">Go Back</a>
                   <br>
                   <br>
                 
           </div>

</body>
</html>

