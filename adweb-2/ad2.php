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
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>连接免费Wifi</title>
    <link href='static/css/style.css' id='twentynineteen-style-css' media='all' rel='stylesheet'/>
    <link href='static/css/animations.min.css' id='elementor-animations-css' media='all' rel='stylesheet'/>
    <link href='static/css/frontend.min.css' id='elementor-frontend-css' media='all' rel='stylesheet'/>
    <style id='elementor-frontend-inline-css'>
        .elementor-kit-7 {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed > .elementor-container {
            max-width: 1140px;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }

        {
        }
        h1.entry-title {
            display: var(--page-title-display);
        }

        @media (max-width: 1024px) {
            .elementor-section.elementor-section-boxed > .elementor-container {
                max-width: 1025px;
            }
        }

        @media (max-width: 767px) {
            .elementor-section.elementor-section-boxed > .elementor-container {
                max-width: 768px;
            }
        }

        .elementor-widget-heading .elementor-heading-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-image .widget-image-caption {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-text-editor {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap, .elementor-widget-text-editor.elementor-drop-cap-view-default .elementor-drop-cap {
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-button .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-divider {
            --divider-color: var(--e-global-color-secondary);
        }

        .elementor-widget-divider .elementor-divider__text {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-divider.elementor-view-stacked .elementor-icon {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-divider.elementor-view-framed .elementor-icon, .elementor-widget-divider.elementor-view-default .elementor-icon {
            color: var(--e-global-color-secondary);
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-divider.elementor-view-framed .elementor-icon, .elementor-widget-divider.elementor-view-default .elementor-icon svg {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-image-box .elementor-image-box-content .elementor-image-box-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-image-box .elementor-image-box-content .elementor-image-box-description {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-icon.elementor-view-stacked .elementor-icon {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon.elementor-view-framed .elementor-icon, .elementor-widget-icon.elementor-view-default .elementor-icon {
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon.elementor-view-framed .elementor-icon, .elementor-widget-icon.elementor-view-default .elementor-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box.elementor-view-stacked .elementor-icon {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box.elementor-view-framed .elementor-icon, .elementor-widget-icon-box.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title, .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-description {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-star-rating .elementor-star-rating__title {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-image-gallery .gallery-item .gallery-caption {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-icon-list .elementor-icon-list-item:not(:last-child):after {
            border-color: var(--e-global-color-text);
        }

        .elementor-widget-icon-list .elementor-icon-list-icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-list .elementor-icon-list-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-icon-list .elementor-icon-list-text {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-icon-list .elementor-icon-list-item, .elementor-widget-icon-list .elementor-icon-list-item a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-counter .elementor-counter-number-wrapper {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-counter .elementor-counter-title {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-progress .elementor-progress-wrapper .elementor-progress-bar {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-progress .elementor-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-testimonial .elementor-testimonial-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-testimonial .elementor-testimonial-name {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-testimonial .elementor-testimonial-job {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-tabs .elementor-tab-title, .elementor-widget-tabs .elementor-tab-title a {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-tabs .elementor-tab-title.elementor-active a {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-tabs .elementor-tab-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-tabs .elementor-tab-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-accordion .elementor-accordion-icon, .elementor-widget-accordion .elementor-accordion-title {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-accordion .elementor-active .elementor-accordion-icon, .elementor-widget-accordion .elementor-active .elementor-accordion-title {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-accordion .elementor-accordion .elementor-accordion-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-accordion .elementor-accordion .elementor-tab-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-toggle .elementor-toggle-title, .elementor-widget-toggle .elementor-toggle-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-toggle .elementor-tab-title.elementor-active a, .elementor-widget-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-toggle .elementor-toggle .elementor-toggle-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-toggle .elementor-toggle .elementor-tab-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-alert .elementor-alert-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-alert .elementor-alert-description {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-144 .elementor-element.elementor-element-865795c > .elementor-container {
            max-width: 1024px;
            min-height: 100vh;
            text-align: center;
        }

        .elementor-144 .elementor-element.elementor-element-865795c > .elementor-container:after {
            content: "";
            min-height: inherit;
        }

        .elementor-144 .elementor-element.elementor-element-865795c:not(.elementor-motion-effects-element-type-background), .elementor-144 .elementor-element.elementor-element-865795c > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-image: url("static/images/20898-scaled.jpg");
            background-position: center center;
            background-size: cover;
        }

        .elementor-144 .elementor-element.elementor-element-865795c, .elementor-144 .elementor-element.elementor-element-865795c > .elementor-background-overlay {
            border-radius: 0px 0px 0px 0px;
        }

        .elementor-144 .elementor-element.elementor-element-865795c {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .elementor-144 .elementor-element.elementor-element-865795c > .elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-144 .elementor-element.elementor-element-7865c1e > .elementor-column-wrap > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 10px;
        }

        .elementor-144 .elementor-element.elementor-element-7865c1e:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-144 .elementor-element.elementor-element-7865c1e > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer {
            background-color: #ffffff;
        }

        .elementor-144 .elementor-element.elementor-element-7865c1e > .elementor-element-populated {
            box-shadow: 15px 15px 20px 10px rgba(0, 0, 0, 0.5);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 0px;
        }

        .elementor-144 .elementor-element.elementor-element-7865c1e > .elementor-element-populated > .elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-144 .elementor-element.elementor-element-f0962d9 {
            margin-top: 0px;
            margin-bottom: 10px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-144 .elementor-element.elementor-element-90efdba > .elementor-element-populated {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-144 .elementor-element.elementor-element-74297e1 {
            text-align: center;
        }

        .elementor-144 .elementor-element.elementor-element-74297e1 .elementor-image img {
            width: 100%;
            max-width: 100%;
            height: 35vh;
        }

        .elementor-144 .elementor-element.elementor-element-ef66c82 .elementor-button .elementor-align-icon-right {
            margin-left: 0px;
        }

        .elementor-144 .elementor-element.elementor-element-ef66c82 .elementor-button .elementor-align-icon-left {
            margin-right: 0px;
        }

        .elementor-144 .elementor-element.elementor-element-ef66c82 .elementor-button {
            font-family: "Roboto", Sans-serif;
            font-weight: 500;
        }

        .elementor-144 .elementor-element.elementor-element-ef66c82 > .elementor-widget-container {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            transition: background 0s;
        }

        .elementor-144 .elementor-element.elementor-element-e3b1520 {
            overflow: hidden;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-144 .elementor-element.elementor-element-9979e3c.elementor-column .elementor-column-wrap {
            align-items: center;
        }

        .elementor-144 .elementor-element.elementor-element-9979e3c.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-144 .elementor-element.elementor-element-9979e3c > .elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-144 .elementor-element.elementor-element-f3cf0d0 {
            text-align: center;
        }

        .elementor-144 .elementor-element.elementor-element-f3cf0d0 .elementor-image img {
            width: 100%;
            max-width: 100%;
            height: 35vh;
        }

        @media (max-width: 1024px) {
            .elementor-144 .elementor-element.elementor-element-865795c:not(.elementor-motion-effects-element-type-background), .elementor-144 .elementor-element.elementor-element-865795c > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                background-position: center center;
                background-repeat: no-repeat;
                background-size: initial;
            }

            .elementor-144 .elementor-element.elementor-element-7865c1e > .elementor-element-populated {
                margin: 0px 020px 0px 20px;
            }

            .elementor-144 .elementor-element.elementor-element-f0962d9 {
                margin-top: 0px;
                margin-bottom: 10px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-144 .elementor-element.elementor-element-90efdba > .elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-144 .elementor-element.elementor-element-74297e1 .elementor-image img {
                width: 100%;
                max-width: 100%;
                height: 30vh;
            }

            .elementor-144 .elementor-element.elementor-element-ef66c82 > .elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-144 .elementor-element.elementor-element-e3b1520 {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-144 .elementor-element.elementor-element-9979e3c > .elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-144 .elementor-element.elementor-element-f3cf0d0 .elementor-image img {
                width: 100%;
                max-width: 100%;
                height: 30vh;
            }
        }

        @media (max-width: 767px) {
            .elementor-144 .elementor-element.elementor-element-865795c > .elementor-container {
                min-height: 100vh;
            }

            .elementor-144 .elementor-element.elementor-element-865795c > .elementor-container:after {
                content: "";
                min-height: inherit;
            }

            .elementor-144 .elementor-element.elementor-element-865795c:not(.elementor-motion-effects-element-type-background), .elementor-144 .elementor-element.elementor-element-865795c > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                background-size: cover;
            }

            .elementor-144 .elementor-element.elementor-element-865795c {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 10px 0px 10px;
            }

            .elementor-144 .elementor-element.elementor-element-7865c1e > .elementor-element-populated {
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px;
            }
        }

        @media (min-width: 768px) {
            .elementor-144 .elementor-element.elementor-element-90efdba {
                width: 100%;
            }
        }

        @media (max-width: 1024px) and (min-width: 768px) {
            .elementor-144 .elementor-element.elementor-element-90efdba {
                width: 100%;
            }

            .elementor-144 .elementor-element.elementor-element-9979e3c {
                width: 100%;
            }
        }
    </style>
    <meta content="width=device-width, initial-scale=1.0, viewport-fit=cover" name="viewport"/>
</head>
<body class="page-template page-template-elementor_canvas page page-id-144 wp-custom-logo wp-embed-responsive singular image-filters-enabled elementor-default elementor-template-canvas elementor-kit-7 elementor-page elementor-page-144">
<div class="elementor elementor-144" data-elementor-id="144" data-elementor-settings="[]" data-elementor-type="wp-page">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-865795c elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-invisible"
                    data-element_type="section" data-id="865795c"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7865c1e"
                             data-element_type="column" data-id="7865c1e"
                             data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-column-wrap elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <!--
                                    此处开始一号位
                                    -->
                                    <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-f0962d9 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                            data-element_type="section" data-id="f0962d9">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-90efdba"
                                                     data-element_type="column" data-id="90efdba">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-74297e1 elementor-widget elementor-widget-image"
                                                                 data-element_type="widget" data-id="74297e1"
                                                                 data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <a <?php
                                                                           echo 'href="'.$sn_ad_href.'"';
                                                                           ?>>

                                                                            <img alt=""
                                                                                 class="attachment-full size-full"
                                                                                 height="906"
                                                                                 loading="lazy"
                                                                                 sizes="(max-width: 1924px) 100vw, 1924px"
                                                                                <?php
                                                                                echo 'src="'.$sn_ad_imgurl.'"';
                                                                                ?>
                                                                                 width="1924"/>
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
                                    <!--
                                    此处开始按钮
                                    -->
                                    <div class="elementor-element elementor-element-ef66c82 elementor-align-center elementor-widget elementor-widget-button"
                                         data-element_type="widget" data-id="ef66c82" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button-link elementor-button elementor-size-md"
                                                    <?php
                                                    echo 'href="'.$SubmitUrl.'"'
                                                    ?>
                                                   role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-left">
				<i aria-hidden="true" class="fas fa-wifi"></i>			</span>
						<span class="elementor-button-text">连接免费Wifi</span>
		</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    此处开始二号位
                                    -->
                                    <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-e3b1520 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                            data-element_type="section" data-id="e3b1520">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9979e3c"
                                                     data-element_type="column" data-id="9979e3c">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-f3cf0d0 elementor-widget elementor-widget-image"
                                                                 data-element_type="widget" data-id="f3cf0d0"
                                                                 data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <a <?php
                                                                        echo 'href="'.$SubmitUrl.'"'
                                                                        ?>>
                                                                            <img alt=""
                                                                                 class="attachment-full size-full"
                                                                                 height="906"
                                                                                 loading="lazy"
                                                                                 sizes="(max-width: 1924px) 100vw, 1924px"
                                                                                 src="static/picture/111.jpg"
                                                                                 width="1924"/>
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
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script id='jquery-core-js' src='static/js/jquery.min.js'></script>
<script id='jquery-migrate-js' src='static/js/jquery-migrate.min.js'></script>
<script id='elementor-frontend-modules-js' src='static/js/frontend-modules.min.js'></script>
<script id='jquery-ui-core-js' src='static/js/core.min.js'></script>
<script id='elementor-waypoints-js' src='static/js/waypoints.min.js'></script>
<script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false},
        "i18n": {
            "shareOnFacebook": "\u5728\u8138\u4e66\u4e0a\u5206\u4eab",
            "shareOnTwitter": "\u5206\u4eab\u5230Twitter",
            "pinIt": "\u9489\u4f4f",
            "download": "\u4e0b\u8f7d",
            "downloadImage": "\u4e0b\u8f7d\u56fe\u7247",
            "fullscreen": "\u5168\u5c4f",
            "zoom": "\u7e2e\u653e",
            "share": "\u5206\u4eab",
            "playVideo": "\u64ad\u653e\u89c6\u9891",
            "previous": "\u4e0a\u4e00\u9875",
            "next": "\u4e0b\u4e00\u9875",
            "close": "\u5173\u95ed"
        }
    };
</script>
<script id='elementor-frontend-js' src='static/js/frontend.min.js'></script>
</body>
</html>
