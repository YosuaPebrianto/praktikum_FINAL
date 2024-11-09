<?php defined('BASEPATH') OR exit('No Direct script access allwoed');
class barang_model extends CI_Model
{
    protected $_table = 'barang'; // Pastikan nama tabel benar
    protected $primary = 'id';

    public function getAll()
    {
      $sql = "SELECT a.id, a.barcode, a.name,b.name AS satuan, c.name AS  kategori, a.harga_beli, a.harga_jual, a.stok FROM ((barang a LEFT JOIN satuan b ON a.satuan_id = b.id) LEFT JOIN kategori c ON a.kategori_id = c.id)";
      return $this->db->query($sql)->result();
    }

    public function save(){
      $data = array(
        'barcode'=>htmlspecialchars($this->input->post('barcode'),true),
        'name' => htmlspecialchars($this->input->post('name'), true),
        'harga_beli' => password_hash($this->input->post('harga_beli'), true),
        'harga_jual' => htmlspecialchars($this->input->post('harga_jual'), true),
        'stok' => htmlspecialchars($this->input->post('stok'), true),
        'kategori_id' => htmlspecialchars($this->input->post('kategori'), true),
        'satuan_id' => htmlspecialchars($this->input->post('satuan'), true),
        'supplier_id' => htmlspecialchars($this->input->post('supplier'), true),
        'user_id' => $this->session->userdata("id"),
      );
      return $this->db->insert($this->_table,$data);
    }

    public function getById($id)
    {
      return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
}