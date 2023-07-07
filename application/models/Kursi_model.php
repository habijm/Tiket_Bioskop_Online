<?php 
class Kursi_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // 1. fungsi untuk menampilkan semua data 
    function get_all(){
        $data = array();
        $this->db->select('*');
        $this->db->order_by('KURSI_ID ASC');
        $Q = $this->db->get('KURSI');

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
        $this->db->where('KURSI.KURSI_ID',$id);
        $Q = $this->db->get('KURSI');

        if ($Q->num_rows() > 0)
        {
            $data = $Q->row_array();
        }

        $Q->free_result();
        return $data;

    }

    //3. fungsi untuk tambah data
    function add(){
        $action = $this->db->query("INSERT INTO KURSI (KURSI_ID, KURSI_ROW) VALUES (kursi_id_seq.NEXTVAL, '".$this->input->post('kursi_row')."')");

            return $action;
    }

    //4. fungsi untuk ubah data
    function update_by_admin($id){
        $data = array(
            'KURSI_ROW' => $this->input->post('kursi_row')
        );

        $this->db->where('KURSI_ID',$id);
        $action = $this->db->update('KURSI', $data);

        return $action;
    }

     //5. fungsi untuk hapus data
     function delete($id){
        $this->db->where('KURSI_ID', $id);
        $action = $this->db->delete('KURSI');
        return $action;
    }

     //6. fungsi untuk menampilkan data dengan model dropdown list
     function get_drop_down(){
        $data = array();
        $this->db->select('*');
        $this->db->order_by('KURSI_ROW ASC');
        $Q = $this->db->get('KURSI');

        if ($Q->num_rows() > 0)
        {

            $data[""] = "== Silahkan pilih ==";
            foreach ($Q->result_array() as $row)
            {
                $data[$row['KURSI_ID']] = $row['KURSI_ROW'];
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