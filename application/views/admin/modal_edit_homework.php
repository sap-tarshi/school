<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php foreach($edit_data as $row):?>
        <?php echo form_open('admin/homework/do_update/'.$row['hw_id'] , array('class' => 'form-horizontal validatable','target'=>'_top'));?>
            <div class="padded">
                        	<div class="control-group">
                                    <label class="control-label"><?php echo get_phrase('Class *');?></label>
                                    <style>
									.cstm-chk-blk label:first-child{
										margin-left: 10px;
									}
									</style>
                                    <div class="controls cstm-chk-blk">
                                    
                                    <?php
									 foreach($hw_class_data as $hw_class_data_view) { ?>
                                    <?php $values = explode(',', $row['hw_cid']); if( in_array($hw_class_data_view->class_id, $values)) { ?> 
								<label class="checkbox inline span2">
                                        <input type="checkbox" name="hw_class_chk[]" id="sm_class_chk_<?php  echo $hw_class_data_view->class_id  ?>" value="<?php  echo $hw_class_data_view->class_id  ?>" checked="checked"> <?php echo $hw_class_data_view->name . '-' . $hw_class_data_view->name_numeric ?>
                                        </label>
                              <?php } else {?>   
                              
                              <label class="checkbox inline span2">
                                        <input type="checkbox" name="hw_class_chk[]" id="sm_class_chk_<?php  echo $hw_class_data_view->class_id  ?>" value="<?php  echo $hw_class_data_view->class_id  ?>"> <?php echo $hw_class_data_view->name . '-' . $hw_class_data_view->name_numeric ?>
                                        </label>
                              
                              <?php } ?>
                                    <?php } ?>
                                       
                                        	
                                           
                                       
                                    </div>
                                </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('title');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="hw_title" value="<?php echo $row['hw_title'] ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('work');?></label>
                                <div class="controls">
                                    <div class="box closable-chat-box">
                                        <div class="box-content padded">
                                                <div class="chat-message-box">
                                                <textarea name="hw_data" id="hw_data" rows="5" placeholder="<?php echo get_phrase('add_home_work');?>"><?php echo $row['hw_data'] ?></textarea>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('date');?></label>
                                <div class="controls">
                                    <input type="text" class="datepicker fill-up" name="create_timestamp" value="<?php echo date('d/m/Y',strtotime($row['hw_date'])) ?>"/>
                                </div>
                            </div>

                        </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-gray"><?php echo get_phrase('edit_home_work');?></button>
            </div>
        </form>
        <?php endforeach;?>
    </div>
</div>