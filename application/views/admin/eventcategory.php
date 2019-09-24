<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('subject_list');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php echo get_phrase('add_category');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------->
        
	</div>
	<div class="box-content padded">
		<div class="tab-content">            
            <!----TABLE LISTING STARTS--->
            <div class="tab-pane box active" id="list">
				
                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">
                	<thead>
                		<tr>
                    		<th><div><?php echo get_phrase('Name');?></div></th>
                    		<th><div><?php echo get_phrase('Background / Font Color');?></div></th>
                            <th><div><?php echo get_phrase('Status');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($event_category as $row):?>
                        <tr>
							<td><?php echo $row['eventcategory_name'];?></td>
							<td bgcolor="#<?php echo $row['eventcategory_bg'];?>" style="color:#<?php echo $row['eventcategory_fc'];?>"><?php echo $row['eventcategory_bg'];?> / <?php echo $row['eventcategory_fc'];?></td>
                            <td><?php $sts='';  if( ($row['eventcategory_status'] == 1) ? $sts = 'Active' : $sts ='In-Active' ); echo $sts;?></td>
							<td align="center">
                            	<a data-toggle="modal" href="#modal-form" onclick="modal('edit_eventcategory',<?php echo $row['eventcategory_id'];?>)" class="btn btn-gray btn-small">
                                		<i class="icon-wrench"></i> <?php echo get_phrase('edit');?>
                                </a>
                            	<a data-toggle="modal" href="#modal-delete" onclick="modal_delete('<?php echo base_url();?>index.php?admin/eventcategory/delete/<?php echo $row['eventcategory_id'];?>')" class="btn btn-red btn-small">
                                		<i class="icon-trash"></i> <?php echo get_phrase('delete');?>
                                </a>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
            
            
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open('admin/eventcategory/create' , array('class' => 'form-horizontal validatable','target'=>'_top'));?>
                        <div class="padded">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="name" placeholder="Category Name"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('background / Font Colors');?></label>
                                <div class="controls">
                                <style>
								.picker {
									width:100px;
									height:32px;
									border-right:20px solid green;
									line-height:20px;
								}
								</style>
                                   <input type="text" class="picker validate[required]" id="ec_bg" name="ec_bg"></input>
                                   <input type="text" class="picker validate[required]" id="ec_fc" name="ec_fc"></input>
                                   <script src="<?php echo base_url() ?>template/plugins/colorpicker/js/colpick.js"></script>
                                   <link href="<?php echo base_url() ?>template/plugins/colorpicker/css/colpick.css" rel="stylesheet" />
                                   <script>
								   $('.picker').colpick({
										layout:'hex',
										submit:0,
										colorScheme:'dark',
										onChange:function(hsb,hex,rgb,el,bySetColor) {
											$(el).css('border-color','#'+hex);
											// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
											if(!bySetColor) $(el).val(hex);
										}
									}).keyup(function(){
										$(this).colpickSetColor(this.value);
									});
								   </script>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('status');?></label>
                                <div class="controls">
                                    <select name="status" class="uniform validate[required]" style="width:100%;">
									<option value="">-- Select Status --</option>
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_category');?></button>
                        </div>
                    </form>                
                </div>                
			</div>
			<!----CREATION FORM ENDS--->
            
		</div>
	</div>
</div>