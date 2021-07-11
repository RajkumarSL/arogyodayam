<?php
class Our_treatments extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('OurtreatmentModel', 'model');
    $this->load->helper('url');
	$this->load->library('session');
	/* if ($this->session->userdata('user_type') != 'ADMIN')
	{
        redirect('login');
	} */
  }
  
  //*****************************************************************************************************************************//*****************************************************************************************************************************													           ADD POST *****************************************************************************************************************************//*****************************************************************************************************************************//
	
  function index()
  {
	  $data = array('message'=>'');
	  $data['ourtreatmentList']=$this->model->ourtreatmentList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('admin/our_treatments/List', $data);
      $this->load->view('template/footer'); 
  }
  public function add()
  {
    $result = array('message'=>'');
    if($this->input->post('Submit_data'))
	{
		//Check whether user upload picture
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './uploads/our_treatments/';
                $config['allowed_types'] = '*';
                $config['file_name']     = $_FILES['gallery']['name'];
                $config['encrypt_name']=TRUE;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('gallery')) {
                    $uploadData          = $this->upload->data();
                    $featured_image = $uploadData['file_name'];
                } else {
                    $featured_image = '';
                }
            }
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'images' => $featured_image
		);
		$result['message'] = $this->model->add($data);
	}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('admin/our_treatments/Add',$result);
    $this->load->view('template/footer');
  }
  public function edit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './uploads/our_treatments/';
                $config['allowed_types'] = '*';
                $config['file_name']     = $_FILES['gallery']['name'];
                $config['encrypt_name']=TRUE;
                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                if ($this->upload->do_upload('gallery')) {
                    $uploadData          = $this->upload->data();
                    $featured_image = $uploadData['file_name'];
                } 
            } else {
                $featured_image = $this->input->post('old_featured_image');
            }
			
  		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'images' => $featured_image
  		);
  		$result['message'] = $this->model->edit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."our_treatments");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['our_treatments']=$this->model->ourtreatmentGet($id);
    $this->load->view('admin/our_treatments/Edit',$result);
    $this->load->view('template/footer');
  }
	public function delete($id)
	{
		$id  = $this->model->Get_by_id($id);
		if($id){
			$this->db->query("Delete from tbl_our_treatments where id = '".$id->id."'");
			if(file_exists('uploads/our_treatments/'.$id->images)) 
			{
				unlink('uploads/our_treatments/'.$id->images);
				
			}
			$messge = array('message' => 'Image details deleted successfully','class' => 'alert alert-danger fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."our_treatments");
		}
	}
  
  
  
  
}
?>
