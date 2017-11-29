<?php
    $orange_bg = get_field('navigation_background', 'option');
    $grey_bg = get_field('grey_background', 'option');
?>
<div class="vc_row wpb_row section  denn grid_section" style=' text-align:left; background-color: <?php echo $orange_bg;?>'>
    <div class="vc_row wpb_row section grid_section" style=' text-align:left;'>
        <div class=" section_inner clearfix">
            <div class='section_inner_margin clearfix'>
                <div class="center wpb_animate_when_almost_visible wpb_fadeInLeftBig fadeInLeftBig wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1493353800052">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $pageId = get_id_by_slug('gioi-thieu', 'page');
        $imageProject = get_field('intro_image_project', $pageId);
    ?>
    <div class=" section_inner clearfix">
        <div class='section_inner_margin clearfix'>
            <div class="wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1495783821425  radius fancybox element_from_left">
                            <div class="wpb_wrapper">

                                <a href="images/bg-home-about.jpg" target="_self">
                                    <div class="vc_single_image-wrapper vc_box_border_grey"><img width="555" height="403" src="<?php echo $imageProject;?>" class="vc_single_image-img attachment-full" alt="" /></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-sm-6">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1493349248837 ls-home-about">
                            <div class="wpb_wrapper">
                                <div class="row">
                                    <?php
                                    $i=0;
                                    if( have_rows('intro_info_project', $pageId) ): ?>

                                    	<?php while( have_rows('intro_info_project', $pageId) ): the_row();
                                            $i++;
                                    		// vars
                                    		$intro_project_title = get_sub_field('intro_project_title', $pageId);
                                    		$intro_project_number = get_sub_field('intro_number_project', $pageId);
                                    		$intro_icon = get_sub_field('intro_icon_project', $pageId);
                                    		?>

                                            <div class="col-xs-6 col-sm-6 item item<?php echo $i;?>">
                                                <div class="title2"><?php echo $intro_project_title;?></div>
                                                <div class="desc" style="background: url(<?php echo $intro_icon?>) no-repeat bottom 17px right"><?php echo $intro_project_number;?></div>
                                            </div>

                                    	<?php endwhile; ?>

                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
