<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    function __construct()
    {  // Set zona waktu ke Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');

        parent::__construct();
        $this->load->model('Administrator_Model');
       // $this->load->model('Auth_Model');
       // $this->Auth_Model->cek_login();
       // $this->load->library('session');
        $this->load->model('Home_Model');
        //  $this->load->model('Admin_Model');
        //  $this->auth->cek_login();
    }
    public function index()
    {
        $this->load->view('template/administrator_header');
        $this->load->view('template/administrator_sidebar');
        $this->load->view('template/administrator_footer');
    }

    //PROJECT
    public function Project()
    {
        $data['DATA_PROJECT'] = $this->Home_Model->DATA_PROJECT();
        $data['DATA_SERVICE'] = $this->Home_Model->DATA_OUR_SERVICE();
        $this->load->view('template/administrator_header');
        $this->load->view('template/administrator_sidebar', $data);
        $this->load->view('Administrator/Project');
        $this->load->view('template/administrator_footer');
    }
    public function Add_Data_Project()
    {
        $response=array();
        // Tangkap data yang dikirimkan melalui AJAX
        $tanggalproject = $this->input->post('tanggalproject');
        $projectname = $this->input->post('projectname');
        $keterangan = $this->input->post('keterangan');
        $foto = $_FILES['pict'];
        $foto2 = $_FILES['pict2'];
        //tambahan
        $jenis = $this->input->post('jenis'); //FOR ID_SERVICES
        $projectowner = $this->input->post('projectowner'); //FOR 
        $projectclient = $this->input->post('projectclient');
        $location = $this->input->post('location');

        // Lakukan proses lain sesuai kebutuhan, misalnya menyimpan file di server

        // Melakukan operasi insert data ke database
        $data = array(
            'NAMAPRODUK' => $projectname,
            'KETERANGAN' => $keterangan,
            'TANGGAL' => $tanggalproject,
            'ID_SERVICE' => $jenis,
            'PROJECT_OWNER' => $projectowner,
            'CLIENT_PROJECT' => $projectclient,
            'LOCATION' => $location
        );
        $insert_success = $this->db->insert('project', $data);

        if ($insert_success) {
            // Mendapatkan ID yang baru saja diinsert
            $id_insert = $this->db->insert_id();

            if ($foto['name'] != '') {
                // Konfigurasi upload file
                $config['upload_path'] = 'images/project/';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['file_name'] = $id_insert; // Nama file disesuaikan dengan ID yang baru saja diinsert

                // Load library upload CodeIgniter
                $this->load->library('upload', $config);

                // Proses upload file
                if (file_exists($config['upload_path'] . $config['file_name'])) {
                    // Jika file sudah ada, hapus file yang lama
                    unlink($config['upload_path'] . $config['file_name']);
                }

                if (!$this->upload->do_upload('pict')) {
                    // Jika proses upload gagal, tangani kesalahan
                    $error = $this->upload->display_errors();
                    echo "Upload Gagal: " . $error;
                } else {
                    // Jika proses upload berhasil
                    // Dapatkan informasi file yang diupload
                    $upload_data = $this->upload->data();
                    $namaFile = $upload_data['file_name'];

                    // Simpan nama file baru ke dalam database
                    $this->db->where('ID', $id_insert);
                    $x = $this->db->update('project', array('PICT' => $namaFile, 'IDPRODUK' => "PROJECT_" . $id_insert));

                    if ($x) {
                        $response = array('status' => 'success', 'message' => 'Data berhasil ditambahkan.');
                        echo json_encode($response);
                        $this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
                    } else {
                        $response = array('status' => 'error', 'message' => 'Metode permintaan tidak valid.');
                        echo json_encode($response);
                        $this->session->set_flashdata('error', 'Terjadi kesalahan. Data gagal ditambahkan.');
                    }
                   
                }
            }
            if ($foto2['name'] != '') {
                // Konfigurasi upload file
                $config['upload_path'] = 'images/project/';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['file_name'] = "2_".$id_insert; // Nama file disesuaikan dengan ID yang baru saja diinsert

                // Load library upload CodeIgniter
                $this->load->library('upload', $config);

                // Proses upload file
                if (file_exists($config['upload_path'] . $config['file_name'])) {
                    // Jika file sudah ada, hapus file yang lama
                    unlink($config['upload_path'] . $config['file_name']);
                }

                if (!$this->upload->do_upload('pict2')) {
                    // Jika proses upload gagal, tangani kesalahan
                    $error = $this->upload->display_errors();
                    echo "Upload Gagal: " . $error;
                } else {
                    // Jika proses upload berhasil
                    // Dapatkan informasi file yang diupload
                    $upload_data = $this->upload->data();
                    $namaFile = $upload_data['file_name'];

                    // Simpan nama file baru ke dalam database
                    $this->db->where('ID', $id_insert);
                    $x = $this->db->update('project', array('PICT_2' => $namaFile, 'IDPRODUK' => "PROJECT_" . $id_insert));

                    if ($x) {
                        $response = array('status' => 'success', 'message' => 'Data berhasil ditambahkan.');
                        echo json_encode($response);
                        $this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
                    } else {
                        $response = array('status' => 'error', 'message' => 'Metode permintaan tidak valid.');
                        echo json_encode($response);
                        $this->session->set_flashdata('error', 'Terjadi kesalahan. Data gagal ditambahkan.');
                    }
                }
            }

            echo "Data Project Berhasil ditambahkan!!";
        } else {
            // Jika insert data ke database gagal, tangani kesalahan
            echo "Gagal menambahkan data project.";
            $response = array('status' => 'error', 'message' => 'Metode permintaan tidak valid.');
            echo json_encode($response);
            $this->session->set_flashdata('error', 'Terjadi kesalahan. Data gagal ditambahkan.');
        }
     
    }

    public function Update_Data_Project()
    {
        $response=array();
        // Tangkap data yang dikirimkan melalui AJAX
        $id = $this->input->post('id');
        $projectname = $this->input->post('namaproduk');
        $keterangan = $this->input->post('keterangan');
        $xpict = $this->input->post('xpict');
        $foto = $_FILES['pict'];
        echo $id;
        // Perbarui data di database
        $data = array(
            'NAMAPRODUK' => $projectname,
            'KETERANGAN' => $keterangan
        );

        $this->db->where('id', $id);
        $x = $this->db->update('project', $data);

        // Tanggapi dengan status
        if ($x) {
            $response = array('status' => 'success', 'message' => 'Data Berhasil Diupdate!!!');
            echo json_encode($response);
            $this->session->set_flashdata('success', 'Data Berhasil Diupdate!!!');
        } else {
            $response = array('status' => 'error', 'message' => 'Data GAGAL Diupdate!!!');
            echo json_encode($response);
            $this->session->set_flashdata('error', 'Data GAGAL Diupdate!!!');
        }

        // Jika tidak ada file foto yang diunggah, tidak perlu melanjutkan proses upload
        if ($foto['name'] != '') {
            // Konfigurasi upload file
            $config['upload_path'] = 'images/project/';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['file_name'] = $id; // Menggunakan ID sebagai nama file
            unlink('images/project/'.$xpict);
            // Load library upload CodeIgniter
            $this->load->library('upload', $config);

            // Proses upload file
            if (!$this->upload->do_upload('pict')) {
                // Jika proses upload gagal, tangani kesalahan
                $error = $this->upload->display_errors();
                $response['status'] = 'error';
                $response['message'] = 'Gagal mengunggah gambar: ' . $error;
            } else {
                // Jika proses upload berhasil
                // Dapatkan informasi file yang diupload
                $upload_data = $this->upload->data();
                $namaFile = $upload_data['file_name'];

                // Simpan nama file baru ke dalam database jika diperlukan
            }
        }

       
    }

    public function Delete_Data_Project(){
        $id = $this->input->post('id');
        $xpict = $this->input->post('pict');
        unlink('images/project/' . $xpict);

        $this->db->where('ID', $id);
        $this->db->delete('project');

        // Periksa apakah data berhasil dihapus
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil DELETE!!!');
            $response = array('status' => 'success', 'message' => 'Data berhasil ditambahkan.');
            echo json_encode($response);
        } else {
            $this->session->set_flashdata('error', 'Data GAGAL DELETE!!!');
            $response = array('status' => 'error', 'message' => 'Metode permintaan tidak valid.');
            echo json_encode($response);
        }
    }
    //END PROJECT


    //OUR_SERVICE
    public function Our_Service(){
        $data['DATA_OUR_SERVICE'] = $this->Home_Model->DATA_OUR_SERVICE();
        $this->load->view('template/administrator_header');
        $this->load->view('template/administrator_sidebar', $data);
        $this->load->view('Administrator/Our_Service');
        $this->load->view('template/administrator_footer');
    }

    public function Add_Data_Our_Service(){
        // Tangkap data yang dikirimkan melalui AJAX
        $tanggal = $this->input->post('tanggal');
        $our_service = $this->input->post('our_service');
        $keterangan = $this->input->post('keterangan');
        $foto = $_FILES['pict'];      
      

        // Lakukan proses lain sesuai kebutuhan, misalnya menyimpan file di server

        // Melakukan operasi insert data ke database
        $data = array(
            'NAMA' => $our_service,
            'KETERANGAN' => $keterangan,
            'TANGGAL' => $tanggal
        );
        $insert_success = $this->db->insert('our_service', $data);

        if ($insert_success) {
            // Mendapatkan ID yang baru saja diinsert
            $id_insert = $this->db->insert_id();

            if ($foto['name'] != '') {
                // Konfigurasi upload file
                $config['upload_path'] = 'images/our_services/';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['file_name'] = $id_insert; // Nama file disesuaikan dengan ID yang baru saja diinsert

                // Load library upload CodeIgniter
                $this->load->library('upload', $config);

                // Proses upload file
                if (file_exists($config['upload_path'] . $config['file_name'])) {
                    // Jika file sudah ada, hapus file yang lama
                    unlink($config['upload_path'] . $config['file_name']);
                }

                if (!$this->upload->do_upload('pict')) {
                    // Jika proses upload gagal, tangani kesalahan
                    $error = $this->upload->display_errors();
                    echo "Upload Gagal: " . $error;
                } else {
                    // Jika proses upload berhasil
                    // Dapatkan informasi file yang diupload
                    $upload_data = $this->upload->data();
                    $namaFile = $upload_data['file_name'];

                    // Simpan nama file baru ke dalam database
                    $this->db->where('ID', $id_insert);
                    $x = $this->db->update('our_service', array('PICT' => $namaFile));

                    if ($x) {
                        $response = array('status' => 'success', 'message' => 'Data berhasil ditambahkan.');
                        echo json_encode($response);
                        $this->session->set_flashdata('success', 'Data berhasil ditambahkan.');
                    } else {
                        $response = array('status' => 'error', 'message' => 'Metode permintaan tidak valid.');
                        echo json_encode($response);
                        $this->session->set_flashdata('error', 'Terjadi kesalahan. Data gagal ditambahkan.');
                    }
                }
            }

            echo "Data Project Berhasil ditambahkan!!";
        } else {
            // Jika insert data ke database gagal, tangani kesalahan
            echo "Gagal menambahkan data project.";
            $response = array('status' => 'error', 'message' => 'Metode permintaan tidak valid.');
            echo json_encode($response);
            $this->session->set_flashdata('error', 'Terjadi kesalahan. Data gagal ditambahkan.');
        }
     
    }

    public function Update_Data_Our_Service()
    {
        // Tangkap data yang dikirimkan melalui AJAX
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');
        $xpict = $this->input->post('xpict');
        $foto = $_FILES['pict'];

        // Perbarui data di database
        $data = array(
            'NAMA' => $nama,
            'KETERANGAN' => $keterangan
        );

        //var_dump($id);
        $this->db->where('ID', $id);
        $x = $this->db->update('our_service', $data);

        // Tanggapi dengan status
        if ($x) {
            $this->session->set_flashdata('success', 'Data Berhasil update!!!');
            $response = array('status' => 'success', 'message' => 'Data berhasil ditambahkan.');
            echo json_encode($response);
        } else {
            $this->session->set_flashdata('error', 'Data GAGAL uPDATE!!!');
            $response = array('status' => 'error', 'message' => 'Metode permintaan tidak valid.');
            echo json_encode($response);
        }

        // Jika tidak ada file foto yang diunggah, tidak perlu melanjutkan proses upload
        if ($foto['name'] != '') {
            // Konfigurasi upload file
            $config['upload_path'] = 'images/our_services/';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['file_name'] = $id; // Menggunakan ID sebagai nama file
            unlink('images/our_services/' . $xpict);
            // Load library upload CodeIgniter
            $this->load->library('upload', $config);

            // Proses upload file
            if (!$this->upload->do_upload('pict')) {
                // Jika proses upload gagal, tangani kesalahan
                $error = $this->upload->display_errors();
                $response['status'] = 'error';
                $response['message'] = 'Gagal mengunggah gambar: ' . $error;
            } else {
                // Jika proses upload berhasil
                // Dapatkan informasi file yang diupload
                $upload_data = $this->upload->data();
                $namaFile = $upload_data['file_name'];

                // Simpan nama file baru ke dalam database jika diperlukan
                // Misalnya, $this->db->set('nama_file', $namaFile)->where('ID', $id)->update('our_service');
            }
        }

      
    }

    public function Delete_Data_Our_Service()
    {
        $response = array();
        $id = $this->input->post('id');
        $xpict = $this->input->post('pict');
        unlink('images/our_services/' . $xpict);

        $this->db->where('ID', $id);
        $this->db->delete('our_service');

        // Periksa apakah data berhasil dihapus
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Berhasil DELETE!!!');
            $response = array('status' => 'success', 'message' => 'Data berhasil ditambahkan.');
            echo json_encode($response);
        } else {
            $this->session->set_flashdata('error', 'Data GAGAL DELETE!!!');
            $response = array('status' => 'error', 'message' => 'Metode permintaan tidak valid.');
            echo json_encode($response);
        }
    }
    
    //END OUR_SERVICE



}
