<?php
class TournamentModel extends CI_Model {

public function getTournaments()
{
		$query = $this->db->get('Tournaments');
		return $query->result();
}

public function getTournament($id)
{
		$this->db->where('id', $id);
		$query = $this->db->get('Tournaments', 1);
		return $query->result()[0];
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

public function editTournament($id)
{
	$data = array(
		'id' => $id,
		'name' => $this->input->post('name'),
		'place' => $this->input->post('place'),
		'date' => $this->input->post('date'),
		'opposing_teams' => $this->input->post('opposing_teams')
	);

	$this->db->replace('Tournaments', $data);
}

public function removeTournament($id)
{
		$this->db->delete('Tournaments', array('id'=>$id));
}

}
?>