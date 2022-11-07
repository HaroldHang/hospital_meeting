
<div class="col-lg-8 other-side" id="paie-section">
                <div class="content">
                    <h2 class="section-title"><?= $service['nom'] ?></h2>
                    
                    <h3 id="tables">Paiements Effectues</h3>
                    
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
                                        Nom Client
                                        
                                    </th>
                                    <th align="center">
                                        Prenom Client
                                        
                                    </th>
                                    <th align="center">
                                        Nom Patient
                                        
                                    </th>
                                    <th align="center">
                                        Prenom Patient
                                        
                                    </th>
                                    
                                    <th align="center">
                                        Consultation
                                    </th>
                                    
                                    <th align="center">
                                        Prix
                                    </th>
                                 
                                </tr>
                              </thead>
                              <tbody id="paie-med">
                               
                      
        
                              </tbody>
                            </table>
                        </div>
                    </div>
            </div>