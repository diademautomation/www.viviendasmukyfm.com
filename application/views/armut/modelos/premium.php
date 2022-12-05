<!-- CASAS START -->
<div class="container-fluid py-5 wow fadeInUp">





         <!-- viviendas PREMIUM --> 

         <div class="container py-5">
            <div class="text-center pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Modelo Premium</h1>
            </div>
             <div class="row g-5">








             <?php foreach ($casa_premium as $premium){?>



                

                <div class="col-lg-4 wow slideInUp">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/casas/Premium/<?php echo $premium->id;?>/casa1.webp" alt="vivienda premium">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="<?php echo base_url();?>modelos/casa_Premium/<?php echo $premium->id;?>">Premium</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="fas fa-bed text-primary me-1"></i>Dormitorio <?php echo $premium->dormitorio;?></small>
                                <small class="me-3"><i class="fas fa-shower text-primary me-1"></i>Baño <?php echo $premium->baño;?></small>
                                <?php if($premium->cochera !=0){?> 
                                    <small class="me-3"><i class="fas fa-car text-primary me-1"></i>Cochera <?php echo $premium->cochera;?></small>
                                <?php }?>    
                                <small><i class="fas fa-home text-primary me-1"></i><?php echo $premium->metro;?>m<sup>2</sup></small>
                            </div>
                            <h4 class="mb-3">Vivienda Premium</h4>
                            <p>La vivienda cuenta con paredes revestidas en fibrocemento por fuera y Durlock.</p>
                            <a class="text-uppercase" href="<?php echo base_url();?>modelos/casa_Premium/<?php echo $premium->id;?>">Ver más<i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>



            <?php } ?>












            </div>

        </div>


</div>
<!-- CASAS END -->   