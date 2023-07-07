<?php 
class Komentar_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // 1. fungsi untuk menampilkan semua data 
    function get_all(){
        $data = array();
        $this->db->select('*');
        $this->db->order_by('KOMENTAR_NAME ASC');
        $Q = $this->db->get('KOMENTAR');

        if ($Q->num_rows() > 0)
        {
            foreach ($Q->result_array() as $row)
            { 
                $data[] = $row;
            }
        }

        $Q->free_result();
        return $data;
    }

    //2. fungsi untuk melihat detail berdasarkan id
    function get_detail_by_id($id){
        
         $data = array();
        $this->db->select('*');
        $this->db->where('KOMENTAR.KOMENTAR_ID',$id);
        $Q = $this->db->get('KOMENTAR');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }

        $Q->free_result();
        return $data;

    }

    //3. fungsi untuk tambah data
    function add()
    {
      $action = $this->db->query("INSERT INTO KOMENTAR (KOMENTAR_ID, KOMENTAR_NAME, EMAIL, PESAN) VALUES (komentar_id_seq.NEXTVAL, '".$this->input->post('komentar_name')."', '".$this->input->post('email')."', '".$this->input->post('pesan')."')");

            return $action;
    }

    //4. fungsi untuk ubah data
    function update_by_admin($id){
        $data = array(
            'KOMENTAR_NAME' => $this->input->post('komentar_name'),
          
            'EMAIL' => $this->input->post('email'),
            'PESAN' => $this->input->post('pesan')
           
            
        );

        $this->db->where('KOMENTAR_ID',$id);
        $action = $this->db->update('KOMENTAR', $data);

        return $action;
    }

     //5. fungsi untuk hapus data
     function delete($id)
     {
        $this->db->where('KOMENTAR_ID', $id);
        $action = $this->db->delete('KOMENTAR');
        return $action;
        
    }

     //6. fungsi untuk menampilkan data dengan model dropdown list
     function get_drop_down(){
    }


}