<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->model('Reservation_model');
        $this->load->model('Destination_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $start_date = isset($_POST['start_date']) ? $_POST['start_date'] : date('Y-m-d');
        $end_date = isset($_POST['end_date']) ? $_POST['end_date'] : date('Y-m-d');

        $data = [
            'title' => 'Reservation',
            'user' => $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array(),
            'reservations' => $this->Reservation_model->get_reservations_by_date($start_date, $end_date),
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];

        // print_r($data);
        // exit;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('reservations/datatable', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->model('Reservation_model');
        $package = $this->Reservation_model->get_package('m_package')->result();

        // print_r($package);
        // exit;

        // $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['title'] = 'Create Reservation';
        // $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['NoReservasi'] = $this->Reservation_model->generate_reservation_number();

        $data = [
            'title' => 'Create Reservation',
            'user' =>  $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array(),
            'NoReservasi' => $this->Reservation_model->generate_reservation_number(),
            'package' => $package
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('reservations/form', $data);
        $this->load->view('templates/footer');
    }

    // menyimpan data sebelum di submit
    public function store()
    {
        $this->load->model('Reservation_model');
        $user = $this->Reservation_model->get_user_login('m_user');

        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $reservation_data = $this->input->post('p');
            $reservation_data['CreatedAt'] = date('Y-m-d');
            $reservation_data['CreatedBy'] = $user['user_id'];

            // print_r($reservation_data);
            // exit;
            $this->db->insert('tr_reservations', $reservation_data);
            $this->session->set_flashdata('success', 'Reservasi berhasil ditambahkan!');
            if ($user['role_id'] == 1) {
                redirect('reservation');
            } else {
                redirect('reservation/reservation_other');
                exit;
            }
        } else {
            $data['NoReservasi'] = $this->Reservation_model->generate_reservation_number();
            $this->load->view('reservations/form', $data);
        }
    }

    public function update($NoReservasi)
    {
        $package = $this->Reservation_model->get_package('m_package')->result();
        $data = [
            'user' =>   $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array(),
            'package' => $package
        ];
        // $data['user'] = $this->load->model('Reservation_model');
        $user = $this->Reservation_model->get_user_login('m_user');

        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $reservation_data = $this->input->post('p');
            $reservation_data['CreatedBy'] = $user['user_id'];

            $this->db->where('NoReservasi', $NoReservasi);
            $this->db->update('tr_reservations', $reservation_data);

            $this->session->set_flashdata('success', 'Reservasi berhasil diubah!');
            redirect('reservation');
        } else {
            $data['reservation'] = $this->db->get_where('tr_reservations', ['NoReservasi' => $NoReservasi])->row();

            if (!$data['reservation']) {
                show_404();
            }

            $data['title'] = 'Edit Reservation';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('reservations/form', $data);
            $this->load->view('templates/footer');
        }
    }

    public function delete($NoReservasi)
    {
        $this->db->where('NoReservasi', $NoReservasi);
        $this->db->delete('tr_reservations');
        $this->session->set_flashdata('success', 'Reservasi berhasil dihapus!');

        redirect('reservation');
    }

    public function reservation_other()
    {

        $data = [
            'title' => 'Reservation',
            'user' => $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        // print_r($data);
        // exit;
        $this->load->view('reservations/datatable_other', $data);
    }
}
