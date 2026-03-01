        <style>
        .transition-hover {
            transition: all 0.3s ease;
        }
        .transition-hover:hover {
            background-color: white !important;
            color: #0d6efd !important;
            transform: translateY(-3px);
        }
    </style>
    
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">PROJECT COMPLETED</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="<?php echo base_url('Home'); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page" href="<?php echo base_url('Project'); ?>">PROJECT</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Project</h6>
                <h1 class="mb-5">Our Project</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <?php
                foreach ($DATA_PROJECT as $row) {
                ?>
                    <div class="testimonial-item text-center">
                        <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo base_url('images/project/' . $row->PICT_2); ?>" style="width: 350px; height: 350px;">
                        <h5 class="mb-0"><?php echo $row->NAMAPRODUK; ?></h5>
                        <p></p>
                        <div class="testimonial-text bg-light text-center p-4">
                            <p class="mb-0"><?php echo $row->KETERANGAN; ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>


            </div>
        </div>
    </div>
    
   <div class="container-fluid bg-dark-custom py-5 mt-5">
        <div class="container d-flex flex-column flex-md-row justify-content-center gap-4 text-center">

            <a href="Xperience" class="btn btn-outline-light px-5 py-4 rounded-pill shadow-lg d-flex align-items-center justify-content-center gap-3 transition-hover" style="font-size: 1.5rem;">
                <i class="bi bi-briefcase-fill" style="font-size: 1.8rem;"></i> Work Experience
            </a>

            <a href="Project_Reference" class="btn btn-outline-light px-5 py-4 rounded-pill shadow-lg d-flex align-items-center justify-content-center gap-3 transition-hover" style="font-size: 1.5rem;">
                <i class="bi bi-folder2-open" style="font-size: 1.8rem;"></i> Project Reference
            </a>

        </div>
    </div>
