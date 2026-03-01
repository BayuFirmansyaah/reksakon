<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
            <h1 class="mb-5">Our Services</h1>
        </div>
        <div class="row g-4">
            <?php
            foreach ($DATA_OUR_SERVICE as $row) {
            ?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">

                            <img class="img-fluid" src="<?php echo base_url('images/our_services/' . $row->PICT); ?>" style="width: 500px; height: 350px;" alt="">
                        </div>
                        <!-- Tambahkan garis sebagai pemisah -->
                        <hr style="border-top: 2px solid #000000;">

                        <div class="text-center p-4">
                            <a href="<?php base_url('Project_Reference'); ?>">
                                <h5 class="mb-0"><?php echo $row->NAMA; ?></h5>
                            </a>

                            <small id="keterangan"><?php echo substr($row->KETERANGAN, 0, 500); ?></small>
                            <?php if (strlen($row->KETERANGAN) > 100) : ?>
                                <a href="#" id="showMore" onclick="showFullText()">Show More</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</div>
<!-- Team End -->
<script>
    var fullText = "<?php echo $row->KETERANGAN; ?>";
    var isFullDisplayed = false;

    function showFullText() {
        var keteranganElement = document.getElementById('keterangan');
        var showMoreElement = document.getElementById('showMore');

        if (isFullDisplayed) {
            keteranganElement.textContent = fullText.substring(0, 20);
            showMoreElement.textContent = 'Show More';
        } else {
            keteranganElement.textContent = fullText;
            showMoreElement.textContent = 'Show Less';
        }

        isFullDisplayed = !isFullDisplayed;
    }
</script>