<?php
class Settings extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('SettingModel', 'model');
		$this->load->helper('url');
		$this->load->library('session');
	}
	function index()
	{
		$data['getData']=$this->model->getData();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/settings/list',$data);
		$this->load->view('template/footer');
	}
  
	public function update($id)
	{
		$result = array('message'=>'');
		if($this->input->post('submit_settings_data'))
		{  
			if(!empty($_FILES['setting_logo']['name'])){
				$config['upload_path'] = './uploads/settings/logo/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = $_FILES['setting_logo']['name']; 
				//Load upload library and initialize configuration
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('setting_logo')){
					$uploadData = $this->upload->data();
					$edit_logo = $uploadData['file_name'];
				}else{
					$edit_logo = '';
				}
			}
			else{
				$edit_logo = $this->input->post('get_logo_name');
			}
			
			if(!empty($_FILES['setting_favicon']['name'])){
				$config2['upload_path'] = './uploads/settings/favicon/';
				$config2['allowed_types'] = 'jpg|jpeg|png|gif';
				$config2['file_name'] = $_FILES['setting_favicon']['name']; 
				//Load upload library and initialize configuration
				$this->load->library('upload',$config2);
				$this->upload->initialize($config2);
				
				if($this->upload->do_upload('setting_favicon')){
					$uploadData2 = $this->upload->data();
					$edit_favicon = $uploadData2['file_name'];
				}else{
					$edit_favicon = '';
				}
			}
			else{
				$edit_favicon = $this->input->post('get_favicon_name');
			}
			
			$data = array(
				'logo' => $edit_logo,
				'favicon' => $edit_favicon,
				'email_one' => $this->input->post('setting_emailone'),
				'email_two' => "",
				'contact_one' => $this->input->post('setting_contactnoone'),
				'contact_two' => "",
				'address_one' => $this->input->post('setting_addressone'),
				'address_two' => $this->input->post('setting_addresstwo'),
				'country' => $this->input->post('setting_country'),
				'state' => $this->input->post('setting_state'),
				'city' => $this->input->post('setting_city'),
				'zipcode' => $this->input->post('setting_zipcode'),
				'social_facebook' => $this->input->post('setting_facebook'),
				'social_linkedin' => $this->input->post('setting_linkedin'),
				'social_twitter' => $this->input->post('setting_twitter'),
				'social_instagram' => $this->input->post('setting_instagram'),
				'opening_days' => $this->input->post('setting_days'),
				'opening_times' => $this->input->post('setting_times')
				
			);
			$result['message'] = $this->model->update($data, $id);
			if($result['message'] == 'SUCCESS')
			{
			$messge = array('message' => 'Settings details updated successfully','class' => 'alert alert-success fade in');
			$this->session->set_flashdata('notification', $messge);
			$base_url=base_url();
			redirect("$base_url"."settings");
			}
		}
	}
}
?>
