<?php
    $orange_bg = get_field('navigation_background', 'option');
    $grey_bg = get_field('grey_background', 'option');
?>
<?php
    $pageId = get_id_by_slug('dang-ky-tham-gia', 'page');
    $form_title_adv = get_field('form_title_adv', $pageId);

    $getPost = get_post($pageId);
    $show_content = apply_filters('the_content',  $getPost->post_content);

    $pageTitle = get_field('position_title', $pageId);
?>

<div class="vc_row wpb_row section  vc_custom_1507262675540 grid_section" style=' text-align:left; background-color: <?php echo $orange_bg;?> '>
    <div class=" section_inner clearfix">
        <div class='section_inner_margin clearfix'>
            <div class="  element_from_left">
                <div>
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1507260433177">
                                    <div class="wpb_wrapper">
                                        <div class="page-branch-title text-center">
                                            <h2 class="title1 "><?php echo $form_title_adv;?></h2></div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row section vc_inner " style=' text-align:left;'>
                                    <div class=" full_section_inner clearfix">
                                        <div class="wpb_column vc_column_container vc_col-sm-8">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <?php echo $show_content;?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-vang wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner vc_custom_1507262689236">
                                                <div class="wpb_wrapper">
                                                    <?php echo do_shortcode( '[contact-form-7 id="63" title="Thông Tin Đăng Ký"]' ); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                        .screen-reader-response{
                                        	display: none!important;
                                        }
                                        </style>
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
