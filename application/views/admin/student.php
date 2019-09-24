<?php if ($class_id != ""): ?>



    <div class="box">

        <div class="box-header">

		<?php echo $this->session->userdata('academic_year'); ?>

            <!------CONTROL TABS START------->

            <ul class="nav nav-tabs nav-tabs-left">

                <li <?php if(!isset($upload)){ ?> class="active" <?php } ?>>

                    <a href="#list" data-toggle="tab"><i class="icon-align-justify"></i>

                        <?php echo get_phrase('student_list'); ?>

                    </a></li>

                <li>

                    <a href="#add" data-toggle="tab"><i class="icon-plus"></i>

                        <?php echo get_phrase('add_student'); ?>

                    </a></li>
                <li <?php if(isset($upload)){ ?>class="active" <?php } ?>>

                    <a href="#upload" data-toggle="tab"><i class="icon-plus"></i>

                        <?php echo get_phrase('upload'); ?>

                    </a></li>

            </ul>

            <?php echo $hello; ?>

            <!------CONTROL TABS END------->



        </div>

        <div class="box-content">

            <div class="tab-content">







                <!----TABLE LISTING STARTS--->


               <div class="tab-pane <?php if(isset($upload)) { echo 'active'; } ?>" id="upload">
                   <?php echo $error;?>
           <?php echo form_open_multipart('admin/student/do_upload/'); ?>
                   <table cellspacing="5" cellpadding="5" width="500" height="230"  style="border:1px solid #eee;margin: 0px auto;
margin-top: 25px;" align="center">
                       <tr style="">
                           <td  >
                              <span style="margin-left:50px;"> Change Class: </span>
                           </td>
                           <td>


                        <select name="class_id"  style="margin-right:25px;" required="required">

                            <option value=""><?php echo get_phrase('select_a_class'); ?></option>

                            <?php
                            $classes = $this->db->get('class')->result_array();

                            foreach ($classes as $row):
                                ?>

                                <option value="<?php echo $row['class_id']; ?>"

        <?php if ($class_id == $row['class_id']) echo 'selected'; ?>>

                                   <?php echo $row['name'].'-'.$row['name_numeric']; ?></option>

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
                           <td colspan="2" align="center"> <a href="<?php echo base_url() ?>uploads/examplestudentdata.xls"><button class="btn btn-green btn-small"  type="button" style="margin-right:25px;height:35px;">Download Format</button></a><input type="submit" class="btn btn-green btn-small"  name="isupload" value="upload" style="width:100px; height:35px;"></td>
                       </tr>
                   </table>
               </form>




               </div>

                <div class="tab-pane <?php if(!isset($upload)) { echo 'active' ;}  ?>" id="list">



                    <center class="custom-tam-cng-sel-block">

                       <span> Change Class </span>

                        <select name="class_id" onchange="window.location='<?php echo base_url(); ?>index.php?admin/student/'+this.value">

                            <option value=""><?php echo get_phrase('select_a__class'); ?></option>

                            <?php
                            $classes = $this->db->get('class')->result_array();



                            foreach ($classes as $row):
                                ?>

                                <option value="<?php echo $row['class_id']; ?>"

        <?php if ($class_id == $row['class_id']) echo 'selected'; ?>>

                                   <?php echo $row['name'].'-'.$row['name_numeric']; ?></option>

        <?php
    endforeach;
    ?>

                        </select>


    <?php if ($class_id == ''): ?>

                            <div id="ask_class" class="  alert alert-info  " style="width:300px;">

                                <i class="icon-info-sign"></i> Please select a class to manage student.

                            </div>

                            <script>

                                $(document).ready(function() {



                                    function shake()

                                    {

                                        $( "#ask_class" ).effect( "shake" );

                                    }

                                    setTimeout(shake, 500);

                                });

                            </script>

                            <br /><br />

    <?php endif; ?>

    <?php if ($class_id != ''): ?>



                            <!--<div class="action-nav-normal">

                                <div class=" action-nav-button" style="width:300px;">

                                    <a href="#" title="Users">

                                        <img src="<?php //echo base_url(); ?>template/images/icons/user.png" />

                                        <span>Total <?php //echo count($students); ?> students</span>

                                    </a>

                                </div>

                            </div>-->

                        </center>

						 <?php echo form_open_multipart('admin/student/do_upload/'); ?>

						 <?php $size=sizeof($students) ?>
						 <div>
			<?php /******************************************************************************************************/ ?>
					<table style="border:1px solid #eeeeee;width:1118px;" align="center" class="custom-table-class">
                                            <tr style="background:#5CA6CC; height:40px;color:#fff; font-size:15px; font-weight:bold;">
                                                <td align="center">
                                                    Bulk Actions
                                                </td>
                                            </tr>

                                            <tr style="height:55px;"> <td>

                                                 <table style="width:500px; float:left">

						 <tr>

						 <td valign="middle">Promote to:</td>
						 <td valign="middle">
						 <select name="promote_class_id" >
            <option value=""><?php echo get_phrase('select_a_class'); ?></option>
            <?php
            $classes = $this->db->get('class')->result_array();
            foreach ($classes as $row):
                ?>
                <option value="<?php echo $row['class_id']; ?>"
            <?php //if ($class_id == $row['class_id']) echo 'selected'; ?>>
            <?php echo $row['name'].'-'.$row['name_numeric']; ?></option>
            <?php
        endforeach;
        ?>
        </select>
						 </td>

						 <td valign="top"><input class="btn btn-green btn-small" type="submit" value="Bulk Promote" name="bulk-promote">
						  <input type="text" value="<?php echo $size ?>" name="selectCount">
                          <input type="text" value="<?php echo $class_id ?>" name="p_class"  />
						 </td>
						 </tr>

						 </table>
			<?php /******************************************************************************************************/ ?>
						 <table style="width:500px;float:right" >

						 <tr>
						  <td>Select Exam</td>


						 <td>

						 <select name="exam_id" class=""  style="float:left;">

                                <option value=""><?php echo get_phrase('select_an_exam');?></option>

                                <?php

                                $exams = $this->db->get('exam')->result_array();

                                foreach($exams as $row):

                                ?>

                                    <option value="<?php echo $row['exam_id'];?>"

                                        <?php if($exam_id == $row['exam_id'])echo 'selected';?>>

                                            <?php echo get_phrase('class');?> <?php echo $row['name'];?></option>

                                <?php

                                endforeach;

                                ?>

                            </select>

						 </td>

						<td valign="top"><input class="btn btn-green btn-small" type="submit" value="Bulk Email" name="bulk-email"></td>
						<td valign="top"><input class="btn btn-green btn-small" type="submit" value="Bulk SMS" name="bulk-sms"></td>
						 </tr>
						 </table>









                                                 </td></tr>

                                                 </table>



						 </div>

                        <div class="box">

                            <div class="box-content">



                                <div id="dataTables">

                                    <table cellpadding="0" cellspacing="0" border="0" class="responsive" id="student_dtable">

                                        <thead>

                                            <tr>



					<th class="check_box"><div><input type="checkbox" name="select_all" class="select_all" value="<?php echo $size ?>" id="select_all"></div></th>

                                        <!--<th style="width:62px;"><div style="width:62px;" ><?php //echo get_phrase('roll'); ?></div></th>-->

                                        <th width="160px"><div><?php echo get_phrase('admission_number'); ?></div></th>

                                        <th><div><?php echo get_phrase('student_qatar_id'); ?></div></th>

                                        <th><div><?php echo get_phrase('class'); ?></div></th>

                                        <!--<th><div><?php //echo get_phrase('photo'); ?></div></th>-->

                                        <th><div><?php echo get_phrase('student_name'); ?></div></th>

                                         <!--<th><div><?php //echo get_phrase('father / mother'); ?></div></th>-->

                                          <th><div><?php echo get_phrase('parent_phone_number'); ?></div></th>

                                          <th><div><?php echo get_phrase('parent_email'); ?></div></th>

                                          <th><div><?php echo get_phrase('bus_no') ; ?></div></th>

                                        <!--<th><div style="width:120px;"><?php //echo get_phrase('address'); ?></div></th>-->

                                        <!--<th><div style="width:160px;"><?php //echo get_phrase('tam username'); ?></div></th>-->

                                        <th style="width:20%;"><div><?php echo get_phrase('options'); ?></div></th>

                                        </tr>

                                        </thead>

                                        <tbody>

                              <?php $count = 1; $j=0;
                              foreach ($students as $row): ?>

                                                <tr>
													<td><div><input type="checkbox" name="custom-student<?php echo $j; ?>" class="roll_sel" id="roll_sel" value="<?php echo $row['student_id'];?>"></div></td>

                                                    <!--<td><?php //echo $row['roll']; ?></td>-->

                                                    <td><?php echo $row['admission_number']; ?></td>

                                                    <td><?php echo $row['student_qatar_id']; ?></td>

                                                    <td><?php echo $row['cname'].' - '.$row['name_numeric']; ?></td>

                                                   <!-- <td><div><img src="<?php //echo $this->crud_model->get_image_url('student', $row['student_id']); ?>" class="avatar-medium" /></div></td>-->

                                                    <td><?php echo $row['name']; ?></td>

                                                    <!--<td><?php echo $row['father_name']; ?> / <?php echo $row['mother_name']; ?></td>-->

                                                    <td><?php echo $row['parent_phone1']; ?></td>

                                                    <td><?php echo $row['student_parent_email']; ?></td>

                                                    <td><?php echo ($row['route_name'] ? $row['route_name'] : 'N / A'); ?></td>

                                                    <!--<td ><div style="width:160px;"><?php //echo $row['email']; ?></div></td>-->

                                                    <td align="center">

                                                        <div class="custom-tam-table-icon-btns">
                                                            <a data-toggle="modal" href="javascript:;" class="btn btn-lightblue btn-small custom-tam-indsudsms" data-studentid="<?php echo $row['student_id']; ?>" data-stype="sms"><i class="icon-mobile-phone"></i></a>
                                                                        <a class="btn btn-green btn-small" onclick="modal('student_promote',<?php echo $row['student_id']; ?>,<?php echo $class_id; ?>);document.getElementById('hid_btn').style.display = 'none'" href="#modal-form" data-toggle="modal">
                                                                            <i class="icon-user"></i>
                                                                        </a>
                                                                        <a  data-toggle="modal" href="#modal-form" onclick="modal('student_profile',<?php echo $row['student_id']; ?>);document.getElementById('hid_btn').style.display = 'inline'" class="btn btn-lightblue btn-small">
                                                                            <i class="icon-user"></i>
                                                                        </a>
                                                                        <a  data-toggle="modal" href="#modal-form" onclick="modal('edit_student',<?php echo $row['student_id']; ?>,<?php echo $class_id; ?>);document.getElementById('hid_btn').style.display = 'inline'" class="btn btn-red btn-small">
                                                                            <i class="icon-wrench"></i>
                                                                        </a>

                                                                    </div>

                                                                    <div class="custom-tam-table-icon-btns">
                                                                        <a  data-toggle="modal" href="javascript:;" class="btn btn-lightblue btn-small custom-tam-indsudsms" data-studentid="<?php echo $row['student_id']; ?>" data-stype="mail"><i class="icon-envelope-alt"></i></a>
                                                                        <a  data-toggle="modal" href="#modal-form" onclick="modal('student_id_card',<?php echo $row['student_id']; ?>);document.getElementById('hid_btn').style.display = 'inline'" class="btn btn-green btn-small">
                                                                            <i class="icon-credit-card"></i>
                                                                        </a>
                                                                        <a  data-toggle="modal" href="#modal-form" onclick="modal('student_academic_result',<?php echo $row['student_id']; ?>);document.getElementById('hid_btn').style.display = 'inline'" class="btn btn-lightblue btn-small">
                                                                            <i class="icon-file-alt"></i>
                                                                        </a>
                                                                        <a  data-toggle="modal" href="#modal-delete" onclick="modal_delete('<?php echo base_url(); ?>index.php?admin/student/<?php echo $class_id; ?>/delete/<?php echo $row['student_id']; ?>')" class="btn btn-red btn-small">
                                                                            <i class="icon-trash"></i>
                                                                        </a>
                                                                    </div>




                                                    <!--<a href="<?php echo base_url(); ?>index.php?admin/student/<?php echo $class_id; ?>/personal_profile/<?php echo $row['student_id']; ?>"

                                                         class="btn btn-gray">

                                                            <i class="icon-wrench"></i> <?php echo get_phrase('personal_profile'); ?>

                                                    </a>

                                                    <a href="<?php echo base_url(); ?>index.php?admin/student/<?php echo $class_id; ?>/academic_result/<?php echo $row['student_id']; ?>"

                                                         class="btn btn-gray">

                                                            <i class="icon-wrench"></i> <?php echo get_phrase('academic_result'); ?>

                                                    </a>

                                                    <a href="<?php echo base_url(); ?>index.php?admin/student/<?php echo $class_id; ?>/edit/<?php echo $row['student_id']; ?>"

                                                        class="btn btn-gray">

                                                            <i class="icon-wrench"></i> <?php echo get_phrase('edit'); ?>

                                                    </a>

                                                    <a href="<?php echo base_url(); ?>index.php?admin/student/<?php echo $class_id; ?>/delete/<?php echo $row['student_id']; ?>" onclick="return confirm('delete?')"

                                                         class="btn btn-red">

                                                            <i class="icon-trash"></i> <?php echo get_phrase('delete'); ?>

                                                    </a>-->







                                                    </td>

                                                </tr>
<?php $j++ ?>
        <?php endforeach; ?>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

    <?php endif; ?>
</form>
                </div>

                <!----TABLE LISTING ENDS--->





                <!----CREATION FORM STARTS---->

                <div class="tab-pane box" id="add" style="padding: 5px">

                    <div class="box-content">

    <?php echo form_open('admin/student/create/', array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data')); ?>


                        <div class="padded">

                        	<div class="control-group">

                                <label class="control-label"><?php echo get_phrase('class'); ?></label>

                                <div class="controls">

                                    <select name="class_id" id="student_class_id" class="uniform" style="width:100%;">
										<option value="">-- Select Class --</option>
                                        <?php
                                            $classes = $this->db->get('class')->result_array();

                                            foreach ($classes as $row):
                                        ?>

                                            <option value="<?php echo $row['class_id']; ?>">

                                                <?php echo $row['name'].'-'.$row['name_numeric']; ?>

                                            </option>

                                            <?php  endforeach; ?>

                                    </select>

                                </div>
                                </div>

								<div class="control-group">
                                	 <label class="control-label"><?php echo get_phrase('academic_year'); ?></label>
								<div class="controls">

                                    <select class="uniform validate[required]" name="student_academicyear_id">
                                    <option value="">&nbsp;&nbsp;&nbsp;-- Academic Year --</option>
                                    <?php foreach($academicyear as $departments_list){ ?>
											<option value="<?php echo $departments_list['academic_id']  ?>"><?php echo $departments_list['session_name']  ?></option>
									 <?php }?>
                                    </select>

                                </div>

                            </div>

							<div class="control-group">

                                <label class="control-label"><?php echo get_phrase('admission_number'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="admission_number" id="admission_number" />
									<span id="val_admission_number_img"></span>
                                </div>

                            </div>

                        	<div class="control-group">

                                <label class="control-label"><?php echo get_phrase('roll'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="roll" id="student_roll_val"/>
									<span id="val_roll_img"></span>
                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('route_name'); ?></label>

                                <div class="controls">

                                    <select class="validate[required]" name="student_transport_id"  id="student_transport_id">
                                    <option value="">-- <?php echo get_phrase('bus_no'); ?> --</option>
                                    <?php foreach($transports as $transport){ ?>
                                            <option value="<?php echo $transport['transport_id']  ?>"><?php echo $transport['route_name']  ?></option>
                                     <?php }?>
                                    </select>
                                </div>

                            </div>

                            <!--<div class="control-group">
                            <label class="control-label"><?php //echo get_phrase('pickup_address');?></label>
                            <div class="controls">
                              <select class="validate[required]" name="student_pickup_id" id="student_pickup_id">
                                <option value="">---- select route first ----</option>
                              </select>
                            </div>
                          </div>-->

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('name'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="firstname" />
                                    <input type="text" class="validate[required]" name="lastname" />

                                </div>

                            </div>

                         <!--    <input type="hidden" name="class_id" value="<?php echo $class_id; ?>" /> -->

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('gender'); ?></label>

                                <div class="controls">

                                    <select name="sex" class="uniform" style="width:100%;">

                                        <option value="male"><?php echo get_phrase('male'); ?></option>

                                        <option value="female"><?php echo get_phrase('female'); ?></option>

                                    </select>

                                </div>

                            </div>
							<div class="control-group">

                                <label class="control-label"><?php echo get_phrase('Date of Birth'); ?></label>

                                <div class="controls">

                                   <!-- <input type="text" class="datepicker fill-up validate[required]" name="birthday" />-->

                                   <select name="birth_day" id="birth_day"  style="width:80px;" class="validate[required] uniform">
                                    <option value="">Day</option>
                                    <?php
                                    $strDay='';
                                    for ($i=1; $i<=31; $i++) {
                                    $strDay=(string)$i;
                                    if($i<10) $strDay='0'.$strDay;
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
                                    function getMonthList()
                                    {
                                    return array( "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                                    "Nov", "Dec");
                                    }
                                    $list=getMonthList();
                                    $index=1;
                                    foreach ( $list as &$row_data ) {
                                    ?>
                                    <option value="<?php  if($index < 10 ? $index = '0'.$index : $index );  echo $index  ?>">
                                    <?php echo $row_data." (".$index.")"; ?>
                                    </option>
                                    <?php
                                    $index=$index+1;
                                    }
                                    ?>
                                    </select>

                                    <select name="birth_year" id="birth_year" style="width:80px;" class="validate[required] uniform">
                                    <option value="">Year</option>
                                    <?php
                                    for ($i=1950; $i<=date('Y'); $i++) {
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

                                <label class="control-label"><?php echo get_phrase('Date of Joining'); ?></label>

                                <div class="controls">

                                    <input type="text" class="datepicker fill-up validate[required]" name="doj" />

                                </div>

                            </div>
                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('father_name'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="father_first_name" />
                                    <input type="text" class="validate[required]" name="father_last_name"  />

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('mother_name'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="mother_first_name"/>
                                    <input type="text" class="validate[required]" name="mother_last_name" />
                                </div>

                            </div>



                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('birth_place'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="birth_place" />

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('blood_group'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="blood_group" />

                                </div>

                            </div>

                             <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('height'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="height" />

                                </div>

                            </div>

                             <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('weight'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="weight" />

                                </div>

                            </div>

                            <!--<div class="control-group">

                                <label class="control-label"><?php //echo get_phrase('religion/cast'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="religion"  />
                                    <input type="text" class="validate[required]" name="cast"  />
                                </div>

                            </div>-->

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('nationality'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="nationality"  />

                                </div>

                            </div>
                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('username/email'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="email" id="student_email_val" placeholder="Student username"  />
                                <span id="val_img"></span>
                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('password'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="password" placeholder="Student password" />

                                </div>

                            </div>
                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('student_qatar_id'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="student_qatar_id"  />

                                </div>

                            </div>
                            <!--<div class="control-group">
                                	 <label class="control-label"><?php //echo get_phrase('country'); ?></label>
								<div class="controls">

                                    <select class="uniform validate[required]" name="country_id">
                                    <option value="">------ Select Country ----</option>
                                    <?php //foreach($country_data as $country_data_view){ ?>
											<option value="<?php //echo $country_data_view['country_id']  ?>"><?php //echo $country_data_view['name']  ?></option>
									 <?php //}?>
                                    </select>

                                </div>

                            </div>-->


                            <!-- <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('passport_number'); ?></label>

                                <div class="controls">

                                    <input type="text" class="fill-up validate[required]" name="passport_number" />

                                </div>

                            </div>

                             <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('date_of_issue'); ?></label>

                                <div class="controls">

                                    <input type="text" class="datepicker fill-up validate[required]" name="date_of_issue"/>

                                </div>

                            </div>

                             <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('date_of_expiry'); ?></label>

                                <div class="controls">

                                    <input type="text" class="datepicker fill-up validate[required]" name="date_of_expiry"/>

                                </div>

                            </div> -->

                            <!--<div class="control-group">

                                <label class="control-label"><?php //echo get_phrase('username/email'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="email" id="student_email_val"   />
								<span id="val_img"></span>
                                </div>

                            </div>-->

                            <!--<div class="control-group">

                                <label class="control-label"><?php //echo get_phrase('password'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="password" />

                                </div>

                            </div>-->

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('parent Official Username/email'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="parent_email"  />

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('parent_Official_password'); ?></label>

                                <div class="controls">

                                    <input type="password" class="validate[required]" name="parent_password"/>

                                </div>

                            </div>


                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('parent_phone'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="parent_phone1"  />
                                    <input type="text" class="" name="parent_phone2"  />

                                </div>

                            </div>
                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('parent_email'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="student_parent_email"/>

                                </div>

                            </div>

                             <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('father occupation'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="occupation" />

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('income(per Annum)'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="income_per_annum" />

                                </div>

                            </div>
                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('father_qatar_id'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="father_qatar_id"  />

                                </div>

                            </div>
                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('mother_qatar_id'); ?></label>

                                <div class="controls">

                                    <input type="text" class="validate[required]" name="mother_qatar_id"  />

                                </div>

                            </div>
                            <!--<div class="control-group">
                                	 <label class="control-label"><?php //echo get_phrase('father_country'); ?></label>
								<div class="controls">

                                    <select class="uniform validate[required]" name="father_country_id">
                                    <?php //foreach($country_data as $country_data_view){ ?>
											<option value="<?php //echo $country_data_view['country_id']  ?>"><?php //echo $country_data_view['name']  ?></option>
									 <?php //}?>
                                    </select>

                                </div>

                            </div>-->
                            <!--<div class="control-group">
                                	 <label class="control-label"><?php //echo get_phrase('mother_country'); ?></label>
								<div class="controls">

                                    <select class="uniform validate[required]" name="mother_country_id">
                                    <option value="">------ Select Country ----</option>
                                    <?php //foreach($country_data as $country_data_view){ ?>
											<option value="<?php //echo $country_data_view['country_id']  ?>"><?php //echo $country_data_view['name']  ?></option>
									 <?php //}?>
                                    </select>

                                </div>

                            </div>-->
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

                                <label class="control-label"><?php echo get_phrase('previous_school_name'); ?></label>

                                <div class="controls">

                                    <input type="text" class="" name="previous_school_name" />

                                </div>

                            </div>





                            <!--
                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('address'); ?></label>

                                <div class="controls">

                                    <input type="text" class="" name="address"/>

                                </div>

                            </div>
                            -->

                            <!--
                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('student_email'); ?></label>

                                <div class="controls">

                                    <input type="text" class="" name="email"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('student_password'); ?></label>

                                <div class="controls">

                                    <input type="text" class="" name="password"/>

                                </div>

                            </div>

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('parent_email'); ?></label>

                                <div class="controls">

                                    <input type="text" class="" name="parent_email"/>

                                </div>

                            </div>
                             <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('parent_password'); ?></label>

                                <div class="controls">

                                    <input type="text" class="" name="parent_password"/>

                                </div>

                            </div>



                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('roll'); ?></label>

                                <div class="controls">

                                    <input type="text" class="" name="roll"/>

                                </div>

                            </div>-->

                            <div class="control-group">

                                <label class="control-label"><?php echo get_phrase('photo'); ?></label>

                                <div class="controls" style="width:210px;">

                                    <input type="file" class="validate[required]" name="userfile" id="imgInp" />

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

                            <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_student'); ?></button>

                        </div>

                        </form>

                    </div>

                </div>

                <!----Upload FORM ENDS--->


            </div>



        </div>

    </div>

<?php endif; ?>

<?php if ($class_id == ""): ?>

    <center>

        <div class="span4" style="float:none !important;">

            <div class="box">

                <div class="box-header">

                    <span class="title"> <i class="icon-info-sign"></i> Please select a class to manage student.</span>

                </div>

                <div class="box-content padded tam-custom-border1">

                    <br />

                    <select name="class_id" onchange="window.location='<?php echo base_url(); ?>index.php?admin/student/'+this.value">

                        <option value=""><?php echo get_phrase('select_a_class'); ?></option>

    <?php
    $classes = $this->db->get('class')->result_array();

    foreach ($classes as $row):
        ?>

                            <option value="<?php echo $row['class_id']; ?>"

                            <?php if ($class_id == $row['class_id']) echo 'selected'; ?>>

                                <?php echo $row['name'].'-'.$row['name_numeric']; ?></option>

                            <?php
                        endforeach;
                        ?>

                    </select>

                    <!--<hr />-->

                    <script>

                        $(document).ready(function() {

                            function ask()

                            {

                                Growl.info({title:"Select a class to manage student",text:" "});

                            }

                            setTimeout(ask, 500);

                        });

                    </script>

                </div>

            </div>

        </div>

    </center>

<?php endif; ?>

<script>

    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();



            reader.onload = function (e) {

                $('#blah').attr('src', e.target.result);

            }



            reader.readAsDataURL(input.files[0]);

        }

    }



    $("#imgInp").change(function(){

        readURL(this);

    });
	$('#student_class_id').on('change',function(){
		$('#student_roll_val').val('');
		$('#val_roll_img').removeAttr("class").text('');
	});
	$('#student_roll_val').on('change',function(){

		var sroll = $(this).val();

		var sclass = $('#student_class_id').val();

		if(sroll!=''){

		$('#val_roll_img').removeAttr("class").text('').append('<img title="<?php echo base_url(); ?>template/images/loading.gif" src="<?php echo base_url(); ?>template/images/loading.gif">');

		$.ajax({
							type: 'POST',
							url: '<?php echo base_url(); ?>index.php?admin/sdtrollcheck/',
							data: { chkroll:sroll, chkrollcls:sclass},
							success: function(data) {
								//alert(data);

								if(data=='true'){
									$("#val_roll_img").text('').attr("class","label label-warning").text( "Roll no '"+ sroll +" ' already exists try another !" );
									$("#student_roll_val").val('').focus();

								} else {
									$("#val_roll_img").removeAttr("class").text('').attr("class","label label-success").text( "Roll no '"+ sroll +" ' available !" );

								}

							}
				  });

		} else {
			$('#val_roll_img').removeAttr("class").text('');
		}


	});


	$('#admission_number').on('change',function(){

		var sadmission_number = $(this).val();


		if(sadmission_number!=''){

		$('#val_admission_number_img').removeAttr("class").text('').append('<img title="<?php //echo base_url(); ?>template/images/loading.gif" src="<?php //echo base_url(); ?>template/images/loading.gif">');

		$.ajax({
							type: 'POST',
							url: '<?php //echo base_url(); ?>index.php?admin/sdtamcheck/',
							data: { chkan:sadmission_number},
							success: function(data) {


								if(data=='true'){
									$("#val_admission_number_img").text('').attr("class","label label-warning").text( "Admission Number'"+ sadmission_number +" ' already exists try another !" );
									$("#admission_number").val('').focus();

								} else {
									$("#val_admission_number_img").removeAttr("class").text('').attr("class","label label-success").text( "Admission Number '"+ sadmission_number +" ' available !" );

								}

							}
				  });

		} else {
			$('#val_admission_number_img').removeAttr("class").text('');
		}


	});



	$('#student_email_val').on('change',function(){

		var semail = $(this).val();

		 if (!validateEmail(semail)) {
			$("#val_img").removeAttr("class");
			$("#val_img").attr("class","label label-warning");
			$("#val_img").text('');
            $("#val_img" ).text('Please enter valid email!');
			$("#student_email_val").val('');
			$("#student_email_val").focus();
			return false;
        }

		$('#val_img').append('<img title="<?php echo base_url(); ?>template/images/loading.gif" src="<?php echo base_url(); ?>template/images/loading.gif">');

		$.ajax({
							type: 'POST',
							url: '<?php echo base_url(); ?>index.php?admin/sdtemailcheck/',
							data: { chkmail:semail },
							success: function(data) {
								//alert(data);

								if(data=='true'){
									$("#val_img").text('');
									$("#student_email_val").val('');
									$("#student_email_val").focus();
									$("#val_img").attr("class","label label-warning");
									$("#val_img" ).text( "'"+ semail +" ' already register try another !" );
								} else {
									$("#val_img").removeAttr("class");
									$('#val_img').text('');
									$("#val_img").attr("class","label label-success");
									$("#val_img" ).text( "'"+ semail +" ' available !" );
								}

							}
				  });

	});




// Function that validates email address through a regular expression.
function validateEmail(sEmail) {
	  var filter =  /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

   if (filter.test(sEmail)) {
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
    $j('#student_dtable').DataTable( {
		dom: 'T<"clear">lfrtip',
		 tableTools: {
            "sSwfPath": "<?php base_url() ?>template/swf/copy_csv_xls_pdf.swf",
			"aButtons": [
            {
                "sExtends": "copy",
                "mColumns": [1, 2, 3, 4, 5, 6, 7]
            },
            {
                "sExtends": "csv",
                "mColumns": [1, 2, 3, 4, 5, 6, 7]
            },
            {
                "sExtends": "pdf",
				"sPdfOrientation": "landscape",
                "mColumns": [1, 2, 3, 4, 5, 6, 7]
            },
            {
                "sExtends": "print",
                "mColumns": [1, 2, 3, 4, 5, 6, 7]
            },
        ]
        }
	} );
} );
</script>

<!-- Script for Checkboxes -->

<script language="javascript">


$(function(){
$("#select_all").click(function()
{
if(this.checked){
$('.roll_sel').each(function(){
	this.checked = true;
});
}else{
$('.roll_sel').each(function(){
	this.checked = false;
});

}
});

$(".roll_sel").click(function(){
if($(".roll_sel").length==$(".roll_sel:checked").length){

$("#select_all").attr("checked","checked");

}else{$("#select_all").removeAttr("checked");

}});

});



$('.custom-tam-indsudsms').on('click',function(e){

	var stype = $(this).data('stype');
	var stndid = $(this).data('studentid');

	if(stype=='sms'){



	$('#sms-overlay').show();
	$.ajax({
			type: 'POST',
			url: '<?php echo base_url(); ?>index.php?admin/sms_student_data',
			data: { sid:stndid },
			success: function(data) {


			$('#custom-tam-model').text('').append(data);

			$('#sms-overlay').hide();

			}
	});

	} else if(stype=='mail') {

	$('#sms-overlay').show();
	$.ajax({
			type: 'POST',
			url: '<?php echo base_url(); ?>index.php?admin/email_student_data',
			data: { sid:stndid },
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

    $(document).on('keyup','#smessage',function() {
		$('#sms-feedback').text('');
        var text_length = $('#smessage').val().length;
        var text_remaining = text_max - text_length;

        $('#smessage_feedback').html(text_remaining + ' characters remaining');
    });
});

$(document).on('click','#sndsmsbtn',function(e){

	var smsg = $('#smessage').val();

	if(smsg.trim()==''){
		$('#sms-feedback').text('').append('<div class="alert alert-danger"><strong>Please enter message!</strong> </div>');
		return true;
	}

	$('#sms-overlay').show();
	$.ajax({
			type: 'POST',
			url: '<?php echo base_url(); ?>index.php?admin/sms_student_snd',
			data:$( '#snd-frm' ).serialize(),
			success: function(data) {
			//alert(data);
				if(data != ''){
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

$(document).on('click','#sndmailbtn',function(e){

	var smsg = $('#smmessage').val();

	var ssub = $('#ssub').val();

	if(ssub.trim()==''){
		$('#sms-feedback').text('').append('<div class="alert alert-danger"><strong>Please enter subject!</strong> </div>');
		$('#ssub').focus();
		return true;
	} if(smsg.trim()==''){
		$('#sms-feedback').text('').append('<div class="alert alert-danger"><strong>Please enter message!</strong> </div>');
		$('#smmessage').focus();
		return true;
	}

	$('#sms-overlay').show();
	$.ajax({
			type: 'POST',
			url: '<?php echo base_url(); ?>index.php?admin/mail_student_snd',
			data:$( '#snd-frm' ).serialize(),
			success: function(data) {
			//alert(data);
				if(data == 'true'){
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
function hidemodel(){
	$("#custom-tam-model").modal("hide");
}


$('#student_transport_id').on('change',function(){

	var rid = $(this).val();
	if(rid!=''){

		$.ajax({
							type: 'POST',
							url: '<?php echo base_url(); ?>index.php?admin/getpoints/',
							data: { route_id:rid },
							success: function(data) {
								//alert(data);

								$('#student_pickup_id').text('').append(data);

							}
				  });

	}

});
</script>

<!-- END of Checkbox Script -->
