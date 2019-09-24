<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }
	
	

	function account_opening_email($account_type = '' , $email = '')
	{
		$system_name	=	$this->db->get_where('settings' , array('type' => 'system_name'))->row()->description;
		
		/*$email_msg		=	"Welcome to ".$system_name."<br />";
		$email_msg		.=	"Your account type : ".$account_type."<br />";
		$email_msg		.=	"Your login password : ".$this->db->get_where($account_type , array('email' => $email))->row()->password."<br />";
		$email_msg		.=	"Login Here : ".base_url()."<br />";*/
		
		$actdata['system_name'] = $system_name;
		$actdata['account_email'] = $email;
		$actdata['account_pwd'] = $this->db->get_where($account_type , array('email' => $email))->row()->password;
		
		$actdata['account_type'] = $account_type;
		$actdata['phone'] = $system_name	=	$this->db->get_where('settings' , array('type' => 'phone'))->row()->description;
		$actdata['address'] = $system_name	=	$this->db->get_where('settings' , array('type' => 'address'))->row()->description;
		$actdata['system_email'] = $system_name	=	$this->db->get_where('settings' , array('type' => 'system_email'))->row()->description;
		
		$email_msg      .=$this->load->view('acountmail', $actdata, true);
		
		
		
		$email_sub		=	"Account opening email";
		$email_to		=	$email;
		
		$this->do_email($email_msg , $email_sub , $email_to);
		
		if($account_type=='student'){
			
		$actdata['system_name'] = $system_name;
		$actdata['account_email'] = $this->db->get_where($account_type , array('email' => $email))->row()->parent_email;
		$actdata['account_pwd'] = $this->db->get_where($account_type , array('email' => $email))->row()->parent_password;
		
		$actdata['account_type'] = $account_type;
		$actdata['phone'] = $system_name	=	$this->db->get_where('settings' , array('type' => 'phone'))->row()->description;
		$actdata['address'] = $system_name	=	$this->db->get_where('settings' , array('type' => 'address'))->row()->description;
		$actdata['system_email'] = $system_name	=	$this->db->get_where('settings' , array('type' => 'system_email'))->row()->description;
		
		$email_msg      .=$this->load->view('acountmail', $actdata, true);
		
		
			
		$email_sub		=	"Account opening email";
		$email_to		=	$pemail_to;
		
		$this->do_email($email_msg , $email_sub , $email_to);
			
		}
	}
	
	
	function account_opening_email_parent($email = '')
	{
		$account_type='student';
		
		$actdata['system_name'] = $system_name;
		$actdata['account_email'] = $this->db->get_where($account_type , array('parent_email' => $email))->row()->parent_email;
		$actdata['account_pwd'] = $this->db->get_where($account_type , array('parent_email' => $email))->row()->parent_password;
		
		$actdata['account_type'] = $account_type;
		$actdata['phone'] = $system_name	=	$this->db->get_where('settings' , array('type' => 'phone'))->row()->description;
		$actdata['address'] = $system_name	=	$this->db->get_where('settings' , array('type' => 'address'))->row()->description;
		$actdata['system_email'] = $system_name	=	$this->db->get_where('settings' , array('type' => 'system_email'))->row()->description;
		
		$email_msg      .=$this->load->view('acountmail', $actdata, true);
		
		
			
		$email_sub		=	"Account opening email";
		$email_to		=	$actdata['account_email'];
		
		$this->do_email($email_msg , $email_sub , $email_to);
		
		
	}
	
	 function send_email($account_type = '' , $to = '',$subject = '',$body =''){
            if(!empty($to)){
                $email_msg		=	"<br />";
		$email_msg		.=	"Your account type : ".$account_type."<br />";
		$email_msg		.=	$body."<br />";
		
		$email_sub		=	$subject;
		$email_to		=	$to;
		//log_message('debug',$email_msg . $email_sub . $email_to);
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
		
		/*$config = array();
        $config['useragent']	= "CodeIgniter";
        $config['mailpath']		= "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']		= "smtp";
        $config['smtp_host']	= "smtp.gmail.com";
        $config['smtp_port']	= "587";
		$config['smtp_user']	= "basukiitsolutionspvtltd@gmail.com";
        $config['smtp_pass']	= "Bits_123";
        $config['mailtype']		= 'html';
        $config['charset']		= 'utf-8';
        $config['newline']		= "\r\n";
        $config['wordwrap']		= TRUE;

        $this->load->library('email');

        $this->email->initialize($config);*/

		$system_name	=	$this->db->get_where('settings' , array('type' => 'system_name'))->row()->description;
		if($from == NULL)
	    $from		=	$this->db->get_where('settings' , array('type' => 'system_email'))->row()->description;
		
		$this->load->library('smtp_ultimate');
		$this->mailConfig=$this->smtp_ultimate->config();
		$this->mailConfig->setFrom($from, $system_name);
		$tos=explode(',',$to);
		foreach($tos as $t)
			$this->mailConfig->addAddress($t);//$this->to_email
		$this->mailConfig->isHTML(true);   
		$this->mailConfig->Subject = $sub;
		$this->mailConfig->Body=$msg."<br /><br /><br /><br /><br /><br /><br /><hr /><center></a></center>";
		$this->mailConfig->AltBody = 'Alternate body';
		$this->mailConfig->send();
		//echo $this->email->print_debugger();
		//exit;
	}
}

