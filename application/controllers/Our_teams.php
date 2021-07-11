<?php
class Our_teams extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('OurteamModel', 'model');
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
	  $data['ourteamList']=$this->model->ourteamList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('admin/our_teams/List', $data);
      $this->load->view('template/footer'); 
  }
  public function add()
  {
    $result = array('message'=>'');
    if($this->input->post('Submit_data'))
	{
		//Check whether user upload picture
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './uploads/our_teams/';
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
			'position' => $this->input->post('position'),
			'description' => $this->input->post('description'),
			'images' => $featured_image
		);
		$result['message'] = $this->model->add($data);
	}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('admin/our_teams/Add',$result);
    $this->load->view('template/footer');
  }
  public function edit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
		if (!empty($_FILES['gallery']['name'])) {
                $config['upload_path']   = './uploads/our_teams/';
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
			'position' => $this->input->post('position'),
			'description' => $this->input->post('description'),
			'images' => $featured_image
  		);
  		$result['message'] = $this->model->edit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."our_teams");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['our_teams']=$this->model->ourteamGet($id);
    $this->load->view('admin/our_teams/Edit',$result);
    $this->load->view('template/footer');
  }
	public function delete($id)
	{
		$id  = $this->model->Get_by_id($id);
		if($id){
			$this->db->query("Delete from tbl_our_teams where id = '".$id->id."'");
			if(file_exists('uploads/our_teams/'.$id->images)) 
			{
				unlink('uploads/our_teams/'.$id->images);
				
			}
			$messge = array('message' => 'Image details deleted successfully','class' => 'alert alert-danger fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."our_teams");
		}
	}
  
  
  
  
}
?>
