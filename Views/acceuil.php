<?php 
//include_once "./Views/layouts/header.php" 
    if (isset($estInscrit)) {
        //session_start();
    }
    ?>
<body>
    <?php 
        //$_SESSION['user'] = $inscrire['user'];
        //print_r($_SESSION['client']);
    ?>
    <nav>
        <form method="POST" action="index.php?action=deconnecter">
            <input type="submit" value="Se deconnecter maintenamt"/>
        </form>
    </nav>
    <h1>
        <p>Choisir le type de spécialiter pour la consultation médical voulu</p></h1>

   <h3><?= $_SESSION['client']['identifiant'] ?></h3>
   <h3><?= $_SESSION['client']['nom'] ?> <?= $_SESSION['client']['prenom'] ?></h3>
    <ol>
        <ul>Cardiologie</ul>
        <ul>Ophtamologie</ul>
        <ul>Dermatologie</ul>
        <ul>Neurologie</ul>
        <ul>ORl</ul>
        <ul>Stomatologie</ul>
    </ol>
    
</body>
