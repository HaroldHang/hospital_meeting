
<?php 
  $pageTitle  = "Inscription";
  include "layouts/header.php";
  if (isset($_SESSION)) {
    //session_unset();
  }

  include "layouts/navbar.php";
?>   

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->

    
    <?php 
      if (!empty($_POST)) {
  
           if (isset($_POST["Valider"]) && !empty($_POST["Nom"]) && !empty($_POST["Prenom"]) && !empty($_POST["Date"]) && !empty($_POST["Quatier"]) && !empty($_POST["Numero"]) && !empty($_POST["Profession"]) && !empty($_POST["Sexe"])) {
    
              }else {
               echo "veillez remplir tous les champs";
           }
        } 
        
        ?>

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
                <form method="POST" action="index.php?action=inscription">
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
                      <input type="text" class="form-control" id="Nom" name="nom" placeholder="Votre Nom" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Prenom">Prenom</label>
                      <input type="text" class="form-control" id="Prenom" name="prenom" placeholder="Votre Prenom">
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
                      <input type="number" class="form-control" id="numero" name="numero" placeholder="+229 ........" required>
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
                  <!--<div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address"
                      required>
                  </div>
                  <div class="form-group">
                    <label for="reason">Reason of Contact</label>
                    <select id="reason" class="form-control custom-select" name="reason" required>
                      <option selected disabled>Choose Your Reason</option>
                      <option value="business">Business</option>
                      <option value="ticket">Ticket</option>
                      <option value="project">Project</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="message">Start Writing From Here</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Your Text here ..."></textarea>
                  </div>-->
                  <button type="submit" class="btn btn-primary" name="submit">S'inscrire</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>
    <div>
      <img src="public/image/Doc.svg"/>
    </div>
  </div>
</body>
</html>



