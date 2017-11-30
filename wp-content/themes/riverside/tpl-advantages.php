<?php
    $orange_bg = get_field('navigation_background', 'option');
    $grey_bg = get_field('grey_background', 'option');
?>
<?php
    $pageId = get_id_by_slug('tien-ich', 'page');

    $getPost = get_post($pageId);
    $advtitle = $getPost->post_content;

    $pageTitle = get_field('position_title', $pageId);
?>
<div id="tien-ich" class="vc_row wpb_row section  vc_custom_1493353941018 grid_section <?php if(!empty($grey_bg)) echo 'text-black'?>" style=' text-align:center;'>
    <div class=" section_inner clearfix">
        <div class='section_inner_margin clearfix'>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">

                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                            <div class="wpb_wrapper">
                                <div class="page-branch-title text-center">
                                    <h2 class="title1 "><?php echo $advtitle;?></h2></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row <?php if(!empty($grey_bg)) echo 'text-black'?>" style=' text-align:left;'>
        <div class=" full_section_inner clearfix">
            <?php
            $i=0;
            if( have_rows('advatage_top', $pageId) ): ?>

                <?php while( have_rows('advatage_top', $pageId) ): the_row();
                    $i++;
                    // vars
                    $adv_icon = get_sub_field('adv_icon', $pageId);
                    $adv_title = get_sub_field('adv_title', $pageId);
                    $adv_desc = get_sub_field('adv_desc', $pageId);
                    ?>

                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1493354459668 element_from_left">
                                    <div class="wpb_wrapper">

                                        <div class="vc_single_image-wrapper vc_box_shadow_circle  vc_box_border_grey"><img width="206" height="206" src="<?php echo $adv_icon;?>" class="vc_single_image-img attachment-full" alt="" /></div>
                                    </div>
                                </div>

                                <div class="wpb_text_column wpb_content_element  vc_custom_1493354609021">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center;"><?php echo $adv_title;?>
                                            <br />
                                            <strong><?php echo $adv_desc;?></strong></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>

    <?php get_template_part('tpl','utilities')?>
</div>
