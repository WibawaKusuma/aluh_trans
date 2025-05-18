<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Destination extends CI_Controller
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
        $data['title'] = 'Destination';
        $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['destinations'] = $this->Destination_model->get_destination('m_destination')->result();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('destinations/datatable', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Create Destination';
        $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();

        // Set destination sebagai array kosong saat create data baru
        // $data['destination'] = []; // Destination kosong untuk create

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('destinations/form', $data);
        $this->load->view('templates/footer');
    }

    public function create_destination()
    {
        $this->load->model('Destination_model');
        if ($this->input->post()) {
            $data = $this->input->post('p');

            // Konfigurasi upload
            $config['upload_path'] = './assets/template/img/armada';
            $config['allowed_types'] = 'jpeg|jpg|png|gif'; // Pastikan jpg ditambahkan
            $config['file_name'] = $_FILES['image']['name']; // Menggunakan timestamp untuk menghindari nama file duplikat

            // Load library upload
            $this->load->library('upload', $config);

            // Cek apakah ada file yang di-upload
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                // Lakukan upload file
                if (!$this->upload->do_upload('image')) {
                    // Jika upload gagal
                    $error = $this->upload->display_errors();
                    echo "Upload image gagal! Error: " . $error;
                    die();
                } else {
                    // Jika upload berhasil
                    $upload_data = $this->upload->data(); // Ambil data file yang di-upload
                    $data['image'] = $upload_data['file_name']; // Simpan nama file ke data
                }
            } else {
                echo "Upload image gagal! Error: Tidak ada file yang dipilih atau file terlalu besar.";
                die();
            }


            $this->Destination_model->insert_data($data, 'm_destination');
            $this->session->set_flashdata('success', 'Destinasi berhasil ditambahkan!');
            redirect('destination');
        } else {
            $this->load->view('destinations/form');
        }
    }

    public function update($id_destination)
    {
        $this->load->model('Destination_model');
        $data['destination'] = $this->Destination_model->get_destination('m_destination')->result();
        $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post()) {
            $data = $this->input->post('p');


            // Ambil data armada lama untuk mendapatkan nama file gambar yang lama
            $old_destination = $this->db->get_where('m_destination', ['id_destination' => $id_destination])->row();
            $old_image_path = './assets/template/img/destination/' . $old_destination->image; // Path gambar lama

            // Konfigurasi upload
            $config['upload_path'] = './assets/template/img/destination';
            $config['allowed_types'] = 'jpeg|jpg|png|gif'; // Pastikan jpg ditambahkan
            $config['file_name'] = time() . '_' . $_FILES['image']['name']; // Nama file unik

            // Load library upload
            $this->load->library('upload', $config);

            // Cek apakah ada file yang di-upload
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                // Lakukan upload file
                if (!$this->upload->do_upload('image')) {
                    // Jika upload gagal
                    $error = $this->upload->display_errors();
                    echo "Upload image gagal! Error: " . $error;
                    die();
                } else {
                    // Jika upload berhasil
                    $upload_data = $this->upload->data(); // Ambil data file yang di-upload
                    $data['image'] = $upload_data['file_name']; // Simpan nama file ke data

                    // Hapus gambar lama jika ada
                    if (file_exists($old_image_path)) {
                        unlink($old_image_path); // Hapus file gambar lama
                    }
                }
            } else {
                // Jika tidak ada gambar baru, tetap gunakan gambar lama
                $data['image'] = $old_destination->image; // Tetap menggunakan gambar lama
            }

            $this->db->where('id_destination', $id_destination);
            $this->Destination_model->update($data, 'm_destination');
            $this->session->set_flashdata('success', 'Destination berhasil diubah!');
            redirect('destination');
        } else {
            $data['destination'] = $this->db->get_where('m_destination', ['id_destination' => $id_destination])->row();
        }

        $data['title'] = 'Edit Destination';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('destinations/form', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id_destination)
    {
        $this->db->where('id_destination', $id_destination);
        $this->db->delete('m_destination');

        $this->session->set_flashdata('success', 'Reservasi berhasil dihapus!');
        redirect('destination');
    }
}
