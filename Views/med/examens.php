
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
                
</div>