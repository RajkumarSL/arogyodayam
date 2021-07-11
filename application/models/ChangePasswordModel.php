
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ChangePasswordModel extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function pwd_update($data, $id)
	{
		$this->db->where('user_id',$id);
		$this->db->update('user',$data);
		return "SUCCESS";
	}
}
