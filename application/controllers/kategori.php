<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kategori extends CI_controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kategori_model');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data = array(
      'title' => 'view Data kategori',
      'userlog' => infoLogin(),
      'kategori' => $this->Kategori_model->getAll(),
      'content' => 'kategori/index'
    );
    $this->load->view('tamplate/main',$data);
  }

  public function add()
  {
    $data = array(
      'title' => 'Tambah Data kategori',
      'content' => 'kategori/add_form'
    );
    $this->load->view('tamplate/main',$data);
  }

  public function save()
  {
    $this->Kategori_model->Save();
    if($this->db->affected_rows()>0){
      $this->session->set_flashdata("success","Data kategori Berhasil DiSimpan");
  }
  redirect('kategori');
  }

  public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data kategori',
            'kategori' => $this->User_model->getById($id),
            'content' => 'kategori/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    function delete($id)
    {
      $this->Kategori_model->delete($id);
      redirect('kategori');
    }

    public function laporan()
    {
      $data = array(
        'title' => 'Tambah Laporan Data kategori',
        'content' => ' Kategori/laporan'
      );
      $this->load->view('tamplate/view',$data);
    }
  
}