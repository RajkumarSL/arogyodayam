<?php
class Admin_gallery extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('GalleryModel', 'model');
    $this->load->helper('url');
	$this->load->library('session');
	$this->load->library('Compress');  // load the codeginiter library
  }
	function index()
	{
		$data['galleryList']=$this->model->galleryList();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/gallery/galleryList',$data);
		$this->load->view('template/footer');
	}
	public function add()
	{
		$result = array('message'=>'');	
		if($this->input->post('submit_data'))
		{  
			if(!empty($_FILES['image']['name'])){
				$config['upload_path'] = './uploads/gallery/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = $_FILES['image']['name'];
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('image')){
					$uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					// Compress Section start
					$ext = pathinfo($image, PATHINFO_EXTENSION);
					$file_url = base_url().'uploads/gallery/'.$image;
					$new_name_image = $image;
					$quality = 60;
					if(strtoupper($ext) == "png" || strtoupper($ext) == "x-png")
					{
						$pngQuality = 9;
					}
					else
					{
						$pngQuality = 0;
					}
					$destination = base_url().'uploads/gallery/';
					$this->compress->compress_image($file_url,$new_name_image,$quality,$pngQuality,$destination);
					// Compress Section end
				}else{
					$image = '';
				}
			}
            //Prepare array of user data
            $userData = array(
                'title' => $this->input->post('title'),
                'image' => $image
            );          
			//Pass user data to model
			$result['message'] = $this->model->Add($userData);
        }		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/gallery/newGallery',$result);
		$this->load->view('template/footer');
	}
  
	public function edit($id)
	{
		$result = array('message'=>'');
		if($this->input->post('submit_updatebgimage'))
		{
			if(!empty($_FILES['edit_bg_image']['name']))
			{
				$config['upload_path'] = './uploads/gallery/';
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
					$file_url = base_url().'uploads/gallery/'.$edit_bg_image;
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
					$destination = base_url().'uploads/gallery/';
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
				'title' => $this->input->post('title'),
				'image' => $edit_bg_image
			);
			$result['message'] = $this->model->Edit($data, $id);
			if($result['message'] == 'SUCCESS')
			{
			$messge = array('message' => 'Gallery details updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."admin_gallery");
			}
		}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['gallery']=$this->model->getdata($id);
    $this->load->view('admin/gallery/updateGallery',$result);
    $this->load->view('template/footer');
	}
	public function Delete($id)
	{
		$id  = $this->model->Get_by_id($id);
		if($id){
			$this->db->query("Delete from tbl_gallery where id = '".$id->id."'");
			if(file_exists('uploads/gallery/'.$id->image)) 
			{
				unlink('uploads/gallery/'.$id->image);
				
			}
			$messge = array('message' => 'Gallery details deleted successfully','class' => 'alert alert-danger fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."admin_gallery");
		}
	}
}
?>
