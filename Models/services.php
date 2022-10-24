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