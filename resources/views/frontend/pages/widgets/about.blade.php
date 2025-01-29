<section class="about-area section-padding-bottom">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <figure class="about-image">
                    <img src="{{asset($about->image ?? '')}}" alt="" class="wow fadeInUp" data-wow-delay="0.3s">
                </figure>
            </div>
            <div class="col-lg-6 about-area-inner">
                <div class="about-text">
                    <h3 class="title wow fadeInUp" data-wow-delay="0.3s">{{$about->title ?? ''}}</h3>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        {!! $about->description ?? '' !!}
                    </div>
                    <a href="{{route('admin.resume.download')}}" class="button-primary-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                        <span class="icon"><i class="fal fa-download"></i></span>
                        <span class="text">Download Resume</span>
                        <span class="dir-part"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<style>

    @media (min-width: 640px) and (max-width: 991px) {
        /*.single-certificate #certificate[style] {*/
        /*    width: 100% !important;*/
        /*    max-width: 100% !important;*/
        /*    height: auto !important;*/
        /*}*/
        #certificate span.mycertificate_course_date {
            left: 50%;
        }
        #certificate p.mycertificate_code {
            left: 50%;
        }
    }
    @media (max-width: 639px) {
        .single-certificate #certificate[style] {
            width: 300px !important;
            max-width: 100% !important;
            height: auto !important;
            margin-bottom: 10px;
        }
        #certificate h1.mycertificate_student_name {
            font-size: 11px;
            top: 160px;
        }
        #certificate h2.mycertificate_course {
            font-size: 8px;
            top: 208px !important;
        }
        #certificate span.mycertificate_course_date {
            font-size: 6px;
            top: 259px !important;
            left: 50%;
        }
        #certificate p.mycertificate_code {
            font-size: 6px;
            top: 271px !important;
            left: 50%;
        }
    }


    /*Certificate template css*/
    p.mycertificate_code {
        top: 499px!important;
        right: -285px !important;
    }
    h2.mycertificate_course {
        top: 375px !important;
        margin-left: 160px !important;
    }
    h1.mycertificate_student_name {
        margin-left: 162px !important;
    }
    /*Certificate template css ends*/

    .page-id-342174  nav.menu-main-menu-container {
        background: transparent !important;
    }


    /* Shoive All Course Widget Css */

    .page-id-0 .widget .widget_title {
        font-weight: 600 !important;
        text-align: center;
    }

    .my-account div#item-body div#subnav ul li a {
        color: black !important;
    }

    .my-account .item-desc,.directory.course .item-desc {
        display: none;
    }
    body.bp-user.my-account #buddypress ul.item-list li .item-credits,
    body.directory.course #buddypress ul.item-list li .item-credits {
        margin-top: inherit !important;
        float: right !important;
    }



    h2#footerlogo {
        width: 29px;
        margin-top: -22px !IMPORTANT;
    }

    .single-course div#item-meta {
        display: inherit !important;
        max-width: 323px;
        text-align: center;
        margin: 0 auto;
    }
    .single-course div#buddypress {
        padding-top: 40px !important;
    }


    .material header { border: none;box-shadow: none;}
    .single-course.c5 .course_header{background:#23b7b7;
    }
    .banner-text{
        position:absolute !important;
        top:1%;
        z-index:1;
        width:100%;
    }
    header nav>.menu>li>a strong, header.sleek .topmenu>li>a {font-weight:500;}
    nav .menu li a{margin-left:0;
        font-weight: 500;}
    nav .sub-menu {left:auto;}
    .sleek .topmenu>li:first-child a>span {
        max-width: 105px;
        line-height: 1.5;
        padding-left: 5px;
        overflow: inherit;
    }
    .banner-text h3 {
        text-transform: capitalize;
        letter-spacing: 0;
        line-height: 60px;
        margin:0;
        color:#fff;
        font-size: 40px;
        font-weight:400;
    }
    .heading h1 {
        text-transform: capitalize !important;
        letter-spacing: 0 !important;
        font-size: 60px !important;
        line-height: 74px !important;
        font-weight: 600 !important;
        color: #000 !important;
        border-bottom: 0;
    }
    .heading {
        border-bottom: 0;
    }
    .bottom-text{
        font-size:18px;
        color: #fff;
        margin-top:15px;
    }
    .button {
        border-radius: 4px;
        padding: 13px 22px;
        font-size: 15px;
        text-transform: capitalize;
        box-shadow: 3px 3px #fff !important;
        font-weight: 500;
    }
    .button:hover {
        box-shadow: none !important;
        transition: all 0.3s ease 0s;
        padding: 15px 24px;
    }
    .bannerbtn .button{
        padding: 14px 22px;
        font-size: 15px;
        text-transform: capitalize;
        box-shadow: 3px 3px #fff !important;
    }
    .bannerbtn .button:hover {
        box-shadow: none !important;
        transition: all 0.3s ease 0s;
        padding: 16px 24px;
    }
    .elementor-widget-heading .elementor-heading-title {
        font-family: "Rubik";
        font-weight: 500;
        /*background: linear-gradient(to left TOP, #4063e2, #349add);*/
        /*background: linear-gradient(to left TOP, #000, #000);*/
        /*-webkit-background-clip: text;*/
        /*-webkit-text-fill-color: transparent;*/
        font-size: 37px;
        font-weight: 500;
        text-transform:none;
    }

    .home .block .block_media img {
        position:relative;
        filter: blur(8px);
        -webkit-filter: blur(2px);
        -webkit-transition: 0.6s ease;
        transition: 0.6s ease;
    }
    .home .block_content{
        padding: 26px 26px 20px 0px;
    }
    .home .block_title{
        overflow: hidden;
        padding: 4px 50px 15px 23px;
        border-left: 3px solid #ff4177;
        line-height: 1.22;
        margin-top:0 !important;
    }
    .home .block_title a{
        color:#fff;font-size: 22px;font-weight: 500;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;}

    .home p.block_description {color:#fff;display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;}
    .block .block_title, .block .block_description, .block .button{margin-left:26px;}

    .home .block .block_content {
        position:absolute;
        z-index:1;
        bottom:30px;
        height:calc(100% - 30px);
        height:100%;
        bottom:0;
    }
    .home .block .block_media {
        position:relative;
    }

    .home .block.course7{margin-bottom:0;}


    .home .block_content .button {
        width: 100%;
        margin: 0;
        padding: 0;
        text-align: center;
        padding: 5px 0px;
        color: #ffffff;
        border-radius: none !important;
    }

    .home .block_content strong{
        color:#fff;font-weight: 500;display: block;padding-left: 26px;display: none;}

    #offering h3{height:40px;}
    .bkg-svg{
        width: 105%;
        min-width: 1930px;
        left: 0;
        z-index: 1;
        bottom: 22px;
        position: absolute;
    }

    .opacity {opacity: 1;}
    .shaper{height: 770px;}
    .shaper1{height: 70px;}
    .feature-block h3{
        color: #ff4177 !important;
        font-family: Rubik !important;
        font-weight: 400 !important;
        font-size: 20px !important;
    }
    .feature-block p{color: #2f2f2f !important;font-family: Rubik !important;}
    .play-button .video-play {
        box-shadow: 0 0 40px rgba(0,0,0,0.2);
        border-radius: 100px;
        height: 48px;
        width: 48px;
        margin: 0 auto;
        height:76px;
        width:76px;
    }
    .best-teacher-text {
        padding: 31px 0 7px;
        font-size: 2em;
        line-height: 1.33;
        color:#fff;
    }
    .handpicked-text {
        font-size: 1.2em;
        line-height: 1.23;
        color: #ffffff;
        margin: 0 auto;
    }
    .play-button .play {
        width: 76px;
        height: 76px;
    }
    .wplms_registration_form {
        padding: 40px 30px;
        background: #32cac8;
        border-radius: 5px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        color: #fff;
        float:right;
        width:100%;
    }
    .wplms_registration_form legend, .wplms_registration_form label {
        border: none;
        font-size: 16px;
        color: #fff;
        margin: 0 0 10px;
        font-weight: 500;

    }
    .wplms_registration_form input {
        width: 100%;
        border-radius: 5px;
        border: 2px solid rgba(255,255,255,0.2);
        padding: 5px;
        margin-bottom: 8px;
    }
    .submit_registration_form.button{
        padding: 10px 22px;
        background: #1d1d1d;
        font-weight: 500;
        margin-top: 22px;
        border-radius: 2px;
        box-shadow: 3px 3px #fff;
    }
    .submit_registration_form.button:hover {
        box-shadow: none;
        transition: all 0.3s ease 0s;
        padding: 12px 24px;
    }
    .testimonial_item:before {
        font-family: "FontAwesome";
        content: "\f10d";
        display: inline-block;
        vertical-align: middle;
        color: #efcb6b !important;
        margin: -18px auto 20px;
        font-size: 80px;
        padding: 8px 15px 8px 0;
        border-radius: 50%;
        position: absolute;
        z-index: -1;
    }

    .testimonial p {
        padding-bottom: 30px;
        font-size: 16px;
        padding-top: 90px;
        color: #000;
        font-style: italic;
    }

    .testimonial .author h4 {
        font-size: 18px;
        color: #000;
        padding-bottom: 0;
        margin: 0;
        padding-top: 10px;
    }
    .testimonial .author small {
        color:#000;
        font-size:14px;
    }
    .testimonial .link{
        color:#000;
    }

    .app-store strong{
        display: block;
        font-size: 35px;
        line-height: 1.29;
        padding-bottom: 11px;
        font-weight: 300;
        color: #ff4177;
    }
    .app-store em{
        font-size: 16px;
        line-height: 1.67;
        padding-bottom: 50px;
        color:#000;
        display:block;
    }
    .app-store .app-image img{width:30%;margin-right:20px;}
    .app-store .mobile-image img{width:80%;}
    .counter {
        position:absolute;
        top:270px;
        margin-left:-108px;
        width: 100%;
    }
    .vibe_countdown_item .countdown_label {                                                                                               font-size: .9rem !important;                                                                                                  font-weight: 500 !important;                                                                                       left: -3px !important;                                                                                                }
    .numscroller:after{
        content:"+";
        position:relative;
        top:0;
    }
    .numscroller{
        font-size:35px;
        color: #444444;
    }
    .countdown .elementor-shortcode{font-size:32px;    color: #ff4177;}

    .banner-text .button{margin-top: 60px;}
    .feature-block img{width:74px;}

    .countdown .elementor-widget-container{
        background-image: url(https://wplms.io/demos/demo15/wp-content/uploads/2019/04/ebf30bcadf7a8e8e9f9e10af767b5cb9.png);
        height: 125px;
        z-index: 0;
        position: absolute;
        width: 300px;
        top: 0;
        left: 0;
        background-size: cover;
        background-position-y: -69px;
    }
    .widget .widget_title, strong, .course_details li , .single-course.c5 #item-nav div.item-list-tabs#object-nav li a, .course_instructor a, #item-admins h3{
        font-weight: 500 !important;
    }
    .single-course.c3 .course_header {
        margin-bottom: inherit;
    }
    #buddypress .item-list-tabs#subnav ul li.switch_view a {line-height: 4px;}
    #content #buddypress {
        margin-top: 0px;
        padding-top:30px;
        background: #ffffff;
    }
    #buddypress div.item-list-tabs{
        background-color: #23b9b7;
    }
    #buddypress .item-list-tabs ul li a {
        font-size: 12px;
        font-weight: 500;
        color: #fff !important;
    }
    #buddypress div.item-list-tabs ul li a span{
        background: #ffd86f;
    }
    .create-group-button{background-color: #ffd86f !important;}
    .create-group-button:hover{    padding: 27px 40px 28px !important;}
    #buddypress div.item-list-tabs ul li a:hover span{color:#000;}
    .single-course.c5 .course_header #item-header div#item-header-content h1 {color: #f9f9f9;}
    .footertitle, footer h4 {font-size: 18px;font-weight: 500;}
    .footerwidget ul li a{line-height:26px;font-size:13px;}
    #custom_html-3 .textwidget.custom-html-widget{font-size:12px;}
    #footerbottom #footerlogo {
        max-width: 130px;
        margin: -15px 10px 0 -10px;}
    @keyframes shadow-pulse
    {
        0% {
            box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.2);
        }
        100% {
            box-shadow: 0 0 0 35px rgba(0, 0, 0, 0);
        }
    }
    .wrapper{ padding: 20px;}

    @keyframes shadow-pulse-big
    {
        0% {
            box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.1);
        }
        100% {
            box-shadow: 0 0 0 70px rgba(0, 0, 0, 0);
        }
    }

    .example-1 i{
        margin: 0 40px;
        width: 70px;
        height: 70px;
        font: 35px/70px 'Barlow Semi Condensed', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #fff;
        text-align: center;
        background: transparent;
        border-radius: 50%;
        animation: shadow-pulse 1s infinite;
        padding-left: 10px;
        border: 2px solid white;
    }
    #signup_form input{color: #000000 !important;}
    .progressbar_wrap {display: none;}
    .block_content .button.full {padding: 10px 15px !important;width: auto;}

    .sleek #vibe_bp_login:after {left: 140px;}
    #vibe_bp_login {background: #232b2dd1;}
    #vibe_bp_login ul+ul {background:transparent;}
    #content #buddypress{padding-top: 0px;}
    #buddypress div.item-list-tabs#object-nav, #buddypress div.item-list-tabs{background-color: #23b8b7c7;}
    #buddypress .item-list-tabs ul li a:hover{
        background: #23b8b7;}
    .course_instructor span {color: #fff;}
    .single-course.c5 #item-nav div.item-list-tabs#object-nav li a {color: #ffffff;}
    .course_timeline li.active a, .course_timeline li a{color:#fff;}.page-template-start .course_timeline h4,.unit_prevnext a{color:#fff;}
    .unit_prevnext{border-color:#fff !important;}
    .sub-menu, nav .sub-menu {background-color: #6a79ef; border-radius: 5px;}
    .sub-menu li a{
        font-size: 14px !important;
        padding: 15px 30px !important;
    }
    .sidemenu li.active a{background-color: #3e3e3e;}

    .abt-top-text{
        font-size: 53px;
        line-height: 53px;
        color: rgb(255, 255, 255);
        letter-spacing: -1px;
    }
    .abt-bottom-text{
        font-size: 16px;
        line-height: 28px;
        color: rgb(255, 255, 255);
    }
    .popup-vimeo{color:transparent;font-size:16px;    padding: 30px;
        height: 30px;
        width: 100px;}
    .popup-vimeo:hover,.popup-vimeo:focus,.popup-vimeo:active{color:transparent;}
    .video-iframe iframe{border: 15px solid #ffe7a7;border-radius: 12px;}


    .block.course7 {
        border: none;
        border-radius: 0;
        overflow: hidden;
    }
    .block.course7 .block_content {
        padding: 26px 26px 20px 0px;
        text-align: inherit;
    }
    .block.course7 .block_content h4.block_title {
        margin: 0;
    }
    .block.course7 .block_content a.button {
        border-color: #ff4177 !important;
        font-size: 12px !important;
        color: #FFFFFF !important;
        background-color: #ff4177 !important;
        opacity: 1;
        border-radius: 0;
    }
    .block.course7 .block_content strong{
        display: none;
    }
    /*
    new code
    ---------------------------------*/
    header{
        background-color: transparent!important;
        box-shadow: 0px 0px 0px transparent!important;
    }
    header{
        margin-bottom: 0px;
    }
    section#title{
        background-size:cover!important;
    }
    #title .pagetitle {
        padding-top: 30px;
        padding-bottom: 20px;
        text-align: center;
    }

    .pagetitle .breadcrumbs li  a{
        font-size:15px;
        font-family:  "Poppins", Sans-serif;
    }
    #title .pagetitle h1{
        font-size:45px;
        font-family:  "Poppins", Sans-serif;
    }

    .pagetitle h5 {
        display: none;
    }




    .home-page span.fa.fa-shopping-basket em {
        color: 000;
        background: white;
        border-radius: 45px;
        top: -14px;
        right: -8px;
        padding: 5px;
    }


    .sleek .col-md-3.col-sm-6.col-xs-8 {
        display: block;
        float: right;
        margin-right: -91px;
        margin-top: -30px;
    }
    .sleek ul.topmenu li:nth-child(1) {
        display: none;
    }
    .sleek ul.topmenu li:nth-child(2) {
        display: inline-block;
    }
    .sleek ul.topmenu {
        display: block;
        margin-top: -42px;
        margin-right: 78px;
    }


    /*
    @media only screen and (min-width: 768px) and (max-width: 991px) {
    .home-page .sleek ul.topmenu {
        margin-right: 540px!important;
        z-index: 9999;
        position: absolute;
        right: 0;
    }*/

    @media only screen and (max-width: 767px) {
        .home-page nav.menu-main-menu-container {
            margin-right: 0px;
            padding-right: 0px!important;
            margin-top: -100px!important;
        }

    }


    /*
    top search icon
    -------------------------*/
    #new_searchicon i{
        position:absolute;
        right: -40px;
        bottom: 8px;
        font-size: 17px;
    }



    .sleek .col-md-9 {
        width: 100%;
    }
    @media only screen and (min-width: 992px){
        body .sleek .col-md-9 {
            width: 100%!important;
        }

    }

    .padder {
        margin: 30px 0;
    }


    .course section#title .col-md-9 {
        width: 100%!important;
    }
    body.page-id-73 #title{
        padding-bottom:60px!important;
    }
    .vc_row[data-vc-full-width] {
        display:none;
    }

    section#content {
        padding-bottom: 0px!important;
    }
    .padder.content, .page .content, .single .content {
        padding: 0px!important;
    }


    @media (max-width:1024px){
        .banner-text .elementor-widget-container {padding: 0px 0px 0px 20px !important;}
        .instructor-form-text h2{font-size: 24px !important;}
        .instructor-form-text{margin-left: 20px;margin-right:20px;}
        .itext{font-size: 12px;}
        .wplms_registration_form {margin-right: 20px;}
        testimonial-contet{padding-left:20px;}
        .testimonial_item:before {padding: 8px 15px 8px 20px;}
        .app-block{padding-top: 100px !important;}
        .countdown{margin-top: 40px;margin-right: 80px;}
        .app-image{padding-left: 20px;}
        .counter {margin-left: -60px !important;}
        .registration-block{margin:0 30px;}
        .block .block_content {bottom: 0px;height: 100%;}
    }
    .click-video{
        position:absolute;
        z-index:1;
        height:100%;
        width:100%;
        top:100%;
        transform:translate(0,-70%);
    }
    .click-video-image{position:relative;}


    @media (max-width:768px){

        .banner-text {top: 0%;}
        .banner-text .button{margin-top:10px;}
        #banner-img img{width:50%;float:left;}
        .countdown {margin: auto;}
        .counter {margin-left: auto !important;}
        .handpicked-text{display:none;}
        .grid li .block.course7 {margin: 0px 0 25px;}
        .countdown .elementor-widget-container {
            width: 186px;top: 15px;background-position-y: -32px;}
        .countdown .elementor-shortcode {font-size: 25px;}
        .numscroller {font-size: 30px;}
        testi-block {padding: 0px 0px 20px 0px !important;}
        .registration-block,.wplms_registration_form{margin:0px;}
        .testimonial p {padding-top: 15px;}
        .instructor-form-text {padding-bottom: 20px;}
        .shaper1 {height: 0px;}
    }

    @media (max-width:414px){
        header.sleek.transparent.fix.fixed{padding-top:10px;}
        .wplms_registration_form {margin-right: 0;margin-top: 40px;}
        .testimonial_item:before {margin: -18px auto 0px;font-size: 40px;}
        .testimonial p {padding-bottom: 5px;padding-top: 0px;}
        .app-store .mobile-image img{margin-top:175px;}
        .block_content {padding: 8px 26px 8px 0px;}
        .subs{padding-left: 25px;}
        .block_content .button {margin-top: 8px;}
        p.block_description {-webkit-line-clamp: 2;}
        .video-iframe{margin-top:85px;}
        .countdown .elementor-widget-container {
            width: 100%;top: -90px;background-position-y: -80px;position: relative;height: 200px;}
        .countdown .elementor-shortcode {padding-top: 40px;}
        .banner-text h3 {font-size: 22px;}
        .app-block {padding-top: 0px !important;margin-top: 100px !important;}
        .example-1 i {width: 50px;height: 50px;
            font: 25px/70px 'Barlow Semi Condensed', sans-serif;line-height: 50px;}
        .home .block_content {
            padding: 13px 26px 20px 0px;
        }
    }

    @media (max-width:375px){
        #video-block img{height: 250px;}
        .testimonial p {font-size: 14px;}
        .block_content strong {padding-left: 25px;}
        .block_content strong {font-size: 11px;}
        .home .block_title a {
            font-size: 17px;
            -webkit-line-clamp: inherit;}
        .home p.block_description{display:none;}
    }

    @media (max-width:360px){
        .countdown .elementor-shortcode {padding-top: 20px;}
        .vibe_countdown {margin: 4rem 0 !important;}
    }

    @media (max-width: 320px){
        .countdown .elementor-shortcode {padding-top: 8px;}
        .digit {position: relative;float: left;width: 2rem;height: 3rem;background-color: #ff4177;
            color: #FFFFFF;border-radius: 0.2rem;text-align: center;margin-right: 0px;font-size:1.5rem;}
        .digit{width:1.5rem !important;}
    }.rtl .vibe_countdown{
         text-align:right !important;
     }

    }


    .course .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 1400px;
    }

    #content #buddypress{
        padding: 50px 0;
    }


    .buddypress .bp-user{
        padding: 150px 0;
    }

    /*
    dash board footer
    --------------------*/
    .dashboard footer .col-md-3{
        bottom: 0;
        width: 110vw;
        max-width: 100vw;
        margin-left: calc(55% - 55vw);
        padding:0;
    }

    .light{
        padding:0 auto;
    }


    /*skillup-header title*/
    .single-course .header-top-left-content h1{
        font-family: 'Roboto', sans-serif!important;
    }
    /*skillup-prcing-area*/
    .single-course .header-top-section .container .row .buy-single-custom-header .skill-prcing-area .single-take-the-course-custom a{
        padding: 20px 50px !important;
    }

    .single-course .single-course-price-custom{
        width:35%;
    }

    .single-course .single-take-the-course-custom{
        width:65%;
    }


    /*new code 30.04.2020
    --------------------------*/


    .single-course .course-list-and-thumb {
        padding-bottom: 120px;
    }
    .single-course .course-list-and-thumb .container .thumb-and-curriculam-custom .col-md-7 #item-header-avatar {
        margin-top: -45px!important;
    }

    .single-course .course_curriculum.accordion .heading {
        display: none;
    }
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap');

    .single-course .course_curriculum .course_section>td {
        color: #556474;
        font-size:18px;
        font-family: 'Roboto', sans-serif;
    }

    .single-course  .course_curriculum.accordion .table td a {
        color: #556474;
    }

    .single-course div#item-meta {
        margin:0!important;
    }

    /*
    accordian array icon
    ----------------------*/
    .course_curriculum.accordion .course_section>td:after {
        content: "\f107"!important;
    }
    .single-course .course_curriculum.accordion .course_section>td:after {
        content: "\f107"!important;
    }
    .single-course .course_curriculum.accordion .course_section.show>td:after {
        content: "\f105"!important;
    }
    .single-course .course_curriculum.accordion .table td a {
        font-weight: bold;

    }



    /*
    single course nav
    -----------------------------*/
    .single-course #content #buddypress {
        background: white;
    }
    .single-course #buddypress .item-list-tabs#subnav ul li a {
        color: #444;
        background: #7a7be9!important;

    }


    /*
    single course related post
    -----------------------------*/
    .single-course .block.courseitem.course3 .block_content .block_title {
        margin-top: 60px;
    }


    .single-course .related_courses .courseitem  .block_title a{

        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 28px;
    }


    .single-course .related_courses .courseitem .course-star-rating i.hide {
        display: block!important;
        float: right;
        font-size: 15px;
        color: #5E6C8A;
        margin-left: 10px;

    }
    .single-course .block.courseitem .block_content {
        padding: 15px 15px 10px;
        position: relative;
        background: #FFFFFF;
        border:0px solid #eee!important;
        box-shadow: 0px 21px 32px rgba(187, 187, 187, 0.17);
        border-radius: 10px;
        height:200px;
    }
    .single-course .block.courseitem.course3 .block_content .course_meta {
        border-top: 0px solid #EEE;
        padding-top: 10px;
        margin-top: -180px;
    }
    .single-course .block.courseitem span.amount {
        color:#4A5874;
        font-size:25px!important;
        font-weight:bold;
    }

    /*    Tablet Layout: 768px.
            Gutters: 24px.
            Outer margins: 28px.
            Inherits styles from: Default Layout.
    -----------------------------------------------------------------
    cols    1     2      3      4      5      6      7      8
    px      68    160    252    344    436    528    620    712    */


    @media only screen and (min-width: 768px) and (max-width: 991px) {

        .single-course span.fa.fa-shopping-basket {
            margin-top: 20px!important;
        }
        .single-course  .header-top-left-conten h1{
            text-align:center!important;
        }
        .single-course .buy-single-custom-header{
            margin: 0 auto!important;
            display: flex;
        }
        .single-course .skill-prcing-area {
            margin-left: 0px!important;

        }
        .single-course .single-course-price-custom.left-area {
            margin-top: 13px;
            margin-right: 15px;
        }

        .single-course .course_curriculum.accordion h3 {
            text-align: center;
            padding-top: 40px;
        }

        .single-course .course-list-and-thumb .container .thumb-and-curriculam-custom .col-md-7 #item-header-avatar {
            position:static;
            width: 100%;
            margin-top: 50px;
        }
        .single-course .course-list-and-thumb .container .thumb-and-curriculam-custom .col-md-7 #item-header-avatar a img {
            height: 440px;
            width: 100% !important;
        }

    }


    /*dashboard*/
    .elementor-260374 .elementor-element.elementor-element-1211490 .elementor-social-icon i {
        color: #ffffff;
        font-family: "FontAwesome"!important;

    }




    /*    Mobile Layout: 320px.
            Gutters: 24px.
            Outer margins: 34px.
            Inherits styles from: Default Layout.
    ---------------------------------------------
    cols    1     2      3
    px      68    160    252    */

    @media only screen and (max-width: 767px) {

        .single-course .header-top-left-content h1{
            text-align: center;
            font-size: 30px;
        }

        .single-course .buy-single-custom-header{
            margin: 0 auto!important;
            display: flex;
        }
        .single-course .skill-prcing-area {
            margin: 0 auto!important;
            display: inline!important;
        }

        .single-course .header-top-section .container .row .col-md-5 .row .header-top-left-content .rating-etc-custom #item-meta .course-star-rating {
            float: none!important;
        }
        .single-course .header-top-section .container .row .col-md-5 .row .header-top-left-content .rating-etc-custom #item-meta .students {
            float: none;
        }
        .single-course .single-take-the-course-custom .left-area{
            text-align: center;
        }

        .single-course strong:nth-child(2) {
            float: none!important;
            margin-right: 0px;
        }
        .single-course .skill-prcing-area {
            display: inline;
        }

        .single-course .single-course-price-custom.left-area {
            margin-top: 13px;
            width:100%!important;
        }
        .single-course .single-take-the-course-custom {
            width:100%!important;
        }
        single-course .header-top-section .container .row .buy-single-custom-header .skill-prcing-area .single-take-the-course-custom a {
            padding: 20px 100px !important;
        }

        .single-course .course_curriculum.accordion h3 {
            text-align: center;
            padding-top: 40px;
        }
        .single-course .course-list-and-thumb .container .thumb-and-curriculam-custom .col-md-5 .skill-cariculam .course_curriculum .accordion {
            height: 300px;
        }
        .single-course .course-list-and-thumb .container .thumb-and-curriculam-custom .col-md-7 #item-header-avatar {
            position:static;
            width: 100%;
            margin-top: 50px;
        }
        .single-course .course-list-and-thumb .container .thumb-and-curriculam-custom .col-md-7 #item-header-avatar a img {
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            width: 100% !important;
        }


    }




    /*    Wide Mobile Layout: 480px.
            Gutters: 24px.
            Outer margins: 22px.
            Inherits styles from: Default Layout, Mobile Layout.
    ------------------------------------------------------------
    cols    1     2      3      4      5
    px      68    160    252    344    436    */

    /*# sourceMappingURL=nu-dev.css.map */


    /*Sakib*/
    .course_price strong {
        color: #626ae6 !important;
        font-weight: bold !important;
    }

    /********Numan********/
    a.button.create-group-button.full {
        display: none;
    }
    h1.mycertificate_student_name {
        font-family: "Alex Brush";
        font-weight: bold !important;
    }
    .footertop .col-md-3 {
        width: 110vw!important;
        position: relative!important;
        left: 55%!important;
        right: 55%!important;
        margin-left: -55vw!important;
        margin-right: -55vw!important;
    }
    .bp-user header.sleek.transparent {
        z-index: 99
        9999 !important;
        position: absolute !important;
        top: 0 !IMPORTANT;
        left: 0 !important;
        background: #7486ff !important;
        padding: 35px;
    }
    /*
    ----------New CSS for student area ---
    */
    .bp-user header.sleek.transparent {
        position: absolute;
        height: inherit;
        padding: 0;
        background: none !important;
    }
    .bp-user div#object-nav {
        background: #757cec !IMPORTANT;
    }
    .bp-user #content #buddypress {
        padding: 0px 0;
    }
    .bp-user div#item-header {
        padding: 0 !important;
    }
    .bp-user .showThisCoursePage {
        margin-top: -42px;
    }

    .course_timeline li.section h4 {
        color: #585656 !important;
    }
    .course_timeline li.active a, .course_timeline li a {
        color: #7a7be9 !important;
    }
    .course_pursue_panel_content .course_action_points h1 {
        color: white !important;
    }
    .course_action_points .course_time strong, .course_time span {
        color: #fbfbfb !important;
    }

    .skill-cariculam {
        margin-top: 18px;
    }
    .elementor-social-icons-wrapper i {
        font-style: normal !important;
    }
    .bp-user .hideThisCoursePage {
        display: none ;
    }

    /*Sakib*/

    .single-unit .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
        top: 0 !important;
    }


    /*Numan*/
    /*strong.course-star-rating {
        display: none !important;
    }*/

    .course_single_item .col-md-8 .item .item-meta strong {
        display: none;
    }
    .single-course strong:nth-child(2) {
        display: none;
    }
    div#vibe_course_categories-5 {
        background: white !important;
        padding: 25px;
    }

    div#media_image-2 {
        background: white !IMPORTANT;
        padding: 25px;
    }
    .item-title {
        position: relative;
        z-index: 89999999;
    }
    .single-course .header-top-section .container .row .buy-single-custom-header .skill-prcing-area .single-take-the-course-custom a {
        padding: 10px 26px !important;
        font-size: 15px !important;
    }

    /*single course page fixing by numan*/
    .course-duration li {
        display: none;
    }
    .course-duration li:last-child {
        display: block !important;
    }
    .course_details i.icon-clock-2 {
        display: none !important;
    }
    .course-duration li:last-child {
        display: block !important;
        background: white;
        color: black;
        text-align: center;
        margin-bottom: 29px;
        border-radius: 20px;
    }


    .post .content h1{
        font-size: 36px !important;
    }
    .post .content h2{
        font-size: 28px !important;
    }
    .post .content h3{
        font-size: 22px !important;
    }
    .post .content h4{
        font-size: 1.5rem !important;
    }
    .post .content h5{
        font-size: 1.2rem !important;
    }
    .post .content h6{
        font-size: 1em !important;
    }

    /*Blog Author hide*/
    .cats p {
        visibility: hidden;
    }


    @media (min-width: 320px) and (max-width: 767px) {

        /*.course-duration li:last-child{
            width: 175px!important;
        }
        .single-course .header-top-section .container .row .buy-single-custom-header .skill-prcing-area .single-take-the-course-custom a{
            width: 235px!important;
            position: absolute!important;
            margin-top: 25px!important;
            margin-left: 40px!important;
        }*/
        .course_details {
            width: 150px !important;
            margin-left: -6px !important;
        }
        .single-course .single-take-the-course-custom{
            width: 100% !important;
            position: absolute!important;
            margin-top: 10px!important;
            margin-left: 15px!important;
        }

    }



    /*==========
    Sabbir
    ==========*/
    .skill-up-courslist .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap{
        display: block ruby !important;
    }
    /*.course .elementor-widget-heading .elementor-heading-title, .tax-course-cat .elementor-widget-heading .elementor-heading-title {*/
    /*    display: none;*/
    /*}*/
    #buddypress ul.item-list li .item-credits {
        margin-top: -45px!important;
        float: left !important;
    }
    /*---cart---*/
    .woocommerce-page button.button, .woocommerce-page input.button{
        color: #fff !important;
        padding: 12px !important;
    }
    .woocommerce a.button.alt{
        padding: 20px !important;
    }
    .woocommerce-cart table.cart td.actions .coupon .input-text{
        padding: 8.5px !important;
    }
    /*---menu--*/

    #new_searchicon i{
        top: 30px;
    }
    .sleek .vbpcart span {
        margin-top: -4px !important;
    }
    .home-page .sleek .vbpcart span{
        margin-top: 2px  !important;
    }



    @media (min-width: 1025px){
        .single-course .related_courses{
            max-width: 1120px !important;
            margin-left: 100px !important;
        }
    }


    /*-----End Sabbir---*/
    .blogpost_meta > a {
        display:none!important;
    }
    .blogpost_meta {
        display: none;
    }
    /*-----Razel - MARKS OBTAINED ---*/
    .single-course strong:nth-child(2) {
        display: block!important;
    }


    /*Sakib*/
    .sample-audio span {
        display: table-cell;
        vertical-align: middle;
        font-weight: 500;
        margin-right: 25px;
        padding-right: 26px;
        font-size: 16px;
        color: #fff;
    }

    .sample-audio {
        background: #6f7df1;
        padding: 5px 15px;
        border: 2px solid #eae8e8;
        border-radius: 5px;
        margin-bottom: 18px;
        display: table;
    }

    .sample-audio audio {
        height: 47px;
        margin-top: 4px;
    }

    /* Blog css for SEO - Forhad */

    .single-post h2 {
        font-size: 28px !important;
        color: #727CEF !important;
        font-weight:bold !important;
    }

    .single-post h3 {
        font-size: 24px !important;
        color: #6D6467 !important;
        font-weight:bold !important;
    }

    .single-post h4 {
        font-size: 20px !important;
        font-weight:bold !important;
    }

    .single-post h5 {
        font-size: 18px !important;
        font-weight:bold !important;
    }

    .single-post p {
        font-size: 16px !important;
    }

    /*
    .single-course .customHeading h1 {
        margin-bottom: 104px!important;
    }
    */

    /* End Blog css for SEO - Forhad */


    /*farhan -css */
    .customCourseMeta {
        position: initial !important
    }
    .single-course .customHeading h1 {
        margin-bottom: 0px!important;
    }


    @media (min-width: 320px) and (max-width: 767px) {

        .single-course .customCoursePrice {
            position: absolute;
            right: 0;
            top: 125px;
            margin-right: 220px;
            font-size: 25px;
            color: #7B87F4;
            font-weight: 700!important;
        }

    }
    /*farhan-css end*/

    .single-course .customCoursePrice {
        position: absolute !important;
        font-size: 20px !important;
        color: #7B87F4;
        font-weight: 700!important;
    }
    .single-course .customAddToCartButton a {
        width: 166px !important;
        background: #FFB668!important;
        border-radius: 50px;
        color: #fff;
        font-weight: 700!important;
        position: absolute !important;
    }

    .single-course .customHeading h1 {

        font-size: 20px;
        margin-top: 57px;
    }


    /*rezwan css*/
    .single-course strong:nth-child(2) {
        display: block!important;
        font-size: 10px;
    }
    .single-course .customCourseMeta .students {
        font-size: 10px;
    }
    .single-course .customAddToCartButton a {
        margin-top: -20px;
    }
    .single-course .customCoursePrice {
        top: 95px;
    }

    .single-course .course-list-and-thumb .container .thumb-and-curriculam-custom .col-md-7 #item-header-avatar a img {
        margin-top: 34px;
    }

    .single-course .customAddToCartButton a {
        width: 120px !important;
    }
    .single-course .customCourseMeta {
        margin-top: 20px !important;
    }

    /*Razel blog feat image*/
    .single-post .featured img {
        width:800px!important;
        height: 418px!important;
    }

    .single-post .featured {
        text-align: center;
    }

    /* Blog Feature image responsive - Forhad */
    @media only screen and (max-width: 667px) {
        .single-post .featured img {
            width: 100% !important;
            height: auto !important;
        }
    }
    /* End Blog Feature image responsive - Forhad */

    #new_searchicon i {
        right: -16px !important;
    }


    .blink-fa strong{
        animation: blink 0.5s infinite;
    }

    @keyframes blink {
        0% {
            color: red;
        }
        50% {
            color: #9C27B0;
        }
        100% {
            color: #FF5722;
        }
    }

    a#trigger {
        color: white;
        color: red;
        background: #6d70e7;
        padding: 7px 10px 13px 10px;
        border-radius: 5px;
    }

    .page-id-342928 #menu-main-menu-1 a {
        color: black !important
    }

    /* menu css - habib */
    header.sleek.transparent {
        background: #fff !important;
    }

    nav.menu-main-menu-container ul.menu li a {
        color: #000 !important;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500 !important;
        font-size: 15px !important;
    }
    nav #menu-main-menu-1 .sub-menu li a{
        color: #fff !important;
    }

    nav .menu li.current-menu-item a {
        font-weight: 700 !important;
    }
    header.sleek.transparent > .container > .row > div {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    a.vbpcart {
        color: #000 !important;
    }

    .sleek #logo {
        margin: 0 !important;
    }

    .blink-menu a strong{
        animation: color-change 1s infinite;
    }

    @keyframes color-change {
        0% { color: #000; }
        50% { color: #6a79ef;}
        100% { color: #000;}
    }
    header.sleek.transparent > .container > .row{
        display: flex;
        align-items: center;
    }

    header.sleek.transparent > .container > .row > div{
        margin-top: 0 !important
    }


    .sleek ul.topmenu {
        margin-top: -25px !important;
    }
    #buddypress .member_header #item-header{
        padding-top: 105px !important;
    }





    .blink_me {
        animation: blinker 0.6s linear infinite;
        color: red;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }







    .custom-offer span.woocommerce-Price-amount.amount {
        color: #F8FF02;
    }
    .course_single_item .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .course #buddypress ul.item-list li .item-avatar img {
        border-radius: 5px!important;
        max-height: 176px !IMPORTANT;
    }

    #buddypress ul.item-list li .foy-item-title a {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 28px;
        color: #455F6F;
    }
    #buddypress ul.item-list.grid li .foy-item-title a {
        min-height: 84px !important;
    }
    .foy-bottom del span.woocommerce-Price-amount.amount {
        font-weight: 700;
        font-size: 18px;
        line-height: 36px;
        color: #000000;
    }
    .foy-bottom ins span.woocommerce-Price-amount.amount, .foy-bottom .woocommerce-Price-amount.amount {
        font-weight: 700;
        font-size: 27px;
        line-height: 35px;
        color: #27D07D;
    }
    .foy-bottom .directory-add-cart {
        text-align: center;
    }

    .rating_sh_content .sh_rating {
        unicode-bidi: bidi-override;
        color: #c5c5c5;
        font-size: 25px;
        height: 25px;
        width: 100px;
        margin: 0 auto;
        position: relative;
        padding: 0;
        text-shadow: 0px 1px 0 #a2a2a2;
    }

    .rating_sh_content .sh_rating-upper {
        color: #fcc400;
        padding: 0;
        position: absolute;
        z-index: 1;
        display: flex;
        top: 0;
        left: 0;
        overflow: hidden;
        /* justify-content: center;
        width: 100px !important; */
    }

    .rating_sh_content .sh_rating-lower {
        padding: 0;
        display: flex;
        z-index: 0;
        /* width: 100px !important;
        justify-content: center; */

    }

    p.foy-exerpt {
        margin: 0px;
        margin-top: 0px !important;
        font-size: 16px;
        line-height: 155%;
        text-align: justify;
        color: #1F2061;
        font-family: 'Nunito', sans-serif;
        font-weight: 500;
    }
    .item-list.grid p.foy-exerpt {
        min-height: 79px;
        margin-top: -15px !important;
        display: block;
        display: -webkit-box;
        width: 100%;
        margin: 0 auto;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    p.foy-students {
        display: initial;
        color: #50617B;
        font-weight: 400;
        font-size: 14px;
    }
    .foy-student-meta i.fa.fa-users {
        color: #50617B;
        margin-right: 6px;
    }
    .item-list a.sa-add-to-cart {
        display: none;
    }
    .grid a.sa-add-to-cart {
        display: initial !important;
    }
    .sh_rating span {
        /* font-size: 20px; */
    }
    #buddypress ul.item-list li .foy-item-title a:hover {
        color: #029f00;
    }
    .grid .row.foy-grid {
        display: grid;
    }
    .grid .foy-top {
        width: 100%;
    }
    .grid .foy-middle {
        width: 100%;
    }
    .grid .foy-bottom {
        width: 100%;
    }
    #buddypress ul.item-list.grid li .item {
        border: none;
    }
    @media only screen and (max-width: 600px) {
        .row.foy-grid {
            display: grid ;
        }
        .item-meta.foy-student-meta {
            text-align: center;
        }

        p.foy-exerpt {
            display: none !important;
        }
        a.button.add-cart-ctm.foy-cart-url {
            display: inline-block !IMPORTANT;
        }
        a.button.add_to_cart_button.ajax_add_to_cart.add-cart-ctm.foy-sitecart-url {
            display: none;
        }
        .xoo-wsc-modal {
            display: none !important;
        }
    }
    a.button.add-cart-ctm.foy-cart-url {
        display: none;
    }





    .single-course .course_header {
        background:none!important;
    }

    header.sleek a.vbplogin {
        display:none;
    }

    .sub-menu, nav .sub-menu {
        background-color: #6a79ef !important;
        border-radius: 5px;
        box-shadow: 0 0 5px #d8d0d0 !important;
        width: 350px !important;
        margin-top: 0px !important;
        padding: 25px !important;
    }
    nav #menu-main-menu-1 .sub-menu li#main-menu-item-366940 a {
        color: #000 !important;
        background: #fff;
        text-align: center;
    }
    .sleek #vibe_bp_login {
        top: 25px !important;
        right: -25px !important;
        text-align: left;
    }
    #title{display:none;}
    @media only screen and (max-width: 767px){
        header.sleek a.vbplogin {
            display:block;
            background: #767beb;
            padding: 5px;
            border-radius: 5px;
            margin-right: 20%;
            color: #fff;
        }
        a#trigger {
            padding: 5px 10px 10px 10px !important;
        }
        header #trigger {
            top: 10px  !important;
        }
        #vibe_bp_login #wplogin-modal .md-content {
            width: 95%;
            display: inline-block;
            text-align: start;
        }
        #menu-item-258960{
            display:none;
        }
    }

</style>
