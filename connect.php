<?php

//Ouverture d'une connexion à la base de donné local


    
    try {
      $conn = new PDO("mysql:host=localhost;dbname=quickcare", 'root','');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
     
   }
   