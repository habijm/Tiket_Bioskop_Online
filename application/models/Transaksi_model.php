<?php
class Transaksi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // 1. fungsi untuk menampilkan semua data 
    function get_all()
    {
        $data = array();
        $this->db->select('*');
         $this->db->where('TRANSAKSI.THEATER_FID = THEATER.THEATER_ID');
         $this->db->where('TRANSAKSI.NEWS_FID = NEWS.NEWS_ID');
         $this->db->where('TRANSAKSI.KURSI_FID = KURSI.KURSI_ID');
        $this->db->order_by('TRANSAKSI_ID DESC');
        $Q = $this->db->get('TRANSAKSI, THEATER, NEWS, KURSI');

        if ($Q->num_rows() > 0)
         {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $Q->free_result();
        return $data;
    }

    //2. fungsi untuk melihat detail berdasarkan id
    function get_detail_by_id($id)
    {
        $data = array();
        $this->db->select('*');
        $this->db->where('TRANSAKSI.TRANSAKSI_ID', $id);
        $Q = $this->db->get('TRANSAKSI');

        if ($Q->num_rows() > 0) {
            $data = $Q->row_array();
        }

        $Q->free_result();
        return $data;
    }

    //3. fungsi untuk tambah data
    function add()
    {
        $action = $this->db->query("INSERT INTO TRANSAKSI (TRANSAKSI_ID, THEATER_FID, NEWS_FID, KURSI_FID, NAMA, EMAIL, TANGGAL, WAKTU, HARGA, PEMBAYARAN) VALUES (transaksi_id_seq.NEXTVAL,'" . $this->input->post('theater_fid') . "', '" . $this->input->post('news_fid') . "','" . $this->input->post('kursi_fid') . "','" . $this->input->post('nama') . "','" . $this->input->post('email') . "','" . $this->input->post('tanggal') . "','" . $this->input->post('waktu') . "','" . $this->input->post('harga') . "','" . $this->input->post('pembayaran') . "')");

        return $action;
    }

    //4. fungsi untuk ubah data
    function update_by_admin($id)
    {

        $data = array(
            'THEATER_FID' => $this->input->post('theater_fid'),
            'NEWS_FID' => $this->input->post('news_fid'),
            'KURSI_FID' => $this->input->post('kursi_fid'),
            'NAMA' => $this->input->post('NAMA'),
            'EMAIL' => $this->input->post('email'),
            'TANGGAL' => $this->input->post('tanggal'),
            'WAKTU' => $this->input->post('waktu'),
            'HARGA' => $this->input->post('harga'),
            'PEMBAYARAN' => $this->input->post('pembayaran')
        );

        $this->db->where('TRANSAKSI_ID', $id);
        $action = $this->db->update('TRANSAKSI', $data);

        return $action;
    }

    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('TRANSAKSI_ID', $id);
        $action = $this->db->delete('TRANSAKSI');
        return $action;
    }

}
