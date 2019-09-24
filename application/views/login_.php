<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <!-- Viewport Metatag -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <!-- Required Stylesheets -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/stylesheet.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/style.login.css" media="screen">
        
		<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800">-->
        
        <!--[if lt IE 9]>
        <script src="<?php echo base_url();?>template/js/html5shiv.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>template/js/excanvas.js" type="text/javascript"></script>
        <![endif]-->
        <?php
		//////////LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS/////////
		
		$system_name	=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
		$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/login.min.css" media="screen">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/mws-theme.css" media="screen">

        <title><?php echo get_phrase('login'); ?> | <?php echo $system_title; ?></title>
        <style>
            li {
                list-style: none;
            }
            ul {
                margin: 3px 0 0 0 !important;
            }
        </style>
    </head>

    <body>

        <div id="mws-login-wrapper">
            <?php if ($this->session->flashdata('flash_message') != ""): ?>
                <script>
                    $(document).ready(function() {
                        Growl.info({title: "<?php echo $this->session->flashdata('flash_message'); ?>", text: " "})
                    });
                    function check_account_type()
                    {
                        var account_type = document.getElementById('account_selector').value;
                        if (account_type == "") {
                            Growl.info({title: "Please select an account type first", text: " "})

                            return false;
                        }
                        else
                            return true;
                    }
                    ;
                    $(document).ready(function() {
                        $("#account_selector").change(function() {

                            //squeezee in
                            function rotate_in()
                            {
                                $('#avatar').toggleClass('flip_in');
                            }
                            setTimeout(rotate_in, 0);

                            //change img src
                            function set_img()
                            {
                                var img = document.getElementById('account_selector').value;
                                if (img == "")
                                    img = 'account';
                                $("#account_img").attr("src", "<?php echo base_url(); ?>template/images/icons_big/" + img + ".png");
                            }
                            setTimeout(set_img, 200);

                            //expand out
                            function rotate_out()
                            {
                                $('#avatar').toggleClass('flip_out');
                            }
                            setTimeout(rotate_out, 200);

                            //clear css
                            function reset_class()
                            {
                                $("#avatar").attr("class", "avatar");
                            }
                            setTimeout(reset_class, 500);
                        });
                    });
                </script>
<?php endif; ?>
            <div id="mws-login">
                <h1>Login</h1>
                <div class="mws-login-lock"><i class="icon-lock"></i></div>
                <div id="mws-login-form">
<?php echo form_open('login', array('class' => 'separate-sections', 'onsubmit' => 'return check_account_type()')); ?>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="email" class="mws-login-username required" placeholder="<?php echo get_phrase('email');?>">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-password required" placeholder="<?php echo get_phrase('password');?>">
                        </div>
                    </div>
                    <div id="mws-login-remember" class="mws-form-row mws-inset">
                        <ul class="mws-form-list inline">
                            <li>
                                <input id="remember" type="checkbox"> 
                                <label for="remember">Remember me</label>
                            </li>
                        </ul>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="Login" class="btn btn-success mws-login-button">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-----------password reset form ------>
        <div id="modal-simple" class="modal hide fade" style="top:30%;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h6 id="modal-tablesLabel"><?php echo get_phrase('reset_password');?></h6>
          </div>
          <div class="modal-body" style="padding:20px;">
            <?php echo form_open('login/reset_password');?>
            	<select class="validate[required]" name="account_type"  style="margin-bottom: 0px !important;">
                    <option value=""><?php echo get_phrase('account_type');?></option>
                    <option value="admin"><?php echo get_phrase('admin');?></option>
                    <option value="teacher"><?php echo get_phrase('teacher');?></option>
                    <option value="student"><?php echo get_phrase('student');?></option>
                    <option value="parent"><?php echo get_phrase('parent');?></option>
                </select>
                <input type="email" name="email"  placeholder="<?php echo get_phrase('email');?>"  style="margin-bottom: 0px !important;"/>
                <input type="submit" value="<?php echo get_phrase('reset');?>"  class="btn btn-blue btn-medium"/>
            <?php echo form_close();?>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
    </body>
</html>
