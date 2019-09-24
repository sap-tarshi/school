



<?php if($message) { echo "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $message . "</div>"; } ?>
<?php if($success_message) { echo "<div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $success_message . "</div>"; } ?>
<style>
   
.table th { text-align:center; }
.table td { text-align:center; }
.table a:hover { text-decoration: none; }
.cl_wday { text-align: center; font-weight:bold; }
.cl_equal { width: 14%; }
.day { width: 14%; }
.day_num { text-align:left; cursor:pointer; margin: -8px; padding:8px; } 
.day_num:hover { background:#F5F5F5; }
.matter .content { width: 100%;text-align:left; color: #2FA4E7; margin-top:10px; }
.highlight { color: #0088CC; font-weight:bold; }
</style>

<!--
<div class="page-head">
  <h2 class="pull-left"> <?php echo $page_title; ?> <span class="page-meta"><?php echo $this->lang->line("calendar_line"); ?></span> </h2>
</div>
<div class="clearfix"  ></div>
-->

   
  <div  style="width:80%;float:right;margin-right:25px;position:relative;top:-450px;">

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
  

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="payModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line("add_event"); ?>  <span id="selected_date"></span></h4>
      </div>
      
        
        <div class="modal-body">
        <div class="form-horizontal">
        <div class="control-group" style="margin-top:20px;">
        <label class="control-label" for="inputEmail" style="text-align:right">Category</label>
        <div class="controls">
        <select name="cid" id="cid" class="uniform validate[required]" style="width:100%;">
									<option value="">-- Select Category --</option>
                                    
                                    <?php foreach($event_category as $row):?>
                                    <option value="<?php echo $row['eventcategory_id'];?>"><?php echo $row['eventcategory_name'];?></option>
                                    
                                     <?php endforeach;?>
                                    </select>
        </div>
        </div>
        </div>
         <p style="margin: 33px 35px 24px;"> Add/Modify Event:</p>
<p><?php echo $this->lang->line("add_modify_event"); ?></p>
<p><?php /* echo form_textarea('event', '', 'class="input-block-level" style="height:100px;" id="event_data_input"'); */  ?>
<textarea name="event" class="form-control" style="height:100px;margin-left: 58px;
width: 438px;" id="event_data_input"></textarea>
<input type="hidden" name="dayNum" id="dayNum" value="" /></p>
</div>
        
       
   
   
  
   <div class="modal-footer">
<span id="delb" class="pull-left" style="min-width:70px; max-width:150px; text-align:left; display:none;">
<input type="submit" class="btn btn-danger" onclick="Show_Div(Div_1)"  id="del" value="Delete"><?php echo $this->lang->line("delete"); ?></span>

<button class="btn btn-green" data-dismiss="modal" aria-hidden="true" style=""><?php echo $this->lang->line("close"); ?>Close</button>
<input type="submit" name="add" value="Add" onclick="Show_Div(Div_1)" class="btn btn-green" id="ok" data-loading-text="" style=" 
width: 49px;"><?php echo $this->lang->line("adding"); ?>
<div id="Div_1"  style="width:500px;margin:0px auto;text-align:center;display: none;position:relative;top:-22px;">Please Wait...Your request is processing...<i class="icon-spinner icon-spin icon-large"></i></div>
</div>
        
     
        
        
        
</div>
</div>
    </div>




  <script type="text/javascript">
        function Show_Div(Div_id) {
            if (false == $(Div_id).is(':visible')) {
                $(Div_id).show(250);
            }
            else {
                $(Div_id).hide(250);
            }
        }
    </script>


        
          <style>
          #custom-footer-id,h3{display:none;}
        
         .main-content{height:500px; }
            
        </style>