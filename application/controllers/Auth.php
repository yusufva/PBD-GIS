<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            # code...
            $data['title'] = 'User Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            # validation
            $this->_login();
        }
    }

    private function _login()
    {
        # code...
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        
        # jika user ada
        if ($user) {
            # jika user active
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    # code...
                    $data = [
                        'email'=> $user['email'],
                        'status'=> $user['status']
                    ];
                    $this->session->set_userdata( $data );
                    redirect('auth/welcome');
                    
                } else {
                    # code...
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                    redirect('auth');
                }
            } else {
                # code...
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('auth');

            }
        } else {
            # code...
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');

        }
    }


    public function registration()
    {
        # code...
        $this->form_validation->set_rules('name', 'Name', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'This Username has been Registered!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has been Registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'password dont match!',
            'min_length' => 'password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password2]');


        if ($this->form_validation->run() == false) {
            # code...
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            # code...
            $data = [
                'username' => htmlspecialchars($this->input->post('name', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_BCRYPT),
                'status' => 2,
                'email' => htmlspecialchars($this->input->post('email', true)),
                'is_active' => 1,
                'date_created' => time(),
                'image' => 'default.png'
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation your account has been created. Please Login!</div>');

            redirect('auth', 'refresh');
        }
    }

    public function welcome()
    {
        # code...
        $data['user']= $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();
        echo 'Selamat Datang'. $data['user']['username'];
        // var_dump($data);
        if ($data['user']['status']==1) {
            # code...
            redirect('Maps/superuser');
        } elseif ($data['user']['status']==2) {
            # code...
            redirect('Maps/admin');
        } else {
            # code...
            redirect('Maps/user');
        }
    }

    public function logout()
    {
        # code...
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');

            redirect('auth', 'refresh');
    }
}

/* End of file Auth.php */
