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
        left: 2em;
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
        background-color: #a83279;
    }
    .timeline-style-1 .timeline-event:hover .timeline-event-thumbnail {
        -moz-box-shadow: inset 40em 0 0 0 #a83279;
        -webkit-box-shadow: inset 40em 0 0 0 #a83279;
        box-shadow: inset 40em 0 0 0 #a83279;
    }

    .timeline-style-1 .timeline-event-copy {
        padding: 2em;
        position: relative;
        top: -1.875em;
        left: 4em;
        width: 80%;
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
        left: 2em;
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
        -moz-box-shadow: inset 0 0 0 0em #ef795a;
        -webkit-box-shadow: inset 0 0 0 0em #ef795a;
        box-shadow: inset 0 0 0 0em #ef795a;
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
                <ul class="timeline">
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2011 - heute</p>
                            <h3>Geil,Danke! GmbH</h3>
                            <h4>Geschäftsführerin eines Web-Studios</h4>
                            <p><strong>Schwerpunkt: Frontend-Entwicklung</strong><br>Entwickeln von anspruchsvollen, animierten, responsive und adaptive Webseiten mit HTML5, SCSS, jQuery; für alle Browser, optimiert für Desktop, Notebook, Smartphones und Tablets (iOS, Android, Windows).</p>
                            <p><strong>Projektmanagement mit Scrum</strong><br>Ständiges Verbessern des agilen Entwicklungsprozesses beispielsweise durch Grunt, Yeoman, GIT, JIRA und BrowserStack.</p>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">November 2009 - März 2011</p>
                            <h3>Freelancer</h3>
                            <h4>Designer und Autor</h4>
                            <p>Konzeption, Design und Produktion von Digitalen Magazinen mit InDesign, der Adobe Digital Publishing Suite und HTML5. Co-Autorin der Fachbücher "Digitales Publizieren für Tablets" und "Adobe Digital Publishing Suite" erschienen im dpunkt.verlag.</p>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2011 - heute</p>
                            <h3>konplan gmbh</h3>
                            <h4>IT-Consultant</h4>
                            <p><strong>Systemarchitektur, Consulting</strong><br>Konzeption und Modellierung von Systemen und APIs für Digital Publishing und Entitlement nach SOA</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="timeline">
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2011 - heute</p>
                            <h3>Geil,Danke! GmbH</h3>
                            <h4>Geschäftsführerin eines Web-Studios</h4>
                            <p><strong>Schwerpunkt: Frontend-Entwicklung</strong><br>Entwickeln von anspruchsvollen, animierten, responsive und adaptive Webseiten mit HTML5, SCSS, jQuery; für alle Browser, optimiert für Desktop, Notebook, Smartphones und Tablets (iOS, Android, Windows).</p>
                            <p><strong>Projektmanagement mit Scrum</strong><br>Ständiges Verbessern des agilen Entwicklungsprozesses beispielsweise durch Grunt, Yeoman, GIT, JIRA und BrowserStack.</p>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">November 2009 - März 2011</p>
                            <h3>Freelancer</h3>
                            <h4>Designer und Autor</h4>
                            <p>Konzeption, Design und Produktion von Digitalen Magazinen mit InDesign, der Adobe Digital Publishing Suite und HTML5. Co-Autorin der Fachbücher "Digitales Publizieren für Tablets" und "Adobe Digital Publishing Suite" erschienen im dpunkt.verlag.</p>
                        </div>
                    </li>
                    <li class="timeline-event">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2011 - heute</p>
                            <h3>konplan gmbh</h3>
                            <h4>IT-Consultant</h4>
                            <p><strong>Systemarchitektur, Consulting</strong><br>Konzeption und Modellierung von Systemen und APIs für Digital Publishing und Entitlement nach SOA</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
