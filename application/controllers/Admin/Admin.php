<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		session_start();
		
	}
	public function index()
	{
		//$data = array();
		//print_r($this->session->userdata());
		if($this->session->userdata('ulogged_in'))
		{
			$data['lottery_data'] = $this->Lottery_model->get_all_lottery_list();
			$data['time_data'] = $this->Lottery_model->get_time_list();
			$data['main_view']="Data_entry/lottery_display_view";
			$this->load->view('Admin/Layout/main', $data);
		}
		else
		    $this->load->view('Admin/Layout/main');
		
	}
	
	/*public function create_user()
	{
    	if($this->Login_model->create_user())
    	{
    		echo "ho gaya";
    		exit;
    	}
	        	
	}*/
	public function refresh_lottery_list()
	{
	    $datee= $this->input->post('datee');
        $data['lottery_data'] = $this->Lottery_model->get_lottery_list_by_date($datee);
        $d = DateTime::createFromFormat('Y-m-d', $datee);
        $data['valid_formate']=1;
        if( $d && $d->format('Y-m-d') === $datee)
        {
            $data['valid_formate']=1;
        }
        else
        {
            $data['valid_formate']=0;
        }
        $data['time_data'] = $this->Lottery_model->get_time_list();
        $this->load->view('Admin/Data_entry/datewise_lottery_display',$data);
	}

	public function login()
	{
	    
	    
		$this->form_validation->set_rules('name', 'User Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
     
		if($this->form_validation->run() == FALSE)
		{
		    //echo 'not valid';
			$data = array(
				'error' => validation_errors()
				 );
			$this->session->set_flashdata($data);
			$this->load->view('Admin/Layout/main');
			//redirect('admin');
		}
		else
		{
		    //echo 'valid';
			$name = $this->input->post('name');
			$password = $this->input->post('password');
			$user_detail = $this->Login_model->login_user($name,$password);
			//print_r($user_detail);
			if($user_detail)
			{
			    //echo 'if login success';
				$user_data = array(
					'uid' => $user_detail->id,
					'uname' => $name,
					'ulogged_in' => TRUE
					 );
					 //print_r($this->session->userdata());
				//$_SESSION['ulogged_in']	= TRUE; 
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success','You are successfully logged in');
				
				redirect('admin');
			}
			else
			{
				$this->session->set_flashdata('error','You are failed to login');
				redirect('admin');
			}
		}
		//redirect('admin');
	}
	
	public function change_password()
	{
	    if($this->Login_model->check_password($this->session->userdata('uid'),$this->input->post('old_password'))==false)
	    {
	        $this->form_validation->set_message('same_password', 'Enter correct password');
	        $this->form_validation->set_rules('old_password', 'Password', 'trim|required|min_length[3]|same_password');
	    }
	    else
	    {
	        $this->form_validation->set_rules('old_password', 'Password', 'trim|required|min_length[3]');
	    }
	    
		$this->form_validation->set_rules('new_password', 'Password', 'trim|required|min_length[3]');
		if($this->form_validation->run() == FALSE)
		{
		    $data = array(
				'change_password_error' => validation_errors()
				 );
		    $data['main_view']="Login/change_password";
		    $this->load->view('Admin/Layout/main', $data);
		}
		else
		{
		    $id = $this->session->userdata('uid');
			$password = $this->input->post('new_password');
			if($this->Login_model->edit_user_detail($id,$password))
			{
				$this->session->set_flashdata('password_updated','Your password has been updated');
				$_SESSION['password_update']= 'Your password has been updated';
			    redirect('admin');
			}
		}
	    
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}