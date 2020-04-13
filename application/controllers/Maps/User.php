<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        is_logged_in();
        
    }

    public function index()
    {
        $this->load->model('Maps_model');
        $data['judul'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelurahan'] = $this->Maps_model->getallData();
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/main.php');
        $this->load->view('user/m_home.php',$data);
        $this->load->view('templates/footer.php');
    }

    public function peta()
    {
        # code...
        $data['judul'] = 'Peta Kota Semarang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/main.php');
        $this->load->view('user/m_maps.php');
        $this->load->view('templates/footer.php');
    }

}

/* End of file Maps.php */
