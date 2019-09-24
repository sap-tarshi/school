<!--<div class="sidebar-background">
<!--<div class="sidebar-background">
        <div class="primary-sidebar-background">
        </div>
</div>-->
<div class="primary-sidebar" id="tam-custom-sidebar">
    <!-- Main nav -->

    <div id="tam-custom-logo">
        <a href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>uploads/logo.png?<?php echo time(); ?>"  style="max-height:100px; max-width:100px;"/>
        </a>
    </div>

    <ul class="nav nav-collapse collapse nav-collapse-primary">

        <!------dashboard----->
        <li class="<?php if ($page_name == 'dashboard') echo 'dark-nav active'; ?>">
            <span class="glow"></span>
            <a href="<?php echo base_url(); ?>index.php?admin/dashboard" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('dashboard_help'); ?>">
                <i class="icon-dashboard"></i>  
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

        <!------sms--------->

        <li class="dark-nav <?php if ($page_name == 'sms_view' || $page_name == 'sms_template_view' || $page_name == 'sent_sms' || $page_name == 'email' || $page_name == 'email_view' || $page_name == 'noticeboard' || $page_name == 'mailsms' || $page_name == 'classnoticeboard'  || $page_name == 'homeworkmailsms' || $page_name == 'homework') echo 'active'; ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#communication_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('communication_help'); ?>">
                <i class="icon-comments"></i>  
                <span><?php echo get_phrase('communication'); ?><i class="icon-caret-down"></i></span>
            </a>

            <ul id="communication_submenu" class="collapse <?php if ($page_name == 'sms_view' || $page_name == 'sms_template_view' || $page_name == 'sent_sms' || $page_name == 'email' || $page_name == 'mailsms' || $page_name == 'email_view' || $page_name == 'noticeboard' || $page_name == 'classnoticeboard' || $page_name == 'homeworkmailsms' || $page_name == 'homework') echo 'in'; ?>">

                <li class="<?php if ($page_name == 'mailsms') echo 'active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/mailsms">
                        <i class="icon-envelope"></i>                  		
                        <?php echo get_phrase('mail / SMS'); ?>
                    </a>
                </li>
                
                <li class="<?php if ($page_name == 'homeworkmailsms') echo 'active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/homeworkmailsms">
                        <i class="icon-envelope"></i>                  		
                        <?php echo get_phrase('homework_mail_/_SMS'); ?>
                    </a>
                </li>
                
                <li class="<?php if ($page_name == 'homework') echo 'active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/homework">
                        <i class="icon-envelope"></i>                  		
                        <?php echo get_phrase('home_work'); ?>
                    </a>
                </li>

<!--<li class="<?php //if($page_name == 'sms_view')echo 'active'; ?>">
                        <span class="glow"></span>
  <a href="<?php //echo base_url(); ?>index.php?admin/sms_view">
                <i class="icon-user icon-plus"></i>                  		
                <?php //echo get_phrase('send_sms');?>
  </a>
</li>-->
<!--<li class="<?php if ($page_name == 'sms_template_view') echo 'active'; ?>">
  <a href="<?php echo base_url(); ?>index.php?admin/sms_template_view">
        <i class="icon-user icon-plus"></i> 
                <?php echo get_phrase('sms_template_view'); ?>
  </a>
</li>
<li class="<?php if ($page_name == 'sent_sms') echo 'active'; ?>">
  <a href="<?php echo base_url(); ?>index.php?admin/sent_sms">
        <i class="icon-user icon-plus"></i>                    	
                <?php echo get_phrase('sent_sms'); ?>
  </a>
</li>-->
<!--<li class="<?php //if($page_name == 'email'  ||  $page_name == 'email_view')echo 'active'; ?>">
                <span class="glow"></span>
  <a href="<?php //echo base_url(); ?>index.php?admin/email">
        <i class="icon-user icon-plus"></i>                    	
                <?php //echo get_phrase('email');?>
  </a>
</li>-->							

                <!------noticeboard----->
                <li class="<?php if ($page_name == 'noticeboard') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/noticeboard" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('noticeboard_help'); ?>">
                        <i class="fa fa-clipboard"></i>                             
                        <span><?php echo get_phrase('school noticeboard'); ?></span>
                    </a>
                </li>
                <!------class noticeboard----->
                <li class="<?php if ($page_name == 'classnoticeboard') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/classnoticeboard" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('noticeboard_help'); ?>">
                        <i class="fa fa-clipboard"></i>                             
                        <span><?php echo get_phrase('class wise student notices/staff notices'); ?></span>
                    </a>
                </li>


            </ul>
        </li>

       	<li class="dark-nav <?php if ($page_name == 'student' || $page_name == 'teacher' || $page_name == 'non_teaching_staff') echo 'active'; ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#admission_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('admission_help'); ?>">                
                <i class="fa fa-users"></i>  
                <span><?php echo get_phrase('admission'); ?><i class="icon-caret-down"></i></span>
            </a>
            <ul id="admission_submenu" class="collapse <?php if ($page_name == 'student' || $page_name == 'teacher' || $page_name == 'non_teaching_staff') echo 'in'; ?>">


                <!------student----->
                <li class="<?php if ($page_name == 'student') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/student" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('student_help'); ?>">
                        <i class="icon-user"></i>                    
                        <span><?php echo get_phrase('student'); ?></span>
                    </a>
                </li>

                <!------teacher----->
                <li class="<?php if ($page_name == 'teacher') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/teacher" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('teacher_help'); ?>">
                        <i class="icon-user"></i>
                        <span><?php echo get_phrase('teacher'); ?></span>
                    </a>
                </li>

                <!------staff----->
                <!--
                       <li class="<?php if ($page_name == 'non_teaching_staff') echo 'dark-nav active'; ?>">
                               <span class="glow"></span>
                                       <a href="<?php echo base_url(); ?>index.php?admin/staff" rel="tooltip" data-placement="right" 
                               data-original-title="<?php echo get_phrase('staff_help'); ?>">
                                               <i class="icon-user"></i>                    
                                               <span><?php echo get_phrase('non_teaching_staff'); ?></span>
                                       </a>
                       </li>
                -->   

            </ul>
        </li>

        <!------parent----->
<!--		<li class="<?php if ($page_name == 'parent') echo 'dark-nav active'; ?>">
                        <span class="glow"></span>
                                <a href="<?php echo base_url(); ?>index.php?admin/parent" rel="tooltip" data-placement="right" 
                        data-original-title="<?php echo get_phrase('teacher_help'); ?>">
                                        <i class="icon-user icon-1x"></i>
                    <img src="<?php echo base_url(); ?>template/images/icons/parent.png" />
                                        <span><?php echo get_phrase('parent'); ?></span>
                                </a>
                </li>-->


        <li class="dark-nav <?php if ($page_name == 'subject' || $page_name == 'class' || $page_name == 'exam' || $page_name == 'marks' || $page_name == 'grade' || $page_name == 'departments' || $page_name == 'class_routine' || $page_name == 'academicyear') echo 'active'; ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#academics_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('academics_help'); ?>">
                <i class="fa fa-list-alt"></i>  
                <span><?php echo get_phrase('academics'); ?><i class="icon-caret-down"></i></span>
            </a>
            <ul id="academics_submenu" class="collapse <?php if ($page_name == 'subject' || $page_name == 'class' || $page_name == 'exam' || $page_name == 'marks' || $page_name == 'grade' || $page_name == 'departments' || $page_name == 'class_routine' || $page_name == 'academicyear') echo 'in'; ?>">


                <!------classes----->
                <li class="<?php if ($page_name == 'academicyear') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/academicyear" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('class_help'); ?>">
                        <i class="fa fa-align-justify"></i>  
                        <span><?php echo get_phrase('Academic Session'); ?></span>
                    </a>
                </li>
                <!------subject----->
                <li class="<?php if ($page_name == 'subject') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/subject" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('subject_help'); ?>">
                        <i class="fa fa-file-o"></i>  
                        <span><?php echo get_phrase('enter subject'); ?></span>
                    </a>
                </li>

                <!------classes----->
                <li class="<?php if ($page_name == 'class') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/classes" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('class_help'); ?>">
                        <i class="fa fa-graduation-cap"></i>  
                        <span><?php echo get_phrase('enter class'); ?></span>
                    </a>
                </li>

                <!------exam----->
                <li class="<?php if ($page_name == 'exam') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/exam" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('exam_help'); ?>">
                        <i class="fa fa-question-circle"></i>  
                        <span><?php echo get_phrase('create exam'); ?></span>
                    </a>
                </li>

                <!------marks----->
                <li class="<?php if ($page_name == 'marks') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/marks" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('marks_help'); ?>">
                        <i class="fa fa-file-text-o"></i>  
                        <span><?php echo get_phrase('enter marks'); ?></span>
                    </a>
                </li>


                <!------grade----->
                        <!--<li class="<?php //if($page_name == 'grade')echo 'dark-nav active'; ?>">
                                <span class="glow"></span>
                                        <a href="<?php //echo base_url(); ?>index.php?admin/grade" rel="tooltip" data-placement="right" 
                                data-original-title="<?php //echo get_phrase('grade_help'); ?>">
                                                <i class="fa fa-sort-alpha-asc"></i>  
                                                <span><?php //echo get_phrase('exam_grade'); ?></span>
                                        </a>
                        </li>-->

                <!------class routine----->
                <li class="<?php if ($page_name == 'class_routine') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/class_routine" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('class_routine_help'); ?>">
                        <i class="fa fa-calendar"></i>  
                        <span><?php echo get_phrase('class_routine'); ?></span>
                    </a>
                </li>


                <!------departments----->
                <li class="<?php if ($page_name == 'departments') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/departments" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('departments_help'); ?>">
                        <i class="fa fa-users"></i>  
                        <span><?php echo get_phrase('manage departments'); ?></span>
                    </a>
                </li>

            </ul>
        </li>


        <!-- ATTENDANCE NAVIGATION-->
        <li class="dark-nav <?php if ($page_name == 'attendence' || $page_name == 'daily_attendence' || $page_name == 'daily_attendence_view' || $page_name == 'daily_staff_attendence' || $page_name == 'staff_attendence' || $page_name == 'daily_staffattendence_view') echo 'active'; ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#attendance_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('attendance_help'); ?>">
                <i class="fa fa-check-square-o"></i>  
                <span><?php echo get_phrase('attendance'); ?><i class="icon-caret-down"></i></span>
            </a>
            <ul id="attendance_submenu" class="collapse <?php if ($page_name == 'attendence' || $page_name == 'daily_attendence' || $page_name == 'daily_attendence_view' || $page_name == 'daily_staff_attendence' || $page_name == 'staff_attendence' || $page_name == 'daily_staffattendence_view') echo 'in'; ?>">


                <!------daily_attendence----->
                <li class="<?php if ($page_name == 'daily_attendence' || $page_name == 'daily_attendence_view') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/daily_attendence" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('daily_attendence_help'); ?>">
                        <i class="fa fa-check-square-o"></i>  
                        <span><?php echo get_phrase('student daily_attendence'); ?></span>
                    </a>
                </li>

                <!------Monthly Attendence----->
                <li class="<?php if ($page_name == 'attendence') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/attendence" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('attendence_help'); ?>">
                        <i class="fa fa-check-square-o"></i>  
                        <span><?php echo get_phrase('student Monthly_Attendence'); ?></span>
                    </a>
                </li>


                <!------daily staffattendence----->
                <li class="<?php if ($page_name == 'daily_staff_attendence' || $page_name == 'daily_staffattendence_view') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/daily_staffattendence" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('daily_staffattendence'); ?>">
                       <!--<i class="icon-money icon-1x"></i>-->
                        <i class="fa fa-check-square-o"></i>  
                        <span><?php echo get_phrase('staff_daily_staffattendence'); ?></span>
                    </a>
                </li>
                <!------staffattendence----->
                <li class="<?php if ($page_name == 'staff_attendence') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/staffattendence" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('staffattendence_help'); ?>">
                        <i class="fa fa-check-square-o"></i>  
                        <span><?php echo get_phrase('staff_monthly_attendence'); ?></span>
                    </a>
                </li>
            </ul>
        </li>


        <!------Time Table----->
        <li class="dark-nav <?php if ($page_type == 1 || $page_type == 2) echo 'active'; ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#tt_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('time_table'); ?>">
                <i class="fa fa-calendar"></i>  
                <span><?php echo get_phrase('time_table'); ?><i class="icon-caret-down"></i></span>
            </a>
            <ul id="tt_submenu" class="collapse <?php if ($page_type == 1 || $page_type == 2) echo 'in'; ?>">

                <!------timetable----->
                <li class="<?php if ($page_type == 1) echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/timetable_category/1" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('timetable'); ?>">
                        <i class="fa fa-calendar"></i>  
                        <span><?php echo get_phrase('timetable'); ?></span>
                    </a>
                </li>
                <!------timetable category----->
                <li class="<?php if ($page_type == 2) echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/timetable_category/2" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('employee_category_help'); ?>">
                        <i class="fa fa-list"></i>  
                        <span><?php echo get_phrase('timetable_category'); ?></span>
                    </a>
                </li>                                                                                                        
            </ul>
        </li>


        <!------hr----->
        <li class="dark-nav <?php if ($page_name == 'employee_category' || $page_name == 'leave_types' || $page_name == 'leavemanagement') echo 'active'; ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#hr_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('human_resources_help'); ?>">
                <i class="fa fa-life-ring"></i>  
                <span><?php echo get_phrase('human_resources'); ?><i class="icon-caret-down"></i></span>
            </a>
            <ul id="hr_submenu" class="collapse <?php if ($page_name == 'employee_category' || $page_name == 'leave_types' || $page_name == 'leavemanagement') echo 'in'; ?>">
                <!------employee category----->
                <li class="<?php if ($page_name == 'employee_category') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/employee_category" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('employee_category_help'); ?>">
                        <i class="fa fa-list"></i>  
                        <span><?php echo get_phrase('employee_category'); ?></span>
                    </a>
                </li>


                <!------leavetypes----->
                <li class="<?php if ($page_name == 'leave_types') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/leavetypes" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('leavetypes_help'); ?>">
                        <i class="fa fa-list"></i>  
                        <span><?php echo get_phrase('leave_types'); ?></span>
                    </a>
                </li>
                <!-- Leave Management-->
                <li class="<?php if ($page_name == 'leavemanagement') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/leavemanagement" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('leave_management_help'); ?>">
                        <i class="fa fa-list"></i>  
                        <span><?php echo get_phrase('leave_management'); ?></span>
                    </a>
                </li>






            </ul>
        </li>





        <li class="dark-nav <?php if ($page_name == 'feecategories' || $page_name == 'edit_fee_categories' || $page_name == 'feeparticulars' || $page_name == 'edit_feeparticulars' || $page_name == 'feeperiods' || $page_name == 'feecollect' || $page_name == 'feereporting' || $page_name == 'edit_feeperiod') echo 'active'; ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#payment_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('payment_help'); ?>">
                <i class="fa fa-money"></i>  
                <span><?php echo get_phrase('payment'); ?><i class="icon-caret-down"></i></span>
            </a>
            <ul id="payment_submenu" class="collapse <?php if ($page_name == 'feecategories' || $page_name == 'edit_fee_categories' || $page_name == 'feeparticulars' || $page_name == 'edit_feeparticulars' || $page_name == 'feeperiods' || $page_name == 'feecollect' || $page_name == 'feereporting' || $page_name == 'edit_feeperiod') echo 'in'; ?>">
                <!------invoice----->
                <li class="<?php if ($page_name == 'feecategories' || $page_name == 'edit_fee_categories' || $page_name == 'feeparticulars' || $page_name == 'edit_feeparticulars') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/feecategories" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('fee_categories_help'); ?>">
                        <i class="fa fa-list"></i>  
                        <span><?php echo get_phrase('fee_categories'); ?></span>
                    </a>
                </li>


                <!------Fees category----->
                <li class="<?php if ($page_name == 'feeperiods' || $page_name == 'edit_feeperiod') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/feeperiods" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('fee_periods_help'); ?>">
                        <i class="fa fa-calendar"></i>  
                        <span><?php echo get_phrase('fee_periods'); ?></span>
                    </a>
                </li>

                <!------Class wise fees----->
                <li class="<?php if ($page_name == 'feecollect') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/feecollect" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('fee_collect_help'); ?>">
                        <i class="fa fa-money"></i>  
                        <span><?php echo get_phrase('fee_collect'); ?></span>
                    </a>
                </li>

                <!------Student Payments----->
                <li class="<?php if ($page_name == 'feereporting') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/feereporting" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('fee_reporting_help'); ?>">
                        <i class="fa fa-list"></i>  
                        <span><?php echo get_phrase('fee_reporting'); ?></span>
                    </a>
                </li>

            </ul>
        </li>	



        <!------Library------>
        <li class="dark-nav <?php if ($page_name == 'book' || $page_name == 'bookcat') echo 'active'; ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#library_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('library_help'); ?>">
                <i class="fa fa-book"></i>  
                <span><?php echo get_phrase('library'); ?><i class="icon-caret-down"></i></span>
            </a>

            <ul id="library_submenu" class="collapse <?php if ($page_name == 'book' || $page_name == 'bookcat') echo 'in'; ?>">
                <li class="<?php if ($page_name == 'book') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/book">
                        <i class="fa fa-book"></i>  
                        <?php echo get_phrase('add_books'); ?>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'bookcat') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/book_cat">
                        <i class="fa fa-list"></i>  
                        <?php echo get_phrase('books_category'); ?>
                    </a>
                </li>

            </ul>
        </li>




       	<!------transport------>
        <li class="dark-nav <?php if ($page_name == 'transport' || $page_name == 'dormitory' || $page_name == 'frontdeskenquiry' || $page_name == 'tasks_view' || $page_name == 'placements' || $page_name == 'gallery') echo 'active'; ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#utilities_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('utilities_help'); ?>">
                <i class="icon-tasks"></i>  
                <span><?php echo get_phrase('utilities'); ?><i class="icon-caret-down"></i></span>
            </a>

            <ul id="utilities_submenu" class="collapse <?php if ($page_name == 'transport' || $page_name == 'dormitory' || $page_name == 'frontdeskenquiry' || $page_name == 'tasks_view' || $page_name == 'placements' || $page_name == 'gallery') echo 'in'; ?>">


                <!------transport----->
                <li class="<?php if ($page_name == 'transport') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/transport" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('transport_help'); ?>">
                        <i class="fa fa-bus"></i>  
                        <span><?php echo get_phrase('transport'); ?></span>
                    </a>
                </li>

                <!------dormitory----->
               
                        <li class="<?php if ($page_name == 'dormitory') echo 'dark-nav active'; ?>">
                                <span class="glow"></span>
                                        <a href="<?php echo base_url(); ?>index.php?admin/dormitory" rel="tooltip" data-placement="right" 
                                data-original-title="<?php echo get_phrase('dormitory_help'); ?>">
                                                <i class="fa fa-building-o"></i>  
                                                <span><?php echo get_phrase('dormitory'); ?></span>
                                        </a>
                        </li>
                
                <!------Frontdesk Help----->
                <li class="<?php if ($page_name == 'frontdeskenquiry') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/frontdeskenquiry" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('dormitory_help'); ?>">
                        <i class="fa fa-edit"></i>  
                        <span><?php echo get_phrase('frontdesk_help'); ?></span>
                    </a>
                </li>

                <!------tasks----->
                <li class="<?php if ($page_name == 'tasks_view') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/tasks" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('tasks_help'); ?>">
                        <i class="fa fa-tasks"></i>  
                        <span><?php echo get_phrase('things_todo'); ?></span>
                    </a>
                </li>

                <!------palcements----->
                <li class="<?php if ($page_name == 'placements') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/placements" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('placements_help'); ?>">
                        <i class="fa fa-graduation-cap"></i>  
                        <span><?php echo get_phrase('placements'); ?></span>
                    </a>
                </li>

                <!------Gallery------>

                <li class="<?php if ($page_name == 'gallery') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/gallerys">
                        <i class="icon-user icon-plus"></i>  
                        <?php echo get_phrase('gallery'); ?>
                    </a>
                </li>


            </ul>
        </li>






        <li class="dark-nav <?php
        if ($page_name == 'previousquestionpapers' || $page_name == 'previous_question_papers' ||
                $page_name == 'onlinetest' ||
                $page_name == 'ebooks')
            echo 'active';
        ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#knowledge_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('knowledge_help'); ?>">
                <i class="fa fa-server"></i>  
                <span><?php echo get_phrase('knowledge'); ?><i class="icon-caret-down"></i></span>
            </a>

            <ul id="knowledge_submenu" class="collapse <?php
        if ($page_name == 'previousquestionpapers' || $page_name == 'previous_question_papers' ||
                $page_name == 'onlinetest' ||
                $page_name == 'ebooks')
            echo 'in';
        ?>">    
                <li class="<?php if ($page_name == 'previousquestionpapers' || $page_name == 'previous_question_papers') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/previousquestionpapers" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('Previous Question Papers'); ?>">
                        <i class="fa fa-question-circle"></i>  
                        <span><?php echo get_phrase('Previous Question Papers'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'onlinetest') echo 'dark-nav active'; ?>">
                    <span class="glow"></span>
                    <a href="<?php echo base_url(); ?>index.php?admin/onlinetest" rel="tooltip" data-placement="right" 
                       data-original-title="<?php echo get_phrase('Online Test'); ?>">
                        <i class="fa fa-globe"></i>  
                        <span><?php echo get_phrase('Online Test'); ?></span>
                    </a>
                </li>
            </ul>
        </li>


        <!------system settings------>
        <li class="dark-nav <?php
        if ($page_name == 'system_settings' ||
                $page_name == 'manage_language' ||
                $page_name == 'backup_restore')
            echo 'active';
        ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#settings_submenu" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('settings_help'); ?>">
                <i class="fa fa-cogs"></i>  
                <span><?php echo get_phrase('settings'); ?><i class="icon-caret-down"></i></span>
            </a>

            <ul id="settings_submenu" class="collapse <?php
                        if ($page_name == 'system_settings' ||
                                $page_name == 'manage_language' ||
                                $page_name == 'backup_restore')
                            echo 'in';
        ?>">
                <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/system_settings">
                        <i class="fa fa-gear"></i>  
                <?php echo get_phrase('system_settings'); ?>
                    </a>
                </li>
               <!-- <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?>">
                  <a href="<?php echo base_url(); ?>index.php?admin/manage_language">
                        <i class="icon-globe"></i>
                        <img src="<?php echo base_url(); ?>template/images/icons/language.png" />
<?php echo get_phrase('manage_language'); ?>
                  </a>
                </li>-->
                <!--<li class="<?php //if($page_name == 'backup_restore')echo 'active'; ?>">
                  <a href="<?php //echo base_url();?>index.php?admin/backup_restore">
                        <i class="icon-user icon-plus"></i>  
            <?php // echo get_phrase('backup_restore');?>
                  </a>
                </li>-->
            </ul>
        </li>



        <!------CCE------>
        <li class="dark-nav <?php
            if ($page_name == 'cce_category' ||
                    $page_name == 'cce_skills' ||
                    $page_name == 'cce_indicators' ||
                    $page_name == 'cce_assessment_term' || $page_name == 'cce_grade_sets' || $page_name == 'cce_grade_skills' || $page_name == 'cce_assessment_assign' || $page_name == 'cce_class_indicator')
                echo 'active';
            ?>">
            <span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#cce_settings" rel="tooltip" data-placement="right" 
               data-original-title="<?php echo get_phrase('cce help'); ?>">
                <i class="fa fa-folder"></i>  
                <span><?php echo get_phrase('cce_inputs'); ?><i class="icon-caret-down"></i></span>
            </a>

            <ul id="cce_settings" class="collapse <?php
            if ($page_name == 'cce_category' ||
                    $page_name == 'cce_skills' ||
                    $page_name == 'cce_indicators' ||
                    $page_name == 'cce_assessment_term' || $page_name == 'cce_grade_sets' || $page_name == 'cce_grade_skills' || $page_name == 'cce_assessment_assign' || $page_name == 'cce_class_indicator')
                echo 'in';
            ?>">
                <li class="<?php if ($page_name == 'cce_category') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/cce_category">
                        <i class="icon-user icon-plus"></i>  
                        <?php echo get_phrase('category'); ?>
                    </a>
                </li>            
                <li class="<?php if ($page_name == 'cce_skills') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/cce_skills">
                        <i class="icon-user icon-plus"></i>  
                        <?php echo get_phrase('skills'); ?>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'cce_indicators') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/cce_indicators">
                        <i class="icon-user icon-plus"></i>  
                        <?php echo get_phrase('indicators'); ?>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'cce_assessment_term') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/cce_assessment_term">
                        <i class="icon-user icon-plus"></i>  
                        <?php echo get_phrase('Assessment Terms'); ?>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'cce_grade_skills') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/grade_skills_mapping">
                        <i class="icon-user icon-plus"></i>  
                        <?php echo get_phrase('Grades Skill Mapping'); ?>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'cce_assessment_assign') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/cce_assessment">
                        <i class="icon-user icon-plus"></i>  
                        <?php echo get_phrase('Assessment'); ?>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'cce_grade_sets') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/cce_grade_sets">
                        <i class="icon-user icon-plus"></i>  
<?php echo get_phrase('Grades'); ?>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'cce_class_indicator') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/cce_class_indicator">
                        <i class="icon-user icon-plus"></i>  
<?php echo get_phrase('Class Indicator Relation'); ?>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'backup_restore') echo 'active'; ?>">
                    <a href="<?php echo base_url(); ?>index.php?admin/backup_restore">
                        <i class="icon-user icon-plus"></i>  
<?php echo get_phrase('Exam Scheme'); ?>
                    </a>
                </li>
            </ul>
        </li>



        <!------manage own profile--->
        <!--<li class="<?php //if($page_name == 'manage_profile')echo 'dark-nav active'; ?>">
                <span class="glow"></span>
                        <a href="<?php //echo base_url(); ?>index.php?admin/manage_profile" rel="tooltip" data-placement="right" 
                data-original-title="<?php //echo get_phrase('profile_help'); ?>">
                                <i class="icon-lock icon-1x"></i>
            <img src="<?php //echo base_url(); ?>template/images/icons/profile.png" />
                                <span><?php //echo get_phrase('profile'); ?></span>
                        </a>
        </li>-->

        <!------system settings------>



    </ul>

</div>