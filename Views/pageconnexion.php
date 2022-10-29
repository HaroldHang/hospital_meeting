

<?php  

    $pageTitle  = "Connexion";
    include "layouts/header.php";
    include "layouts/navbar.php";

?>
    


    


    <div class="welcome">
    <h2>Bon retour sur MeetMed</h2>
    <p>Sur MeetMed, la perte de temps est reduite</p>
  </div>
  <div class="banner-inscription banner-connexion">
    <section class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="p-5 shadow rounded content">
                <h2 class="section-title">Connectez-vous</h2>
                <form method="POST" action="connect">
                    <?php
                    if (!empty($messageErreur)) {
                    ?>
                    <div class="badge security">
                        <?= $messageErreur ?>
                    </div>
                    <?php }?>
                    <div class="form-group">
                    <label for="Nom">Identifiant</label>
                    <input type="text" class="form-control" id="Identifiant" name="identifiant" placeholder="Votre Identifiant" required>
                    </div>
                    <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control" id="Nom" name="nom" placeholder="Votre Nom" required>
                    </div>
                    <div class="form-group">
                    <label for="Prenom">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom" placeholder="Votre Prenom">
                    </div>
                  
                  
                  <button type="submit" class="btn btn-primary">Connecter</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>
    <div>
      <img src="public/image/Doc2.svg"/>
    </div>
  </div>
</body>
</html>



