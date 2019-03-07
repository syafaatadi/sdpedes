<?php
class Auth extends CI_Controller {
    public function index() { 
        $this->load->view('halaman_login'); 
    } 

    public function aksi_loginadmin() { 
        $user = $this->input->post('username'); 
        $pass = $this->input->post('password'); 

        $login = $this->M_auth->cek_user($user, $pass); 

        if (!empty($login)) { 
            // login berhasil 
            $this->session->set_userdata($login); 
            redirect(base_url('./homeadmin')); 
        } else { 
            // login gagal 
            $this->session->set_flashdata('gagal', 'Username atau Password Salah!'); 
            redirect(base_url('login')); 
        } 
    } 
}