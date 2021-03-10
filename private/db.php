<?php


   function Database(){

        try{
            $pdo = new PDO("mysql:host=localhost;", "tomiwa" , "panasonic99");
        }
                    catch(Exception $e){
                        die("Unable To Connect ".$e->getMessage());
                    }
         
             
          $sql = "CREATE DATABASE IF NOT EXISTS blogtest ";

          $stmt = $pdo->prepare($sql);


          if($stmt->execute()){

            $pdo = new PDO("mysql:host=localhost;dbname=blogtest", "tomiwa" , "panasonic99");

            $sql = "CREATE TABLE IF NOT EXISTS posts(
                id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                username VARCHAR(255) NOT NULL,
                views int(11) NOT NULL , 
                title VARCHAR(255) NOT NULL,
                body TEXT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
            )";


                    $stmt = $pdo->prepare($sql);


                    if($stmt->execute()){

                        return $pdo;
                    }

              
          }

        



   }


   Database();