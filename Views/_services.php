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
                            <h5>Voici les consultations effectués dans le service de cardiologie avec leur options de prix</h5>
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
                        
                    } else if ($service['nom'] == "Ophtamologie") {
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
                    } else if ($service['nom'] == "ORL"){
                        ?>
                        <div class="content">
                        <h5>Voici les consultations effectués dans le service d'ORL avec leur option de prix</h5> <br>
                        <table>
                                <tr>
                                    <td><h4>SERVICE D'ORL</h4></td>
                                    <td><h4>Acte</h4></td>
                                    <td><h4>Qté</h4></td>
                                    <td><h4>P.U(F CFA)</h4></td>
                                    <td><h4>Montant(F CFA)</h4></td>
                                </tr>
                                <tr>
                                   <td>INCISION CELLULITE</td>
                                   <td>K4</td>
                                   <td>30</td>
                                   <td>750</td>
                                   <td>22500</td>
                                   <td>
                                    <input type="radio" value="22500" name="prix"/>
                                    <input type="hidden" value="INCISION CELLULITE 22500"  name="motif"/>
                                   </td>
                                </tr>
                                <tr>
                                    <td>ABLATION DU CE OROPHARYNX SA</td>
                                    <td>K1</td>
                                    <td>80</td>
                                    <td>750</td>
                                    <td>60000</td>
                                    <td>
                                    <input type="radio" value="60000" name="prix"/>
                                    <input type="hidden" value="ABLATION DU CE OROPHARYNX SA 60000"  name="motif"/>
                                   </td>
                                </tr>
                                <tr>
                                    <td>ABLATION DU CE AURICULAIRE SA</td>
                                    <td>4</td>
                                    <td>22</td>
                                    <td>750</td>
                                    <td>16500</td>
                                    <td>
                                    <input type="radio" value="16500" name="prix"/>
                                    <input type="hidden" value="ABLATION DU CE AURICULAIRE SA 16500"  name="motif"/>
                                   </td>
                                </tr>
                                <tr>
                                    <td>ABLATION DE KYSTE</td>
                                    <td>K4</td>
                                    <td>160</td>
                                    <td>750</td>
                                    <td>120000</td>
                                    <td>
                                    <input type="radio" value="120000" name="prix"/>
                                    <input type="hidden" value="ABLATION DE KYSTE 120000"  name="motif"/>
                                   </td>
                                </tr>
                                <tr>
                                    <td>ABLATION DE CORPS ETRANGERS D</td>
                                    <td>K1</td>
                                    <td>22</td>
                                    <td>750</td>
                                    <td>16500</td>
                                    <td>
                                    <input type="radio" value="16500" name="prix"/>
                                    <input type="hidden" value="ABLATION DE CORPS ETRANGERS D 16500"  name="motif"/>
                                   </td>
                                </tr>
                                <tr>
                                    <td>ABLATIONDE DU CE DE L'OESOPHAGE</td>
                                    <td>K4</td>
                                    <td>50</td>
                                    <td>750</td>
                                    <td>37500</td>
                                    <td>
                                    <input type="radio" value="37500" name="prix"/>
                                    <input type="hidden" value="ABLATIONDE DU CE DE L'OESOPHAGE 37500"  name="motif"/>
                                   </td>
                                </tr>
                                 <tr>
                                    <td>ADENADECTOMIE</td>
                                    <td>K4</td>
                                    <td>68</td>
                                    <td>750</td>
                                    <td>51000</td>
                                    <td>
                                    <input type="radio" value="51000" name="prix"/>
                                    <input type="hidden" value="ADENADECTOMIE 51000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>ADENECTOMIE SOUS MAXILLAIRE SO</td>
                                    <td>K4</td>
                                    <td>120</td>
                                    <td>750</td>
                                    <td>90000</td>
                                    <td>
                                    <input type="radio" value="90000" name="prix"/>
                                    <input type="hidden" value="ADENECTOMIE SOUS MAXILLAIRE SO 90000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>ADENOAMYDALECTOMIE</td>
                                    <td>K4</td>
                                    <td>140</td>
                                    <td>750</td>
                                    <td>105000</td>
                                    <td>
                                    <input type="radio" value="105000" name="prix"/>
                                    <input type="hidden" value="ADENOAMYDALECTOMIE 105000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>AMYGDALECTOMIE</td>
                                    <td>K4</td>
                                    <td>108</td>
                                    <td>750</td>
                                    <td>81000</td>
                                    <td>
                                    <input type="radio" value="81000" name="prix"/>
                                    <input type="hidden" value="AMYGDALECTOMIE 81000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>BIOPSIE A LA CHAISE</td>
                                    <td>K1</td>
                                    <td>22</td>
                                    <td>750</td>
                                    <td>16500</td>
                                    <td>
                                    <input type="radio" value="16500" name="prix"/>
                                    <input type="hidden" value="BIOPSIE A LA CHAISE 16500"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>CONSULTATION ORL</td>
                                    <td>C1</td>
                                    <td>1</td>
                                    <td>5250</td>
                                    <td>5250</td>
                                    <td>
                                    <input type="radio" value="5250" name="prix"/>
                                    <input type="hidden" value="CONSULTATION ORL 5250"  name="motif"/>
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
                                    <input type="hidden" value="CCOMPLEMENT CONSULTATION REFE 100"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>CELLULITE</td>
                                    <td>K4</td>
                                    <td>30</td>
                                    <td>750</td>
                                    <td>22500</td>
                                    <td>
                                    <input type="radio" value="22500" name="prix"/>
                                    <input type="hidden" value="CELLULITE 22500"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>COLOBOMA</td>
                                    <td>K4</td>
                                    <td>50</td>
                                    <td>750</td>
                                    <td>37500</td>
                                    <td>
                                    <input type="radio" value="37500" name="prix"/>
                                    <input type="hidden" value="COLOBOMA 37500"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>EXERESE DE KYSTE</td>
                                    <td>K4</td>
                                    <td>160</td>
                                    <td>750</td>
                                    <td>120000</td>
                                    <td>
                                    <input type="radio" value="120000" name="prix"/>
                                    <input type="hidden" value="EXERESE DE KYSTE 120000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>EXTRATION BDC/O</td>
                                    <td>K4</td>
                                    <td>3</td>
                                    <td>750</td>
                                    <td>2250</td>
                                    <td>
                                    <input type="radio" value="2250" name="prix"/>
                                    <input type="hidden" value="EXTRATION BDC/O 5250"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>FREIN DE LANGUE</td>
                                    <td>K4</td>
                                    <td>20</td>
                                    <td>750</td>
                                    <td>15000</td>
                                    <td>
                                    <input type="radio" value="15000" name="prix"/>
                                    <input type="hidden" value="REIN DE LANGU 15000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>INCISION DRAINAGE PHLEGMON PER</td>
                                    <td>K4</td>
                                    <td>20</td>
                                    <td>750</td>
                                    <td>15000</td>
                                    <td>
                                    <input type="radio" value="15000" name="prix"/>
                                    <input type="hidden" value="INCISION DRAINAGE PHLEGMON PER 15000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>INCISION ABCES</td>
                                    <td>K4</td>
                                    <td>13</td>
                                    <td>750</td>
                                    <td>9750</td>
                                    <td>
                                    <input type="radio" value="9750" name="prix"/>
                                    <input type="hidden" value="INCISION ABCES 9750"  name="motif"/>
                                   </td>
                                 </tr><tr>
                                    <td>INFILTRATION LOCAL</td>
                                    <td>K4</td>
                                    <td>11</td>
                                    <td>750</td>
                                    <td>8250</td>
                                    <td>
                                    <input type="radio" value="8250" name="prix"/>
                                    <input type="hidden" value="INFILTRATION LOCAL 8250"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>INFILTRATION CH</td>
                                    <td>K4</td>
                                    <td>20</td>
                                    <td>750</td>
                                    <td>15000</td>
                                    <td>
                                    <input type="radio" value="15000" name="prix"/>
                                    <input type="hidden" value="INFILTRATION CH 15000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>KYSTE</td>
                                    <td>K1</td>
                                    <td>160</td>
                                    <td>750</td>
                                    <td>120000</td>
                                    <td>
                                    <input type="radio" value="120000" name="prix"/>
                                    <input type="hidden" value="KYSTE 120000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>LARYNGOSCOPIE EN SUSPENSION</td>
                                    <td>K4</td>
                                    <td>68</td>
                                    <td>750</td>
                                    <td>51000</td>
                                    <td>
                                    <input type="radio" value="51000" name="prix"/>
                                    <input type="hidden" value="LARYNGOSCOPIE EN SUSPENSION 51000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>LARYNGOSCOPIE EN SUSPENSION<</td>
                                    <td>K4</td>
                                    <td>90</td>
                                    <td>750</td>
                                    <td>67000</td>
                                    <td>
                                    <input type="radio" value="67000" name="prix"/>
                                    <input type="hidden" value="LARYNGOSCOPIE EN SUSPENSION 67000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>LAVAGE OU ASPIRATION OREILLE</td>
                                    <td>K4</td>
                                    <td>3</td>
                                    <td>750</td>
                                    <td>2250</td>
                                    <td>
                                    <input type="radio" value="2250" name="prix"/>
                                    <input type="hidden" value="LAVAGE OU ASPIRATION OREILLE 2250"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>POLYPE DU MEAT NASAL</td>
                                    <td>K1</td>
                                    <td>150</td>
                                    <td>750</td>
                                    <td>112500</td>
                                    <td>
                                    <input type="radio" value="112500" name="prix"/>
                                    <input type="hidden" value="POLYPE DU MEAT NASAL 112500"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>SINUSITE MAXILLAIRE</td>
                                    <td>K1</td>
                                    <td>80</td>
                                    <td>750</td>
                                    <td>60000</td>
                                    <td>
                                    <input type="radio" value="60000" name="prix"/>
                                    <input type="hidden" value="SINUSITE MAXILLAIRE 60000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>SOUS MAXILECTOMIE</td>
                                    <td>K4</td>
                                    <td>160</td>
                                    <td>750</td>
                                    <td>120000</td>
                                    <td>
                                    <input type="radio" value="120000" name="prix"/>
                                    <input type="hidden" value="SOUS MAXILECTOMIE 120000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>TEMPONEMENT INTERIEUR DU NEZ</td>
                                    <td>K4</td>
                                    <td>16</td>
                                    <td>750</td>
                                    <td>12000</td>
                                    <td>
                                    <input type="radio" value="12000" name="prix"/>
                                    <input type="hidden" value="TEMPONEMENT INTERIEUR DU NEZ 12000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>THYRODECTOMIE</td>
                                    <td>K1</td>
                                    <td>240</td>
                                    <td>750</td>
                                    <td>180000</td>
                                    <td>
                                    <input type="radio" value="180000" name="prix"/>
                                    <input type="hidden" value="HYRODECTOMIE 180000"  name="motif"/>
                                   </td>
                                 </tr>
                                 <tr>
                                    <td>TRACHEOCTOMIE</td>
                                    <td>K4</td>
                                    <td>60</td>
                                    <td>750</td>
                                    <td>45000</td>
                                    <td>
                                    <input type="radio" value="45000" name="prix"/>
                                    <input type="hidden" value="TRACHEOCTOMIE 45000"  name="motif"/>
                                   </td>
                                 </tr>
                        </table>
    
                        </div>
                        <?php
                    } else if ($service['nom'] == "Dermatologie"){
                        ?>
                            <div class="content">
                            <h5> Voici les consultations effectués dans le service de dermatologie avec leur option de prix</h5>
                            <br>
                                <table>
                                    <tr>
                                        <td><h6>DERMATOLOGIE</h6></td>
                                        <td><h6>Acte</h6></td>
                                        <td><h6>Qté</h6></td>
                                        <td><h6>P.U(F CFA)</h6></td>
                                        <td><h6>Montant(F CFA)</h6></td>
                                    </tr>
                                    <tr>
                                            <td>CONSULTATION DERMATOLOGIE </td>
                                            <td>C010</td>
                                            <td>1</td>
                                            <td>7500</td>
                                            <td>7500</td>
                                            <td>
                                              <input type="radio" value="7500" name="prix"/>
                                              <input type="hidden" value="CONSULTATION DERMATOLOGIE 7500"  name="motif"/>
                                            </td>
                                    </tr>       
                                </table>
                            </div>
                        <?php
                    }else if ($service['nom'] == "Imagerie medical"){
                        ?>
                            <div class="content">
                            <h5>Voici les consultations effectués dans le service de dermatologie avec leur option de prix</h5>
                            <br>
                                <table>
                                    <tr>
                                        <td><h6>IMAGERIE MEDICAL</h6></td>
                                        <td><h6>Acte</h6></td>
                                        <td><h6>Qté</h6></td>
                                        <td><h6>P.U(F CFA)</h6></td>
                                        <td><h6>Montant(F CFA)</h6></td>
                                    </tr>
                                    <tr>
                                            <td>ECHOGRAPHIE ABDOMINAL</td>
                                            <td>Z2</td>
                                            <td>16</td>
                                            <td>750</td>
                                            <td>12000</td>
                                            <td>
                                              <input type="radio" value="12000" name="prix"/>
                                              <input type="hidden" value="ECHOGRAPHIE ABDOMINAL 12000"  name="motif"/>
                                            </td>
                                    </tr>    
                                    <tr>
                                            <td>ECHOGRAPHIE ABDOMINO-PELVIENN</td>
                                            <td>Z2</td>
                                            <td>28</td>
                                            <td>750</td>
                                            <td>21000</td>
                                            <td>
                                              <input type="radio" value="21000" name="prix"/>
                                              <input type="hidden" value="ECHOGRAPHIE ABDOMINO-PELVIENN 21000"  name="motif"/>
                                            </td>
                                    </tr>       
                                    <tr>
                                            <td>ECHOGRAPHIE MAMAIRE</td>
                                            <td>Z2</td>
                                            <td>16</td>
                                            <td>750</td>
                                            <td>12000</td>
                                            <td>
                                              <input type="radio" value="12000" name="prix"/>
                                              <input type="hidden" value="ECHOGRAPHIE MAMAIRE 12000"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ECHOGRAPHIE OBSTETRICALE</td>
                                            <td>Z2</td>
                                            <td>12</td>
                                            <td>750</td>
                                            <td>9000</td>
                                            <td>
                                              <input type="radio" value="9000" name="prix"/>
                                              <input type="hidden" value="ECHOGRAPHIE OBSTETRICALE 9000"  name="motif"/>
                                            </td>
                                    </tr>   
                                    <tr>
                                            <td>ECHOGRAPHIE PELVIENNE</td>
                                            <td>Z2</td>
                                            <td>12</td>
                                            <td>750</td>
                                            <td>9000</td>
                                            <td>
                                              <input type="radio" value="9000" name="prix"/>
                                              <input type="hidden" value="ECHOGRAPHIE PELVIENNE 9000"  name="motif"/>
                                            </td>
                                    </tr>   
                                    <tr>
                                            <td>ECHOGRAPHIE PROSTATIQUE</td>
                                            <td>Z2</td>
                                            <td>22</td>
                                            <td>750</td>
                                            <td>16500</td>
                                            <td>
                                              <input type="radio" value="16500" name="prix"/>
                                              <input type="hidden" value="ECHOGRAPHIE PROSTATIQUE 16500"  name="motif"/>
                                            </td>
                                    </tr>   
                                    <tr>
                                            <td>ECHOGRAPHIE TESTICULAIRE</td>
                                            <td>Z2</td>
                                            <td>18</td>
                                            <td>750</td>
                                            <td>13500</td>
                                            <td>
                                              <input type="radio" value="13500" name="prix"/>
                                              <input type="hidden" value="CHOGRAPHIE TESTICULAIRE 13500"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ECHOGRAPHIE THYROIDIENNE</td>
                                            <td>Z2</td>
                                            <td>18</td>
                                            <td>750</td>
                                            <td>13500</td>
                                            <td>
                                              <input type="radio" value="13500" name="prix"/>
                                              <input type="hidden" value="CHOGRAPHIE HYROIDIENNE 13500"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ECHOGRAPHIE SOUS MANDIBULAIRE</td>
                                            <td>Z2</td>
                                            <td>16</td>
                                            <td>750</td>
                                            <td>12000</td>
                                            <td>
                                              <input type="radio" value="12000" name="prix"/>
                                              <input type="hidden" value="CHOGRAPHIE SOUS MANDIBULAIRE 12000"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>ECHOGRAPHIE TRANS-FRONTANELL</td>
                                            <td>Z2</td>
                                            <td>18</td>
                                            <td>750</td>
                                            <td>13500</td>
                                            <td>
                                              <input type="radio" value="13500" name="prix"/>
                                              <input type="hidden" value="CHOGRAPHIE TRANS-FRONTANEL 13500"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ECHOGRAPHIE DES PARTIES MOLL</td>
                                            <td>Z2</td>
                                            <td>18</td>
                                            <td>750</td>
                                            <td>13500</td>
                                            <td>
                                              <input type="radio" value="13500" name="prix"/>
                                              <input type="hidden" value="ECHOGRAPHIE DES PARTIES MOLL 13500"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ECHOGRAPHIE PELVIENNE AND VA</td>
                                            <td>Z2</td>
                                            <td>18</td>
                                            <td>750</td>
                                            <td>13500</td>
                                            <td>
                                              <input type="radio" value="13500" name="prix"/>
                                              <input type="hidden" value="ECHOGRAPHIE PELVIENNE AND VA 13500"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>ECHOGRAPHIE VEINEUX D'UN MEMB</td>
                                            <td>Z2</td>
                                            <td>30</td>
                                            <td>750</td>
                                            <td>22500</td>
                                            <td>
                                              <input type="radio" value="22500" name="prix"/>
                                              <input type="hidden" value="CHOGRAPHIE VEINEUX D'UN MEMB 22500"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ECHOGRAPHIE VEINEUX D'UN DES 2 MEM</td>
                                            <td>Z2</td>
                                            <td>60</td>
                                            <td>750</td>
                                            <td>45000</td>
                                            <td>
                                              <input type="radio" value="45000" name="prix"/>
                                              <input type="hidden" value="CHOGRAPHIE VEINEUX D'UN MEMB 45000"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ECHOGRAPHIE VEINEUX ARTERIO-VEINEUX</td>
                                            <td>Z2</td>
                                            <td>60</td>
                                            <td>750</td>
                                            <td>45000</td>
                                            <td>
                                              <input type="radio" value="45000" name="prix"/>
                                              <input type="hidden" value="ECHOGRAPHIE VEINEUX ARTERIO-VEINEUX 45000"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ECHOGRAPHIE VEINEUX ARTERIO-VEINEUX</td>
                                            <td>Z2</td>
                                            <td>120</td>
                                            <td>750</td>
                                            <td>90000</td>
                                            <td>
                                              <input type="radio" value="90000" name="prix"/>
                                              <input type="hidden" value="ECHOGRAPHIE VEINEUX ARTERIO-VEINEUX 90000"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ECHO DOPPLER DU TRONC SUPPRA A</td>
                                            <td>Z2</td>
                                            <td>60</td>
                                            <td>750</td>
                                            <td>45000</td>
                                            <td>
                                              <input type="radio" value="45000" name="prix"/>
                                              <input type="hidden" value="ECHO DOPPLER DU TRONC SUPPRA A 45000"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ARTICULATION ACROMIO-CLAVICULA</td>
                                            <td>Z1</td>
                                            <td>11</td>
                                            <td>750</td>
                                            <td>8250</td>
                                            <td>
                                              <input type="radio" value="8250" name="prix"/>
                                              <input type="hidden" value="ARTICULATION ACROMIO-CLAVICULA 8250"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO ARCADE ZYGOMATIQUE</td>
                                            <td>Z1</td>
                                            <td>12</td>
                                            <td>750</td>
                                            <td>9000</td>
                                            <td>
                                              <input type="radio" value="9000" name="prix"/>
                                              <input type="hidden" value="RADIO ARCADE ZYGOMATIQUE 9000"  name="motif"/>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>RADIO ARTICULATION STERNO-CLAV</td>
                                            <td>Z1</td>
                                            <td>1</td>
                                            <td>750</td>
                                            <td>8250</td>
                                            <td>
                                              <input type="radio" value="8250" name="prix"/>
                                              <input type="hidden" value="RADIO ARTICULATION STERNO-CLAV 8250"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>ABDOMEN SANS PREPARATION</td>
                                            <td>Z1</td>
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="ABDOMEN SANS PREPARATION 9750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>ARTICULATION TEMPORO-MAXILLAIRE</td>
                                            <td>Z1</td>
                                            <td>17</td>
                                            <td>750</td>
                                            <td>12750</td>
                                            <td>
                                              <input type="radio" value="12750" name="prix"/>
                                              <input type="hidden" value="ARTICULATION TEMPORO-MAXILLAIRE 9750"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO BASSIN DE FACE</td>
                                            <td>Z1</td>
                                            <td>17</td>
                                            <td>750</td>
                                            <td>8250</td>
                                            <td>
                                              <input type="radio" value="8250" name="prix"/>
                                              <input type="hidden" value="RADIO BASSIN DE FACE 8250"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO BASSIN F ET 2 OBLIQUE</td>
                                            <td>Z1</td>
                                            <td>25</td>
                                            <td>750</td>
                                            <td>18750</td>
                                            <td>
                                              <input type="radio" value="18750" name="prix"/>
                                              <input type="hidden" value="RADIO BASSIN F ET 2 OBLIQUE 18750"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO BASSIN F ET 1 OBLIQUE</td>
                                            <td>Z1</td>
                                            <td>19</td>
                                            <td>750</td>
                                            <td>14250</td>
                                            <td>
                                              <input type="radio" value="14250" name="prix"/>
                                              <input type="hidden" value="RADIO BASSIN F ET 1 OBLIQUE 14250"  name="motif"/>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>BLONDEAU (RADIO DES SINUS)</td>
                                            <td>Z1</td>
                                            <td>12</td>
                                            <td>750</td>
                                            <td>9000</td>
                                            <td>
                                              <input type="radio" value="9000" name="prix"/>
                                              <input type="hidden" value="BLONDEAU (RADIO DES SINUS)9000"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO AVANT BRAS F/P</td>
                                            <td>Z1</td>
                                            <td>10</td>
                                            <td>750</td>
                                            <td>7500</td>
                                            <td>
                                              <input type="radio" value="7500" name="prix"/>
                                              <input type="hidden" value="RADIO AVANT BRAS F/P 7500"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO BRAS(HUMERUS)</td>
                                            <td>Z1</td>
                                            <td>10</td>
                                            <td>750</td>
                                            <td>7500</td>
                                            <td>
                                              <input type="radio" value="7500" name="prix"/>
                                              <input type="hidden" value="RADIO BRAS(HUMERUS) 7500"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO CONDUIT AUDITIF INTERNE</td>
                                            <td>Z1</td>
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="RADIO CONDUIT AUDITIF INTERNE 9750"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO CALCANEUM F/P</td>
                                            <td>Z1</td>
                                            <td>11</td>
                                            <td>750</td>
                                            <td>6750</td>
                                            <td>
                                              <input type="radio" value="6750" name="prix"/>
                                              <input type="hidden" value="RADIO CALCANEUM F/P 6750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO CHEVILLE OU COUP DE PIED</td>
                                            <td>Z1</td>
                                            <td>8</td>
                                            <td>750</td>
                                            <td>6000</td>
                                            <td>
                                              <input type="radio" value="6000" name="prix"/>
                                              <input type="hidden" value="RADIO CHEVILLE OU COUP DE PIED 6000"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO CLAVICULE</td>
                                            <td>Z1</td>  
                                            <td>8</td>
                                            <td>750</td>
                                            <td>6000</td>
                                            <td>
                                              <input type="radio" value="6000" name="prix"/>
                                              <input type="hidden" value="RADIO CLAVICULE 6000"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO COCCYX F/P</td>
                                            <td>Z1</td>  
                                            <td>17</td>
                                            <td>750</td>
                                            <td>12750</td>
                                            <td>
                                              <input type="radio" value="12750" name="prix"/>
                                              <input type="hidden" value="RADIO COCCYX F/P 12750"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO COUDE F/P</td>
                                            <td>Z1</td>  
                                            <td>10</td>
                                            <td>750</td>
                                            <td>7500</td>
                                            <td>
                                              <input type="radio" value="7500" name="prix"/>
                                              <input type="hidden" value="RADIO COUDE F/P 7500"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO DE CRANE</td>
                                            <td>Z1</td>  
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="RADIO DE CRANE 9750"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO CONTENU UTERIN</td>
                                            <td>Z1</td>  
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="RADIO CONTENU UTERIN 9750"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO DE CUISSE F/P (FEMUR)</td>
                                            <td>Z1</td>  
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="RADIO DE CUISSE F/P (FEMUR) 9750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO DOIGT F/P</td>
                                            <td>Z1</td>  
                                            <td>6</td>
                                            <td>750</td>
                                            <td>4500</td>
                                            <td>
                                              <input type="radio" value="4500" name="prix"/>
                                              <input type="hidden" value="RADIO DOIGT F/P (FEMUR) 4500"  name="motif"/>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>RADIO EPAULE F/P</td>
                                            <td>Z1</td>  
                                            <td>10</td>
                                            <td>750</td>
                                            <td>7500</td>
                                            <td>
                                              <input type="radio" value="7500" name="prix"/>
                                              <input type="hidden" value="RADIO EPAULE F/P 7500"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO EPAULE F ET TRANSTHORACIQUE</td>
                                            <td>Z1</td>  
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="RADIO EPAULE F ET TRANSTHORACIQUE 9750"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO GENOU F/P</td>
                                            <td>Z1</td>  
                                            <td>11</td>
                                            <td>750</td>
                                            <td>8250</td>
                                            <td>
                                              <input type="radio" value="8250" name="prix"/>
                                              <input type="hidden" value="RADIO GENOU F/P 8250"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>GRILL COSTRAL</td>
                                            <td>Z1</td>  
                                            <td>18</td>
                                            <td>750</td>
                                            <td>13500</td>
                                            <td>
                                              <input type="radio" value="13500" name="prix"/>
                                              <input type="hidden" value="GRILL COSTRAL 13500"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>GRILL COSTAL F/OBLIQUE</td>
                                            <td>Z1</td>  
                                            <td>21</td>
                                            <td>750</td>
                                            <td>15750</td>
                                            <td>
                                              <input type="radio" value="15750" name="prix"/>
                                              <input type="hidden" value="GRILL COSTAL F/OBLIQUE 15750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>HANCHE PROFIL+BASSIN DE FACE</td>
                                            <td>Z1</td>  
                                            <td>21</td>
                                            <td>750</td>
                                            <td>15750</td>
                                            <td>
                                              <input type="radio" value="15750" name="prix"/>
                                              <input type="hidden" value="HANCHE PROFIL+BASSIN DE FACE 15750"  name="motif"/>
                                            </td>
                                    </tr>   
                                    <tr>
                                            <td>HANCHE F/OBLIQUE</td>
                                            <td>Z1</td>  
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="HANCHE F/OBLIQUE 9750"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO HEMITHORAX</td>
                                            <td>Z1</td>  
                                            <td>12</td>
                                            <td>750</td>
                                            <td>9000</td>
                                            <td>
                                              <input type="radio" value="9000" name="prix"/>
                                              <input type="hidden" value="RADIO HEMITHORAX 9000"  name="motif"/>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>RADIO HIRTZ</td>
                                            <td>Z1</td>  
                                            <td>12</td>
                                            <td>750</td>
                                            <td>9000</td>
                                            <td>
                                              <input type="radio" value="9000" name="prix"/>
                                              <input type="hidden" value="RADIO HIRTZ 9000"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>H S G</td>
                                            <td>Z1</td>  
                                            <td>33</td>
                                            <td>750</td>
                                            <td>24750</td>
                                            <td>
                                              <input type="radio" value="24750" name="prix"/>
                                              <input type="hidden" value="H S G 24750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO JAMBE F/P</td>
                                            <td>Z1</td>  
                                            <td>12</td>
                                            <td>750</td>
                                            <td>9000</td>
                                            <td>
                                              <input type="radio" value="9000" name="prix"/>
                                              <input type="hidden" value="RADIO JAMBE F/P 9000"  name="motif"/>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>LAVEMENT BARYTE</td>
                                            <td>Z1</td>  
                                            <td>41</td>
                                            <td>750</td>
                                            <td>30750</td>
                                            <td>
                                              <input type="radio" value="30750" name="prix"/>
                                              <input type="hidden" value="LAVEMENT BARYTE 30750"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO LOMBAIRE F ET + OBLIQUE 3/4</td>
                                            <td>Z1</td>  
                                            <td>23</td>
                                            <td>750</td>
                                            <td>17250</td>
                                            <td>
                                              <input type="radio" value="17250" name="prix"/>
                                              <input type="hidden" value="RADIO LOMBAIRE F ET + OBLIQUE 3/4 17250"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO MAIN F/OBLIQUE</td>
                                            <td>Z1</td>  
                                            <td>8</td>
                                            <td>750</td>
                                            <td>6000</td>
                                            <td>
                                              <input type="radio" value="6000" name="prix"/>
                                              <input type="hidden" value="RADIO MAIN F/OBLIQUE 6000"  name="motif"/>
                                            </td>
                                    </tr>   
                                    <tr>
                                            <td>RADIO MASTOIDE (SHULLER)</td>
                                            <td>Z1</td>  
                                            <td>20</td>
                                            <td>750</td>
                                            <td>15000</td>
                                            <td>
                                              <input type="radio" value="15000" name="prix"/>
                                              <input type="hidden" value="RADIO MASTOIDE (SHULLER)15000"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO MAXILLAIRE DEFILE D'UN COTE</td>
                                            <td>Z1</td>  
                                            <td>11</td>
                                            <td>750</td>
                                            <td>8250</td>
                                            <td>
                                              <input type="radio" value="8250" name="prix"/>
                                              <input type="hidden" value="RADIO MAXILLAIRE DEFILE D'UN COTE 8250"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO MAXILLAIRE DEFILE DEUX COTE</td>
                                            <td>Z1</td>  
                                            <td>19</td>
                                            <td>750</td>
                                            <td>14250</td>
                                            <td>
                                              <input type="radio" value="14250" name="prix"/>
                                              <input type="hidden" value="RADIO MAXILLAIRE DEFILE DEUX COTE 14250"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO DES DEUX MEMBRE INFERIEURS</td>
                                            <td>Z1</td>  
                                            <td>53</td>
                                            <td>750</td>
                                            <td>39750</td>
                                            <td>
                                              <input type="radio" value="39750" name="prix"/>
                                              <input type="hidden" value="RADIO DES DEUX MEMBRE INFERIEURS 39750"  name="motif"/>
                                            </td>
                                    </tr>   
                                    <tr>
                                            <td>RADIO OMOPLATE</td>
                                            <td>Z1</td>  
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="RADIO OMOPLATE 9750"  name="motif"/>
                                            </td>
                                    </tr>    
                                    <tr>
                                            <td>RADIO ORTEILS</td>
                                            <td>Z1</td>  
                                            <td>8</td>
                                            <td>750</td>
                                            <td>6000</td>
                                            <td>
                                              <input type="radio" value="6000" name="prix"/>
                                              <input type="hidden" value="RADIO ORTEILS 6000"  name="motif"/>
                                            </td>
                                    </tr>    
                                    <tr>
                                            <td>RADIO DES OS PROPRE DU NEZ</td>
                                            <td>Z1</td>  
                                            <td>11</td>
                                            <td>750</td>
                                            <td>8250</td>
                                            <td>
                                              <input type="radio" value="8250" name="prix"/>
                                              <input type="hidden" value="RADIO DES OS PROPRE DU NEZ 8250"  name="motif"/>
                                            </td>
                                    </tr>  
                                    <tr>
                                            <td>RADIO PIED F/OBLIQUE</td>
                                            <td>Z1</td>  
                                            <td>11</td>
                                            <td>750</td>
                                            <td>8250</td>
                                            <td>
                                              <input type="radio" value="8250" name="prix"/>
                                              <input type="hidden" value="RADIO PIED F/OBLIQUE 8250"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO POIGNET F/P</td>
                                            <td>Z1</td>  
                                            <td>6</td>
                                            <td>750</td>
                                            <td>6000</td>
                                            <td>
                                              <input type="radio" value="6000" name="prix"/>
                                              <input type="hidden" value="RADIO POIGNET F/P 6000"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO PULMONAIRE DE FACE</td>
                                            <td>Z1</td>  
                                            <td>12</td>
                                            <td>750</td>
                                            <td>9000</td>
                                            <td>
                                              <input type="radio" value="9000" name="prix"/>
                                              <input type="hidden" value="RADIO PULMONAIRE DE FACE 9000"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO PULMONAIRE F/P</td>
                                            <td>Z1</td>  
                                            <td>14</td>
                                            <td>750</td>
                                            <td>10500</td>
                                            <td>
                                              <input type="radio" value="10500" name="prix"/>
                                              <input type="hidden" value="RADIO PULMONAIRE F/P 10500"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO PULMONAIRE F</td>
                                            <td>Z1</td>  
                                            <td>7</td>
                                            <td>750</td>
                                            <td>5250</td>
                                            <td>
                                              <input type="radio" value="5250" name="prix"/>
                                              <input type="hidden" value="RADIO PULMONAIRE F 5250"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO RACHIS DORSO-LOMBAIRE</td>
                                            <td>Z1</td>  
                                            <td>34</td>
                                            <td>750</td>
                                            <td>25000</td>
                                            <td>
                                              <input type="radio" value="25000" name="prix"/>
                                              <input type="hidden" value="RADIO RACHIS DORSO-LOMBAIRE 25000"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO RACHIS LOMBAIRE F/P 3/4</td>
                                            <td>Z1</td>  
                                            <td>26</td>
                                            <td>750</td>
                                            <td>19500</td>
                                            <td>
                                              <input type="radio" value="19500" name="prix"/>
                                              <input type="hidden" value="RADIO RACHIS LOMBAIRE F/P 3/4 19500"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO RACHIS CERVICAL F/P ET OBLIQUE 3/4</td>
                                            <td>Z1</td>  
                                            <td>17</td>
                                            <td>750</td>
                                            <td>12750</td>
                                            <td>
                                              <input type="radio" value="12750" name="prix"/>
                                              <input type="hidden" value="RADIO RACHIS CERVICAL F/P ET OBLIQUE 3/4 12750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO RACHIS CERVICAL F/P </td>
                                            <td>Z1</td>  
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="RADIO RACHIS CERVICAL F/P 9750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO RACHIS CERVICAL ATLAS AXIS</td>
                                            <td>Z1</td>  
                                            <td>17</td>
                                            <td>750</td>
                                            <td>12750</td>
                                            <td>
                                              <input type="radio" value="12750" name="prix"/>
                                              <input type="hidden" value="RADIO RACHIS CERVICAL ATLAS AXIS 12750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO RACHIS DORSAL F/P</td>
                                            <td>Z1</td>  
                                            <td>17</td>
                                            <td>750</td>
                                            <td>12750</td>
                                            <td>
                                              <input type="radio" value="12750" name="prix"/>
                                              <input type="hidden" value="RADIO RACHIS DORSAL F/P  12750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO RACHIS LOMBAIRE F/P</td>
                                            <td>Z1</td>  
                                            <td>17</td>
                                            <td>750</td>
                                            <td>12750</td>
                                            <td>
                                              <input type="radio" value="12750" name="prix"/>
                                              <input type="hidden" value="RADIO RACHIS LOMBAIRE F/P 12750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO ROTULE F/P</td>
                                            <td>Z1</td>  
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="RADIO ROTULE F/P 9750"  name="motif"/>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>RADIO SACRUM F/P</td>
                                            <td>Z1</td>  
                                            <td>20</td>
                                            <td>750</td>
                                            <td>15000</td>
                                            <td>
                                              <input type="radio" value="15000" name="prix"/>
                                              <input type="hidden" value="RADIO SACRUM F/P 15000"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>SELLE TURCIQUE UN COTE</td>
                                            <td>Z1</td>  
                                            <td>8</td>
                                            <td>750</td>
                                            <td>6000</td>
                                            <td>
                                              <input type="radio" value="6000" name="prix"/>
                                              <input type="hidden" value="SELLE TURCIQUE UN COTE 6000"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO STERNUM P ET OBLIQUE 3/4</td>
                                            <td>Z1</td>  
                                            <td>19</td>
                                            <td>750</td>
                                            <td>14250</td>
                                            <td>
                                              <input type="radio" value="14250" name="prix"/>
                                              <input type="hidden" value="RADIO STERNUM P ET OBLIQUE 3/4 14250"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>TELECOEUR F</td>
                                            <td>Z1</td>  
                                            <td>13</td>
                                            <td>750</td>
                                            <td>9750</td>
                                            <td>
                                              <input type="radio" value="9750" name="prix"/>
                                              <input type="hidden" value="TELECOEUR F 9750"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO TELE CRANE</td>
                                            <td>Z1</td>  
                                            <td>19</td>
                                            <td>750</td>
                                            <td>14250</td>
                                            <td>
                                              <input type="radio" value="14250" name="prix"/>
                                              <input type="hidden" value="RADIO TELE CRANE 14250"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>TRANSIT GRASTRO DUODENAL</td>
                                            <td>Z1</td>  
                                            <td>42</td>
                                            <td>750</td>
                                            <td>31500</td>
                                            <td>
                                              <input type="radio" value="31500" name="prix"/>
                                              <input type="hidden" value="TRANSIT GRASTRO DUODENAL 31500"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>RADIO THORAX OSSEUX</td>
                                            <td>Z1</td>  
                                            <td>18</td>
                                            <td>750</td>
                                            <td>13500</td>
                                            <td>
                                              <input type="radio" value="13500" name="prix"/>
                                              <input type="hidden" value="RADIO THORAX OSSEUX 13500"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>TRANSIT OESOPHAGIEN</td>
                                            <td>Z1</td>  
                                            <td>36</td>
                                            <td>750</td>
                                            <td>27000</td>
                                            <td>
                                              <input type="radio" value="27000" name="prix"/>
                                              <input type="hidden" value="TRANSIT OESOPHAGIEN 27000"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>TRANSIT OESO GRASTRO DUODENAL</td>
                                            <td>Z1</td>  
                                            <td>50</td>
                                            <td>750</td>
                                            <td>37500</td>
                                            <td>
                                              <input type="radio" value="37500" name="prix"/>
                                              <input type="hidden" value="TRANSIT OESO GRASTRO DUODENAL 37500"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>U C R</td>
                                            <td>Z1</td>  
                                            <td>39</td>
                                            <td>750</td>
                                            <td>29250</td>
                                            <td>
                                              <input type="radio" value="29250" name="prix"/>
                                              <input type="hidden" value="U C R 29250"  name="motif"/>
                                            </td>
                                    </tr> 
                                    <tr>
                                            <td>U I V</td>
                                            <td>Z1</td>  
                                            <td>53</td>
                                            <td>750</td>
                                            <td>39750</td>
                                            <td>
                                              <input type="radio" value="39750" name="prix"/>
                                              <input type="hidden" value="U I V 39750"  name="motif"/>
                                            </td>
                                    </tr> 
                                </table>
                            </div>
                        <?php
                    }else if ($service['nom'] == "Urgence") {
                        ?>
                            <div class="content">
                                     <h5>Voici les consultations effectués dans le service de dermatologie avec leur option de prix</h5>
                                     <br>
                                    <table>
                                             <tr>
                                                 <td><h6>URGENCE</h6></td>
                                                 <td><h6>Acte</h6></td>
                                                 <td><h6>Qté</h6></td>
                                                 <td><h6>P.U(F CFA)</h6></td>
                                                 <td><h6>Montant(F CFA)</h6></td>
                                             </tr>
                                             <tr>
                                                     <td>THORACO-BRACHIAL</td>
                                                     <td>K1</td>
                                                     <td>40</td>
                                                     <td>750</td>
                                                     <td>30000</td>
                                                     <td>
                                                       <input type="radio" value="30000" name="prix"/>
                                                       <input type="hidden" value="THORACO-BRACHIAL 30000"           name="motif"/>
                                                     </td>
                                             </tr>  
                                             <tr>
                                                     <td>ABLATION DE CORPS ETRANGER SO</td>
                                                     <td>K1</td>
                                                     <td>60</td>
                                                     <td>750</td>
                                                     <td>45000</td>
                                                     <td>
                                                       <input type="radio" value="45000" name="prix"/>
                                                       <input type="hidden" value="ABLATION DE CORPS          ETRANGER SO 45000"  name="motif"/>
                                                     </td>
                                             </tr>       
                                             <tr>
                                                     <td>ABLATION DE KYSTE</td>
                                                     <td>K1</td>
                                                     <td>20</td>
                                                     <td>750</td>
                                                     <td>15000</td>
                                                     <td>
                                                       <input type="radio" value="15000" name="prix"/>
                                                       <input type="hidden" value="ABLATION DE KYSTE           15000"  name="motif"/>
                                                     </td>
                                             </tr>  
                                             <tr>
                                                     <td>ABLATION D'ONGLE INCARNE</td>
                                                     <td>K1</td>
                                                     <td>30</td>
                                                     <td>750</td>
                                                     <td>22500</td>
                                                     <td>
                                                       <input type="radio" value="22500" name="prix"/>
                                                       <input type="hidden" value="ABLATION D'ONGLE INCARNE           22500"  name="motif"/>
                                                     </td>
                                             </tr>   
                                             <tr>
                                                     <td>ABLATION DE LIPONE</td>
                                                     <td>K1</td>
                                                     <td>20</td>
                                                     <td>750</td>
                                                     <td>15000</td>
                                                     <td>
                                                       <input type="radio" value="15000" name="prix"/>
                                                       <input type="hidden" value="ABLATION DE LIPONE           15000"  name="motif"/>
                                                     </td>
                                             </tr>
                                             <tr>
                                                     <td>ABLATION DE NODULE</td>
                                                     <td>K1</td>
                                                     <td>20</td>
                                                     <td>750</td>
                                                     <td>15000</td>
                                                     <td>
                                                       <input type="radio" value="15000" name="prix"/>
                                                       <input type="hidden" value="ABLATION DE NODULE           15000"  name="motif"/>
                                                     </td>
                                             </tr>      
                                             <tr>
                                                     <td>ABLATION DE PLATRE</td>
                                                     <td>K1</td>
                                                     <td>2</td>
                                                     <td>750</td>
                                                     <td>1500</td>
                                                     <td>
                                                       <input type="radio" value="1500" name="prix"/>
                                                       <input type="hidden" value="ABLATION DE PLATRE           1500"  name="motif"/>
                                                     </td>
                                             </tr>    
                                             <tr>
                                                     <td>ANNEAU DE TANTOU</td>
                                                     <td>K1</td>
                                                     <td>16</td>
                                                     <td>750</td>
                                                     <td>12000</td>
                                                     <td>
                                                       <input type="radio" value="12000" name="prix"/>
                                                       <input type="hidden" value="ANNEAU DE TANTOU 12000"           name="motif"/>
                                                     </td>
                                             </tr>  
                                             <tr>
                                                     <td>ILLIRI SEPTIQUE + LAVA</td>
                                                     <td>K1</td>
                                                     <td>40</td>
                                                     <td>750</td>
                                                     <td>30000</td>
                                                     <td>
                                                       <input type="radio" value="30000" name="prix"/>
                                                       <input type="hidden" value="ILLIRI SEPTIQUE + LAVA          30000"  name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>BOTTE PLATRE</td>
                                                     <td>K1</td>
                                                     <td>16</td>
                                                     <td>750</td>
                                                     <td>12000</td>
                                                     <td>
                                                       <input type="radio" value="12000" name="prix"/>
                                                       <input type="hidden" value="BOTTE PLATRE 12000"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>BRACHIO PALMERE</td>
                                                     <td>K1</td>
                                                     <td>20</td>
                                                     <td>750</td>
                                                     <td>15000</td>
                                                     <td>
                                                       <input type="radio" value="15000" name="prix"/>
                                                       <input type="hidden" value="BRACHIO PALMERE 15000"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>CIRCONCISION</td>
                                                     <td>K1</td>
                                                     <td>20</td>
                                                     <td>750</td>
                                                     <td>22500</td>
                                                     <td>
                                                       <input type="radio" value="22500" name="prix"/>
                                                       <input type="hidden" value="CIRCONCISION 22500"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>CONSULTATION URGENCE</td>
                                                     <td>C1</td>
                                                     <td>1</td>
                                                     <td>4500</td>
                                                     <td>4500</td>
                                                     <td>
                                                       <input type="radio" value="4500" name="prix"/>
                                                       <input type="hidden" value="CONSULTATION URGENCE          4500"  name="motif"/>
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
                                                       <input type="hidden" value="COMPLEMENT CONSULTATION          REFE 100"  name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>CULOTTE PLATREE</td>
                                                     <td>K1</td>
                                                     <td>40</td>
                                                     <td>750</td>
                                                     <td>30000</td>
                                                     <td>
                                                       <input type="radio" value="30000" name="prix"/>
                                                       <input type="hidden" value="CULOTTE PLATREE 30000"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>EXCISION</td>
                                                     <td>K1</td>
                                                     <td>60</td>
                                                     <td>750</td>
                                                     <td>45000</td>
                                                     <td>
                                                       <input type="radio" value="45000" name="prix"/>
                                                       <input type="hidden" value="CULOTTE PLATREE 45000"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>GANT PLATRE</td>
                                                     <td>K1</td>
                                                     <td>10</td>
                                                     <td>750</td>
                                                     <td>7500</td>
                                                     <td>
                                                       <input type="radio" value="7500" name="prix"/>
                                                       <input type="hidden" value="ANT PLATRE 7500"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>GERDY PLATRE</td>
                                                     <td>K1</td>
                                                     <td>40</td>
                                                     <td>750</td>
                                                     <td>30000</td>
                                                     <td>
                                                       <input type="radio" value="30000" name="prix"/>
                                                       <input type="hidden" value="GERDY PLATRE 30000"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>GLYCEMIE CAPILLAIRE</td>
                                                     <td>B1</td>
                                                     <td>7</td>
                                                     <td>150</td>
                                                     <td>1050</td>
                                                     <td>
                                                       <input type="radio" value="1050" name="prix"/>
                                                       <input type="hidden" value="GLYCEMIE CAPILLAIRE          1050"  name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>INCISION D'ABCES</td>
                                                     <td>K1</td>
                                                     <td>10</td>
                                                     <td>750</td>
                                                     <td>7500</td>
                                                     <td>
                                                       <input type="radio" value="7500" name="prix"/>
                                                       <input type="hidden" value="INCISION D'ABCES 7500"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>INCISION DE PANARIE</td>
                                                     <td>K1</td>
                                                     <td>4</td>
                                                     <td>750</td>
                                                     <td>3000</td>
                                                     <td>
                                                       <input type="radio" value="3000" name="prix"/>
                                                       <input type="hidden" value="INCISION DE PANARIE          3000"  name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>INCISION DE PHLEGNON ABCES</td>
                                                     <td>K1</td>
                                                     <td>10</td>
                                                     <td>750</td>
                                                     <td>7500</td>
                                                     <td>
                                                       <input type="radio" value="7500" name="prix"/>
                                                       <input type="hidden" value="INCISION DE PHLEGNON          ABCES 7500"  name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>LOMBOSTAT</td>
                                                     <td>K1</td>
                                                     <td>30</td>
                                                     <td>750</td>
                                                     <td>22500</td>
                                                     <td>
                                                       <input type="radio" value="22500" name="prix"/>
                                                       <input type="hidden" value="LOMBOSTAT 22500"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>MAGNO-CLINIQUE</td>
                                                     <td>K1</td>
                                                     <td>20</td>
                                                     <td>750</td>
                                                     <td>15000</td>
                                                     <td>
                                                       <input type="radio" value="15000" name="prix"/>
                                                       <input type="hidden" value="MAGNO-CLINIQUE 15000"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>MANCHETTE-PLATREE</td>
                                                     <td>K1</td>
                                                     <td>20</td>
                                                     <td>750</td>
                                                     <td>15000</td>
                                                     <td>
                                                       <input type="radio" value="15000" name="prix"/>
                                                       <input type="hidden" value="MANCHETTE-PLATREEE          15000"  name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>MAXIBOTTE</td>
                                                     <td>K1</td>
                                                     <td>20</td>
                                                     <td>750</td>
                                                     <td>15000</td>
                                                     <td>
                                                       <input type="radio" value="15000" name="prix"/>
                                                       <input type="hidden" value="MAXIBOTTE 15000"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>MINERVE PLATREE</td>
                                                     <td>K1</td>
                                                     <td>30</td>
                                                     <td>750</td>
                                                     <td>22500</td>
                                                     <td>
                                                       <input type="radio" value="22500" name="prix"/>
                                                       <input type="hidden" value="MINERVE PLATREE 22500"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>OXYGENE A LUNETTE PAR HEURE</td>
                                                     <td>O1</td>
                                                     <td>1</td>
                                                     <td>3000</td>
                                                     <td>3000</td>
                                                     <td>
                                                       <input type="radio" value="3000" name="prix"/>
                                                       <input type="hidden" value="OXYGENE A LUNETTE PAR          HEURE 3000"  name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>OXYGENE PAR HEURE</td>
                                                     <td>O1</td>
                                                     <td>1</td>
                                                     <td>3000</td>
                                                     <td>3000</td>
                                                     <td>
                                                       <input type="radio" value="3000" name="prix"/>
                                                       <input type="hidden" value="OXYGENE PAR HEURE 3000"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>PANSEMENTS DIVERS</td>
                                                     <td>S1</td>
                                                     <td>1</td>
                                                     <td>750</td>
                                                     <td>750</td>
                                                     <td>
                                                       <input type="radio" value="750" name="prix"/>
                                                       <input type="hidden" value="PANSEMENTS DIVERS 750"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>PELVI-PEDIEUX</td>
                                                     <td>K1</td>
                                                     <td>40</td>
                                                     <td>750</td>
                                                     <td>30000</td>
                                                     <td>
                                                       <input type="radio" value="30000" name="prix"/>
                                                       <input type="hidden" value="PELVI-PEDIEUX 30000"           name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>PLATRE CUIRO PEDIEUX</td>
                                                     <td>K1</td>
                                                     <td>35</td>
                                                     <td>750</td>
                                                     <td>26250</td>
                                                     <td>
                                                       <input type="radio" value="26250" name="prix"/>
                                                       <input type="hidden" value="PLATRE CUIRO PEDIEUX          26250"  name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>SECTION FREIN DE LANGUE</td>
                                                     <td>K1</td>
                                                     <td>2</td>
                                                     <td>750</td>
                                                     <td>1500</td>
                                                     <td>
                                                       <input type="radio" value="1500" name="prix"/>
                                                       <input type="hidden" value="SECTION FREIN DE LANGUE          1500"  name="motif"/>
                                                     </td>
                                             </tr> 
                                             <tr>
                                                     <td>URGENCE SOINS</td>
                                                     <td>S1</td>
                                                     <td>3</td>
                                                     <td>1500</td>
                                                     <td>4500</td>
                                                     <td>
                                                       <input type="radio" value="4500" name="prix"/>
                                                       <input type="hidden" value="URGENCE SOINS 4500"           name="motif"/>
                                                     <td>
                                             </tr> 
                                             <tr>
                                                     <td>URGENCE SOINS</td>
                                                     <td>S2</td>
                                                     <td>3</td>
                                                     <td>1500</td>
                                                     <td>4500</td>
                                                     <td>
                                                       <input type="radio" value="4500" name="prix"/>
                                                       <input type="hidden" value="URGENCE SOINS 4500"           name="motif"/>
                                                     <td>
                                             </tr> 
                                             <tr>
                                                     <td>SUTURE DES PLAIES(LE POINT)</td>
                                                     <td>S2</td>
                                                     <td>1</td>
                                                     <td>1500</td>
                                                     <td>1500</td>
                                                     <td>
                                                       <input type="radio" value="1500" name="prix"/>
                                                       <input type="hidden" value="SUTURE DES PLAIES(LE          POINT) 1500"  name="motif"/>
                                                     <td>
                                             </tr> 
                                    </table>
                            </div>
                        <?php 
                    }
                    ?>
                    <br>
                    <div class="options">
                        <h3>Que desirez vous faire ?</h3>
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
                      <!--  <h3 id="tables mt-2 section-title">Le planning des rendez-vous</h3>-->
                        <?php
                            if (!empty($messageErreur)) { 
                            ?>
                            <div class="badge security">
                                <?= $messageErreur ?>
                            </div>
                            <?php }?>
                        <h4 class="text-left my-3">Veuillez prendre votre rendez-vous</h4>
    
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
                            <table class="services-table">
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
                                    <td>Matiner</td>
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
                                    <td>Soirer</td>
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
                                <div class="p-3 shadow rounded content">
                                    <div class="row d-flex justify-content-end">
                                        <button class="col-1 btn-action" id="close-rdv">
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
                                <div class="p-3 shadow rounded content">
                                    <div class="row d-flex justify-content-end">
                                        <button class="col-1 btn-action" id="close-paie">
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

<?php 
    include "layouts/footer.php";

?>