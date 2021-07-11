<?php

class Usermodel extends CI_Model{

	public function login($email,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get();
		$row_count=$query->num_rows();
			if($row_count>0){
				$userdata=$query->row();
				$newdata = array(
					'user_id'  => $userdata->user_id,
					'user_type' => $userdata->user_type,
					'first_name' => $userdata->first_name,
					'last_name' => $userdata->last_name,
					'middle_name' => $userdata->middle_name,
					'email'     => $userdata->email,
					'emp_no'		=>$userdata->emp_no,
					'password'     => $userdata->password,
					'photo'		=>$userdata->photo,
					'logged_in' => "TRUE"
					);
				$this->session->set_userdata($newdata);
				$this->setLoginTime($userdata->user_id);
				return true;
			}
		return false;
	}

	public function logout($user_id)
	{
		$data['logged_in']="FALSE";
		$this->db->where('user_id',$user_id);
		$this->db->update('user',$data);
		$newdata = array(
			'user_id'   => '',
			'email'     => '',
			'user_type' => '',
			'first_name' => '',
			'last_name' => '',
			'middle_name' => '',
			'password'     => '',
			'logged_in' => "FALSE"
		);
		$this->session->set_userdata($newdata);
	}

	public function setLoginTime($user_id)
	{
		$data['last_login']=date("Y-m-d H:i:s");
		$data['logged_in']="TRUE";
		$this->db->where('user_id',$user_id);
		$this->db->update('user',$data);
	}

}
