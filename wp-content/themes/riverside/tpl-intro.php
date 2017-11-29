<?php
    $orange_bg = get_field('navigation_background', 'option');
    $grey_bg = get_field('grey_background', 'option');
?>
<div class="vc_row wpb_row section  denn vc_custom_1494035881876 grid_section <?php if(!empty($grey_bg)) echo 'text-black'?>" style=' text-align:center;background:<?php echo $grey_bg;?>'>
    <div class=" section_inner clearfix">
        <div class='section_inner_margin clearfix'>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <?php
                            $pageId = get_id_by_slug('gioi-thieu', 'page');
                            $pageTitle = get_field('intro_subtitle', $pageId);
                            $videoUrl = get_field('intro_video', $pageId);
                            $getPost = get_post($pageId);
                            $introContent = $getPost->post_content;
                        ?>
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1510560840240">
                            <div class="wpb_wrapper">
                                <div class="page-branch-title text-center">
                                    <h2 class="title1 "><?php echo $pageTitle;?></h2></div>
                            </div>
                        </div>

                        <div class="wpb_video_widget wpb_content_element vc_clearfix  wpb_animate_when_almost_visible wpb_fadeInLeft fadeInLeft  vc_custom_1510560926741 vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-center">
                            <div class="wpb_wrapper">

                                <div class="wpb_video_wrapper">
                                    <iframe width="1060" height="596" src="https://www.youtube.com/embed/<?php echo $videoUrl['vid']?>?feature=oembed&wmode=opaque" frameborder="0" gesture="media" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <?php echo $introContent;?>
                        <br/><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row section  denn grid_section" style=' text-align:left;background-color: <?php echo $orange_bg;?>'>
        <div class=" section_inner clearfix">
            <div class='section_inner_margin clearfix'>
                <div class="center wpb_animate_when_almost_visible wpb_fadeInLeftBig fadeInLeftBig wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner vc_custom_1493353800052">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
