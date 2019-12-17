
<html lang="es">
  <head>
    @include('head'); 
  </head>
  <body class="body"> <!-- Start body -->              
           <div class="header">  <!-- Star header -->
              
                    <nav class="navbar navbar-expand-lg fixed-top   " id="cabezera">
                        
                         <div class="container">

                         <a class="nav-link" href="#" > <img  src="{{ asset('imagenes/logo12.jpg') }}" alt="logo" width="200" height="100" id= "logo"> </a>

                    
                            <!-- Modificamos el boton del menu Responsive  -->
                             <button class="navbar-toggler" 
                                  type="button" 
                                  data-toggle="collapse" 
                                  data-target="#navbarResponsive" 
                                  aria-controls="navbarResponsive" 
                                  aria-expanded="false" aria-label="
                                  Toggle navigation">
                                
                           


                              <i class="fas fa-bars fa-1x " style="color: #000;"></i>
                          </button>
                          
                          

                          <div class="collapse navbar-collapse" id="navbarResponsive">
                              
                          <!-- LISTAS DE MENU -->

                              <ul class="navbar-nav  ml-auto">
                                      <li class="nav-item active"> <a class="nav-link" href="#">Inicio</a></li>
                                      <li class="nav-item active"><a class="nav-link" href="#">Nosotros</a></li>
                                      <li class="nav-item active"><a class="nav-link" href="#">Servicios</a></li>
                                       <li class="nav-item active"><a class="nav-link  " href="#">Contacto</a></li>

                              
                                  
                                  
                                   <li class="nav-item active"><a class="nav-link" id="registro"  href="#">Iniciar Sesión</a></li>

                                
                                            <li class="nav-item active"><a class="nav-link" id="registro2" href="#">Registrate</a></li>


                               
                               </ul>


                          </div>
                 
                      </nav>



                   </div>  <!--end header -->

      

       



    <div class="carrousel">  <!--star carrousel -->
  
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">

              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>

   
              <div class="carousel-inner" role="listbox">

                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"style="background-image: url('{{ asset('imagenes/slider/4.jpg') }}')">
                  <div class="carousel-caption d-none d-md-block">
                 
                    <p class="text-carrousel">This is a description for the first slide.</p>
                  </div>
                </div>


                  <!-- Slide Two - Set the background image for this slide in the line below -->
                  <div class="carousel-item" style="background-image:  url('{{ asset('imagenes/slider/5.jpg') }}')">
                    <div class="carousel-caption d-none d-md-block">
                 <p class="text-carrousel">This is a description for the first slide.</p>
                    </div>
                  </div>


                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('{{ asset('imagenes/slider/8.jpg') }}')">
                      <div class="carousel-caption d-none d-md-block">
                          <p class="text-carrousel">This is a description for the first slide.</p>
                      </div>
                    </div>
                  </div>


                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                  </div>




       </div>  <!--end carrousel -->




<div class="container">
                 
                

<!--

  <section class="row services-section">


                                  <div class="service_one col-lg-3 col-md-6 col-sm-3" >

                                             <div class="icono"><i class="fas fa-ambulance" ></i></div>


                                                <h2>Texto</h2>
                       
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni hic enim.</p>

                                      </div>




                                     <div class="service_two col-lg-3 col-md-6 col-sm-3" >

                                         <div class="icono "><i class="fas fa-comment-medical"></i></div>

                                            
                                                   <h2>Texto</h2>

                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni hic enim.</p>

                                         </div>






                                          <div class="service_three col-lg-3 col-md-6 col-sm-3" >

                                        
                                              <div class="icono "><i class="fas fa-id-card-alt"></i></div>


                                                   <h2>Texto</h2>
                                            
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni hic enim.</p>

                                      </div>





                                          <div class="service_four col-lg-3 col-md-6 col-sm-3" >

                                        
                                              <div class="icono "><i class="fas fa-notes-medical"></i></div>


                                                   <h2>Texto</h2>
                                            
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni hic enim.</p>

                                      </div>




                              </section>   -->


            <section class="row information">

                      
                      <div class="col-lg-12"> <h1>Sabes como prevenir la tb</h1></div>

  
            </section>



            </div>  <!-- end container -->


                  
   
  </body> <!-- End Body -->
</html>