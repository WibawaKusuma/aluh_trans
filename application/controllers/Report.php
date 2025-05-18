<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Module_model');
        $this->load->model('Destination_model');

        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = '';
        $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('report/templates/sidebar', $data);
        $this->load->view('report/landing');
        $this->load->view('templates/footer');
    }

    // public function dashboard()
    // {
    //     $data['title'] = '';
    //     $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('admin/templates/sidebar', $data);
    //     $this->load->view('admin/landing');
    //     $this->load->view('templates/footer');
    // }
}
