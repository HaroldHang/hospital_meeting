<?php
    //require '../connect.php';

    function inscription($conn) {
        if (isset($_POST['submit'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date = $_POST['date'];
            $quartier = $_POST['adresse'];
            $numero = $_POST['numero'];
            $profession = $_POST['profession'];
            $sexe = $_POST['sexe'];
          }
          // Verifier si le client existe deja
          $sql = "SELECT * FROM clients WHERE Nom=:Nom AND Prenom=:Prenom";
          $query=$conn->prepare($sql);
          $query->bindValue(":Nom",$nom , PDO::PARAM_STR);
          $query->bindValue(":Prenom", $prenom, PDO::PARAM_STR);
          $query -> execute();
          $result = count($query -> fetchAll());
          
          if ($result > 0) {
            return [
                "erreur" => true,
                "message" => "Le nom et premom existe deja"
            ];
          }
          //Genere l'identifiant de l'utilisateur;
          $uid = uniqid();
          // Inserer le client
          $sql="INSERT INTO `clients`(`identifiant`, `Nom`,`Prenom`,`Date`,`Quatier`,`Numero`,`Profession`, `Sexe`) VALUES(:identifiant, :Nom, :Prenom, :Date, :Quatier, :Numero, :Profession, :Sexe)";
            
            $query=$conn->prepare($sql);
    
            $query->bindValue(":identifiant",$uid , PDO::PARAM_STR);
            $query->bindValue(":Nom",$nom , PDO::PARAM_STR);
            $query->bindValue(":Prenom", $prenom, PDO::PARAM_STR);
            $query->bindValue(":Date", $date, PDO::PARAM_STR);
            $query->bindValue(":Quatier", $quartier, PDO::PARAM_STR);
            $query->bindValue(":Numero", $numero, PDO::PARAM_STR);
            $query->bindValue(":Profession", $profession, PDO::PARAM_STR);
            $query->bindValue(":Sexe", $sexe, PDO::PARAM_STR);
         
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
              "id_client" => $query -> lastInsertId()
            ]
          ];
          //header("Location: ./views/acceuil.php");
          } else {
            return [
              "erreur" => true,
              "mesage" => "Une erreure s'est produite"
            ];
          }
    }
    function connexionClient($conn) {
      if (isset($_POST['nom']) && isset($_POST["prenom"]) && isset($_POST['identifiant'])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $identifiant = $_POST['identifiant'];
        // Verifie existance dans la base de donné
            $sql = "SELECT * FROM clients WHERE Nom=:Nom AND Prenom=:Prenom AND identifiant=:identifiant";
            $query=$conn->prepare($sql);
            $query->bindValue(":Nom",$nom , PDO::PARAM_STR);
            $query->bindValue(":Prenom", $prenom, PDO::PARAM_STR);
            $query->bindValue(":identifiant", $identifiant, PDO::PARAM_STR);
            $query -> execute();
            $result = $query -> fetch(PDO::FETCH_ASSOC);
            //var_dump($result);
            //exit;
            if ($result) {
              //$erreur=exit;
              return [
                  "success" => true,
                 // "message" => "Le nom et premom existe deja",
                  "client" => $result
              ];
            } else {
              return [
                "erreur" => true,
                "message" => "Les informations entrée sont incorrect"
              ];
            }
      } 
    }
      