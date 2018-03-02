<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdatBudaya extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct() {
		 parent::__construct();

		 // Load database
		 $this->load->model('m_adat');
	 }

	public function index()
	{
		$data['adat']=$this->m_adat->list_adatbudaya()->result();
		//print_r($data);
		$this->load->view('templates/header');
		$this->load->view('templates/mainnav');
		$this->load->view('templates/listadatbudaya1',$data);
		$this->load->view('templates/footer');
	}

	public function daftarblog()
	{
		$data['adat']=$this->m_adat->list_adatbudaya()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/mainnav');
		$this->load->view('templates/adatbudaya',$data);
		$this->load->view('templates/footer');
	}


	public function forminput()
	{
			$this->load->view('templates/header');
			$this->load->view('templates/mainnav');
			$this->load->view('templates/tambahadat');
			$this->load->view('templates/footer');
		}

	public function input_data()
	{
        $nama_folder = 'upload/'; //path folder
        $inputAdat     = trim($this->input->post('inputJudul'));
        $inputIsi  = trim($this->input->post('inputIsi'));
        $inputFoto  = trim($this->input->post('inputFoto'));
				$inputTgl  = trim($this->input->post('inputTanggal'));

        if(empty($inputAdat)||empty($inputIsi)){
        	$this->session->set_flashdata("pesan",  "Data tidak lengkap!!");
            redirect('adatbudaya/forminput');
        }

        if($_FILES['inputFoto']['tmp_name']){
        	if(is_uploaded_file($_FILES['inputFoto']['tmp_name'])){
		    	$namefile = "file_".time()."".substr($_FILES['inputFoto']['name'],-4); //nama file saya beri nama langsung dan diikuti fungsi time
		    	$temp =$nama_folder.$namefile;
		    	move_uploaded_file($_FILES["inputFoto"]["tmp_name"],$temp);
        	$result = $this->m_adat->inputAdatBudaya($temp);
				if($result ==1){
					$this->session->set_flashdata("pesan",  "Data berhasil disimpan!!");
               		redirect('adatbudaya/forminput');
				}else{
					$this->session->set_flashdata("pesan",  "Data tidak berhasil disimpan!!");
               		redirect('adatbudaya/forminput');
				}
		 	}else{
				$this->session->set_flashdata("pesan",  "Foto tidak berhasil diupload!!");
               	redirect('adatbudaya/forminput');
		 	}
        }else{
        	$this->session->set_flashdata("pesan",  "Foto tidak ditemukan!!");
            redirect('adatbudaya/forminput');
        }
	}

	public function lihatdetail($id){

		$result  = $this->m_adat->lihatAdat(trim($id));
		$data = array(
				'id_adatbudaya' => $result[0]->id_adatbudaya,
        'nama_adat' =>  $result[0]->nama_adat,
      	'deskripsi' => $result[0]->deskripsi,
        'link_foto' =>  $result[0]->link_foto,
        'tgl_edit' =>  $result[0]->tgl_edit
    );

		$this->load->view('templates/header');
		$this->load->view('templates/mainnav');
		$this->load->view('templates/detailadatbudaya',$data);
		$this->load->view('templates/footer');
	}

	public function hapusadatbudaya($id){
		$result  = $this->m_adat->hapusAdatBudaya(trim($id));
		$data['adat']=$this->m_adat->list_adatbudaya()->result();
		//print_r($data);
		$this->load->view('templates/header');
		$this->load->view('templates/mainnav');
		$this->load->view('templates/adatbudaya',$data);
		$this->load->view('templates/footer');
	}
}
