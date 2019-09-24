<div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 
					<?php echo get_phrase('home_works');?>
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
                    		
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($homeworks as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                            <td><?php /*echo $row['hw_cid'];*/ 
							
							$this->db->select('name,name_numeric');
		$this->db->where_in('class_id',$class_id);
		$query =  $this->db->get_where('class');
							
		$class_name =  $query->result();
		
		foreach($class_name as $class_name_view) { echo '<div style="margin-bottom:5px;">'.$class_name_view->name.' - '.$class_name_view->name_numeric.'</div>'; } 					?></td>
							<td><?php echo $row['hw_title'];?></td>
							<td class="span5"><?php echo $row['hw_data'];?></td>
							<td><?php echo date('d M,Y', strtotime($row['hw_date']));?></td>
							
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
           
            
			
		</div>
	</div>
</div>