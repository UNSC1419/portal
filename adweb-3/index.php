<?php
header("Content-Type: text/html;charset=utf-8");
//获取信息并解密
$SubmitUrl = base64_decode($_GET['SubmitUrl']);
$sn_ad_imgurl = base64_decode($_GET['sn_ad_imgurl']);
$sn_ad_url = base64_decode($_GET['sn_ad_url']);
//处理$SubmitUrl，以&分割
$SubmitUrl_Split = explode('&', $SubmitUrl);
//修改success的地址为店铺广告url
$SubmitUrl_Split[4] = "success=" . $sn_ad_url;
//把分割时失去的&加回来
$sn_ad_href = $SubmitUrl_Split[0] . "&" . $SubmitUrl_Split[1] . "&" . $SubmitUrl_Split[2] . "&" . $SubmitUrl_Split[3] . "&" . $SubmitUrl_Split[4];

//1、2广告位链接及图片参数
$ad_1_url = "http://portal.cynoscloud.com/aham/index.html";
$ad_1_imgurl = "./static/picture/39.jpg";
$ad_2_url = "https://baidu.com/";
$ad_2_imgurl = "./static/picture/2.jpg";
//1、2广告位url处理流成
$SubmitUrl_Split[4] = "success=" . $ad_1_url;
$ad_1_href_url = $SubmitUrl_Split[0] . "&" . $SubmitUrl_Split[1] . "&" . $SubmitUrl_Split[2] . "&" . $SubmitUrl_Split[3] . "&" . $SubmitUrl_Split[4];
$SubmitUrl_Split[4] = "success=" . $ad_2_url;
$ad_2_href_url = $SubmitUrl_Split[0] . "&" . $SubmitUrl_Split[1] . "&" . $SubmitUrl_Split[2] . "&" . $SubmitUrl_Split[3] . "&" . $SubmitUrl_Split[4];
//判断分割数量是否真确，不正确显示默认广告图片和空连接
if (count($SubmitUrl_Split) !== 5) {
    $sn_ad_href = "http://portal.cynoscloud.com/adweb-1/ad.php";
    $sn_ad_imgurl = "../adimg/default_ad_img.png";
    $ad_1_href_url = "http://portal.cynoscloud.com/adweb-1/ad.php";
    $ad_2_href_url = "http://portal.cynoscloud.com/adweb-1/ad.php";
    $ad_1_imgurl = "./static/picture/1.png";
    $ad_2_imgurl = "./static/picture/2.jpg";
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>免费WiFi登录</title>
    <meta name='robots' content='max-image-preview:large'/>


    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='static/css/style.min.css' media='all'/>
    <link rel='stylesheet' id='wp-block-library-theme-css' href='static/css/theme.min.css' media='all'/>
    <link rel='stylesheet' id='twentynineteen-style-css' href='static/css/style.css' media='all'/>
    <link rel='stylesheet' id='twentynineteen-print-style-css' href='static/css/print.css' media='print'/>
    <link rel='stylesheet' id='elementor-icons-css' href='static/css/elementor-icons.min.css' media='all'/>
    <link rel='stylesheet' id='elementor-animations-css' href='static/css/animations.min.css' media='all'/>
    <link rel='stylesheet' id='elementor-frontend-legacy-css' href='static/css/frontend-legacy.min.css' media='all'/>
    <link rel='stylesheet' id='elementor-frontend-css' href='static/css/frontend.min.css' media='all'/>
    <link rel='stylesheet' id='elementor-post-7-css' href='static/css/post-7.css' media='all'/>
    <link rel='stylesheet' id='elementor-pro-css' href='static/css/frontend.min_1.css' media='all'/>
    <link rel='stylesheet' id='elementor-global-css' href='static/css/global.css' media='all'/>
    <link rel='stylesheet' id='elementor-post-344-css' href='static/css/post-344.css' media='all'/>
    <link rel='stylesheet' id='google-fonts-1-css' href='static/css/9ed0f08affa4453297d93e742a3d61b9.css' media='all'/>
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='static/css/fontawesome.min.css' media='all'/>
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='static/css/solid.min.css' media='all'/>
    <link rel="icon" href="./static/picture/logo256.png" sizes="192x192"/>
    <link rel="apple-touch-icon" href="./static/picture/logo256.png"/>
    <meta name="msapplication-TileImage" content="./static/picture/logo256.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
</head>
<body class="page-template page-template-elementor_canvas page page-id-344 wp-custom-logo wp-embed-responsive singular image-filters-enabled elementor-default elementor-template-canvas elementor-kit-7 elementor-page elementor-page-344">
<div data-elementor-type="wp-page" data-elementor-id="344" class="elementor elementor-344" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-72570f0 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="72570f0" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1a43221"
                             data-id="1a43221" data-element_type="column">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-f13375c elementor-widget elementor-widget-image"
                                         data-id="f13375c" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <!--
                                                此处开始店铺广告位置位
                                                -->
                                            <div class="elementor-image">
                                                <a <?php
                                                echo 'href="' . $sn_ad_href . '"';
                                                ?>>
                                                    <img width="640" height="427"
                                                        <?php
                                                        echo 'src="' . $sn_ad_imgurl . '" class="attachment-large size-large" alt="" loading="lazy" srcset="' . $sn_ad_imgurl . ' 590w, ' . $sn_ad_imgurl . ' 300w" sizes="(max-width: 590px) 100vw, 590px" ';
                                                        ?>>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-90232cf elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-id="90232cf" data-element_type="section">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-81678cd"
                                                     data-id="81678cd" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-f3f5cde elementor-widget elementor-widget-text-editor"
                                                                 data-id="f3f5cde" data-element_type="widget"
                                                                 data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <h5>免费WiFi</h5></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2684f86"
                                                     data-id="2684f86" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-de33cdc elementor-button-success elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                 data-id="de33cdc" data-element_type="widget"
                                                                 data-settings="{&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}"
                                                                 data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <!--
                                                                       此处开始连接按钮
                                                                       -->
                                                                        <a <?php
                                                                        echo 'href="' . $SubmitUrl . '"'
                                                                        ?> class="elementor-button-link elementor-button elementor-size-md elementor-animation-wobble-top"
                                                                           role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-left">
				<i aria-hidden="true" class="fas fa-wifi"></i>			</span>
						<span class="elementor-button-text">连接网络</span>
		</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="elementor-element elementor-element-38f36e4 elementor-widget elementor-widget-image"
                                         data-id="38f36e4" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <!--
                                               此处开始1号广告位
                                               -->
                                            <div class="elementor-image">
                                                <a <?php
                                                echo 'href="' . $ad_1_href_url . '"'
                                                ?>>
                                                    <img width="370px" height="245px" src="static/picture/qr1.jpg"
                                                        <?php
                                                        echo 'src="' . $ad_1_imgurl . '" class="attachment-large size-large" alt="" loading="lazy" srcset="' . $ad_1_imgurl . ' 590w, ' . $ad_1_imgurl . ' 300w" sizes="(max-width: 590px) 100vw, 590px" ';
                                                        ?>>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-4e03b47 elementor-widget elementor-widget-image"
                                         data-id="4e03b47" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <!--
                                               此处开始2号广告位
                                               -->
                                            <div class="elementor-image">
                                                <a <?php
                                                echo 'href="' . $ad_2_href_url . '"'
                                                ?>>
                                                    <video controls muted="true" autoplay="true" src="static/picture/demo.mp4" x-webkit-airplay="allow" preload="meta" webkit-playsinline="true" x5-video-player-type="h5-page" x5-video-player-fullscreen="true" playsinline="true" poster="static/picture/3.jpg"></video>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c0078cf elementor-widget elementor-widget-testimonial"
                                         data-id="c0078cf" data-element_type="widget"
                                         data-widget_type="testimonial.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-testimonial-wrapper elementor-testimonial-text-align-left">

                                                <div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                                    <div class="elementor-testimonial-meta-inner">
                                                        <div class="elementor-testimonial-image">
                                                            <img width="256" height="256"
                                                                 src="static/picture/logo256.png"
                                                                 class="attachment-full size-full" alt="" loading="lazy"
                                                                 srcset="static/picture/logo256.png 256w, static/picture/logo256.png 150w"
                                                                 sizes="(max-width: 256px) 100vw, 256px"/></div>

                                                        <div class="elementor-testimonial-details">
                                                            <div class="elementor-testimonial-name">CynosCloud</div>
                                                            <div class="elementor-testimonial-job">广告合作请联系我们：<br>070-21532228
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
            </section>
        </div>
    </div>
</div>
<script src='static/js/wp-embed.min.js' id='wp-embed-js'></script>
<script src='static/js/webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script>
<script src='static/js/webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script>
<script src='static/js/jquery.min.js' id='jquery-core-js'></script>
<script src='static/js/jquery-migrate.min.js' id='jquery-migrate-js'></script>
<script src='static/js/frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
<script src='static/js/jquery.sticky.min.js' id='elementor-sticky-js'></script>
<script src='static/js/waypoints.min.js' id='elementor-waypoints-js'></script>
<script src='static/js/core.min.js' id='jquery-ui-core-js'></script>
<script src='static/js/swiper.min.js' id='swiper-js'></script>
<script src='static/js/share-link.min.js' id='share-link-js'></script>
<script src='static/js/dialog.min.js' id='elementor-dialog-js'></script>
<script src='static/js/preloaded-elements-handlers.min.js' id='pro-preloaded-elements-handlers-js'></script>

</body>
</html>
