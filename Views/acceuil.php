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



<div class="home sup-container">
  <!-- topics -->
  <section class="section pb-0">
    <div class="container">
        
        
        
        
        <!-- <h3><?= $_SESSION['client']['Nom'] ?> <?= $_SESSION['client']['Prenom'] ?></h3> -->
        <div class="row">
          <!-- topic -->
          <?php include "layouts/sidenav.php";?>
          <div class="col-lg-8 other-side">
            <?php 
              if (isset($_SESSION['client']['new'])) {
            ?>
                <div class="content">
                  <div class="notices note success-box" id="success-box-paie">
                        <p>Veuillez noter votre identifiant <strong><?= $_SESSION['client']['identifiant'] ?></strong></p>
                  </div>
                </div>
            <?php }?>
            <h2 class="section-title">Services</h2>
            <h4 class="">Veillez choisir le type de spécialiter pour la consultation médical à effectuer </h4>
            <div class="row">
              <?php 
              foreach ($services as $service) {
              ?> 
              <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                <div class="card match-height">
                  <div class="card-body ">
                    <img src="public/image/<?= $service['url_image'] ?>" class="img-service"/>
                    <h3 class="card-title h4"><?= $service['nom'] ?></h3>
                    <p class="card-text"><?= $service['description']?></p>
                    <a href="services?id=<?= $service['id_specialite']?>" class="stretched-link"></a>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>


</div>

<?php 
    include "layouts/footer.php";
?>
