<?php
class Home_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function DATA_HOMEPAGE()
    {
        $query = "SELECT * FROM home_information";
        $result = $this->db->query($query);
        return $result->result();
    }
    public function DATA_PROJECT()
    {
        $query = "SELECT * FROM project";
        $result = $this->db->query($query);
        return $result->result();
    }
    public function DATA_PARTNERSHIP(){
        $query = "SELECT * FROM partnership ORDER BY TANGGAL asc";
        $result = $this->db->query($query);
        return $result->result();
    }
    public function DATA_OUR_SERVICE(){
        $query = "SELECT * FROM our_service ORDER BY TANGGAL asc";
        $result = $this->db->query($query);
        return $result->result();
    }
    public function DATA_JENIS_CONTACT()
    {
        $query = "SELECT * FROM contact_us GROUP BY JENIS";
        $result = $this->db->query($query);
        return $result->result();
    }
    public function DATA_CONTACT()
    {
        $query = "SELECT * FROM contact_us";
        $result = $this->db->query($query);
        return $result->result();
    }

    public function DATA_WORK_EXPERIENCE(){
        $query = "SELECT * FROM work_experience";
        $result = $this->db->query($query);
        return $result->result();
    }
    public function DATA_ABOUT_US(){
        
    }
}

?>