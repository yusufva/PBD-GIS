<?php
class Notfound extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Page Not Found';
        $this->output->set_status_header('404');
        $this->data['content'] = 'custom404view'; // View name
        $this->load->view('custom404view', $data);
    }
}
?>