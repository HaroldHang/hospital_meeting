
<?php include "layouts/header.php";

?>   
    <title>Inscription</title>
     <style>
        h1{
            text-align: center;
        }
       body , h1 , label{
        font-family: 'Times New Roman', Times, serif;
       }
     
      
     </style>
</head>
<body >
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RDV-Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!--<ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>-->
              <!--<form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>-->
              <a class="btn btn-primary" href="index.php?action=seconnecter">Se connecter</a>

            </div>
         </div>
    </nav>
    <div class="w3-container w3-blue">
    <h1>Inscriver vous</h1><br>
    </div>
    <?php 
      if (!empty($_POST)) {
  
           if (isset($_POST["Valider"]) && !empty($_POST["Nom"]) && !empty($_POST["Prenom"]) && !empty($_POST["Date"]) && !empty($_POST["Quatier"]) && !empty($_POST["Numero"]) && !empty($_POST["Profession"]) && !empty($_POST["Sexe"])) {
    
              }else {
               echo "veillez remplir tous les champs";
           }
        } 
        /*session php
        session_start();
        //On stocke les information de l'utilisateur
        $_SESSION["clients"] = [
          "id" => $clients["id_client"],
          "nom" => $clients["Nom"],
          "Prenom" => $clients["Prenom"],
          //"id" => $clients["id_client"]
          var_dump($_SESSION)
        ]*/
        
        ?>

    <form name="Inscription" method="POST" action="index.php?action=inscription">
    <fieldset class="w3-panel w3-border-left w3-border-blue w3-round-xlarge "  >
        <legend>S'inscrire</legend>
        <p style="color : red">
            <?= $messageErreur ?>
        </p>    
        <div class="w3-panel w3-border-left w3-border-blue w3-round-xlarge w3-center" >
            <label   class="lab" for="Nom">Nom d'utilisateur :</label> <input class="w3-panel w3-border-blue w3-round-xlarge w3-center" type="text" placeholder="Entrer le Nom" name="Nom" id="Nom">
        </div> <br>

        <div class="w3-panel w3-border-left w3-border-blue w3-round-xlarge w3-center">
            <label class="lab" for="Prenom">Prenom d'utilisateur :</label> <input class="w3-panel w3-border-blue w3-round-xlarge w3-center" type="text" placeholder="Entrer le Prenom" name="Prenom" id="Prenom">    
        </div> <br>

        <div class="w3-panel w3-border-left w3-border-blue w3-round-xlarge w3-center">
            <label class="lab" for="Date">Date de Naissance d'utilisateur :</label> <input class="w3-panel w3-border-blue w3-round-xlarge w3-center" type="Date" placeholder="Entrer la Date" name="Date" id="Date" >  
            <br><br> 
        </div> <br>

        <div class="w3-panel w3-border-left w3-border-blue w3-round-xlarge w3-center">
        <label class="lab" for="Adresse">Adresse d'utilisateur :</label> <input class="w3-panel w3-border-blue w3-round-xlarge w3-center" type="text" placeholder="Entrer le Quatier" name="Quatier" id="Quatier"><br> 
        <input class="w3-panel w3-border-blue w3-round-xlarge w3-center" type="number" placeholder="Entrer le Numero" name="Numero" id="Numero" >
            <br><br>
        </div> <br>

        <div class="w3-panel w3-border-left w3-border-blue w3-round-xlarge w3-center">
        <label class="lab" for="Profesion">Profession de l'utilisateur :</label> <input class="w3-panel w3-border-blue w3-round-xlarge w3-center" type="text" placeholder="Enter la profession" name="Profession" id="Profession" > 
            <br><br>
        </div> <br>

       <div class="w3-panel w3-border-left w3-border-blue w3-round-xlarge w3-center">
            <label for="sexe">Sexe</label>
            <input type="radio" name="gender" value="Homme" id="Homme"/>Homme<input type="radio" name="gendre" value="Femme" id="Femme"/>Femme <br>

       </div>
     
        <div >
            <input class="w3-panel w3-border-blue w3-round-xlarge" type="submit" name="valider" value="M'inscrire">
        </div>
    </fieldset>
    </form>
    
    <div>
        <a href="index.php?action=seconnecter"> Se connecter </a>
    </div>
    
</body>
</html>



