<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }

	function account_opening_email($account_type = '' , $email = '')
	{
		$system_name	=	$this->db->get_where('settings' , array('type' => 'system_name'))->row()->description;
		
		$email_msg		=	"Welcome to ".$system_name."<br />";
		$email_msg		.=	"Your account type : ".$account_type."<br />";
		$email_msg		.=	"Your login password : ".$this->db->get_where($account_type , array('email' => $email))->row()->password."<br />";
		$email_msg		.=	"Login Here : ".base_url()."<br />";
		
		$email_sub		=	"Account opening email";
		$email_to		=	$email;
		
		$this->do_email($email_msg , $email_sub , $email_to);
		
		if($account_type=='student'){
			
			$pemail_msg		=	"Welcome to ".$system_name."<br />";
			$pemail_msg		.=	"Your account type : Parent<br />";
			$pemail_msg		.=	"Your login username : ".$this->db->get_where($account_type , array('email' => $email))->row()->parent_email."<br />";
			$pemail_msg		.=	"Your login password : ".$this->db->get_where($account_type , array('email' => $email))->row()->parent_password."<br />";
			$pemail_msg		.=	"Login Here : ".base_url()."<br />";
			
			$pemail_sub		=	"Account opening email";
			$pemail_to		=	$this->db->get_where($account_type , array('email' => $email))->row()->parent_email;
			
			$this->do_email($pemail_msg , $pemail_sub , $pemail_to);
			
		}
	}
	
	
	function account_opening_email_parent($email = '')
	{
		$system_name	=	$this->db->get_where('settings' , array('type' => 'system_name'))->row()->description;
		
		$email_msg		=	"Welcome to ".$system_name."<br />";
		$email_msg		.=	"Your account type : Parent<br />";
		
		$email_msg		.=	"Your login password : ".$this->db->get_where('student', array('parent_email' => $email))->row()->parent_password."<br />";
		$email_msg		.=	"Login Here : ".base_url()."<br />";
		
		$email_sub		=	"Account opening email";
		$email_to		=	$email;
		
		$this->do_email($email_msg , $email_sub , $email_to);
		
		
	}
	
	 function send_email($account_type = '' , $to = '',$subject = '',$body =''){
            if(!empty($to)){
                $email_msg		=	"<br />";
		$email_msg		.=	"Your account type : ".$account_type."<br />";
		$email_msg		.=	$body."<br />";
		
		$email_sub		=	$subject;
		$email_to		=	$to;
		
		$this->do_email($email_msg , $email_sub , $email_to);
            }
            else{
                return false;
            }
        }
	
	function password_reset_email($account_type = '' , $email = '')
	{
		if($account_type == 'parent'){
			$query			=	$this->db->get_where('student' , array('parent_email' => $email));
			$account_type = 'parent';
		}
		else{
			$query			=	$this->db->get_where($account_type , array('email' => $email));
		}
		if($query->num_rows() > 0)
		{
			if($account_type == 'parent'){
				$password	=	$query->row()->parent_password;
			}else{
			    $password	=	$query->row()->password;
			}
			$email_msg	=	"Your account type is : ".$account_type."<br />";
			$email_msg	.=	"Your password is : ".$password."<br />";
			
			$email_sub	=	"Password reset request";
			$email_to	=	$email;
			$this->do_email($email_msg , $email_sub , $email_to);
			return true;
		}
		else
		{	
			return false;
		}
	}
	
	/***custom email sender****/
	function do_email($msg=NULL, $sub=NULL, $to=NULL, $from=NULL)
	{
		
		$config = array();
        $config['useragent']	= "CodeIgniter";
        $config['mailpath']		= "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']		= "smtp";
        $config['smtp_host']	= "cloud1.labelhosting.com";
        $config['smtp_port']	= "25";
		$config['smtp_user']	= "info@tammanager.com";
        $config['smtp_pass']	= "info@tam123";
        $config['mailtype']		= 'html';
        $config['charset']		= 'utf-8';
        $config['newline']		= "\r\n";
        $config['wordwrap']		= TRUE;

        $this->load->library('email');

        $this->email->initialize($config);

		$system_name	=	$this->db->get_where('settings' , array('type' => 'system_name'))->row()->description;
		if($from == NULL)
	    $from		=	$this->db->get_where('settings' , array('type' => 'system_email'))->row()->description;
		
		//$this->email->from($from, $system_name);
		$this->email->from($from, $system_name);
		$this->email->to($to);
		$this->email->subject($sub);
		
		$msg	=	$msg."<br /><br /><br /><br /><br /><br /><br /><hr /><center></a></center>";
		$this->email->message($msg);
		
		$this->email->send();
		
		//echo $this->email->print_debugger();
		//exit;
	}
}

