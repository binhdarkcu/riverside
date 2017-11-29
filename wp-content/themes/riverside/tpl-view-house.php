<?php
    $orange_bg = get_field('navigation_background', 'option');
    $grey_bg = get_field('grey_background', 'option');
?>
<?php
    $pageId = get_id_by_slug('dang-ky-tham-gia', 'page');
    $show_title = get_field('show_title', $pageId);
    $show_description = get_field('show_description', $pageId);
?>
<div class="vc_row wpb_row section view-house  denn grid_section <?php if(!empty($grey_bg)) echo 'text-black'?>" style=' padding-bottom:50px; text-align:center; background-color: <?php echo $grey_bg;?>'>
    <div class=" section_inner clearfix">
        <div class='section_inner_margin clearfix'>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1498816255393">
                            <div class="wpb_wrapper">
                                <div class="page-branch-title text-center">
                                    <h2 class="title1 "><?php echo $show_title;?></h2></div>
                            </div>
                        </div>

                        <div class="wpb_text_column wpb_content_element  vc_custom_1498727778100">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;"><?php echo $show_description;?></p>

                            </div>
                        </div>
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                            <div class="wpb_wrapper">
                                <style>
                                    .wpcf7 form.wpcf7-form p {
                                        margin-bottom: 0!important;
                                    }

                                    .border-vang {
                                        border: 1px dashed yellow;
                                        border-radius: 10px
                                    }

                                    .border-vang .wpcf7-submit {
                                        background-color: yellow;
                                        border: none !important;
                                        color: red !important;
                                    }
                                    .wpcf7-response-output.wpcf7-display-none{
                                        display: none;
                                    }
                                    .clear{
                                        clear: both;
                                    }
                                    .view-house .vc_column-inner  input[type="submit"]{
                                        margin-top: 10px;
                                        margin-bottom: 15px;
                                    }
                                    .view-house .wpcf7-form input[type="text"] {
                                        border:1px solid yellow;
                                    }
                                </style>
                            </div>
                        </div>
                        <div class="vc_row wpb_row section vc_inner " style=' text-align:left;'>
                            <div class=" full_section_inner clearfix">
                                <div class="border-vang wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1498730307904">
                                        <div class="wpb_wrapper">
                                            <?php echo do_shortcode( '[contact-form-7 id="149" title="Chương trình tham gia"]' ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
