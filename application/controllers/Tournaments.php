<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tournaments extends CI_Controller {
	public function index()
	{
		$this->load->model('TournamentModel');
		$data['query'] = $this->TournamentModel->getTournaments();

		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	public function add()
	{
		$data['title'] = 'Add Tournament';
	
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
			$this->load->model('TournamentModel');
			$this->TournamentModel->addTournament();

			$data['message'] = "Tournament added successfully!";

			$this->load->view('header', $data);
			$this->load->view('nav');
			$this->load->view('success', $data);
			$this->load->view('footer');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Tournament';

		$this->load->model('TournamentModel');
		$data['query'] = $this->TournamentModel->getTournament($id);

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('place', 'Place', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('opposing_teams', 'Opposing teams', 'required');
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header', $data);
			$this->load->view('nav');
			$this->load->view('edit_tournament', $data);
			$this->load->view('footer');
		}
		else
		{
			$this->TournamentModel->editTournament($id);

			$data['message'] = "Tournament updated successfully!";

			$this->load->view('header', $data);
			$this->load->view('nav');
			$this->load->view('success', $data);
			$this->load->view('footer');
		}
	}

	public function remove($id)
	{
		$this->load->model('TournamentModel');
		$this->TournamentModel->removeTournament($id);

		$data['message'] = "Tournament deleted successfully!";

		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('success', $data);
		$this->load->view('footer');
	}

}
