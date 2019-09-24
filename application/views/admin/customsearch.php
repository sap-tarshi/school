<div class="row-fluid">
	<div class="span6 offset3">
    	<?php echo form_open('admin/customsearch/search/', array('class' => 'form-inline validatable', 'enctype' => 'multipart/form-data')); ?>
        <select name='search_type' id='search_type' class="span6">
        <option value="Admission_Number" <?php if($search_type =='Admission_Number') echo 'selected'  ?>>Search By Admission Number</option>
        <option value="Student_Name" <?php if($search_type =='Student_Name') echo 'selected'  ?>>Search By Name</option>
        </select>
        <input type="text" class="validate[required] span4" placeholder="" name='search_data' id='search_data' value="<?php echo ($search_data ? $search_data : '') ?>">
        
        <button type="submit" class="btn btn-gray">Search</button>
        <?php echo form_close() ?>
    </div>
</div>
<style>
.mt20{
	margin-top:20px;
}
.mb10{
	margin-bottom:10px;
}
.p10{
	padding:10px;
}
.fnt-wc{
	color:#fff;
}
.fnt-16s{
	font-size:16px;
}
.txt-tfu{
	text-transform:uppercase;
}
</style>
  <?php 
   if(!empty($student_data)){
	   foreach($student_data as $student_data_view) :
	    ?>
	   <div class="row-fluid mt20">
  		<div class="span6 offset3">
        	<div class="bg-light-blue p10 fnt-16s fnt-wc txt-tfu mb10 text-center">Details of <?php echo str_replace('_', ' ',$search_type); ?> -  <?php echo  ($search_type =='Admission_Number' ?  $search_data : ucfirst($student_data_view['name']) ); ?></div>
        </div>
       </div>
	   <div class="row-fluid mt20">
  		<div class="span4">
        <div class="row-fluid">
        <div class="span12 text-center mb10">
         <div class="thumbnail">
         <img width="350" style="max-height:200px;" src="<?php echo $this->crud_model->get_image_url('student', $student_data_view['student_id']); ?>" />
         </div>
         </div>
         
         <div class="span12">
        	<div class="bg-light-blue p10 fnt-16s fnt-wc txt-tfu mb10">Qatar Info</div>
            	<div class="">
                		<div class="row-fluid">
                        	<div class="span4">
                            Student Qatar ID
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['student_qatar_id'] ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            Father Qatar ID
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['father_qatar_id'] ?>
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                        	<div class="span4">
                            Mother Qatar ID
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['mother_qatar_id'] ?>
                            </div>
                        </div>
                </div>
        </div>
        
        <div class="span12">
        	<div class="bg-deep-green p10 fnt-16s fnt-wc txt-tfu mb10">Parent Login Info</div>
            	<div class="">
                		<div class="row-fluid">
                        	<div class="span4">
                            User Name
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['parent_email'] ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                             Password 
                            </div>
                            <div class="span8">
                            <div class="row-fluid">
                            	<div class="span10"><div id='pwd'><?php echo $student_data_view['parent_password'] ?></div></div>
                                
</div>
                            </div>
                        </div>
                        
                </div>
        </div>
         
         </div>
        </div>
        <div class="span8">
        <div class="row-fluid">
        <div class="span6">
        	<div class="bg-deep-green p10 fnt-16s fnt-wc txt-tfu mb10">School Info</div>
            	<div class="">
                		<div class="row-fluid">
                        	<div class="span4">
                            Admission Number
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['admission_number'] ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            Roll Number
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['roll'] ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            	Class / Section
                            </div>
                            <div class="span8">
                                <?php echo $student_data_view['cname'].' - '.$student_data_view['name_numeric'] ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            	Date Of Joining
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['doj'] ?>
                            </div>
                        </div>
                </div>
        </div>
        <div class="span6">
        	<div class="bg-deep-terques p10 fnt-16s fnt-wc txt-tfu mb10">Personal Info</div>
            	<div class="">
                		<div class="row-fluid">
                        	<div class="span4">
                            Name
                            </div>
                            <div class="span8">
                            	<?php echo ucfirst($student_data_view['name']) ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            	Date Of Birth
                            </div>
                            <div class="span8">
                                <?php echo $student_data_view['birthday'] ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            	Gender
                            </div>
                            <div class="span8">
                            	 <?php echo ucfirst($student_data_view['sex']) ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            	Blood Group
                            </div>
                            <div class="span8">
                            	 <?php echo strtoupper($student_data_view['blood_group']) ?>
                            </div>
                        </div>
                </div>
        </div>
        </div>
        
        <div class="row-fluid">
        <div class="span6">
        	<div class="bg-light-purple p10 fnt-16s fnt-wc txt-tfu mb10">Parents Info</div>
            	<div class="">
                		<div class="row-fluid">
                        	<div class="span4">
                            Father Name
                            </div>
                            <div class="span8">
                            	<?php echo ucfirst($student_data_view['father_name']) ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            Mother Name
                            </div>
                            <div class="span8">
                            	<?php echo ucfirst($student_data_view['mother_name']) ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            	Parent Phone(s)
                            </div>
                            <div class="span8">
                                <?php echo $student_data_view['parent_phone1']; echo ($student_data_view['parent_phone2'] ? ' / '.$student_data_view['parent_phone2'] : '') ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            	Parent Email
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['student_parent_email'] ?>
                            </div>
                        </div>
                </div>
        </div>
        <!-- <div class="span6">
        	<div class="bg-block-yellow p10 fnt-16s fnt-wc txt-tfu mb10">Passport Info</div>
            	<div class="">
                		<div class="row-fluid">
                        	<div class="span4">
                            Passport Number
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['passport_number'] ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            	Date Of Issue
                            </div>
                            <div class="span8">
                                <?php echo $student_data_view['date_of_issue'] ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            	Date of Expiry
                            </div>
                            <div class="span8">
                            	 <?php echo $student_data_view['date_of_expiry'] ?>
                            </div>
                        </div>
                        
                </div>
        </div> -->
        <div class="span6">
        	<div class="bg-deep-thistle p10 fnt-16s fnt-wc txt-tfu mb10">Transport Info</div>
            	<div class="">
                		<div class="row-fluid">
                        	<div class="span4">
                            Bus No
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['route_name'] ?>
                            </div>
                        </div>
                        <!--<div class="row-fluid">
                        	<div class="span4">
                            Transport Pickup Point
                            </div>
                            <div class="span8">
                                <?php //echo $student_data_view['ppoint'] ?>
                            </div>
                        </div>-->
                        
                </div>
        </div>



        
        </div>
        
        <div class="row-fluid">
        
        <div class="span6">
         <div class="bg-deep-red p10 fnt-16s fnt-wc txt-tfu mb10">Address Info</div>
         	<div class="">
                		<div class="row-fluid">
                        	<div class="span4">
                            Prensent Address
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['address'] ?>
                            </div>
                        </div>
                        <div class="row-fluid">
                        	<div class="span4">
                            Permanent Address
                            </div>
                            <div class="span8">
                            	<?php echo $student_data_view['permanent_address'] ?>
                            </div>
                        </div>
                        
                        
                </div>
         </div>
        
        
        
        </div>
        </div>
        
  </div>
	  
  <?php
  endforeach;
   } else { ?>
   
   
   <div class="row-fluid mt20">
  		<div class="span6 offset3">
        	<div class="bg-deep-red p10 fnt-16s fnt-wc txt-tfu mb10 text-center">No records found </div>
        </div>
       </div>
   
   <?php
   }
  ?>
  
  
  