<?php

class Data_hunian extends CI_Controller{

	public function index()
	{
		$data['hunian'] = $this->model_hunian->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/banner');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
		{
			$nama_hunian		= $this->input->post('nama_hunian');
			$ket_lokasi			= $this->input->post('ket_lokasi');
			$alamat				= $this->input->post('alamat');
			$kategori			= $this->input->post('kategori');
			$deskripsi			= $this->input->post('deskripsi');
			$harga				= $this->input->post('harga');
			$no_hp				= $this->input->post('no_hp');
			$gambar 			= $_FILES['gambar']['name'];

			if($gambar	=''){}else{
				$config ['upload_path'] = './uploads';
				$config ['allowed_types'] = '.jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')){
					echo "Gambar Gagal Di Upload";
				}else{
					$gambar=$this->upload->data('file_name')		;
				}
			}

			$data = array(

				'nama_hunian'		=> $nama_hunian,
				'ket_lokasi'		=> $ket_lokasi,
				'alamat'			=> $alamat,
				'kategori'			=> $kategori,
				'deskripsi'			=> $deskripsi,
				'harga'				=> $harga,
				'gambar'			=> $gambar,
				'no_hp'				=> $no_hp
			);

			$this->model_hunian->tambah_hunian($data, 'tb_hunian');
			redirect('admin/data_hunian/index');

		}

		public function edit($id)
		{
			$where = array('id_hunian' => $id);
			$data['hunian'] = $this->model_hunian->edit_hunian($where, 'tb_hunian')-> result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/banner');
			$this->load->view('admin/edit_hunian',$data);
			$this->load->view('templates_admin/footer');
		}

		public function update(){
			$id 			= $this->input->post('id_hunian');
			$nama_hunian	= $this->input->post('nama_hunian');
			$ket_lokasi		= $this->input->post('ket_lokasi');
			$alamat			= $this->input->post('alamat');
			$kategori		= $this->input->post('kategori');
			$deskripsi		= $this->input->post('deskripsi');
			$harga			= $this->input->post('harga');
			$no_hp			= $this->input->post('no_hp');

			$data = array(

				'nama_hunian'		=> $nama_hunian,
				'ket_lokasi'		=> $ket_lokasi,
				'alamat'			=> $alamat,
				'kategori'			=> $kategori,
				'deskripsi'			=> $deskripsi,
				'harga'				=> $harga,	
				'no_hp'				=> $no_hp
			);

			$where = array('$id_hunian' => $id
			);

			$this->model_hunian->update_data($where,$data, 'tb_hunian');
			redirect('admin/data_hunian/index');

		}

		public function hapus($id)
   		{
        $where = array ('id_hunian' => $id);

        $this->model_hunian->hapus_data($where, 'tb_hunian');
        redirect('admin/data_hunian/index');
    	}
}