<?php
    $pageTitle  = "Service";
    include "layouts/header.php";
    include "layouts/navbar.php";
?>



<div class="container">
    
    <section class="section pb-0">
          <div class="container">
            <h2 class="section-title">Nom du Service</h2>
            <h3 class="section-title">Veuillez prendre votre rendez-vous</h3>
            <div class="row">
                <!-- table -->
            </div>
            <div class="content">
                <h5 id="tables">Tables</h5>
                <?php
                      if (!empty($messageErreur)) { 
                    ?>
                    <div class="badge security">
                        <?= $messageErreur ?>
                    </div>
                    <?php }?>
                <p>Colons can be used to align columns.</p>
                <div class="calendar-container" id="calendar">
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
                          <form method="POST" action="index.php?action=inscription">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" id="form-date" name="rdv_date" placeholder="Date" required disabled>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="hour">Hour</label>
                                <input type="text" class="form-control" id="form-hour" name="rdv_hour" placeholder="Heure" disabled>
                             <!--   <input type="hidden" value="<?= $_SESSION['client']['id_client']?>" name="id_patient"/> -->
                              </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="object">Object</label>
                                <textarea type="text" class="form-control" id="object" name="object" placeholder="Decrivez  pourquoi vous preniez ce rendez-vous" required> </textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="submit">Soumettre</button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum minima inventore recusandae nam eveniet, cupiditate sapiente ratione commodi perferendis cumque veniam enim nemo quo vel ipsam blanditiis voluptatem sed error.
            </div>
          </div>
    </section>
</div>