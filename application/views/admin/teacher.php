<?php //print_r($departments)   ?>
<?php if ($department_id == '') { ?>
    <div class="span4 offset3" style="float:none !important;">

        <div class="box">

            <div class="box-header">

                <span class="title"> <i class="icon-info-sign"></i> Please select a department to manage teacher.</span>

            </div>

            <div class="box-content padded tam-custom-border1">

                <center>

                    <select name="department_id" onchange="window.location = '<?php echo base_url(); ?>index.php?admin/teacher/' + this.value">

                        <option value=""><?php echo get_phrase('select_a_department'); ?></option>

                        <?php
                        $departments = $this->db->get('departments')->result_array();

                        foreach ($departments as $row):
                            ?>

                            <option value="<?php echo $row['department_id']; ?>"

                                    <?php if ($department_id == $row['department_id']) echo 'selected'; ?>>

                                <?php echo $row['department_name']; ?></option>

                            <?php
                        endforeach;
                        ?>

                    </select>

                </center>

                <script>

                        $(document).ready(function() {

                            function ask()

                            {

                                Growl.info({title: "Select a department to manage teacher", text: " "});

                            }

                            setTimeout(ask, 500);

                        });

                </script>

            </div>

        </div>

    </div>
<?php } else if ($department_id != '') { ?>
    <div class="box">
        <div class="box-header">

            <!------CONTROL TABS START------->
            <ul class="nav nav-tabs nav-tabs-left">
                <li class="active"> <a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> <?php echo get_phrase('teacher_list'); ?> </a></li>
                <li> <a href="#add" data-toggle="tab"><i class="icon-plus"></i> <?php echo get_phrase('add_teaching_staff'); ?> </a></li>
                <!--<li> <a href="#addnontech" data-toggle="tab"><i class="icon-plus"></i> <?php echo get_phrase('add_non_teaching_staff'); ?> </a></li>-->
                <li <?php if(isset($upload)){ ?>class="active" <?php } ?>>

                    <a href="#upload" data-toggle="tab"><i class="icon-plus"></i>

                        <?php echo get_phrase('upload'); ?>

                    </a></li>
            </ul>
            <!------CONTROL TABS END------->

        </div>
        <div class="box-content padded">


            <div class="tab-content">
                <!----TABLE LISTING STARTS--->
                <div class="tab-pane  active" id="list">
                    <!--<div class="action-nav-normal">
                    <div class="" style="width:300px;margin-left:33%;">
                      <a href="#" title="Users">
                        <img src="<?php //echo base_url();  ?>template/images/icons/teacher.png" /><br>
                        <span>Total <?php //echo count($teachers);  ?> teachers</span>
                      </a>
                    </div>
                </div>-->
                    <center class="custom-tam-cng-sel-block">

                        <span> Change Department </span>

                        <select name="department_id" onchange="window.location = '<?php echo base_url(); ?>index.php?admin/teacher/' + this.value">
                            <option value=""><?php echo get_phrase('select_a_department'); ?></option>
                            <?php
                            $departments = $this->db->get('departments')->result_array();
                            foreach ($departments as $row):
                                ?>
                                <option value="<?php echo $row['department_id']; ?>"
                                        <?php if ($department_id == $row['department_id']) echo 'selected'; ?>>
                                    <?php echo $row['department_name']; ?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>
                    </center>
                    <div class="box">
                        <div class="box-content">
                            <div id="dataTables">
                                <table cellpadding="0" cellspacing="0" border="0" class="responsive" id="teacher_dtable">
                                    <thead>
                                        <tr>
                                            <th><div><?php echo get_phrase('employee_code'); ?></div></th>
                                    <th width="80"><div><?php echo get_phrase('photo'); ?></div></th>
                                    <th><div><?php echo get_phrase('teacher_name'); ?></div></th>
                                    <th><div><?php echo get_phrase('batch'); ?></div></th>
                                    <th><div><?php echo get_phrase('department'); ?></div></th>
                                    <th><div><?php echo get_phrase('official username'); ?></div></th>
                                    <th><div><?php echo get_phrase('options'); ?></div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php $count = 1;
                                        foreach ($teachers as $row):
                                            ?>
                                            <tr>
                                                <td><?php echo $row['employee_code']; ?></td>
                                                <td><div><img src="<?php echo $this->crud_model->get_image_url('teacher', $row['teacher_id']); ?>" class="avatar-medium" /></div></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php
                                                    foreach ($academicyear as $departments_list) {
                                                        if ($row['employee_academicyear_id'] == $departments_list['academic_id']) {
                                                            echo $departments_list['session_name'];
                                                        }
                                                    }
                                                    ?></td>
                                                <td><?php echo $row['dname']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td align="center">
                                                	<div class="custom-tam-table-btns">
                                                    <a  data-toggle="modal" href="javascript:;" class="btn btn-lightblue btn-small custom-tam-indsudsms" data-studentid="<?php echo $row['teacher_id']; ?>" data-stype="mail"><i class="icon-envelope-alt"></i> Mail</a>
                                                    <a data-toggle="modal" href="javascript:;" class="btn btn-green btn-small custom-tam-indsudsms" data-studentid="<?php echo $row['teacher_id']; ?>" data-stype="sms"><i class="icon-mobile-phone"></i> SMS </a>
                                                    <a  data-toggle="modal" href="#modal-form" onclick="modal('teacher_id_card',<?php echo $row['teacher_id']; ?>)" class="btn btn-red btn-small">

                                                        <i class="icon-credit-card"></i> <?php echo get_phrase('id_card'); ?>

                                                    </a>
                                                    </div>
                                                    <div class="custom-tam-table-btns">
                                                    <a data-toggle="modal" href="#modal-form" onclick="modal('teacher_profile',<?php echo $row['teacher_id']; ?>)"
                                                       class="btn btn-gray btn-small">
                                                        <i class="icon-user"></i> <?php echo get_phrase('profile'); ?>
                                                    </a>
                                                    <a data-toggle="modal" href="#modal-form" onclick="modal('edit_teacher',<?php echo $row['teacher_id']; ?>)"	class="btn btn-green btn-small">
                                                        <i class="icon-wrench"></i> <?php echo get_phrase('edit'); ?>
                                                    </a>
                                                    <a data-toggle="modal" href="#modal-delete" onclick="modal_delete('<?php echo base_url(); ?>index.php?admin/teacher/delete/<?php echo $row['teacher_id']; ?>')"
                                                       class="btn btn-red btn-small">
                                                        <i class="icon-trash"></i> <?php echo get_phrase('delete'); ?>
                                                    </a>
                                                    </div>
                                                </td>
                                            </tr>
    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!----TABLE LISTING ENDS--->


                <!----CREATION FORM STARTS---->
                <div class="tab-pane box" id="add" style="padding: 5px">
                    <div class="box-content">
    <?php echo form_open('admin/teacher/create', array('class' => 'form-horizontal validatable', 'target' => '_top', 'enctype' => 'multipart/form-data')); ?>
                        <form method="post" action="<?php echo base_url(); ?>index.php?admin/teacher/create/" class="form-horizontal validatable" enctype="multipart/form-data">
                            <div class="padded">
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('name'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required]" name="firstname" />
                                        <input type="text" class="validate[required]" name="lastname"  />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('employee_code'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required]" name="employee_code" id="emp_code_val" p/>
                                        <span id="val_emp_code_img"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('academin_year'); ?></label>
                                    <div class="controls">
                                        <select class="uniform validate[required]" name="employee_academicyear_id">
                                            <option value="">&nbsp;&nbsp;&nbsp;-- Academic Year --</option>
                                            <?php foreach ($academicyear as $departments_list) { ?>
                                                <option value="<?php echo $departments_list['academic_id'] ?>"><?php echo $departments_list['session_name'] ?></option>
    <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('department'); ?></label>
                                    <div class="controls">
                                        <select class="uniform validate[required]" name="employee_department_id">
                                            <option value="">&nbsp;&nbsp;&nbsp;-- Select Department --</option>
                                            <?php foreach ($departments as $departments_list) { ?>
                                                <option value="<?php echo $departments_list['department_id'] ?>"><?php echo $departments_list['department_name'] ?></option>
    <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('gender'); ?></label>
                                    <div class="controls">
                                        <select name="sex" class="uniform validate[required]" style="width:100%;">
                                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- Select Gender -- &nbsp;&nbsp;&nbsp;&nbsp;</option>
                                            <option value="male"><?php echo get_phrase('male'); ?></option>
                                            <option value="female"><?php echo get_phrase('female'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('birthday'); ?></label>
                                    <div class="controls">
                                        <select name="birth_day" id="birth_day"  style="width:80px;" class="validate[required] uniform">
                                            <option value="">Day</option>
                                            <?php
                                            $strDay = '';
                                            for ($i = 1; $i <= 31; $i++) {
                                                $strDay = (string) $i;
                                                if ($i < 10)
                                                    $strDay = '0' . $strDay;
                                                ?>
                                                <option value="<?php echo $strDay; ?>">
                                                <?php echo $strDay; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <select name="birth_month" id="birth_month"  style="width:100px;" class="validate[required] uniform">
                                            <option value="">Month</option>
                                            <?php

                                            function getMonthList() {
                                                return array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                                                    "Nov", "Dec");
                                            }

                                            $list = getMonthList();
                                            $index = 1;
                                            foreach ($list as &$row_data) {
                                                ?>
                                                <option value="<?php if ($index < 10 ? $index = '0' . $index : $index) ; echo $index ?>">
                                                <?php echo $row_data . " (" . $index . ")"; ?>
                                                </option>
                                                <?php
                                                $index = $index + 1;
                                            }
                                            ?>
                                        </select>

                                        <select name="birth_year" id="birth_year" style="width:80px;" class="validate[required] uniform">
                                            <option value="">Year</option>
                                            <?php
                                            for ($i = 1950; $i <= date('Y'); $i++) {
                                                ?>
                                                <option value="<?php echo $i; ?>">
                                                <?php echo $i; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('religion/cast'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="religion"  />
                                        <input type="text" class="validate[required]" name="cast"  />
                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('official_username'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="email" id="teacher_uname_val" />

                                        <span id="val_uname_img"></span>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('official_password'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="password" />

                                    </div>

                                </div>
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('blood_group'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="blood_group" />

                                    </div>

                                </div>
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('subject'); ?></label>

                                    <div class="controls">

                                        <textarea name="subject" class="validate[required]" rows="6" columns="4" ></textarea>

                                    </div>

                                </div>
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('previous_school_name'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="previous_school_name" />

                                    </div>

                                </div>
                                <!--<div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('address'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="" name="address"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('password'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="" name="password"/>
                                    </div>
                                </div>
                                -->
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('present_address'); ?></label>

                                    <div class="controls">

                                        <textarea name="address" class="validate[required]" rows="6" columns="4" ></textarea>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('permanent_address'); ?></label>

                                    <div class="controls">

                                        <textarea name="permanent_address" class="validate[required]" rows="6" columns="4" ></textarea>

                                    </div>

                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('phone'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required]" name="phone" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('teacher email'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required]" name="teacher_email" id="teacher_email_val"  />
                                        <span id="val_email_img"></span>
                                    </div>
                                </div>
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('father\husband\guardian name'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="father_first_name" />
                                        <input type="text" class="validate[required]" name="father_last_name"  />

                                    </div>

                                </div>
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('father\husband\guardian mobile number'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="father_mobile_number" />

                                    </div>

                                </div>

                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('photo'); ?></label>
                                    <div class="controls" style="width:210px;">
                                        <input type="file" class="" name="userfile" id="imgInp" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"></label>
                                    <div class="controls" style="width:210px;">
                                        <img id="blah" src="<?php echo base_url(); ?>uploads/user.jpg" alt="your image" height="100" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_teacher'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!----CREATION FORM ENDS--->



                <!----CREATION NON Teaching FORM STARTS---->
                <div class="tab-pane box" id="addnontech" style="padding: 5px">
                    <div class="box-content">
    <?php echo form_open('admin/teacher/create', array('class' => 'form-horizontal validatable', 'target' => '_top', 'enctype' => 'multipart/form-data')); ?>
                        <form method="post" action="<?php echo base_url(); ?>index.php?admin/teacher/create/" class="form-horizontal validatable" enctype="multipart/form-data">
                            <div class="padded">
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('name'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required]" name="firstname" />
                                        <input type="text" class="validate[required]" name="lastname"  />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('gender'); ?></label>
                                    <div class="controls">
                                        <select name="sex" class="uniform validate[required]" style="width:100%;">
                                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- Select Gender -- &nbsp;&nbsp;&nbsp;&nbsp;</option>
                                            <option value="male"><?php echo get_phrase('male'); ?></option>
                                            <option value="female"><?php echo get_phrase('female'); ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('birthday'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="datepicker fill-up" name="birthday"/>
                                    </div>
                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('religion/cast'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="religion" />
                                        <input type="text" class="validate[required]" name="cast" />
                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('tam_username'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="email" />

                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('tam_password'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="password" />

                                    </div>

                                </div>
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('blood_group'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="blood_group" />

                                    </div>

                                </div>
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('subject'); ?></label>

                                    <div class="controls">

                                        <textarea name="subject" class="validate[required]" rows="6" columns="4" ></textarea>

                                    </div>

                                </div>
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('previous_school_name'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="previous_school_name" />

                                    </div>

                                </div>
                                <!--<div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('address'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="" name="address"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('password'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="" name="password"/>
                                    </div>
                                </div>
                                -->
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('present_address'); ?></label>

                                    <div class="controls">

                                        <textarea name="address" class="validate[required]" rows="6" columns="4" ></textarea>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('permanent_address'); ?></label>

                                    <div class="controls">

                                        <textarea name="permanent_address" class="validate[required]" rows="6" columns="4"></textarea>

                                    </div>

                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('phone'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required]" name="phone" placeholder="Phone"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('teacher email'); ?></label>
                                    <div class="controls">
                                        <input type="text" class="validate[required]" name="teacher_email" />
                                    </div>
                                </div>
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('father\husband\guardian name'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="father_first_name" />
                                        <input type="text" class="validate[required]" name="father_last_name" />

                                    </div>

                                </div>
                                <div class="control-group">

                                    <label class="control-label"><?php echo get_phrase('father\husband\guardian mobile number'); ?></label>

                                    <div class="controls">

                                        <input type="text" class="validate[required]" name="father_mobile_number"/>

                                    </div>

                                </div>

                                <div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('photo'); ?></label>
                                    <div class="controls" style="width:210px;">
                                        <input type="file" class="" name="userfile" id="imgInp" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"></label>
                                    <div class="controls" style="width:210px;">
                                        <img id="blah" src="<?php echo base_url(); ?>uploads/user.jpg" alt="your image" height="100" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_teacher'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!----CREATION NON Teaching FORM ENDS--->


				<div class="tab-pane <?php if(isset($upload)) { echo 'active'; } ?>" id="upload">
                   <?php echo $error;?>
           <?php echo form_open_multipart('admin/teacher/do_upload/'); ?>
                   <table cellspacing="5" cellpadding="5" width="500" height="230"  style="border:1px solid #eee;margin: 0px auto;
margin-top: 25px;" align="center">
                       <tr style="">
                           <td  >
                              <span style="margin-left:50px;">  Department: </span>
                           </td>
                           <td>


                        <select name="u_department_id"  id="u_department_id" style="margin-right:25px;" required="required">

                             <option value=""><?php echo get_phrase('select_a_department'); ?></option>

                            <?php
                            $departments = $this->db->get('departments')->result_array();

                            foreach ($departments as $row):
                                ?>

                                <option value="<?php echo $row['department_id']; ?>"

                                        <?php if ($department_id == $row['department_id']) echo 'selected'; ?>>

                                    <?php echo $row['department_name']; ?></option>

                                <?php
                            endforeach;
                            ?>

                        </select>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <label style="width:250px; margin-left:50px;">Upload your file: </label>
                           </td>
                            <td>
                                  <input type="file" required="required" style="width:250px;margin-right:25px;" name="excelfile" id="excelfile" >
                            </td>
                       </tr>
                       <tr>
                           <td colspan="2" align="center"> <a href="<?php echo base_url() ?>uploads/employeesample.xls" class="btn btn-green">Download Format</a> &nbsp;<input type="submit" class="btn btn-gray"  name="isupload" value="upload"></td>
                       </tr>
                   </table>
               </form>




               </div>

            </div>
        </div>
    </div>
<?php } ?>
<script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                $('#blah').attr('src', e.target.result);
                            }

                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#imgInp").change(function() {
                        readURL(this);
                    });



                    $('#emp_code_val').on('change', function() {

                        var tcode = $(this).val();

                        $('#val_emp_code_img').append('<img title="<?php echo base_url(); ?>template/images/loading.gif" src="<?php echo base_url(); ?>template/images/loading.gif">');

                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>index.php?admin/tchcodecheck/',
                            data: {chkcode: tcode},
                            success: function(data) {
                                //alert(data);

                                if (data == 'true') {
                                    $("#val_emp_code_img").text('').attr("class", "label label-warning").text("'" + tcode + " ' already register try another !");
                                    $("#emp_code_val").val('').focus();
                                } else {
                                    $("#val_emp_code_img").removeAttr("class").text('').attr("class", "label label-success").text("'" + tcode + "' available !");

                                }

                            }
                        });

                    });

                    $('#teacher_uname_val').on('change', function() {

                        var temail = $(this).val();

                        if (!validateEmail(temail)) {
                            $("#val_uname_img").removeAttr("class").attr("class", "label label-warning").text('').text('Please enter valid email!');
                            $("#teacher_uname_val").val('').focus();
                            return false;
                        }

                        $('#val_uname_img').append('<img title="<?php echo base_url(); ?>template/images/loading.gif" src="<?php echo base_url(); ?>template/images/loading.gif">');

                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>index.php?admin/tchemailcheck/',
                            data: {chkmail: temail},
                            success: function(data) {
                                //alert(data);

                                if (data == 'true') {
                                    $("#val_uname_img").text('').attr("class", "label label-warning").text("'" + temail + " ' already register try another !");
                                    $("#teacher_uname_val").val('').focus();
                                } else {
                                    $("#val_uname_img").removeAttr("class").text('').attr("class", "label label-success").text("'" + temail + "' available !");

                                }

                            }
                        });

                    });

                    $('#teacher_email_val').on('change', function() {

                        var temail = $(this).val();

                        if (!validateEmail(temail)) {
                            $("#val_email_img").removeAttr("class").attr("class", "label label-warning").text('').text('Please enter valid email!');
                            $("#teacher_email_val").val('').focus();
                            return false;
                        }

                        $('#val_email_img').append('<img title="<?php echo base_url(); ?>template/images/loading.gif" src="<?php echo base_url(); ?>template/images/loading.gif">');

                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>index.php?admin/tchtemailcheck/',
                            data: {chkmail: temail},
                            success: function(data) {
                                //alert(data);

                                if (data == 'true') {
                                    $("#val_email_img").text('').attr("class", "label label-warning").text("'" + temail + " ' already register try another !");
                                    $("#teacher_email_val").val('').focus();
                                } else {
                                    $("#val_email_img").removeAttr("class").text('').attr("class", "label label-success").text("'" + temail + "' available !");

                                }

                            }
                        });

                    });




// Function that validates email address through a regular expression.
                    function validateEmail(temail) {
                        var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

                        if (filter.test(temail)) {
                            return true;
                        }
                        else {
                            return false;
                        }
                    }
</script>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php base_url() ?>template/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="<?php base_url() ?>template/css/dataTables.tableTools.css">
<script type="text/javascript" language="javascript" src="<?php base_url() ?>template/js/dataTables.tableTools.js"></script>
<script type="text/javascript" language="javascript" src="<?php base_url() ?>template/js/dataTables.bootstrap.js"></script>
<script>var $j = jQuery.noConflict(true);</script>
<script>
    $(document).ready(function() {
        $j('#teacher_dtable').DataTable({
            dom: 'T<"clear">lfrtip',
            tableTools: {
                "sSwfPath": "<?php base_url() ?>template/swf/copy_csv_xls_pdf.swf",
                "aButtons": [
                    {
                        "sExtends": "copy",
                        "mColumns": [0, 2, 3, 4]
                    },
                    {
                        "sExtends": "csv",
                        "mColumns": [0, 2, 3, 4]
                    },
                    {
                        "sExtends": "pdf",
                        "mColumns": [0, 2, 3, 4]
                    },
                    {
                        "sExtends": "print",
                        "mColumns": [0, 2, 3, 4]
                    },
                ]
            }
        });
    });

    $(function() {
        $('.custom-tam-indsudsms').on('click', function(e) {

            var stype = $(this).data('stype');
            var stndid = $(this).data('studentid');

            if (stype == 'sms') {



                $('#sms-overlay').show();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>index.php?admin/sms_teacher_data',
                    data: {sid: stndid},
                    success: function(data) {


                        $('#custom-tam-model').text('').append(data);

                        $('#sms-overlay').hide();

                    }
                });

            } else if (stype == 'mail') {

                $('#sms-overlay').show();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>index.php?admin/email_teacher_data',
                    data: {sid: stndid},
                    success: function(data) {


                        $('#custom-tam-model').text('').append(data);

                        $('#sms-overlay').hide();

                    }
                });

            }

            e.preventDefault();
            $('#custom-tam-model').modal('show');

        });
        $(document).ready(function() {
            var text_max = 130;
            $('#smessage').html(text_max + ' characters remaining');

            $(document).on('keyup', '#smessage', function() {
                $('#sms-feedback').text('');
                var text_length = $('#smessage').val().length;
                var text_remaining = text_max - text_length;

                $('#smessage_feedback').html(text_remaining + ' characters remaining');
            });
        });

        $(document).on('click', '#sndsmsbtn', function(e) {

            var smsg = $('#smessage').val();

            if (smsg.trim() == '') {
                $('#sms-feedback').text('').append('<div class="alert alert-danger"><strong>Please enter message!</strong> </div>');
                return true;
            }

            $('#sms-overlay').show();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>index.php?admin/sms_teacher_snd',
                data: $('#snd-frm').serialize(),
                success: function(data) {

                    if (data == 'true') {
                        $('#sms-feedback').text('').append('<div class="alert alert-success"><strong>SMS send successfully!</strong> </div>');
                        $('#snd-frm,#sms-overlay').hide();
                        setTimeout('hidemodel()', 3000);
                    } else {

                        $('#sms-feedback').text('').append('<div class="alert alert-danger"><strong>An error while sending sms!</strong> Please try again. </div>');
                        $('#sms-overlay').hide();
                    }


                }
            });

        });

        $(document).on('click', '#sndmailbtn', function(e) {

            var smsg = $('#smmessage').val();

            var ssub = $('#ssub').val();

            if (ssub.trim() == '') {
                $('#sms-feedback').text('').append('<div class="alert alert-danger"><strong>Please enter subject!</strong> </div>');
                $('#ssub').focus();
                return true;
            }
            if (smsg.trim() == '') {
                $('#sms-feedback').text('').append('<div class="alert alert-danger"><strong>Please enter message!</strong> </div>');
                $('#smmessage').focus();
                return true;
            }

            $('#sms-overlay').show();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>index.php?admin/mail_teacher_snd',
                data: $('#snd-frm').serialize(),
                success: function(data) {
                    //alert(data)
                    if (data == 'true') {
                        $('#sms-feedback').text('').append('<div class="alert alert-success"><strong>Mail send successfully!</strong> </div>');
                        $('#snd-frm,#sms-overlay').hide();
                        setTimeout('hidemodel()', 3000);
                    } else {

                        $('#sms-feedback').text('').append('<div class="alert alert-danger"><strong>An error while sending mail!</strong> Please try again. </div>');
                        $('#sms-overlay').hide();
                    }


                }
            });

        });
        function hidemodel() {
            $("#custom-tam-model").modal("hide");
        }

    });
</script>
