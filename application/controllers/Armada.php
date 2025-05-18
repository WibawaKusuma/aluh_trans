<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Armada extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        $this->load->model('Armada_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Armada';
        $data['armadas'] = $this->Armada_model->get_armada('m_armada')->result();
        $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();
        // print_r($data);
        // exit;
        $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('armadas/datatable', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $data['title'] = 'Create Armada';
        $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/topbar', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('armadas/form', $data);
        $this->load->view('templates/footer');
    }

    public function create_armada()
    {
        if ($this->input->post()) {
            // Ambil data dari input p
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

            // Tambahkan timestamp untuk CreatedAt dan UpdatedAt
            $data['CreatedAt'] = date('Y-m-d H:i:s'); // Gunakan format datetime
            $data['UpdatedAt'] = date('Y-m-d H:i:s'); // Gunakan format datetime

            // Simpan ke database
            $this->Armada_model->insert_data($data, 'm_armada');
            $this->session->set_flashdata('success', 'Destinasi berhasil ditambahkan!');
            redirect('armada');
        } else {
            // Jika tidak ada data POST, tampilkan form
            $this->load->view('armadas/form');
        }
    }

    public function update($id_armada)
    {
        // Ambil user data dari session
        $data['user'] = $this->db->get_where('m_user', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->input->post()) {
            // Ambil data dari input
            $data = $this->input->post('p');
            $data['UpdatedAt'] = date('Y-m-d H:i:s'); // Set timestamp untuk update

            // Ambil data armada lama untuk mendapatkan nama file gambar yang lama
            $old_armada = $this->db->get_where('m_armada', ['id_armada' => $id_armada])->row();
            $old_image_path = './assets/template/img/armada/' . $old_armada->image; // Path gambar lama

            // Konfigurasi upload
            $config['upload_path'] = './assets/template/img/armada';
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
                $data['image'] = $old_armada->image; // Tetap menggunakan gambar lama
            }

            // Update data ke database
            $this->db->where('id_armada', $id_armada);
            $this->Armada_model->update($data, 'm_armada');

            // Set flashdata untuk notifikasi
            $this->session->set_flashdata('success', 'Destination berhasil diubah!');
            redirect('armada');
        } else {
            // Ambil data armada jika tidak ada post
            $data['armada'] = $this->db->get_where('m_armada', ['id_armada' => $id_armada])->row();
        }

        // Set judul dan load view
        $data['title'] = 'Edit Destination';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('armadas/form', $data);
        $this->load->view('templates/footer');
    }



    public function delete($id_armada)
    {
        // Hapus data berdasarkan NoReservasi
        $this->db->where('id_armada', $id_armada);
        $this->db->delete('m_armada');

        // Set flashdata untuk pesan sukses
        $this->session->set_flashdata('success', 'Reservasi berhasil dihapus!');

        // Redirect ke halaman daftar reservasi
        redirect('armada');
    }
}
