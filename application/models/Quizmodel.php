<?php
class quizmodel extends CI_Model {

	public function getQuestions()
	{
		$this->db->SELECT("quizID, questions, answer, choice1, choice2, choice3");
		$this->db->FROM("skilltestquiz");
		$query = $this->db->get();
		return $query->result();

		$myques = $query->num_rows;

		if ($myques < 1) {
			echo "Database Empty.";
			exit();
		}
	}
}
?>