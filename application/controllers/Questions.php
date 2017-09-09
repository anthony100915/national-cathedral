<?php
class Questions extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function index()
	{
		$this->load->view('quiz_game');
	}

	public function startnow()
	{
		$this->load->model('quizmodel');
		$this->data['questionaire'] = $this->quizmodel->getQuestions();
		$this->load->view('play_quiz', $this->data);
	}

	public function results()
	{
		$this->data['checks'] = array(
			'q1' => $this->input->post('quizid1'),
			'q2' => $this->input->post('quizid2'),
			'q3' => $this->input->post('quizid3'),
			'q4' => $this->input->post('quizid4'),
			'q5' => $this->input->post('quizid5'),
			'q6' => $this->input->post('quizid6'),
			'q7' => $this->input->post('quizid7'),
			'q8' => $this->input->post('quizid8'),
			'q9' => $this->input->post('quizid9'),
			'q10' => $this->input->post('quizid10'),
			);

		$this->load->model('quizmodel');
		$this->data['results'] = $this->quizmodel->getQuestions();
		$this->load->view('results', $this->data);
	}
	
}
