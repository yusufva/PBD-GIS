<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        is_logged_in();
        $this->load->model('Maps_model');
        $this->load->model('Excel_model');
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

    public function export()
    {
        # code...
        $excel = new PHPExcel();

        $excel->setActiveSheetIndex(0);

        $sheet = $excel->getActiveSheet()->setTitle('Voucher Enabled');
        
        // set title kolom
        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'Kelurahan');
        $sheet->setCellValue('C1', 'Wilayah');
        $data = $this->Excel_model->fetch_data();
        $i = 2;

        foreach($data as $row){
            $id = $row['id_wilayah'];
            $kel = $row['nama_wilayah'];
            $kec = $row['wilayah'];

            // buat baris dam kolom pada excel
            // isi kolom A
            $sheet->setCellValue('A' . $i, $id);
            $sheet->setCellValue('B' . $i, $kel);
            $sheet->setCellValue('C' . $i, $kec);
            
            $i++;
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Data-Kecamatan.xls"');
        $excel_writer = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
        $excel_writer->save('php://output');
    }

    public function upload()
    {
        # code...
        if(isset($_FILES["filekcmt"]["name"]))
        {
            // $path = $_FILES["filekcmt"]["tmp_name"];
            $name = $_FILES["filekcmt"]["name"];
            $path = './vendor/upload/';
            move_uploaded_file($_FILES["filekcmt"]["tmp_name"], $path . $name);
            $file_type = PHPExcel_IOFactory::identify($path.$name);
            $objReader = PHPExcel_IOFactory::createReader($file_type);
            $objPHPExcel = $objReader->load($path.$name);
            $sheet = $objPHPExcel->getActiveSheet();
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
            $sheet_data = $sheet->rangeToArray('A2:' . $highestColumn . $highestRow, null, true, true, true);
            // $used = str_to_date($sheet_data['A']);

            foreach ($sheet_data as $row) {
                $data = [
                    'nama_wilayah' => $row['A'],
                    'wilayah'=> $row['B']
                ];
                $this->Excel_model->insert($data);
            }
            redirect('Maps/admin');
        }
    }


}

/* End of file Admin.php */
