<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function index()
	{
		echo "Bienvenido " . $this->session->userdata("user");
	}

}

/* End of file panel.php */
/* Location: ./application/controllers/panel.php */