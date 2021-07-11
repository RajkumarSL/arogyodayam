<?php
class Admin_slider extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('SliderModel');
    $this->load->helper('url');
	$this->load->library('session');
  }
	function index()
	{
		$data['sliderList']=$this->SliderModel->sliderList();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/slider/sliderList',$data);
		$this->load->view('template/footer');
	}
	public function add()
	{
		$result = array('message'=>'');	
		if($this->input->post('submit_slider'))
		{  
			if(!empty($_FILES['bg_banner']['name'])){
				$config['upload_path'] = './uploads/slider/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = $_FILES['bg_banner']['name'];
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('bg_banner')){
					$uploadData = $this->upload->data();
					$bg_banner = $uploadData['file_name'];
					// Compress Section start
					$ext = pathinfo($bg_banner, PATHINFO_EXTENSION);
					$file_url = base_url().'uploads/slider/'.$bg_banner;
					$new_name_image = $bg_banner;
					$quality = 60;
					if(strtoupper($ext) == "png" || strtoupper($ext) == "x-png")
					{
						$pngQuality = 9;
					}
					else
					{
						$pngQuality = 0;
					}
					$destination = base_url().'uploads/slider/';
					$this->compress->compress_image($file_url,$new_name_image,$quality,$pngQuality,$destination);
					// Compress Section end
				}else{
					$bg_banner = '';
				}
			}
            //Prepare array of user data
            $userData = array(
                'slider' => $bg_banner,
                'created_date' => date("Y-m-d H:i:s")
            );          
			//Pass user data to model
			$result['message'] = $this->SliderModel->Add($userData);
        }		
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('admin/slider/newSlider',$result);
    $this->load->view('template/footer');
	}
  
	public function edit($id)
	{
		$result = array('message'=>'');
		if($this->input->post('submit_updatebgimage'))
		{
			if(!empty($_FILES['edit_bg_image']['name']))
			{
				$config['upload_path'] = './uploads/slider/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = $_FILES['edit_bg_image']['name']; 
				//Load upload library and initialize configuration
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('edit_bg_image')){
					$uploadData = $this->upload->data();
					$edit_bg_image = $uploadData['file_name'];
					// Compress Section start
					$ext = pathinfo($edit_bg_image, PATHINFO_EXTENSION);
					$file_url = base_url().'uploads/slider/'.$edit_bg_image;
					$new_name_image = $edit_bg_image;
					$quality = 60;
					if(strtoupper($ext) == "png" || strtoupper($ext) == "x-png")
					{
						$pngQuality = 9;
					}
					else
					{
						$pngQuality = 0;
					}
					$destination = base_url().'uploads/slider/';
					$this->compress->compress_image($file_url,$new_name_image,$quality,$pngQuality,$destination);
					// Compress Section end
				}else{
					$edit_bg_image = '';
				}
			}
			else
			{
				$edit_bg_image = $this->input->post('get_image_name');
			}
		
			$data = array(
				'slider' => $edit_bg_image,
				'created_date' => date("Y-m-d H:i:s")
			);
			$result['message'] = $this->SliderModel->Edit($data, $id);
			if($result['message'] == 'SUCCESS')
			{
			$messge = array('message' => 'Slider details updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."admin_slider");
			}
		}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['slider']=$this->SliderModel->getdata($id);
    $this->load->view('admin/slider/updateSlider',$result);
    $this->load->view('template/footer');
	}
	public function Delete($id)
	{
		$id  = $this->SliderModel->Get_by_id($id);
		if($id){
			$this->db->query("Delete from tbl_slider where id = '".$id->id."'");
			if(file_exists('uploads/slider/'.$id->slider)) 
			{
				unlink('uploads/slider/'.$id->slider);
				
			}
			$messge = array('message' => 'Slider details deleted successfully','class' => 'alert alert-danger fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."admin_slider");
		}
	}
}
?>
