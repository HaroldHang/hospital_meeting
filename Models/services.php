<?php
    // Recuperer tous les services de la bd
    function getServices($conn) {

        $sql = "SELECT * FROM specialite";
        $query=$conn->prepare($sql);
        $query -> execute();

        $result = $query -> fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            return $result;
        }

    }

    // Obtenir un seul service de la bd grace a son id
    function getService($conn, $id = null) {
        $sql = "SELECT * FROM specialite WHERE id_specialite=:id_specialite";
        $query=$conn->prepare($sql);
        $query->bindValue(":id_specialite",$id , PDO::PARAM_STR);
        $query -> execute();
        $result = $query -> fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return $result;
        }
    }

    function createExam($conn, $api) {
        if (isset($_POST['submit']) || $api) {

            if ($api) {
                $data = json_decode(file_get_contents("php://input"));
                $examName = $data -> name;
                $examDesc = $data -> description;
                $patientId = $data -> patient;
                $serviceId = $data -> service;
                $medecinId = $data -> medecin;
                $date = $data -> currDate;
            }

            $sql="INSERT INTO `examens`(`nom`,`description`, `id_patient`, `id_specialite`,`id_medecin`, `date`) VALUES(:nom,:description,:id_patient, :id_specialite, :id_medecin, :date)";
            $query=$conn->prepare($sql);
            $query->bindValue(":nom",$examName , PDO::PARAM_STR);
            $query->bindValue(":description", $examDesc, PDO::PARAM_STR);
            $query->bindValue(":id_patient", $patientId, PDO::PARAM_STR);
            $query->bindValue(":id_specialite", $serviceId, PDO::PARAM_STR);
            $query->bindValue(":id_medecin", $medecinId, PDO::PARAM_STR);
            $query->bindValue(":date", $date, PDO::PARAM_STR);
            $query -> execute();
            if ($query -> rowCount() > 0) {
                return [
                    "success" => true,
                    "message" => "Nouvelle examen ajouter"
                ];
            }
        }
    }

    function getExam($conn, $api) {
        if ($api) {
            $data = json_decode(file_get_contents("php://input"));
            $date = $data -> startDate;
            $serviceId = $data -> servId;
            $medecinId = $data -> medId;
        }

        $sql = "SELECT * FROM examens LEFT JOIN (SELECT id_client, Nom as nom_patient, Prenom as prenom_patient, Sexe as sexe FROM clients) AS client ON examens.id_patient = client.id_client  WHERE examens.date=:dateAt AND examens.id_specialite=:id_specialite AND examens.id_medecin=:id_medecin";

        $query=$conn->prepare($sql);
        $query->bindValue(":dateAt",$date , PDO::PARAM_STR);
        $query->bindValue(":id_specialite", $serviceId, PDO::PARAM_STR);
        $query->bindValue(":id_medecin", $medecinId, PDO::PARAM_STR);
    
        $query -> execute();
        $result = $query -> fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
          return $result;
        }
    }

    function getPatientExam($conn, $id) {
        $sql = "SELECT * FROM examens LEFT JOIN (SELECT id_specialite, nom AS nom_service FROM specialite) AS specialite ON examens.id_specialite = specialite.id_specialite WHERE examens.id_patient=:idPatient";

        $query=$conn->prepare($sql);
        $query->bindValue(":idPatient",$id , PDO::PARAM_STR);
        
    
        $query -> execute();
        $result = $query -> fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
          return $result;
        }
    }

    function finishExam($conn, $api) {
        if ($api) {
            $data = json_decode(file_get_contents("php://input"));
            $idExam = $data -> id;
        }

        $sql = "UPDATE examens SET status=:stat WHERE id=:id";

        $query=$conn->prepare($sql);
        $query->bindValue(":stat", "Terminé" , PDO::PARAM_STR);
        $query->bindValue(":id",$idExam , PDO::PARAM_STR);
        
        $query -> execute();
        if ($query -> rowCount() > 0) {
            return [
                "success" => true
            ];
        }
    }