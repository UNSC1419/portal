<?php
header("Content-Type: text/html;charset=utf-8");
//获取信息并解密
$SubmitUrl = base64_decode($_GET['SubmitUrl']);
?>
<html lang="zh">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <title>免费Wifi项目</title>
    <link href="https://s.w.org/" rel="dns-prefetch">
    <script defer="" src="./js/wp-emoji-release.min.js" type="text/javascript"></script>
    <style>
    </style>
    <link href="./css/style.min.css" id="wp-block-library-css" media="all" rel="stylesheet">
    <link href="./css/theme.min.css" id="wp-block-library-theme-css" media="all" rel="stylesheet">
    <link href="./css/style.css" id="twentynineteen-style-css" media="all" rel="stylesheet">
    <link href="./css/print.css" id="twentynineteen-print-style-css" media="print" rel="stylesheet">
    <link href="./css/elementor-icons.min.css" id="elementor-icons-css" media="all" rel="stylesheet">
    <link href="./css/animations.min.css" id="elementor-animations-css" media="all" rel="stylesheet">
    <link href="./css/frontend-legacy.min.css" id="elementor-frontend-legacy-css" media="all" rel="stylesheet">
    <link href="./css/frontend.min.css" id="elementor-frontend-css" media="all" rel="stylesheet">
    <link href="./css/post-17.css" id="elementor-post-17-css" media="all" rel="stylesheet">
    <link href="./css/global.css" id="elementor-global-css" media="all" rel="stylesheet">
    <link href="./css/post-184.css" id="elementor-post-184-css" media="all" rel="stylesheet">
    <link href="./css/1.css" id="google-fonts-1-css" media="all" rel="stylesheet">
    <link href="./css/fontawesome.min.css" id="elementor-icons-shared-0-css" media="all" rel="stylesheet">
    <link href="./css/brands.min.css" id="elementor-icons-fa-brands-css" media="all" rel="stylesheet">
    <link href="./css/solid.min.css" id="elementor-icons-fa-solid-css" media="all" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1.0, viewport-fit=cover" name="viewport">
    <link rel="icon" href="./img/logo256.png" sizes="192x192"/>
    <link rel="apple-touch-icon" href="./img/logo256.png"/>
</head>
<body class="page-template-default page page-id-184 wp-custom-logo wp-embed-responsive singular image-filters-enabled elementor-default elementor-template-canvas elementor-kit-17 elementor-page elementor-page-184"
      data-elementor-device-mode="mobile">
<div class="elementor elementor-184" data-elementor-id="184" data-elementor-settings="[]" data-elementor-type="wp-page">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-2aac58ae elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-element_type="section" data-id="2aac58ae"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;shape_divider_bottom&quot;:&quot;pyramids&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                    <svg preserveAspectRatio="none" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg">
                        <path class="elementor-shape-fill" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1"></path>
                    </svg>
                </div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1d05d978"
                             data-element_type="column" data-id="1d05d978">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-28b50655 elementor-widget elementor-widget-heading"
                                         data-element_type="widget" data-id="28b50655"
                                         data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <span class="elementor-heading-title elementor-size-default">免费Wifi</span>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-863a56e elementor-widget elementor-widget-text-editor"
                                         data-element_type="widget" data-id="863a56e"
                                         data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-text-editor elementor-clearfix"><p>请您向下滑动</p>
                                                <p>点击连接Wifi按钮</p></div>
                                        </div>
                                    </div>
                                    <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-319ba94 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-element_type="section" data-id="319ba94">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3d5a8f75"
                                                     data-element_type="column" data-id="3d5a8f75">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-28076513 elementor-align-left elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                                 data-element_type="widget" data-id="28076513"
                                                                 data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a class="elementor-button-link elementor-button elementor-size-md"
                                                                            <?php
                                                                            echo 'href="' . $SubmitUrl . '"'
                                                                            ?>
                                                                           role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">连接Wifi
                                                                </span>
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
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-78205975"
                             data-element_type="column" data-id="78205975">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-6e097a71 elementor-widget elementor-widget-image"
                                         data-element_type="widget" data-id="6e097a71" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img alt="" class="attachment-full size-full" height="423"
                                                     sizes="(max-width: 210px) 100vw, 210px" src="./img/Wi-Fi-2.png"
                                                     width="210"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-5d97721 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-element_type="section" data-id="5d97721"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-36744d3b"
                             data-element_type="column" data-id="36744d3b">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-9885784 elementor-widget elementor-widget-heading"
                                         data-element_type="widget" data-id="9885784"
                                         data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-heading-title elementor-size-default">我们是如何运营的？</div>
                                        </div>
                                    </div>
                                    <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-6c72ee0b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                            data-element_type="section" data-id="6c72ee0b">
                                        <div class="elementor-container elementor-column-gap-wider">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3d71d380"
                                                     data-element_type="column" data-id="3d71d380">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-620c9a70 elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                 data-element_type="widget" data-id="620c9a70"
                                                                 data-widget_type="icon-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<i aria-hidden="true" class="fab fa-adversal"></i>				</span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span>盈利模式</span>
                                                                            </h3>
                                                                            <p class="elementor-icon-box-description">
                                                                                我们通过投放商家广告，维持对顾客免费Wifi的运营</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-63d5453e elementor-position-left elementor-view-stacked elementor-shape-circle elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                 data-element_type="widget" data-id="63d5453e"
                                                                 data-widget_type="icon-box.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-box-wrapper">
                                                                        <div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<i aria-hidden="true" class="fas fa-fingerprint"></i>				</span>
                                                                        </div>
                                                                        <div class="elementor-icon-box-content">
                                                                            <h3 class="elementor-icon-box-title">
                                                                                <span>隐私安全</span>
                                                                            </h3>
                                                                            <p class="elementor-icon-box-description">
                                                                                我们承诺不会记录您的隐私数据，建议您在使用免费Wifi时启用VPN来提高您数据的安全性</p>
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
                    </div>
                </div>
            </section>
            <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-18e3ecd elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                    data-element_type="section" data-id="18e3ecd"
                    data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;shape_divider_bottom&quot;:&quot;pyramids&quot;,&quot;shape_divider_top&quot;:&quot;pyramids&quot;}">
                <div class="elementor-shape elementor-shape-top" data-negative="false">
                    <svg preserveAspectRatio="none" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg">
                        <path class="elementor-shape-fill"
                              d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path>
                    </svg>
                </div>
                <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                    <svg preserveAspectRatio="none" viewBox="0 0 1000 100" xmlns="http://www.w3.org/2000/svg">
                        <path class="elementor-shape-fill"
                              d="M761.9,44.1L643.1,27.2L333.8,98L0,3.8V0l1000,0v3.9"></path>
                    </svg>
                </div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6b78404"
                             data-element_type="column" data-id="6b78404">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-6ffbff45 elementor-widget elementor-widget-image"
                                         data-element_type="widget" data-id="6ffbff45" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image">
                                                <img alt="" class="attachment-full size-full" height="423"
                                                     sizes="(max-width: 210px) 100vw, 210px" src="./img/Wi-Fi-2.png"
                                                     width="210"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6e3b5f26"
                             data-element_type="column" data-id="6e3b5f26">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-71789d2c elementor-widget elementor-widget-testimonial"
                                         data-element_type="widget" data-id="71789d2c"
                                         data-widget_type="testimonial.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-testimonial-wrapper elementor-testimonial-text-align-left">
                                                <div class="elementor-testimonial-content">
                                                    我们期待与广告投放商家的合作，借助Wifi连接时弹出的portal页面，多屏展现精准触达，按场景、区域有针对性投放，直接导流，产生购买行为
                                                </div>

                                                <div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                                    <div class="elementor-testimonial-meta-inner">
                                                        <div class="elementor-testimonial-image">
                                                            <img alt="" class="attachment-full size-full" height="256"
                                                                 sizes="(max-width: 256px) 100vw, 256px"
                                                                 src="./img/logo256.png"
                                                                 width="256"></div>

                                                        <div class="elementor-testimonial-details">
                                                            <div class="elementor-testimonial-name">CynosCloud</div>
                                                            <div class="elementor-testimonial-job">联系我们：070-21532228
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
<script id="wp-embed-js" src="./js/wp-embed.min.js"></script>
<script id="jquery-core-js" src="./js/jquery.min.js"></script>
<script id="jquery-migrate-js" src="./js/jquery-migrate.min.js"></script>
<script id="elementor-frontend-modules-js" src="./js/frontend-modules.min.js"></script>
<script id="jquery-ui-core-js" src="./js/core.min.js"></script>
<script id="elementor-dialog-js" src="./js/dialog.min.js"></script>
<script id="elementor-waypoints-js" src="./js/waypoints.min.js"></script>
<script id="swiper-js" src="./js/swiper.min.js"></script>
<script id="share-link-js" src="./js/share-link.min.js"></script>
<script id="elementor-frontend-js" src="./js/frontend.min.js"></script>
<span class="elementor-screen-only" id="elementor-device-mode"></span>

</body>
</html>