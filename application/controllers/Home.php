<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/*public function view ($page='home')
	{
		if(file_exists('application/views/'.$page.'.php') ){
			show_404();
		}
		$this->load->view('/'.$page);
	}
	*/
	public function index()
	{
		$this->load->view('header');
		$this->load->view('slider_view');
		$this->load->view('home_view');
		$this->load->view('bottom_bar');
		$this->load->view('footer');	
	}

}
