
<div class="col-lg-8 other-side" id="rdv-section">
                <div class="content">
                    <h2 class="section-title"><?= $service['nom'] ?></h2>
                    
                    <h3 id="tables">Mes Rendez-vous</h3>
                    
                    <div class="medecin-container" >
                            <input type="hidden" id="id_spec" value="" />
                            
                            <div>
                                <button id="medLeft" data-view="rdv">
                                    <i class="ti-angle-left ml-auto"></i>
                                </button>
                                <span id="medWeek">
                                    Lundi 24 Octobre 2022
                                </span>
                                <button id="medRight" data-view="rdv">
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

                                    <th align="center">
                                        Actions
                                    </th>
                                 
                                </tr>
                              </thead>
                              <tbody id="rdv-med">
                               
                      
        
                              </tbody>
                            </table>
                        </div>
                </div>
                <div id="formulaire-examen" class="form-rdv">
                        <div class="container">
                            <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="p-5 shadow rounded content">
                                    <div class="row d-flex justify-content-end">
                                        <button class="col-1 btn-action" id="close-exam">
                                            <i class="ti-close ml-auto"></i>
                                        </button>
                                    </div>
                                <h3 class="section-title">Ajouter un examen</h3>
                                <!-- <p>Payer pour prendre votre rendez-vous</p> -->
                                
                                <form method="POST" id="form-exam-submit">
                                    <div class="notices tip success-box" id="success-box-paie">
                                        <p>This is a simple tip.</p>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="nom">Nom de l'examen </label>
                                            <input type="text"  id="exam-name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="object-exam">Description de l'examen </label>
                                        <textarea type="text" class="form-control" id="object-exam" name="objet-exam" placeholder="Description de ce examen" required> </textarea>
                                    </div>
                                    <input type="hidden" value="<?= $service['id_specialite'] ?>" id="specId"/>
                                    <input type="hidden" value="<?= $_SESSION['medecin']['id_med'] ?>" id="medId"/>
                                    <input type="hidden" value="" id="patientId"/>
                                    <button type="submit" class="btn btn-primary" id="btn-submit-exam" name="submit">Soumettre</button>
                                </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
</div>