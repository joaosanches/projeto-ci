<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->verificarUsuarioLogado();
    }
    
    /**
     * Dashboard
     */
    public function index()
    {
        echo 'dashboard';
        $this->load->view('welcome_message');
    }
    
    public function verificarUsuarioLogado()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('admin/login', 'refresh');
        }
    }

    /**
     * Mias comentários .... comentários e comentários
     * vai para testes e depois que estiver ok para master
     */
}
