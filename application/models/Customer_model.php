<?php
class Customer_model extends CI_Model
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
        $this->db->order_by('CUSTOMER_NAME ASC');
        $Q = $this->db->get('CUSTOMER');

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
        $this->db->where('CUSTOMER.CUSTOMER_ID', $id);
        $Q = $this->db->get('CUSTOMER');

        if ($Q->num_rows() > 0) {
            $data = $Q->row_array();
        }

        $Q->free_result();
        return $data;
    }

    //3. fungsi untuk tambah data
    function add()
    {
        $action = $this->db->query("INSERT INTO CUSTOMER (CUSTOMER_ID, CUSTOMER_NAME, JENIS_KELAMIN, ALAMAT, NO_HP, EMAIL, PASSWORD) VALUES (CUSTOMER_id_seq.NEXTVAL,'" . $this->input->post('customer_name') . "', '" . $this->input->post('jenis_kelamin') . "','" . $this->input->post('alamat') . "','" . $this->input->post('no_hp') . "','" . $this->input->post('email') . "','" . $this->input->post('password') . "')");

        return $action;
    }

    //4. fungsi untuk ubah data
    function update_by_admin($id)
    {

        $data = array(
            'CUSTOMER_NAME' => $this->input->post('customer_name'),
            'JENIS_KELAMIN' => $this->input->post('jenis_kelamin'),
            'ALAMAT' => $this->input->post('alamat'),
            'NO_HP' => $this->input->post('no_hp'),
            'EMAIL' => $this->input->post('email'),
            'PASSWORD' => $this->input->post('password')
        );

        $this->db->where('CUSTOMER_ID', $id);
        $action = $this->db->update('CUSTOMER', $data);

        return $action;
    }

    //5. fungsi untuk hapus data
    function delete($id)
    {
        $this->db->where('CUSTOMER_ID', $id);
        $action = $this->db->delete('CUSTOMER');
        return $action;
    }


    //function login customer
    function verify($e, $pw)
    {
        $row = array();
        $this->db->select('*');
        $this->db->where('EMAIL', $e);
        $this->db->where('PASSWORD', $pw);
        $this->db->limit(1);
        $Q = $this->db->get('CUSTOMER');

        if ($Q->num_rows() > 0) {
            $row = $Q->row_array();
        }

        $Q->free_result();
        return $row;
    }
}
