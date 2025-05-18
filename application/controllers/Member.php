<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->model('Reservation_model');
        // $this->load->model('User_model');
        // $this->load->model('Member_model');
    }
    public function index()
    {
        $data['title'] = 'Member';
        // $data['module'] = $this->Module_model->get_module('mModule')->result();
        // $data['member'] = $this->User_model->get_user('m_user')->result();
        $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['reservations'] = $this->Reservation_model->get_user_reservations('tr_reservations')->result();

        // print_r($data);
        // exit;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('member/dashboard', $data);
        // $this->load->view('templates/footer');
    }
}
