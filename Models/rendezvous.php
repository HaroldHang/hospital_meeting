<?php

function rendezvousclient($conn) {
      if (isset($_POST['rdv-date']) && isset($_POST["rd-hour"])) {
        //$date_création = $_POST["date_création"];
        $date_rdv = $_POST["rdv-date"];
        $heur_rdv = $_POST['rdv-hour'];
        $id_patient = $_POST['id_patient'];
        $desc = $_POST['object'];
      // Inserer le rdv
        $sql="INSERT INTO `rendezvous`(`description`,`date_rdv`, `heure_rdv`,`id_patient`, id_specialite) VALUES(`:description`,`:date_rdv`, `:heure_rdv`,`:id_patient`, :id_specialite)";
        $query=$conn->prepare($sql);
        $query->bindValue(":description",$desc , PDO::PARAM_STR);
        $query->bindValue(":date_rdv", $date_rdv, PDO::PARAM_STR);
        $query->bindValue(":heure_rdv", $heur_rdv, PDO::PARAM_STR);
        $query->bindValue(":id_patient", $id_patient, PDO::PARAM_STR);
        $query->bindValue(":id_specialite", 1, PDO::PARAM_STR);
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
    if (isset($_POST['date_création']) && isset($_POST["date_rdv"]) && isset($_POST['heur_rdv']) && isset($_POST['id_patient'])) {
      $date_création = $_POST["date_création"];
      $date_rdv = $_POST["date_rdv"];
      $heur_rdv = $_POST['heur_rdv'];
      $id_patient = $_POST['id_patient'];
// Verifie existance dans la base de donné

    $sql = "SELECT * FROM rendez-vous WHERE date_création=:date_création AND date_rdv=:date_rdv AND heur_rdv=:heur_rdv AND id_patient=:id_patient";
    $query=$conn->prepare($sql);
    $query->bindValue(":date_création",$date_création , PDO::PARAM_STR);
    $query->bindValue(":date_rdv", $date_rdv, PDO::PARAM_STR);
    $query->bindValue(":heur_rdv", $heur_rdv, PDO::PARAM_STR);
    $query->bindValue(":id_patien", $id_patient, PDO::PARAM_STR);
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