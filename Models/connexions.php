<?php
    //require '../connect.php';

    function inscription($conn) {
        if (isset($_POST["submit"])) {
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $date = $_POST["date"];
            $quartier = $_POST["adresse"];
            $numero = $_POST["numero"];
            $profession = $_POST["profession"];
            $sexe = $_POST["sexe"];
          }
          // Verifier si le client existe deja
          $sql = "SELECT * FROM clients WHERE nom=:nom AND prenom=:prenom";
          $query=$conn->prepare($sql);
          $query->bindValue(":nom",$nom , PDO::PARAM_STR);
          $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
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
          $sql="INSERT INTO `clients`(`identifiant`, `nom`,`prenom`,`date`,`quatier`,`numero`,`profession`, `sexe`) VALUES(:identifiant, :nom, :prenom, :date, :quatier, :numero, :profession, :sexe)";
            
            $query=$conn->prepare($sql);
    
            $query->bindValue(":identifiant",$uid , PDO::PARAM_STR);
            $query->bindValue(":nom",$nom , PDO::PARAM_STR);
            $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
            $query->bindValue(":date", $date, PDO::PARAM_STR);
            $query->bindValue(":quatier", $quartier, PDO::PARAM_STR);
            $query->bindValue(":numero", $numero, PDO::PARAM_STR);
            $query->bindValue(":profession", $profession, PDO::PARAM_STR);
            $query->bindValue(":sexe", $sexe, PDO::PARAM_STR);
         
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
          //header("Location: ./views/acceuil.php");
          } else {
            return [
              "erreur" => true,
              "mesage" => "Une erreure s'est produite"
            ];
          }
    }
    function connexionClient($conn) {
      if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["identifiant"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $identifiant = $_POST["identifiant"];
        // Verifie existance dans la base de donné
            $sql = "SELECT * FROM clients WHERE nom=:nom AND prenom=:prenom AND identifiant=:identifiant";
            $query=$conn->prepare($sql);
            $query->bindValue(":nom",$nom , PDO::PARAM_STR);
            $query->bindValue(":prenom", $prenom, PDO::PARAM_STR);
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

    function medConnexion($conn) {
      if (isset($_POST["email"]) && isset($_POST["motdepasse"])) {
        $email = $_POST["email"];
        $mdp = $_POST["motdepasse"];
        $idSpec = $_POST['id_spec'];
          // Verifie existance dans la base de donné
          $sql = "SELECT * FROM medecins WHERE email=:email AND mdp=:mdp AND id_specialite=:id_specialite";
          $query=$conn->prepare($sql);
          //$query->bindValue(":nom",$nom , PDO::PARAM_STR);
          $query->bindValue(":email", $email, PDO::PARAM_STR);
          $query->bindValue(":mdp", $mdp, PDO::PARAM_STR);
          $query->bindValue(":id_specialite", $idSpec, PDO::PARAM_STR);
          $query -> execute();
          $result = $query -> fetch(PDO::FETCH_ASSOC);
            //var_dump($result);
            //exit;
            if ($result) {
              //$erreur=exit;
              return [
                  "success" => true,
                 // "message" => "Le nom et premom existe deja",
                  "medecin" => $result
              ];
            } else {
              return [
                "erreur" => true,
                "message" => "Les informations entrée sont incorrect"
              ];
            }
      }
    }
      