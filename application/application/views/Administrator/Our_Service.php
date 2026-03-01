<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAS KECIL</title>
    <!-- Tambahkan link ke Bootstrap CSS dan jQuery -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">DATA PROJECT</h1>
    <p class="mb-4">This Data @from Database Live & UpTodate</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">DATA PROJECT</h4>
        </div>
        <div class="card-body">
            <table id="example" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>KETERANGAN</th>
                        <th>PICT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($DATA_OUR_SERVICE as $row) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->NAMA; ?></td>
                            <td><?php echo $row->KETERANGAN; ?></td>
                            <td>
                                <div class="img-box">
                                    <img src="<?php echo base_url('images/our_services/' . $row->PICT); ?>" height="100" width="auto" alt="">
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning UpdateDataProject" data-xpict="<?php echo $row->PICT; ?>" data-id="<?php echo $row->ID; ?>" data-nama="<?php echo $row->NAMA; ?>" data-keterangan="<?php echo $row->KETERANGAN; ?>" data-toggle="modal" data-target="#updateDataProjectModal">UPDATE</button>
                                <button type="button" class="btn btn-danger DeleteDataProject" data-xpict="<?php echo $row->PICT; ?>" data-id="<?php echo $row->ID; ?>">Delete</button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Modal untuk Update Data -->
        <div class="modal fade" id="updateDataProjectModal" tabindex="-1" role="dialog" aria-labelledby="updateDataProjectModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateDataProjectModalLabel">Update Data Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form id="updateDataProjectForm">
                            <!-- Hidden input untuk menyimpan ID -->
                            <input type="hidden" id="updateIdHidden" name="id">
                            <input type="hidden" id="updateXpict" name="xpict">

                            <!-- Nama Project -->
                            <div class="form-group">
                                <label for="updateNamaProject">Nama Project</label>
                                <input type="text" class="form-control" id="updateNama" name="nama">
                            </div>

                            <!-- Keterangan -->
                            <div class="form-group">
                                <label for="updateKeterangan">Keterangan</label>
                                <input type="text" class="form-control" id="updateKeterangan" name="keterangan">
                            </div>

                            <!-- Foto -->
                            <div class="form-group">
                                <label for="updatePict">Foto</label>
                                <input type="file" class="form-control" id="updatePict" name="pict" placeholder=" Jika foto menggunakan lama tidak perlu">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="saveUpdateDataProject">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal untuk Update Data -->
        <!-- ADD Modal Our Service -->
        <div class="modal fade" id="tambahDataProject" tabindex="-1" role="dialog" aria-labelledby="tambahDataProjectLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahDataProjectLabel">Add Our Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="tanggalproject">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal">
                                </div>
                                <div class="col">
                                    <label for="projectname">Our_Service</label>
                                    <input type="text" class="form-control" id="our_service" placeholder="Mapping">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="keterangan">KETERANGAN</label>
                                    <input type="text" class="form-control" id="keterangan" placeholder="fullmaping with profesional teams">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="pict">Pict File</label>
                                    <input type="file" class="form-control" id="pict" placeholder="911">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="Add_Data">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ADD Modal Our Service -->

        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataProject">Add Our Service</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            //DATA BARU
            $("#Add_Data").click(function() {
                // Validasi input
                var tanggal = $("#tanggal").val().trim();
                var our_service = $("#our_service").val().trim();
                var keterangan = $("#keterangan").val().trim();
                var pict = $("#pict")[0].files[0]; // Mengambil file yang dipilih

                if (tanggal === "" || our_service === "" || keterangan === "" || !pict) {
                    alert("Harap isi semua input sebelum menambahkan data project.");
                    return;
                }

                // Membuat objek FormData untuk mengirim data dengan file
                var formData = new FormData();
                formData.append('tanggal', tanggal);
                formData.append('our_service', our_service);
                formData.append('keterangan', keterangan);
                formData.append('pict', pict);

                $.ajax({
                    url: "<?php echo base_url('Administrator/Add_Data_Our_Service'); ?>",
                    method: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        location.reload();
                    },
                    error: function() {
                        alert("Terjadi kesalahan dalam menambahkan data project.");
                        console.error("AJAX request failed.");
                        location.reload();
                    }
                });
            });
            //DATA BARU

            //UPDATE DATA
            // Ketika tombol "Update" di klik
            $(".UpdateDataProject").click(function() {
                // Ambil data dari atribut data
                var id = $(this).data('id');
                var nama = $(this).data('nama');
                var keterangan = $(this).data('keterangan');
                var xpict = $(this).data('xpict');

                // Isi nilai data ke dalam input pada modal
                $("#updateIdHidden").val(id);
                $("#updateNama").val(nama);
                $("#updateKeterangan").val(keterangan);
                $("#updateXpict").val(xpict);

                // Tampilkan modal update
                $('#updateDataProjectModal').modal('show');
            });
            // Ketika tombol "Save changes" di klik
            $("#saveUpdateDataProject").click(function() {
                // Ambil nilai input dari modal update
                var id = $("#updateIdHidden").val();
                var xpict = $("#updateXpict").val();
                var nama = $("#updateNama").val();
                var keterangan = $("#updateKeterangan").val();
                var pict = $("#updatePict")[0].files[0]; // Mengambil file yang dipilih

                // Membuat objek FormData untuk mengirim data dengan file
                var formData = new FormData();
                formData.append('id', id);
                formData.append('xpict', xpict);
                formData.append('nama', nama);
                formData.append('keterangan', keterangan);
                formData.append('pict', pict);

                $.ajax({
                    url: "<?php echo base_url('Administrator/Update_Data_Our_Service'); ?>",
                    method: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response);
                        // if (response.status === 'success') {
                        //     alert(response.message);
                        //     location.reload();
                        // } else {
                        //     alert(response.message);
                        // }
                        location.reload();
                    },
                    error: function() {
                        console.error("AJAX request failed.");
                        location.reload();
                    }
                });
            });
            //UPDATE DATA

            //DELETE DATA
            $(".DeleteDataProject").click(function() {
                // Ambil data ID dan PICT dari atribut data
                var id = $(this).data('id');
                var pict = $(this).data('xpict');

                // Tampilkan konfirmasi untuk menghapus data
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika user mengonfirmasi, lakukan request AJAX untuk menghapus data
                        $.ajax({
                            url: "<?php echo base_url('Administrator/Delete_Data_Our_Service'); ?>",
                            method: "POST",
                            data: {
                                id: id,
                                pict: pict
                            },
                            success: function(response) {
                                location.reload();
                            },
                            error: function() {
                                alert("Terjadi kesalahan dalam menghapus data project.");
                                console.error("AJAX request failed.");
                                location.reload();
                            }
                        });
                    }
                });
            });

            //END DELETE DATA
        });
    </script>

</body>

</html>