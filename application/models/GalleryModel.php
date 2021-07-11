<?php
class GalleryModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }
    function Add($userData)
	{
		if($this->db->insert('tbl_gallery',$userData))
		{
			return "SUCCESS";
		}
		else
		{
			return "FAILED";
		}
	}
	function galleryList()
	{
		$query = $this->db->get('tbl_gallery');
		return $query->result();
    }
	
	function getdata($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	
	function Edit($data,$id)
    {
		$this->db->where('id',$id);      //var_dump($id);exit();
		if($this->db->update('tbl_gallery',$data))
		{
			return "SUCCESS";
		}
		else 
		{
			return "FAILED";
		}
    }
	public function Get_by_id($id){
        $q = $this->db->query("select * from tbl_gallery where id = '".$id."'");
        return $q->row();
    }
}
?>
