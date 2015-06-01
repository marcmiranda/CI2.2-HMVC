<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hmvctest extends Public_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['header'] = "Public Header";
		$data['page'] = "hmvctest_view";
		$data['module'] = "hmvctest";
		$this->load->view($this->_container,$data);
	}
}

/* End of file hmvctest.php */
/* Location: ./application/modules/hmvctest/controllers/hmvctest.php */