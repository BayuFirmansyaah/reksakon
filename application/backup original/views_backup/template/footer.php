<!-- Footer Start -->
<div class="container-fluid bg-dark-custom text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4><a class="text-white mb-3" href="<?php echo base_url('Home'); ?>">About Us</a></h4>
                <a class="btn btn-link" href="About">About Us</a>
                <a class="btn btn-link" href="Contact">Contact Us</a>
                <a class="btn btn-link" href="Services">Services</a>
                <a class="btn btn-link" href="Project">Project</a>
                <a class="btn btn-link" href="VisionMission">Vision & Mission</a>
                <p>

                <h4 class="text-white mb-3">Gallery</h4>
                <div class="row g-2 pt-2">
                    <?php
                    $XDATA_PROJECT = $DATA_PROJECT;
                    // Acak array $DATA_PROJECT
                    shuffle($XDATA_PROJECT);

                    // Potong array untuk membatasi jumlah elemen menjadi 6
                    $data_project_sliced = array_slice($XDATA_PROJECT, 0, 6);

                    foreach ($data_project_sliced as $row) {
                    ?>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo base_url('images/project/' . $row->PICT_2); ?>" alt="">
                        </div>
                    <?php
                    }
                    ?>

                </div>


            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>

                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php
                                                                    foreach ($DATA_HOMEPAGE as $row) {
                                                                        if ($row->NAMA == "TELP") {
                                                                            echo $row->KETERANGAN;
                                                                        }
                                                                    }
                                                                    ?></p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php
                                                                    foreach ($DATA_HOMEPAGE as $row) {
                                                                        if ($row->NAMA == "EMAIL") {
                                                                            echo $row->KETERANGAN;
                                                                        }
                                                                    }
                                                                    ?>
                </p>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php
                                                                            foreach ($DATA_HOMEPAGE as $row) {
                                                                                if ($row->NAMA == "ALAMAT") {
                                                                                    echo $row->KETERANGAN;
                                                                                }
                                                                            }
                                                                            ?></p>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php
                                                                            foreach ($DATA_HOMEPAGE as $row) {
                                                                                if ($row->NAMA == "ALAMAT2") {
                                                                                    echo $row->KETERANGAN;
                                                                                }
                                                                            }
                                                                            ?></p>
                <!-- <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div> -->
            </div>
            <div class="col-lg-3 col-md-6">
                <h4><a class="text-white mb-3" href="<?php echo base_url('Home'); ?>">Workshop & Warehouse</a></h4>

                <!-- <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Tlajung Udik Km 3.5, Tlajung Udik, Gunung Putri, Bogor Regency, West Java 16962, Indonesia</p> -->
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>East Gate Logistic Park Blok D06 & F05, Java Integrated Industrial & Port Estate (JIIPE), Gresik, East Java, Indonesia</p>

            </div>
            <div class="col-lg-3 col-md-6">
                <div class="position-relative">

                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(128, 128, 128, 0.2);">
                        <img src="images/logopanjangrsk.png" alt="IT-PROJECT" class="m-0 text-primary me-3" style="height: 100px;">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">RSKteam</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="">RSKteam</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="Home">Home</a>
                        <a href="Services">Services</a>
                        <a href="Project">Project</a>
                        <a href="Contact">ContactUs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>


<script src="<?php echo base_url('assets/HomeTemplate/lib/wow/wow.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/HomeTemplate/lib/easing/easing.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/HomeTemplate/lib/waypoints/waypoints.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/HomeTemplate/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>

<!-- Template Javascript -->
<script src="    <?php echo base_url('assets/HomeTemplate/js/main.js'); ?>"></script>
</body>

</html>