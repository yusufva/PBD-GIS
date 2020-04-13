<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Maps_model extends CI_Model {

    public function getallData()
    {
        # code...
        return $this->db->get('kcmt')->result_array();
    }

    public function hapusDataKelurahan($id)
    {
        # code...
        $this->db->where('id_wilayah', $id);
        $this->db->delete('kcmt');
    }

    public function tambahDataKelurahan()
    {
        # code...
        $data = [
            "nama_wilayah" => $this->input->post('kelurahan',true),
            "wilayah" => $this->input->post('kecamatan', true)
        ];

        $this->db->insert('kcmt', $data);
    }

    public function getKelurahanById($id)
    {
        # code...
        return $this->db->get_where('kcmt', ['id_wilayah' => $id])->row_array();
    }

    public function editDataKelurahan()
    {
        # code...
        $data = [
            "nama_wilayah" => $this->input->post('kelurahan',true),
            "wilayah" => $this->input->post('kecamatan', true)
        ];

        $this->db->where('id_wilayah', $this->input->post('id'));
        $this->db->update('kcmt', $data);
    }

}

/* End of file Maps_model.php */
