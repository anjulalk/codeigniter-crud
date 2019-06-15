<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Players extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('view_players');
		$this->load->view('footer');
	}

	public function add()
	{
		$this->load->helper('url');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('add_player');
		$this->load->view('footer');
	}

	public function edit()
	{
		$this->load->helper('url');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('edit_player');
		$this->load->view('footer');
	}

	public function remove()
	{
		$this->load->helper('url');
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('remove_player');
		$this->load->view('footer');
	}

}
