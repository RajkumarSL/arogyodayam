<?php
class Admin_testimonials extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('TestimonialsModel', 'model');
    $this->load->helper('url');
	$this->load->library('session');
	$this->load->helper('common_helper');
	$this->load->library('Compress');  // load the codeginiter library
	/* if ($this->session->userdata('user_type') != 'ADMIN')
	{
        redirect('login');
	} */
  }
	
  function index()
  {
	  $data = array('message'=>'');
	  $data['testimonialsList']=$this->model->dataList();
      $this->load->view('template/header');
      $this->load->view('template/sidebar');
      $this->load->view('admin/testimonials/List', $data);
      $this->load->view('template/footer'); 
  }
  public function add()
  {
    $result = array('message'=>'');
    if($this->input->post('Submit_data'))
	{
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'author' => $this->input->post('author')
		);
		$result['message'] = $this->model->add($data);
	}
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('admin/testimonials/Add',$result);
    $this->load->view('template/footer');
  }
  public function edit($id)
  {
    $result = array('message'=>'');
    if($this->input->post('Update_data'))
    {
  		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'author' => $this->input->post('author')
  		);
  		$result['message'] = $this->model->edit($data,$id);
      if($result['message'] == 'SUCCESS')
      {
		$messge = array('message' => 'Data updated successfully','class' => 'alert alert-success fade in');
		$this->session->set_flashdata('notification', $messge);
        $base_url=base_url();
        redirect("$base_url"."admin_testimonials");
      }
    }
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $result['testimonials']=$this->model->testimonialsGet($id);
    $this->load->view('admin/testimonials/Edit',$result);
    $this->load->view('template/footer');
  }
	public function delete($id)
	{
		$id  = $this->model->Get_by_id($id);
		if($id){
			$this->db->query("Delete from tbl_testimonials where id = '".$id->id."'");
			$messge = array('message' => 'Image details deleted successfully','class' => 'alert alert-danger fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."admin_testimonials");
		}
	}
  
  
  
  
}
?>
