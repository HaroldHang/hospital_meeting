
<div class="col-lg-8 other-side" id="exam-section">
                <div class="content">
                    <h2 class="section-title"><?= $service['nom'] ?></h2>
                    
                    <h3 id="tables">Examens</h3>
                    
                    <div class="medecin-container" >
                            <input type="hidden" id="id_spec" value="<?= $service['id_specialite'] ?>"/>
                            <input type="hidden" id="id_med" value="<?= $_SESSION['medecin']['id_med'] ?>"/>
                            
                            <div>
                                <button id="medLeft" data-view="exam">
                                    <i class="ti-angle-left ml-auto"></i>
                                </button>
                                <span id="medWeek">
                                    Lundi 24 Octobre 2022
                                </span>
                                <button id="medRight" data-view="exam">
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
                                        Description
                                        
                                    </th>
                                    <th align="center">
                                        Patient
                                        
                                    </th>
                                    <th align="center">
                                        Status
                                        
                                    </th>
                                    
                                    <th align="center">
                                        Actions
                                    </th>
                                    
                                    <!--<th align="center">
                                        Prix
                                    </th>

                                    <th align="center">
                                        Actions
                                    </th>-->
                                 
                                </tr>
                              </thead>
                              <tbody id="exam-med">
                               
                      
        
                              </tbody>
                            </table>
                        </div>
                </div>
                <div id="formulaire-examen-termine" class="form-rdv">
                        <div class="container">
                            <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="p-3 shadow rounded content">
                                    <div class="row d-flex justify-content-end">
                                        <button class="col-1 btn-action" id="close-exam">
                                            <i class="ti-close ml-auto"></i>
                                        </button>
                                    </div>
                                <h3 class="section-title">Ajouter un fichier d'examen</h3>
                                <!-- <p>Payer pour prendre votre rendez-vous</p> -->
                                
                                <form method="POST" id="form-exam-submit"  enctype="multipart/form-data" action="index.php?action=terminExam">
                                    <div class="notices tip success-box" id="success-box-paie">
                                        <p>This is a simple tip.</p>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="nom">Ajouter le fichier </label>
                                            <input type="file"  id="exam-file" class="form-control" name="exam-file">
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?= $service['id_specialite'] ?>" id="specId"/>
                                    <input type="hidden" value="<?= $_SESSION['medecin']['id_med'] ?>" id="medId"/>
                                    <input type="hidden" value="" id="examId" name="exam-id"/>
                                    <button type="submit" class="btn btn-primary" id="btn-submit-exam" name="submit">Soumettre</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
</div>