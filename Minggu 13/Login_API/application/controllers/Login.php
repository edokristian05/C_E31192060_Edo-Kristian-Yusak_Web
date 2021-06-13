<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }
    public function index()
    {
        $this->load->view('crud/login');
    }
    public function cek_log()
    {
        $username = $this->input->post('txt_user');
        $password = $this->input->post('txt_pass');
        $cek = $this->Mahasiswa_model->login($username, $password, 'tm_user')->result();
        if ($cek != FALSE) {
            foreach ($cek as $row) {
                $user = $row->username;
                $grup = $row->grup;
            }
            $data_session = array(
                'txt_user' => $user,
                'status' => "login"
            );
            $this->session->set_userdata('session_user', $user);
            $this->session->set_userdata('session_grup', $grup);
            $this->session->set_userdata($data_session);
            redirect('Mahasiswa');
        } else {
            $this->load->view('crud/login');
        }
    }
    public function logout()
    {
        //hapus session username
        $this->session->unset_userdata('username');
        //hapus session role_id/grup
        $this->session->unset_userdata('grup');
        //pesan flashdata telah berhasil logout
        $this->session->set_flashdata('message', '<div class="alert alert-success"
         role="alert">Kamu berhasil logout!</div>');
        redirect('login');
    }
}
