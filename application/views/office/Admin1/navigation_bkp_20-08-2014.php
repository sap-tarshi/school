<!--<div class="sidebar-background">
	<div class="primary-sidebar-background">
	</div>
</div>-->
<div class="primary-sidebar" id="tam-custom-sidebar">
	<!-- Main nav -->
    
    <div id="tam-custom-logo">
    	<a href="<?php echo base_url();?>">
        	<img src="<?php echo base_url();?>uploads/logo.png"  style="max-height:100px; max-width:100px;"/>
        </a>
    </div>
   	
	<ul class="nav nav-collapse collapse nav-collapse-primary">
    
        
        <!------dashboard----->
		<li class="<?php if($page_name == 'dashboard')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/dashboard" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('dashboard_help');?>">
					<!--<i class="icon-desktop icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/home.png" />
					<span><?php echo get_phrase('dashboard');?></span>
				</a>
		</li>
		
	<!------sms--------->
	 	       
		<li class="dark-nav <?php if($page_name == 'sms_view' || $page_name == 'sms_template_view' || $page_name == 'sent_sms' )echo 'active';?>">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#sms_submenu" rel="tooltip" data-placement="right" 
                data-original-title="<?php echo get_phrase('sms_help');?>">
                <!--<i class="icon-wrench icon-1x"></i>-->
                <img src="<?php echo base_url();?>template/images/icons/settings.png" />
                <span><?php echo get_phrase('sms');?><i class="icon-caret-down"></i></span>
            </a>
            
            <ul id="sms_submenu" class="collapse <?php if($page_name == 'sms_view' || $page_name == 'sms_template_' )echo 'in';?>">
                <li class="<?php if($page_name == 'sms_view')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/sms_view">
                  		<!--<i class="icon-h-sign"></i>-->
                  		<img src="<?php echo base_url();?>template/images/icons/system_settings.png" />
                    	<?php echo get_phrase('sms_view');?>
                  </a>
                </li>
                <li class="<?php if($page_name == 'sms_template_view')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/sms_template_view">
                      	<!--<i class="icon-globe"></i>-->
                    	<img src="<?php echo base_url();?>template/images/icons/language.png" />
						<?php echo get_phrase('sms_template_view');?>
                  </a>
                </li>
               <li class="<?php if($page_name == 'sent_sms')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/sent_sms">
                      	<!--<i class="icon-globe"></i>-->
                    	<img src="<?php echo base_url();?>template/images/icons/language.png" />
						<?php echo get_phrase('sent_sms');?>
                  </a>
                </li>
               
            </ul>
		</li>

       	
        <!------student----->
		<li class="<?php if($page_name == 'student')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/student" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('student_help');?>">
					<!--<i class="icon-user icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/user.png" />
					<span><?php echo get_phrase('student');?></span>
				</a>
		</li>
        	
        <!------teacher----->
		<li class="<?php if($page_name == 'teacher')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/teacher" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('teacher_help');?>">
					<!--<i class="icon-user icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/teacher.png" />
					<span><?php echo get_phrase('teacher');?></span>
				</a>
		</li>
       	
        <!------parent----->
<!--		<li class="<?php if($page_name == 'parent')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/parent" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('teacher_help');?>">
					<i class="icon-user icon-1x"></i>
                    <img src="<?php echo base_url();?>template/images/icons/parent.png" />
					<span><?php echo get_phrase('parent');?></span>
				</a>
		</li>-->
       	
        <!------subject----->
		<li class="<?php if($page_name == 'subject')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/subject" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('subject_help');?>">
					<!--<i class="icon-tasks icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/subject.png" />
					<span><?php echo get_phrase('subject');?></span>
				</a>
		</li>
       	
        <!------classes----->
		<li class="<?php if($page_name == 'class')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/classes" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('class_help');?>">
					<!--<i class="icon-sitemap icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/class.png" />
					<span><?php echo get_phrase('class');?></span>
				</a>
		</li>
        	
        <!------exam----->
		<li class="<?php if($page_name == 'exam')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/exam" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('exam_help');?>">
					<!--<i class="icon-paste icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/exam.png" />
					<span><?php echo get_phrase('exam');?></span>
				</a>
		</li>
        
		<!------marks----->
		<li class="<?php if($page_name == 'marks')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/marks" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('marks_help');?>">
					<!--<i class="icon-pencil icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/marks.png" />
					<span><?php echo get_phrase('marks');?></span>
				</a>
		</li>
		
		<!------Attendence----->
		<li class="<?php if($page_name == 'attendence')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/attendence" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('attendence_help');?>">
					<!--<i class="icon-pencil icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/marks.png" />
					<span><?php echo get_phrase('Attendence');?></span>
				</a>
		</li>
        	
        <!------grade----->
		<li class="<?php if($page_name == 'grade')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/grade" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('grade_help');?>">
					<!--<i class="icon-list-ol icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/grade.png" />
					<span><?php echo get_phrase('exam-grade');?></span>
				</a>
		</li>
        	
        <!------class routine----->
		<li class="<?php if($page_name == 'class_routine')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/class_routine" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('class_routine_help');?>">
					<!--<i class="icon-indent-right icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/routine.png" />
					<span><?php echo get_phrase('class_routine');?></span>
				</a>
		</li>
       	
        <!------invoice----->
		<li class="<?php if($page_name == 'invoice')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/invoice" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('invoice_help');?>">
					<!--<i class="icon-money icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/payment.png" />
					<span><?php echo get_phrase('payment');?></span>
				</a>
		</li>
        
        
        <!------Fees category----->
		<li class="<?php if($page_name == 'feescat')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/fees_cat" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('fees_category_help');?>">
					<!--<i class="icon-money icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/payment.png" />
					<span><?php echo get_phrase('fees_category');?></span>
				</a>
		</li>
		
		<!------Class wise fees----->
		<li class="<?php if($page_name == 'class_wise_fees')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/class_wise_fees" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('class_wise_fees_help');?>">
					<!--<i class="icon-money icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/payment.png" />
					<span><?php echo get_phrase('class_wise_fees');?></span>
				</a>
		</li>
		
		<!------Student Payments----->
		<li class="<?php if($page_name == 'studentpayments')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/manage_student_fees" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('student_payments_help');?>">
					<!--<i class="icon-money icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/payment.png" />
					<span><?php echo get_phrase('studentpayments');?></span>
				</a>
		</li>
        
        	
     
		
		
		<!------Library------>
		<li class="dark-nav <?php if(	$page_name == 'book' ||  $page_name == 'bookcat' )echo 'active';?>">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#settings_submenu" rel="tooltip" data-placement="right" 
                data-original-title="<?php echo get_phrase('book_help');?>">
                <!--<i class="icon-wrench icon-1x"></i>-->
                <img src="<?php echo base_url();?>template/images/icons/book.png" />
                <span><?php echo get_phrase('library');?><i class="icon-caret-down"></i></span>
            </a>
            
            <ul id="settings_submenu" class="collapse <?php if(	$page_name == 'book' ||  $page_name == 'bookcat' )echo 'in';?>">
                <li class="<?php if($page_name == 'book')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/book">
                  		<!--<i class="icon-h-sign"></i>-->
                  		 <img src="<?php echo base_url();?>template/images/icons/book.png" />
                    	<?php echo get_phrase('add_books');?>
                  </a>
                </li>
                <li class="<?php if($page_name == 'bookcat')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/book_cat">
                      	<!--<i class="icon-globe"></i>-->
                    	 <img src="<?php echo base_url();?>template/images/icons/book.png" />
						<?php echo get_phrase('books_category');?>
                  </a>
                </li>
               
            </ul>
		</li>
		
		
		
		
       	
        <!------transport----->
		<li class="<?php if($page_name == 'transport')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/transport" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('transport_help');?>">
					<!--<i class="icon-truck icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/transport.png" />
					<span><?php echo get_phrase('transport');?></span>
				</a>
		</li>
        	
        <!------dormitory----->
		<li class="<?php if($page_name == 'dormitory')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/dormitory" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('dormitory_help');?>">
					<!--<i class="icon-hospital icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/dormitory.png" />
					<span><?php echo get_phrase('dormitory');?></span>
				</a>
		</li>
        	
        <!------noticeboard----->
		<li class="<?php if($page_name == 'noticeboard')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/noticeboard" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('noticeboard_help');?>">
					<!--<i class="icon-columns icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/noticeboard.png" />
					<span><?php echo get_phrase('noticeboard-event');?></span>
				</a>
		</li>
        

		

        	
        <!------system settings------>
		<li class="dark-nav <?php if(	$page_name == 'system_settings' 		|| 
										$page_name == 'manage_language' 		|| 
										$page_name == 'backup_restore' )echo 'active';?>">
			<span class="glow"></span>
            <a class="accordion-toggle  " data-toggle="collapse" href="#settings_submenu" rel="tooltip" data-placement="right" 
                data-original-title="<?php echo get_phrase('bed_ward_help');?>">
                <!--<i class="icon-wrench icon-1x"></i>-->
                <img src="<?php echo base_url();?>template/images/icons/settings.png" />
                <span><?php echo get_phrase('settings');?><i class="icon-caret-down"></i></span>
            </a>
            
            <ul id="settings_submenu" class="collapse <?php if(	$page_name == 'system_settings' 		|| 
																$page_name == 'manage_language' 		|| 
																$page_name == 'backup_restore' )echo 'in';?>">
                <li class="<?php if($page_name == 'system_settings')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/system_settings">
                  		<!--<i class="icon-h-sign"></i>-->
                  		<img src="<?php echo base_url();?>template/images/icons/system_settings.png" />
                    	<?php echo get_phrase('system_settings');?>
                  </a>
                </li>
                <li class="<?php if($page_name == 'manage_language')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/manage_language">
                      	<!--<i class="icon-globe"></i>-->
                    	<img src="<?php echo base_url();?>template/images/icons/language.png" />
						<?php echo get_phrase('manage_language');?>
                  </a>
                </li>
                <li class="<?php if($page_name == 'backup_restore')echo 'active';?>">
                  <a href="<?php echo base_url();?>index.php?admin/backup_restore">
                      	<!--<i class="icon-download-alt"></i>-->
                    	<img src="<?php echo base_url();?>template/images/icons/backup.png" />
						<?php echo get_phrase('backup_restore');?>
                  </a>
                </li>
            </ul>
		</li>
	
		<!------manage own profile--->
		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">
			<span class="glow"></span>
				<a href="<?php echo base_url();?>index.php?admin/manage_profile" rel="tooltip" data-placement="right" 
                	data-original-title="<?php echo get_phrase('profile_help');?>">
					<!--<i class="icon-lock icon-1x"></i>-->
                    <img src="<?php echo base_url();?>template/images/icons/profile.png" />
					<span><?php echo get_phrase('profile');?></span>
				</a>
		</li>
			
	</ul>
	
</div>