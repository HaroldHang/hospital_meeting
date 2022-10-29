<?php
    $pageTitle  = "Service";
    include "layouts/header.php";
    include "layouts/navbar.php";
?>



<div class="container">
    
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <!-- table -->
                <?php include "layouts/sidenav.php";?>
                
                <div class="col-lg-8">
                    <h2 class="section-title"><?= $service['nom'] ?></h2>
                    <?php 
                        if ($service['nom'] == "Cardiologie") {
                    ?>
                        <div class="content">
                            <p> Veuillez chosir votre option de prix</p>
                            <table>
                                <tr>
                                <td><h4>CARDIOLOGIE</h4></td>
                                <td><h4>Acte</h4></td>
                                <td><h4>Qté</h4></td>
                                <td><h4>P.U(F CFA)</h4></td>
                                <td><h4>Montant(F CFA)</h4></td>
                                <td><h4>Choix</h4></td>
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
                            <h3>Presentation des consultations effectués dans le service d'Ophtamologie</h3>
                            <table>
                                <tr>
                                    <td><h4>SERVICE D'OPHTAMOLOGIE</h4></td>
                                    <td><h4>Acte</h4></td>
                                    <td><h4>Qté</h4></td>
                                    <td><h4>P.U(F CFA)</h4></td>
                                    <td><h4>Montant(F CFA)</h4></td>
                                </tr>
                                <tr>
                                   <td>ABLATION DE CORPS ETRANGER</td>
                                   <td>K1</td>
                                   <td>6</td>
                                   <td>750</td>
                                   <td>4500</td>
                                </tr>
                                <tr>
                                    <td>ABLATION DU CILS</td>
                                    <td>S1</td>
                                    <td>6</td>
                                    <td>750</td>
                                    <td>4500</td>
                                </tr>
                                <tr>
                                    <td>ABLATION DU CORPS ETRANGER</td>
                                    <td>K4</td>
                                    <td>2</td>
                                    <td>750</td>
                                    <td>1500</td>
                                </tr>
                                <tr>
                                    <td>CONSULTATION OPHTALMO</td>
                                    <td>C1</td>
                                    <td>1</td>
                                    <td>5250</td>
                                    <td>5250</td>
                                </tr>
                                <tr>
                                    <td>COMPLEMENT CONSULTATION REFE</td>
                                    <td>C7</td>
                                    <td>1</td>
                                    <td>100</td>
                                    <td>100</td>
                                </tr>
                                <tr>
                                    <td>CURE CHALAZION</td>
                                    <td>S1</td>
                                    <td>30</td>
                                    <td>750</td>
                                    <td>22500</td>
                                </tr>
                                 <tr>
                                    <td>CURE DE PTENYGION</td>
                                    <td>S1</td>
                                    <td>80</td>
                                    <td>750</td>
                                    <td>60000</td>
                                 </tr>
                                 <tr>
                                    <td>EVISCERTION</td>
                                    <td>K1</td>
                                    <td>80</td>
                                    <td>750</td>
                                    <td>60000</td>
                                 </tr>
                                 <tr>
                                    <td>FOND DE L'OEIL</td>
                                    <td>K1</td>
                                    <td>6</td>
                                    <td>750</td>
                                    <td>4500</td>
                                 </tr>
                                 <tr>
                                    <td>INJECTION SOUS CONJONCTIVALE</td>
                                    <td>K1</td>
                                    <td>2</td>
                                    <td>750</td>
                                    <td>1500</td>
                                 </tr>
                                 <tr>
                                    <td>REFRACTO-AUTOMATIQUE</td>
                                    <td>K4</td>
                                    <td>6</td>
                                    <td>750</td>
                                    <td>4500</td>
                                 </tr>
                                 <tr>
                                    <td>SUTURE DU CORNEE</td>
                                    <td>S1</td>
                                    <td>40</td>
                                    <td>750</td>
                                    <td>30000</td>
                                 </tr>
                            </table>
                        </div>
                    <?php 
                    }
                    ?>
                    <div class="content">
                        <h2 id="tables">Rendez-vous</h2>
                        <?php
                            if (!empty($messageErreur)) { 
                            ?>
                            <div class="badge security">
                                <?= $messageErreur ?>
                            </div>
                            <?php }?>
                        <h3 class="section-title">Veuillez prendre votre rendez-vous</h3>
    
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

                </div>
            </div>
            
          </div>
    </section>
</div>