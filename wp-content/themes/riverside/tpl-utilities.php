<?php
    $orange_bg = get_field('navigation_background', 'option');
    $grey_bg = get_field('grey_background', 'option');
?>

<?php
    $pageId = get_id_by_slug('tien-ich', 'page');
?>
<?php
$i=0;
if( have_rows('adv_bottom', $pageId) ): ?>

    <?php while( have_rows('adv_bottom', $pageId) ): the_row();
        $i++;
        // vars
        $advbot_title = get_sub_field('advbot_title', $pageId);
        $advbot_desc = get_sub_field('advbot_desc', $pageId);
        if($i%2!=0){
        ?>
        <div id="<?php if($i==0) echo 'tien-ich';?>" class="vc_row wpb_row section  denn vc_custom_1506735424563 grid_section pattern_background" style=' text-align:left;  background-color: <?php echo $orange_bg;?>'>
            <div class=" section_inner clearfix">
                <div class='section_inner_margin clearfix'>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner vc_custom_1493864590946">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  vc_custom_1493356008064">
                                    <div class="wpb_wrapper">
                                        <h2 style="text-align: center;"><span style="color: #fff;"><?php echo $advbot_title;?></span></h2>

                                    </div>
                                </div>
                                <div class="wpb_text_column wpb_content_element  vc_custom_1493356356287">
                                    <div class="wpb_wrapper">
                                        <p><?php echo $advbot_desc;?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_gallery wpb_content_element vc_clearfix  fancybox">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_gallery_slides wpb_flexslider flexslider_fade flexslider" data-interval="3" data-flex_fx="fade">
                                            <ul class="slides">
                                                <?php
                                                    if( have_rows('advbot_gallery', $pageId) ): ?>

                                                        <?php while( have_rows('advbot_gallery', $pageId) ): the_row();
                                                        $advbot_gallery_image = get_sub_field('advbot_gallery_image', $pageId);
                                                ?>
                                                <li>
                                                    <a href="<?php echo $advbot_gallery_image;?>" target="_self"><img width="720" height="460" src="<?php echo $advbot_gallery_image;?>" class="attachment-full" alt="" /></a>
                                                </li>
                                                <?php endwhile; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else {?>
        <div class="vc_row wpb_row section  denn vc_custom_1493356125751 grid_section pattern_background" style=' text-align:left; background-color: <?php echo $orange_bg;?>'>
            <div class=" section_inner clearfix">
                <div class='section_inner_margin clearfix'>
                    <div class="wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_gallery wpb_content_element vc_clearfix  fancybox">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_gallery_slides wpb_flexslider flexslider_fade flexslider" data-interval="3" data-flex_fx="fade">
                                            <ul class="slides">
                                                <?php
                                                    if( have_rows('advbot_gallery', $pageId) ): ?>

                                                        <?php while( have_rows('advbot_gallery', $pageId) ): the_row();
                                                        $advbot_gallery_image = get_sub_field('advbot_gallery_image', $pageId);
                                                ?>
                                                <li>
                                                    <a href="<?php echo $advbot_gallery_image;?>" target="_self"><img width="720" height="460" src="<?php echo $advbot_gallery_image;?>" class="attachment-full" alt="" /></a>
                                                </li>
                                                <?php endwhile; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner vc_custom_1493864604459">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  vc_custom_1493356523164">
                                    <div class="wpb_wrapper">
                                        <h2 style="text-align: center;"><span style="color: #fff;"><?php echo $advbot_title;?></span></h2>

                                    </div>
                                </div>
                                <div class="wpb_text_column wpb_content_element  vc_custom_1505721808258">
                                    <div class="wpb_wrapper">
                                        <p><?php echo $advbot_desc;?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }?>
    <?php endwhile; ?>

<?php endif; ?>
