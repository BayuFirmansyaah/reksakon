   <!-- Header Start -->
   <div class="container-fluid bg-primary py-5 mb-5 page-header">
       <div class="container py-5">
           <div class="row justify-content-center">
               <div class="col-lg-10 text-center">
                   <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                   <nav aria-label="breadcrumb">
                       <ol class="breadcrumb justify-content-center">
                           <li class="breadcrumb-item"><a class="text-white" href="<?php echo base_url('Home'); ?>">Home</a></li>
                           <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                       </ol>
                   </nav>
               </div>
           </div>
       </div>
   </div>
   <!-- Header End -->

   <!-- Contact Start -->
   <div class="container-xxl py-5">
       <div class="container">
           <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
               <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
               <h1 class="mb-5">Contact For Any Query</h1>
           </div>
           <div class="row g-4 justify-content-center">
               <?php
                foreach ($DATA_JENIS_CONTACT as $row) {
                ?>
                   <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                       <h5><?php echo $row->JENIS; ?></h5>
                       <?php
                        foreach ($DATA_CONTACT as $rows) {
                            if ($row->JENIS == $rows->JENIS) {
                               
                        ?>
                               <div class="d-flex align-items-center mb-3">
                                   <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                       <i class="fa fa-user text-white"></i> <!-- Mengganti dengan ikon user -->
                                   </div>
                                   <div class="ms-3">
                                       <h5 class="text-primary"><?php echo $rows->KETERANGAN;?></h5> <!-- Mengubah teks "Office" menjadi "User" -->
                                       <p class="mb-0"></p>
                                   </div>
                               </div>

                               <div class="d-flex align-items-center mb-3">
                                   <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                       <i class="fa fa-phone-alt text-white"></i>
                                   </div>
                                   <div class="ms-3">
                                       <h5 class="text-primary">Mobile</h5>
                                       <p class="mb-0">
                                <?php echo $rows->NO; ?>
                                <a href="https://api.whatsapp.com/send?phone=<?php echo $rows->NO; ?>" target="_blank">(Whatsapp Now)</a>
                            </p>
                                   </div>
                               </div>
                               <div class="d-flex align-items-center">
                                   <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                       <i class="fa fa-envelope-open text-white"></i>
                                   </div>
                                   <div class="ms-3">
                                       <h5 class="text-primary">Email</h5>
                                       <p class="mb-0"><?php echo $row->EMAIL;?></p>
                                   </div>
                               </div>
                               <div class="d-flex align-items-center mb-3">
                                   <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                       <i class="fa fa-map-marker-alt text-white"></i>
                                   </div>
                                   <div class="ms-3">
                                       <h5 class="text-primary">Office</h5>
                                       <p class="mb-0"><?php echo $row->OFFICE;?></p>
                                   </div>
                               </div>

                       <?php

                            }
                        }
                        ?>
                   </div>
               <?php
                }
                ?>

           </div>
       </div>
   </div>
   <!-- Contact End -->

   <!-- Maps -->
   <div class="container-xxl py-5">
       <div class="container">
           <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
               <h6 class="section-title bg-white text-center text-primary px-3">Location</h6>
               <h1 class="mb-5">Location</h1>
           </div>
           <div class="row">
               <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.3s">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.272504073519!2d106.72234549999999!3d-6.136301299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a02ab187823ff%3A0x9544315d0e1fc65f!2sJl.%20Taman%20Palem%20Lestari%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1648970599533!5m2!1sen!2sid" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
           </div>
       </div>
   </div>


   <!-- Maps -->