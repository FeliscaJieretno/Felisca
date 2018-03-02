<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
			$this->load->model('m_login');
		}


		public function index()
		{
			$this->load->view('login');

		}

		// Check for user login process
		public function masuk() {

			$data = array(
				'username' => trim($this->input->post('user')),
				'password' => trim($this->input->post('pass'))
			);
			//print_r($data);
			$result = $this->m_login->login($data);

			if ($result == 1) {
					$username = $this->input->post('user');
					$result = $this->m_login->read_user_information($username);
					if ($result != false) {
						$session_data = array(
							'id' => $result[0]->id_user,
							'nama' => $result[0]->nama_user,
							'username' => $result[0]->username
						);
						// Add user data in session
						$this->session->set_userdata('logged_in', $session_data);
						redirect('home');
					}
			} else if ($result == 0){
				$this->session->set_flashdata("pesan",  "username atau password salah");
							redirect('login');
			}


		}

		public function submit(){
			if(strcmp($this->input->post('inputPassword1'),$this->input->post('inputPassword2'))==0){
					$this->m_login->register();
					$this->session->set_flashdata("pesan",  "Data tersimpan");
			}else{
				$this->session->set_flashdata("pesan",  "Password tidak sesuai");
			}
			redirect('login/daftar');
		}

		public function daftar(){
			$this->load->view('templates/header');
			$this->load->view('templates/mainnav');
			$this->load->view('templates/form_register');
			$this->load->view('templates/footer');
		}

		// Logout from admin page
		public function logout() {

			// Removing session data
			$sess_array = array(
				'username' => ''
			);
			$this->session->unset_userdata('logged_in', $sess_array);
			//$data['message_display'] = 'Successfully Logout';
			redirect('home');
		}

}
