<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php foreach($edit_data as $row):?>
        <?php echo form_open('admin/classnoticeboard/staff_notice_do_update/'.$row['notice_id'] , array('class' => 'form-horizontal validatable','target'=>'_top'));?>
            <div class="padded">
				
				
				<div class="control-group">
                    <label class="control-label"><?php echo get_phrase('department');?></label>
                    <div class="controls">
                       <!-- <input type="text" class="validate[required]" name="notice_class" value="<?php echo $row['notice_class'];?>"/>-->
                        
                        <select class="uniform validate[required]" name="notice_department"/>
										<option value="">-- Select Class --</option>
										<?php
                                            $departments = $this->db->get('departments')->result_array();

                                            foreach ($departments as $departmentsview):
                                        ?>

                                            <option value="<?php echo $departmentsview['department_id']; ?>" <?php if($departmentsview['department_id'] == $row['notice_department']  ) echo "selected" ?>>

                                               <?php echo $departmentsview['department_name']; ?>

                                            </option>

                                            <?php  endforeach; ?>
									</select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo get_phrase('title');?></label>
                    <div class="controls">
                        <input type="text" class="validate[required]" name="notice_title" value="<?php echo $row['notice_title'];?>"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo get_phrase('notice');?></label>
                    <div class="controls">
                        <div class="box closable-chat-box">
                            <div class="box-content padded">
                                    <div class="chat-message-box">
                                    <textarea name="notice" id="ttt" rows="5" placeholder="<?php echo get_phrase('add_notice');?>"><?php echo $row['notice'];?></textarea>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label"><?php echo get_phrase('date');?></label>
                    <div class="controls">
                        <input type="text" class="datepicker fill-up" name="create_timestamp" value="<?php echo date('m/d/Y',$row['create_timestamp']);?>"/>
                    </div>
                </div>

            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-gray"><?php echo get_phrase('edit_staff_noticeboard');?></button>
            </div>
        </form>
        <?php endforeach;?>
    </div>
</div>