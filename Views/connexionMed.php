

<?php  

$pageTitle  = "Connexion Services";
include "layouts/header.php";
include "layouts/navbar.php";

?>






<div class="welcome">
<h2>Bienvenue chère specialiste sur MeetMed</h2>

</div>
<div class="banner-inscription banner-connexion">
<section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="p-5 shadow rounded content">
            <h2 class="section-title">Connectez-vous</h2>
            <form method="POST" action="medconnect">
                <?php
                if (!empty($messageErreur)) {
                ?>
                <div class="badge security">
                    <?= $messageErreur ?>
                </div>
                <?php }?>
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
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email" required>
                </div>
                <div class="form-group">
                <label for="motdepasse">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" name="motdepasse" placeholder="********" required>
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
</body>
</html>



