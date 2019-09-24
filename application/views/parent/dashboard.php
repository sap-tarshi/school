<?php //print_r($ad_data); ?>	<div class="container-fluid padded">
		
        <div class="row-fluid">
			<div class="span6 offset3">
            	
                <div style="margin-bottom:20px;">
                
                	<?php if(!empty($ad_data)) {  extract($ad_data); $ad_flag = $present_flag; ?>
                    
                    <?php if($ad_flag == 'P') { ?>
                	<div class="alert alert-success" role="alert">your child is present at school today</div>
                    
                    <?php } else if($ad_flag == 'A') { ?>
                    
                    <div class="alert alert-warning" role="alert">your child is absent at school today <?php if($reason_for_absent == '') { ?><a href="#tamadmodel" role="button" class="" data-toggle="modal">please submit reason here </a> <?php } else { echo "Reason : ".$reason_for_absent; } ?></div>
                    
                    
                    <!-- Modal -->
                        <div id="tamadmodel" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="tamadmodelLabel" aria-hidden="true">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">Modal header</h3>
                        </div>
                        <div class="modal-body">
                       		    <form class="form-horizontal" action="<?php echo base_url() ?>index.php?parents/adreason" method="post" >
                                    <div class="control-group">
                                    <label class="control-label" for="ReasonforAbsent">Reason for Absent</label>
                                    <div class="controls">
                                    <input type="text" id="ReasonforAbsent" name="ReasonforAbsent" placeholder="Reason for Absent">
                                    </div>
                                    </div>
                                    <div class="control-group">
                                    <div class="controls">
                                    <input type="hidden" value="<?php echo $daily_attendence_id ?>" name="ad_id" id="ad_id"  />
                                    <button type="submit" class="btn">Submit</button>
                                    </div>
                                    </div>
                                    </form>
                        </div>
                        <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                        </div>
                        </div>
                    
                    <?php } ?>
                    <?php } else { ?>
                    <div class="alert alert-info" role="alert">records not updated please check later</div>
                    <?php } ?>
                </div>
               
            
            </div>
        </div>
			
		<div class="row-fluid">

<div id="cstm-dboard-main-blk">
<a href="<?php echo base_url();?>index.php?parents/marks">
                            	 <div class="cstm-dboard-blck bg-block-orange">
                                	<div><i class="fa fa-flag-o fa-4x"></i></div>
                                <div><?php echo get_phrase('marks_view');?></div>
                                </div>
                                </a>
                                   <a href="<?php echo base_url();?>index.php?parents/dailyattendence">
                            	<div class="cstm-dboard-blck bg-light-blue">
                                	<div><i class="fa fa-check-square-o fa-4x"></i></div>
                                	<div><?php echo get_phrase('daily_attendence');?></div>
                                </div>
                           		</a>
                           		 <a href="<?php echo base_url();?>index.php?parents/view_mark_chart">
                            	<div class="cstm-dboard-blck bg-light-purple">
                            	<div><i class="fa fa-bar-chart fa-4x"></i></div>
                                	<div><?php echo get_phrase('marks_graph');?></div>
                                </div>
                           		</a>
                           		<a href="<?php echo base_url();?>index.php?parents/feecollect">
                                <div class="cstm-dboard-blck bg-deep-terques">
                                	<div><i class="fa fa-calendar fa-4x"></i></div>
                                	<div><?php echo get_phrase('payments_list');?></div>
                                </div>
                            	</a>
                            	    <a href="<?php echo base_url();?>index.php?parents/transport">
                                <div class="cstm-dboard-blck bg-block-orange">
                                	<div><i class="fa fa-bus fa-4x"></i></div>
                                	<div><?php echo get_phrase('transport');?></div>
                                </div>
                                </a>
                            
                          		  <a href="<?php echo base_url();?>index.php?parents/subject">
                                 <div class="cstm-dboard-blck bg-deep-green">
                                	<div><i class="fa fa-book fa-4x"></i></div>
                                	<div><?php echo get_phrase('subjects');?></div>
                                </div>
                                </a>


                          		<a href="<?php echo base_url();?>index.php?parents/class_routine">
                                <div class="cstm-dboard-blck bg-block-yellow">
                                	<div><i class="fa fa-calendar fa-4x"></i></div>
                                	<div><?php echo get_phrase('class_routine');?></div>
                                </div>
                            	</a>
                                 <a href="<?php echo base_url();?>index.php?parents/timetables">
                            	<div class="cstm-dboard-blck bg-light-blue">
                                	<div><i class="fa fa-clock-o fa-4x"></i></div>
                                	<div><?php echo get_phrase('timetables');?></div>
                                </div>
                           		</a>
                           		<a href="<?php echo base_url();?>index.php?parents/noticeboard">
                            	<div class="cstm-dboard-blck bg-deep-red">
                                	<div><i class="fa fa-clipboard fa-4x"></i></div>
                                	<div><?php echo get_phrase('noticeboard');?></div>
                                </div>
                                </a>
                                 <a href="<?php echo base_url();?>index.php?parents/assignments">
                            	<div class="cstm-dboard-blck bg-deep-terques">
                                	<div><i class="fa fa-envelope fa-4x"></i></div>
                                	<div><?php echo get_phrase('assignments');?></div>
                                </div>
                          		</a>
                          		<a href="<?php echo base_url();?>index.php?parents/dormitory">
                            	<div class="cstm-dboard-blck bg-deep-thistle">
                                	<div><i class="fa fa-building-o fa-4x"></i></div>
                                		<div><?php echo get_phrase('dormitory');?></div>
                                </div>
                                </a>

</div>


			<div class="span30">
				<!-- find me in partials/action_nav_normal -->
				<!--big normal buttons-->
				</div>
       
		<div class="row-fluid">
            
          
            
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
            
            <div class="span6">
				<div class="box tam-custom-noticeboard">
					<div class="box-header">
						<span class="title">
                        	<!--<i class="icon-reorder"></i>-->
                            <?php echo get_phrase('calendar');?>
                        </span>
					</div>
					<div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">
                    
                    	<style>

</style>
<div id="cstm-ec-blk">
	<?php foreach($event_category as $row):?>
    			<div style="background-color:#<?php echo $row['eventcategory_bg'];?>; color:#<?php echo $row['eventcategory_fc'];?>"><?php echo $row['eventcategory_name'];?></div>
     <?php endforeach;?>
</div>

<div class="clearfix"></div>
	<div id="cstm-cal-block">
    <?php echo $calender; ?>
    </div>

  </div>
					</div>
				</div>
                
                  <!---CALENDAR ENDS-->
       </div>
       <div class="row-fluid">
            
            
            <!---TO DO LIST STARTS-->
			<div class="span6">
				<div class="box tam-custom-noticeboard">
					<div class="box-header">
						<span class="title">
                        	<!--<i class="icon-reorder"></i>-->
                            <?php echo get_phrase('class_noticeboard');?>
                        </span>
					</div>
					<div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">
                    
                    	<?php 
						
						$login_type = $this->session->userdata('login_type');
                        $user_id = $this->session->userdata($login_type.'_id');
						$class_id = $this->db->get_where('student', array('student_id' => $user_id))->row()->class_id;
						$this->db->where('notice_class',$class_id);
						
						$this->db->order_by('create_timestamp');
						$notices	=	$this->db->get('classnotice')->result_array();
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