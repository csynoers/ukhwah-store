<?php
class Auth extends CI_Controller{
 
    function __construct(){
        parent::__construct();		
        $this->load->model('m_auth');

    }

    function index(){
        $this->load->view('log_in/admin');
    }

    function process(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $where_admin = array(
            'username' => $username,
            'password' => $password
        );

        $cek_admin  = $this->m_auth->cek_login("tb_admin",$where_admin)->num_rows();

        if ( $cek_admin > 0 ) {
            # code...
            $row= $this->m_auth->cek_login("tb_admin",$where_admin)->row();
            $data_session = array(
                'id' => $row->id_admin,
                'username' => $username,
                'status' => "login",
                'level' => $row->level
            );
        
            $this->session->set_userdata($data_session);
        
            redirect(base_url("{$row->level}/beranda"));
        }

        // elseif ( $cek_guru > 0 ) {
        //     # code...
        //     $data_session = array(
        //         'nama' => $username,
        //         'status' => "login",
        //         'level' => 'guru'
        //     );
        
        //     $this->session->set_userdata($data_session);
        
        //     redirect(base_url("admin/beranda"));
        // }

        // elseif ( $cek_siswa > 0 ) {
        //     # code...
        //     $data_session = array(
        //         'nama' => $username,
        //         'status' => "login",
        //         'level' => 'siswa'
        //     );
        
        //     $this->session->set_userdata($data_session);
        
        //     redirect(base_url("admin/beranda"));
        // }

        else{
            // login error
            $this->session->set_flashdata('msg', 'Maaf! Username atau Password anda salah!');
            redirect(base_url("auth"));
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('auth'));
    }
}