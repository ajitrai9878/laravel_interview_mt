<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Athens Marketing</title>
    <link rel="shortcut icon" href="{{asset('assets/frontend/images/favicon.png')}}" type="image/x-icon">
    <link href="{{asset('assets/frontend')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('assets/frontend')}}/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>
<header class="header-part">
    <div class="container">
        <div class="flex-header">
            <div class="header-ico">
                <div class="header-logo">
                    <a href="{{route('index')}}">
                        <img src="{{asset('uploads/logos/'.@$cms->header_logo)}}">
                    </a>
                </div>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="{{route('index')}}">{{@$cms->header_home_button_name}}</a></li>
                    <li><a href="{{route('contactUs')}}"
                           class="contact-tab">{{@$cms->header_contact_us_button_name}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="content-wrapper_">
    <section class="banner-part">
        <div class="video-part">
            <video autoplay muted loop playsinline preload="metadata">
                <source src="{{asset('assets/frontend')}}/images/banner.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container">
            <div class="banner-content">
                <h4>{{@$cms->banner_text_1}}</h4>
                <h1>{{@$cms->banner_text_2}}</h1>
                <p>{{@$cms->banner_text_3}}</p>
                <a href="{{route('contactUs')}}">{{@$cms->banner_contact_us_button_name}}</a>
            </div>
        </div>
    </section>

    <section class="welcome-part">
        <div class="container">
            <div class="page-head">
                <h5>{{@$cms->welcome_section_text_1}}</h5>
                <h3>{{@$cms->welcome_section_text_2}}</h3>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="welcome-box1">
                        <div class="p-4">
                            <h5 class="head-color-1">{{@$cms->welcome_sub_section_title_1}}</h5>
                            <p>{{@$cms->welcome_sub_section_description_1}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="welcome-box2">
                        <div class="p-4">
                            <h5 class="head-color-2">{{@$cms->welcome_sub_section_title_2}}</h5>
                            <p>{{@$cms->welcome_sub_section_description_2}} </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="welcome-box3">
                        <div class="p-4">
                            <h5 class="head-color-3">{{@$cms->welcome_sub_section_title_3}}</h5>
                            <p>{{@$cms->welcome_sub_section_description_3}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cold-calling-part">
        <div class="video-part">
            <video autoplay muted loop playsinline preload="metadata">
                <source src="{{asset('assets/frontend')}}/images/particals.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container">
            <div class="cutsom-wraper1">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>{{@$cms->banner_section_2_text_1}}</h3>
                        <p>{{@$cms->banner_section_2_text_2}}
                        </p>
                        <p>{{@$cms->banner_section_2_text_3}}</p>
                        <a href="{{route('contactUs')}}">{{@$cms->banner_section_2_contact_us_button_name}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="here-got">
        <div class="container">
            <div class="page-head">
                <h3>{{@$cms->what_you_get_area_text}}</h3>
            </div>
            <div class="row mt-6">
                <div class="col-lg-4">
                    <div class="here-box bg-color">
                        <div class="here-icon"><img src="{{asset('assets/frontend')}}/images/dollar.svg" alt=""></div>
                        <div class="here-content">
                            <h4>{{@$cms->what_you_get_area_sub_section_title_1}}</h4>
                            <p>{{@$cms->what_you_get_area_sub_section_description_1}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="here-box bg-color1">
                        <div class="here-icon"><img src="{{asset('assets/frontend')}}/images/icon-3.png" alt=""></div>
                        <div class="here-content">
                            <h4>{{@$cms->what_you_get_area_sub_section_title_2}}</h4>
                            <p>{{@$cms->what_you_get_area_sub_section_description_2}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="here-box bg-color2">
                        <div class="here-icon"><img src="{{asset('assets/frontend')}}/images/graph.svg" alt=""></div>
                        <div class="here-content">
                            <h4>{{@$cms->what_you_get_area_sub_section_title_3}}</h4>
                            <p>{{@$cms->what_you_get_area_sub_section_description_3}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-work-part">
        <div class="video-part">
            <video autoplay muted loop playsinline preload="metadata">
                <source src="{{asset('assets/frontend')}}/images/ringWave.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container">
            <div class="cutsom-wraper1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-head text-right"><h3>{{@$cms->how_it_works_area_text}}</h3></div>
                    </div>
                    <div class="col-md-6">
                        <div class="work-box">
                            <h3>{{@$cms->how_it_works_area_sub_section_title_1}}</h3>
                            <p>{{@$cms->how_it_works_area_sub_section_description_1}}</p>
                        </div>
                        <div class="work-box">
                            <h3>{{@$cms->how_it_works_area_sub_section_title_2}}</h3>
                            <p>{{@$cms->how_it_works_area_sub_section_description_2}}</p>
                        </div>
                        <div class="work-box">
                            <h3>{{@$cms->how_it_works_area_sub_section_title_3}}</h3>
                            <p>{{@$cms->how_it_works_area_sub_section_description_3}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-network-part">
        <div class="video-part-network">
            <video autoplay muted loop playsinline preload="metadata">
                <source src="{{asset('assets/frontend')}}/images/ring.mp4" type="video/mp4">
            </video>
        </div>
        <div class="cutsom-wraper">
            <div class="row">
                <div class="col-lg-9">
                    <div class="page-head text-left w-100 pb-4">
                        <h3>{{@$cms->join_our_network_area_text}}</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="work-box w-100">
                                <h3>{{@$cms->join_our_network_area_sub_section_title_1}}</h3>
                                <p>{{@$cms->join_our_network_area_sub_section_description_1}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="work-box w-100">
                                <h3>{{@$cms->join_our_network_area_sub_section_title_2}}</h3>
                                <p>{{@$cms->join_our_network_area_sub_section_description_2}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faster-part">
        <div class="container">
            <div class="page-head color-chnage">
                <h3>{{@$cms->last_section_text_1}}</h3>
                <p>{{@$cms->last_section_text_2}}</p>
                <p>{{@$cms->last_section_text_3}}</p>
                <a href="{{route('contactUs')}}">{{@$cms->last_section_contact_us_button_name}}</a>
            </div>
        </div>
    </section>

    <footer class="footer-part">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-logo"><img src="{{asset('uploads/logos/'.@$cms->footer_logo)}}" alt=""></div>
                    </div>
                    <!--<div class="col-md-6">-->
                    <!--    <div class="footer-link">-->
                    <!--        <ul>-->
                    <!--            <li>-->
                <!--                <a href="{{@$cms->twitter}}">-->
                <!--                    <img src="{{asset('assets/frontend')}}/images/fa-twitter.svg">-->
                    <!--                </a></li>-->
                    <!--            <li>-->
                <!--                <a href="{{@$cms->facebook}}">-->
                <!--                    <img src="{{asset('assets/frontend')}}/images/fa-facebook-square.svg">-->
                    <!--                </a>-->
                    <!--            </li>-->
                    <!--            <li>-->
                <!--                <a href="{{@$cms->google}}">-->
                <!--                    <img src="{{asset('assets/frontend')}}/images/fa-google-plus.svg">-->
                    <!--                </a>-->
                    <!--            </li>-->
                    <!--        </ul>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-breadcumb">
                            <ul>
                                <li><a href="{{route('index')}}">{{@$cms->footer_section_home_text}}</a></li>
                                <li><span>/</span></li>
                                <li><a href="{{route('contactUs')}}">{{@$cms->footer_section_contact_us_text}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-copy">
                            <p>{{@$cms->last_section_rights_text}}</p>>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{asset('assets/frontend')}}/js/jquery-2.2.4.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/frontend.js"></script>
</body>
</html>
