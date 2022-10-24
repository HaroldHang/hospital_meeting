<?php 
    $pageTitle  = "Acceuil";
    include "layouts/header.php";
    if (isset($estInscrit)) {
        //session_start();
    }
    if (isset($_SESSION['client'])) {
        $_SESSION['client_active'] = true;
    }
    include "layouts/navbar.php";
?>

    <h1>
        <p>Choisir le type de spécialiter pour la consultation médical voulu</p></h1>

   <h3><?= $_SESSION['client']['identifiant'] ?></h3>

   <h3><?= $_SESSION['client']['Nom'] ?> <?= $_SESSION['client']['Prenom'] ?></h3>


<div class="home sup-container">
    <!-- topics -->
    <section class="section pb-0">
      <div class="container">
        <h2 class="section-title">Services</h2>
        <h3 class="section-title">Choisir le type de spécialiter pour la consultation médical voulu</h3>
        <div class="row">
          <!-- topic -->
          
          <?php 
          foreach ($services as $service) {
          ?> 
          <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
            <div class="card match-height">
              <div class="card-body ">
                <!-- <i class="card-icon ti-panel mb-4"></i> -->
                <img src="public/image/<?= $service['url_image'] ?>" class="img-service"/>
                <h3 class="card-title h4"><?= $service['nom'] ?></h3>
                <p class="card-text"><?= $service['description']?></p>
                <a href="index.php?action=services&id=<?= $service['id_specialite']?>" class="stretched-link"></a>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>


</div>


