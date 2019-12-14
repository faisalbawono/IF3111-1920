<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubah extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Berita_model');
		$this->load->library('upload');
	}

	public function index($id_laporan)
	{
		$berita = $this->Berita_model->detail($id_laporan);
		$data = array('berita'		=>	$berita);
		$this->load->view('ubah', $data, FALSE);
	}

	public function update($id_laporan){
		$berita = $this->Berita_model->detail($id_laporan);
		
			if (!empty($_FILES['file']['name'])) {

				$config['upload_path'] = './asset/file/'; //path folder
	            $config['allowed_types'] = 'jpg|png|doc|docx'; //type yang dapat diakses bisa anda sesuaikan
	            $config['max_size'] = 0;

	        $this->load->library('upload', $config);
	        	if ( ! $this->upload->do_upload('file')){

				$data = array(	'berita'		=>	$berita,
								'error_upload'	=>	$this->upload->display_errors(),
								);
				$this->load->view('edit', $data, FALSE);
				}else{
					$upload_data	=array('uploads'	=>$this->upload->data());

					$config['image_library'] 	=	'gd2';
					$config['source_image'] 	=	'./asset/file/'.$upload_data['uploads']['file_name'];
					$config['new_image']		= 	'./asset/file/thumbs/'.$upload_data['uploads']['file_name'];
					$config['create_thumb'] 	= 	TRUE;
					$config['maintain_ratio'] 	= 	TRUE;
					$config['width']         	= 	200;
					$config['height']       	= 	200;
					$config['thumb_marker']		=	'';

					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$i= $this->input;
					if($berita->gambar != ""){
						unlink('./asset/upload/image/'.$berita->file);
						unlink('./asset/upload/image/thumbs/'.$berita->file);
						}
					$data = array(	'id_laporan'		=>	$id_laporan,
								'isi'	 				=>	$i->post('isi'),
								'file' 					=>	$upload_data['uploads']['file_name'],
								'aspek'					=>	$i->post('aspek'),
								'waktu'					=>	date('Y-m-d H:i:s')
								);
				$this->berita_model->edit($data);
				$this->session->set_flashdata('sukses','Data telah diedit');
				redirect(base_url('home'),'refresh');
				}
			}else{
				$i= $this->input;
				$data = array(	'id_laporan'		=>	$id_laporan,
								'isi'	 		=>	$i->post('isi'),
								'aspek'			=>	$i->post('aspek'),
								'waktu'			=>	date('Y-m-d H:i:s')
								);
				$this->Berita_model->edit($data);
				$this->session->set_flashdata('sukses','Data telah diedit');
				redirect(base_url('home'),'refresh');
			}
			$data = array('berita'		=>	$berita);
		$this->load->view('ubah', $data, FALSE);
	}

}
