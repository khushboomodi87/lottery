<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lottery extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
	   $this->load->library('session');
		session_start();
		if(!$this->session->userdata('ulogged_in'))
		{
		    echo "hi";
			$this->session->set_flashdata('no_access', 'Not allowed, Please login first.');
			redirect('admin');
		}
		
	}

	public function add_lottery_data()
	{
		if(!$this->Lottery_model->get_all_lottery_list())
		{
			if($this->input->post('a')!= FALSE)
			{
				foreach ($this->input->post('a') as $key => $value) 
				{
					$this->form_validation->set_rules("a[$key]",'Data','trim|required|numeric|greater_than_equal_to[0]|less_than[100]');
					$this->form_validation->set_rules("b[$key]",'Data','trim|required|numeric|greater_than_equal_to[0]|less_than[100]');
					$this->form_validation->set_rules("c[$key]",'Data','trim|required|numeric|greater_than_equal_to[0]|less_than[100]');	
				}
				if($this->form_validation->run() == FALSE)
				{
					$data['time_list'] = $this->Lottery_model->get_time_list();
					$data['main_view']="Data_entry/lottery_entry_view";
					$this->load->view('Admin/Layout/main', $data);
				}
				else
				{
					$flag=1;
                    $is_active=1;
                    
					foreach ($this->input->post('a') as $key => $value) 
					{
					    $active="0";
					   //if($is_active)
    				//     {
    				// 	    $datestring = '%H:%i';
        //                     $time = time(); 
        //                     $current_time = mdate($datestring, $time);
        //                     $compair_time=date("H:i",strtotime("09:00AM"));
        //                     if($current_time>=$compair_time)
        //                     {        
        //                         $t= $this->input->post('timee')[$key];
        //                         $timee=date("H:i",strtotime("+15 minutes", strtotime($t)));
        //                         if($timee>=$current_time)
        //                         {
        //                             $active="1";
        //                             $is_active=0;
        //                         }
    				// 	    }
        //                 }
						$data = array(
							'timee' => $this->input->post('timee')[$key],
							'datee' => date('Y-m-d'),
							'a' => $this->input->post('a')[$key],
							'b' => $this->input->post('b')[$key],
							'c' => $this->input->post('c')[$key],
							'active' => $active
						);

						if($this->Lottery_model->add_lottery($data))
						{
							
						}
						else
						{
							$flag=0;
						}
					}
					if($flag)
					{
						$this->session->set_flashdata('Lottery_created','Lottery data has been saved');
						redirect('admin');
					}
				}
			}
			else
			{
				$data['time_list'] = $this->Lottery_model->get_time_list();
				$data['main_view']="Data_entry/lottery_entry_view";
				$this->load->view('Admin/Layout/main', $data);
			}
		}
		else
		{
			$this->session->set_flashdata('Lottery_already_created','Lottery data has already been saved for today');
			redirect('admin');
		}
	}
	
	public function edit_lottery_data()
    {
        // echo "hello";
        // exit;
		if($this->input->post('a')!= FALSE)
		{
			foreach ($this->input->post('a') as $key => $value) 
			{
				$this->form_validation->set_rules("a[$key]",'Data','trim|required|numeric|greater_than_equal_to[0]|less_than[100]');
				$this->form_validation->set_rules("b[$key]",'Data','trim|required|numeric|greater_than_equal_to[0]|less_than[100]');
				$this->form_validation->set_rules("c[$key]",'Data','trim|required|numeric|greater_than_equal_to[0]|less_than[100]');	
			}
			if($this->form_validation->run() == FALSE)
			{
				$data['current_date_lottery'] = $this->Lottery_model->get_current_date_lottery();
    			$data['main_view']="Data_entry/lottery_edit_view";
    			$this->load->view('Admin/Layout/main', $data);
			}
			else
			{
				$flag=1;
				foreach ($this->input->post('a') as $key => $value) 
				{
				    $id = $this->input->post('id')[$key];
					$data = array(
						'a' => $this->input->post('a')[$key],
						'b' => $this->input->post('b')[$key],
						'c' => $this->input->post('c')[$key],
					);

					if($this->Lottery_model->edit_lottery($data,$id))
					{
						
					}
					else
					{
						$flag=0;
					}
				}
				if($flag)
				{
					$this->session->set_flashdata('Lottery_Edited','Lottery data has edited');
					redirect('admin');
				}
			}
		}
		else
		{
			$data['current_date_lottery'] = $this->Lottery_model->get_current_date_lottery();
			$data['main_view']="Data_entry/lottery_edit_view";
			$this->load->view('Admin/Layout/main', $data);
		}
	}
}