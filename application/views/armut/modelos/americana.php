
    <!-- CASAS START -->
    <div class="py-5 wow fadeInUp">


    <!-- viviendas AMERICANA --> 
        <div class="container py-5">
            <div class="text-center pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!--<h5 class="fw-bold text-primary text-uppercase">Viviendas Americanas</h5>
                <h1 class="mb-0">Prefabicadas a tu gusto!</h1>-->
                <h1 class="mb-0">Modelo Americana</h1>
            </div>


            <div class="row g-5">




            <?php foreach ($casa_americana as $americana){?>
                

                <div class="col-lg-4 wow slideInUp">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/casas/Americana/<?php echo $americana->id;?>/casa1.webp" alt="vivienda americana">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="<?php echo base_url();?>modelos/casa_Americana/<?php echo $americana->id;?>">Americana</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="fas fa-bed text-primary me-1"></i>Dormitorio <?php echo $americana->dormitorio;?></small>
                                <small class="me-3"><i class="fas fa-shower text-primary me-1"></i>Baño <?php echo $americana->baño;?></small>
                                <?php if($americana->cochera !=0){?> 
                                    <small class="me-3"><i class="fas fa-car text-primary me-1"></i>Cochera <?php echo $americana->cochera;?></small>
                                <?php }?>    
                                <small><i class="fas fa-home text-primary me-1"></i><?php echo $americana->metro;?>m<sup>2</sup></small>
                            </div>
                            <h4 class="mb-3">Vivienda Americana</h4>
                            <p>La vivienda cuenta con paredes revestidas en fibrocemento por fuera y Durlock.</p>
                            <a class="text-uppercase" href="<?php echo base_url();?>modelos/casa_Americana/<?php echo $americana->id;?>">Ver más <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                
                <?php } ?>






                

            </div>


            <!-- <div class=" text-center pb-3 mb-5 mx-auto" 
        
               <div style="margin-top:30px;">

               style="max-width: 600px; margin-top:20px;"
        
            -->
            <div style="margin-top:30px;">

                    <div class="col-12 wow slideInUp"  >
                            <nav aria-label="Page navigation" >
                              <ul class="pagination pagination-lg m-0">
                                <li class="page-item disabled">
                                  <a class="page-link rounded-0" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url();?>modelos/americana2">2</a></li>
                                
                                <li class="page-item">
                                  <a class="page-link rounded-0" href="<?php echo base_url();?>modelos/americana2" aria-label="Next">
                                    <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                     </div>
            </div>











        </div>






       





    </div>


    <!-- CASAS END -->




