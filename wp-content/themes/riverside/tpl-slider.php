<div class="q_slider">
    <div class="q_slider_inner">
        <div id="qode-river" class="carousel slide  full_screen  q_auto_start   " data-slide_animation="6000" data-parallax="no" style=" ">
            <div class="qode_slider_preloader">
                <div class="ajax_loader">
                    <div class="ajax_loader_1">
                        <div class="stripes">
                            <div class="rect1"></div>
                            <div class="rect2"></div>
                            <div class="rect3"></div>
                            <div class="rect4"></div>
                            <div class="rect5"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner relative_position">
                <?php
                    $args_banner = array(
                          'post_type'                     => 'banner_slider',
                          'posts_per_page' =>  7 ,
                              'order'              => 'asc'
                    );
                    $bannerSlider = get_posts($args_banner);
                    foreach ( $bannerSlider as $banner ) {
                          $image = get_field('image_banner_slider', $banner->ID)
              ?>
                <div class="item   small_title_right" style="">
                    <div class="image" style="background-image:url(<?php echo $image;?>);"><img src="<?php echo $image;?>" alt=""></div>
                    <div class="slider_content_outer">
                        <div class="slider_content " style="width:80%;left: 10%;top: 35%;" data-start="width:80%; opacity:1; left: 10%; top: 35%;" data-300="opacity: 0; left: 10%; top: 10%;">
                            <div class="text all_at_once no_subtitle no_separator">
                                <p style=""><span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
            <ol class="carousel-indicators" data-start="opacity: 1;" data-300="opacity:0;">
                <?php
                $i=0;
                foreach ( $bannerSlider as $banner ) {
                ?>
                <li data-target="#qode-river" data-slide-to="<?php echo $i;?>" class="<?php echo ($i==0)?'active':''?>"></li>
            <?php $i++; }?>
            </ol><a class="left carousel-control" href="#qode-river" data-slide="prev" data-start="opacity: 0.35;" data-300="opacity:0;"><span class="prev_nav" ><i class="fa fa-angle-left"></i></span><span class="thumb_holder" ><span class="thumb_top clearfix"><span class="arrow_left"><i class="fa fa-angle-left"></i></span><span class="numbers"><span class="prev"></span> / 3</span></span><span class="img_outer"><span class="img"></span></span></span></a><a class="right carousel-control" href="#qode-river" data-slide="next" data-start="opacity: 0.35;" data-300="opacity:0;"><span class="next_nav" ><i class="fa fa-angle-right"></i></span><span class="thumb_holder" ><span class="thumb_top clearfix"><span class="numbers"> <span class="next"></span> / 3</span><span class="arrow_right"><i class="fa fa-angle-right"></i></span></span><span class="img_outer"><span class="img"></span></span></span></a></div>
    </div>
</div>
