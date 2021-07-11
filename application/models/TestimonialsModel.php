<?php
class TestimonialsModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }
	function dataList()
    {
		return $data_tbl = $this->db->order_by('id', 'DESC')->get('tbl_testimonials')->result();
		
    }
	
	function add($data)
	{
      if($this->db->insert('tbl_testimonials',$data))
      {
			return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function testimonialsGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_testimonials');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function edit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_testimonials',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    public function Get_by_id($id){
        $q = $this->db->query("select * from tbl_testimonials where id = '".$id."'");
        return $q->row();
    }
		

	
}
?>
