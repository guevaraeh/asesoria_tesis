@extends('layouts.app')

@section('title')
Acerca de Nosotros
@endsection

@section('up')
<link rel="stylesheet" id="meks-flickr-widget-css" href="{{ asset('libraries/wp-content/plugins/meks-simple-flickr-widget/css/meks-flickr-widget.min.css') }}?ver=1.3" type="text/css" media="all" />
<link rel="stylesheet" id="newsletter-css" href="{{ asset('libraries/wp-content/plugins/newsletter/newsletter.min.css') }}?ver=8.6.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css') }}?ver=5.31.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/frontend.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="swiper-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css') }}?ver=8.4.5" type="text/css" media="all" />
<link rel="stylesheet" id="e-swiper-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-4540-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-4540.css') }}?ver=1729675946" type="text/css" media="all" />
<link rel="stylesheet" id="sbistyles-css" href="{{ asset('libraries/wp-content/plugins/instagram-feed/css/sbi-styles.min.css') }}?ver=6.6.0" type="text/css" media="all" />
<link rel="stylesheet" id="widget-text-editor-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css') }}?ver=3.25.4" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-362-css" href="{{ asset('libraries/wp-content/uploads/elementor/css/post-362.css') }}?ver=1729686158" type="text/css" media="all" />
{{--
<link
    rel="stylesheet"
    id="google-fonts-1-css"
    href="../../css-1?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.8.1"
    type="text/css"
    media="all"
/>
--}}
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css') }}?ver=5.15.3" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{ asset('libraries/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css') }}?ver=5.15.3" type="text/css" media="all" />
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
<script type="text/javascript" src="{{ asset('libraries/wp-content/plugins/case-theme-core/assets/js/lib/slick.min.js') }}?ver=1.8.1" id="jquery-slick-js"></script>
<script type="text/javascript" src="{{ asset('libraries/wp-content/uploads/siteground-optimizer-assets/ct-post-carousel-widget-js.min.js') }}?ver=3.2.1" id="ct-post-carousel-widget-js-js"></script>
<link rel="https://api.w.org/" href="{{ asset('libraries/wp-json/index.htm') }}" />
<link rel="alternate" title="JSON" type="application/json" href="{{ asset('libraries/wp-json/wp/v2/pages/362') }}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.casethemes.net/consultio-digital-marketing/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.1" />
<meta name="generator" content="WooCommerce 9.3.3" />
<link rel="canonical" href="index.htm" />
<link rel="shortlink" href="index.htm?p=362" />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-20') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fteam-details%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{ asset('libraries/wp-json/oembed/1.0/embed-21') }}?url=https%3A%2F%2Fdemo.casethemes.net%2Fconsultio-digital-marketing%2Fteam-details%2F&#038;format=xml" />
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
<div id="pagetitle" class="page-title bg-image text-center">
    <div class="container">
        <div class="page-title-inner">
            <div class="page-title-holder"><h1 class="page-title">Team Details</h1></div>
            <ul class="ct-breadcrumb">
                <li><a class="breadcrumb-entry" href="../index.htm">Home</a></li>
                <li><span class="breadcrumb-entry">Team Details</span></li>
            </ul>
        </div>
    </div>
</div>
<div id="content" class="site-content">
    <div class="content-inner">
        <div class="ct-page-content content-container">
            <div class="row content-row">
                <div id="primary" class="content-area content-full-width col-12">
                    <main id="main" class="site-main">
                        <article id="post-362" class="post-362 page type-page status-publish hentry">
                            <div class="entry-content clearfix">
                                <div data-elementor-type="wp-page" data-elementor-id="362" class="elementor elementor-362">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-2645f20 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="2645f20"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-33d032e" data-id="33d032e" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-0f31e21 elementor-widget elementor-widget-ct_heading"
                                                        data-id="0f31e21"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_heading.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div id="ct_heading-0f31e21" class="ct-heading h-align- sub- ct-heading-left item-st-line-top1">
                                                                <div class="ct-item--inner">
                                                                    <div
                                                                        class="ct-inline-css"
                                                                        data-css="
"
                                                                    ></div>
                                                                    <h3 class="item--title st-line-top1 case-animate-time" data-wow-delay="ms">
                                                                        <div class="ct-heading-divider"><span></span></div>
                                                                        <span class="sp-main"> We will satisfy you by our work ideas </span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-89f4b61" data-id="89f4b61" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-80ad649 elementor-widget elementor-widget-text-editor"
                                                        data-id="80ad649"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            At vero eos et accusamus et iusto odio digni goiku sendeno ssimos ducimus qui blanditiis praese. Ntium voluum deleniti atque corrupti quos.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-e2d4a6c elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="e2d4a6c"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-de3f4f6" data-id="de3f4f6" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-605e76d elementor-widget elementor-widget-ct_team_details"
                                                        data-id="605e76d"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_team_details.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-team-details">
                                                                <div class="ct-team-image bg-image" style="background-image: url({{ $team_member->photo ? Storage::url($team_member->photo) : asset('no-photo.jpg') }});"></div>
                                                                <div class="ct-team-content bg-image">
                                                                    <div class="ct-team-holder">
                                                                        <div class="ct-team-icon"><i class="fac fac-user-cog"></i></div>
                                                                        <div class="ct-team-meta">
                                                                            <h3 class="ct-team-title">{{ $team_member->lastname .' '. $team_member->name }}</h3>
                                                                            <div class="ct-team-position">{{ $team_member->position }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="ct-team-contact">
                                                                        <li>
                                                                            <i class="fac fac-envelope"></i>
                                                                            @foreach($team_member->emails as $email)
                                                                            {{ $email->email }}<br>
                                                                            @endforeach
                                                                        </li>
                                                                        <li>
                                                                            <i class="fac fac-phone"></i>
                                                                            @foreach($team_member->phones as $phone)
                                                                            {{ preg_replace("/^(\d{3})(\d{3})(\d{3})$/", "$1 $2 $3", $phone->number) }}<br>
                                                                            @endforeach 
                                                                        </li>
                                                                        <li class="contact-address"><i class="fac fac-map-marker-alt"></i>380 St Kilda Road, Melbourne VIC 3004, Australia</li>
                                                                    </ul>
                                                                    <div class="ct-team-social">
                                                                        <div class="ct-team-button"><a class="btn" href="../contact/index.htm">CV</a></div>
                                                                        <div class="ct-team-social-list">
                                                                            <a href="#"> <i aria-hidden="true" class="material zmdi zmdi-facebook"></i> </a> <a href="#"> <i aria-hidden="true" class="fab fa-twitter"></i> </a>
                                                                            <a href="#"> <i aria-hidden="true" class="fab fa-dribbble"></i> </a> <a href="#"> <i aria-hidden="true" class="fab fa-behance"></i> </a>
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

                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-2b0ab90 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="2b0ab90"
                                        data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-11c2a9c" data-id="11c2a9c" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-5f5bc25 elementor-widget elementor-widget-text-editor"
                                                        data-id="5f5bc25"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            {{ $team_member->description }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
{{--
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-2b0ab90 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="2b0ab90"
                                        data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-11c2a9c" data-id="11c2a9c" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-5f5bc25 elementor-widget elementor-widget-text-editor"
                                                        data-id="5f5bc25"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            Lorem ipsum dolor sit amet consectetur adipiscing tofo dosed do eiusmod tempor incididunt ut labore dolore sedodir magna aliqua. Lorem Ipsum has been rode. Making good
                                                            food choices takes on special significant for people living with diabetes. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                                            labore et dolore magnaaliqua anim id est laborum. Sed ut perspiciatis unde.
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-3b73102 elementor-widget elementor-widget-text-editor"
                                                        data-id="3b73102"
                                                        data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                                            perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. Ut enim ad minim veniam.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
--}}
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-f3d2e30 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="f3d2e30"
                                        data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6b4a0ae" data-id="6b4a0ae" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-17e0426 elementor-widget elementor-widget-ct_fancy_box"
                                                        data-id="17e0426"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_fancy_box.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-fancy-box ct-fancy-box-layout2" data-wow-delay="ms">
                                                                <div class="item--icon"><i aria-hidden="true" class="flaticon flaticon-skill"></i></div>
                                                                <div class="item--holder">
                                                                    <h3 class="item--title">Expert team member</h3>
                                                                    <div class="item--description">Lorem ipsum dolor sit amet, cotu topsectetur adipisicing elit, sed.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-eaf1b54" data-id="eaf1b54" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-faff530 elementor-widget elementor-widget-ct_fancy_box"
                                                        data-id="faff530"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_fancy_box.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-fancy-box ct-fancy-box-layout2" data-wow-delay="ms">
                                                                <div class="item--icon"><i aria-hidden="true" class="flaticon flaticon-setting-spanner"></i></div>
                                                                <div class="item--holder">
                                                                    <h3 class="item--title">24/7 Customer support</h3>
                                                                    <div class="item--description">Lorem ipsum dolor sit amet, cotu topsectetur adipisicing elit, sed.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-1927758b elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-row-max-none"
                                        data-id="1927758b"
                                        data-element_type="section"
                                    >
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aafda89" data-id="aafda89" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div
                                                        class="elementor-element elementor-element-29260a70 elementor-widget elementor-widget-ct_clients_list"
                                                        data-id="29260a70"
                                                        data-element_type="widget"
                                                        data-widget_type="ct_clients_list.default"
                                                    >
                                                        <div class="elementor-widget-container">
                                                            <div class="ct-client1 ct-slick-slider style1">
                                                                <div class="ct-clients-list-inner">
                                                                    <div
                                                                        class="ct-slick-carousel"
                                                                        data-arrows=""
                                                                        data-dots=""
                                                                        data-pauseonhover=""
                                                                        data-autoplay="true"
                                                                        data-autoplayspeed="8000"
                                                                        data-infinite="true"
                                                                        data-speed="800"
                                                                        data-colxs="2"
                                                                        data-colsm="3"
                                                                        data-colmd="4"
                                                                        data-collg="4"
                                                                        data-colxl="4"
                                                                        data-dir="false"
                                                                        data-slidestoscroll="1"
                                                                    >
                                                                        <div class="slick-slide">
                                                                            <div class="client-image">
                                                                                <a href="#">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        width="169"
                                                                                        height="35"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/client-01.png') }}"
                                                                                        class="ct-thumb-1 attachment-full"
                                                                                        alt=""
                                                                                        loading="eager"
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="client-image">
                                                                                <a href="#">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        width="143"
                                                                                        height="42"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/client-02.png') }}"
                                                                                        class="ct-thumb-1 attachment-full"
                                                                                        alt=""
                                                                                        loading="eager"
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="client-image">
                                                                                <a href="#">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        width="166"
                                                                                        height="38"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/client-03.png') }}"
                                                                                        class="ct-thumb-1 attachment-full"
                                                                                        alt=""
                                                                                        loading="eager"
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="client-image">
                                                                                <a href="#">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        width="170"
                                                                                        height="35"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/11/client-04.png') }}"
                                                                                        class="ct-thumb-1 attachment-full"
                                                                                        alt=""
                                                                                        loading="eager"
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="slick-slide">
                                                                            <div class="client-image">
                                                                                <a href="#">
                                                                                    <img
                                                                                        decoding="async"
                                                                                        width="196"
                                                                                        height="36"
                                                                                        src="{{ asset('libraries/wp-content/uploads/2019/12/client-05.png') }}"
                                                                                        class="ct-thumb-1 attachment-full"
                                                                                        alt=""
                                                                                        loading="eager"
                                                                                    />
                                                                                </a>
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
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-362 -->
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