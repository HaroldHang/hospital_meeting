<?php
    $pageTitle  = "Service";
    include "layouts/header.php";
    include "layouts/navbar.php";
?>



<div class="container">
    
    <section class="section pb-0">
        <div class="container">
            <div class="row">
              
                <?php include "layouts/sidenav.php";?>
                
                <div class="col-lg-8 other-side">
                    <h2 class="section-title"><?= $service['nom'] ?></h2>
                    <?php 
                        if ($service['nom'] == "Cardiologie") {
                    ?>
                        <div class="content">
                            <h5>Voici les consultations effectués dans le service de cardiologie avec leur option de prix</h5>
                            <table>
                                <tr>
                                <td><h6>CARDIOLOGIE</h6></td>
                                <td><h6>Acte</h6></td>
                                <td><h6>Qté</h6></td>
                                <td><h6>P.U(F CFA)</h6></td>
                                <td><h6>Montant(F CFA)</h6></td>
                                <td><h6>Choix</h6></td>
                                </tr>
                                <tr>
                                    <td>CONSULTATION D'URGENCE</td>
                                    <td>C3</td>
                                    <td>2</td>
                                    <td>6000</td>
                                    <td>12000</td>
                                    <td>
                                        <input type="radio" value="12000" name="prix"/>
                                        <input type="hidden" value="CONSULTATION D'URGENCE 12000" name="motif"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CONSULTATION CARDIOLOGIQUE</td>
                                    <td>C010</td>
                                    <td>1</td>
                                    <td>7500</td>
                                    <td>7500</td>
                                    <td>
                                        <input type="radio" value="7500" name="prix"/>
                                        <input type="hidden" value="CONSULTATION CARDIOLOGIQUE 7500" name="motif"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CONSULTATION GENERALISTE</td>
                                    <td>C1</td>
                                    <td>1</td>
                                    <td>5250</td>
                                    <td>5250</td>
                                    <td>
                                        <input type="radio" value="5250" name="prix"/>
                                        <input type="hidden" value="CONSULTATION GENERALISTE 5250" name="motif"/>

                                    </td>
                                </tr>
                                <tr>
                                    <td>ECG</td>
                                    <td>Z3</td>
                                    <td>14</td>
                                    <td>750</td>
                                    <td>10500</td>
                                    <td>
                                        <input type="radio" value="10500" name="prix"/>
                                        <input type="hidden" value="ECG 10500" name="motif"/>
                                        
                                    </td>
                                </tr>
                            </table>
                        </div>
                    <?php 
                        
                    } else if ($service['nom'] == "Orphtamologie") {
                    ?>
                        <div class="content">
                            <h5>Voici les consultations effectués dans le service d'Ophtamologie avec leur option de prix</h5> <br>
                            <table>
                                <tr>
                                    <td><h6>SERVICE D'OPHTAMOLOGIE</h6></td>
                                    <td><h6>Acte</h6></td>
                                    <td><h6>Qté</h6></td>
                                    <td><h6>P.U(F CFA)</h6></td>
                                    <td><h6>Montant(F CFA)</h6></td>
                                </tr>
                                <tr>
                                   <td>ABLATION DE CORPS ETRANGER</td>
                                   <td>K1</td>
                                   <td>6</td>
                                   <td>750</td>
                                   <td>4500</td>
                                   <td>
                                       <input type="radio" value="4500" name="prix"/>
                                       <input type="hidden" value="ABLATION DE CORPS ETRANGER 4500" name="motif"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ABLATION DU CILS</td>
                                    <td>S1</td>
                                    <td>6</td>
                                    <td>750</td>
                                    <td>4500</td>
                                    <td>
                                       <input type="radio" value="4500" name="prix"/>
                                       <input type="hidden" value="ABLATION DU CILS 4500" name="motif"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ABLATION DU CORPS ETRANGER</td>
                                    <td>K4</td>
                                    <td>2</td>
                                    <td>750</td>
                                    <td>1500</td>
                                    <td>
                                       <input type="radio" value="1500" name="prix"/>
                                       <input type="hidden" value="ABLATION DE CORPS ETRANGER 1500" name="motif"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CONSULTATION OPHTALMO</td>
                                    <td>C1</td>
                                    <td>1</td>
                                    <td>5250</td>
                                    <td>5250</td>
                                    <td>
                                       <input type="radio" value="5250" name="prix"/>
                                       <input type="hidden" value="CONSULTATION OPHTALMO 5250" name="motif"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>COMPLEMENT CONSULTATION REFE</td>
                                    <td>C7</td>
                                    <td>1</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>
                                       <input type="radio" value="100" name="prix"/>
                                       <input type="hidden" value="COMPLEMENT CONSULTATION REFE 100" name="motif"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CURE CHALAZION</td>
                                    <td>S1</td>
                                    <td>30</td>
                                    <td>750</td>
                                    <td>22500</td>
                                    <td>
                                       <input type="radio" value="22500" name="prix"/>
                                       <input type="hidden" value="CURE CHALAZION 22500" name="motif"/>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>CURE DE PTENYGION</td>
                                    <td>S1</td>
                                    <td>80</td>
                                    <td>750</td>
                                    <td>60000</td>
                                    <td>
                                       <input type="radio" value="60000" name="prix"/>
                                       <input type="hidden" value="CURE DE PTENYGION 60000" name="motif"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>EVISCERTION</td>
                                    <td>K1</td>
                                    <td>80</td>
                                    <td>750</td>
                                    <td>60000</td>
                                    <td>
                                       <input type="radio" value="60000" name="prix"/>
                                       <input type="hidden" value="EVISCERTION 60000" name="motif"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>FOND DE L'OEIL</td>
                                    <td>K1</td>
                                    <td>6</td>
                                    <td>750</td>
                                    <td>4500</td>
                                    <td>
                                       <input type="radio" value="4500" name="prix"/>
                                       <input type="hidden" value="FOND DE L'OEIL 4500" name="motif"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>INJECTION SOUS CONJONCTIVALE</td>
                                    <td>K1</td>
                                    <td>2</td>
                                    <td>750</td>
                                    <td>1500</td>
                                    <td>
                                       <input type="radio" value="1500" name="prix"/>
                                       <input type="hidden" value="INJECTION SOUS CONJONCTIVALE 1500" name="motif"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>REFRACTO-AUTOMATIQUE</td>
                                    <td>K4</td>
                                    <td>6</td>
                                    <td>750</td>
                                    <td>4500</td>
                                    <td>
                                       <input type="radio" value="4500" name="prix"/>
                                       <input type="hidden" value="REFRACTO-AUTOMATIQUE 4500" name="motif"/>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>SUTURE DU CORNEE</td>
                                    <td>S1</td>
                                    <td>40</td>
                                    <td>750</td>
                                    <td>30000</td>
                                    <td>
                                       <input type="radio" value="30000" name="prix"/>
                                       <input type="hidden" value="SUTURE DU CORNEE 30000" name="motif"/>
                                    </td>
                                 </tr>
                            </table>
                        </div>
                    <?php 
                    } else if ($service['nom'] == "Stomatologie") {
                    ?>
                        <div class="content">
                        <h5>Voici les consultations effectués dans le service de stomatologie avec leur option de prix</h5> <br>
                        <table>
                             <tr>
                                <td><h6>STOMATOLOGIE</h6></td>
                                     <td><h6>Acte</h6></td>
                                     <td><h6>Qté</h6></td>
                                     <td><h6>P.U(F CFA)</h6></td>
                                     <td><h6>Montant(F CFA)</h6></td>
                                </tr>
                            <tr>
                               <td>CONSULTATION STOMATO AFRICAINE</td>
                               <td>C2</td>
                               <td>7</td>
                               <td>4500</td>
                               <td>31500</td>
                               <td>
                                    <input type="radio" value="31500" name="prix"/>
                                    <input type="hidden" value="CONSULTATION STOMATO AFRICAINE 31500" name="motif"/>
                                </td>
                            </tr> 
                             <tr>
                               <td>CONSULTATION STOMATO</td>
                               <td>C1</td>
                               <td>1</td>
                               <td>5250</td>
                               <td>5250</td>
                               <td>
                                    <input type="radio" value="5250" name="prix"/>
                                    <input type="hidden" value="CONSULTATION STOMATO 5250" name="motif"/>
                                </td>
                            </tr> 
                             <tr>
                               <td>COMPLEMENT CONSULTATION REFE</td>
                               <td>C7</td>
                               <td>1</td>
                               <td>100</td>
                               <td>100</td>
                               <td>
                                    <input type="radio" value="100" name="prix"/>
                                    <input type="hidden" value="COMPLEMENT CONSULTATION REFE 100" name="motif"/>
                                </td>
                            </tr>  
                            <tr>
                               <td>OBTURATION CANALAIRE(MOLAIRE)</td>
                               <td>D</td>
                               <td>15</td>
                               <td>1500</td>
                               <td>22500</td>
                               <td>
                                    <input type="radio" value="22500" name="prix"/>
                                    <input type="hidden" value="OBTURATION CANALAIRE(MOLAIRE) 22500" name="motif"/>
                                </td>
                            </tr>  
                            <tr>
                               <td>CURETAGE D'UNE POCHE DENTAIRE</td>
                               <td>D</td>
                               <td>3</td>
                               <td>1500</td>
                               <td>4500</td>
                               <td>
                                    <input type="radio" value="4500" name="prix"/>
                                    <input type="hidden" value="CURETAGE D'UNE POCHE DENTAIRE 4500" name="motif"/>
                                </td>
                            </tr>  
                            <tr>
                               <td>DECAPUCHONNAGE</td>
                               <td>D</td>
                               <td>6</td>
                               <td>1500</td>
                               <td>9000</td>
                               <td>
                                    <input type="radio" value="9000" name="prix"/>
                                    <input type="hidden" value="DECAPUCHONNAGE 9000" name="motif"/>
                                </td>
                            </tr> 
                            <tr>
                               <td>PROTHESE PAR DENT SUPPLEMENTAIRE</td>
                               <td>D</td>
                               <td>3</td>
                               <td>1500</td>
                               <td>4500</td>
                               <td>
                                    <input type="radio" value="4500" name="prix"/>
                                    <input type="hidden" value="PROTHESE PAR DENT SUPPLEMENTAIRE 4500" name="motif"/>
                                </td>
                            </tr>  
                            <tr>
                               <td>DETARTRAGE COMPLET</td>
                               <td>D</td>
                               <td>10</td>
                               <td>1500</td>
                               <td>15000</td>
                               <td>
                                    <input type="radio" value="15000" name="prix"/>
                                    <input type="hidden" value="DETARTRAGE COMPLET 15000" name="motif"/>
                                </td>
                            </tr>  
                            <tr>
                               <td>EXTRATION D'UNE DENT </td>
                               <td>D</td>
                               <td>9</td>
                               <td>1500</td>
                               <td>13500</td>
                               <td>
                                    <input type="radio" value="13500" name="prix"/>
                                    <input type="hidden" value="EXTRATION D'UNE DENT 13500" name="motif"/>
                                </td>
                            </tr>  
                            <tr>
                               <td>EXTRATION DENT DE SAGESSE</td>
                               <td>D</td>
                               <td>12</td>
                               <td>1500</td>
                               <td>18000</td>
                               <td>
                                    <input type="radio" value="18000" name="prix"/>
                                    <input type="hidden" value="EXTRATION DENT DE SAGESSE 18000" name="motif"/>
                                </td>
                            </tr>  
                            <tr>
                               <td>EXTRATION D'UNE DENT DE LAIT</td>
                               <td>D</td>
                               <td>7</td>
                               <td>1500</td>
                               <td>10500</td>
                               <td>
                                    <input type="radio" value="10500" name="prix"/>
                                    <input type="hidden" value="EXTRATION D'UNE DENT DE LAIT 10500" name="motif"/>
                                </td>
                            </tr>  
                            <tr>
                               <td>FRENECTOMIE</td>
                               <td>D</td>
                               <td>3</td>
                               <td>1500</td>
                               <td>4500</td>
                               <td>
                                    <input type="radio" value="4500" name="prix"/>
                                    <input type="hidden" value="FRENECTOMIE 4500" name="motif"/>
                                </td>
                            </tr> 
                               <tr>
                               <td>PROTHESE DENTAIRE PREMIER DENT </td>
                               <td>D</td>
                               <td>25</td>
                               <td>1500</td>
                               <td>37500</td>
                               <td>
                                    <input type="radio" value="37500" name="prix"/>
                                    <input type="hidden" value="PROTHESE DENTAIRE PREMIER DENT 37500" name="motif"/>
                                </td>
                            </tr> 
                               <tr>
                               <td>TRAITEMENT PULPITE</td>
                               <td>D</td>
                               <td>15</td>
                               <td>1500</td>
                               <td>22500</td>
                               <td>
                                    <input type="radio" value="22500" name="prix"/>
                                    <input type="hidden" value="TRAITEMENT PULPITE 22500" name="motif"/>
                                </td>
                            </tr>  
                            <tr>
                               <td>RX RETROALVEOLAIRE</td>
                               <td>D</td>
                               <td>4</td>
                               <td>1500</td>
                               <td>6000</td>
                               <td>
                                    <input type="radio" value="6000" name="prix"/>
                                    <input type="hidden" value="RX RETROALVEOLAIRE 6000" name="motif"/>
                                </td>
                            </tr>  
                            <tr>
                               <td>TRAITEMENT D'UNE DENT</td>
                               <td>D</td>
                               <td>9</td>
                               <td>1500</td>
                               <td>13500</td>
                               <td>
                                    <input type="radio" value="13500" name="prix"/>
                                    <input type="hidden" value="TRAITEMENT D'UNE DENT 13500" name="motif"/>
                                </td>
                            </tr> 
                            <tr>
                               <td>TRAITEMENT D'UNE DENT COMPOSITE</td>
                               <td>D</td>
                               <td>15</td>
                               <td>1500</td>
                               <td>22500</td>
                               <td>
                                    <input type="radio" value="22500" name="prix"/>
                                    <input type="hidden" value="TRAITEMENT D'UNE DENT COMPOSITE 22500" name="motif"/>
                                </td>
                            </tr>
                            <tr>
                               <td>OBTURATION CANALAIRE</td>
                               <td>D</td>
                               <td>15</td>
                               <td>1500</td>
                               <td>22500</td>
                               <td>
                                    <input type="radio" value="22500" name="prix"/>
                                    <input type="hidden" value="OBTURATION CANALAIRE 22500" name="motif"/>
                                </td>
                            </tr>
                            <tr>
                               <td>TRAITEMENT D'UNE DENT CAVITE C</td>
                               <td>D</td>
                               <td>9</td>
                               <td>1500</td>
                               <td>13500</td>
                               <td>
                                    <input type="radio" value="13500" name="prix"/>
                                    <input type="hidden" value="TRAITEMENT D'UNE DENT CAVITE C 13500" name="motif"/>
                                </td>
                            </tr>
                            <tr>
                               <td>TRAITEMENT D'UNE AVEOLITE</td>
                               <td>D</td>
                               <td>3</td>
                               <td>1500</td>
                               <td>4500</td>
                               <td>
                                    <input type="radio" value="4500" name="prix"/>
                                    <input type="hidden" value="TRAITEMENT D'UNE AVEOLITE 4500" name="motif"/>
                                </td>
                            </tr>
                                
                        </table>
                        </div>
                    <?php 
                    } else if ($service['nom'] == "Neurologie"){
                        ?>
                            <div class="content">
                            <h5> consultations neurologique</h5>
                            <br>
                                <table>
                                    <tr>
                                        <td><h6>NEUROLOGIE</h6></td>
                                        <td><h6>Acte</h6></td>
                                        <td><h6>Qté</h6></td>
                                        <td><h6>P.U(F CFA)</h6></td>
                                        <td><h6>Montant(F CFA)</h6></td>
                                    </tr>
                                    <tr>
                                            <td>CONSULTATION NEUROLOGIQUE</td>
                                            <td>C010</td>
                                            <td>1</td>
                                            <td>7500</td>
                                            <td>7500</td>
                                            <td>
                                              <input type="radio" value="7500" name="prix"/>
                                              <input type="hidden" value="CONSULTATION NEUROLOGIQUE 7500"  name="motif"/>
                                            </td>
                                    </tr>       
                                </table>
                            </div>
                        <?php
                    }
                    ?>
                    <br>
                    <div class="options">
                        <h3>Que vouliez vous faire ?</h3>
                        <div>
                            <?php 
                                if ($service['type'] == "tout") {
                            ?>
                            <button class="btn  btn-outline-primary" id="rdv-opt">Prendre un rendez-vous</button>
                            <?php  } ?>
                            <button class="btn  btn-outline-primary" id="rdv-paie">Faire un paiement</button>
                        </div>
                    </div>
                    <br> <br>
                    <div class="content calend-sup " id="calendar-section">
                        <h3 id="tables">Le planning des rendez-vous</h3>
                        <?php
                            if (!empty($messageErreur)) { 
                            ?>
                            <div class="badge security">
                                <?= $messageErreur ?>
                            </div>
                            <?php }?>
                        <h4 class="section-title">Veuillez prendre votre rendez-vous</h4>
    
                        <div class="calendar-container" id="calendar">
                            <input type="hidden" id="id_spec" value="<?= $service['id_specialite'] ?>" />
                            <div>
                                <button id="monthLeft">
                                    <i class="ti-angle-left ml-auto"></i>
                                </button>
                                <span id="calendarMonth">
                                    Mois / Annee 
                                </span>
                                <button id="monthRight">
                                    <i class="ti-angle-right ml-auto"></i>
                                </button>
                            </div>
                            <div>
                                <button id="weekLeft">
                                    <i class="ti-angle-left ml-auto"></i>
                                </button>
                                <span id="calendarWeek">
                                    Semaine 0
                                </span>
                                <button id="weekRight">
                                    <i class="ti-angle-right ml-auto"></i>
                                </button>
                            </div>
                            <table>
                            <thead>
                                <tr>
                                    <th align="center">Horaires</th>
                                    <th align="center">
                                        Dimanche
                                        <br>
                                        <span class="days">0</span>
                                    </th>
                                    <th align="center">
                                        Lundi
                                        <br>
                                        <span class="days">0</span>
                                    </th>
                                    <th align="center">
                                        Mardi
                                        <br>
                                        <span class="days">0</span>
                                    </th>
                                    <th align="center">
                                        Mercredi
                                        <br>
                                        <span class="days">0</span>
                                    </th>
                                    <th align="center">
                                        Jeudi
                                        <br>
                                        <span class="days">0</span>
                                    </th>
                                    <th align="center">
                                        Vendredi
                                        <br>
                                        <span class="days">0</span>
                                    </th>
                                    <th align="center">
                                        Samedi
                                        <br>
                                        <span class="days">0</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>col 3 is</td>
                                    <td align="center" class="date-day-1">
                                        <div class="hour-ctrl" data-hour="08h">08h</div>
                                        <div class="hour-even hour-ctrl" data-hour="09h">09h</div>
                                        <div class="hour-ctrl" data-hour="10h">10h</div>
                                        <div class="hour-even hour-ctrl" data-hour="11h">11h</div>
                                        <div class="hour-ctrl" data-hour="12h">12h</div>
                                    </td>
                                    <td align="center" class="date-day-2">
                                        <div class="hour-ctrl" data-hour="08h">08h</div>
                                        <div class="hour-even hour-ctrl" data-hour="09h">09h</div>
                                        <div class="hour-ctrl" data-hour="10h">10h</div>
                                        <div class="hour-even hour-ctrl" data-hour="11h">11h</div>
                                        <div class="hour-ctrl" data-hour="12h">12h</div>
                                    </td>
                                    <td align="center" class="date-day-3">
                                        <div class="hour-ctrl" data-hour="08h">08h</div>
                                        <div class="hour-even hour-ctrl" data-hour="09h">09h</div>
                                        <div class="hour-ctrl" data-hour="10h">10h</div>
                                        <div class="hour-even hour-ctrl" data-hour="11h">11h</div>
                                        <div class="hour-ctrl" data-hour="12h">12h</div>
                                    </td>
                                    <td align="center" class="date-day-4">
                                        <div class="hour-ctrl" data-hour="08h">08h</div>
                                        <div class="hour-even hour-ctrl" data-hour="09h">09h</div>
                                        <div class="hour-ctrl" data-hour="10h">10h</div>
                                        <div class="hour-even hour-ctrl" data-hour="11h">11h</div>
                                        <div class="hour-ctrl" data-hour="12h">12h</div>
                                    </td>
                                    <td align="center" class="date-day-5">
                                        <div class="hour-ctrl" data-hour="08h">08h</div>
                                        <div class="hour-even hour-ctrl" data-hour="09h">09h</div>
                                        <div class="hour-ctrl" data-hour="10h">10h</div>
                                        <div class="hour-even hour-ctrl" data-hour="11h">11h</div>
                                        <div class="hour-ctrl" data-hour="12h">12h</div>
                                    </td>
                                    <td align="center" class="date-day-6">
                                        <div class="hour-ctrl" data-hour="08h">08h</div>
                                        <div class="hour-even hour-ctrl" data-hour="09h">09h</div>
                                        <div class="hour-ctrl" data-hour="10h">10h</div>
                                        <div class="hour-even hour-ctrl" data-hour="11h">11h</div>
                                        <div class="hour-ctrl" data-hour="12h">12h</div>
                                    </td>
                                    <td align="center" class="date-day-7">
                                        <div class="hour-ctrl" data-hour="08h">08h</div>
                                        <div class="hour-even hour-ctrl" data-hour="09h">09h</div>
                                        <div class="hour-ctrl" data-hour="10h">10h</div>
                                        <div class="hour-even hour-ctrl" data-hour="11h">11h</div>
                                        <div class="hour-ctrl" data-hour="12h">12h</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>col 3 is</td>
                                    <td align="center" class="date-day-1">
                                        <div class="hour-ctrl" data-hour="14h">14h</div>
                                        <div class="hour-even hour-ctrl" data-hour="15h">15h</div>
                                        <div class="hour-ctrl" data-hour="16h">16h</div>
                                        
                                    </td>
                                    <td align="center" class="date-day-2">
                                        <div class="hour-ctrl" data-hour="14h">14h</div>
                                        <div class="hour-even hour-ctrl" data-hour="15h">15h</div>
                                        <div class="hour-ctrl" data-hour="16h">16h</div>
                                        
                                    </td>
                                    <td align="center" class="date-day-3">
                                        <div class="hour-ctrl" data-hour="14h">14h</div>
                                        <div class="hour-even hour-ctrl" data-hour="15h">15h</div>
                                        <div class="hour-ctrl" data-hour="16h">16h</div>
                                        
                                    </td>
                                    <td align="center" class="date-day-4">
                                        <div class="hour-ctrl" data-hour="14h">14h</div>
                                        <div class="hour-even hour-ctrl" data-hour="15h">15h</div>
                                        <div class="hour-ctrl" data-hour="16h">16h</div>
                                        
                                    </td>
                                    <td align="center" class="date-day-5">
                                        <div class="hour-ctrl" data-hour="14h">14h</div>
                                        <div class="hour-even hour-ctrl" data-hour="15h">15h</div>
                                        <div class="hour-ctrl" data-hour="16h">16h</div>
                                        
                                    </td>
                                    <td align="center" class="date-day-6">
                                        <div class="hour-ctrl" data-hour="14h">14h</div>
                                        <div class="hour-even hour-ctrl" data-hour="15h">15h</div>
                                        <div class="hour-ctrl" data-hour="16h">16h</div>
                                        
                                    </td>
                                    <td align="center" class="date-day-7">
                                        <div class="hour-ctrl" data-hour="14h">14h</div>
                                        <div class="hour-even hour-ctrl" data-hour="15h">15h</div>
                                        <div class="hour-ctrl" data-hour="16h">16h</div>
                                        
                                    </td>
                                </tr>
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div id="formulaire-rdv" class="form-rdv">
                        <div class="container">
                            <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="p-5 shadow rounded content">
                                    <div class="row d-flex justify-content-end">
                                        <button class="col-1" id="close-rdv">
                                            <i class="ti-close ml-auto"></i>
                                        </button>
                                    </div>
                                <h3 class="section-title">Prenez votre rendez-vous</h3>
                                <p>Payer pour prendre votre rendez-vous</p>
                                
                                <form method="POST" >
                                    <div class="notices tip success-box" id="success-box">
                                        <p>This is a simple tip.</p>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="date">Date</label>
                                        <input type="text"  id="form-date" class="form-control"  placeholder="Date" required disabled>
                                        <input type="hidden" id="form-date-true" name="rdv_date" placeholder="Date">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="hour">Hour</label>
                                        <input type="text" class="form-control" id="form-hour" placeholder="Heure" disabled>
                                        <input type="hidden" id="form-hour-true" name="rdv_hour" placeholder="Heure">
                                    </div>
                                    <input type="hidden" value="<?= $_SESSION['client']['id_client']?>" name="id_patient" id="client-id"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="object">Object</label>
                                        <textarea type="text" class="form-control" id="object" name="objet" placeholder="Decrivez  pourquoi vous preniez ce rendez-vous" required> </textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary" id="btn-rdv" name="submit">Soumettre</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div id="formulaire-paie" class="form-rdv">
                        <div class="container">
                            <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="p-5 shadow rounded content">
                                    <div class="row d-flex justify-content-end">
                                        <button class="col-1" id="close-paie">
                                            <i class="ti-close ml-auto"></i>
                                        </button>
                                    </div>
                                <h3 class="section-title">Effectuez votre paiement</h3>
                                <!-- <p>Payer pour prendre votre rendez-vous</p> -->
                                
                                <form method="POST" >
                                    <div class="notices tip success-box" id="success-box-paie">
                                        <p>This is a simple tip.</p>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="date">Consultation</label>
                                            <input type="text"  id="form-consult" class="form-control"  required disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="hour">Prix</label>
                                            <input type="text" class="form-control" id="form-prix"  disabled>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nom">Nom</label>
                                            <input type="text"  id="form-name" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="prenom">Prenom</label>
                                            <input type="text" class="form-control" id="form-prenom" >

                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="object">Object</label>
                                        <textarea type="text" class="form-control" id="object-paie" name="objet" placeholder="Decrivez  pourquoi vous preniez ce rendez-vous" required> </textarea>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary" id="btn-paie" name="submit">Soumettre</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
          </div>
    </section>
</div>