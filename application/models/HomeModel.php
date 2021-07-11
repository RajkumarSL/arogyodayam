<?php
class HomeModel extends CI_Model {
	function __construct()
    {
		parent::__construct();
		$this->load->database();
    }
	function getSettings()
	{
		$query = $this->db->get_where('tbl_settings', array("id"=>1));
		return $query->row();
    }
	function getSlider()
	{
		$query = $this->db->get('tbl_slider');
		return $query->result();
    }
	function getOurtreatments()
	{
		$query = $this->db->get('tbl_our_treatments', 4);
		return $query->result();
    }
	function getOurteams()
	{
		$query = $this->db->get('tbl_our_teams', 3);
		return $query->result();
    }
	function getTestimonials()
	{
		$query = $this->db->get('tbl_testimonials', 4);
		return $query->result();
    }
	function getGallery()
	{
		$query = $this->db->get('tbl_gallery');
		return $query->result();
    }
    function getfrontTestimonials()
	{
		$query = $this->db->get('tbl_testimonials');
		return $query->result();
    }
    function getourproducts()
	{
		$query = $this->db->get('tbl_our_products', 4);
		return $query->result();
    }
}
?>
