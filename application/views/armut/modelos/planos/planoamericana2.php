  <!-- Full Screen Search Start -->
  <!--<div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Full Screen Search End -->


    <!-- Blog Start -->
    <!--<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">-->
    <div class="container-fluid py-5 wow fadeInUp">
        <div class="container py-5">
        <div class="text-center pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Modelo Americana</h1>
            </div>
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">


            <?php foreach ($casa_americana as $americana){?>

                <?php if($americana->id > 6){?>


            <!--<div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">-->    
                <div class="col-md-6 wow slideInUp">
                        <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/casas/Americana/planos/<?php echo $americana->id;?>/plano1.webp" alt="plano vivienda americana">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="<?php echo base_url();?>modelos/casa_americana/<?php echo $americana->id;?>">Americana</a>
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
                            <a class="text-uppercase" href="<?php echo base_url();?>modelos/casa_americana/<?php echo $americana->id;?>">Ver más <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <?php } ?>

            <?php } ?>    




                        <!--<div class="col-12 wow slideInUp" data-wow-delay="0.1s">-->               
                        <div class="col-12 wow slideInUp">
                            <nav aria-label="Page navigation">
                              <ul class="pagination pagination-lg m-0">

                                <li class="page-item">
                                  <a class="page-link rounded-0" href="<?php echo base_url();?>modelos/planoamericana" aria-label="Previous">
                                    <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                  </a>
                                </li>

                                <li class="page-item"><a class="page-link" href="<?php echo base_url();?>modelos/planoamericana">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>

                                <li class="page-item disabled">                                                 
                                  <a class="page-link rounded-0" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                  </a>
                                </li>

                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <!--<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>-->
                    <!-- Search Form End -->
    
                    <!-- Category Start -->
                    <!--<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">-->
                    <div class="mb-5 wow slideInUp">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Categorias</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Americana</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="<?php echo base_url();?>modelos/planominimalista"><i class="bi bi-arrow-right me-2"></i>Minimalista</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="<?php echo base_url();?>modelos/planopremium"><i class="bi bi-arrow-right me-2"></i>Premium</a>
                          
                        </div>
                    </div>
                    <!-- Category End -->



    
                    <!-- Recent Post Start -->
                    <!--<div class="mb-5 wow slideInUp" data-wow-delay="0.0s">-->
                    <div class="mb-5 wow slideInUp">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Más visitados</h3>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/casas/Premium/1/casa1.webp" style="width: 100px; height: 100px; object-fit: cover;" alt="vivienda Premium">
                            <a href="<?php echo base_url();?>modelos/casa_premium/1" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Premium 74,8m<sup>2</sup>
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/casas/Americana/3/casa1.webp" style="width: 100px; height: 100px; object-fit: cover;" alt="vivienda americana">
                            <a href="<?php echo base_url();?>modelos/casa_americana/3" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Americana 36m<sup>2</sup>
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/casas/Americana/11/casa1.webp" style="width: 100px; height: 100px; object-fit: cover;" alt="vivienda Premium">
                            <a href="<?php echo base_url();?>modelos/casa_americana/11" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Americana 80m<sup>2</sup>
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="<?php echo base_url();?>assets/img/casas/Minimalista/2/casa1.webp" style="width: 100px; height: 100px; object-fit: cover;" alt="vivienda americana">
                            <a href="<?php echo base_url();?>modelos/casa_minimalista/2" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">Minimalista 69m<sup>2</sup>
                            </a>
                        </div>

                    </div>
                    <!-- Recent Post End -->
    
                    <!-- Image Start -->
                    <!--<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">-->
                    <!--<div class="mb-5 wow slideInUp">
                        <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                    </div>-->
                    <!-- Image End -->
    




                   





    
                    <!-- Plain Text Start -->
                    <!--<div class="wow slideInUp" data-wow-delay="0.1s">-->
                   <!-- <div class="wow slideInUp">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Plain Text</h3>
                        </div>
                        <div class="bg-light text-center" style="padding: 30px;">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                            <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                        </div>
                    </div>-->
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Vendor Start -->
    <!--<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>-->
    <!-- Vendor End -->