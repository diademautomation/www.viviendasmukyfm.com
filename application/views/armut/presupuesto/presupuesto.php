


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp"  >
    <div class="container py-5" style="margin-bottom:50px;">

            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!--<h5 class="fw-bold text-primary text-uppercase">Contactanos</h5>-->
                <h1 class="mb-0">Si tiene alguna duda, no dude en ponerse en contacto con nosotros</h1>
            </div>




            <div class="row g-5 mb-5">


                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" >
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Mande su mensaje</h5>
                            <h5 class="text-primary mb-0">+54 911 30358444</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" >
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Envíe su consulta</h5>
                            <h5 class="text-primary mb-0">info@viviendasmukyfm.com</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" >
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Ubicación</h5>
                            <h5 class="text-primary mb-0">Parque Industrial Tecnológico Quilmes</h5>
                        </div>
                    </div>
                </div>

            </div>







            <div class="row g-5" id="contacto">
            <!--<div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">-->
                <div class="col-lg-12 wow slideInUp">
                    <form action="<?php echo base_url("presupuesto/enviar_mail")?>" method="POST" novalidate="novalidate">
                    <div class="row g-3">
                                <div class="col-xl-6">
                                    <input name="name" id="name" type="text" class="form-control bg-light border-0" placeholder="Nombre" requerid min="3" style="height: 55px;">
                                </div>
                                <div class="col-xl-6">
                                    <input name="apellido" id="apellido" type="text" class="form-control bg-light border-0" placeholder="Apellido" requerid min="3" style="height: 55px;">
                                </div>
                                 <div class="col-xl-6">
                                    <input name="direccion" id="direccion" type="text" class="form-control bg-light border-0" placeholder="Dirección" requerid min="3" style="height: 55px;">
                                </div>
                                <div class="col-xl-6">
                                    <input name="localidad" id="localidad" type="text" class="form-control bg-light border-0" placeholder="Localidad" requerid min="3" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input name="email" id="email" type="email" class="form-control bg-light border-0" placeholder="Email" requerid style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input name="tel" id="tel" type="text" class="form-control bg-light border-0" placeholder="Tel/Cel" requerid min="5" style="height: 55px;">
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
                                    <select name="armado" id="armado" class="form-select bg-light border-0" style="height: 55px;">   
                                        <option selected>Ubicación de armado</option>                  
                                        <option value="Frente">Frente</option>
                                        <option value="Fondo">Fondo</option>
                                        <option value="Terraza">Terraza</option>
                                        <option value="Otro">Otro</option>
                                      
                                    </select>
                                </div>


                                <div class="col-12">
                                    <select name="pago" id="pago" class="form-select bg-light border-0" style="height: 55px;">   
                                        <option selected>Condiciones de pago</option>                  
                                        <option value="Contado">Contado</option>
                                        <option value="Cuotas">Cuotas</option>
                                      
                                    </select>
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

                


               
                    <!--<div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">       width=600px; height="450" -->
                    <!---<div class="col-lg-6 ">
                        <div class="row1 g-5">
                            <img src="<?php echo base_url();?>assets/img/casas/Americana/3/casa2.webp" alt="casa viviendas muky fm">
                        </div>
                    </div> --> 
                


            </div>


                


            
    

               




                


               
                
       





    </div>
</div>
   