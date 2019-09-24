<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
            <link rel="shortcut icon" href="<?php echo base_url(); ?>template/images/favicon.ico" type="image/x-icon" />
            <link rel="icon" href="<?php echo base_url(); ?>template/images/favicon.ico" type="image/x-icon" />
            <?php include 'includes.php'; ?>
            <title><?php echo get_phrase('login'); ?> | <?php echo $system_title; ?></title>
            <style>

                html, body { 
                    background: #465568 !important;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }

                .login-05 {
                    margin: 6em 0 0 0;
                }
                .fifth-login {
                    margin: 0 auto;
                    width: 35%;
                }
                .fifth-login{
                    background: #f6f8f7;
                    text-align: center;

                }
                .fifth-login h2{
                    font-size: 1.2em;
                    color: #646464;
                    font-family: 'PT Sans', sans-serif;
                    padding-top:1em;
                }
                form.five {
                    padding:25px;
                    background-color:#3a4554;
                }
                form.five li,li.blue{
                    list-style: none;
                    width: 100%;
                    background: #97ce68;
                    border:none;
                    -moz-box-shadow: inset 0 4px 8px #95B679;
                    -webkit-box-shadow: inset 0 4px 8px #95B679;
                    box-shadow: inset 0 4px 8px #95B679;

                }
                form.five li.blue{
                    background: #6bcbca;
                    -moz-box-shadow: inset 0 4px 8px #54A6A5;
                    -webkit-box-shadow: inset 0 4px 8px #54A6A5;
                    box-shadow: inset 0 4px 8px #54A6A5;
                    margin-top: 0.8em;

                }
                .fifth-login input[type="text"]:focus, .fifth-login input[type="password"]:focus{
                    box-shadow:none;
                }
                .icon5{
                    height:30px;
                    width:30px;
                    display: block;
                    float: left;
                    margin:5px 0px 0px 1px;
                }
                .user2{
                    background: url(<?php echo base_url(); ?>template/images/icons5.png) no-repeat 6px 9px;

                }
                .lock2{
                    background: url(<?php echo base_url(); ?>template/images/icons5.png) no-repeat 8px -18px;
                }
                .fifth-login input[type="text"],.fifth-login input[type="password"] {
                    width:85%;
                    padding:5px;
                    color:#fff;
                    font-size:18px;
                    outline: none;
                    background: none;
                    border:none;
                    -webkit-appearance: none;
                    font-weight:400;
                    font-family: 'PT Sans', sans-serif;
                }
                .fifth-login select {
                    font-size:18px;
                    font-weight:400;
                    font-family: 'PT Sans', sans-serif;
                    width: 100%;
                    margin-bottom: 0px !important;
                    border-radius: 0 !important;
                    height: 50px;
                    background: #FFF;
                    color: black;
                }
                .submit-five{
                    margin-top:0.8em;
                }
                .fifth-login input[type="submit"]{
                    font-size:20px;
                    font-weight: 600;
                    color: #fff;
                    display: inline-block;
                    padding:12px 0em;
                    width: 100%;
                    font-family: 'PT Sans', sans-serif;
                    cursor: pointer;
                    -webkit-appearance: none;
                    border: none;
                    outline: none;
                    background:#ff6766;
                    -moz-box-shadow: inset 0 4px 8px #D05857;
                    -webkit-box-shadow: inset 0 4px 8px #D05857;
                    box-shadow: inset 0 4px 8px #D05857;


                }
                .fifth-login input[type="submit"]:hover{
                    background: #FD4A49;
                }
                .account_type_box {
                    background: #3a4554;
                    color: white;
                    font-size: 12px;
                }
                .logoimg{
                    //background-color:#323d4b;
                }
            </style>
            <script>
                function check_account_type()
                {
                    return true;
                    /*
                     var account_type = document.getElementById('account_selector').value;
                     if (account_type == "") {
                     Growl.info({title: "Please select an account type first", text: " "})
                     
                     return false;
                     }
                     else
                     return true;
                     */
                }
            </script>

    </head>
    <body>
        <div id="main_body" class="login-05">
            <?php if ($this->session->flashdata('flash_message') != ""): ?>
                <script>
                    $(document).ready(function() {
                        Growl.info({title: "<?php echo $this->session->flashdata('flash_message'); ?>", text: " "})
                    });
                </script>
            <?php endif; ?>
            <div class="fifth-login">
                <div align="center" class="logoimg"><img src="<?php echo base_url(); ?>template/images/logo.png" style="max-height:100px;margin:20px 0px;" /></div>
                <?php echo form_open('login', array('class' => 'separate-sections five', 'onsubmit' => 'return check_account_type()')); ?>
                <li>
                    <!--
                    <select id="account_selector" class="validate[required]" name="login_type" style="width:100%;margin-bottom:0px !important;border-radius: 0 !important;" tabindex="1">
                        <option value=""><?php echo get_phrase('account_type'); ?></option>
                        <option value="admin"><?php echo get_phrase('admin'); ?></option>
                        <option value="principal"><?php echo get_phrase('principal'); ?></option>
                        <option value="office"><?php echo get_phrase('office'); ?></option>
                        <option value="teacher"><?php echo get_phrase('teacher'); ?></option>
                        <option value="student"><?php echo get_phrase('student'); ?></option>
                        <option value="parent"><?php echo get_phrase('parent'); ?></option>
                        <option value="accountant"><?php echo get_phrase('accountant'); ?></option>
                    </select>
                    -->
                    <div class="form-group has-feedback has-feedback-no-label account_type_box">
                        <input value="admin" name="login_type" checked="checked" type="radio" />&nbsp;Admin&nbsp;&nbsp;
                        <input value="principal" name="login_type" type="radio" />&nbsp;Principal&nbsp;&nbsp;
                        <input value="office" name="login_type" type="radio" />&nbsp;Office&nbsp;&nbsp;
                        <input value="teacher" name="login_type" type="radio" />&nbsp;Teacher&nbsp;&nbsp;
                        <input value="parent" name="login_type" type="radio" />&nbsp;Parent&nbsp;&nbsp;
                         <input value="student" name="login_type" type="radio" />&nbsp;Student&nbsp;&nbsp;
                          
                    </div>
                </li>
                <li>
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
                    <input style="display:none" type="text" name="fakeusernameremembered"/>
                    <input style="display:none" type="password" name="fakepasswordremembered"/>
                    <input autocomplete="off" name="email" type="text" onblur="if (this.value == '') {
                                this.value = 'EMAIL';
                            }" onfocus="this.value = '';" value="EMAIL" class="text" tabindex="2"><a class=" icon5 user2" href="#"></a>
                </li>
                <li class="blue">
                    <input name="password" type="password" onblur="if (this.value == '') {
                                this.value = 'PASSWORD';
                            }" onfocus="this.value = '';" value="PASSWORD" tabindex="3"><a class=" icon5 lock2" href="#"></a>
                </li>
                <div><a  data-toggle="modal" href="#modal-simple"  class="btn btn-blue btn-block" style="background: none repeat scroll 0% 0% transparent; color: black; border: medium none; box-shadow: none; color:#fff;" >
                        <?php echo get_phrase('forgot_password ?'); ?> 
                    </a></div>
                <div class="submit-five">
                    <input type="submit" value="LOG IN" tabindex="4"> 
                </div>
                </form>
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

    </body>
</html>