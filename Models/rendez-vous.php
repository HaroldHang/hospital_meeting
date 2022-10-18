<?php

function rendezvousclient($conn) {
      if (isset($_POST['date_création']) && isset($_POST["date_rdv"]) && isset($_POST['heur_rdv']) && isset($_POST['id_patient'])) {
        $date_création = $_POST["date_création"];
        $date_rdv = $_POST["date_rdv"];
        $heur_rdv = $_POST['heur_rdv'];
        $id_patient = $_POST['id_patient'];

      // Inserer le rdv
        $sql="INSERT INTO `rendez-vous`(`date_création`, `date du rdv`,`heur du rdv`,`id_patient`,) VALUES(:Date_création, :Date du rdv, :heur du rdv, :id_patient,)";
        $query=$conn->prepare($sql);
        $query->bindValue(":date_création",$date_création , PDO::PARAM_STR);
        $query->bindValue(":date_rdv", $date_rdv, PDO::PARAM_STR);
        $query->bindValue(":heur_rdv", $heur_rdv, PDO::PARAM_STR);
        $query->bindValue(":id_patien", $id_patient, PDO::PARAM_STR);
        $query -> execute();
     

      if ($query -> rowCount() > 0){
      
      return [
        "success" => true,
       [
          "date_création" => $date_création,
          "date_rdv" => $date_rdv,
          "heur_rdv" => $heur_rdv,
          "id_patient" => $id_patient,
        ]
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