<?php 


class Home_model extends CI_Model
{
	public function fetch_current_date_lottery($current_date)
	{
		$this->db->where('datee',$current_date);
		$query = $this->db->get('lottery_list');
		if($query->num_rows() < 1)
		{
			return "0";
		}
		return $query->result();
		
	}
	
	public function all_current_date_lottery($current_date,$id)
	{
		$this->db->where('datee',$current_date);
		$this->db->where('id <=',$id);
		$query = $this->db->get('lottery_list');
		if($query->num_rows() < 1)
		{
			return false;
		}
		return $query->result();
	}

	public function update_data($current_date,$timee,$active="1",$now_active_id=0)
	{
		if($now_active_id)
			$this->db->where('id',$now_active_id);
		else
		{
			$this->db->where('datee',$current_date);
			$this->db->where('timee',$timee);
		}
		$this->db->set('active', $active);
		$this->db->update('lottery_list');
		return TRUE;
	}

	public function fetch_active_lottery()
	{
		$this->db->where('active',"1");
		$current_date=date('Y-m-d');
		$this->db->where('datee',$current_date);
		$query = $this->db->get('lottery_list');
		if($query->num_rows() < 1)
		{
			return "0";
		}
		return $query->row();
	}
	public function fetch_lottery_by_date($datee)
	{
		$this->db->where('active',"1");
		$this->db->where('datee',$datee);
		$query = $this->db->get('lottery_list');
		if($query->num_rows() < 1)
		{
			return "0";
		}
		return $query->row();
		
	}

}

?>
