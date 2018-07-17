<?php 
/**
 * summary
 */
class Penduduk extends CI_Controller
{
    /**
     * summary
     */

    private $data_user = array();
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['nama_user'] = $session_data['nama_user'];
            $data['level'] = $session_data['level'];
            $this->data_user['username'] = $data['username'];
            $this->data_user['nama_user'] = $data['nama_user'];
            $this->data_user['level'] = $data['level'];
            if ($this->data_user['level'] != "admin") {
                redirect('false','refresh');
            }
        } else {
            redirect('login','refresh');
        }
    }

    public function index() {
    	$this->load->model('Penduduk_model');
    	$data['user_list'] = $this->Penduduk_model->getDataPendudukSemua();
    	$this->load->view('Admin/Penduduk/penduduk', $data);

    }

}
?>