<?php
    $orange_bg = get_field('navigation_background', 'option');
    $grey_bg = get_field('grey_background', 'option');
    $footer_logo = get_field('footer_logo', 'option');
?>
<style>
    .orange-text a{
        color: #fff!important;
    }
</style>
<footer class="footer_border_columns <?php if(!empty($orange_bg)) echo 'orange-text'; ?>">
    <div class="footer_inner clearfix">
        <div class="footer_top_holder" style="background-color: <?php echo $orange_bg;?>">
            <div class="footer_top">
                <div class="container">
                    <div class="container_inner">
                        <div class="three_columns clearfix">
                            <div class="qode_column column1">
                                <div class="column_inner">
                                    <div id="text-2" class="widget widget_text">
                                        <div class="textwidget">
                                            <div style=" text-align:center"><img src="<?php echo $footer_logo;?>" alt="logo" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qode_column column2">
                                <div class="column_inner">
                                    <div id="nav_menu-8" class="widget widget_nav_menu">
                                        <h5>Liên Kết Nội Bộ</h5>
                                        <div class="menu-foot_menu-container">
                                            <ul id="menu-foot_menu" class="menu">
                                                <?php
                                                $i=0;
                                                if( have_rows('footer_links', 'option') ): ?>

                                                    <?php while( have_rows('footer_links', 'option') ): the_row();
                                                        $i++;
                                                        // vars
                                                        $link_title = get_sub_field('link_title', 'option');
                                                        $link_address = get_sub_field('link_address', 'option');
                                                        ?>

                                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home menu-item-310"><a href="<?php echo $link_address;?>"><?php echo $link_title;?></a></li>

                                                    <?php endwhile; ?>

                                                <?php endif; ?>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qode_column column3">
                                <div class="column_inner">
                                    <div id="text-4" class="widget widget_text">
                                        <h5><?php echo get_field('footer_contact_title', 'option');?></h5>
                                        <div class="textwidget">
                                            <?php echo get_field('footer_contact_content', 'option');?>

                                            <!--Start of Tawk.to Script-->
                                            <script type="text/javascript">
                                                // var Tawk_API = Tawk_API || {},
                                                //     Tawk_LoadStart = new Date();
                                                // (function() {
                                                //     var s1 = document.createElement("script"),
                                                //         s0 = document.getElementsByTagName("script")[0];
                                                //     s1.async = true;
                                                //     s1.src = 'https://embed.tawk.to/58d47748f7bbaa72709c2213/default';
                                                //     s1.charset = 'UTF-8';
                                                //     s1.setAttribute('crossorigin', '*');
                                                //     s0.parentNode.insertBefore(s1, s0);
                                                // })();
                                            </script>
                                            <!--End of Tawk.to Script-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom_holder">
            <div class="footer_bottom">
                <div class="textwidget"><span style="display: block; line-height:14px;color:#ffffff"><?php echo get_field('copyright', 'option')?></a> </span></div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<button type="button" class="btn btn-info btn-lg btn_dk btn_dk1" data-toggle="modal" data-target="#myModal">Đăng Ký Nhận Giá</button>

<!-- Dk nhan bao gia -->
<!-- Modal -->

<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog modal-sm">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thông Tin Đăng Ký</h4>
    </div>

    <div class="modal-body">
        <?php echo do_shortcode( '[contact-form-7 id="63" title="Thông Tin Đăng Ký"]' ); ?>
    </div>

</div>
</div>
</div>

<!-- Modal quang cao -->
<div class="modal fade" id="qcModal" role="dialog">
<div class="modal-dialog modal-sm">
<div class="modal-content">
    <div class="modal-body modal_qc">
        <?php
            $register_title = get_field('register_title', 'option');
            $register_subtitle = get_field('register_subtitle', 'option');
            $register_content = get_field('register_content', 'option');
        ?>
        <div class="wapdownload animated bounceInLeft delay-250 go">
            <h4><?php echo $register_title;?></h4>
            <h6><?php echo $register_subtitle;?></h6>
            <div class="borderwapdown"></div>
            <?php echo $register_content;?>

            <div id="taive" class="btn-download md-trigger" data-modal="myModal">Đăng ký </div>
        </div>
        <!-- <img id="taive" src="/wp-content/uploads/2017/02/taive.jpg" alt=""> -->
    </div>
</div>
</div>
</div>

<link rel='stylesheet' id='animate-css-css' href='css/animate.min.css?ver=5.0.1' type='text/css' media='' />

<script type='text/javascript'>
/* <![CDATA[ */
var qodeLike = {
"ajaxurl": "<?php echo admin_url('admin-ajax.php'); ?>"
};
/* ]]> */

if(jQuery('#myModal form.wpcf7-form').hasClass('invalid')) {
    jQuery('#myModal').modal('show');
}

</script>
<script type='text/javascript' src='js/qode-like.js?ver=1.0'></script>
<script type='text/javascript' src='js/plugins.js?ver=4.7.7'></script>
<script type='text/javascript' src='js/jquery.carouFredSel-6.2.1.js?ver=4.7.7'></script>
<script type='text/javascript' src='js/lemmon-slider.js?ver=4.7.7'></script>
<script type='text/javascript' src='js/jquery.mousewheel.min.js?ver=4.7.7'></script>
<script type='text/javascript' src='js/jquery.touchSwipe.min.js?ver=4.7.7'></script>
<script type='text/javascript' src='js/isotope.pkgd.min.js?ver=5.0.1'></script>
<script type='text/javascript' src='js/wp-content-themes-hazel-js-default_dynamic-59fd76dac0488810701884.js'></script>
<script type='text/javascript' src='js/default.min.js?ver=4.7.7'></script>
<script type='text/javascript' src='js/wp-content-themes-hazel-js-custom_js-59fd76dac0488810701884.js'></script>
<script type='text/javascript' src='js/SmoothScroll.js?ver=4.7.7'></script>
<script type='text/javascript' src='js/comment-reply.min.js?ver=4.7.7'></script>
<script type='text/javascript' src='js/js_composer_front.min.js?ver=5.0.1'></script>
<script type='text/javascript' src='js/waypoints.min.js?ver=5.0.1'></script>
<script type='text/javascript' src='js/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/tabs.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='js/jquery-ui-tabs-rotate.min.js?ver=5.0.1'></script>
<script type='text/javascript' src='js/jquery.fancybox-1.3.8.min.js?ver=1.6'></script>
<script type='text/javascript' src='js/jquery.easing.min.js?ver=1.4.0'></script>
<script type='text/javascript' src='js/jquery.mousewheel.min.js?ver=3.1.13'></script>
<script type='text/javascript' src='js/siteMain.js'></script>
<script>
    jQuery.noConflict();

    jQuery(window).load(function() {
        jQuery('a.fancybox1').fancybox({
            padding: 0,
            openEffect: 'elastic',
            width: '100%',
            height: '100%',
            type: "iframe"
        });
    });
</script>
<script type="text/javascript">
jQuery(document).on('ready post-load', function() {
jQuery('.nofancybox,a.pin-it-button,a[href*="pinterest.com/pin/create/button"]').addClass('nolightbox');
});
jQuery(document).on('ready post-load', easy_fancybox_handler);
jQuery(document).on('ready', easy_fancybox_auto);
</script>

<script type="text/javascript" charset="utf-8">
jQuery.noConflict();

jQuery(window).load(function() {

jQuery("#du-an").val('http://diamondlotusphuckhang.com.vn');
// popup lan dau
var interval_obj1 = setInterval(function() {
    jQuery('#qcModal').modal('show');
    clearInterval(interval_obj1);
}, 30000);
// popup lan 2
var interval_obj = setInterval(function() {
    jQuery('#qcModal').modal('show');
    //clearInterval(interval_obj);
}, 60000);
jQuery('#taive').click(function(event) {
    clearInterval(interval_obj);
    jQuery('#qcModal').modal('hide');
    jQuery('#myModal').modal('show');
});

jQuery('.btn_dk').click(function(event) {
    clearInterval(interval_obj);
    clearInterval(interval_obj1);
});
jQuery('#btn_v').click(function(event) {
    clearInterval(interval_obj);
});

});
</script>

</body>

</html>

<!-- Cached page for great performance - Debug: cached@1511764122 -->
