<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getPackageConditionName'))
{
    function getPackageConditionName($var = '')
    {
		$ci =& get_instance();
		$data = $ci->db->get_where("tbl_package_condition", array("pack_cond_id"=>$var, "pack_cond_status"=>1));
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$result_data = $row->pack_cond_name;
		}
		else
		{
			$result_data = "";
		}
		return $result_data;
    }   
}
if (!function_exists('getPackageInclusionName'))
{
    function getPackageInclusionName($var = '')
    {
		$ci =& get_instance();
		$data = $ci->db->get_where("tbl_package_inclusions", array("pack_incl_id"=>$var, "pack_incl_status"=>1));
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$result_data = $row->pack_incl_name;
		}
		else
		{
			$result_data = "";
		}
		return $result_data;
    }   
}
if (!function_exists('getPackageExclusionName'))
{
    function getPackageExclusionName($var = '')
    {
		$ci =& get_instance();
		$data = $ci->db->get_where("tbl_package_exclusions", array("pack_excl_id"=>$var, "pack_excl_status"=>1));
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$result_data = $row->pack_excl_name;
		}
		else
		{
			$result_data = "";
		}
		return $result_data;
    }   
}
if (!function_exists('getPackageTermsConditionsName'))
{
    function getPackageTermsConditionsName($var = '')
    {
		$ci =& get_instance();
		$data = $ci->db->get_where("tbl_package_terms_conditions", array("pack_tc_id"=>$var, "pack_tc_status"=>1));
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$result_data = $row->pack_tc_name;
		}
		else
		{
			$result_data = "";
		}
		return $result_data;
    }   
}
if (!function_exists('getPackagePaymentPolicyName'))
{
    function getPackagePaymentPolicyName($var = '')
    {
		$ci =& get_instance();
		$data = $ci->db->get_where("tbl_package_payment_policy", array("pack_pp_id"=>$var, "pack_pp_status"=>1));
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$result_data = $row->pack_pp_description;
		}
		else
		{
			$result_data = "";
		}
		return $result_data;
    }   
}
if (!function_exists('getPackageCancellationPolicyName'))
{
    function getPackageCancellationPolicyName($var = '')
    {
		$ci =& get_instance();
		$data = $ci->db->get_where("tbl_package_cancellation_policy", array("pack_cp_id"=>$var, "pack_cp_status"=>1));
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$result_data = $row->pack_cp_name;
		}
		else
		{
			$result_data = "";
		}
		return $result_data;
    }   
}
if (!function_exists('getGalleryCategoryName'))
{
    function getGalleryCategoryName($var = '')
    {
		$ci =& get_instance();
		$data = $ci->db->get_where("tbl_gallery_category", array("gc_id"=>$var, "gc_status"=>1));
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$result_data = $row->gc_title;
		}
		else
		{
			$result_data = "";
		}
		return $result_data;
    }   
}

if (!function_exists('getMenuName'))
{
    function getMenuName($var = '')
    {
		if($var == 1)
		{
			$result_data = "Home";
		}
		else if($var == 2)
		{
			$result_data = "About Us";
		}
		else if($var == 3)
		{
			$result_data = "Resorts";
		}
		else if($var == 4)
		{
			$result_data = "Activities";
		}
		else if($var == 5)
		{
			$result_data = "Gallery";
		}
		else if($var == 6)
		{
			$result_data = "Contact Us";
		}
		else if($var == 7)
		{
			$result_data = "Testimonials";
		}
		else if($var == 8)
		{
			$result_data = "Excursion";
		}
		return $result_data;
    }   
}


if (!function_exists('getMetaTagDetails'))
{
    function getMetaTagDetails($var = '')
    {
		$ci =& get_instance();
		$data = $ci->db->get_where("tbl_meta_tags", array("mt_menu_list_id"=>$var, "mt_status"=>1));
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			if($row->mt_title != "")
			{
				$mt_title = $row->mt_title;
			}
			else
			{
				$mt_title = "Best Maldives Honeymoon, Vacation Package - All Inclusive Deals on Maldives Holiday Packages | Blue Wave Holidays";
			}
			if($row->mt_keywords != "")
			{
				$mt_keyword = $row->mt_keywords;
			}
			else
			{
				$mt_keyword = "Best Maldives Honeymoon, Vacation Package - All Inclusive Deals on Maldives Holiday Packages | Blue Wave Holidays";
			}
			if($row->mt_description != "")
			{
				$mt_description = $row->mt_description;
			}
			else
			{
				$mt_description = "Best Maldives Honeymoon, Vacation Package - All Inclusive Deals on Maldives Holiday Packages | Blue Wave Holidays";
			}
		}
		else
		{
			$mt_title = "Best Maldives Honeymoon, Vacation Package - All Inclusive Deals on Maldives Holiday Packages | Blue Wave Holidays";
			$mt_keyword = "Best Maldives Honeymoon, Vacation Package - All Inclusive Deals on Maldives Holiday Packages | Blue Wave Holidays";
			$mt_description = "Best Maldives Honeymoon, Vacation Package - All Inclusive Deals on Maldives Holiday Packages | Blue Wave Holidays";
		}
		return array("mt_title"=>$mt_title, "mt_keyword"=>$mt_keyword, "mt_description"=>$mt_description);
    }   
}

if (!function_exists('getMetaTagResortViewDetail'))
{
    function getMetaTagResortViewDetail($var = '')
    {
		$ci =& get_instance();
		$data = $ci->db->get_where("tbl_packages", array("pack_id"=>$var, "pack_status"=>1));
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$result_data = $row->pack_title;
		}
		else
		{
			$result_data = "Best Maldives Honeymoon, Vacation Package - All Inclusive Deals on Maldives Holiday Packages | Blue Wave Holidays";
		}
		return $result_data;
    }   
}
if (!function_exists('getMetaTagGalleryCategoryDetail'))
{
    function getMetaTagGalleryCategoryDetail($var = '')
    {
		$ci =& get_instance();
		$data = $ci->db->get_where("tbl_gallery_category", array("gc_id"=>$var, "gc_status"=>1));
		if($data->num_rows() > 0)
		{
			$row = $data->row();
			$result_data = $row->gc_title;
		}
		else
		{
			$result_data = "Best Maldives Honeymoon, Vacation Package - All Inclusive Deals on Maldives Holiday Packages | Blue Wave Holidays";
		}
		return $result_data;
    }   
}
?>
	
    
    