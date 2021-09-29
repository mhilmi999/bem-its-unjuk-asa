<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function kabinet()
	{
        $this->load->view('template/header');
		$this->load->view('template/profil/kabinet');
        $this->load->view('template/footer');
	}

    public function kominrel()
	{
        $this->load->view('template/header');
		$this->load->view('template/profil/kominrel');
        $this->load->view('template/footer');
	}
    
    public function inpus()
	{
        $this->load->view('template/header');
		$this->load->view('template/profil/inpus');
        $this->load->view('template/footer');
	}

    public function akarinovasi()
	{
        $this->load->view('template/header');
		$this->load->view('template/profil/akarinovasi');
        $this->load->view('template/footer');
	}

    public function kemahasiswaan()
	{
        $this->load->view('template/header');
		$this->load->view('template/profil/kemahasiswaan');
        $this->load->view('template/footer');
	}

    public function gersospol()
	{
        $this->load->view('template/header');
		$this->load->view('template/profil/gersospol');
        $this->load->view('template/footer');
	}
}
