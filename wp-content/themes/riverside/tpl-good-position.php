<?php
    $orange_bg = get_field('navigation_background', 'option');
    $grey_bg = get_field('grey_background', 'option');
?>
<?php
    $pageId = get_id_by_slug('vi-tri', 'page');
    $pageTitle = get_field('position_title', $pageId);
    $getPost = get_post($pageId);
    $introContent = $getPost->post_content;
?>
<div id="vi-tri" class="vc_row wpb_row section  vc_custom_1506735309109 grid_section <?php if(!empty($grey_bg)) echo 'text-black'?>" style=' text-align:left; background-color: <?php echo $grey_bg;?>'>
    <div class=" section_inner clearfix">
        <div class='section_inner_margin clearfix'>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                            <div class="wpb_wrapper">
                                <div class="page-branch-title text-center">
                                    <h2 class="title1 "><?php echo $pageTitle;?></h2></div>
                            </div>
                        </div>

                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center"><?php echo $introContent;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row section  vc_custom_1493353285393 grid_section <?php if(!empty($grey_bg)) echo 'text-black'?>" style=' text-align:left;'>
    <div class=" section_inner clearfix">
        <div class='section_inner_margin clearfix'>
            <?php
            $i=0;
            if( have_rows('position_content', $pageId) ): ?>

                <?php while( have_rows('position_content', $pageId) ): the_row();
                    $i++;
                    // vars
                    $position_icon = get_sub_field('position_icon', $pageId);
                    $position_subdesc = get_sub_field('position_subdesc', $pageId);
                    ?>

                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1493350387311 element_from_top">
                                    <div class="wpb_wrapper">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="122" height="122" src="<?php echo $position_icon;?>" class="vc_single_image-img attachment-full" alt="" /></div>
                                    </div>
                                </div>

                                <div class="wpb_text_column wpb_content_element  vc_custom_1493350521663">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center;"><?php echo $position_subdesc;?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>


        </div>
    </div>
</div>
