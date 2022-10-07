<?php
    //require '../connect.php';

    function inscription($conn) {
        if (isset($_POST['Nom'])) {
            $nom = $_POST['Nom'];
            $prenom = $_POST['Prenom'];
            $date = $_POST['Date'];
            $quartier = $_POST['Quatier'];
            $numero = $_POST['Numero'];
            $profession = $_POST['Profession'];
          }
          $sql = "SELECT * FROM clients WHERE Nom=:Nom AND Prenom=:Prenom";
          $query=$conn->prepare($sql);
          $query->bindValue(":Nom",$_POST["Nom"] , PDO::PARAM_STR);
          $query->bindValue(":Prenom", $_POST["Prenom"], PDO::PARAM_STR);
          $query -> execute();
          $result = count($query -> fetchAll());
          //var_dump($result);
          //exit;
          if ($result > 0) {
            $erreur = "exist";
            //header("Location: index.php?erreur=$erreur&nom=$nom&prenom=$prenom");
            //exit;
            return [
                "erreur" => true,
                "message" => "Le nom et premom existe deja"
            ];
          }
          //Genere l'identifiant de l'utilisateur;
          $uid = uniqid();
          // Inserer le client
          $sql="INSERT INTO `clients`(`identifiant`, `Nom`,`Prenom`,`Date`,`Quatier`,`Numero`,`Profession`) VALUES(:identifiant, :Nom, :Prenom, :Date, :Quatier, :Numero, :Profession)";
            
            $query=$conn->prepare($sql);
    
            $query->bindValue(":identifiant",$uid , PDO::PARAM_STR);
            $query->bindValue(":Nom",$_POST["Nom"] , PDO::PARAM_STR);
            $query->bindValue(":Prenom", $_POST["Prenom"], PDO::PARAM_STR);
            $query->bindValue(":Date", $_POST["Date"], PDO::PARAM_STR);
            $query->bindValue(":Quatier", $_POST["Quatier"], PDO::PARAM_STR);
            $query->bindValue(":Numero", $_POST["Numero"], PDO::PARAM_STR);
            $query->bindValue(":Profession", $_POST["Profession"], PDO::PARAM_STR);
         
            $query->execute();

          if ($query -> rowCount() > 0){
          //$message = 'le contact à été ajouter dans la base de donné';
         
          //exit;
          return [
            "success" => true,
            "user" => [
              "nom" => $nom,
              "prenom" => $prenom,
              "profession" => $profession,
              "identifiant" => $uid,
            ]
          ];
          header("Location: ./views/acceuil.php");
          } else {
            return [
              "erreur" => true,
              "mesage" => "Une erreure s'est produite"
            ];
          }
    }
    function connexionClient($conn) {
      if (isset($_POST['Nom'])) {
        $nom = $_POST["Nom"];
        $prenom = $_POST["Prenom"];
        // Verifie existance dans la base de donné
             $sql = "SELECT * FROM clients WHERE Nom=:Nom AND Prenom=:Prenom";
            $query=$conn->prepare($sql);
            $query->bindValue(":Nom",$nom , PDO::PARAM_STR);
            $query->bindValue(":Prenom", $prenom, PDO::PARAM_STR);
            $query -> execute();
            $result = count($query -> fetchAll());
            //var_dump($result);
            //exit;
            if ($result > 0) {
              //$erreur=exit;
              return [
                  "success" => true,
                 // "message" => "Le nom et premom existe deja"
              ];
            } else {
              return [
                "erreur" => true,
                "message" => "Les informations entrée sont incorrect"
              ];
            }
      } 
    }
      