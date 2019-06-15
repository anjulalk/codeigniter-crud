<?php
class TournamentModel extends CI_Model {

public function getTournaments()
{
		$query = $this->db->get('Tournaments');
		return $query->result();
}

public function getTournament($id)
{
		$query = $this->db->get('Tournaments');
		return $query->result();
}

public function addTournament()
{
		$data = array(
			'name' => $this->input->post('name'),
			'place' => $this->input->post('place'),
			'date' => $this->input->post('date'),
			'opposing_teams' => $this->input->post('opposing_teams'),
		);

		$this->db->insert('Tournaments', $data);
}

public function editTournament()
{
		$this->title    = $_POST['title'];
		$this->content  = $_POST['content'];
		$this->date     = time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
}

public function deleteTournament()
{
		$this->title    = $_POST['title'];
		$this->content  = $_POST['content'];
		$this->date     = time();

		$this->db->update('entries', $this, array('id' => $_POST['id']));
}

}
?>