<?php
class CAnggota extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('Anggota_model');
      $this->load->library('form_validation');
  }

	public function index()
	{
    $data['list_kontak'] = $this->Anggota_model->get_all();
		$this->load->view('anggota/anggota_list', $data);
	}

  public function tambah() 
  {
    $data = array(
      'action' => site_url('CAnggota/tambah_action'),
      'id_anggota' => set_value('id_anggota'),
      'nama_anggota' => set_value('nama_anggota'),
      'gender' => set_value('gender'),
      'alamat' => set_value('alamat'),
      'no_tlp' => set_value('no_tlp'),
      'password' => set_value('password'),
      'simpan_pokok' => set_value('simpan_pokok'),
    );
    $this->load->view('anggota/anggota_form_tambah', $data);
  }  

  public function tambah_action() 
  {
    $data = array(
      'id_anggota' => $this->input->post('id_anggota',TRUE),
      'nama_anggota' => $this->input->post('nama_anggota',TRUE),
      'gender' => $this->input->post('gender',TRUE),
      'alamat' => $this->input->post('alamat',TRUE),
      'no_tlp' => $this->input->post('no_tlp',TRUE),
      'password' => $this->input->post('password',TRUE),
      'simpan_pokok' => $this->input->post('simpan_pokok',TRUE),
    );
    $this->Anggota_model->insert($data);
    $this->session->set_flashdata('message', 'Create Record Success');
    redirect(site_url('CAnggota'));
  }

  // Update
  public function update($id_anggota) 
    {
    $row = $this->Anggota_model->get_by_id($id_anggota);
    if ($row) {
        $data = array(
            'action' => site_url('CAnggota/update_action/'.$id_anggota), // Sesuaikan dengan route yang benar
            'id_anggota' => $row->id_anggota, // Mengambil nilai dari database
            'nama_anggota' => $row->nama_anggota,
            'gender' => $row->gender,
            'alamat' => $row->alamat,
            'no_tlp' => $row->no_tlp,
            'password' => $row->password,
            'simpan_pokok' => $row->simpan_pokok,
        );
        $this->load->view('anggota/anggota_form', $data);
        }
    }


    public function update_action() 
    {
        $data = array(
            'id_anggota' => $this->input->post('id_anggota', TRUE),
            'nama_anggota' => $this->input->post('nama_anggota', TRUE),
            'gender' => $this->input->post('gender', TRUE),
            'alamat' => $this->input->post('alamat', TRUE),
            'no_tlp' => $this->input->post('no_tlp', TRUE),
            'password' => $this->input->post('password', TRUE),
            'simpan_pokok' => $this->input->post('simpan_pokok', TRUE),
        );
    
        $this->Anggota_model->update($this->input->post('id_anggota', TRUE), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('CAnggota'));
    }
    

  // Delete
  public function delete($id_anggota) 
  {
    $this->Anggota_model->delete($id_anggota);
    $this->session->set_flashdata('message', 'Delete Berhasil');
    redirect(site_url('CAnggota'));
  }  

}
