<div class="box">
	<div class="box-header">

    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i>
					<?php echo get_phrase('home_works');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="icon-plus"></i>
					<?php echo get_phrase('add_homework');?>
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
                    		<th><div>#</div></th>
                        <th><div><?php echo get_phrase('class');?></div></th>
                    		<th><div><?php echo get_phrase('title');?></div></th>
                    		<th><div><?php echo get_phrase('work');?></div></th>
                    		<th><div><?php echo get_phrase('date');?></div></th>
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($homeworks as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php /*echo $row['hw_cid'];*/ $values = explode(',', $row['hw_cid']);

																$this->db->select('name,name_numeric');
											$this->db->where_in('class_id',$values );
											$query =  $this->db->get_where('class');

											$class_name =  $query->result();

											foreach($class_name as $class_name_view) { echo '<div style="margin-bottom:5px;">'.$class_name_view->name.' - '.$class_name_view->name_numeric.'</div>'; } 					?>
										</td>
							<td><?php echo $row['hw_title'];?></td>
							<td class="span5"><?php echo $row['hw_data'];?></td>
							<td><?php echo date('d M,Y', strtotime($row['hw_date']));?></td>
							<td align="center">
                            	<a data-toggle="modal" href="#modal-form" onclick="modal('edit_homework',<?php echo $row['hw_id'];?>)" class="btn btn-gray btn-small">
                                		<i class="icon-wrench"></i> <?php echo get_phrase('edit');?>
                                </a>
                            	<a data-toggle="modal" href="#modal-delete" onclick="modal_delete('<?php echo base_url();?>index.php?admin/homework/delete/<?php echo $row['hw_id'];?>')" class="btn btn-red btn-small">
                                		<i class="icon-trash"></i> <?php echo get_phrase('delete');?>
                                </a>
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
            <style>
			.cstm-chk-blk label:first-child{
				margin-left: 10px;
			}
			</style>

			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open('admin/homework/create' , array('class' => 'form-horizontal validatable','target'=>'_top'));?>
                        <div class="padded">
                        	<div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('Class *');?></label>
                                    <div class="controls cstm-chk-blk">
                                    <?php foreach($hw_class_data as $hw_class_data_view) { ?>
                                    <label class="checkbox inline span2">
                                        <input type="checkbox" name="hw_class_chk[]" id="sm_class_chk_<?php  echo $hw_class_data_view->class_id  ?>" value="<?php  echo $hw_class_data_view->class_id  ?>"> <?php echo $hw_class_data_view->name . '-' . $hw_class_data_view->name_numeric ?>
                                        </label>
                                    <?php } ?>

                                    </div>
                                </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('title');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="hw_title"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('work');?></label>
                                <div class="controls">
                                    <div class="box closable-chat-box">
                                        <div class="box-content padded">
                                                <div class="chat-message-box">
                                                <textarea name="hw_data" id="hw_data" rows="5" placeholder="<?php echo get_phrase('add_home_work');?>"></textarea>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('date');?></label>
                                <div class="controls">
                                    <input type="text" class="datepicker fill-up" name="create_timestamp"/>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-blue"><?php echo get_phrase('add_home_work');?></button>
                        </div>
                    </form>
                </div>
			</div>
			<!----CREATION FORM ENDS--->

		</div>
	</div>
</div>
