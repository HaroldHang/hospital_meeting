

<?php  include "layouts/header.php" ?>
    <style>
          h1{
            text-align: center;
        }
       body , h1 , label{
        font-family: 'Times New Roman', Times, serif;
       }
     
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">RDV-Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--<ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>-->
          <!--<form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>-->
          <a class="btn btn-primary" href="index.php">Se deconnecter</a>

        </div>
     </div>
</nav>



    <div class="w3-container w3-blue">
    <h1>Connectez vous</h1><br>
    </div>
  
    <form name="Inscription" method="POST" action="index.php?action=connexion">
     <fieldset class="w3-panel w3-border-left w3-border-blue w3-round-xlarge " >
        <legend>connexion</legend>
        <p style="color : red">
            <?= $messageErreur ?>
        </p>    
        <div class="w3-panel w3-border-left w3-border-blue w3-round-xlarge w3-center">
            <label class="lab" for="Nom">Nom d'utilisateur :</label> <input class="w3-panel w3-border-blue w3-round-xlarge w3-center" type="text" placeholder="Entrer le Nom" name="Nom" id="Nom">
        </div> <br>

        <div class="w3-panel w3-border-left w3-border-blue w3-round-xlarge w3-center">
            <label class="lab" for="Prenom">Prenom d'utilisateur :</label> <input class="w3-panel w3-border-blue w3-round-xlarge w3-center" type="text" placeholder="Entrer le Prenom" name="Prenom" id="Prenom">    
        </div> <br>

        
        
        <div>
            <input  type="submit" name="valider" value="Se connecter">
        </div>
     </fieldset>
    </form>
    <div>
        <a href="index.php"> S'inscrire </a>
    </div>
    
</body>
</html>



