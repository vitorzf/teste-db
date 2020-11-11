<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$dados['page'] = "home";
		$dados['titulo'] = "Home page";
		$this->load->view('body_view', $dados);
	}
}
