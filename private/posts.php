<?php

       require_once "db.php";


       $pdo = Database();


       function FetchAll(){

               $sql = "SELECT * FROM posts ORDER BY created_at DESC";


               $stmt = $GLOBALS['pdo']->prepare($sql);



               if($stmt->execute()){
                   return $stmt->FetchAll(PDO::FETCH_ASSOC);
               }



       }


       function fetchSingle($id){

               
        $sql = "SELECT * FROM posts WHERE id= :id";


        $stmt = $GLOBALS['pdo']->prepare($sql);



        if($stmt->execute(['id'=> $id])){
            return $stmt->Fetch(PDO::FETCH_ASSOC);
        }


       }