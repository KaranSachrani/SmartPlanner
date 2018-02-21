<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashBoard extends CI_Controller {

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
	public function session_check(){

	if(!isset($_SESSION["user-type"]) && $_SESSION["user-type"] != "user"){
		redirect("Login");
	}
	}
	public function index()
	{
		$this->session_check();
		$this->load->view('Partial/header');

		/*$this->load->view('Partial/headerfiles');*/
		$this->load->view('Partial/footer');
		$this->load->view('DashBoard/dashboard');
	}
	public function initiateMeeting()
	{
			
		$this->load->model('User');
		//$this->User->view_all();
		//$this->User->search("023-14-0025","karan");
		$this->User->save("023-14-0026","ksjas","asdsnf","","");
		//$this->Committee->save("Senate","abcsde");
		//$this->Committee->delete("cs");
		//$this->Committee->update("b-ed","bba","");
		//$this->Committee->view_all();
		//$this->Committee->search("Senate");
		//$this->load->model('User');
		//$this->User->search("a");

		$this->session_check();
		$this->load->view('Partial/header');
		$this->load->view('Partial/footer');
		$this->load->view('Partial/timedateheader');
		$this->load->view('DashBoard/initiatemeeting');
	}
	
	public function showMeeting()
	{
		$this->session_check();
		$this->load->view('Partial/header');
		$this->load->view('Partial/footer');
		$this->load->view('DashBoard/showmeetings');
	}

	public function save()
	{
		alert("sdv");
	}



}
