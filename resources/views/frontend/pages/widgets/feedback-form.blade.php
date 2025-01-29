<style>
    .timeline-style-3 .experience {
        position: relative;
        padding: 45px 0 15px 0;
    }
    .timeline-style-3 .section-header {
        position: relative;
        margin-bottom: 45px;
    }
    .timeline-style-3 .experience .timeline {
        position: relative;
        width: 100%;
    }
    .timeline-style-3 .experience .timeline .timeline-item.left {
        left: 0;
        padding-right: 30px;
    }
    .timeline-style-3 .experience .timeline .timeline-item {
        position: relative;
        background: inherit;
        width: 50%;
        margin-bottom: 30px;
    }
    .timeline-style-3 .experience .timeline .timeline-text {
        padding: 30px;
        background: #ffffff;
        position: relative;
        border-right: 5px solid #dddddd;
        box-shadow: 0 0 60px rgba(0, 0, 0, .08);
    }
    .timeline-style-3 .experience .timeline .timeline-item.left .timeline-date {
        text-align: left;
        left: calc(100% + 55px);
    }
    .timeline-style-3 .experience .timeline .timeline-date {
        position: absolute;
        width: 100%;
        top: 44px;
        font-size: 16px;
        font-weight: 600;
        color: #EF233C;
        text-transform: uppercase;
        letter-spacing: 1px;
        z-index: 1;
    }
    .timeline-style-3 .experience .timeline .timeline-text h2 {
        margin: 0 0 5px 0;
        font-size: 22px;
        font-weight: 600;
    }
    .timeline-style-3 .experience .timeline .timeline-text h4 {
        margin: 0 0 10px 0;
        font-size: 16px;
        font-style: italic;
        font-weight: 400;
    }
    .timeline-style-3 .experience .timeline .timeline-text p {
        margin: 0;
        font-size: 16px;
    }
    .timeline-style-3 .experience .timeline .timeline-item.right {
        left: 50%;
        padding-left: 30px;
    }
    .timeline-style-3 .experience .timeline .timeline-item {
        position: relative;
        background: inherit;
        width: 50%;
        margin-bottom: 30px;
    }
    .timeline-style-3 .experience .timeline .timeline-item.right::before {
        left: 10px;
        border-color: transparent #dddddd transparent transparent;
    }
    .timeline-style-3 .experience .timeline .timeline-item::before {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        top: 46px;
        right: 10px;
        z-index: 1;
        border: 10px solid;
        border-color: transparent transparent transparent #dddddd;
    }
    .timeline-style-3 .experience .timeline .timeline-item.right::after {
        left: -8px;
    }
    .timeline-style-3 .experience .timeline .timeline-item::after {
        content: '';
        position: absolute;
        width: 16px;
        height: 16px;
        top: 48px;
        right: -8px;
        background: #ffffff;
        border: 2px solid #EF233C;
        border-radius: 16px;
        z-index: 1;
    }
    .timeline-style-3 .experience .timeline .timeline-item.right .timeline-text {
        border-right: none;
        border-left: 5px solid #dddddd;
    }
    .timeline-style-3 .experience .timeline .timeline-item.right .timeline-date {
        text-align: right;
        right: calc(100% + 55px);
    }
    .timeline-style-3 .experience .timeline .timeline-date {
        position: absolute;
        width: 100%;
        top: 44px;
        font-size: 16px;
        font-weight: 600;
        color: #EF233C;
        text-transform: uppercase;
        letter-spacing: 1px;
        z-index: 1;
    }



    .timeline-style-3 .experience .timeline .timeline-item::before {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        top: 46px;
        right: 10px;
        z-index: 1;
        border: 10px solid;
        border-color: transparent transparent transparent #dddddd;
    }
    .timeline-style-3 .experience .timeline .timeline-item::after {
        content: '';
        position: absolute;
        width: 16px;
        height: 16px;
        top: 48px;
        right: -8px;
        background: #ffffff;
        border: 2px solid #EF233C;
        border-radius: 16px;
        z-index: 1;
    }
    .timeline-style-3 .experience .timeline::after {
        content: '';
        position: absolute;
        width: 2px;
        background: #EF233C;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -1px;
    }
</style>


<style>
    .timeline-style-2 .timeline {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .timeline-style-2 .timeline .timeline-row {
        display: flex;
        column-gap: 64px;
        flex-wrap: wrap;
    }

    .timeline-style-2 .timeline-row .timeline-column {
        flex: 1 1 320px;
    }

    .timeline-style-2 .timeline-column .title {
        position: relative;
        display: inline-block;
        font-size: 28px;
        margin: 32px 0 16px 30px;
    }

    .timeline-style-2 .timeline-column .timeline-box {
        position: relative;
        border-left: 2px solid #449244;
    }

    .timeline-style-2 .timeline-box .timeline-content {
        position: relative;
        padding-left: 27px;
    }

    .timeline-style-2 .timeline-box .timeline-content::before {
        content: '';
        position: absolute;
        top: 0;
        left: -10.5px;
        width: 20px;
        height: 20px;
        background: #449244;
        border-radius: 50%;
    }

    .timeline-style-2 .timeline-content .content {
        padding: 24px;
        border: 2px solid #449244;
        border-radius: 8px;
        margin-bottom: 32px;
    }

    .timeline-style-2 .timeline-content .content .year {
        font-size: 16px;
        color: #449244;
        line-height: 20px;
    }

    .timeline-style-2 .timeline-content .content .year i {
        margin-right: 8px;
    }

    .timeline-style-2 .foy-company-name {
        font-size: 19px;
        margin: 8px 0;
    }

    .timeline-style-2 .timeline-content .content p {
        font-size: 16px;
        line-height: 24px;
    }
</style>


<style>
    /* Styling */
    .timeline-style-1 .timeline {
        position: relative;
        max-width: 46em;
        padding-left: 0;
    }
    .timeline-style-1 .timeline:before {
        background-color: black;
        content: "";
        margin-left: -1px;
        position: absolute;
        top: 0;
        /*left: 2em;*/
        width: 2px;
        height: 100%;
    }

    .timeline-style-1 .timeline-event {
        position: relative;
    }
    .timeline-style-1 .timeline-event:hover .timeline-event-icon {
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        background-color: #449244;
    }
    .timeline-style-1 .timeline-event:hover .timeline-event-thumbnail {
        -moz-box-shadow: inset 40em 0 0 0 #449244;
        -webkit-box-shadow: inset 40em 0 0 0 #449244;
        box-shadow: inset 40em 0 0 0 #449244;
    }

    .timeline-style-1 .timeline-event-copy {
        padding: 2em;
        position: relative;
        top: -1.875em;
        /*left: 4em;*/
        width: 100%;
    }
    .timeline-style-1 .timeline-event-copy h3 {
        font-size: 1.75em;
    }
    .timeline-style-1 .timeline-event-copy h4 {
        font-size: 1.2em;
        margin-bottom: 1.2em;
    }
    .timeline-style-1 .timeline-event-copy strong {
        font-weight: 700;
    }
    .timeline-style-1 .timeline-event-copy p:not(.timeline-event-thumbnail) {
        padding-bottom: 1.2em;
    }

    .timeline-style-1 .timeline-event-icon {
        -moz-transition: -moz-transform 0.2s ease-in;
        -o-transition: -o-transform 0.2s ease-in;
        -webkit-transition: -webkit-transform 0.2s ease-in;
        transition: transform 0.2s ease-in;
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        background-color: black;
        outline: 10px solid white;
        display: block;
        margin: 0.5em 0.5em 0.5em -0.5em;
        position: absolute;
        top: 0;
        /*left: 2em;*/
        width: 1em;
        height: 1em;
    }

    .timeline-style-1 .timeline-event-thumbnail {
        -moz-transition: box-shadow 0.5s ease-in 0.1s;
        -o-transition: box-shadow 0.5s ease-in 0.1s;
        -webkit-transition: box-shadow 0.5s ease-in;
        -webkit-transition-delay: 0.1s;
        transition: box-shadow 0.5s ease-in 0.1s;
        color: white;
        font-size: 0.75em;
        background-color: black;
        -moz-box-shadow: inset 0 0 0 0em #449244;
        -webkit-box-shadow: inset 0 0 0 0em #449244;
        box-shadow: inset 0 0 0 0em #449244;
        display: inline-block;
        margin-bottom: 1.2em;
        padding: 0.25em 1em 0.2em 1em;
    }
    .timeline-style-1 .timeline-event{
        list-style: none;
    }
    .timeline-style-1{
        margin-top: 100px;
    }
</style>
<section class="timeline-style-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="timeline wow fadeInLeft">
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2011 - heute</p>
                            <h3>Geil,Danke! GmbH</h3>
                            <h4>Geschäftsführerin eines Web-Studios</h4>
                            <p><strong>Schwerpunkt: Frontend-Entwicklung</strong><br>Entwickeln von anspruchsvollen,  </p>
                            <p><strong>Projektmanagement mit Scrum</strong><br>Ständiges Verbessern des agilen Entwicklungsproz man, GIT, JIRA und BrowserStack.</p>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">November 2009 - März 2011</p>
                            <h3>Freelancer</h3>
                            <h4>Designer und Autor</h4>
                            <p>Konz sign, der T itales Publ e Digital Publishing Suite" erschienen im dpunkt.verlag.</p>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2011 - heute</p>
                            <h3>konplan gmbh</h3>
                            <h4>IT-Consultant</h4>
                            <p><strong>Systemarchitektur, Consulting</strong><br>Konzeption und Modellierung von System SOA</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="timeline wow fadeInRight">
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2011 - heute</p>
                            <h3>Geil,Danke! GmbH</h3>
                            <h4>Geschäftsführerin eines Web-Studios</h4>
                            <p><strong>Schwerpunkt: Frontend-Entwicklung</strong><br>Entwickeln von anspruchsvollen, animier iOS, Android, Windows).</p>
                            <p><strong>Pro mit Scrum</strong><br>Ständige sprozesses beispielsweise durch Grunt, Yeoman, GI serStack.</p>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">November 2009 - März 2011</p>
                            <h3>Freelancer</h3>
                            <h4>Designer und Autor</h4>
                            <p>Konzeption, Design en im dpunkt.verlag.</p>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2011 - heute</p>
                            <h3>konplan gmbh</h3>
                            <h4>IT-Consultant</h4>
                            <p><strong>Systemarchitektur, Consulting</strong><br>Konzeption und Modellierung von Systemen un ent nach SOA</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<section class="timeline-style-2">
    <div class="container">
        <section class="timeline">
            <div class="timeline-row">
                <div class="timeline-column">
                    <h2 class="title wow">Experience</h2>
                    <div class="timeline-box wow zoomIn">
                        <div class="timeline-content">
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="https://imgbb.com/">
                                            <img src="https://i.ibb.co/9gTGFhp/images-1.png" alt="images-1" style="width: 50px; height: 50px; border-radius: 50%;">
                                        </a>
                                        <div>
                                            <a href="https://imgbb.com/" class="text-decoration-none">
                                                <h3 class="foy-company-name m-0">Staff Asia</h3>
                                            </a>
                                            <p class="foy-role m-0">Web Developer</p>
                                        </div>
                                    </div>
                                    <div class="year d-flex align-items-center gap-1">
                                        <i class='fa fa-calendar'></i>
                                        <span>Jan 2022 - Present</span>
                                    </div>
                                </div>
                                <p>I lead the development of complex web solutions, customize WordPress LMS themes and plugins, design effective databases, and ensure quality through troubleshooting and user experience enhancements.</p>
                            </div>
                        </div>

                        <div class="timeline-content">
                            <div class="content">


                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="https://imgbb.com/">
                                            <img src="https://i.ibb.co.com/4Sk2pm1/taj-accountants-logo.jpg" alt="images-1" style="width: 50px; height: 50px; border-radius: 50%;">
                                        </a>
                                        <div>
                                            <a href="https://imgbb.com/" class="text-decoration-none">
                                                <h3 class="foy-company-name m-0">Taj Accountants</h3>
                                            </a>
                                            <p class="foy-role m-0">Writer</p>
                                        </div>
                                    </div>
                                    <div class="year d-flex align-items-center gap-1">
                                        <i class='fa fa-calendar'></i>
                                        <span>Sep 2021 - Dec 2021</span>
                                    </div>
                                </div>
                                <p>
                                    I lead the development of complex web solutions, customize WordPress LMS themes and plugins, design effective databases, and ensure quality through troubleshooting and user experience enhancements
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-column">
                    <h2 class="title">Experience</h2>

                    <div class="timeline-box wow zoomIn">
                        <div class="timeline-content">
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="https://imgbb.com/">
                                            <img src="https://i.ibb.co.com/HHKCm74/png-clipart-mawlana-bhashani-science-and-technology-university-hajee-mohammad-danesh-science-technol.png" alt="images-1" style="width: 50px; height: 50px; border-radius: 50%;">
                                        </a>
                                        <div>
                                            <a href="https://imgbb.com/" class="text-decoration-none">
                                                <h3 class="foy-company-name m-0">Staff Asia</h3>
                                            </a>
                                            <p class="foy-role m-0">Web Developer</p>
                                        </div>
                                    </div>
                                    <div class="year d-flex align-items-center gap-1">
                                        <i class='fa fa-calendar'></i>
                                        <span>Jan 2018 - Dec 2021</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptate natus consectetur suscipit
                                    aspernatur quos obcaecati dolore veniam debitis omnis.</p>
                            </div>
                        </div>

                        <div class="timeline-content">
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="https://imgbb.com/">
                                            <img src="https://i.ibb.co/9gTGFhp/images-1.png" alt="images-1" style="width: 50px; height: 50px; border-radius: 50%;">
                                        </a>
                                        <div>
                                            <a href="https://imgbb.com/" class="text-decoration-none">
                                                <h3 class="foy-company-name m-0">Staff Asia</h3>
                                            </a>
                                            <p class="foy-role m-0">Web Developer</p>
                                        </div>
                                    </div>
                                    <div class="year d-flex align-items-center gap-1">
                                        <i class='fa fa-calendar'></i>
                                        <span>Jan 2022 - Present</span>
                                    </div>
                                </div>



                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptate natus consectetur suscipit
                                    aspernatur quos obcaecati dolore veniam debitis omnis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="timeline-style-3">
    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <h2>Experience</h2>
            </header>
            <div class="timeline">
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInLeft;">
                    <div class="timeline-text">
                        <div class="timeline-date">2023</div>
                        <h2>Web Developer Intern</h2>
                        <h4>Ineuron</h4>
                        <p>
                            I worked here as an Web Developer Intern | Skills: Software
                            Development · Front-End Development · MERN · React · Full-Stack
                            Development
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInRight;">
                    <div class="timeline-text">
                        <div class="timeline-date">2021 - Present</div>
                        <h2>Senior Systems Engineer</h2>
                        <h4>Infosys</h4>
                        <p>
                            I worked here as an Mulesoft Developer | Skills: Mulesoft ·
                            Github · Excel · Azure
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: slideInLeft;">
                    <div class="timeline-text">
                        <div class="timeline-date">2023</div>
                        <h2>Web Developer Intern</h2>
                        <h4>Ineuron</h4>
                        <p>
                            I worked here as an Web Developer Intern | Skills: Software
                            Development · Front-End Development · MERN · React · Full-Stack
                            Development
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-area section-padding" id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{$feedbackTitle->title}}</h3>
                    <div class="desc">
                        <p>{{$feedbackTitle->sub_title}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Contact-Form -->
                <form class="feedback-form" id="feedback-form" action="{{route('admin.feedback.store')}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="file" name="image" id="image-upload" class="input-box"/>
                                <label for="form-name" class="icon lb-name"><i class="fal fa-file"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="name" class="input-box" placeholder="Enter your name">
                                <label for="form-email" class="icon lb-user"><i
                                        class="fal fa-user"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="position" class="input-box" value="" placeholder="Position">
                                <label for="form-position" class="icon lb-position"><i class="fal fa-briefcase"></i></label>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-box">
                                <textarea name="description" class="input-box" id="form-message" placeholder="Description"></textarea>
                                <label for="form-message" class="icon lb-message"><i
                                        class="fal fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-box">
                                <button class="button-primary mouse-dir" type="submit" id="submit_btn">Send Now <span
                                        class="dir-part"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
