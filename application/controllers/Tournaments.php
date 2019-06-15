<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournaments extends CI_Controller {
	public function index()
	{
		$this->load->model('TournamentModel');
		
		$data['query'] = $this->TournamentModel->getTournaments();
		$data['title'] = 'Tournaments';

		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function add()
	{
		$data['title'] = 'Add Tournament';
		
		$this->load->model('TournamentModel');
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('place', 'Place', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('opposing_teams', 'Opposing teams', 'required');
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header', $data);
			$this->load->view('nav');
			$this->load->view('add_tournament');
			$this->load->view('footer');
		}
		else
		{
			$this->TournamentModel->addTournament();

			$data['message'] = "Tournament added!";

			$this->load->view('header', $data);
			$this->load->view('nav');
			$this->load->view('success', $data);
			$this->load->view('footer');
		}
	}

	public function edit()
	{
		$data['title'] = 'Edit Tournament';

		$this->load->model('TournamentModel');
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('place', 'Place', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('opposing_teams', 'Opposing teams', 'required');
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header', $data);
			$this->load->view('nav');
			$this->load->view('edit_tournament');
			$this->load->view('footer');
		}
		else
		{
			$this->TournamentModel->updateTournament();

			$data['message'] = "Tournament updated!";

			$this->load->view('header', $data);
			$this->load->view('nav');
			$this->load->view('success', $data);
			$this->load->view('footer');
		}

		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('edit_tournament');
		$this->load->view('footer');
	}

	public function remove()
	{
		$data['title'] = 'Remove Tournament';
		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('remove_tournament');
		$this->load->view('footer');
	}

}
