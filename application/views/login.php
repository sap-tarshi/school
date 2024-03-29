<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
                <link rel="shortcut icon" href="<?php echo base_url(); ?>template/images/favicon.ico" type="image/x-icon">
                    <link rel="icon" href="<?php echo base_url(); ?>template/images/favicon.ico" type="image/x-icon">
                        <?php include 'includes.php'; ?>
                        <title><?php echo get_phrase('login'); ?> | <?php echo $system_title; ?></title>
                        <style>
                            @media (min-width: 1200px) {

                                #main_body{
                                    min-height:680px;
                                }
                                #custom-company-bottom{
                                    background: #2e363f !important;
                                    position:fixed;
                                    bottom: 0;
                                    margin:0 auto;
                                    left:0;
                                    right:0;
                                    padding:10px 0;
                                    -webkit-box-shadow: 0px -3px 5px 0px rgba(0,0,0,0.75);
                                    -moz-box-shadow: 0px -3px 5px 0px rgba(0,0,0,0.75);
                                    box-shadow: 0px -3px 5px 0px rgba(0,0,0,0.75);
                                    color:#fff !important;
                                }


                            }
                        </style>
                        </head>
                        <body>
                            <div id="main_body" style="background: #2e363f;">
                                <?php if ($this->session->flashdata('flash_message') != ""): ?>
                                    <script>
                                        $(document).ready(function() {
                                            Growl.info({title: "<?php echo $this->session->flashdata('flash_message'); ?>", text: " "})
                                        });
                                    </script>
                                <?php endif; ?>
                                <!--<div class="navbar navbar-top navbar-inverse">
                                    <div class="navbar-inner">
                                        <div class="container-fluid">
                                            
                                            <a class="brand" href="<?php echo base_url(); ?>">
                                <?php echo $system_name; ?>
                                            </a>
                                            
                                            <ul class="nav pull-right">
                                                <li class="dropdown">
                                                
                                               
                                                    <ul class="dropdown-menu">
                                <?php
                                $fields = $this->db->list_fields('language');
                                foreach ($fields as $field) {
                                    if ($field == 'phrase_id' || $field == 'phrase')
                                        continue;
                                    ?>
                                                                        <li>
                                                                            
                                    <?php echo $field; ?>
                                    <?php
                                    //selecting current language
                                    if ($this->session->userdata('current_language') == $field):
                                        ?>
                                                                                                <i class="icon-ok"></i>
    <?php endif; ?>
                                                                            </a>
                                                                        </li>
                                    <?php
                                }
                                ?>
                                                    </ul>
                                                
                                                </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>-->
                                <div class="container">
                                    <div class="span6 offset3">
                                        <div class="padded" style="margin-top:35px;">

                                            <div class="login box" style="background-color:transparent; margin-top: 10px;">
                                                <!--<div class="box-header">
                                                    <span class="title"><?php echo get_phrase('login'); ?></span>
                                                </div>-->
                                                <div class="box-content padded">
                                                    <script>
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
                                                    </script>
<?php echo form_open('login', array('class' => 'separate-sections', 'onsubmit' => 'return check_account_type()')); ?>
                                                            <!--<center>
                                                                <div style="height:100px;">
                                                                    <div id="avatar" class="avatar">
                                                                        <img src="<?php echo base_url(); ?>template/images/icons_big/account.png" class="avatar-big"  id="account_img" style=""/>
                                                                    </div>
                                                                </div>
                                                                
                                                                         style="display:none;"/>
                                                            </center>-->

                                                    <center style="margin-bottom:15px; background-color:#fff;">
                                                        <!--<img src="<?php echo base_url(); ?>uploads/logo.png" style="max-height:100px;margin:20px 0px;" />-->
                                                        <img src="http://tammanager.com/images/logos.png" style="max-height:100px;margin:20px 0px;" />
                                                    </center>

                                                    <div class="">
                                                        <select id="account_selector" class="validate[required]" name="login_type" style="width:100%;margin-bottom:0px !important;border-radius: 0 !important;" >
                                                            <option value=""><?php echo get_phrase('account_type'); ?></option>
                                                            <option value="admin"><?php echo get_phrase('admin'); ?></option>
                                                            <option value="principal"><?php echo get_phrase('principal'); ?></option>
                                                            <option value="office"><?php echo get_phrase('office'); ?></option>
                                                            <option value="teacher"><?php echo get_phrase('teacher'); ?></option>
                                                            <option value="student"><?php echo get_phrase('student'); ?></option>
                                                            <option value="parent"><?php echo get_phrase('parent'); ?></option>
                                                            <option value="accountant"><?php echo get_phrase('accountant'); ?></option>
                                                        </select>
                                                        
                                                    </div>
                                                    <style>
                                                        .flip_in{
                                                            opacity:0;
                                                            -moz-transform:rotateY(-90deg);
                                                            -webkit-transform:rotateY(-90deg);
                                                            transform:rotateY(-90deg);
                                                            transition:.2s;
                                                        }
                                                        .flip_out{
                                                            opacity:1;
                                                            -moz-transform:rotateY(0deg);
                                                            -webkit-transform:rotateY(0deg);
                                                            transform:rotateY(0deg);
                                                            transition:.2s;
                                                        }


                                                        .input-prepend .add-on:first-child, .input-prepend .btn:first-child,.custom-border-radius-none{
                                                            border-radius: 0 !important;
                                                        }

                                                    </style>

                                                    <script>
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




                                                    <div class="input-prepend">
                                                        <span class="add-on" href="#" style="background-color:#28b779;">
                                                            <i class="icon-envelope" style="color:#fff;"></i>
                                                        </span>
                                                        <input name="email" type="text" placeholder="<?php echo get_phrase('email'); ?>" autocomplete="off" class="custom-border-radius-none">
                                                    </div>
                                                    <div class="input-prepend">
                                                        <span class="add-on" href="#" style="background-color:#ffb848;">
                                                            <i class="icon-key" style="color:#fff;"></i>
                                                        </span>
                                                        <input name="password" type="password" placeholder="<?php echo get_phrase('password'); ?>" autocomplete="off" class="custom-border-radius-none">
                                                    </div>
                                                    <div class="row-fluid">
                                                        <div class="span6">
                                                            <a  data-toggle="modal" href="#modal-simple"  class="btn btn-blue btn-block" style="background-color:#28b779;" >
<?php echo get_phrase('forgot_password ?'); ?> 
                                                            </a>
                                                        </div>
                                                        <div class="span6">
                                                            <input type="submit" class="btn btn-gray btn-block "  value="<?php echo get_phrase('login'); ?>" style="background-color:#5bb75b;"/>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- <hr />-->
                                            <div id="custom-company-bottom" style="color:#a5a5a5;">

                                                <center>&copy; 2013, N-gurukul
                                                </center>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-----------password reset form ------>
                            <div id="modal-simple" class="modal hide fade" style="top:30%;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h6 id="modal-tablesLabel"><?php echo get_phrase('reset_password'); ?></h6>
                                </div>
                                <div class="modal-body" style="padding:20px;">
<?php echo form_open('login/reset_password'); ?>
                                    <select class="validate[required]" name="account_type"  style="margin-bottom: 0px !important;">
                                        <option value=""><?php echo get_phrase('account_type'); ?></option>
                                        <option value="admin"><?php echo get_phrase('admin'); ?></option>
                                        <option value="teacher"><?php echo get_phrase('teacher'); ?></option>
                                        <option value="student"><?php echo get_phrase('student'); ?></option>
                                        <option value="parent"><?php echo get_phrase('parent'); ?></option>
                                    </select>
                                    <input type="email" name="email"  placeholder="<?php echo get_phrase('email'); ?>"  style="margin-bottom: 0px !important;"/>
                                    <input type="submit" value="<?php echo get_phrase('reset'); ?>"  class="btn btn-blue btn-medium"/>
<?php echo form_close(); ?>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-----------password reset form ------>


                        </body>
                        </html>