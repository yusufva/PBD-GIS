<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        is_logged_in();
        $this->load->model('Maps_model');
    }

    public function index()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelurahan'] = $this->Maps_model->getallData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/main');
        $this->load->view('admin/home');
        $this->load->view('templates/footer');
    }

    public function editKelurahan($id)
    {
        # code...
        $data['judul'] ='Edit Data Kelurahan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelurahan'] = $this->Maps_model->getKelurahanById($id);

        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        
        if ($this->form_validation->run()== false) {
            # code...
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/main');
            $this->load->view('admin/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            # code...
            $this->Maps_model->editDataUser();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been edited!</div>');
            redirect('Maps/admin');
        }
    

        
    }

    public function hapusKelurahan($id)
    {
        # code...
        $this->Maps_model->hapusDataKelurahan($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been deleted!</div>');
        redirect('Maps/admin');
        
    }

    public function tambahKelurahan()
    {
        # code...
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        
        if ($this->form_validation->run()== false) {
            # code...
            $data['judul'] ='Tambah Data Kelurahan';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['kelurahan'] = $this->Maps_model->getallData();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_admin');
            $this->load->view('templates/main');
            $this->load->view('admin/tambah');
            $this->load->view('templates/footer');
        } else {
            # code...
            $this->Maps_model->tambahDataKelurahan();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been added!</div>');
            redirect('Maps/admin');
        }
    

        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been deleted!</div>');
    }

    public function peta()
    {
        # code...
        $data['judul'] = 'Peta Kota Semarang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_admin');
        $this->load->view('templates/main');
        $this->load->view('user/m_maps');
        $this->load->view('templates/footer');
    }

}

/* End of file Admin.php */
