<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing_page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Destination_model');
        $this->load->model('Armada_model');
    }

    public function index()
    {
        @$data['title'] = 'Home';
        @$data['config'] = $this->Destination_model->get_config('config')->result();
        $data['destination'] = $this->Destination_model->get_destination('m_destination')->result();


        // Ubah array objek menjadi array asosiatif
        @$raw_config = $data['config'];
        @$config = [];
        foreach ($raw_config as $item) {
            $config[$item->name] = $item->value;
        }
        @$data['config'] = $config; // <-- penting!

        $this->load->view('templates/header_landingpage', @$data);
        $this->load->view('landing_page/home', @$data);
        $this->load->view('templates/footer_landingpage');
    }

    public function about()
    {
        $data['title'] = 'About Us';
        $data['config'] = $this->Destination_model->get_config('config')->result();
        $data['destination'] = $this->Destination_model->get_destination('m_destination')->result();


        // Ubah array objek menjadi array asosiatif
        $raw_config = $data['config'];
        $config = [];
        foreach ($raw_config as $item) {
            $config[$item->name] = $item->value;
        }
        $data['config'] = $config; // <-- penting!


        $this->load->view('templates/header_landingpage', $data);
        $this->load->view('landing_page/about', $data);
        $this->load->view('templates/footer_landingpage');
    }

    public function package()
    {
        $data['title'] = 'Package';
        $data['destination'] = $this->Destination_model->get_destination('m_destination')->result();
        $data['config'] = $this->Destination_model->get_config('config')->result();

        // Ubah array objek menjadi array asosiatif
        $raw_config = $data['config'];
        $config = [];
        foreach ($raw_config as $item) {
            $config[$item->name] = $item->value;
        }
        $data['config'] = $config; // <-- penting!


        // print_r($data);
        // exit;
        $this->load->view('templates/header_landingpage', $data);
        $this->load->view('landing_page/package', $data);
        $this->load->view('templates/footer_landingpage');
    }

    public function contact()
    {
        $data['title'] = 'Contact';
        $data['config'] = $this->Destination_model->get_config('config')->result();

        // Ubah array objek menjadi array asosiatif
        $raw_config = $data['config'];
        $config = [];
        foreach ($raw_config as $item) {
            $config[$item->name] = $item->value;
        }
        $data['config'] = $config; // <-- penting!


        $this->load->view('templates/header_landingpage', $data);
        $this->load->view('landing_page/contact', $data);
        $this->load->view('templates/footer_landingpage');
    }

    public function armada()
    {
        $data['title'] = 'Armada';
        $data['armada'] = $this->Armada_model->get_armada('m_armada')->result();
        $data['config'] = $this->Destination_model->get_config('config')->result();

        // Ubah array objek menjadi array asosiatif
        $raw_config = $data['config'];
        $config = [];
        foreach ($raw_config as $item) {
            $config[$item->name] = $item->value;
        }
        $data['config'] = $config; // <-- penting!


        $this->load->view('templates/header_landingpage', $data);
        $this->load->view('landing_page/armada', $data);
        $this->load->view('templates/footer_landingpage');
    }
}
