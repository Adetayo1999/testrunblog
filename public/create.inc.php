<?php
               require_once "../private/db.php";


     if(filter_has_var(INPUT_POST , 'submit')){
            $username = $_POST['username'];
            $body =   $_POST['subject'];
            $message= $_POST['message'];

            if(!empty($username) && !empty($body) && !empty($message)){

                $pdo = Database();


                $sql = "INSERT INTO posts(username , title , body) VALUES(:username , :title , :body) ";


                $stmt = $pdo->prepare($sql);


                if($stmt->execute(['username'=> $username , 'title' => $body , 'body'=>$message])){

                    header("Location:index.php");
                }





            }


           







     }