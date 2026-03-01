<?php

class Auth_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }

	function register($username, $password, $email)
    {
        $data_user = array(
            'USERNAME' => strtoupper($username),
            'PASSWORD' => password_hash($password, PASSWORD_DEFAULT),
            'EMAIL' => $email
        );

        $insert_id = $this->db->insert('user', $data_user);

        if ($insert_id) {
            echo "Data berhasil diinsert. ID data baru: " . $insert_id;
        } else {
            echo "Gagal menginsert data.";
        }
    }

    function login_user($username, $password)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('USERNAME', $username);
                $this->session->set_userdata('EMAIL', $data_user->email);
                $this->session->set_userdata('AVATAR', $data_user->avatar);
                $this->session->set_userdata('CREATED_AT', $data_user->created_at);
                $this->session->set_userdata('LAST_LOGIN', $data_user->last_login);

                // $this->session->set_userdata('TELEGRAM_TOKEN', '5060417466:AAFl8_ENngSKzH-Lx9fBQ8YOfPn4fhop25o');
                // $this->session->set_userdata('TELEGRAM_CHATID', '-611109374');
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('Login');
        }
    }

    function change_size_foto($xusername, $ext)
    {
        $this->load->library('image_lib');

        $username = strtoupper($xusername);
        $config['image_library'] = 'gd2'; // Metode pengolahan gambar, bisa 'gd2', 'imagemagick', atau 'netpbm'
        $config['source_image'] = 'fls/fotokaryawan/ori/' . $username . "." . $ext; // Lokasi foto asli
        $config['new_image'] = 'fls/fotokaryawan/' . $username . "." . $ext; // Lokasi foto baru setelah diubah ukurannya
        $config['create_thumb'] = FALSE; // Menyimpan versi thumbnail dari foto asli, bisa TRUE atau FALSE
        $config['maintain_ratio'] = TRUE; // Menjaga proporsi asli gambar, bisa TRUE atau FALSE
        $config['width'] = 160; // Lebar foto yang diinginkan
        $config['height'] = 160; // Tinggi foto yang diinginkan

        $this->image_lib->initialize($config);
        if (!$this->image_lib->resize()) {
            // Jika terjadi error dalam proses resize, tangani disini
            echo $this->image_lib->display_errors();
        } else {
            // Jika resize berhasil, lanjutkan ke langkah selanjutnya
            $this->image_lib->clear();
        }
    }
}
?>