<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class barang extends CI_controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('barang_model');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data = array(
      'title' => 'Dashboard',
      'userlog' => infoLogin(),
      'kategori' => $this->barang_model->getAll(),
      'content' => 'barang/index'
    );
    $this->load->view('tamplate/main',$data);
  }

  public function add()
    {
        $data = array(
            'title' => 'Tambah Data barang',
            'kategori' => $this->db->get('kategori')->result_array(),
            'satuan'   => $this->db->get('satuan')->result_array(),
            'supplier' => $this->db->get('supplier')->result_array(),
            'content' => 'barang/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function save()
  {
    $this->Kategori_model->Save();
    if($this->db->affected_rows()>0){
      $this->session->set_flashdata("success","Data kategori Berhasil DiSimpan");
  }
  redirect('barang');
  }

  public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data kategori',
            'kategori' => $this->User_model->getById($id),
            'satuan' => $this->User_model->getById($id),
            'supplier' => $this->User_model->getById($id),
            'barang' => $this->barang_model->getById($id),
            'content' => 'barang/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    public function laporan()
    {
      $data = array(
        'title' => 'Tambah Laporan Data barang',
        'content' => ' barang/laporan'
      );
      $this->load->view('tamplate/view',$data);
    }
  
}