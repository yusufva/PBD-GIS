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

    public function export()
    {
        # code...
        $this->load->model('Excel_model');
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


}

/* End of file Maps.php */
