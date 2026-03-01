 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5">
     <div class="owl-carousel header-carousel position-relative">
         <div class="owl-carousel-item position-relative">
             <img class="img-fluid" src="<?php echo base_url('images/bg_home1.jpg'); ?>" alt="">
             <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                 <div class="container">
                     <div class="row justify-content-start">
                         <div class="col-sm-112 col-lg-12">
                             <h2 class="display-3 text-white animated slideInDown">PT. Rekayasa Sarana Konstruksi</h2>
                             <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Our Vision</h5>
                             <p class="fs-5 text-white mb-4 pb-2">-Qualified and reliable provider of construction resources and civil & building work services<br>
                                 -The most trusted partner and the number one choice for construction business actors and project owners in Indonesia</p>


                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="owl-carousel-item position-relative">
             <img class="img-fluid" src="<?php echo base_url('images/bg_home2.jpg'); ?>" alt="">
             <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                 <div class="container">
                     <div class="row justify-content-start">
                         <div class="col-sm-112 col-lg-12">
                             <h2 class="display-3 text-white animated slideInDown">PT. Rekayasa Sarana Konstruksi</h2>
                             <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Our Mission</h5>
                             <p class="fs-5 text-white mb-4 pb-2">-Fulfilling customer expectations by providing the best service and added value</br>
                                 -Comply with the protocol of health, safety, environmental and the most stringent industry standard

                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="owl-carousel-item position-relative">
             <img class="img-fluid" src="<?php echo base_url('images/1.jpg'); ?>" alt="">
             <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                 <div class="container">
                     <div class="row justify-content-start">
                         <div class="col-sm-112 col-lg-12">
                             <h2 class="display-3 text-white animated slideInDown">PT. Rekayasa Sarana Konstruksi</h2>
                             <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Our Core Values</h5>
                             <p class="fs-5 text-white mb-4 pb-2"><b><u>Responsive and Responsible</u></b></br>

                                 We respond quickly to client needs and are responsible for the trust given
                                 </br>

                                 <b><u>Solution-Focused</u></b></br>

                                 We offer the best solutions in order to solve existing problems, especially in our field with the aim of building client trust with the principle of "win-win solution</br>

                                 <b><u>Knowledgeable</u></b></br>

                                 This company grew up armed with extensive knowledge in order to be able to provide the best service for its clients

                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Carousel End -->


 <!-- Service Start -->
 <div class="container-xxl py-5">
     <div class="container">
         <div class="row g-4">
             <!-- KONTEN ATAS START -->
             <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="team-item bg-light">
                     <?php
                        foreach ($DATA_OUR_SERVICE as $row) {
                            if ($row->ID == "16") {
                        ?>
                             <div class="overflow-hidden">
                                 <img class="img-fluid" src="<?php echo base_url('images/our_services/' . $row->PICT); ?>" style="width: 350px; height: 350px;" alt="">
                             </div>

                             <div class="text-center p-4">
                                 <h5 class="mb-0"><?php echo $row->NAMA; ?></h5>

                             </div>
                     <?php
                            }
                        }
                        ?>
                 </div>
             </div> -->
             <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                 <div class="team-item bg-light">
                     <?php
                        foreach ($DATA_OUR_SERVICE as $row) {
                            if ($row->ID == "18") {
                        ?>
                             <div class="overflow-hidden">
                                 <img class="img-fluid" src="<?php echo base_url('images/our_services/' . $row->PICT); ?>" style="width: 350px; height: 350px; " alt="">
                             </div>

                             <div class="text-center p-4">
                                 <h5 class="mb-0"><?php echo $row->NAMA; ?></h5>

                             </div>
                     <?php
                            }
                        }
                        ?>
                 </div>
             </div> -->
             <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                 <div class="team-item bg-light">
                     <?php
                        foreach ($DATA_OUR_SERVICE as $row) {
                            if ($row->ID == "17") {
                        ?>
                             <div class="overflow-hidden">
                                 <img class="img-fluid" src="<?php echo base_url('images/our_services/' . $row->PICT); ?>" style="width: 350px; height: 350px; " alt="">
                             </div>

                             <div class="text-center p-4">
                                 <h5 class="mb-0"><?php echo $row->NAMA; ?></h5>

                             </div>
                     <?php
                            }
                        }
                        ?>
                 </div>
             </div> -->
             <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                 <div class="team-item bg-light">
                     <?php
                        foreach ($DATA_OUR_SERVICE as $row) {
                            if ($row->ID == "20") {
                        ?>
                             <div class="overflow-hidden">
                                 <img class="img-fluid" src="<?php echo base_url('images/our_services/' . $row->PICT); ?>" style="width: 350px; height: 350px; " alt="">
                             </div>

                             <div class="text-center p-4">
                                 <h5 class="mb-0"><?php echo $row->NAMA; ?></h5>

                             </div>
                     <?php
                            }
                        }
                        ?>
                 </div>
             </div> -->

             <!-- KONTEN ATAS End -->
         </div>
     </div>
 </div>
 <!-- Service End -->


 <!-- About Start -->
 <div class="container-xxl py-5">
     <div class="container">
         <div class="row g-5">
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                 <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">

                     <div class="carousel-inner">
                         <div class="carousel-item active">
                             <img src="<?php echo base_url('images/FotoTeam/ft_1.jpeg'); ?>" class="d-block w-100" alt="Team 1" style="object-fit: cover; height: 100%;">
                         </div>
                         <div class="carousel-item">
                             <img src="<?php echo base_url('images/FotoTeam/ft_2.jpeg'); ?>" class="d-block w-100" alt="Team 2" style="object-fit: cover; height: 100%;">
                         </div>
                         <div class="carousel-item">
                             <img src="<?php echo base_url('images/FotoTeam/ft_3.jpeg'); ?>" class="d-block w-100" alt="Team 3" style="object-fit: cover; height: 100%;">
                         </div>
                         <div class="carousel-item">
                             <img src="<?php echo base_url('images/FotoTeam/ft_4.jpeg'); ?>" class="d-block w-100" alt="Team 4" style="object-fit: cover; height: 100%;">
                         </div>
                         <div class="carousel-item">
                             <img src="<?php echo base_url('images/FotoTeam/ft_5.jpeg'); ?>" class="d-block w-100" alt="Team 5" style="object-fit: cover; height: 100%;">
                         </div>
                     </div>

                     <!-- Tombol Navigasi -->
                     <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Next</span>
                     </button>
                 </div>

             </div>
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                 <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                 <?php
                    foreach ($DATA_HOMEPAGE as $row) {
                        if ($row->NAMA == "COMPANY") {
                    ?>
                         <h2 class="mb-4"><?php echo $row->KETERANGAN; ?></h2>

                 <?php
                        }
                    }
                    ?>

                 <?php
                    foreach ($DATA_HOMEPAGE as $row) {
                        if ($row->NAMA == "OUR_SERVICES_HEADER") {
                    ?>
                         <p class="mb-4"><?php echo $row->KETERANGAN; ?></p>
                 <?php
                        }
                    }
                    ?>
                 <?php
                    foreach ($DATA_HOMEPAGE as $row) {
                        if ($row->NAMA == "OUR_SERVICES") {
                    ?>
                         <p class="mb-4"><?php echo $row->KETERANGAN; ?></p>
                 <?php
                        }
                    }
                    ?>

                 <div class="row gy-2 gx-4 mb-4">
                     <?php
                        foreach ($DATA_OUR_SERVICE as $row) {
                        ?>
                         <div class="col-sm-6">
                             <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo $row->NAMA; ?></p>
                         </div>
                     <?php
                        }
                        ?>

                 </div>
                 <a class="btn btn-primary py-3 px-5 mt-2" href="<?php echo base_url('About'); ?>">Read More</a>
             </div>
         </div>
     </div>
 </div>
 <!-- About End -->


 <!-- Categories Start -->
 <!-- <div class="container-xxl py-5 category">
     <div class="container">
         <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
             <h6 class="section-title bg-white text-center text-primary px-3">Service</h6>
             <h1 class="mb-5">Our Service</h1>
         </div>
         <div class="row g-3">
             <div class="col-lg-7 col-md-6">
                 <div class="row g-3">
                     <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                         <a class="position-relative d-block overflow-hidden" href="">
                             <?php
                                foreach ($DATA_OUR_SERVICE as $row) {
                                    if ($row->ID == "16") {
                                ?>
                                     <img class="img-fluid" src="<?php echo base_url('images/our_services/' . $row->PICT); ?>" alt="">
                                     <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">

                                         <h5 class="m-0"><?php echo $row->NAMA; ?></h5>
                                         <small class="text-primary">99% Guarante</small>
                                     </div>
                             <?php
                                    }
                                }
                                ?>

                         </a>
                     </div>
                     <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                         <a class="position-relative d-block overflow-hidden" href="">
                             <img class="img-fluid" src="<?php echo base_url('assets/HomeTemplate/img/cat-1.jpg'); ?>" alt="">
                             <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                 <?php
                                    foreach ($DATA_OUR_SERVICE as $row) {
                                        if ($row->ID == "17") {
                                    ?>
                                         <img class="img-fluid" src="<?php echo base_url('images/our_services/' . $row->PICT); ?>" alt="">
                                         <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">

                                             <h5 class="m-0"><?php echo $row->NAMA; ?></h5>
                                             <small class="text-primary">99% Guarante</small>
                                         </div>
                                 <?php
                                        }
                                    }
                                    ?>
                             </div>
                         </a>
                     </div>

                 </div>
             </div>
             <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                 <a class="position-relative d-block h-100 overflow-hidden" href="">
                     <?php
                        foreach ($DATA_OUR_SERVICE as $row) {
                            if ($row->ID == "18") {
                        ?>
                             <img class="img-fluid w-100" src="<?php echo base_url('images/our_services/' . $row->PICT); ?>" style="width: 350px; height: 800px; " alt="">
                             <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">

                                 <h5 class="m-0"><?php echo $row->NAMA; ?></h5>
                                 <small class="text-primary">99% Guarante</small>
                             </div>
                     <?php
                            }
                        }
                        ?>
                 </a>
             </div>
         </div>


     </div>
 </div> -->
 <!-- Categories Start -->



 <!-- Testimonial Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
     <div class="container">
         <div class="text-center">
             <h6 class="section-title bg-white text-center text-primary px-3">PROJECT</h6>
             <h1 class="mb-5">PROJECT COMPLETED</h1>
         </div>
         <div class="owl-carousel testimonial-carousel position-relative">
             <?php foreach ($DATA_PROJECT as $row) { ?>
                 <div class="testimonial-item text-center"> <!-- Tambahkan gaya CSS di sini -->
                     <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo base_url('images/project/' . $row->PICT_2); ?>" style="width: 350px; height: 350px;">
                     <h5 class="mb-0"><?php echo $row->NAMAPRODUK; ?></h5>
                     <p>_____</p>
                     <div class="testimonial-text bg-light text-center p-4">
                         <p class="mb-0"><?php echo $row->KETERANGAN; ?></p>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>
 </div>
 <!-- Testimonial End -->

 <!-- Partners Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
     <div class="container">
         <div class="text-center">
             <h6 class="section-title bg-white text-center text-primary px-3">Clients</h6>
             <h1 class="mb-5">Clients </h1>
         </div>
         <div class="owl-carousel testimonial-carousel position-relative">
             <?php foreach ($DATA_PARTNERSHIP as $row) {
                ?>
                 <div class="testimonial-item text-center">
                     <img class="border rounded-circle p-2 mx-auto mb-4" src="<?php echo base_url('images/partnership/' . $row->pict); ?>" style="width: 120px; height: 120px;">
                     <h5 class="mb-0"><?php echo $row->NAMA; ?></h5>

                 </div>
             <?php
                }
                ?>

         </div>
     </div>
 </div>
 <!-- Partners End -->