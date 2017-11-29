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
<div id="mat-bang" class="vc_row wpb_row section  denn grid_section <?php if(!empty($grey_bg)) echo 'text-black'?>" style=' text-align:center; background-color: <?php echo $grey_bg;?>'>
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
                        <div class="vc_row wpb_row section vc_inner  hide" style=' text-align:left;'>
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

                                        <div class="wpb_column vc_column_container vc_col-sm-6">
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



                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1498721656720 bor-hove">
                                                <div class="wpb_wrapper">
                                                    <a href="https://my.matterport.com/show/?m=6LWZTb6DskN?play=1" title="Căn hộ 2 phòng ngủ" class="fancybox1"><img src="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/06/Virtual-Can-ho-61m70.jpg" /></a>
                                                </div>
                                            </div>

                                            <div class="wpb_text_column wpb_content_element  vc_custom_1498721320575">
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center;">Căn Hộ 2 Phòng Ngủ</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_text_column wpb_content_element  vc_custom_1498722414057">
                            <div class="wpb_wrapper">
                                <h4 style="text-align: center;">* INTERACTIVE 3D VIRTUAL TOURS</h4>

                            </div>
                        </div>
                        <div class="vc_row wpb_row section vc_inner " style=' text-align:left;'>
                            <div class=" full_section_inner clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center  element_from_left">
                                                <div class="wpb_wrapper">

                                                    <a href="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang49_2-min.jpg" target="_self">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="300" height="244" src="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang49_2-min-300x244.jpg" class="vc_single_image-img attachment-medium" alt="" srcset="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang49_2-min-300x244.jpg 300w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang49_2-min-768x624.jpg 768w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang49_2-min-700x569.jpg 700w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang49_2-min-125x102.jpg 125w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang49_2-min.jpg 928w" sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="wpb_text_column wpb_content_element  vc_custom_1506590714920">
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center;">Căn hộ CS 49m2</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center  element_from_left">
                                                <div class="wpb_wrapper">

                                                    <a href="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbangCE_2-min.jpg" target="_self">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="300" height="244" src="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbangCE_2-min-300x244.jpg" class="vc_single_image-img attachment-medium" alt="" srcset="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbangCE_2-min-300x244.jpg 300w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbangCE_2-min-768x624.jpg 768w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbangCE_2-min-700x569.jpg 700w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbangCE_2-min-125x102.jpg 125w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbangCE_2-min.jpg 928w" sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="wpb_text_column wpb_content_element  vc_custom_1506590739271">
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center;">Căn hộ CE 58m2</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center  element_from_left">
                                                <div class="wpb_wrapper">

                                                    <a href="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang73-min.jpg" target="_self">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="300" height="244" src="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang73-min-300x244.jpg" class="vc_single_image-img attachment-medium" alt="" srcset="http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang73-min-300x244.jpg 300w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang73-min-768x624.jpg 768w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang73-min-700x569.jpg 700w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang73-min-125x102.jpg 125w, http://diamondlotusphuckhang.com.vn/wp-content/uploads/2017/04/matbang73-min.jpg 928w" sizes="(max-width: 300px) 100vw, 300px" /></div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="wpb_text_column wpb_content_element  vc_custom_1506590773424">
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center;">Căn hộ S 73m2</p>

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
    </div>
</div>
