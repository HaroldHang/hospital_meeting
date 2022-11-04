<div class="col-lg-3 side-nav">
        <?php if (isset($_SESSION['client'])) {?>
        <ul class="sidenav">
          <li title="Basic Startup" class="sidelist <?= $pageTitle == "Acceuil" || $pageTitle == "Service" ? "parent" : ""; ?>">
            <a href="acceuil">Services</a>
            <ul>
              <?php 
                if (isset($services) && isset($service)) {
                  foreach ($services as $serv) {
              ?>
                <li class="sidelist <?= $service['nom'] == $serv['nom'] ? "parent active" : ""; ?>">
                  <a href="services?id=<?= $serv['id_specialite']?>"><?= $serv['nom']?></a>
                </li>
              <?php 
                  }
              }
              ?>
            </ul>
          </li>
          
          <li class="sidelist">
            <a href="deconnexion">Deconnexion</a>
            <ul>
              <li class="sidelist">
                <a href="single.html">Linux</a>
              <li class="sidelist">
                <a href="single.html">Mac OS</a>
              <li class="sidelist">
                <a href="single.html">Routing</a>
              <li class="sidelist">
                <a href="single.html">Ubuntu</a>
              <li class="sidelist">
                <a href="single.html">Windows</a>
            </ul>
          </li>
        </ul>
        <?php } else if (isset($_SESSION['medecin'])) {?>
          <ul class="sidenav">
          <li title="Basic Startup" class="sidelist <?= $pageTitle == "Medecin Acceuil" ? "parent" : ""; ?>">
            <a href="acceuil">Tableau de bord</a>
            <ul>
              
                <li class="sidelist ">
                  <a href="#>">Mes Rendez-vous</a>
                </li>
                <li class="sidelist ">
                  <a href="#>">Mes paiements</a>
                </li>
              
            </ul>
          </li>
          
          <li class="sidelist">
            <a href="deconnexion">Deconnexion</a>
            <ul>
              <li class="sidelist">
                <a href="single.html">Linux</a>
              <li class="sidelist">
                <a href="single.html">Mac OS</a>
              <li class="sidelist">
                <a href="single.html">Routing</a>
              <li class="sidelist">
                <a href="single.html">Ubuntu</a>
              <li class="sidelist">
                <a href="single.html">Windows</a>
            </ul>
          </li>
        </ul>
        <?php }?>
      </div>