<?php
    $orange_bg = get_field('navigation_background', 'option');
    $grey_bg = get_field('grey_background', 'option');
?>
<?php
    $pageId = get_id_by_slug('thiet-ke', 'page');
    $design_title = get_field('design_title', $pageId);
    $design_reason = get_field('design_reason', $pageId);
    $design_progress = get_field('design_progress', $pageId);
?>
<div class="vc_row wpb_row section  denn grid_section " style=' text-align:left; background-color: <?php echo $orange_bg;?>'>
    <div class=" section_inner clearfix">
        <div class='section_inner_margin clearfix'>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1506589839749">
                            <div class="wpb_wrapper">
                                <div class="page-branch-title text-center">
                                    <h2 class="title1 "><?php echo $design_title;?></h2></div>
                            </div>
                        </div>

                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <?php echo $design_reason;?>

                            </div>
                        </div>

                        <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1506596266718">
                            <div class="wpb_wrapper">
                                <div class="page-branch-title text-center">
                                    <h2 class="title1 ">TIẾN ĐỘ THỰC HIỆN</h2></div>
                            </div>
                        </div>

                        <div class="wpb_video_widget wpb_content_element vc_clearfix   vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-center">
                            <div class="wpb_wrapper">

                                <div class="wpb_video_wrapper">
                                    <iframe width="1060" height="596" src="https://www.youtube.com/embed/<?php echo $design_progress['vid'];?>?feature=oembed&wmode=opaque" frameborder="0" gesture="media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/><br/>
</div>
<?php
    $pttId = get_id_by_slug('gia-va-pttt', 'page');
    $getpostPttt = get_post($pttId);
    $pttTitle = $getpostPttt->post_title;
    $pttContent = $getpostPttt->post_content;
?>
<div class="vc_row wpb_row section  denn grid_section <?php if(!empty($grey_bg)) echo 'text-black'?>" style=' text-align:left; background-color: <?php echo $grey_bg;?>'>
    <div class=" section_inner clearfix">
        <div class='section_inner_margin clearfix'>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1498816243110">
                            <div class="wpb_wrapper">
                                <div class="page-branch-title text-center">
                                    <h2 class="title1 "><?php echo $pttTitle;?></h2></div>
                            </div>
                        </div>

                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <?php echo $pttContent;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
</div>
