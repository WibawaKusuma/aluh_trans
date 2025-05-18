<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservation_model extends CI_Model
{
    public function generate_reservation_number()
    {
        // Contoh format nomor reservasi: RES-20240926-001
        $today = date('Ymd'); // Mengambil tanggal hari ini (format: 20240926)

        // Ambil nomor urut terakhir dari tabel reservasi yang dibuat hari ini
        $this->db->like('NoReservasi', 'RES-' . $today, 'after');
        $this->db->order_by('NoReservasi', 'DESC');
        $last_reservation = $this->db->get('trreservations')->row();

        // Jika ada data terakhir, ambil angka urutannya, jika tidak, mulai dari 001
        if ($last_reservation) {
            $last_number = intval(substr($last_reservation->NoReservasi, -3)) + 1;
            $NoReservasi = 'RES-' . $today . '-' . sprintf('%03d', $last_number);
        } else {
            $NoReservasi = 'RES-' . $today . '-001';
        }
        return $NoReservasi;
    }

    public function update($NoReservasi, $data)
    {
        $this->db->where('NoReservasi', $NoReservasi);
        return $this->db->update('trreservations', $data);
    }

    public function delete($NoReservasi)
    {
        $this->db->where('NoReservasi', $NoReservasi);
        return $this->db->delete('trreservations');
    }

    // public function get_reservation_by($NoReservasi)
    // {
    //     return $this->db->get_where('trreservations', ['NoReservasi' => $NoReservasi])->row();
    // }

    public function get_reservations_by_date($start_date, $end_date)
    {
        $this->db->from('trreservations');
        $this->db->where('CreatedAt >=', $start_date);
        $this->db->where('CreatedAt <=', $end_date);
        return $this->db->get()->result();
    }

    public function get_user_reservations($table)
    {
        return $this->db->get($table);
    }

    public function get_user_login($table)
    {
        $email = $this->session->userdata('email');
        if ($email) {
            return $this->db->get_where($table, ['email' => $email])->row_array();
        } else {
            return null;
        }
    }

    public function get_package($table)
    {
        return $this->db->get($table);
    }


    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
        // return $this->db->affected_rows() > 0;
    }
}
