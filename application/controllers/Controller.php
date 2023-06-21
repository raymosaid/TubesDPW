<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function struk()
	{
		$this->load->view('struk');
	}
	
	public function history()
	{
		$this->load->database();
		$this->load->model('M_History');
		$data['data_pesanan'] = $this->M_History->select();
		$this->load->view('history', $data);
	}

	public function details($kode)
	{
		$this->load->database();
		$this->load->model('M_Details');
		$data['detail_pesanan'] = $this->M_Details->select($kode);
		$this->load->view('details', $data);
	}
}
