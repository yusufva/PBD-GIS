<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_model extends CI_Model {

    public function fetch_data()
    {
        # code...
        $this->db->order_by('id_wilayah', 'ASC');
        return $this->db->get('kcmt')->result_array();
    }

    public function insert($data)
    {
        # code...
        $this->db->insert('kcmt', $data);
    }

}

/* End of file Excel_model.php */
