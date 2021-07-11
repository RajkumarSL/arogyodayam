<?php
class SettingModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }
	function getData()
	{
		$query = $this->db->get_where('tbl_settings', array("user_id"=>$this->session->userdata('user_id')));
		return $query->row();
    }
	
	function update($data,$id)
    {
		$this->db->where('id',$id);      //var_dump($id);exit();
		if($this->db->update('tbl_settings',$data))
		{
			return "SUCCESS";
		}
		else 
		{
			return "FAILED";
		}
    }
}
?>
