
<?php 
  $pageTitle  = "Inscription";
  include "layouts/header.php";
  if (isset($_SESSION)) {
    //session_unset();
  }
  
  include "layouts/navbar.php";
?>   

    
    

    
    <?php 
      if (!empty($_POST)) {
  
           if (isset($_POST["Valider"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["date"]) && !empty($_POST["quatier"]) && !empty($_POST["numero"]) && !empty($_POST["profession"]) && !empty($_POST["sexe"])) {
    
              }else {
               echo "veillez remplir tous les champs";
           }
        } 
        
        ?>
  <div class="sup-ctn">
    <div class="welcome">
      <h2>MeetMed vous souhaite la bienvenue</h2>
      <p>Sur MeetMed, la perte de temps est reduite</p>
    </div>
    <div class="banner-inscription">
      <section class="section">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="p-5 shadow rounded content">
                  <h2 class="section-title">Inscrivez-vous</h2>
                  <form method="POST" action="inscription">
                      <?php
                        if (!empty($messageErreur)) {
                      ?>
                      <div class="badge security">
                          <?= $messageErreur ?>
                      </div>
                      <?php }?>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre Nom" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="Prenom">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre Prenom">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="La date de naissance" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse (Quartier ou Ville)">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="numero">Telephone</label>
                        <input type="number" class="form-control" id="numero" name="numero" placeholder="229 ........" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="profession">Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession" placeholder="Profession">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="sexe">Sexe</label>
                      <div class="d-flex justify-content-start align-items-center">
                          <span class="d-flex justify-content-between align-items-center">
                            <span>Femme</span>
                            <input type="radio" class="form-control ml-2" id="femme" name="sexe"  value="Femme">
        
                          </span>
                          <span class="d-flex justify-content-center align-items-center ml-2">
                            <span> Homme </span>
                            <input type="radio" class="form-control ml-2" id="homme" name="sexe" value="Homme">
                          </span>
                      </div>
                    </div>
                  
                    <button type="submit" class="btn btn-primary" name="submit">S'inscrire</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </section>
      <div>
        <!-- <img src="public/image/Doc.svg"/> -->
      </div>
    </div>

  </div>
  <?php 
    include "layouts/footer.php";
  ?>
</body>
</html>



