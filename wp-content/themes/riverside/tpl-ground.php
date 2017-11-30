<?php
    $orange_bg = get_field('navigation_background', 'option');
    $grey_bg = get_field('grey_background', 'option');
?>
<?php
    $pageId = get_id_by_slug('thiet-ke', 'page');
    $pageTitle = get_field('position_title', $pageId);
    $getPost = get_post($pageId);
    $introContent = $getPost->post_content;
?>
<section id="thiet-ke" class="vc_row wpb_row section  denn grid_section <?php if(!empty($grey_bg)) echo 'text-black'?>" style=' text-align:center; background-color: <?php echo $grey_bg;?>'>
    <div class=" section_inner clearfix">
        <div class='section_inner_margin clearfix'>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1498816230148">
                            <div class="wpb_wrapper">
                                <div class="page-branch-title text-center">
                                    <h2 class="title1 ">MẶT BẰNG CĂN HỘ</h2></div>
                            </div>
                        </div>

                        <div class="wpb_text_column wpb_content_element  hide vc_custom_1506592103894">
                            <div class="wpb_wrapper">
                                <h4 style="text-align: center;"><?php echo $introContent;?></h4>

                            </div>
                        </div>
                        <div class="vc_row wpb_row section vc_inner  " style=' text-align:left;'>
                            <div class=" full_section_inner clearfix">
                                <?php
                                $i=0;
                                if( have_rows('design_top', $pageId) ): ?>

                                    <?php while( have_rows('design_top', $pageId) ): the_row();
                                        $i++;
                                        // vars
                                        $design_image = get_sub_field('design_image', $pageId);
                                        $design_title = get_sub_field('design_title', $pageId);
                                        ?>

                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1498721631948 bor-hove">
                                                        <div class="wpb_wrapper">
                                                            <a href="<?php echo $design_image;?>" title="Căn hộ 3 phòng ngủ" class="fancybox1"><img src="<?php echo $design_image;?>" /></a>
                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element  vc_custom_1498721296057">
                                                        <div class="wpb_wrapper">
                                                            <p style="text-align: center;"><?php echo $design_title;?></p>

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
                </div>
            </div>
        </div>
    </div>
</section>
