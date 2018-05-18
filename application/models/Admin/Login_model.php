<?php 


class Login_model extends CI_Model
{
	public function login_user($name,$password)
	{
		//$this->db->where('password',$password);
		$this->db->where('name',$name);
		$result = $this->db->get('users');
		 if($result->num_rows() == 1)
		 {
			$db_password = $result->row(2)->password;
			if(password_verify($password, $db_password))
				return $result->row();
			else
				return false;
		}
		else
		{
			return false;
		}
	}

	/*public function create_user()
	{
		$option = ['cost' => 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $option);
		$data = array(
			'name' => $this->input->post('name'),
			'password' => $encripted_pass
		 );
		
		$insert_data = $this->db->insert('users',$data);
		return $insert_data;
	}*/
	
	public function edit_user_detail($id,$password)
	{
		$option = ['cost' => 12];
		$encripted_pass = password_hash($password, PASSWORD_BCRYPT, $option);
		$data = array(
			'password' => $encripted_pass
		 );
		$this->db->where('id',$id);
		$this->db->update('users',$data);
		return true;
	}
	
	public function check_password($id,$password)
	{
	    $this->db->where('id',$id);
		$result = $this->db->get('users');
		 if($result->num_rows() == 1)
		 {
			$db_password = $result->row(2)->password;
			if(password_verify($password, $db_password))
				return true;
			else
				return false;
		}
		else
		{
			return false;
		}
	}

}

?>
