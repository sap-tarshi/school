<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php //print_r($result[0]->ebooks_category_id);exit; ?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
                <link href="<?php echo base_url(); ?>template/css/jquery-anyslider.css" media="screen" rel="stylesheet" type="text/css" />
                <link href="<?php echo base_url(); ?>template/css/dropzone.css" media="screen" rel="stylesheet" type="text/css" />
                <script type="text/javascript" src="<?php echo base_url(); ?>template/install/jquery.min.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>template/js/dropzone.js"></script>
                <style>
                    div.uploader {
                        width: auto !important;
                    }
                    .gallery_images {
                        position: relative;
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
                    .close-btn {
                        top: -10px;
                        right: -10px;
                        cursor: pointer;
                    }
                    .uploader {
                        display: none !important;
                    }
                    .dz-default.dz-message {
                        padding: 50px;
                        border: 1px solid;
                    }
                    form.dropzone {
                        border: none !important;
                    }
                </style>
                <?php echo $this->dynamic_load->load_files('header'); ?>

                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
                        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
                <script>
                    var urls = '<?php
                echo json_encode(
                        array('base_url' => base_url(),
                            'backend_url' => backend_view(),
                            'assets' => array('base' => asset_url(),
                                'js' => asset_url('js'),
                                'css' => asset_url('css'),
                                'img' => asset_url('img')
                            )
                        )
                )
                ?>';
                </script>
                <?php include 'includes.php'; ?>
                <title><?php echo $page_title; ?> | <?php echo $system_title; ?></title>


                </head>


                <body>
                    <div id="main_body">
                        <?php include 'header.php'; ?>
                        <?php include 'navigation.php'; ?>
                        <div class="main-content">
                            <?php include 'page_info.php'; ?>
                            <div class="container-fluid padded">
                                <div class="box">
                                    <div class="box-header">

                                        <!------CONTROL TABS START------->
                                        <ul class="nav nav-tabs nav-tabs-left">
                                            <li class="active">
                                                <a href="#list" data-toggle="tab"><i class="icon-align-justify"></i>Gallery</a>
                                            </li>
                                            <li>
                                                <a href="#add" data-toggle="tab"><i class="icon-plus"></i>Add Images to Gallery</a>
                                            </li>
                                            <li>
                                                <a href="#add_category" data-toggle="tab"><i class="icon-plus"></i>Add Category</a>
                                            </li>
                                        </ul>
                                        <!------CONTROL TABS END------->

                                    </div>
                                    <div class="box-content padded">
                                        <div class="tab-content">
                                            <!----TABLE LISTING STARTS--->

                                            <div class="tab-pane box active" id="list">

                                                <link href="<?php echo base_url(); ?>template/cs1/css/style.css" media="screen" rel="stylesheet" type="text/css" />
                                                <link href="<?php echo base_url(); ?>template/cs1/css/gallery.css" media="screen" rel="stylesheet" type="text/css" />
                                                <link href="<?php echo base_url(); ?>template/cs1/css/magnific-popup.css" media="screen" rel="stylesheet" type="text/css" />


                                                <script src="<?php echo base_url(); ?>template/js1/js/jquery.isotope.min.js" type="text/javascript"></script>
                                                <script src="<?php echo base_url(); ?>template/js1/js/script.js" type="text/javascript"></script>
                                                <script src="<?php echo base_url(); ?>template/js1/js/jquery.magnific-popup.min.js?v=1.0.0"></script>

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
                                                                            <option<?php echo ($row['category_id'] == $cat_id) ? ' selected' : ''; ?> value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="slider slider2">
                                                                <div class="slider-parent">
                                                                    <?php
                                                                    $key = 1;
                                                                    foreach (array_merge($records_gall) as $record) {
                                                                        ?>
                                                                        <div data-id="<?php echo $record['screen_id']; ?>" class="gallery_images gallery_images_<?php echo $record['screen_cat']; ?>">
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


                                            <!----CREATION FORM STARTS---->
                                            <div class="tab-pane box" id="add" style="padding: 5px">
                                                <div class="box-content">
                                                    <!-- <?php echo form_open('admin/gallerys', array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data', 'target' => '_top')); ?>-->
                                                    <!-- <form method="post" enctype="multipart/form-data" action="" target="_top" class="form-horizontal validatable" > -->
                                                    <div class="padded">
                                                        <form action="<?php echo base_url(); ?>index.php?admin/gallerys" class="dropzone" id="my-awesome-dropzone">
                                                            <div class="control-group">
                                                                <label class="control-label">Category</label>
                                                                <div class="controls">
                                                                    <select name="category" class="uniform"  class="validate[required]">
<!--                                                                        <option>--- Select Category --- </option>-->
                                                                        <?php foreach ($records as $row): ?>
                                                                            <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label">Choose image</label>
                                                                <div class="controls">
                                                                    <input type="file" name="file" />
                                                                </div>
                                                            </div>

                                                            <div id="clonediv"></div>
                                                        </form>
                                                    </div>
                                                    <!-- <div class="form-actions">
                                                        <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_images'); ?></button>
                                                    </div> -->
                                                    <!--                                                    </form>                -->
                                                </div>                
                                            </div>
                                            <!----CREATION FORM ENDS--->

                                            <div class="tab-pane box" id="add_category">
                                                <div class="box-content">
                                                    <?php echo form_open('admin/addGalleryCategory', array('class' => 'form-horizontal validatable', 'target' => '_top')); ?>
                                                    <!-- <form method="post" enctype="multipart/form-data" action="" target="_top" class="form-horizontal validatable" > -->
                                                    <div class="padded">
                                                        <div class="control-group">
                                                            <label class="control-label">Category Name</label>
                                                            <div class="controls">
                                                                <input type="text" name="category_name"  class="validate[required]" />
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-gray"><?php echo get_phrase('add_category'); ?></button>
                                                    </div>
                                                    </form>                
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </body>
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
                            var url = '<?php echo base_url(); ?>index.php?admin/gallerys/';
                            window.location.href = url + $(this).val();
                        });

                        $('.slider2').anyslider({
                            easing: 'easeInOutBack',
                            interval: 0,
                            keyboard: false,
                            speed: 1500
                        });

                        $('.gallery_images').mouseover(function() {
                            if (!$(this).find('.close-btn').length)
                                $(this).append('<div class="close-btn" title="Delete"></div>')
                        }).mouseleave(function() {
                            $(this).find('.close-btn').remove();
                        });

                        $('body').on('click', '.close-btn', function() {
                            var id = $(this).parent().data('id');
                            $(this).parent().remove();
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo base_url(); ?>index.php?admin/deleteGalleryImage/',
                                data: {galleryId: id},
                                success: function(data) {

                                }
                            });
                        });

                    })
                </script>
                <script type="text/javascript" src="<?php echo base_url(); ?>template/js/jquery.anyslider.js"></script>
                </html>