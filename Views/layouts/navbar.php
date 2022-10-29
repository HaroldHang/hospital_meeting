<header class="sticky-top navigation">
  <div class=container>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent navbar-ly">
      <!-- <a class=navbar-brand href="index.html"><img class="img-fluid" src="images/logo.png" alt="godocs"></a> -->
      <a class="navbar-brand med-brand" id="med" href="index.php"><span class="">Meet</span><span>Med</span></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
        <i class="ti-align-right h4 text-dark"></i></button>
      <div class="collapse navbar-collapse text-center btn-ctn" id=navigation>
        <!--<ul class="navbar-nav mx-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="search.html">Search Page</a></li>
        </ul>
        <form class="form-inline search-wrapper d-none d-lg-block" class="search-wrapper" action="search.html">
          <input id="search-by" name="s" type="search" class="form-control" placeholder="Search here ...">
          <button class="border-0 bg-white" type="submit"><i class="ti-search"></i></button>
        </form>-->
        <?php if ($pageTitle == "Inscription") {?>
            <a href="connexion" class="btn btn-sm btn-outline-primary ml-lg-4">Se connecter</a>
        <?php } else if ($pageTitle == "Connexion") {?>
            <a href="./" class="btn btn-sm btn-outline-primary ml-lg-4">S'inscrire</a>
        <?php }?>
        <?php 
          if ((isset($_SESSION['client']) && $_SESSION['client_active']) || (isset($_SESSION['medecin']) && $_SESSION['medecin_active'])) {
        ?>
            <a href="deconnexion" class="btn btn-sm btn-outline-primary ml-lg-4">Deconnecter</a>
        <?php 
          }
        ?>
        <!-- <a href="contact.html" class="btn btn-sm btn-primary ml-lg-4">contact</a> -->
      </div>
      <!--<form class="form-inline search-wrapper d-block d-lg-none my-3" class="search-wrapper" action="search.html">
        <input id="search-by" name="s" type="search" class="form-control" placeholder="Search here ...">
        <button class="border-0 bg-white" type="submit"><i class="ti-search"></i></button>
      </form>-->
    </nav>
  </div>
</header>