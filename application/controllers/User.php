<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->model('Module_model');
    }

    public function index()
    {
        $data['title'] = 'User';
        $data['module'] = $this->Module_model->get_module('m_module')->result();
        $data['member'] = $this->User_model->get_user('m_user')->result();
        $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/datatable', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $supplier = $this->User_model->get_role('user_role')->result();
        $role = $this->User_model->get_role('user_role')->result();
        $company = $this->User_model->get_company('m_supplier')->result();
        $data = [
            'title' => 'Create New User',
            'user' => $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array(),
            'supplier' => $supplier,
            'role' => $role,
            'company' => $company,
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/form', $data);
        $this->load->view('templates/footer');
    }

    public function create_user()
    {
        if ($this->input->post()) {
            $data = $this->input->post('p');
            $data['date_created'] = date('Y-m-d H:i:s');
            $data['date_updated'] = date('Y-m-d H:i:s');
            $data['image'] = 'default.jpg';
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

            $this->User_model->insert_data($data, 'm_user');
            $this->session->set_flashdata('success', 'User berhasil ditambahkan!');
            redirect('user');
        } else {
            $this->load->view('user/form');
        }
    }

    public function update($user_id)
    {
        $role = $this->User_model->get_role('user_role')->result();
        $company = $this->User_model->get_company('m_supplier')->result();

        $data = [
            'title' => 'Edit User',
            'user' => $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array(),
            'role' => $role,
            'company' => $company,
        ];

        if ($this->input->post()) {
            $item = $this->input->post('p');
            $item['date_updated'] = date('Y-m-d H:i:s');
            // $data['image'] = 'default.jpg';
            // Hanya melakukan hashing password jika password diinputkan
            if (!empty($this->input->post('p[password]'))) {
                $item['password'] = password_hash($this->input->post('p[password]'), PASSWORD_DEFAULT);
            }

            $this->db->where('user_id', $user_id);
            $this->User_model->update($item, 'm_user');
            $this->session->set_flashdata('success', 'User berhasil diubah!');
            redirect('user');
        } else {
            $data['member'] = $this->db->get_where('m_user', ['user_id' => $user_id])->row();
        }

        // $data['title'] = 'Edit User';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/form', $data);
        $this->load->view('templates/footer');
    }


    public function delete($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->delete('m_user');

        $this->session->set_flashdata('success', 'Reservasi berhasil dihapus!');
        redirect('user');
    }
}
