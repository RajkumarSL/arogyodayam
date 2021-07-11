<?php
class OurteamModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }

//*****************************************************************************************************************************//*****************************************************************************************************************************													          ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	function ourteamList()
    {
		return $data_tbl = $this->db->order_by('id', 'DESC')->get('tbl_our_teams')->result();
		
    }
	
	function add($data)
	{
      if($this->db->insert('tbl_our_teams',$data))
      {
			return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function ourteamGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_our_teams');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function edit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_our_teams',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    public function Get_by_id($id){
        $q = $this->db->query("select * from tbl_our_teams where id = '".$id."'");
        return $q->row();
    }
		

	
}
?>
