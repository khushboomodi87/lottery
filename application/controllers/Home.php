<?php 
class Home extends CI_Controller
{
	public function index()
	{		
		$current_date=date('Y-m-d');
		$data=array();
		$data['active_lottery'] = 0;
		$data['time_list']=0;
		$data['today_till_now_lottery_list']=0;
		$data['next_lottery_at']=date('d-m-Y', strtotime($current_date. ' + 1 days'));
		$datestring = '%h:%i %a';
		$time = time();
		$match_current_time = mdate($datestring,$time);
		$match_current_time=date('H:i', strtotime($match_current_time)) ;
		$initial_time=date('H:i', strtotime("9:00AM"));
		if($match_current_time<$initial_time)
		{
		    $initial_time=date('h:iA', strtotime("9:00AM"));
		    $data['next_lottery_at']= $initial_time;
		}
		
		if($this->Home_model->fetch_current_date_lottery($current_date)!="0")
		{
			if($this->Home_model->fetch_active_lottery()!="0")
			{
				$active_lottery = $this->Home_model->fetch_active_lottery();
				$active_time=$active_lottery->timee;
				$data['active_lottery'] = $active_lottery;
				$end_time=date('H:i', strtotime("9:00PM"));
				$t=date("H:i",strtotime("+15 minutes", strtotime($active_time)));
				if($t <= $end_time)
				{
					$t=date('h:iA', strtotime($t));
					$data['next_lottery_at']=$t;
				}
				$data['today_till_now_lottery_list']= $this->Home_model->all_current_date_lottery($current_date,$active_lottery->id);
			}
			
// 			$data['time_list']=$this->Lottery_model->get_time_list();
				
		}
		$data['time_list']=$this->Lottery_model->get_time_list();
		//$data['main_view']="home_view";
		$data['only_time_list']=$this->Lottery_model->get_time_list();
		$this->load->view('Layout/Main', $data);
	}


	public function cron_current_lottery()
	{
		$current_date=date('Y-m-d');
		if($this->Home_model->fetch_current_date_lottery($current_date)!="0")
		{
			$datestring = '%h:%i %a';
			$time = time();
			$current_time = mdate($datestring, $time);
			$initial_time=date('H:i', strtotime("9:00AM"));
			$end_time=date('H:i', strtotime("9:00PM"));
			if($this->Home_model->fetch_active_lottery()=="0")
			{
				$timee=date('h:iA', strtotime($initial_time));
				$this->Home_model->update_data($current_date,$timee);
			}
			else 
			{
				$active_lottery = $this->Home_model->fetch_active_lottery();
				$active_time=$active_lottery->timee;
				$active_id=$active_lottery->id;
				$active="0";
				$this->Home_model->update_data($current_date,$active_time,$active,$active_id);
				$active_time=date('H:i', strtotime($active_lottery->timee));
				if($active_time==$end_time)
				{
					 $active="0";
					$this->Home_model->update_data("","",$active,$active_id);
				}
				else
				{
					$active='1';
					$now_active_id=$active_id+1;
					$this->Home_model->update_data("","",$active,$now_active_id);
					
				}
			}
		}
		else
		{
    		$timee=date('H:i', strtotime("12:00AM"));
    		$datestring = '%h:%i %A';
    		$time = time();
    		$current_time = mdate($datestring, $time);
    		$current_time = date('H:i', strtotime($current_time));
    		$end_time=date('H:i', strtotime("9:00PM"));
    		if($timee==$current_time)
    		{
    		    $datee=date('Y-m-d', strtotime($current_date. ' - 1 days'));
        		if($this->Home_model->fetch_current_date_lottery($datee)!="0")
        		{
        		    if($this->Home_model->fetch_lottery_by_date($datee)!="0")
    			    {
            		    $active_lottery = $this->Home_model->fetch_lottery_by_date($datee);
        				$active_time=date('H:i', strtotime($active_lottery->timee));
        				$active_id=$active_lottery->id;
            		    if($active_time==$end_time)
            			{
            				 $active="0";
            				 $this->Home_model->update_data("","",$active,$active_id);
            				
            			}
    			    }
        		}
		    }
		    
		}
		

	}
	
	public function get_new_lottery()
	{
	    $current_date=date('Y-m-d');
		$data=array();
		$data['active_lottery'] = 0;
		$data['time_list']=0;
		$data['next_lottery_at']=date('d-m-Y', strtotime($current_date. ' + 1 days'));
		$datestring = '%h:%i %a';
		$time = time();
		$match_current_time = mdate($datestring,$time);
		$match_current_time=date('H:i', strtotime($match_current_time)) ;
		$initial_time=date('H:i', strtotime("9:00AM"));
		if($match_current_time<$initial_time)
		{
		    $initial_time=date('h:iA', strtotime("9:00AM"));
		    $data['next_lottery_at']= $initial_time;
		}
		if($this->Home_model->fetch_current_date_lottery($current_date)!="0")
		{
			if($this->Home_model->fetch_active_lottery()!="0")
			{
				$active_lottery = $this->Home_model->fetch_active_lottery();
				$active_time=$active_lottery->timee;
				$data['active_lottery'] = $active_lottery;
				$end_time=date('H:i', strtotime("9:00PM"));
				$t=date("H:i",strtotime("+15 minutes", strtotime($active_time)));
				if($t <= $end_time)
				{
					$t=date('h:iA', strtotime($t));
					$data['next_lottery_at']=$t;
				}
			}
			
				
		}
		$data['only_time_list']=$this->Lottery_model->get_time_list();
		$this->load->view('User_view/new_lottery_number_refresh', $data);
	}
	
	public function refresh_lottery_list()
	{		
		$current_date=date('Y-m-d');
		$data=array();
		$data['active_lottery'] = 0;
		$data['time_list']= 0;
		$data['today_till_now_lottery_list']=0;
		if($this->Home_model->fetch_current_date_lottery($current_date)!="0")
		{
			if($this->Home_model->fetch_active_lottery()!="0")
			{
				$active_lottery = $this->Home_model->fetch_active_lottery();
				$data['today_till_now_lottery_list']= $this->Home_model->all_current_date_lottery($current_date,$active_lottery->id);
			}
		//	$data['time_list']=$this->Lottery_model->get_time_list();
		}
		$data['time_list']=$this->Lottery_model->get_time_list();
		$this->load->view('User_view/refresh_lottery_list', $data);
	}
}

?>