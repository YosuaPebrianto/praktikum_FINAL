<?php defined('BASEPATH') OR exit('No Direct script access allwoed');
class Kategori_model extends CI_Model
{
    protected $_table = 'kategori'; // Pastikan nama tabel benar
    protected $primary = 'id';

    public function getAll()
    {    
        return $this->db->get($this->_table)->result();
    }


  public function save(){
    $data = array( 'name' => htmlspecialchars($this->input->post('name'), true));
    return $this->db->insert($this->_table,$data);
  }

  public function delete($id)
  {
    $this->db->where('id',$id)->delete($this->_table);
    if($this->db->affected_rows()>0){
      $this->session_flashdata("success","Data kategori Berhasil DiDelete");
    }
  }

  
}