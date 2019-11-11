<?php


class Crud extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_crud');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index()
	{
		redirect('crud/tampilan');
	}

	public function tampilan()
	{
		$data = array(
			'isi' => $this->m_crud->retrive(),
		);
		$this->load->view('tampilan_data',$data);
	}

	public function tampilan2()
	{
		$data = array(
			'isi' => $this->m_crud->retrive2(),
		);
		$this->load->view('tampilan_histori',$data);
	}

	public function tambah()
	{
		$data = array('judul' => 'Tambah Data');
		$this->load->view('tambah_data', $data);
	
	}

	public function simpan()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('nomer_hp', 'nomer_hp', "required");
		if ($this->form_validation->run() == false) {
			$data = array(
				'judul' => 'Tambah Data');
			$this->load->view('tambah_data', $data);

			echo "Halaman gaga Tersimpan";
		}else{
			echo "Halaman Tersimpan";

			$data = array(
				'idmhs' => '',
				'nim' => $this->input->post('nim'),
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
				'nomer_hp' => $this->input->post('nomer_hp')
			);
			$this->m_crud->simpan_data($data);

			redirect('crud/tampilan');
		}
	}

	public function ubah()
	{
		$idmhs = $this->uri->segment(3);
		$q = $this->m_crud->getRow($idmhs);
		$data = array(
			'judul' => 'Ubah Data',
			'idmhs' => $q->row('idmhs'),
			'nim' => $q->row('nim'),
			'nama' => $q->row('nama'),
			'jenis_kelamin' => $q->row('jenis_kelamin'),
			'alamat' => $q->row('alamat'),
			'nomer_hp' => $q->row('nomer_hp')
			);
		$this->load->view('update_data', $data);
	}

	public function update()
	{
		$this->m_crud->update_data();
	}

	public function view()
	{
		$idmhs = $this->uri->segment(3);
	}

	public function hapus()
	{
		$this->m_crud->hapus_data();
	}
}