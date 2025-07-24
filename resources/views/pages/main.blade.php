@extends('layouts.app')

@section('title')
Inicio
@endsection

@section('up')
{{--
<link rel="stylesheet" id="meks-flickr-widget-css" href="{{ asset('libraries/wp-content/plugins/meks-simple-flickr-widget/css/meks-flickr-widget.min.css') }}?ver=1.3" type="text/css" media="all" />
<link rel="stylesheet" id="newsletter-css" href="{{ asset('libraries/wp-content/plugins/newsletter/newsletter.min.css') }}?ver=8.6.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css') }}?ver=5.31.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/frontend.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="swiper-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css') }}?ver=8.4.5" type="text/css" media="all" />
<link rel="stylesheet" id="e-swiper-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-4540-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-4540.css') }}?ver=1729675946" type="text/css" media="all" />
<link rel="stylesheet" id="sbistyles-css" href="{{ asset('libraries/wp-content/plugins/instagram-feed/css/sbi-styles.min.css') }}?ver=6.6.0" type="text/css" media="all" />
<link rel="stylesheet" id="widget-text-editor-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="widget-google_maps-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/widget-google_maps.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-3510-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-3510.css') }}?ver=1729683939" type="text/css" media="all" />

<link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css') }}?ver=5.15.3" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css') }}?ver=5.15.3" type="text/css" media="all" />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
<script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/jquery.min.js') }}?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/jquery-migrate.min.js') }}?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/js/lib/waypoints.min.js') }}?ver=2.0.5" id="waypoints-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js') }}?ver=2.7.0-wc.9.3.3" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        ajax_url: "\/consultio-digital-marketing\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/consultio-digital-marketing\/?wc-ajax=%%endpoint%%",
        i18n_view_cart: "View cart",
        cart_url: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/cart\/",
        is_cart: "",
        cart_redirect_after_add: "no",
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js') }}?ver=9.3.3" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js') }}?ver=2.1.4-wc.9.3.3" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="woocommerce-js-extra">
    /* <![CDATA[ */
    var woocommerce_params = { ajax_url: "\/consultio-digital-marketing\/wp-admin\/admin-ajax.php", wc_ajax_url: "\/consultio-digital-marketing\/?wc-ajax=%%endpoint%%" };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js') }}?ver=9.3.3" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-inline-css-js.min.js') }}?ver=3.2.1" id="ct-inline-css-js-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-elementor-js.min.js') }}?ver=3.2.1" id="ct-elementor-js-js"></script>
<link rel="https://api.w.org/" href="{{ asset('libraries/wp-json/index.htm') }}" />
<link rel="alternate" title="JSON" type="application/json" href="{{ asset('libraries/wp-json/wp/v2/pages/3510') }}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.casethemes.net/consultio-digital-marketing/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.1" />
<meta name="generator" content="WooCommerce 9.3.3" />
<link rel="canonical" href="index.htm" />
<link rel="shortlink" href="index.htm?p=3510" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-40') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fcontact-v-2%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-41') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fcontact-v-2%2F&#038;format=xml" />
<meta name="generator" content="Redux 4.5.0" />
<noscript>
    <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
    </style>
</noscript>
--}}

<link rel="stylesheet" id="meks-flickr-widget-css" href="{{ asset('libraries/wp-content/plugins/meks-simple-flickr-widget/css/meks-flickr-widget.min.css') }}?ver=1.3" type="text/css" media="all" />
<link rel="stylesheet" id="newsletter-css" href="{{ asset('libraries/wp-content/plugins/newsletter/newsletter.min.css') }}?ver=8.6.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css') }}?ver=5.31.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/frontend.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="swiper-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css') }}?ver=8.4.5" type="text/css" media="all" />
<link rel="stylesheet" id="e-swiper-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-4540-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-4540.css') }}?ver=1729675946" type="text/css" media="all" />
<link rel="stylesheet" id="sbistyles-css" href="{{ asset('libraries/wp-content/plugins/instagram-feed/css/sbi-styles.min.css') }}?ver=6.6.0" type="text/css" media="all" />
<link rel="stylesheet" id="widget-divider-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/widget-divider.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="widget-icon-box-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-5147-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-5147.css') }}?ver=1729679441" type="text/css" media="all" />
<link
    rel="stylesheet"
    id="google-fonts-1-css"
    href="../../css-1?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.8.1"
    type="text/css"
    media="all"
/>
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
<script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/jquery.min.js') }}?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-includes/js/jquery/jquery-migrate.min.js') }}?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/js/lib/waypoints.min.js') }}?ver=2.0.5" id="waypoints-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js') }}?ver=2.7.0-wc.9.3.3" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        ajax_url: "\/consultio-digital-marketing\/wp-admin\/admin-ajax.php",
        wc_ajax_url: "\/consultio-digital-marketing\/?wc-ajax=%%endpoint%%",
        i18n_view_cart: "View cart",
        cart_url: "https:\/\/demo.casethemes.net\/consultio-digital-marketing\/cart\/",
        is_cart: "",
        cart_redirect_after_add: "no",
    };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js') }}?ver=9.3.3" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js') }}?ver=2.1.4-wc.9.3.3" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="woocommerce-js-extra">
    /* <![CDATA[ */
    var woocommerce_params = { ajax_url: "\/consultio-digital-marketing\/wp-admin\/admin-ajax.php", wc_ajax_url: "\/consultio-digital-marketing\/?wc-ajax=%%endpoint%%" };
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js') }}?ver=9.3.3" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-inline-css-js.min.js') }}?ver=3.2.1" id="ct-inline-css-js-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-elementor-js.min.js') }}?ver=3.2.1" id="ct-elementor-js-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-counter-widget-js.min.js') }}?ver=3.2.1" id="ct-counter-widget-js-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/js/lib/slick.min.js') }}?ver=1.8.1" id="jquery-slick-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-post-carousel-widget-js.min.js') }}?ver=3.2.1" id="ct-post-carousel-widget-js-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-progressbar-widget-js.min.js') }}?ver=3.2.1" id="ct-progressbar-widget-js-js"></script>
<link rel="https://api.w.org/" href="{{ asset('libraries/wp-json/index.htm') }}" />
<link rel="alternate" title="JSON" type="application/json" href="{{ asset('libraries/wp-json/wp/v2/pages/5147') }}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.casethemes.net/consultio-digital-marketing/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.1" />
<meta name="generator" content="WooCommerce 9.3.3" />
<link rel="canonical" href="index.htm" />
<link rel="shortlink" href="index.htm?p=5147" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-108') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fhome-onepage%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-109') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fhome-onepage%2F&#038;format=xml" />
<meta name="generator" content="Redux 4.5.0" />
<noscript>
    <style>
        .woocommerce-product-gallery {
            opacity: 1 !important;
        }
    </style>
</noscript>


@endsection



@section('content')
<div id="content" class="site-content">
    <div class="content-inner">
        <div class="ct-page-content content-container">
            <div class="row content-row">
                <div id="primary" class="content-area content-full-width col-12">
                    <main id="main" class="site-main">
                        <article id="post-5147" class="post-5147 page type-page status-publish hentry">
                            <div class="entry-content clearfix">
                                <div data-elementor-type="wp-page" data-elementor-id="5147" class="elementor elementor-5147">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-6130847c elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="6130847c"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-no">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-19259565" data-id="19259565" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-7f30ea37 elementor-widget elementor-widget-slider_revolution"
                                                        data-id="7f30ea37"
                                                        data-element_type="widget"
                                                        data-widget_type="slider_revolution.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="wp-block-themepunch-revslider">
                                                                <!-- START Digital REVOLUTION SLIDER 6.6.20 -->
                                                                <p class="rs-p-wp-fix"></p>
                                                                <rs-module-wrap
                                                                    id="rev_slider_2_1_wrapper"
                                                                    data-source="gallery"
                                                                    style="visibility: hidden; background: transparent; padding: 0; margin: 0px auto; margin-top: 0; margin-bottom: 0;"
                                                                >
                                                                    <rs-module id="rev_slider_2_1" style="" data-version="6.6.20">
                                                                        <rs-slides style="overflow: hidden; position: absolute;">
                                                                            <rs-slide
                                                                                style="position: absolute;"
                                                                                data-key="rs-4"
                                                                                data-title="Slide"
                                                                                data-thumb="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/bg-slider-01-50x100.jpg') }}"
                                                                                data-anim="ms:1000;r:0;"
                                                                                data-in="o:0;"
                                                                                data-out="a:false;"
                                                                            >
                                                                                <img
                                                                                    fetchpriority="high"
                                                                                    decoding="async"
                                                                                    src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                    alt=""
                                                                                    title="bg-slider-01"
                                                                                    width="1920"
                                                                                    height="808"
                                                                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                                                                    data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/bg-slider-01.jpg') }}"
                                                                                    data-parallax="off"
                                                                                    data-panzoom="d:10000;ss:110%;se:100;"
                                                                                    data-no-retina
                                                                                />
                                                                                <!--
-->
                                                                                <rs-group
                                                                                    id="slider-2-slide-4-layer-8"
                                                                                    data-type="group"
                                                                                    data-xy="xo:30px,30px,24px,20px;y:m;yo:10px,10px,0,0;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:600px,600px,600px,400px;h:420px,420px,370px,310px;"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="o:1;"
                                                                                    data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                                                                    style="z-index: 21;"
                                                                                >
                                                                                    <!--
-->
                                                                                    <a
                                                                                        id="slider-2-slide-4-layer-13"
                                                                                        class="rs-layer"
                                                                                        href="../about/index.htm"
                                                                                        target="_self"
                                                                                        rel="nofollow"
                                                                                        data-type="text"
                                                                                        data-xy="y:b;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:20,20,16,16;l:25,20,15,9;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1700;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7000;"
                                                                                        style="z-index: 20; font-family: 'Roboto';"
                                                                                    >
                                                                                        <span class="btn btn-half-circle2">
                                                                                            Acerca de nosotros<span class="ct-button-icon ct-align-icon-left"><i class="flaticonv2 flaticonv2-right-arrow"></i></span>
                                                                                        </span>
                                                                                    </a>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-4-layer-12"
                                                                                        data-type="text"
                                                                                        data-xy="yo:273px,273px,223px,157px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:24,24,18,16;l:32,32,28,28;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1500;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7200;"
                                                                                        style="z-index: 19; font-family: 'Roboto'; font-style: italic;"
                                                                                    >
                                                                                        We've been lucky to collaborate with<br />
                                                                                        <cite>a long list of customers</cite>
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-4-layer-11"
                                                                                        data-type="text"
                                                                                        data-xy="yo:162px,162px,130px,92px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:82,82,60,40;l:82,82,60,40;fw:900;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1300;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7400;"
                                                                                        style="z-index: 18; font-family: 'Roboto';"
                                                                                    >
                                                                                        Agency
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-4-layer-10"
                                                                                        data-type="text"
                                                                                        data-color="#253447"
                                                                                        data-xy="yo:78px,78px,60px,43px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:82,82,60,40;l:82,82,60,40;fw:700;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1100;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7600;"
                                                                                        style="z-index: 17; font-family: 'Roboto';"
                                                                                    >
                                                                                        Marketing
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-4-layer-9"
                                                                                        data-type="text"
                                                                                        data-xy="yo:-10px,-10px,-10px,-5px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:82,82,60,40;l:82,82,60,40;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:900;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7800;"
                                                                                        style="z-index: 16; font-family: 'Roboto';"
                                                                                    >
                                                                                        We are Digital
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                </rs-group>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-4-layer-0"
                                                                                    class="ct-slider-shapre-01"
                                                                                    data-type="image"
                                                                                    data-xy="xo:-240px,-240px,-290px,-290px;yo:-400px,-400px,-400px,-440px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:['655px','655px','655px','655px'];h:['616px','616px','616px','616px'];"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="x:-50;"
                                                                                    data-frame_1="st:600;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:8100;"
                                                                                    style="z-index: 9;"
                                                                                >
                                                                                    <img
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="655"
                                                                                        height="616"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape2.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-4-layer-1"
                                                                                    data-type="image"
                                                                                    data-xy="x:r;xo:-410px,-410px,-440px,-440px;y:b;yo:-200px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:['577px','577px','577px','577px'];h:['710px','710px','710px','710px'];"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="x:50;"
                                                                                    data-frame_1="st:600;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:8100;"
                                                                                    style="z-index: 8;"
                                                                                >
                                                                                    <img
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="577"
                                                                                        height="710"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape1.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-4-layer-2"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:r;xo:-45px,-37px,-28px,-17px;y:b;yo:100px,83px,63px,38px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:91px,75px,56px,34px;h:90px,74px,56px,34px;"
                                                                                    data-frame_0="y:50,41,31,19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 10;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="91"
                                                                                        height="90"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape6.png') }}"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-4-layer-3"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="xo:-210px,-174px,-132px,-81px;y:b;yo:140px,116px,88px,54px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:22px,18px,13px,8px;h:72px,59px,44px,27px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:50,41,31,19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 11;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="22"
                                                                                        height="72"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape8.png') }}"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-4-layer-4"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:c;xo:45px,37px,28px,17px;yo:135px,112px,85px,52px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:73px,60px,45px,27px;h:22px,18px,13px,8px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="x:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 12;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="73"
                                                                                        height="22"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape7.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-4-layer-5"
                                                                                    class="rs-pxl-2"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:r;xo:-50px,-41px,-31px,-19px;y:b;yo:235px,195px,148px,91px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:160px,133px,101px,62px;h:142px,118px,89px,54px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 13;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="160"
                                                                                        height="142"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape3.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-4-layer-6"
                                                                                    class="rs-pxl-1"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:c;xo:30px,24px,18px,11px;yo:250px,208px,158px,97px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:105px,87px,66px,40px;h:106px,88px,66px,40px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 14;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="105"
                                                                                        height="106"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape4.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-4-layer-7"
                                                                                    class="rs-pxl-3"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="xo:-210px,-174px,-132px,-81px;y:b;yo:260px,216px,164px,101px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:141px,117px,88px,54px;h:115px,95px,72px,44px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 15;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="141"
                                                                                        height="115"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape5.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-4-layer-14"
                                                                                    class="ct-slider-social"
                                                                                    data-type="text"
                                                                                    data-xy="xo:16px;y:b;yo:80px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:25,20,15,9;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="y:-50;"
                                                                                    data-frame_1="st:1700;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7000;"
                                                                                    style="z-index: 22; font-family: 'Roboto';"
                                                                                >
                                                                                    <div class="slider-social">
                                                                                        <br />
                                                                                        <a href="#"><i class="fab fa-behance"></i></a><br />
                                                                                        <a href="#"><i class="fab fa-dribbble"></i></a><br />
                                                                                        <a href="#"><i class="fab fa-twitter"></i></a><br />
                                                                                        <a href="#"><i class="fab fa-facebook"></i></a><br />
                                                                                    </div>
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <a
                                                                                    id="slider-2-slide-4-layer-15"
                                                                                    class="rs-layer ct-slider-button"
                                                                                    href="../contact/index.htm"
                                                                                    target="_self"
                                                                                    rel="nofollow"
                                                                                    data-type="text"
                                                                                    data-xy="xo:37px;y:m;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:25,20,15,9;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="y:-50;"
                                                                                    data-frame_1="st:1900;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:6800;"
                                                                                    style="z-index: 23; font-family: 'Roboto';"
                                                                                >
                                                                                    <span class="line-text-slider">Contact us</span>
                                                                                </a>
                                                                                <!--
-->
                                                                            </rs-slide>
                                                                            <rs-slide
                                                                                style="position: absolute;"
                                                                                data-key="rs-6"
                                                                                data-title="Slide"
                                                                                data-thumb="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/bg-slider-02-50x100.jpg') }}"
                                                                                data-anim="ms:1000;r:0;"
                                                                                data-in="o:0;"
                                                                                data-out="a:false;"
                                                                            >
                                                                                <img
                                                                                    loading="lazy"
                                                                                    decoding="async"
                                                                                    src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                    alt=""
                                                                                    title="bg-slider-02"
                                                                                    width="1920"
                                                                                    height="800"
                                                                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                                                                    data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/bg-slider-02.jpg"
                                                                                    data-parallax="off"
                                                                                    data-panzoom="d:10000;ss:100;se:110%;"
                                                                                    data-no-retina
                                                                                />
                                                                                <!--
-->
                                                                                <rs-group
                                                                                    id="slider-2-slide-6-layer-8"
                                                                                    data-type="group"
                                                                                    data-xy="xo:30px,30px,24px,20px;y:m;yo:10px,10px,0,0;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:600px,600px,600px,400px;h:420px,420px,370px,310px;"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="o:1;"
                                                                                    data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                                                                    style="z-index: 21;"
                                                                                >
                                                                                    <!--
-->
                                                                                    <a
                                                                                        id="slider-2-slide-6-layer-13"
                                                                                        class="rs-layer"
                                                                                        href="../about/index.htm"
                                                                                        target="_self"
                                                                                        rel="nofollow"
                                                                                        data-type="text"
                                                                                        data-xy="y:b;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:20,20,16,16;l:25,20,15,9;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1700;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7000;"
                                                                                        style="z-index: 20; font-family: 'Roboto';"
                                                                                    >
                                                                                        <span class="btn btn-half-circle2">
                                                                                            Acerca de nosotros<span class="ct-button-icon ct-align-icon-left"><i class="flaticonv2 flaticonv2-right-arrow"></i></span>
                                                                                        </span>
                                                                                    </a>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-6-layer-12"
                                                                                        data-type="text"
                                                                                        data-xy="yo:273px,273px,223px,157px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:24,24,18,16;l:32,32,28,28;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1500;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7200;"
                                                                                        style="z-index: 19; font-family: 'Roboto'; font-style: italic;"
                                                                                    >
                                                                                        We've been lucky to collaborate with<br />
                                                                                        <cite>a long list of customers</cite>
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-6-layer-11"
                                                                                        data-type="text"
                                                                                        data-xy="yo:162px,162px,130px,92px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:82,82,60,40;l:82,82,60,40;fw:900;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1300;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7400;"
                                                                                        style="z-index: 18; font-family: 'Roboto';"
                                                                                    >
                                                                                        Consulting
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-6-layer-10"
                                                                                        data-type="text"
                                                                                        data-color="#253447"
                                                                                        data-xy="yo:78px,78px,60px,43px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:82,82,60,40;l:82,82,60,40;fw:700;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1100;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7600;"
                                                                                        style="z-index: 17; font-family: 'Roboto';"
                                                                                    >
                                                                                        The Best
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-6-layer-9"
                                                                                        data-type="text"
                                                                                        data-xy="yo:-10px,-10px,-10px,-5px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:82,82,60,40;l:82,82,60,40;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:900;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7800;"
                                                                                        style="z-index: 16; font-family: 'Roboto';"
                                                                                    >
                                                                                        Consultio is
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                </rs-group>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-6-layer-0"
                                                                                    class="ct-slider-shapre-01"
                                                                                    data-type="image"
                                                                                    data-xy="xo:-240px,-240px,-290px,-290px;yo:-400px,-400px,-400px,-440px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:['655px','655px','655px','655px'];h:['616px','616px','616px','616px'];"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="x:-50;"
                                                                                    data-frame_1="st:600;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:8100;"
                                                                                    style="z-index: 9;"
                                                                                >
                                                                                    <img
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="655"
                                                                                        height="616"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape2.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-6-layer-1"
                                                                                    data-type="image"
                                                                                    data-xy="x:r;xo:-410px,-410px,-440px,-440px;y:b;yo:-200px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:['577px','577px','577px','577px'];h:['710px','710px','710px','710px'];"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="x:50;"
                                                                                    data-frame_1="st:600;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:8100;"
                                                                                    style="z-index: 8;"
                                                                                >
                                                                                    <img
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="577"
                                                                                        height="710"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape1.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-6-layer-2"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:r;xo:-45px,-37px,-28px,-17px;y:b;yo:100px,83px,63px,38px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:91px,75px,56px,34px;h:90px,74px,56px,34px;"
                                                                                    data-frame_0="y:50,41,31,19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 10;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="91"
                                                                                        height="90"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape6.png') }}"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-6-layer-3"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="xo:-210px,-174px,-132px,-81px;y:b;yo:140px,116px,88px,54px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:22px,18px,13px,8px;h:72px,59px,44px,27px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:50,41,31,19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 11;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="22"
                                                                                        height="72"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape8.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-6-layer-4"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:c;xo:45px,37px,28px,17px;yo:135px,112px,85px,52px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:73px,60px,45px,27px;h:22px,18px,13px,8px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="x:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 12;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="73"
                                                                                        height="22"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape7.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-6-layer-5"
                                                                                    class="rs-pxl-2"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:r;xo:-50px,-41px,-31px,-19px;y:b;yo:235px,195px,148px,91px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:160px,133px,101px,62px;h:142px,118px,89px,54px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 13;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="160"
                                                                                        height="142"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape3.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-6-layer-6"
                                                                                    class="rs-pxl-1"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:c;xo:30px,24px,18px,11px;yo:250px,208px,158px,97px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:105px,87px,66px,40px;h:106px,88px,66px,40px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 14;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="105"
                                                                                        height="106"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape4.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-6-layer-7"
                                                                                    class="rs-pxl-3"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="xo:-210px,-174px,-132px,-81px;y:b;yo:260px,216px,164px,101px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:141px,117px,88px,54px;h:115px,95px,72px,44px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 15;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="141"
                                                                                        height="115"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape5.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-6-layer-14"
                                                                                    class="ct-slider-social"
                                                                                    data-type="text"
                                                                                    data-xy="xo:16px;y:b;yo:80px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:25,20,15,9;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="y:-50;"
                                                                                    data-frame_1="st:1700;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7000;"
                                                                                    style="z-index: 22; font-family: 'Roboto';"
                                                                                >
                                                                                    <div class="slider-social">
                                                                                        <br />
                                                                                        <a href="#"><i class="fab fa-behance"></i></a><br />
                                                                                        <a href="#"><i class="fab fa-dribbble"></i></a><br />
                                                                                        <a href="#"><i class="fab fa-twitter"></i></a><br />
                                                                                        <a href="#"><i class="fab fa-facebook"></i></a><br />
                                                                                    </div>
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <a
                                                                                    id="slider-2-slide-6-layer-15"
                                                                                    class="rs-layer ct-slider-button"
                                                                                    href="../contact/index.htm"
                                                                                    target="_self"
                                                                                    rel="nofollow"
                                                                                    data-type="text"
                                                                                    data-xy="xo:37px;y:m;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:25,20,15,9;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="y:-50;"
                                                                                    data-frame_1="st:1900;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:6800;"
                                                                                    style="z-index: 23; font-family: 'Roboto';"
                                                                                >
                                                                                    <span class="line-text-slider">Contact us</span>
                                                                                </a>
                                                                                <!--
-->
                                                                            </rs-slide>
                                                                            <rs-slide
                                                                                style="position: absolute;"
                                                                                data-key="rs-7"
                                                                                data-title="Slide"
                                                                                data-thumb="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/bg-slider-03-50x100.jpg') }}"
                                                                                data-anim="ms:1000;r:0;"
                                                                                data-in="o:0;"
                                                                                data-out="a:false;"
                                                                            >
                                                                                <img
                                                                                    loading="lazy"
                                                                                    decoding="async"
                                                                                    src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                    alt=""
                                                                                    title="bg-slider-03"
                                                                                    width="1920"
                                                                                    height="800"
                                                                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                                                                    data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/bg-slider-03.jpg') }}"
                                                                                    data-parallax="off"
                                                                                    data-panzoom="d:10000;ss:110%;se:100;"
                                                                                    data-no-retina
                                                                                />
                                                                                <!--
-->
                                                                                <rs-group
                                                                                    id="slider-2-slide-7-layer-8"
                                                                                    data-type="group"
                                                                                    data-xy="xo:30px,30px,24px,20px;y:m;yo:10px,10px,0,0;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:600px,600px,600px,400px;h:420px,420px,370px,310px;"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="o:1;"
                                                                                    data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                                                                    style="z-index: 21;"
                                                                                >
                                                                                    <!--
-->
                                                                                    <a
                                                                                        id="slider-2-slide-7-layer-13"
                                                                                        class="rs-layer"
                                                                                        href="../about/index.htm"
                                                                                        target="_self"
                                                                                        rel="nofollow"
                                                                                        data-type="text"
                                                                                        data-xy="y:b;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:20,20,16,16;l:25,20,15,9;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1700;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7000;"
                                                                                        style="z-index: 20; font-family: 'Roboto';"
                                                                                    >
                                                                                        <span class="btn btn-half-circle2">
                                                                                            Acerca de nosotros<span class="ct-button-icon ct-align-icon-left"><i class="flaticonv2 flaticonv2-right-arrow"></i></span>
                                                                                        </span>
                                                                                    </a>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-7-layer-12"
                                                                                        data-type="text"
                                                                                        data-xy="yo:273px,273px,223px,157px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:24,24,18,16;l:32,32,28,28;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1500;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7200;"
                                                                                        style="z-index: 19; font-family: 'Roboto'; font-style: italic;"
                                                                                    >
                                                                                        We've been lucky to collaborate with<br />
                                                                                        <cite>a long list of customers</cite>
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-7-layer-11"
                                                                                        data-type="text"
                                                                                        data-xy="yo:162px,162px,130px,92px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:82,82,60,40;l:82,82,60,40;fw:900;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1300;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7400;"
                                                                                        style="z-index: 18; font-family: 'Roboto';"
                                                                                    >
                                                                                        Corporate
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-7-layer-10"
                                                                                        data-type="text"
                                                                                        data-color="#253447"
                                                                                        data-xy="yo:78px,78px,60px,43px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:82,82,60,40;l:82,82,60,40;fw:700;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:1100;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7600;"
                                                                                        style="z-index: 17; font-family: 'Roboto';"
                                                                                    >
                                                                                        The Best
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                    <rs-layer
                                                                                        id="slider-2-slide-7-layer-9"
                                                                                        data-type="text"
                                                                                        data-xy="yo:-10px,-10px,-10px,-5px;"
                                                                                        data-pos="a"
                                                                                        data-text="w:normal;s:82,82,60,40;l:82,82,60,40;"
                                                                                        data-rsp_o="off"
                                                                                        data-rsp_bd="off"
                                                                                        data-frame_0="y:50;"
                                                                                        data-frame_1="st:900;sp:1000;"
                                                                                        data-frame_999="o:0;st:w;sR:7800;"
                                                                                        style="z-index: 16; font-family: 'Roboto';"
                                                                                    >
                                                                                        Consultio is
                                                                                    </rs-layer>
                                                                                    <!--
-->
                                                                                </rs-group>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-7-layer-0"
                                                                                    class="ct-slider-shapre-01"
                                                                                    data-type="image"
                                                                                    data-xy="xo:-240px,-240px,-290px,-290px;yo:-400px,-400px,-400px,-440px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:['655px','655px','655px','655px'];h:['616px','616px','616px','616px'];"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="x:-50;"
                                                                                    data-frame_1="st:600;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:8100;"
                                                                                    style="z-index: 9;"
                                                                                >
                                                                                    <img
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="655"
                                                                                        height="616"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape2.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-7-layer-1"
                                                                                    data-type="image"
                                                                                    data-xy="x:r;xo:-410px,-410px,-440px,-440px;y:b;yo:-200px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:['577px','577px','577px','577px'];h:['710px','710px','710px','710px'];"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="x:50;"
                                                                                    data-frame_1="st:600;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:8100;"
                                                                                    style="z-index: 8;"
                                                                                >
                                                                                    <img
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="577"
                                                                                        height="710"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape1.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-7-layer-2"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:r;xo:-45px,-37px,-28px,-17px;y:b;yo:100px,83px,63px,38px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:91px,75px,56px,34px;h:90px,74px,56px,34px;"
                                                                                    data-frame_0="y:50,41,31,19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 10;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="91"
                                                                                        height="90"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape6.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-7-layer-3"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="xo:-210px,-174px,-132px,-81px;y:b;yo:140px,116px,88px,54px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:22px,18px,13px,8px;h:72px,59px,44px,27px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:50,41,31,19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 11;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="22"
                                                                                        height="72"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape8.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-7-layer-4"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:c;xo:45px,37px,28px,17px;yo:135px,112px,85px,52px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:73px,60px,45px,27px;h:22px,18px,13px,8px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="x:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 12;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="73"
                                                                                        height="22"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape7.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-7-layer-5"
                                                                                    class="rs-pxl-2"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:r;xo:-50px,-41px,-31px,-19px;y:b;yo:235px,195px,148px,91px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:160px,133px,101px,62px;h:142px,118px,89px,54px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 13;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="160"
                                                                                        height="142"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape3.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-7-layer-6"
                                                                                    class="rs-pxl-1"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="x:c;xo:30px,24px,18px,11px;yo:250px,208px,158px,97px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:105px,87px,66px,40px;h:106px,88px,66px,40px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 14;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="105"
                                                                                        height="106"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape4.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-7-layer-7"
                                                                                    class="rs-pxl-3"
                                                                                    data-type="image"
                                                                                    data-rsp_ch="on"
                                                                                    data-xy="xo:-210px,-174px,-132px,-81px;y:b;yo:260px,216px,164px,101px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
                                                                                    data-dim="w:141px,117px,88px,54px;h:115px,95px,72px,44px;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-frame_0="y:-50,-41,-31,-19;"
                                                                                    data-frame_1="st:800;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7900;"
                                                                                    style="z-index: 15;"
                                                                                >
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        src="{{ asset('libraries/wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                                                        alt=""
                                                                                        class="tp-rs-img rs-lazyload"
                                                                                        width="141"
                                                                                        height="115"
                                                                                        data-lazyload="//demo.casethemes.net/consultio-digital-marketing/wp-content/uploads/2021/02/slider-shape5.png"
                                                                                        data-no-retina
                                                                                    />
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <rs-layer
                                                                                    id="slider-2-slide-7-layer-14"
                                                                                    class="ct-slider-social"
                                                                                    data-type="text"
                                                                                    data-xy="xo:16px;y:b;yo:80px;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:25,20,15,9;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="y:-50;"
                                                                                    data-frame_1="st:1700;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:7000;"
                                                                                    style="z-index: 22; font-family: 'Roboto';"
                                                                                >
                                                                                    <div class="slider-social">
                                                                                        <br />
                                                                                        <a href="#"><i class="fab fa-behance"></i></a><br />
                                                                                        <a href="#"><i class="fab fa-dribbble"></i></a><br />
                                                                                        <a href="#"><i class="fab fa-twitter"></i></a><br />
                                                                                        <a href="#"><i class="fab fa-facebook"></i></a><br />
                                                                                    </div>
                                                                                </rs-layer>
                                                                                <!--
-->
                                                                                <a
                                                                                    id="slider-2-slide-7-layer-15"
                                                                                    class="rs-layer ct-slider-button"
                                                                                    href="../contact/index.htm"
                                                                                    target="_self"
                                                                                    rel="nofollow"
                                                                                    data-type="text"
                                                                                    data-xy="xo:37px;y:m;"
                                                                                    data-text="w:normal;s:20,16,12,7;l:25,20,15,9;"
                                                                                    data-vbility="t,t,f,f"
                                                                                    data-basealign="slide"
                                                                                    data-rsp_o="off"
                                                                                    data-rsp_bd="off"
                                                                                    data-frame_0="y:-50;"
                                                                                    data-frame_1="st:1900;sp:1000;"
                                                                                    data-frame_999="o:0;st:w;sR:6800;"
                                                                                    style="z-index: 23; font-family: 'Roboto';"
                                                                                >
                                                                                    <span class="line-text-slider">Contact us</span>
                                                                                </a>
                                                                                <!--
-->
                                                                            </rs-slide>
                                                                        </rs-slides>
                                                                    </rs-module>
                                                                    <script>
                                                                        setREVStartSize({
                                                                            c: "rev_slider_2_1",
                                                                            rl: [1240, 1024, 778, 480],
                                                                            el: [800, 800, 620, 540],
                                                                            gw: [1230, 1024, 778, 480],
                                                                            gh: [800, 800, 620, 540],
                                                                            type: "standard",
                                                                            justify: "",
                                                                            layout: "fullwidth",
                                                                            mh: "0",
                                                                        });
                                                                        if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider21"] !== undefined) {
                                                                            window.RS_MODULES.modules["revslider21"].once = false;
                                                                            window.revapi2 = undefined;
                                                                            if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal();
                                                                        }
                                                                    </script>
                                                                </rs-module-wrap>
                                                                <!-- END REVOLUTION SLIDER -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-926572c elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="926572c"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-49d8441c" data-id="49d8441c" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-6330a172 elementor-widget elementor-widget-ct_fancy_box"
                                                        data-id="6330a172"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_fancy_box.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-fancy-box ct-fancy-box-layout17 wow fadeInUp" data-wow-delay="50ms">
                                                                <div class="item--holder">
                                                                    <div class="item--overlay bg-image" style="background-image: url({{ asset('libraries/wp-content/uploads/2021/02/fancybox1.jpg') }});"></div>
                                                                    <div class="item--icon"><i aria-hidden="true" class="flaticonv6 flaticonv6-3d-design"></i></div>
                                                                    <h3 class="item--title">
                                                                        Web <br />
                                                                        Designing
                                                                    </h3>
                                                                    <div class="item--number">01</div>
                                                                </div>
                                                                <div class="item--holder-hover">
                                                                    <h3 class="item--title">
                                                                        Web <br />
                                                                        Designing
                                                                    </h3>
                                                                    <div class="item--description">As a app web crawler expert, organizations adjust.</div>
                                                                    <a class="item--link" href="../service/content-marketing/index.htm"><i class="flaticonv2-right-arrow"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7d94ac4" data-id="7d94ac4" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-34d077b1 elementor-widget elementor-widget-ct_fancy_box"
                                                        data-id="34d077b1"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_fancy_box.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-fancy-box ct-fancy-box-layout17 wow fadeInUp" data-wow-delay="100ms">
                                                                <div class="item--holder">
                                                                    <div class="item--overlay bg-image" style="background-image: url({{ asset('libraries/wp-content/uploads/2020/03/update-service-01.jpg') }});"></div>
                                                                    <div class="item--icon"><i aria-hidden="true" class="flaticonv6 flaticonv6-file"></i></div>
                                                                    <h3 class="item--title">
                                                                        Web & App <br />
                                                                        Development
                                                                    </h3>
                                                                    <div class="item--number">02</div>
                                                                </div>
                                                                <div class="item--holder-hover">
                                                                    <h3 class="item--title">
                                                                        Web & App <br />
                                                                        Development
                                                                    </h3>
                                                                    <div class="item--description">As a app web crawler expert, organizations adjust.</div>
                                                                    <a class="item--link" href="../service/content-marketing/index.htm"><i class="flaticonv2-right-arrow"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c0d13d9" data-id="c0d13d9" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-68059b43 elementor-widget elementor-widget-ct_fancy_box"
                                                        data-id="68059b43"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_fancy_box.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-fancy-box ct-fancy-box-layout17 wow fadeInUp" data-wow-delay="150ms">
                                                                <div class="item--holder">
                                                                    <div class="item--overlay bg-image" style="background-image: url({{ asset('libraries/wp-content/uploads/2021/02/fancybox2.jpg') }});"></div>
                                                                    <div class="item--icon"><i aria-hidden="true" class="flaticonv6 flaticonv6-search"></i></div>
                                                                    <h3 class="item--title">
                                                                        Social Media <br />
                                                                        Marketing
                                                                    </h3>
                                                                    <div class="item--number">03</div>
                                                                </div>
                                                                <div class="item--holder-hover">
                                                                    <h3 class="item--title">
                                                                        Social Media <br />
                                                                        Marketing
                                                                    </h3>
                                                                    <div class="item--description">As a app web crawler expert, organizations adjust.</div>
                                                                    <a class="item--link" href="../service/content-marketing/index.htm"><i class="flaticonv2-right-arrow"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-47c5cba5" data-id="47c5cba5" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-173a38b5 elementor-widget elementor-widget-ct_fancy_box"
                                                        data-id="173a38b5"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_fancy_box.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-fancy-box ct-fancy-box-layout17 wow fadeInUp" data-wow-delay="200ms">
                                                                <div class="item--holder">
                                                                    <div class="item--overlay bg-image" style="background-image: url({{ asset('libraries/wp-content/uploads/2019/12/gallery-02.jpg') }});"></div>
                                                                    <div class="item--icon"><i aria-hidden="true" class="flaticonv6 flaticonv6-manufacture"></i></div>
                                                                    <h3 class="item--title">
                                                                        Online Media <br />
                                                                        Marketing
                                                                    </h3>
                                                                    <div class="item--number">04</div>
                                                                </div>
                                                                <div class="item--holder-hover">
                                                                    <h3 class="item--title">
                                                                        Online Media <br />
                                                                        Marketing
                                                                    </h3>
                                                                    <div class="item--description">As a app web crawler expert, organizations adjust.</div>
                                                                    <a class="item--link" href="../service/content-marketing/index.htm"><i class="flaticonv2-right-arrow"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-4ce14c98 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="4ce14c98"
                                        data-element_type="section"
                                        id="section-about"
                                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-127b1b87" data-id="127b1b87" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-4da4334d elementor-widget elementor-widget-ct_image"
                                                        data-id="4da4334d"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_image.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-image-single img-type-img ct-no-effect img-hover-scale wow fadeInLeft" data-wow-delay="ms">
                                                                <img decoding="async" width="433" height="430" src="{{ asset('libraries/wp-content/uploads/2021/02/about1.png') }}" class="attachment-full" alt="" loading="eager" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5820513d" data-id="5820513d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-1d932633 elementor-widget elementor-widget-ct_heading"
                                                        data-id="1d932633"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_heading.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_heading-1d932633" class="ct-heading h-align- sub-style1 ct-heading-left item-st-default">
                                                                <div class="ct-item--inner">
                                                                    <div
                                                                        class="ct-inline-css"
                                                                        data-css="
"
                                                                    ></div>
                                                                    <div class="item--sub-title style1 show-line">Acerca de nosotros</div>
                                                                    <h3 class="item--title st-default case-animate-time" data-wow-delay="ms">
                                                                        <span class="sp-main"> We always provied <cite>best features to Clients</cite> </span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-617f3e2a elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="617f3e2a"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2e138ce" data-id="2e138ce" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-88cf0d1 elementor-widget elementor-widget-ct_text_editor"
                                                                        data-id="88cf0d1"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_text_editor.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_text_editor-88cf0d1" class="ct-text-editor" data-wow-delay="ms">
                                                                                <div class="ct-item--inner">
                                                                                    <div
                                                                                        class="ct-inline-css"
                                                                                        data-css="
"
                                                                                    ></div>
                                                                                    <div class="ct-text-editor elementor-clearfix">
                                                                                        <span class="first-letter style1">C</span> onsultio has been optimized to give your visitors the best experience in terms of UX/UI, with a
                                                                                        unique design to deliver.
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7c6dbf79" data-id="7c6dbf79" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-6fc52237 elementor-widget elementor-widget-ct_video_player"
                                                                        data-id="6fc52237"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_video_player.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-video-player video-player-style12 img-added">
                                                                                <img
                                                                                    loading="lazy"
                                                                                    decoding="async"
                                                                                    class=""
                                                                                    src="{{ asset('libraries/wp-content/uploads/2021/02/video-intro1-530x400.jpg') }}"
                                                                                    width="530"
                                                                                    height="400"
                                                                                    alt="video-intro1"
                                                                                    title="video-intro1"
                                                                                />
                                                                                <a class="ct-video-button style12" href="https://www.youtube.com/watch?v=SF4aHwxHtZ0">
                                                                                    <i class="fac fac-play"></i> <span class="line-video-animation line-video-1"></span> <span class="line-video-animation line-video-2"></span>
                                                                                    <span class="line-video-animation line-video-3"></span>
                                                                                </a>
                                                                                <span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div
                                                        class="elementor-element elementor-element-4af85368 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                        data-id="4af85368"
                                                        data-element_type="widget"
                                                        data-widget_type="divider.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-divider"><span class="elementor-divider-separator"> </span></div>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-2ebea5bc elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="2ebea5bc"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6c56db67" data-id="6c56db67" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-262d91be elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="262d91be"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="flaticonv6 flaticonv6-link"></i> </span>
                                                                                </div>
                                                                                <div class="elementor-icon-box-content">
                                                                                    <h3 class="elementor-icon-box-title"><span> Expert team member </span></h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-27ba686c digital-col1"
                                                                data-id="27ba686c"
                                                                data-element_type="column"
                                                            >
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-5dc5196a elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                                        data-id="5dc5196a"
                                                                        data-element_type="widget"
                                                                        data-widget_type="icon-box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-box-wrapper">
                                                                                <div class="elementor-icon-box-icon">
                                                                                    <span class="elementor-icon elementor-animation-"> <i aria-hidden="true" class="flaticonv6 flaticonv6-target-2"></i> </span>
                                                                                </div>
                                                                                <div class="elementor-icon-box-content">
                                                                                    <h3 class="elementor-icon-box-title"><span> Marketing facilities </span></h3>
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
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-101e5199 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="101e5199"
                                        data-element_type="section"
                                        id="section-services"
                                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7de7efb" data-id="7de7efb" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-7f9af18a elementor-widget elementor-widget-ct_heading"
                                                        data-id="7f9af18a"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_heading.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_heading-7f9af18a" class="ct-heading h-align- sub-style1 ct-heading-left item-st-default">
                                                                <div class="ct-item--inner">
                                                                    <div
                                                                        class="ct-inline-css"
                                                                        data-css="
"
                                                                    ></div>
                                                                    <div class="item--sub-title style1 show-line">Servicios</div>
                                                                    <h3 class="item--title st-default case-animate-time" data-wow-delay="ms">
                                                                        <span class="sp-main"> Proveemos los <cite>Mejores Servicios.</cite> </span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-36b09901 elementor-widget elementor-widget-ct_text_editor"
                                                        data-id="36b09901"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_text_editor.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_text_editor-36b09901" class="ct-text-editor" data-wow-delay="ms">
                                                                <div class="ct-item--inner">
                                                                    <div
                                                                        class="ct-inline-css"
                                                                        data-css="
"
                                                                    ></div>
                                                                    <div class="ct-text-editor elementor-clearfix">Consultio is a design studio founded in London and expanded our services, and become.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-4b9c7bf9 elementor-widget elementor-widget-ct_button"
                                                        data-id="4b9c7bf9"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_button.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_button-4b9c7bf9" class="ct-button-wrapper ct-button-layout1 icon-left btn--inline">
                                                                <div
                                                                    class="ct-inline-css"
                                                                    data-css="
"
                                                                ></div>
                                                                <span class="ct-icon-active"></span>
                                                                <a href="{{ route('services') }}" class="btn btn-half-circle1 icon-active btn-inline-block wow fadeInUp" data-wow-delay="ms">
                                                                    <span class="ct-button-icon ct-align-icon-left"> <i aria-hidden="true" class="flaticonv2 flaticonv2-right-arrow"></i> </span>
                                                                    <span class="ct-button-text">Servicios</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6f43efc8" data-id="6f43efc8" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7611620 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="7611620"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-158d4fc2" data-id="158d4fc2" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-10b274d1 elementor-widget elementor-widget-ct_fancy_box"
                                                                        data-id="10b274d1"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_fancy_box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-fancy-box ct-fancy-box-layout18 wow fadeInUp" data-wow-delay="ms">
                                                                                <div class="item--icon"><i aria-hidden="true" class="flaticonv6 flaticonv6-web"></i></div>
                                                                                <div class="icon-abs"><i aria-hidden="true" class="flaticonv6 flaticonv6-web"></i></div>
                                                                                <div class="item--holder">
                                                                                    <h3 class="item--title">Logo &amp; Branding</h3>
                                                                                    <div class="item--description">Our purpose is to build solutions that remove</div>
                                                                                    <div class="item--button">
                                                                                        <a href="../service/financial-services/index.htm"> <span>Read more</span> <i class="flaticonv2 flaticonv2-right-arrow"></i> </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3718025c" data-id="3718025c" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-77a395e1 elementor-widget elementor-widget-ct_fancy_box"
                                                                        data-id="77a395e1"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_fancy_box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-fancy-box ct-fancy-box-layout18 wow fadeInUp" data-wow-delay="100ms">
                                                                                <div class="item--icon"><i aria-hidden="true" class="flaticonv6 flaticonv6-files"></i></div>
                                                                                <div class="icon-abs"><i aria-hidden="true" class="flaticonv6 flaticonv6-files"></i></div>
                                                                                <div class="item--holder">
                                                                                    <h3 class="item--title">Pay-Per-Click</h3>
                                                                                    <div class="item--description">Our purpose is to build solutions that remove</div>
                                                                                    <div class="item--button">
                                                                                        <a href="../service/financial-services/index.htm"> <span>Read more</span> <i class="flaticonv2 flaticonv2-right-arrow"></i> </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-7780b325 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="7780b325"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4b680e6" data-id="4b680e6" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-1935ef2 elementor-widget elementor-widget-ct_fancy_box"
                                                                        data-id="1935ef2"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_fancy_box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-fancy-box ct-fancy-box-layout18 wow fadeInUp" data-wow-delay="ms">
                                                                                <div class="item--icon"><i aria-hidden="true" class="flaticonv6 flaticonv6-file"></i></div>
                                                                                <div class="icon-abs"><i aria-hidden="true" class="flaticonv6 flaticonv6-file"></i></div>
                                                                                <div class="item--holder">
                                                                                    <h3 class="item--title">Web Design</h3>
                                                                                    <div class="item--description">Our purpose is to build solutions that remove</div>
                                                                                    <div class="item--button">
                                                                                        <a href="../service/financial-services/index.htm"> <span>Read more</span> <i class="flaticonv2 flaticonv2-right-arrow"></i> </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-718320ae" data-id="718320ae" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-444a0c22 elementor-widget elementor-widget-ct_fancy_box"
                                                                        data-id="444a0c22"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_fancy_box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-fancy-box ct-fancy-box-layout18 wow fadeInUp" data-wow-delay="100ms">
                                                                                <div class="item--icon"><i aria-hidden="true" class="flaticonv6 flaticonv6-web-1"></i></div>
                                                                                <div class="icon-abs"><i aria-hidden="true" class="flaticonv6 flaticonv6-web-1"></i></div>
                                                                                <div class="item--holder">
                                                                                    <h3 class="item--title">SMM</h3>
                                                                                    <div class="item--description">Our purpose is to build solutions that remove</div>
                                                                                    <div class="item--button">
                                                                                        <a href="../service/financial-services/index.htm"> <span>Read more</span> <i class="flaticonv2 flaticonv2-right-arrow"></i> </a>
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
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-695a2ba7 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="695a2ba7"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div
                                                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6d15b25a"
                                                data-id="6d15b25a"
                                                data-element_type="column"
                                                data-settings='{"background_background":"classic"}'
                                            >
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-78713196 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="78713196"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-65647e6a" data-id="65647e6a" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-5c6f3a70 ct-counter-layout9 elementor-widget elementor-widget-ct_counter"
                                                                        data-id="5c6f3a70"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_counter.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_counter-5c6f3a70" class="ct-counter ct-counter-layout9" data-wow-delay="ms">
                                                                                <div
                                                                                    class="ct-inline-css"
                                                                                    data-css="
"
                                                                                ></div>
                                                                                <div class="ct-counter-inner">
                                                                                    <div class="ct-counter-meta">
                                                                                        <div class="ct-counter-icon"><i aria-hidden="true" class="flaticonv5 flaticonv5-employee"></i></div>
                                                                                        <div class="ct-counter-number">
                                                                                            <span class="ct-counter-number-prefix"></span>
                                                                                            <span class="ct-counter-number-value" data-duration="2000" data-to-value="105" data-delimiter="">1</span>
                                                                                            <span class="ct-counter-number-suffix">+</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ct-counter-title">Team members</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-48b6dfcf" data-id="48b6dfcf" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-7c864683 ct-counter-layout9 elementor-widget elementor-widget-ct_counter"
                                                                        data-id="7c864683"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_counter.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_counter-7c864683" class="ct-counter ct-counter-layout9" data-wow-delay="ms">
                                                                                <div
                                                                                    class="ct-inline-css"
                                                                                    data-css="
"
                                                                                ></div>
                                                                                <div class="ct-counter-inner">
                                                                                    <div class="ct-counter-meta">
                                                                                        <div class="ct-counter-icon"><i aria-hidden="true" class="flaticonv5 flaticonv5-achievement"></i></div>
                                                                                        <div class="ct-counter-number">
                                                                                            <span class="ct-counter-number-prefix"></span>
                                                                                            <span class="ct-counter-number-value" data-duration="2000" data-to-value="15" data-delimiter="">1</span>
                                                                                            <span class="ct-counter-number-suffix">+</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ct-counter-title">Winning awards</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-466454b7" data-id="466454b7" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-28de65d1 ct-counter-layout9 elementor-widget elementor-widget-ct_counter"
                                                                        data-id="28de65d1"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_counter.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_counter-28de65d1" class="ct-counter ct-counter-layout9" data-wow-delay="ms">
                                                                                <div
                                                                                    class="ct-inline-css"
                                                                                    data-css="
"
                                                                                ></div>
                                                                                <div class="ct-counter-inner">
                                                                                    <div class="ct-counter-meta">
                                                                                        <div class="ct-counter-icon"><i aria-hidden="true" class="flaticonv5 flaticonv5-handshake"></i></div>
                                                                                        <div class="ct-counter-number">
                                                                                            <span class="ct-counter-number-prefix"></span>
                                                                                            <span class="ct-counter-number-value" data-duration="2000" data-to-value="10" data-delimiter="">1</span>
                                                                                            <span class="ct-counter-number-suffix">k+</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ct-counter-title">Completed project</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-51b264f4" data-id="51b264f4" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-47feff85 ct-counter-layout9 elementor-widget elementor-widget-ct_counter"
                                                                        data-id="47feff85"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_counter.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_counter-47feff85" class="ct-counter ct-counter-layout9" data-wow-delay="ms">
                                                                                <div
                                                                                    class="ct-inline-css"
                                                                                    data-css="
"
                                                                                ></div>
                                                                                <div class="ct-counter-inner">
                                                                                    <div class="ct-counter-meta">
                                                                                        <div class="ct-counter-icon"><i aria-hidden="true" class="flaticonv5 flaticonv5-online-marketing"></i></div>
                                                                                        <div class="ct-counter-number">
                                                                                            <span class="ct-counter-number-prefix"></span>
                                                                                            <span class="ct-counter-number-value" data-duration="2000" data-to-value="850" data-delimiter="">1</span>
                                                                                            <span class="ct-counter-number-suffix">+</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ct-counter-title">Client’s reviews</div>
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
                                            <div
                                                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-27f55b0a"
                                                data-id="27f55b0a"
                                                data-element_type="column"
                                                data-settings='{"background_background":"classic"}'
                                            >
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-30b8597b elementor-widget elementor-widget-ct_fancy_box"
                                                        data-id="30b8597b"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_fancy_box.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-fancy-box ct-fancy-box-layout1 style10" data-wow-delay="ms">
                                                                <div class="item--icon">
                                                                    <span class="item--shape"></span> <i aria-hidden="true" class="flaticonv6 flaticonv6-phone-call-2"></i> <a class="item--link" href="#"></a>
                                                                </div>
                                                                <div class="item--holder">
                                                                    <h3 class="item--title">Call for help!</h3>
                                                                    <div class="item--description"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-33ba8112 elementor-widget elementor-widget-ct_text_editor"
                                                        data-id="33ba8112"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_text_editor.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_text_editor-33ba8112" class="ct-text-editor" data-wow-delay="ms">
                                                                <div class="ct-item--inner">
                                                                    <div
                                                                        class="ct-inline-css"
                                                                        data-css="
"
                                                                    ></div>
                                                                    <div class="ct-text-editor elementor-clearfix">+234-13-1810</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-6717c410 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="6717c410"
                                        data-element_type="section"
                                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3a438d43" data-id="3a438d43" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-6e59a293 elementor-widget elementor-widget-ct_heading"
                                                        data-id="6e59a293"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_heading.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_heading-6e59a293" class="ct-heading h-align- sub-style1 ct-heading-left item-st-default">
                                                                <div class="ct-item--inner">
                                                                    <div
                                                                        class="ct-inline-css"
                                                                        data-css="
"
                                                                    ></div>
                                                                    <div class="item--sub-title style1 show-line">Testimonios</div>
                                                                    <h3 class="item--title st-default case-animate-time" data-wow-delay="ms">
                                                                        <span class="sp-main"> Algunas reseñas <cite>de clientes satisfechos</cite> </span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-264e209c elementor-widget elementor-widget-ct_testimonial_carousel"
                                                        data-id="264e209c"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_testimonial_carousel.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-testimonial ct-testimonial-carousel18 ct-slick-slider">
                                                                <div class="ct-carousel-inner">
                                                                    <div
                                                                        class="ct-slick-carousel"
                                                                        data-arrows="true"
                                                                        data-dots=""
                                                                        data-pauseonhover=""
                                                                        data-autoplay=""
                                                                        data-autoplayspeed="5000"
                                                                        data-infinite=""
                                                                        data-speed="500"
                                                                        data-colxs="1"
                                                                        data-colsm="1"
                                                                        data-colmd="1"
                                                                        data-collg="1"
                                                                        data-colxl="1"
                                                                        data-slidestoscroll="1"
                                                                        data-dir="false"
                                                                    >
                                                                        @foreach($comments as $comment)
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner">
                                                                                <div class="item--rating">
                                                                                    <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i>
                                                                                </div>
                                                                                <div class="item--description">
                                                                                    &quot;{{ $comment->comment }}&quot;
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--image">
                                                                                        <img
                                                                                            loading="lazy"
                                                                                            decoding="async"
                                                                                            class=""
                                                                                            src="{{ $comment->photo ? Storage::url($comment->photo) : asset('no-photo.png') }}"
                                                                                            width="80"
                                                                                            height="80"
                                                                                            alt="u-testimonial-01"
                                                                                            title="u-testimonial-01"
                                                                                        />
                                                                                    </div>
                                                                                    <div class="item--meta">
                                                                                        <h3 class="item--title">{{ $comment->name }}</h3>
                                                                                        <div class="item--position">{{ $comment->position }}</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
{{--
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner">
                                                                                <div class="item--rating">
                                                                                    <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i>
                                                                                </div>
                                                                                <div class="item--description">
                                                                                    &quot;Working with several word press themes and templates the last years, I only can say this is the best in every level. I use it for my
                                                                                    company and the reviews that I have already are all excellent. Not only the design.&quot;
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--image">
                                                                                        <img
                                                                                            loading="lazy"
                                                                                            decoding="async"
                                                                                            class=""
                                                                                            src="{{ asset('libraries/wp-content/uploads/2021/02/u-testimonial-01-80x80.jpg') }}"
                                                                                            width="80"
                                                                                            height="80"
                                                                                            alt="u-testimonial-01"
                                                                                            title="u-testimonial-01"
                                                                                        />
                                                                                    </div>
                                                                                    <div class="item--meta">
                                                                                        <h3 class="item--title">Joyce Thompson</h3>
                                                                                        <div class="item--position">Asistant Manager</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner">
                                                                                <div class="item--rating">
                                                                                    <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i>
                                                                                </div>
                                                                                <div class="item--description">
                                                                                    “You deserve care that’s simple, personalized, and hassle free. Safe Insurance that’s designed to help you thrive. Usage in merchandise,
                                                                                    clothing, and artwork. Contrary to popular belief, Lorem Ipsum is not simple.”
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--image">
                                                                                        <img
                                                                                            loading="lazy"
                                                                                            decoding="async"
                                                                                            class=""
                                                                                            src="{{ asset('libraries/wp-content/uploads/2019/11/testimonial-04-80x80.jpg') }}"
                                                                                            width="80"
                                                                                            height="80"
                                                                                            alt="testimonial-04"
                                                                                            title="testimonial-04"
                                                                                        />
                                                                                    </div>
                                                                                    <div class="item--meta">
                                                                                        <h3 class="item--title">Pamela Johnson</h3>
                                                                                        <div class="item--position">Leadership Group</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner">
                                                                                <div class="item--rating">
                                                                                    <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i> <i class="fac fac-star"></i>
                                                                                </div>
                                                                                <div class="item--description">
                                                                                    “You deserve care that’s simple, personalized, and hassle free. Safe Insurance that’s designed to help you thrive. Usage in merchandise,
                                                                                    clothing, and artwork. Contrary to popular belief, Lorem Ipsum is not simple.”
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--image">
                                                                                        <img
                                                                                            loading="lazy"
                                                                                            decoding="async"
                                                                                            class=""
                                                                                            src="{{ asset('libraries/wp-content/uploads/2019/11/testimonial-05-80x80.jpg') }}"
                                                                                            width="80"
                                                                                            height="80"
                                                                                            alt="testimonial-05"
                                                                                            title="testimonial-05"
                                                                                        />
                                                                                    </div>
                                                                                    <div class="item--meta">
                                                                                        <h3 class="item--title">Van Hunter</h3>
                                                                                        <div class="item--position">Senior Director</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
--}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-616909a0" data-id="616909a0" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-7c3548b7 elementor-widget elementor-widget-ct_image"
                                                        data-id="7c3548b7"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_image.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-image-single img-type-img ct-no-effect img-hover-scale wow fadeInRight" data-wow-delay="ms">
                                                                <img decoding="async" width="573" height="459" src="{{ asset('libraries/wp-content/uploads/2021/02/testimonials-group.png') }}" class="attachment-full" alt="" loading="eager" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-3a6ca27f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="3a6ca27f"
                                        data-element_type="section"
                                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
                                    >
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5da96bdb" data-id="5da96bdb" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-1aa94294 elementor-widget elementor-widget-ct_tabs"
                                                        data-id="1aa94294"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_tabs.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-tabs ct-tabs--layout2 type-vertical2 style1">
                                                                <div class="ct-tabs-title">
                                                                    <span class="ct-tab-title active" data-target="#ct_tabs-1aa94294-7c06035"> <i aria-hidden="true" class="flaticonv6 flaticonv6-flag"></i> Our Mission </span>
                                                                    <span class="ct-tab-title" data-target="#ct_tabs-1aa94294-e4c1148"> <i aria-hidden="true" class="flaticonv6 flaticonv6-focus"></i> Our Vision </span>
                                                                    <span class="ct-tab-title" data-target="#ct_tabs-1aa94294-d896e42"> <i aria-hidden="true" class="flaticonv6 flaticonv6-philosophy"></i> Phiosophy </span>
                                                                </div>
                                                                <div class="ct-tabs-content">
                                                                    <div class="ct-tab-content" id="ct_tabs-1aa94294-7c06035" style="display: block;">
                                                                        Over more than 20 years, we’ve foste red trusted relationships across gover nment, industry and global forums. We adapt our delivery to the way your work,
                                                                        whether as an exter To provide consultancy for preparing of all sorts of corporate.
                                                                    </div>
                                                                    <div class="ct-tab-content" id="ct_tabs-1aa94294-e4c1148">
                                                                        Forging relationships between multi to national corporations, governments and global NGOs begins with connections between people. Design studio founded in
                                                                        London and expanded our services, and become a multinational firm, offering services.
                                                                    </div>
                                                                    <div class="ct-tab-content" id="ct_tabs-1aa94294-d896e42">
                                                                        Over more than 20 years, we’ve foste red trusted relationships across gover nment, industry and global forums. We adapt our delivery to the way your work,
                                                                        whether as an exter To provide consultancy for preparing of all sorts of corporate.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-66c82d68 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="66c82d68"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4ac0f9a2" data-id="4ac0f9a2" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-7009f571 elementor-widget elementor-widget-ct_heading"
                                                                        data-id="7009f571"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_heading.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div id="ct_heading-7009f571" class="ct-heading h-align- sub-style1 ct-heading-left item-st-default">
                                                                                <div class="ct-item--inner">
                                                                                    <div
                                                                                        class="ct-inline-css"
                                                                                        data-css="
"
                                                                                    ></div>
                                                                                    <h3 class="item--title st-default case-animate-time" data-wow-delay="ms">
                                                                                        <span class="sp-main"> Essential business <cite>skills.</cite> </span>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-411b0e8a" data-id="411b0e8a" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-afa502a elementor-widget elementor-widget-ct_progressbar"
                                                                        data-id="afa502a"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_progressbar.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-progressbar ct-progressbar5">
                                                                                <div class="ct-progress-item">
                                                                                    <div class="ct-progress-meta"><span class="ct-progress-title">Social media marketing</span></div>
                                                                                    <div class="ct-progress-holder">
                                                                                        <div class="ct-progress-bar" role="progressbar" data-valuetransitiongoal="80"><div class="ct-progress-percentage">80%</div></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ct-progress-item">
                                                                                    <div class="ct-progress-meta"><span class="ct-progress-title">Designing &amp; Branding</span></div>
                                                                                    <div class="ct-progress-holder">
                                                                                        <div class="ct-progress-bar" role="progressbar" data-valuetransitiongoal="90"><div class="ct-progress-percentage">90%</div></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ct-progress-item">
                                                                                    <div class="ct-progress-meta"><span class="ct-progress-title">Web &amp; App Development</span></div>
                                                                                    <div class="ct-progress-holder">
                                                                                        <div class="ct-progress-bar" role="progressbar" data-valuetransitiongoal="70"><div class="ct-progress-percentage">70%</div></div>
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
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1491b1cb" data-id="1491b1cb" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-ff54c37 text-center elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-ct_video_player"
                                                        data-id="ff54c37"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_video_player.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-video-player video-player-style13">
                                                                <a class="ct-video-button style13" href="https://www.youtube.com/watch?v=SF4aHwxHtZ0">
                                                                    <i class="fac fac-play"></i> <span class="line-video-animation line-video-1"></span> <span class="line-video-animation line-video-2"></span>
                                                                    <span class="line-video-animation line-video-3"></span>
                                                                </a>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-5ee7f899 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="5ee7f899"
                                        data-element_type="section"
                                        data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-10d9171b" data-id="10d9171b" data-element_type="column">
                                                <div class="elementor-widget-wrap"></div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1677b60b" data-id="1677b60b" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-1c57c7c0 elementor-widget elementor-widget-ct_heading"
                                                        data-id="1c57c7c0"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_heading.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_heading-1c57c7c0" class="ct-heading h-align-center sub-style1 ct-heading-left item-st-default">
                                                                <div class="ct-item--inner">
                                                                    <div
                                                                        class="ct-inline-css"
                                                                        data-css=""
                                                                    ></div>
                                                                    <div class="item--sub-title style1 show-line">Miembros del Equipo</div>
                                                                    <h3 class="item--title st-default case-animate-time" data-wow-delay="ms">
                                                                        <span class="sp-main"> Our expert team <cite>is the best ever.</cite> </span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2bb562f7" data-id="2bb562f7" data-element_type="column">
                                                <div class="elementor-widget-wrap"></div>
                                            </div>
                                        </div>
                                    </section>

                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-737f256e elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="737f256e"
                                        data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a90fcd4" data-id="6a90fcd4" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-7b3746ad elementor-widget elementor-widget-ct_team_carousel"
                                                        data-id="7b3746ad"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_team_carousel.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-team ct-team-carousel9 ct-slick-slider">
                                                                <div class="ct-carousel-inner dot-style-u4">
                                                                    <div
                                                                        class="ct-slick-carousel slick-arrow-style2"
                                                                        data-arrows=""
                                                                        data-dots="true"
                                                                        data-pauseonhover=""
                                                                        data-autoplay=""
                                                                        data-autoplayspeed="5000"
                                                                        data-infinite=""
                                                                        data-speed="500"
                                                                        data-colxs="1"
                                                                        data-colsm="2"
                                                                        data-colmd="2"
                                                                        data-collg="3"
                                                                        data-colxl="4"
                                                                        data-dir="false"
                                                                        data-slidestoscroll="1"
                                                                    >
                                                                        @foreach($team_members as $team_member)
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner wow flipInY">
                                                                                <div class="item--image">
                                                                                    <a class="item--link" href="{{ route('about_team', $team_member) }}"></a>
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ $team_member->photo ? Storage::url($team_member->photo) : asset('no-photo.jpg') }}"
                                                                                        width="269"
                                                                                        height="324"
                                                                                        alt="digital-team-01"
                                                                                        title="digital-team-01"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title"><a href="{{ route('about_team', $team_member) }}">{{ $team_member->lastname .' '. $team_member->name }}</a></h3>
                                                                                    <div class="item--position">{{ $team_member->position }}</div>
                                                                                </div>
                                                                                <div class="item--social">
                                                                                    <span class="item--social-btn"><i>+</i></span>
                                                                                    <div class="item--social-icon">
                                                                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                                                                        <a href="#" target="_blank"><i class="fab fa-behance"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
{{--
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner wow flipInY">
                                                                                <div class="item--image">
                                                                                    <a class="item--link" href="../team-details/index.htm"></a>
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ asset('libraries/wp-content/uploads/2020/12/digital-team-01.jpg') }}"
                                                                                        width="269"
                                                                                        height="324"
                                                                                        alt="digital-team-01"
                                                                                        title="digital-team-01"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title"><a href="../team-details/index.htm">Donald Johnson</a></h3>
                                                                                    <div class="item--position">Executive Manager</div>
                                                                                </div>
                                                                                <div class="item--social">
                                                                                    <span class="item--social-btn"><i>+</i></span>
                                                                                    <div class="item--social-icon">
                                                                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                                                                        <a href="#" target="_blank"><i class="fab fa-behance"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner wow flipInY">
                                                                                <div class="item--image">
                                                                                    <a class="item--link" href="../team-details/index.htm"></a>
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ asset('libraries/wp-content/uploads/2020/12/digital-team-02.jpg') }}"
                                                                                        width="269"
                                                                                        height="324"
                                                                                        alt="digital-team-02"
                                                                                        title="digital-team-02"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title"><a href="../team-details/index.htm">Alan Smith </a></h3>
                                                                                    <div class="item--position">Senior Director</div>
                                                                                </div>
                                                                                <div class="item--social">
                                                                                    <span class="item--social-btn"><i>+</i></span>
                                                                                    <div class="item--social-icon">
                                                                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                                                                        <a href="" target="_blank"><i class="fab fa-behance"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner wow flipInY">
                                                                                <div class="item--image">
                                                                                    <a class="item--link" href="../team-details/index.htm"></a>
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ asset('libraries/wp-content/uploads/2020/12/digital-team-03.jpg') }}"
                                                                                        width="269"
                                                                                        height="324"
                                                                                        alt="digital-team-03"
                                                                                        title="digital-team-03"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title"><a href="../team-details/index.htm">Kathleen Smith </a></h3>
                                                                                    <div class="item--position">Executive Manager</div>
                                                                                </div>
                                                                                <div class="item--social">
                                                                                    <span class="item--social-btn"><i>+</i></span>
                                                                                    <div class="item--social-icon">
                                                                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                                                                        <a href="" target="_blank"><i class="fab fa-behance"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner wow flipInY">
                                                                                <div class="item--image">
                                                                                    <a class="item--link" href="../team-details/index.htm"></a>
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ asset('libraries/wp-content/uploads/2020/12/digital-team-04.jpg') }}"
                                                                                        width="269"
                                                                                        height="324"
                                                                                        alt="digital-team-04"
                                                                                        title="digital-team-04"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title"><a href="../team-details/index.htm">Alan Smith</a></h3>
                                                                                    <div class="item--position">Asistant Manager</div>
                                                                                </div>
                                                                                <div class="item--social">
                                                                                    <span class="item--social-btn"><i>+</i></span>
                                                                                    <div class="item--social-icon">
                                                                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                                                                        <a href="" target="_blank"><i class="fab fa-behance"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="item--inner wow flipInY">
                                                                                <div class="item--image">
                                                                                    <a class="item--link" href="../team-details/index.htm"></a>
                                                                                    <img
                                                                                        loading="lazy"
                                                                                        decoding="async"
                                                                                        class=""
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/12/team-single-269x324.jpg') }}"
                                                                                        width="269"
                                                                                        height="324"
                                                                                        alt="team-single"
                                                                                        title="team-single"
                                                                                    />
                                                                                </div>
                                                                                <div class="item--meta">
                                                                                    <h3 class="item--title"><a href="../team-details/index.htm">Brad Smith</a></h3>
                                                                                    <div class="item--position">Executive Manager</div>
                                                                                </div>
                                                                                <div class="item--social">
                                                                                    <span class="item--social-btn"><i>+</i></span>
                                                                                    <div class="item--social-icon">
                                                                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                                                                        <a href="" target="_blank"><i class="fab fa-behance"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
--}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-61bb19d9 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="61bb19d9"
                                        data-element_type="section"
                                        id="section-contact"
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-63fb2f0d" data-id="63fb2f0d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-70c7412d elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                                        data-id="70c7412d"
                                                        data-element_type="section"
                                                    >
                                                        <div class="elementor-container elementor-column-gap-extended">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-39f0ddec" data-id="39f0ddec" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-1d7e6e31 elementor-widget elementor-widget-ct_fancy_box"
                                                                        data-id="1d7e6e31"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_fancy_box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-fancy-box ct-fancy-box-layout1 style11" data-wow-delay="ms">
                                                                                <div class="item--icon">
                                                                                    <span class="item--shape"></span> <i aria-hidden="true" class="flaticonv6 flaticonv6-home"></i> <a class="item--link" href="#"></a>
                                                                                </div>
                                                                                <div class="item--holder"><div class="item--description">3556 Hartford Way Vlg, Mount Pleasant, SC,</div></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-667c81aa" data-id="667c81aa" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-63b212f6 elementor-widget elementor-widget-ct_fancy_box"
                                                                        data-id="63b212f6"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_fancy_box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-fancy-box ct-fancy-box-layout1 style11" data-wow-delay="ms">
                                                                                <div class="item--icon">
                                                                                    <span class="item--shape"></span> <i aria-hidden="true" class="flaticonv6 flaticonv6-telephone-1"></i> <a class="item--link" href="#"></a>
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--description">
                                                                                        +00-012-264412<br />
                                                                                        +00-012-546543
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-468cc66f" data-id="468cc66f" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div
                                                                        class="elementor-element elementor-element-2fae4731 elementor-widget elementor-widget-ct_fancy_box"
                                                                        data-id="2fae4731"
                                                                        data-element_type="widget"
                                                                        data-widget_type="ct_fancy_box.default"
                                                                    >
                                                                        <div class="elementor-widget-container">
                                                                            <div class="ct-fancy-box ct-fancy-box-layout1 style11" data-wow-delay="ms">
                                                                                <div class="item--icon">
                                                                                    <span class="item--shape"></span> <i aria-hidden="true" class="flaticonv6 flaticonv6-worldwide"></i> <a class="item--link" href="#"></a>
                                                                                </div>
                                                                                <div class="item--holder">
                                                                                    <div class="item--description">
                                                                                        www.website.com<br />
                                                                                        demomail@mail.com
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div
                                                        class="elementor-element elementor-element-673c95de elementor-widget elementor-widget-ct_heading"
                                                        data-id="673c95de"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_heading.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_heading-673c95de" class="ct-heading h-align- sub-style1 ct-heading-left item-st-default">
                                                                <div class="ct-item--inner">
                                                                    <div
                                                                        class="ct-inline-css"
                                                                        data-css="
"
                                                                    ></div>
                                                                    <h3 class="item--title st-default case-animate-time" data-wow-delay="ms"><span class="sp-main"> Send messege: </span></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-64bfe372 elementor-widget elementor-widget-ct_ctf7"
                                                        data-id="64bfe372"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_ctf7.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-contact-form-layout1 style14">
                                                                <div class="ct-contact-form-inner">
                                                                    <div class="ct-contact-form">
                                                                        <div class="wpcf7 no-js" id="wpcf7-f6068-p5147-o1" lang="en-US" dir="ltr" data-wpcf7-id="6068">
                                                                            <div class="screen-reader-response">
                                                                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                                                <ul></ul>
                                                                            </div>
                                                                            <form
                                                                                action="/consultio-digital-marketing/home-onepage/#wpcf7-f6068-p5147-o1"
                                                                                method="post"
                                                                                class="wpcf7-form init"
                                                                                aria-label="Contact form"
                                                                                novalidate="novalidate"
                                                                                data-status="init"
                                                                            >
                                                                                <div style="display: none;">
                                                                                    <input type="hidden" name="_wpcf7" value="6068" /> <input type="hidden" name="_wpcf7_version" value="6.0" />
                                                                                    <input type="hidden" name="_wpcf7_locale" value="en_US" /> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6068-p5147-o1" />
                                                                                    <input type="hidden" name="_wpcf7_container_post" value="5147" /> <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-filled col-lg-6 col-md-6">
                                                                                        <p>
                                                                                            <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                                                                <input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Name"
                                                                                                    value=""
                                                                                                    type="text"
                                                                                                    name="your-name"
                                                                                                />
                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="input-filled col-lg-6 col-md-6">
                                                                                        <p>
                                                                                            <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                                                                <input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="E-mail"
                                                                                                    value=""
                                                                                                    type="email"
                                                                                                    name="your-email"
                                                                                                />
                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="input-filled col-12">
                                                                                        <p>
                                                                                            <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                                                                <textarea
                                                                                                    cols="40"
                                                                                                    rows="10"
                                                                                                    maxlength="2000"
                                                                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Messege"
                                                                                                    name="your-message"
                                                                                                ></textarea>
                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="input-filled col-12">
                                                                                        <p>
                                                                                            <button type="submit" class="wpcf7-submit btn btn-half-circle1 icon-active">
                                                                                                Send Message<span class="ct-button-icon ct-align-icon-left"><i class="flaticonv2 flaticonv2-right-arrow"></i></span>
                                                                                            </button>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
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
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-5147 -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
        </div>
    </div>
    <!-- #content inner -->
</div>
<!-- #content -->
@endsection