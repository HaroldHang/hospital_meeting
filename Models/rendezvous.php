<?php

function rendezvousclient($conn) {
      if (isset($_POST['rdv_date']) && isset($_POST['rdv_hour']) && isset($_POST['object'])) {
        //$date_création = $_POST["date_création"];
        $rdv_date = $_POST["rdv_date"];
        $rdv_hour = $_POST['rdv_hour'];
        $object = $_POST['object'];
      // Inserer le rdv
        $sql="INSERT INTO `rendez-vous`(`object`,`rdv_date`, `rdv_hour`) VALUES(`:object`,`:rdv_date`, `:rdv_hour`)";
        $query=$conn->prepare($sql);
        $query->bindValue(":object",$object , PDO::PARAM_STR);
        $query->bindValue(":rdv_date", $rdv_date, PDO::PARAM_STR);
        $query->bindValue(":rdv_hour", $rdv_hour, PDO::PARAM_STR);
        $query -> execute();

      if ($query -> rowCount() > 0){
      
      return [
        "success" => true,
       /*[
          "date_création" => $date_création,
          "date_rdv" => $date_rdv,
          "heur_rdv" => $heur_rdv,
          "id_patient" => $id_patient,
        ]*/
      ];
    }  
    }
}  
  

function selectrendezvous($conn) {
  if (isset($_POST['rdv_date']) && isset($_POST["rdv_hour"]) && isset($_POST['object'])) {
        $rdv_date = $_POST["rdv_date"];
        $rdv_hour = $_POST['rdv_hour'];
        $object = $_POST['object'];
// Verifie existance dans la base de donné

    $sql = "SELECT * FROM rendez-vous WHERE object=:object AND rdv_date=:rdv_date AND rdv_hour=:rdv_hour ";
    $query=$conn->prepare($sql);
    $query->bindValue(":object",$object , PDO::PARAM_STR);
    $query->bindValue(":rdv_date", $rdv_date, PDO::PARAM_STR);
    $query->bindValue(":rdv_hour", $rdv_hour, PDO::PARAM_STR);
    $query -> execute();
    $result = $query -> fetch(PDO::FETCH_ASSOC);
    
    if ($result) {
      return [
          "success" => true,
          "message" => "occuper",
          "client" => $result
      ];
    } 
}  
}

function getRendezVous($conn) {
  
}