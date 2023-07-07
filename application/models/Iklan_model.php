<?php 
class Iklan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // 1. fungsi untuk menampilkan semua data 
    function get_all(){
        $data = array();
        $this->db->select('*');
        $this->db->order_by('IKLAN_NAME ASC');
        $Q = $this->db->get('IKLAN');

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
        $this->db->where('IKLAN.IKLAN_ID',$id);
        $Q = $this->db->get('IKLAN');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }

        $Q->free_result();
        return $data;

    }

    //3. fungsi untuk tambah data
    function add($img)
    {
      $action = $this->db->query("INSERT INTO IKLAN (IKLAN_ID, IKLAN_NAME, IKLAN_IMAGE ) VALUES (komentar_id_seq.NEXTVAL, '".$this->input->post('iklan_name')."', '".$img."')");

            return $action;
    }

    //4. fungsi untuk ubah data
    function update_by_admin($id,$img){
        $data = array(
            'IKLAN_NAME' => $this->input->post('iklan_name'),
            'IKLAN_IMAGE' => "$img"
            
        );

        $this->db->where('IKLAN_ID',$id);
        $action = $this->db->update('IKLAN', $data);

        return $action;
    }

     //5. fungsi untuk hapus data
     function delete($id)
     {
        $this->db->where('IKLAN_ID', $id);
        $action = $this->db->delete('IKLAN');
        return $action;
        
    }

     //6. fungsi untuk menampilkan data dengan model dropdown list
     function get_drop_down(){
    }


}