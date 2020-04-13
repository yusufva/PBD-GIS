<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Superuser extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        is_logged_in();
        $this->load->model('Maps_model');
        $this->load->model('User_model');
    }
    

    public function index()
    {
        $data['judul'] = 'Dashboard SuperUser';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelurahan'] = $this->Maps_model->getallData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_superuser');
        $this->load->view('templates/main');
        $this->load->view('superuser/home', $data);
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
            $this->load->view('templates/sidebar_superuser');
            $this->load->view('templates/main');
            $this->load->view('superuser/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            # code...
            $this->Maps_model->editDataKelurahan();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been edited!</div>');
            redirect('Maps/superuser');
        }
    

        
    }

    public function hapusKelurahan($id)
    {
        # code...
        $this->Maps_model->hapusDataKelurahan($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been deleted!</div>');
        redirect('Maps/superuser');
        
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
            $this->load->view('templates/sidebar_superuser');
            $this->load->view('templates/main');
            $this->load->view('superuser/tambah');
            $this->load->view('templates/footer');
        } else {
            # code...
            $this->Maps_model->tambahDataKelurahan();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been added!</div>');
            redirect('Maps/superuser');
        }
    

        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been deleted!</div>');
    }

    public function peta()
    {
        # code...
        $data['judul'] = 'Peta Kota Semarang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_superuser');
        $this->load->view('templates/main');
        $this->load->view('user/m_maps');
        $this->load->view('templates/footer');
    }

    public function list_user()
    {
        # code...
        $data['judul'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['list'] = $this->User_model->getAllUser();
        // $data['user_role'] = $this->User_model->getAllRoles();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_superuser');
        $this->load->view('templates/main');
        $this->load->view('superuser/list_user', $data);
        $this->load->view('templates/footer');
    }

    public function editUser($id)
    {
        # code...
        $data['judul'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['list'] = $this->User_model->getUserById($id);
        $data['user_role'] = $this->User_model->getAllRoles();

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run()== false) {
            # code...
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_superuser');
            $this->load->view('templates/main');
            $this->load->view('superuser/edit_user', $data);
            $this->load->view('templates/footer');
        } else{
            $this->User_model->editDataUser();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been edited!</div>');
            redirect('Maps/superuser/list_user');
        }
    }

    public function tambahUser()
    {
        # code...
        $data['judul'] = 'Tambah User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_role'] = $this->User_model->getAllRoles();

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has been Registered!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]', [
                'min_length' => 'password too short!'
            ]);

        if ($this->form_validation->run()== false) {
            # code...
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_superuser');
            $this->load->view('templates/main');
            $this->load->view('superuser/tambah_user');
            $this->load->view('templates/footer');
        } else{
            $this->User_model->addUser();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been edited!</div>');
            redirect('Maps/superuser/list_user');
        }
    }

    public function hapusUser($id)
    {
        # code...
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data has been deleted!</div>');
        redirect('Maps/superuser/list-user');
    }

}

/* End of file Superuser.php */
