<style>
    /* Card Container */
    .col-md-6 {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }


    /* Card Styling */
    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        background: #ffffff;
        transition: all 0.3s ease-in-out;
        width: 100%;
        height: 450px;
        background-color: grey;
        position: relative;
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .card .layer {
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, .9), rgba(0, 0, 0, 0.4));
    }

    .card .layer .content {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: start;
        align-items: end;
        padding: 16px;
    }

    .card .layer .content h2 {
        color: white !important;
        font-size: 24px;
    }

    .card .layer .content p {
        color: white !important;
    }

    .card .layer button {
        background-color: white;
        outline: none;
        border: none;
        font-size: 12px;
        padding: 6px 18px;
        border-radius: 6px;
    }

    /* Card Header */
    .card-header {
        background: #f8f9fa;
        padding: 15px;
        font-weight: bold;
        text-transform: uppercase;
        border-bottom: 2px solid #007bff;
    }

    .card-title {
        font-size: 25px;
        font-weight: 600;
        color: rgb(14, 70, 129);
        text-align: center;
    }

    /* Image Styling */
    .card-body img {
        width: 85%;
        height: 300px;
        /* Ubah sesuai kebutuhan */
        object-fit: cover;
        /* Memastikan gambar tetap proporsional */
        border-radius: 5px;
        transition: transform 0.3s ease-in-out;

    }

    /* Hover Effect on Image */
    .card-body img:hover {
        transform: scale(1.05);
    }

    /* Card Footer */
    .card-footer {
        background: #ffffff;
        padding: 15px;
    }

    /* List Styling */
    .card-footer ul {
        padding-left: 0;
    }

    .card-footer ul li {
        list-style: none;
        padding: 5px 0;
        font-size: 14px;
    }

    /* List Row Alignment */
    .card-footer ul li .row {
        align-items: center;
    }

    /* Strong Text Styling */
    strong {
        font-weight: 600;
        color: #007bff;
    }


    /* Menengahkan gambar di dalam card-body */
    .card-body {
        display: flex;
        justify-content: center;
        /* Tengahkan gambar secara horizontal */
        align-items: center;
        /* Tengahkan gambar secara vertikal */
        flex-direction: column;
        /* Jika ada lebih dari satu gambar, tetap tersusun ke bawah */
        text-align: center;
        /* Pastikan teks di dalam ikut rata tengah */
    }
</style>
<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">PROJECT REFERENCE</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="<?php echo base_url('Home'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Project Reference</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-8">

            <?php foreach ($DATA_PROJECT as $row) { ?>
                <div class="col-sm-12 col-md-6 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card">
                        <img src="<?php echo base_url('images/project/' . $row->PICT_2); ?>" alt="">
                        <div class="layer">
                            <div class="content">
                                <div>
                                    <h2>
                                        <?php echo htmlspecialchars($row->NAMAPRODUK); ?> -
                                        (<?php echo date('Y', strtotime($row->TANGGAL)); ?>)
                                    </h2>
                                    <p><?php echo htmlspecialchars($row->PROJECT_OWNER); ?></p>
                                    <button class="detail" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#projectModal"
                                        data-nama="<?php echo htmlspecialchars($row->NAMAPRODUK); ?>"
                                        data-owner="<?php echo htmlspecialchars($row->PROJECT_OWNER); ?>"
                                        data-client="<?php echo htmlspecialchars($row->CLIENT_PROJECT); ?>"
                                        data-location="<?php echo htmlspecialchars($row->LOCATION); ?>"
                                        data-year="<?php echo date('Y', strtotime($row->TANGGAL)); ?>"
                                        data-image="<?php echo base_url('images/project/' . $row->PICT_2); ?>">
                                        Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="projectModalLabel">Detail Proyek</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img id="modalImage" src="" alt="Project Image" class="img-fluid rounded" style="max-height: 400px;">
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Project Name</th>
                            <td id="modalNamaProduk"></td>
                        </tr>
                        <tr>
                            <th scope="row">Project Year</th>
                            <td id="modalTahun"></td>
                        </tr>
                        <tr>
                            <th scope="row">Project Owner</th>
                            <td id="modalProjectOwner"></td>
                        </tr>
                        <tr>
                            <th scope="row">Project Client</th>
                            <td id="modalClient"></td>
                        </tr>
                        <tr>
                            <th scope="row">Location</th>
                            <td id="modalLokasi"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('projectModal');
    modal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;

        const nama = button.getAttribute('data-nama');
        const owner = button.getAttribute('data-owner');
        const client = button.getAttribute('data-client');
        const lokasi = button.getAttribute('data-location');
        const year = button.getAttribute('data-year');
        const image = button.getAttribute('data-image');

        modal.querySelector('#projectModalLabel').textContent = 'Detail Proyek - ' + nama;
        modal.querySelector('#modalNamaProduk').textContent = nama;
        modal.querySelector('#modalTahun').textContent = year;
        modal.querySelector('#modalProjectOwner').textContent = owner;
        modal.querySelector('#modalClient').textContent = client;
        modal.querySelector('#modalLokasi').textContent = lokasi;
        modal.querySelector('#modalImage').src = image;
    });
});
</script>
