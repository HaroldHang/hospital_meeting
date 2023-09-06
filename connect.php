<?php

//Ouverture d'une connexion à la base de donné local

    $host = $_ENV["HOST"];
    $dbhost = $_ENV["DATABASE"];
    $username = $_ENV["USERNAME"];
    $pass = $_ENV["PASSWORD"];
    try {
      $conn = new PDO("mysql:host=$host;dbname=$dbhost", $username,$pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      //echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
     
   }
   