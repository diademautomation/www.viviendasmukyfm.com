<?php foreach ($datos_casa as $casa){

}?>


   


  <!-- ============= [  IMG - CASAS START] ============ -->


  <div class="container-fluid py-5 wow fadeInUp">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                    <h1 class="mb-4">Vivienda <?php echo $casa->tipo;?> <?php echo $casa->metro;?>m<sup>2</sup></h1>
                    



    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">


                <!-- Imagen 1 -->    
                <div class="carousel-item active">                    
                    <img class="w-100" src="<?php echo base_url();?>assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa1.webp" alt="vivienda muky fm">
                    <div class="d-flex mt-2 position-absolute top-0" style="margin-left:83%">
                        <div>
                            <a class="btn btn-primary btn-square me-2" href="<?php echo base_url();?>assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa1.webp" download="casa1.webp"><i class='fas fa-download'></i></a>  
                            <butaton type="button" class="btn btn-primary btn-square me-2" data-bs-toggle="modal" data-bs-target="#searchModal1"><i class='fas fa-share-alt'></i></butaton>                
                        </div>
                    </div>     
                </div>


                <!-- Imagen 2 --> 
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url();?>assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa2.webp" alt="vivienda muky fm">                   
                    <div class="d-flex mt-2 position-absolute top-0" style="margin-left:83%">
                        <div>
                            <a class="btn btn-primary btn-square me-2" href="<?php echo base_url();?>assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa2.webp" download="casa2.webp"><i class='fas fa-download'></i></a>  
                            <butaton type="button" class="btn btn-primary btn-square me-2" data-bs-toggle="modal" data-bs-target="#searchModal2"><i class='fas fa-share-alt'></i></butaton>                       
                        </div>
                    </div>                     
                </div>



                <!-- Imagen 3 --> 
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url();?>assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa3.webp" alt="vivienda muky fm">    
                    <div class="d-flex mt-2 position-absolute top-0" style="margin-left:83%">
                        <div>
                            <a class="btn btn-primary btn-square me-2" href="<?php echo base_url();?>assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa3.webp" download="casa3.webp"><i class='fas fa-download'></i></a>  
                            <butaton type="button" class="btn btn-primary btn-square me-2" data-bs-toggle="modal" data-bs-target="#searchModal3"><i class='fas fa-share-alt'></i></butaton>                         
                        </div>
                    </div>   
                </div>



                <!-- Imagen 4 --> 
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url();?>assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa4.webp" alt="viviendas muky fm">   
                    <div class="d-flex mt-2 position-absolute top-0" style="margin-left:83%">
                        <div>
                            <a class="btn btn-primary btn-square me-2" href="<?php echo base_url();?>assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa4.webp" download="casa4.webp"><i class='fas fa-download'></i></a>  
                            <butaton type="button" class="btn btn-primary btn-square me-2" data-bs-toggle="modal" data-bs-target="#searchModal4"><i class='fas fa-share-alt'></i></butaton>                         
                        </div>
                    </div>   
                </div>



            </div>        
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>


</div>
</div>
</div>
</div>
</div>



  <!-- ============= [  IMG - CASAS END] ============ -->




<!-- =========================-->
<!-- Full Screen Search Start -->
<!-- =========================-->

<!-- img 1 -->

    <div class="modal fade" id="searchModal1" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                                        
                                <!--<a class="btn btn-primary btn-square me-2" href="https://www.instagram.com/Viviendas.Muky.FM/" target="_blank"><i class="fab fa-instagram fw-normal fa-lg"></i></a> -->                               
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-facebook-f fw-normal fa-lg"></i></a>      
                                <a class="btn btn-primary btn-square me-2" href="https://twitter.com/intent/tweet?text=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-twitter fw-normal fa-lg"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://pinterest.com/pin/create/button/?url=https%3A//www.viviendasmukyfm.com/assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa1.webp&media=viviendas%20muky%20fm&description=viviendas%20muky%20fm" target="_blank"><i class="fab fa-pinterest fw-normal fa-lg"></i></a>    
                                <a class="btn btn-primary btn-square me-2" href="https://api.whatsapp.com/send?text=<?php echo base_url();?>modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-whatsapp fw-normal fa-lg"></i></a>                                               
                    </div>
                </div>
        </div> 
    </div>




<!-- img 2 -->

<div class="modal fade" id="searchModal2" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                                        
                                <!--<a class="btn btn-primary btn-square me-2" href="https://www.instagram.com/Viviendas.Muky.FM/" target="_blank"><i class="fab fa-instagram fw-normal fa-lg"></i></a> -->                               
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-facebook-f fw-normal fa-lg"></i></a>      
                                <a class="btn btn-primary btn-square me-2" href="https://twitter.com/intent/tweet?text=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-twitter fw-normal fa-lg"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://pinterest.com/pin/create/button/?url=https%3A//www.viviendasmukyfm.com/assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa2.webp&media=viviendas%20muky%20fm&description=viviendas%20muky%20fm" target="_blank"><i class="fab fa-pinterest fw-normal fa-lg"></i></a>    
                                <a class="btn btn-primary btn-square me-2" href="https://api.whatsapp.com/send?text=<?php echo base_url();?>modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-whatsapp fw-normal fa-lg"></i></a>                                               
                    </div>
                </div>
        </div> 
    </div>    



<!-- img 3 -->

<div class="modal fade" id="searchModal3" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                                        
                                <!--<a class="btn btn-primary btn-square me-2" href="https://www.instagram.com/Viviendas.Muky.FM/" target="_blank"><i class="fab fa-instagram fw-normal fa-lg"></i></a> -->                               
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-facebook-f fw-normal fa-lg"></i></a>      
                                <a class="btn btn-primary btn-square me-2" href="https://twitter.com/intent/tweet?text=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-twitter fw-normal fa-lg"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://pinterest.com/pin/create/button/?url=https%3A//www.viviendasmukyfm.com/assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa3.webp&media=viviendas%20muky%20fm&description=viviendas%20muky%20fm" target="_blank"><i class="fab fa-pinterest fw-normal fa-lg"></i></a>    
                                <a class="btn btn-primary btn-square me-2" href="https://api.whatsapp.com/send?text=<?php echo base_url();?>modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-whatsapp fw-normal fa-lg"></i></a>                                               
                    </div>
                </div>
        </div> 
    </div>

    

<!-- img 4 -->

<div class="modal fade" id="searchModal4" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                                        
                                <!--<a class="btn btn-primary btn-square me-2" href="https://www.instagram.com/Viviendas.Muky.FM/" target="_blank"><i class="fab fa-instagram fw-normal fa-lg"></i></a> -->                               
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-facebook-f fw-normal fa-lg"></i></a>      
                                <a class="btn btn-primary btn-square me-2" href="https://twitter.com/intent/tweet?text=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-twitter fw-normal fa-lg"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://pinterest.com/pin/create/button/?url=https%3A//www.viviendasmukyfm.com/assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa4.webp&media=viviendas%20muky%20fm&description=viviendas%20muky%20fm" target="_blank"><i class="fab fa-pinterest fw-normal fa-lg"></i></a>    
                                <a class="btn btn-primary btn-square me-2" href="https://api.whatsapp.com/send?text=<?php echo base_url();?>modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-whatsapp fw-normal fa-lg"></i></a>                                               
                    </div>
                </div>
        </div> 
    </div>  
    
    
<!-- PLano 1 -->

    <div class="modal fade" id="searchModal5" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                                        
                                <!--<a class="btn btn-primary btn-square me-2" href="https://www.instagram.com/Viviendas.Muky.FM/" target="_blank"><i class="fab fa-instagram fw-normal fa-lg"></i></a> -->                               
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-facebook-f fw-normal fa-lg"></i></a>      
                                <a class="btn btn-primary btn-square me-2" href="https://twitter.com/intent/tweet?text=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-twitter fw-normal fa-lg"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://pinterest.com/pin/create/button/?url=https%3A//www.viviendasmukyfm.com/assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/plano1.webp&media=viviendas%20muky%20fm&description=viviendas%20muky%20fm" target="_blank"><i class="fab fa-pinterest fw-normal fa-lg"></i></a>    
                                <a class="btn btn-primary btn-square me-2" href="https://api.whatsapp.com/send?text=<?php echo base_url();?>modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-whatsapp fw-normal fa-lg"></i></a>                                               
                    </div>
                </div>
        </div> 
    </div>   




<!-- PLano 2 -->

    <div class="modal fade" id="searchModal6" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                                        
                                <!--<a class="btn btn-primary btn-square me-2" href="https://www.instagram.com/Viviendas.Muky.FM/" target="_blank"><i class="fab fa-instagram fw-normal fa-lg"></i></a> -->                               
                                <a class="btn btn-primary btn-square me-2" href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-facebook-f fw-normal fa-lg"></i></a>      
                                <a class="btn btn-primary btn-square me-2" href="https://twitter.com/intent/tweet?text=https%3A//www.viviendasmukyfm.com/modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-twitter fw-normal fa-lg"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="https://pinterest.com/pin/create/button/?url=https%3A//www.viviendasmukyfm.com/assets/img/download/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/plano2.webp&media=viviendas%20muky%20fm&description=viviendas%20muky%20fm" target="_blank"><i class="fab fa-pinterest fw-normal fa-lg"></i></a>    
                                <a class="btn btn-primary btn-square me-2" href="https://api.whatsapp.com/send?text=<?php echo base_url();?>modelos/casa_<?php echo $casa->tipo;?>/<?php echo $casa->id;?>" target="_blank"><i class="fab fa-whatsapp fw-normal fa-lg"></i></a>                                               
                    </div>
                </div>
        </div> 
    </div>   



<!-- =========================-->
<!-- Full Screen Search End -->
<!-- =========================-->

 







<!-- Blog Start -->
 <div class="container-fluid py-6 wow fadeInUp">
        <div class="container py-6" style="margin-bottom:50px;">
            <div class="row g-5">
                <div class="col-lg-12">

               



              
            <div class="row g-5">



                <div class="col-lg-3">
                    <div class="row g-5">
                    
                        <div class="col-12 wow zoomIn">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <!-- <i class="fas fa-bed text-primary me-1"></i>  -->


                                <i class="fas fa-bed text-white me-1"></i>
                                <!--<i class="fa fa-cubes text-white"></i>-->
                                
                            </div>
                            <h4>Dormitorio <?php echo $casa->dormitorio;?></h4>
                            
                            
                        </div>

                    </div>
                </div>
   



                <div class="col-lg-3">
                    <div class="row g-5">
                   
                        <div class="col-12 wow zoomIn">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                              
                                <i class="fas fa-shower text-white me-1"></i>
                            </div>
                            <h4>Baño <?php echo $casa->baño;?></h4>
                            
                        </div>

                    </div>
                </div>




            <?php if ($casa->cochera !=0 ){  ?>

                <div class="col-lg-3">
                    <div class="row g-5">
                   
                        <div class="col-12 wow zoomIn">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                
                                <i class="fas fa-car text-white me-1"></i>
                            </div>
                            <h4>Cochera <?php echo $casa->cochera;?></h4>
                           
                            
                        </div>

                    </div>
                </div>


             <?php } ?>      


                <div class="col-lg-3">
                    <div class="row g-5">
                   
                        <div class="col-12 wow zoomIn">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                              
                                <i class="fas fa-home text-white me-1"></i>
                            </div>
                            <h4>Metros <?php echo $casa->metro;?>m<sup>2</sup></h4>
                            
                        </div>

                    </div>
                </div>




            </div>












                    <!-- Blog Detail Start -->
                    <div class="mb-5">
   
                        <h2 class="mb-4" style="margin-top:60px;">Descripción</h2>

                        <p><?php echo $casa->descripcion;?></p>
                     
                    </div>
                    <!-- Blog Detail End -->
    
          </div>                
        </div>
    </div>
</div>







<!-- ============= [  PLANOS - CASAS START] ============ -->


<div class="container-fluid  wow fadeInUp">
        <div class="container ">
            <div class="row g-5">
                <div class="col-lg-12">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                    <!--<h2 class="mb-4" style="margin-top:60px;">Descripción</h2>-->
                    <h2 class="mb-4">Plano - <?php echo $casa->metro;?>m<sup>2</sup></h2>
                    



    <div id="header-carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">


                <!-- PLANO 1 -->    
                <div class="carousel-item active">                    
                    <img class="w-100" src="<?php echo base_url();?>assets/img/casas/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/plano1.webp" alt="vivienda muky fm">
                    <div class="d-flex mt-2 position-absolute top-0" style="margin-left:83%">
                        <div>
                            <a class="btn btn-primary btn-square me-2" href="<?php echo base_url();?>assets/img/casas/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/plano1.webp" download="plano1.webp"><i class='fas fa-download'></i></a>  
                            <butaton type="button" class="btn btn-primary btn-square me-2" data-bs-toggle="modal" data-bs-target="#searchModal5"><i class='fas fa-share-alt'></i></butaton>                
                        </div>
                    </div>     
                </div>


                <!-- PLANO 2 --> 
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url();?>assets/img/casas/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/plano2.webp" alt="viviendas muky fm">                   
                    <div class="d-flex mt-2 position-absolute top-0" style="margin-left:83%">
                        <div>
                            <a class="btn btn-primary btn-square me-2" href="<?php echo base_url();?>assets/img/casas/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/plano2.webp" download="plano2.webp"><i class='fas fa-download'></i></a>  
                            <butaton type="button" class="btn btn-primary btn-square me-2" data-bs-toggle="modal" data-bs-target="#searchModal6"><i class='fas fa-share-alt'></i></butaton>                       
                        </div>
                    </div>                     
                </div>


            </div>        
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel1"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel1"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </div>


</div>
</div>
</div>
</div>
</div>



  <!-- ============= [  PLANOS - CASAS END] ============ -->


  



<!-- Blog Start -->
<div class="container-fluid py-6 wow fadeInUp">
    <div class="container py-6" style="margin-bottom:50px;">
        <div class="row g-5">
            <div class="col-lg-12">



            
            <!-- ===== [ FORMULARIO -START ] ==== -->  
            
            
            <div class="row g-5">
            <!--<div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">-->
            <div class="section-title text-center position-relative pb-3 mx-auto" style="max-width: 600px; margin-top:80px;">    
                    <!--<h1 class="fw-bold text-primary text-uppercase"  id="ubicacion">Ubicación</h1>-->
                    <h1 class="mb-0"  id="ubicacion">Contacto</h1>
                </div> 
                <div class="col-lg-6 wow slideInUp">
                    <form action="<?php echo base_url("contacto/enviar_mail")?>" method="POST" novalidate="novalidate">
                    <div class="row g-3">
                                <div class="col-xl-12">
                                    <input name="name" id="name" type="text" class="form-control bg-light border-0" placeholder="Nombre" requerid min="3" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input name="email" id="email" type="email" class="form-control bg-light border-0" placeholder="Email" requerid style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input name="tel" id="tel" type="text" class="form-control bg-light border-0" placeholder="Teléfono" requerid min="5" style="height: 55px;">
                                </div>
                              
                                <div class="col-6">
                                    <select name="tipo" id="tipo" class="form-select bg-light border-0" style="height: 55px;">   
                                        <option selected>Modelo</option>                  
                                        <option value="Americana">Americana</option>
                                        <option value="Minimalista">Minimalista</option>
                                        <option value="Premium">Premium</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <input name="metro" id="metro" type="text" class="form-control bg-light border-0" placeholder="Metros Cuadrados" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="message" class="form-control bg-light border-0" rows="3" placeholder="Consulta"></textarea>
                                </div>
                                <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                              </div>
                            </div>
                    </form>
                </div>


                 <!-- Galeria  -->
                 <!--<div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">-->
                 <div class="col-lg-6 ">
                        <div class="row1 g-5">
                            <img src="<?php echo base_url();?>assets/img/casas/<?php echo $casa->tipo;?>/<?php echo $casa->id;?>/casa1.webp" alt="casa viviendas muky fm">
                        </div>
                </div> 
                  
            </div>



             <!-- ===== [ FORMULARIO - END ] ==== -->  






            </div>                
        </div>
    </div>
</div>