<?php 
class About_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // 1. fungsi untuk menampilkan semua data 
    function get_all(){
        $data = array();
        $this->db->select('*');
        $this->db->order_by('ABOUT_TITLE ASC');
        $Q = $this->db->get('ABOUT');

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
        $this->db->where('ABOUT.ABOUT_ID',$id);
        $Q = $this->db->get('ABOUT');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }

        $Q->free_result();
        return $data;

    }

    //3. fungsi untuk tambah data
    function add($img){
        $action = $this->db->query("INSERT INTO ABOUT (ABOUT_ID, ABOUT_TITLE, ABOUT_DESCRIPTION, ABOUT_IMAGE) VALUES (about_id_seq.NEXTVAL, '".$this->input->post('about_title')."', '".$this->input->post('about_description')."', '".$img."')");

            return $action;
    }

    //4. fungsi untuk ubah data
    function update_by_admin($id, $img){
        $data = array(
            'ABOUT_TITLE' => $this->input->post('about_title'),
            'ABOUT_DESCRIPTION' => $this->input->post('about_description'),
            'ABOUT_IMAGE' => "$img"
        );

        $this->db->where('ABOUT_ID',$id);
        $action = $this->db->update('ABOUT', $data);

        return $action;
    }

     //5. fungsi untuk hapus data
     function delete($id){
        $this->db->where('ABOUT_ID', $id);
        $action = $this->db->delete('ABOUT');
        return $action;
    }

     //6. fungsi untuk menampilkan data dengan model dropdown list
     function get_drop_down(){
        $data = array();
        $this->db->select('*');
        $this->db->order_by('ABOUT_TITLE ASC');
        $Q = $this->db->get('ABOUT');

        if ($Q->num_rows() > 0)
        {

            $data[""] = "== Silahkan pilih ==";
            foreach ($Q->result_array() as $row)
            {
                $data[$row['ABOUT_ID']] = $row['ABOUT_TITLE'];
            }
        }
        else
        {
            $data[""] = "Data Not Available";
        }

        $Q->free_result();
        return $data;
    }


}