
  <?php
  ini_set('display_error', 1);
      require 'connect.php';  
    // Verifier le client
    if (isset($_POST['Nom'])) {
      $nom = $_POST['Nom'];
      $prenom = $_POST['Prenom'];
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
      header("Location: index.php?erreur=$erreur&nom=$nom&prenom=$prenom");
      exit;
    }
    // Inserer le client
    $sql="INSERT INTO `clients`(`Nom`,`Prenom`,`Date`,`Quatier`,`Numero`,`Profession`) VALUES(:Nom, :Prenom, :Date, :Quatier, :Numero, :Profession)" ;
      
      $query=$conn->prepare($sql);

      $query->bindValue(":Nom",$_POST["Nom"] , PDO::PARAM_STR);
      $query->bindValue(":Prenom", $_POST["Prenom"], PDO::PARAM_STR);
      $query->bindValue(":Date", $_POST["Date"], PDO::PARAM_STR);
      $query->bindValue(":Quatier", $_POST["Quatier"], PDO::PARAM_STR);
      $query->bindValue(":Numero", $_POST["Numero"], PDO::PARAM_STR);
      $query->bindValue(":Profession", $_POST["Profession"], PDO::PARAM_STR);
   
      $query->execute();

      //$conn->exec($sql);
    if ($query){
    $message = 'le contact à été ajouter dans la base de donné';
    header("Location: ./views/acceuil.php");
    exit;
    } else {
      $message = 'Echec de insertion';
    }
   
     ?>
     