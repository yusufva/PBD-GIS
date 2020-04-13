<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getAllUser()
    {
        # code...
        return $this->db->get('user')->result_array();
    }

    public function getAllRoles()
    {
        # code...
        return $this->db->get('user_role')->result_array();
    }

    public function getUserById($id)
    {
        # code...
        return $this->db->get_where('user', ['id'=>$id])->row_array();
    }

    public function editDataUser()
    {
        # code...
        $data= [
            'username' => $this->input->post('username', true),
            'email' => $this->input->post('email', true),
            'status' => $this->input->post('role', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function addUser()
    {
        # code...
        $data= [
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars( $this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'status' => $this->input->post('role', true),
            'is_active' => 1,
            'date_created' => time(),
            'image' => 'default.png'
        ];

        $this->db->insert('user', $data);
    }
}

/* End of file User_model.php */
