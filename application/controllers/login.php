<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Register_model','register');
	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
        $this->load->view('footer');
	}

    public function login_user()

    {

        if ($this->input->post('login')) {
            $Username = $this->input->post('Username');
            $Password = $this->input->post('Password');
            $check = $this->register->login($Username, $Password);

            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);  
                $data['query'] = $this->register->showuser();
                $this->load->view('show',$data);


            } else {



                // echo '<script>alert("Region already added");</script>'
                redirect('home');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        // $this->session->unset_userdata($data);
        
        redirect($this->load->view('header'), 'refresh');
        $this->load->view('home');
        $this->load->view('footer');
    }
	
    
    
}
 
   
?>