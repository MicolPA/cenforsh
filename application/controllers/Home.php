<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){

		$data['view'] = 'home/index';
		$data['title'] = 'Inicio';
		$this->load->view('home/template', $data);
	}

	public function nosotros(){

		$data['view'] = 'home/nosotros';
		$data['title'] = 'Inicio';
		$this->load->view('home/template', $data);

	}

	public function servicios(){

		$data['view'] = 'home/servicios';
		$data['title'] = 'Inicio';
		$this->load->view('home/template', $data);

	}

	public function programas(){

		$data['view'] = 'home/programas';
		$data['title'] = 'Inicio';
		$this->load->view('home/template', $data);
	}

	public function articulos(){
		$data['view'] = 'home/articulos';
		$data['title'] = 'Articulos';
		$this->load->view('home/template', $data);
	}
}
