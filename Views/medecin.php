<?php 
    $pageTitle  = "Medecin Acceuil";
    include "layouts/header.php";
    if (isset($estInscrit)) {
        //session_start();
    }
    if (isset($_SESSION['medecin'])) {
        $_SESSION['medecin_active'] = true;
    }
    include "layouts/navbar.php";
?>



<div class="home sup-container">
  <!-- topics -->
  
  <section class="section pb-0">
    <div class="container">
        
        
        <input type="hidden" id="id_spec" value="<?= $service['id_specialite'] ?>" />
        <div class="row">
            <?php include "layouts/sidenav.php";?>
            <?php
                
                if ($currentView == "rendezvous") { 
                    include "med/rendezvous.php";
                
                } else if ($currentView == "paiements") {
                    include "med/paiement.php";
                }
            ?>
                
            

            
        </div>
      </div>
    </section>


</div>

<?php 
    include "layouts/footer.php";

?>