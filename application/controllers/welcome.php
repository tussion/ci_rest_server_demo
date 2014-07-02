<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');

class Welcome extends REST_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	// https://github.com/philsturgeon/codeigniter-restclient
	// https://github.com/chriskacerguis/codeigniter-restserver
	
	function user_get()
    {
        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }
 
        $user = array("name"=>"raviraj","age"=>"27");
         
        if($user)
        {
            $this->response($user, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */