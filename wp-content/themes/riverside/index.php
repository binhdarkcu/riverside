<?php get_header();?>

            <div class="content ">
                <div class="content_inner  ">
                    <?php get_template_part('tpl', 'slider')?>
                    <?php
                        $header_bg = get_field('navigation_background', 'option');
                        $grey_bg = get_field('grey_background', 'option');
                    ?>
                    <div class="full_width" style='background-color:<?php echo $grey_bg;?>'>
                        <div class="full_width_inner">
                            <?php get_template_part('tpl','intro')?>

                            <?php get_template_part('tpl','info-project')?>
                            <div class="vc_row wpb_row section  grid_section" style=' text-align:left;'>
                                <div class=" section_inner clearfix">
                                    <div class='section_inner_margin clearfix'>
                                        <div class="center wpb_animate_when_almost_visible wpb_fadeInLeftBig fadeInLeftBig wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner vc_custom_1493353800052">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php get_template_part('tpl','good-position')?>
                            <?php get_template_part('tpl','map')?>
                            <?php get_template_part('tpl','advantages')?>
                            <?php get_template_part('tpl','utilities')?>
                            <?php get_template_part('tpl','ground')?>
                            <?php get_template_part('tpl','buy-house')?>
                            <?php get_template_part('tpl','register-house')?>
                            <?php get_template_part('tpl','view-house')?>
                        </div>
                    </div>

                    <div class="content_bottom">
                    </div>

                </div>
            </div>
<?php get_footer()?>
