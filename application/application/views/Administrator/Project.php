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
                        <th>ID</th>
                        <th>NAMAPROJECT</th>
                        <th>KETERANGAN</th>
                        <th>PICT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($DATA_PROJECT as $row) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo "PROJECT_" . $row->ID; ?></td>
                            <td><?php echo $row->NAMAPRODUK; ?></td>
                            <td><?php echo $row->KETERANGAN; ?></td>
                            <td>
                                <div class="img-box">
                                    <img src="<?php echo base_url('images/project/' . $row->PICT); ?>" height="100" width="auto" alt="">
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning UpdateDataProject" data-xpict="<?php echo $row->PICT; ?>" data-id="<?php echo $row->ID; ?>" data-namaproduk="<?php echo $row->NAMAPRODUK; ?>" data-keterangan="<?php echo $row->KETERANGAN; ?>" data-pict="<?php echo base_url('images/project/' . $row->PICT); ?>">
                                    Update
                                </button>
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
                        <h5 class="modal-title" id="updateDataProjectModalLabel">Update Data Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form id="updateDataProjectForm">
                            <!-- Hidden input untuk menyimpan ID -->
                            <input type="hidden" id="updateId" name="id">
                            <input type="hidden" id="updateXpict" name="xpict">

                            <!-- Nama Project -->
                            <div class="form-group">
                                <label for="updateNamaProject">Nama Project</label>
                                <input type="text" class="form-control" id="updateNamaProject" name="namaproduk">
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
        <!-- Modal untuk Tambah Biaya -->
        <!-- Modal untuk Tambah Data Project -->
        <div class="modal fade" id="tambahDataProject" tabindex="-1" role="dialog" aria-labelledby="tambahDataProjectLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahBiayaModalLabel">ADD DATA PROJECT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="tanggal">Tanggal Project</label>
                                    <input type="date" class="form-control" id="tanggalproject">
                                </div>
                                <div class="col">
                                    <label for="projectname">PROJECT NAME</label>
                                    <input type="text" class="form-control" id="projectname" placeholder="911">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="projectowner">PROJECT OWNER</label>
                                    <input type="text" class="form-control" id="projectowner">
                                </div>
                                <div class="col">
                                    <label for="projectclient">PROJECT CLIENT</label>
                                    <input type="text" class="form-control" id="projectclient" placeholder="911">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="jenis">JENIS</label>
                                    <select id="jenis" name="jenis" class="form-control">
                                        <?php
                                        foreach ($DATA_SERVICE as $row) {
                                        ?>
                                            <option value="<?php $row->ID; ?>"><?php echo $row->NAMA; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="keterangan">LOCATION</label>
                                    <input type="text" class="form-control" id="location" placeholder="GRESIK">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="keterangan">KETERANGAN</label>
                                    <input type="text" class="form-control" id="keterangan" placeholder="911">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row g-3">
                                <div class="col">
                                    <label for="pict">Pict File</label>
                                    <input type="file" class="form-control" id="pict" placeholder="911">
                                </div>
                                <div class="col">
                                    <label for="pict2">Pict2 File</label>
                                    <input type="file" class="form-control" id="pict2" placeholder="911">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <!-- Menggunakan id yang sama dengan yang digunakan pada fungsi klik -->
                        <button type="button" class="btn btn-primary" id="Add_Data">ADD</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal untuk Tambah Biaya -->
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataProject">Add Project</button>
        </div>
    </div>

    <!-- Elemen untuk menampilkan notifikasi -->
    <div id="operationResult"></div>

    <!-- Tambahkan link ke jQuery dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk menambahkan data project menggunakan AJAX
            // Ketika tombol "Add Our Service" diklik, tampilkan modal

            //ADD DATA BARU
            $("#Add_Data").click(function() {
                // Validasi input
                var tanggalproject = $("#tanggalproject").val().trim();
                var projectname = $("#projectname").val().trim();
                var keterangan = $("#keterangan").val().trim();
                var pict = $("#pict")[0].files[0]; // Mengambil file yang dipilih
                var pict2 = $("#pict2")[0].files[0]; // Mengambil file yang dipilih
                //tambahan
                var jenis = $("#jenis").val().trim();
                var projectowner = $("#projectowner").val().trim();
                var projectclient = $("#projectclient").val().trim();
                var location = $("#location").val().trim();


                if (tanggalproject === "" || projectname === "" || keterangan === "" || !pict) {
                    alert("Harap isi semua input sebelum menambahkan data project.");
                    return;
                }

                // Menampilkan data yang akan dikirim ke console
                // console.log("Data yang akan dikirim:");
                // console.log("Tanggal Project:", tanggalproject);
                // console.log("Project Name:", projectname);
                // console.log("Keterangan:", keterangan);
                // console.log("Pict:", pict);

                // Selanjutnya, kamu bisa mengirim data ini melalui AJAX ke controller.
                // ...
                // Membuat objek FormData untuk mengirim data dengan file
                var formData = new FormData();
                formData.append('tanggalproject', tanggalproject);
                formData.append('projectname', projectname);
                formData.append('keterangan', keterangan);
                formData.append('pict', pict);
                formData.append('pict2', pict2);
                formData.append('jenis', jenis);
                formData.append('projectowner', projectowner);
                formData.append('projectclient', projectclient);
                formData.append('location', projectclient);

                $.ajax({
                    url: "<?php echo base_url('Administrator/Add_Data_Project'); ?>",
                    method: "POST",
                    data: formData,
                    processData: false, // Menonaktifkan pemrosesan data oleh jQuery
                    contentType: false, // Tidak mengatur tipe konten karena FormData sudah berisi tipe konten
                    success: function(response) {
                        // Menampilkan respons dari server
                        console.log(response); // Contoh: Menampilkan pesan konfirmasi dari server
                        // Lakukan tindakan lain sesuai kebutuhan, seperti mengosongkan input atau memuat ulang tabel data
                        // $("#tanggalproject").val('');
                        // $("#projectname").val('');
                        // $("#keterangan").val('');
                        // $("#pict").val('');
                        // $('#tambahDataProject').modal('hide'); // Menutup modal setelah menambahkan data
                        location.reload(); // Memuat ulang halaman untuk memperbarui data
                    },
                    error: function() {

                        alert("Terjadi kesalahan dalam menambahkan data project.");
                        console.error("AJAX request failed.");
                    }
                });
            });

            //END DATA BARU

            //UPDATE DATA
            $(".UpdateDataProject").click(function() {
                // Ambil data dari atribut data
                var id = $(this).data('id');
                var namaproduk = $(this).data('namaproduk');
                var keterangan = $(this).data('keterangan');
                var xpict = $(this).data('xpict');
                //var pict = $(this).data('pict');

                // Isi nilai data ke dalam input pada modal
                $("#updateId").val(id);
                $("#updateNamaProject").val(namaproduk);
                $("#updateKeterangan").val(keterangan);
                $("#updateXpict").val(xpict);
                //$("#updatePict").val(pict);

                // Tampilkan modal
                $('#updateDataProjectModal').modal('show');
            });

            // Ketika tombol "Save changes" di klik
            $("#saveUpdateDataProject").click(function() {
                // Ambil nilai input dari modal update
                var id = $("#updateId").val();
                var xpict = $("#updateXpict").val();
                var namaproduk = $("#updateNamaProject").val();
                var keterangan = $("#updateKeterangan").val();

                var pict = $("#updatePict")[0].files[0]; // Mengambil file yang dipilih

                // Membuat objek FormData untuk mengirim data dengan file
                var formData = new FormData();
                formData.append('id', id);
                formData.append('xpict', xpict);
                formData.append('namaproduk', namaproduk);
                formData.append('keterangan', keterangan);
                formData.append('pict', pict);


                $.ajax({
                    url: "<?php echo base_url('Administrator/Update_Data_Project'); ?>",
                    method: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Tangkap respons dari server
                        console.log(response); // Untuk debug, pastikan respons sudah dapat diakses
                        console.log("Tanggal Project:", id);
                        // Tampilkan pesan sukses atau error berdasarkan respons dari server
                        if (response.status === 'success') {
                            alert(response.message); // Tampilkan pesan sukses
                            // Memuat ulang halaman untuk memperbarui data
                            location.reload();
                        } else {
                            alert(response.message); // Tampilkan pesan error
                        }
                    },
                    error: function() {
                        console.log("Tanggal Project:", id);
                        // Tangani kesalahan jika request AJAX gagal
                        //alert("Terjadi kesalahan dalam memproses permintaan.");
                        console.error("AJAX request failed.");
                        location.reload();
                    }
                });

            });
            //END UPDATE DATA

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
                            url: "<?php echo base_url('Administrator/Delete_Data_Project'); ?>",
                            method: "POST",
                            data: {
                                id: id,
                                pict: pict
                            },
                            success: function(response) {
                                // Tampilkan pesan dari server
                                //alert(response);
                                // Muat ulang halaman untuk memperbarui data
                                location.reload();
                            },
                            error: function() {
                                // Tangani kesalahan jika request AJAX gagal
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