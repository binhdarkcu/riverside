<?php get_header()?>
<?php
    $pageId = get_id_by_slug('lien-he', 'page');
    $c_address = get_field('c_address', $pageId);
    $c_phone = get_field('c_phone', $pageId);
    $p_email = get_field('p_email', $pageId);
    $getPost = get_post($pageId);
    $introContent = $getPost->post_content;
?>
<div class="content " style="min-height: 126px;">
    <div class="content_inner  ">

        <div class="title_outer title_without_animation with_image" data-height="150">
            <div class="title position_left  breadcrumbs_title" style="height:150px;">
                <div class="image responsive"><img src="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/11/slide1-min-1.jpg" alt="&nbsp;"> </div>


            </div>
        </div>

        <div class="container">
            <div class="container_inner clearfix default_template_holder">
                <div class="contact_detail">
                    <div class="contact_section">
                        <?php echo $introContent;?>
                    </div>
                    <div class="two_columns_33_66 clearfix grid2">
                        <div class="column1">
                            <div class="column_inner">
                                <div class="contact_info">
                                    <div class="vc_row wpb_row section " style=" text-align:left;">
                                        <div class=" full_section_inner clearfix">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="q_icon_with_title  circle without_double_border">
                                                            <div class="icon_holder " style="margin: 7px 0px 0px 0px; ">
                                                                <div class="icon_holder_inner" style=""><span class="q_font_elegant_holder circle  custom-font" style="font-size: 24px;"><span class="icon_text_icon q_font_elegant_icon icon_pin_alt" aria-hidden="true"></span></span>
                                                                </div>
                                                            </div>
                                                            <div class="icon_text_holder" style="padding-left: 95px">
                                                                <div class="icon_text_inner" style="">
                                                                    <h5 class="icon_title" style="">Địa Chỉ</h5>
                                                                    <p style=""><?php echo $c_address;?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="separator  transparent   " style="border-width:1px;;margin-top:14px;"></div>
                                                        <div class="q_icon_with_title  circle without_double_border">
                                                            <div class="icon_holder " style="margin: 7px 0px 0px 0px; ">
                                                                <div class="icon_holder_inner" style=""><span class="q_font_elegant_holder circle  custom-font" style="font-size: 24px;"><span class="icon_text_icon q_font_elegant_icon icon_phone" aria-hidden="true"></span></span>
                                                                </div>
                                                            </div>
                                                            <div class="icon_text_holder" style="padding-left: 95px">
                                                                <div class="icon_text_inner" style="">
                                                                    <h5 class="icon_title" style="">Điện Thoại</h5>
                                                                    <p style=""><?php echo $c_phone;?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="separator  transparent   " style="border-width:1px;;margin-top:14px;"></div>
                                                        <div class="q_icon_with_title  circle without_double_border">
                                                            <div class="icon_holder " style="margin: 7px 0px 0px 0px; ">
                                                                <div class="icon_holder_inner" style=""><span class="q_font_elegant_holder circle  custom-font" style="font-size: 24px;"><span class="icon_text_icon q_font_elegant_icon icon_mail_alt" aria-hidden="true"></span></span>
                                                                </div>
                                                            </div>
                                                            <div class="icon_text_holder" style="padding-left: 95px">
                                                                <div class="icon_text_inner" style="">
                                                                    <h5 class="icon_title" style="">E-mail</h5>
                                                                    <p style=""><?php echo $c_email;?></p>
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
                        <div class="column2">
                            <div class="column_inner">
                                <div class="contact_form">
                                    <?php echo do_shortcode( '[contact-form-7 id="161" title="Contact Form"]' ); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .contact_form .screen-reader-response ul{
                display: none;
            }
        </style>


        <div class="content_bottom">
        </div>

        </div>
    </div>

<?php get_footer();?>
