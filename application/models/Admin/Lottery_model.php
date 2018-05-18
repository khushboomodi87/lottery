<?php 


class Lottery_model extends CI_Model
{
	public function get_all_lottery_list()
	{
		$datee=date("Y-m-d");
		$this->db->where('datee',$datee);
		$query = $this->db->get('lottery_list');
		if($query->num_rows() < 1)
		{
			return FALSE;
		}
		return $query->result();
	}

	public function get_time_list()
	{
		$query=$this->db->get('lottery_time');
		return $query->result();
	}

	public function add_lottery($data)
	{
		$insert_query = $this->db->insert('lottery_list',$data);
		return $insert_query;
	}
	
	public function get_current_date_lottery()
	{
	    $datee=date("Y-m-d");
		$this->db->where('datee',$datee);
		$query = $this->db->get('lottery_list');
		if($query->num_rows() < 1)
		{
			return FALSE;
		}
		return $query->result();
	}
	
	public function edit_lottery($data,$id)
	{
	    $this->db->where('id',$id);
		$this->db->update('lottery_list',$data);
		return true;
	}
	public function get_lottery_list_by_date($datee)
	{
	    $this->db->where('datee',$datee);
		$query = $this->db->get('lottery_list');
		if($query->num_rows() < 1)
		{
			return FALSE;
		}
		return $query->result();
	}
}

?>
