	<div class="container-fluid padded">
		<div class="row-fluid">
			<div class="span30">
				<!-- find me in partials/action_nav_normal -->
				<!--big normal buttons-->
				<div class="action-nav-normal">
					<div class="row-fluid">
						<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/student">
                            <img src="http://www.schoolbookpro.com/tamimages/teacher/user.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('manage_student');?></span>
                            
							</a>
						</div>
						<!--<div class="span2">
							<a href="<?php //echo base_url();?>index.php?teacher/teacher_list">
							<img src="<?php //echo base_url();?>template/images/icons/teacher.png" height="80px" width="80px"/><br />
							<span><?php //echo get_phrase('manage_teacher');?></span>
                            
							</a>
						</div>-->
                        <div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/assignments">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/assignment.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('assignments');?></span>
							</a>
						</div>
						<!--<div class="span2">
							<a href="<?php //echo base_url();?>index.php?teacher/parent_enquiry">
							<img src="<?php //echo base_url();?>template/images/icons/teacher_contact.png" height="80px" width="80px"/><br />
							<span><?php //echo get_phrase('parent_enquiry');?>
                                                        <span class="badge badge-important parent-enquiry-badge">
                                                           <span id="ctl00_lbl_unread"><?php //echo isset($count_unread_message)?$count_unread_message:'0';?></span>
                                                        </span>
                                                        </span>
							</a>
						</div>-->
						<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/subject">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/subject.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('subject');?></span>
							</a>
						</div>
						<!--<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/attendence">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/attendence.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('attendance');?></span>
							</a>
						</div>-->
						<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/dailyattendence">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/placements.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('staff_daily_attendence ');?></span>
							</a>
						</div>
						<!--<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/mymonthlyattendence">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/placements.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('staff_monthly_attendence');?></span>
							</a>
						</div>-->
						<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/marks">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/marks.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('enter_student_marks');?></span>
							</a>
						</div>
                        <div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/book">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/book.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('library');?></span>
							</a>
						</div>
                   					    
						
						 </div><br />
                    <div class="row-fluid">
						<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/class_routine">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/routine.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('class_routine');?></span>
							</a>
						</div>
                        <div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/timetables">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/routine.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('timetables');?></span>
							</a>
						</div>
						<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/transport">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/transport.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('transport');?></span>
							</a>
						</div>
						
						<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/noticeboard">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/noticeboard.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('noticeboard');?></span>
							</a>
						</div>
						<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/placements">
							<img src="http://www.schoolbookpro.com/tamimages/teacher/placements.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('placements');?></span>
							</a>
						</div>
                     
						<div class="span2">
							<a href="<?php echo base_url();?>index.php?teacher/feecollect">
							<img src="<?php echo base_url();?>template/images/icons/payment.png" height="80px" width="80px"/><br />
							<span><?php echo get_phrase('student_fee_details');?></span>
							</a>
						</div>
                    </div>
				</div>
			</div>
            <!---DASHBOARD MENU BAR ENDS HERE-->
       </div><br><br />
       
		<div class="row-fluid">
            <div class="span6">
				<div class="box tam-custom-assignments">
					<div class="box-header">
						<span class="title">
                        	<!--<i class="icon-reorder"></i>-->
                            <?php echo get_phrase('Assignments');?>
                        </span>
					</div>
					<div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">
                    
                    	<?php
						$this->db->where('teacher_id',$this->session->userdata('teacher_id'));
						$assignments	=	$this->db->get('assignments')->result_array();
						if(!empty($assignments))
						{
						foreach($assignments as $row):
						?>
						<div class="box-section news with-icons">
							<div class="avatar">
								<!--<img src="<?php echo base_url();?>template/images/icons/notification.png" height="25px" width="25px" alt="" />-->
                                <i class="icon-list-alt"></i>
							</div>
							<div class="news-time">
								<span><?php echo date('d',$row['create_timestamp']);?></span> <?php echo date('M',$row['create_timestamp']);?>
							</div>
							<div class="news-content">
								<div class="news-title">
									<?php echo $row['assignment_title'];?>
								</div>
								<div class="news-text">
									 <?php echo $row['assignment'];?>
									<?php if(!empty($row['assignment_attachment'])) : ?>Attachment : <a href="<?php echo 'uploads/assignment_attachment/'.$row['assignment_attachment'] ?>">Download Attachment</a><?php endif; ?>
								</div>
							</div>
						</div>
						<?php
						endforeach;
						}
						else
						{
							echo '<center><div class="box-section news with-icons">No Assignments.</div></center>';
						}?>
					</div>
				</div>
			</div>
            <!---CALENDAR ENDS-->
            
            <!---TO DO LIST STARTS-->
			<div class="span6">
				<div class="box tam-custom-noticeboard">
					<div class="box-header">
						<span class="title">
                        	<!--<i class="icon-reorder"></i>-->
                            <?php echo get_phrase('noticeboard');?>
                        </span>
					</div>
					<div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">
                    
                    	<?php 
						$this->db->order_by('create_timestamp',desc);
						$notices	=	$this->db->get('noticeboard')->result_array();
						foreach($notices as $row):
						?>
						<div class="box-section news with-icons">
							<div class="avatar">
								<!--<img src="<?php echo base_url();?>template/images/icons/notification.png" height="25px" width="25px" alt="" />-->
                                <i class="icon-bullhorn"></i>
							</div>
							<div class="news-time">
								<span><?php echo date('d',$row['create_timestamp']);?></span> <?php echo date('M',$row['create_timestamp']);?>
							</div>
							<div class="news-content">
								<div class="news-title">
									<?php echo $row['notice_title'];?>
								</div>
								<div class="news-text">
									 <?php echo $row['notice'];?>
								</div>
							</div>
						</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
            <!---TO DO LIST ENDS-->
       </div>
       
       <div class="row-fluid">
            
           
            
            <!---TO DO LIST STARTS-->
			<div class="span6">
				<div class="box tam-custom-noticeboard">
					<div class="box-header">
						<span class="title">
                        	<!--<i class="icon-reorder"></i>-->
                            <?php echo get_phrase('staff_noticeboard');?>
                        </span>
					</div>
					<div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">
                    
                    	<?php 
						$login_type = $this->session->userdata('login_type');
                        $user_id = $this->session->userdata($login_type.'_id');
						$dep_id = $this->db->get_where('teacher', array('teacher_id' => $user_id))->row()->employee_department_id;
						$this->db->where('notice_department',$dep_id);
						$this->db->order_by('create_timestamp');
						$notices	=	$this->db->get('staffnotice')->result_array();
						if(!empty($notices)) {
						foreach($notices as $row):
						?>
						<div class="box-section news with-icons">
							<div class="avatar">
								<!--<img src="<?php echo base_url();?>template/images/icons/notification.png" height="25px" width="25px" alt="" />-->
                                <i class="icon-bullhorn"></i>
							</div>
							<div class="news-time">
								<span><?php echo date('d',$row['create_timestamp']);?></span> <?php echo date('M',$row['create_timestamp']);?>
							</div>
							<div class="news-content">
								<div class="news-title">
									<?php echo $row['notice_title'];?>
								</div>
								<div class="news-text">
									 <?php echo $row['notice'];?>
								</div>
							</div>
						</div>
						<?php endforeach; } else { 
						
						echo '<center><div class="box-section news with-icons">No Notices Found.</div></center>';
						
						 }?>
					</div>
				</div>
			</div>
            <!---TO DO LIST ENDS-->
       </div>
   </div>
   
  
  <script>
  $(document).ready(function() {

    // page is now ready, initialize the calendar...

    $("#calendar2").fullCalendar({
            header: {
                left: "prev,next",
                center: "title",
                right: "month,agendaWeek,agendaDay"
            },
            editable: 0,
            droppable: 0,
            /*drop: function (e, t) {
                var n, r;
                r = $(this).data("eventObject"), n = $.extend({}, r), n.start = e, n.allDay = t, $("#calendar").fullCalendar("renderEvent", n, !0);
                if ($("#drop-remove").is(":checked")) return $(this).remove()
            },*/
            events: [
			<?php 
			$notices	=	$this->db->get('noticeboard')->result_array();
			foreach($notices as $row):
			?>
			{
                title: "<?php echo $row['notice_title'];?>",
                start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
				end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>) 
            },
			<?php 
			endforeach
			?>
			]
        })

});
  </script>