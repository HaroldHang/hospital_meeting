<?php 
    $pageTitle  = "Medecin Acceuil";
    include "layouts/header.php";
    if (isset($estInscrit)) {
        //session_start();
    }
    if (isset($_SESSION['medecin'])) {
        $_SESSION['medecin_active'] = true;
    }
    include "layouts/navbar.php";
?>




<div class="home sup-container">
  <!-- topics -->
  
  <section class="section pb-0">
    <div class="container">
        <div>
          <!-- <h4><?= $_SESSION['medecin']['email'] ?></h4> -->

          <!-- <h4><?= $_SESSION['medecin']['nom'] ?> <?= $_SESSION['medecin']['prenom'] ?></h4> -->
        
        </div>
        <h2 class="section-title"><?= $service['nom'] ?></h2>
        <h3 class="section-title">Choisir le type de spécialiter pour la consultation médical voulu</h3>
        <input type="hidden" id="id_spec" value="<?= $service['id_specialite'] ?>" />
        <div class="row">
          
        </div>
        <div class="content">
                <h3 id="tables">Mes Rendez-vous</h3>
                
                <p>Colons can be used to align columns.</p>
                <div class="medecin-container" >
                    <input type="hidden" id="id_spec" value="" />
                    
                    <div>
                        <button id="medLeft">
                            <i class="ti-angle-left ml-auto"></i>
                        </button>
                        <span id="medWeek">
                            Lundi 24 Octobre 2022
                        </span>
                        <button id="medRight">
                            <i class="ti-angle-right ml-auto"></i>
                        </button>
                    </div>
                    <table>
                      <thead>
                        <tr>
                            <th align="center">N°</th>
                            <th align="center">
                                Nom
                                
                            </th>
                            <th align="center">
                                Prenom
                                
                            </th>
                            <th align="center">
                                Heure
                                
                            </th>
                            <th align="center">
                                Description
                                
                            </th>
                            
                            <th align="center">
                                Consultation
                            </th>
                            
                            <th align="center">
                                Prix
                            </th>
                            <!--
                            <th align="center">
                                Samedi
                                <br>
                                <span class="days">0</span>
                            </th>
                            -->
                        </tr>
                      </thead>
                      <tbody id="rdv-med">
                        <!--
                        <tr>
                            <td>1</td>
                            <td align="center" class="">
                                Jean
                            </td>
                            <td align="center" class="">
                                Paul
                            </td>
                            <td align="center" class="">
                                8h
                            </td>
                            <td align="center" class="">
                                Descript
                            </td>
                            
                        </tr>
                        <tr class="line-even">
                            <td>1</td>
                            <td align="center" class="">
                                Jean
                            </td>
                            <td align="center" class="">
                                Paul
                            </td>
                            <td align="center" class="">
                                8h
                            </td>
                            <td align="center" class="">
                                Descript
                            </td>
                            
                        </tr>
                        -->

                      </tbody>
                    </table>
                </div>
            </div>
      </div>
    </section>


</div>

