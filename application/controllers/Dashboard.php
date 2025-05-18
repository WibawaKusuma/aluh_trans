<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Module_model');
    }

    public function index()
    {
        $data['title'] = 'Dasboard';
        $data['module'] = $this->Module_model->get_module('m_module')->result();

        // print_r($data);
        // exit;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }
}
