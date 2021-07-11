<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	    //$this->load->model('Front_model', 'model');
	    $this->load->helper('url');
		$this->load->library('session');
	}

	public function contactus()
	{
		if($this->input->post('submit_mail'))
		{
			$this->load->library('email');
			$subject = 'Contact Mail ';
				//$message = '<p>Hi.</p>';

				// Get full html:
					$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
						<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
						<title>' . html_escape($subject) . '</title>
						<style type="text/css">
							body {
								font-family: Arial, Verdana, Helvetica, sans-serif;
								font-size: 16px;
							}
						</style>
					</head>
					<body>
						
							Hello there,
							<br>
								Thank you for Contact Us.
								<br>
								<table border="10">
									<tr>
										<td>Name : </td>
										<td>'.$this->input->post('name').' </td>
									</tr>
									<tr>
										<td>Email: </td>
										<td>'.$this->input->post('email').' </td>
									</tr>
									<tr>
										<td>Phone Number: </td>
										<td>'.$this->input->post('phoneno').' </td>
									</tr>
									<tr>
										<td>Enquiry: </td>
										<td>'.$this->input->post('message').' </td>
									</tr>
									
								</table>
							<br>
		
					</body>
					</html>';

				
				$result = $this->email
						->from('info@arogyodayamayurveda.com')
						->reply_to('info@arogyodayamayurveda.com')    // Optional, an account where a human being reads.
						//->to('rajkumarsl2016@gmail.com')
						->to('arogyodayamayurveda@gmail.com ')
						->subject($subject)
						->message($body)
						->send();
			if($result)
			{
				$messge = array('message' => 'Message successfully sent','class' => 'alert alert-success fade in');
				$this->session->set_flashdata('item', $messge);
				$base_url=base_url();
				redirect("$base_url"."contactus");
			}
			else
			{
				echo $this->email->print_debugger();
			}
		}
	}
}
