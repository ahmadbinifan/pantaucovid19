<?php

defined('BASEPATH') or exit ('no direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$indo=json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'),true);
		$prov=json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'),true);
		$data = array(
		'title' => 'Perkembangan Covid-19 Di Indonesia',
		'indo' => $indo,
		'prov' => $prov,
		'isi' => 'v_home'
		 );
	$this->load->view('layout/v_wrapper', $data, false);
}
}