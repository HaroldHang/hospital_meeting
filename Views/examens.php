<?php 
    $pageTitle  = "Examens";
    include "layouts/header.php";
    if (isset($estInscrit)) {
        //session_start();
    }
    if (isset($_SESSION['client'])) {
        $_SESSION['client_active'] = true;
    }
    include "layouts/navbar.php";
?>



<div class="home sup-container">
  <!-- topics -->
  <section class="section pb-0">
    <div class="container">
        
        
        
        <div class="row">
          <!-- topic -->
          <?php include "layouts/sidenav.php";?>
          <div class="col-lg-8 other-side">
            
            <h2 class="section-title">Mes examens</h2>
           
            <div class="row">
                <div class="content">

                        <table>
                                <thead>
                                        <tr>
                                            <th align="center">N°</th>
                                            <th align="center">
                                                Nom
                                                de l'examen
                                            </th>
                                            <th align="center">
                                                Service
                                                
                                            </th>
                                            <th align="center">
                                                Date
                                                
                                            </th>
                                            <th align="center">
                                                Status
                                                
                                            </th>
                                            
                                            <th align="center">
                                                Resultats
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
                                    
                                        <?php $i = 1; foreach ($exams as $exam) {?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $exam['nom'] ?></td>
                                                <td> <?= $exam['nom_service'] ?> </td>
                                                <td> <?= $exam['date'] ?> </td>
                                                <td> <span class="badge <?= $exam['status'] == 'En cours' ? 'depricated' : 'changed' ?>"><?= $exam['status'] ?></span> </td>
                                                <td> 
                                                    <form method="GET" action="download?exam=<?= urlencode($exam['exam_file'])?>" target="_blank">
                                                        <?php if ($exam['status'] == 'En cours') { ?>
                                                        <span  class="badge <?= $exam['status'] == 'En cours' ? 'depricated' : 'changed' ?>"><?= $exam['status'] == 'En cours' ? 'Indisponible' : 'Telecharger' ?></span>
                                                        <?php } else { ?>
                                                            <button type="submit" class="btn btn-primary" id="exam-download" data-exam="<?= $exam['exam_file']?>">
                                                                Telecharger
                                                            </button>
                                                            
                                                        <?php } ?>

                                                    </form>  
                                                </td>
                                            </tr>
                                        <?php $i++; }?>
                              
                
                                    </tbody>
                        </table>
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
