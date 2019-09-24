<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php foreach($edit_data as $row):?>
        <?php echo form_open('admin/eventcategory/do_update/'.$row['eventcategory_id'] , array('class' => 'form-horizontal validatable','target'=>'_top'));?>
            <div class="padded">
                            <div class="control-group">
                                <label class="control-label"><?php echo get_phrase('name');?></label>
                                <div class="controls">
                                    <input type="text" class="validate[required]" name="name" placeholder="Category Name" value="<?php echo $row['eventcategory_name'];?>"/>
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
                                   <input type="text" class="picker validate[required]" id="ec_bg" name="ec_bg" value="<?php echo $row['eventcategory_bg'];?>"></input>
                                   <input type="text" class="picker validate[required]" id="ec_fc" name="ec_fc" value="<?php echo $row['eventcategory_fc'];?>"></input>
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
                                    <option value="1" <?php if($row['eventcategory_status'] == 1)echo 'selected';?>>Active</option>
                                    <option value="0" <?php if($row['eventcategory_status'] == 0)echo 'selected';?>>In-Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-gray"><?php echo get_phrase('edit_category');?></button>
            </div>
        </form>
        <?php endforeach;?>
    </div>
</div>