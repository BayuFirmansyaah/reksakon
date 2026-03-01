<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="<?php echo base_url('Home'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page" href="<?php echo base_url('About'); ?>">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    
                    <img class="img-fluid position-absolute w-100 h-100" src="<?php echo base_url('images/FotoTeam/ft_1.jpeg'); ?>" alt="" style="object-fit: cover;">
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


                <p class="mb-4">PT. Rekayasa Sarana Konstruksi, starting from the provision of scaffolding supply and rental services, supply of construction equipment and labor as well as the provision of civil and building work services in various projects including the manufacturing industry, factory design and oil refineries, we are here to provide support and help in a series of project work to the final stage. To develop and capture greater opportunities, we provide the birth of new business entities that are in line with today's technological developments and advances.
                </p>
                <p class = "mb-4">There are human resources who have experience in completing national and international EPC scale projects in Indonesia, with a positive spirit full of confidence we are here and ready to work together in providing construction work services with existing stakeholders with the principles of mutual benefit, openness and professionalism.
                </p>
                <p class="mb-4">PT. Rekayasa Sarana Konstruksi is here to answer the challenges and needs of the construction industry in Indonesia. We are ready to provide high quality, reliable and value-added services to construction businesses and project owners.
                </p>
            <p>

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
                <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->