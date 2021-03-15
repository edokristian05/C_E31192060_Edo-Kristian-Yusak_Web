<?php 
class tugas4 extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('tugas4_model');
	}
 
	public function index(){
		$data['mahasiswa'] = $this->tugas4_model->get_data();
		$this->load->view('tugas4view',$data);
	}
 
	public function profil(){
		echo "ini adalah method profil pada controller mahasiswa";
	}
 
}
?>