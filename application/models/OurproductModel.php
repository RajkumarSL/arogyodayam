<?php
class OurproductModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }

//*****************************************************************************************************************************//*****************************************************************************************************************************													          ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	function ourproductList()
    {
		return $data_tbl = $this->db->order_by('id', 'DESC')->get('tbl_our_products')->result();
		
    }
	
	function add($data)
	{
      if($this->db->insert('tbl_our_products',$data))
      {
			return "SUCCESS";
      }
      else
      {
        return "FAILED";
      }

	}
	function ourproductGet($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_our_products');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
    }
	function edit($data,$id)
    {

      $this->db->where('id',$id);      //var_dump($id);exit();
	   if($this->db->update('tbl_our_products',$data))
	   {
			return "SUCCESS";
	   }
	   else 
	   {
		   return "FAILED";
	   }
    }
    public function Get_by_id($id){
        $q = $this->db->query("select * from tbl_our_products where id = '".$id."'");
        return $q->row();
    }
		

	
}
?>
