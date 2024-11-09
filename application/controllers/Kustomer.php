<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kustomer extends CI_controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('kustomer_model');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data = array(
      'title' => 'Dashboard',
      'userlog' => infoLogin(),
      'kustomer' => $this->kustomer_model->getAll(),
      'content' => 'kustomer/index'
    );
    $this->load->view('tamplate/main',$data);
  }

  public function add()
  {
    $data = array(
      'title' => 'Tambah Data kustomer',
      'content' => 'kustomer/add_form'
    );
    $this->load->view('tamplate/main',$data);
  }

  public function save()
  {
    $this->Kustomer_model->Save();
    if($this->db->affected_rows()>0){
      $this->session->set_flashdata("success","Data kustomer Berhasil DiSimpan");
  }
  redirect('kustomer');
  }

  public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data kustomer',
            'kustomer' => $this->User_model->getById($id),
            'content' => 'kustomer/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    function delete($id)
    {
      $this->Kustomer_model->delete($id);
      redirect('kustomer');
    }


  {
    public function laporan()
    {
      $data = array(
        'title' => 'Tambah Laporan Data kustomer',
        'content' => ' Kustomer/laporan'
      );
      $this->load->view('tamplate/view',$data);
    }
  }
}