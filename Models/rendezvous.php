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
      ];
    }  
    }
}  
  
// Inserer un rendezvous
function insertRdv($conn, $api) {
    //echo "First";
    if (isset($_POST['submit']) || $api) {
      //echo "Second";
      if ($api) {
        $data = json_decode(file_get_contents("php://input"));
        $rdvDate = $data->rdv_date;
        $rdvHour = $data->rdv_hour;
        $idPatient = $data->id_patient;
        $description = $data->objet;
        $id = $data->id;
      } else {
        $rdvDate = $_POST['rdv_date'];
        $rdvHour = $_POST['rdv_hour'];
        $idPatient = $_POST['id_patient'];
        $description = $_POST['objet'];
        $id = $_POST['id_spec'];
      }
      //var_dump($_POST['rdv_hour']);
      //exit;
      $sql="INSERT INTO `rendezvous`(`description`,`date_rdv`, `heure_rdv`, `id_patient`, `id_specialite`) VALUES(:description,:date_rdv, :heure_rdv, :id_patient, :id_specialite)";
      $query=$conn->prepare($sql);
      $query->bindValue(":description",$description , PDO::PARAM_STR);
      $query->bindValue(":date_rdv", $rdvDate, PDO::PARAM_STR);
      $query->bindValue(":heure_rdv", $rdvHour, PDO::PARAM_STR);
      $query->bindValue(":id_patient", $idPatient, PDO::PARAM_STR);
      $query->bindValue(":id_specialite", $id, PDO::PARAM_STR);
      $query -> execute();


      if ($query-> rowCount() > 0) {
        return [
          "success" => true,
          "message" => "Rendez vous pris avec success"
        ];
      }
    }
}

function getRendezVous($conn, $startDate = null, $endDate = null, $id, $api) {

  if (isset($_POST['submit']) || $api) {
    //echo "Second";
    if ($api) {
      $data = json_decode(file_get_contents("php://input"));
      $startDate = $data->startDate;
      //$endDate = $data->endDate;
      $id = $data -> id;
    } else {
      $startDate = $_POST['start_date'];
      $endDate = $_POST['end_date'];
    }
    //var_dump($_POST['rdv_hour']);
    //exit;
    //$sql="INSERT INTO `rendezvous`(`description`,`date_rdv`, `heure_rdv`, `id_patient`, `id_specialite`) VALUES(:description,:date_rdv, :heure_rdv, :id_patient, :id_specialite)";
    //$sql = "SELECT * FROM rendezvous WHERE date_rdv BETWEEN $startDate AND $endDate";
    $sql = "SELECT * FROM rendezvous LEFT JOIN (SELECT id_client, Nom as nom, Prenom as prenom, Sexe as sexe FROM clients) AS client ON rendezvous.id_patient = client.id_client WHERE rendezvous.date_rdv=:date_rdv AND rendezvous.id_specialite=:id_specialite";

    $query=$conn->prepare($sql);
    $query->bindValue(":date_rdv",$startDate , PDO::PARAM_STR);
    $query->bindValue(":id_specialite", $id, PDO::PARAM_STR);
    //$query->bindValue(":heure_rdv", $rdvHour, PDO::PARAM_STR);
    //$query->bindValue(":id_patient", $idPatient, PDO::PARAM_STR);
    //$query->bindValue(":id_specialite", 1, PDO::PARAM_STR);
    $query -> execute();
    $result = $query -> fetchAll(PDO::FETCH_ASSOC);
    if ($result) {
      return $result;
    }
  }
}