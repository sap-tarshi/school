<link href="<?php echo base_url(); ?>template/css/jquery-anyslider.css" media="screen" rel="stylesheet" type="text/css" />
<style>
                    div.uploader {
                        width: auto !important;
                    }
                    .gallery_images {
                        width: 23%;
                        float: left;
                        margin: 5px;
                        -moz-box-shadow: 0 0 5px #888;
                        -webkit-box-shadow: 0 0 5px#888;
                        box-shadow: 0 0 5px #888;
                    }
                    .slider2 {
                        height: 570px !important;
                    }
                    .as-prev-arrow, .as-next-arrow {
                        top: 280px !important;
                    }
                </style>
<div class="box">
	<div class="box-content padded">
    
    
    	 <!------CONTROL TABS START------->
                                        
                                        <!------CONTROL TABS END------->
                                        
                                        <div class="tab-content">
                                            <!----TABLE LISTING STARTS--->

                                            <div class="tab-pane box active" id="list">

                                              

                                                <div class="box">
                                                    <div class="box-content padded"><!----CREATION FORM ENDS--->





                                                        <!-- portfolio 
                                                                      ================================================== -->
                                                        <div id="four-columns" class="grid-container">
                                                            <div class="control-group">
                                                                <label class="control-label">Category</label>
                                                                <div class="controls">
                                                                    <select name="category" class="uniform" id="gallery_category_filter"  class="validate[required]">
                                                                        <option value="">All Category</option>
                                                                        <?php foreach ($records as $row): ?>
                                                                            <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="slider slider2">
                                                                <div class="slider-parent">
                                                                    <?php
                                                                    $key = 1;
                                                                    foreach (array_merge($records_gall, $records_gall,$records_gall,$records_gall) as $record) {
                                                                        ?>
                                                                        <div class="gallery_images gallery_images_<?php echo $record['screen_cat']; ?>">
<!--                                                                            <div class="close-btn"></div>-->
                                                                            <div style="overflow: hidden; height: 180px;">
                                                                                <a class="zoom" href="<?php echo base_url() . $record['screen_image']; ?>">
                                                                                    <img src="<?php echo base_url() . $record['screen_image']; ?>" alt="">
                                                                                </a>
                                                                            </div>
                                                                        </div>    
                                                                        <?php
                                                                        if ($key % 12 == 0) {
                                                                            echo '</div><div class="slider-parent">';
                                                                        }
                                                                        $key++;
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End portfolio -->



                                                    </div>
                                                </div>
                                            </div>

                                            <!----TABLE LISTING ENDS--->


                                            

                                        </div>
        
        
        
        
        
        
		
	</div>
</div>


<script>

                    function readURL(input) {

                        if (input.files && input.files[0]) {

                            var reader = new FileReader();



                            reader.onload = function(e) {

                                $('#blah').attr('src', e.target.result);

                            }



                            reader.readAsDataURL(input.files[0]);

                        }

                    }



                    $("#imgInp").change(function() {

                        readURL(this);

                    });
                    function addMore() {
                        $("#clone-div").clone().appendTo("#clonediv").append("<div onclick='$(this).parent().remove();' style='left:456px;cursor:pointer;position: absolute;'>Remove</div>");
                        $(this).append("Helo");
                    }
                    $(function() {
                        $('#gallery_category_filter').change(function() {
                            var url = '<?php echo base_url(); ?>index.php?parent/gallerys/';
                            window.location.href=url+$(this).val();
                        });

                        $('.slider2').anyslider({
                            easing: 'easeInOutBack',
                            interval: 0,
                            keyboard: false,
                            speed: 1500
                        });
                    })
                </script>
                
                <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.anyslider.js"></script>