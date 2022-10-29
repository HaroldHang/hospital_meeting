<div class="col-lg-3">
        <ul class="sidenav">
          <li title="Basic Startup" class="sidelist <?= $pageTitle == "Acceuil" || $pageTitle == "Service" ? "parent" : ""; ?>">
            <a href="acceuil">Services</a>
            <ul>
              <?php 
                if (isset($services)) {
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
          <!--<li class="sidelist">
            <a href="list.html">Account Bill</a>
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
          <li class="sidelist">
            <a href="list.html">Our Features</a>
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
          </li>-->
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
      </div>