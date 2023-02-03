

<?php  

    $pageTitle  = "Connexion";
    include "layouts/header.php";
    include "layouts/navbar.php";

?>
    
    <div class="sup-ctn">
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
                  <form method="POST" action="connect" id="form-app">
                      <?php
                      if (!empty($messageErreur)) {
                      ?>
                      <div class="badge security">
                          <?= $messageErreur ?>
                      </div>
                      <?php }?>
                      <div class="user-select">
                        <h4  class="user-active" id="patient-connect">Patient</h4>
                        <h4 class="" id="medecin-connect">Medecin</h4>
                      </div>
                      <div id="patient-form">
                        <div class="form-group">
                        <label for="Nom">Identifiant</label>
                        <input type="text" class="form-control" id="Identifiant" name="identifiant" placeholder="Votre Identifiant">
                        </div>
                        <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom" placeholder="Votre Nom">
                        </div>
                        <div class="form-group">
                        <label for="Prenom">Prenom</label>
                        <input type="text" class="form-control" id="Prenom" name="prenom" placeholder="Votre Prenom">
                        </div>
                      </div>
                      <div id="medecin-form">
                        <div class="form-group">
                        <label for="service">Service</label> <br>
                        <select name="id_spec">
                            <?php 
                                foreach ($services as $service) {
  
                            ?>
                                <option value="<?= $service['id_specialite'] ?>"><?= $service['nom'] ?></option>
                            <?php 
                                }
                            ?>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email">
                        </div>
                        <div class="form-group">
                        <label for="motdepasse">Mot de passe</label>
                        <input type="password" class="form-control" id="mdp" name="motdepasse" placeholder="********">
                        </div>
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Connecter</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </section>
      <div>
        <!-- <img src="public/image/Doc2.svg"/> -->
      </div>
    </div>

    </div>
  <?php 
    include "layouts/footer.php";
  ?>
</body>
</html>



