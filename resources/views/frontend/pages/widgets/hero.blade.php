<!-- Header-Area-Start -->
<div>
    <style>
        #lottieBird, #lottieBirdBlue, #lottieMoon, #lottieRocket, #lottieFireworks{
            z-index: 999;
        }
        #lottieCloud, #lottieCloudClear{
            z-index: 9;
        }
        #lottieFireworks{
            display: none;
        }
    </style>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <dotlottie-player
        id="lottieBird"
        src="https://lottie.host/4a7dfe62-1a74-49e8-8b1e-4c3839c9e99c/AFAcXvHGq3.lottie"
        background="transparent"
        speed="0.5"
        style="width: 150px; height: 150px; position: absolute;"
        loop
        autoplay
        class="fly-bird">
    </dotlottie-player>

    <dotlottie-player
        id="lottieBirdBlue"
        src="https://lottie.host/b45e954f-7b74-4a46-a79e-8c477f028b8e/ZaLqOffIUu.lottie"
        background="transparent"
        speed="0.5"
        style="width: 160px; height: 160px; position: absolute;"
        loop
        autoplay>
    </dotlottie-player>
    <dotlottie-player
        id="lottieCloud"
        src="https://lottie.host/956f2cf1-7b01-4681-a0e0-230337d93d76/20c9cZb58z.lottie"
        background="transparent"
        speed="0.3"
        style="width: 200px; height: 200px; position: absolute;"
        loop
        autoplay>
    </dotlottie-player>
    <dotlottie-player
        id="lottieCloudClear"
        src="https://lottie.host/956f2cf1-7b01-4681-a0e0-230337d93d76/20c9cZb58z.lottie"
        background="transparent"
        speed="0.3"
        style="width: 200px; height: 200px; position: absolute;"
        loop
        autoplay>
    </dotlottie-player>

    <dotlottie-player
        id="lottieRocket"
        src="https://lottie.host/f417e20b-f06a-4c08-a0a8-45b1c7efbe34/8NSSIos6Rf.lottie"
        background="transparent"
        speed="1"
        style="width: 70px; height: 70px; position: absolute;"
        loop
        autoplay>
    </dotlottie-player>
{{--    <dotlottie-player--}}
{{--        id="lottieFireworks"--}}
{{--        src="https://lottie.host/64051601-89a5-48df-b328-9f869f61ede8/muLX9sIip3.lottie"--}}
{{--        background="transparent"--}}
{{--        speed="1" style="width: 300px; height: 300px; position: absolute;"--}}
{{--        loop--}}
{{--        autoplay>--}}
{{--    </dotlottie-player>--}}

    {{--    <dotlottie-player--}}
    {{--        id="lottieMoon"--}}
    {{--        src="https://lottie.host/9e31b069-5eec-44cd-ad7a-a3fc4000b552/YLoW1YMmZA.lottie"--}}
    {{--        background="transparent" speed="1" style="width: 300px; height: 300px; position: absolute;"--}}
    {{--        loop--}}
    {{--        autoplay>--}}
    {{--    </dotlottie-player>--}}

</div>
<?php
$image_url = "http://127.0.0.1:8000/uploads/1388452814mountains-5559099_1280.png";
$image_url = "http://127.0.0.1:8000/uploads/100811056fields-7287267_1920.png";
?>
<header class="header-area parallax-bg" id="home-page" style="background: url('{{asset($hero->image ?? '')}}') no-repeat scroll top center/cover">
    <div class="container" style="position: relative; overflow: hidden; height: 500px;">
        <div class="row">
            <div class="col-lg-8">
                <div class="header-text">
                    <h3 class="typer-title wow fadeInUp" data-wow-delay="0.2s">I'm ui/ux designer</h3>
                    <h1 class="title wow fadeInUp" data-wow-delay="0.3s">{{ $hero->title ?? '' }}</h1>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        <p>{{ $hero->sub_title ?? '' }}</p>
                    </div>
                    @if($hero->btn_text ?? false)
                        <a href="{{ $hero->btn_url }}" class="button-dark mouse-dir wow fadeInUp" data-wow-delay="0.5s">
                            {{ $hero->btn_text }}<span class="dir-part"></span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        @php
            $titles = [];
            foreach($typerTitles as $title){
                $titles[] = $title->title;
            }
            $titles = json_encode($titles);
        @endphp
        $('.header-area .typer-title').typer({!! $titles !!});
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const header = document.getElementById('home-page');
            const headerHeight = header.offsetHeight;
            const headerWidth = header.offsetWidth;

            const birdSound = new Audio('bird-sound.mp3');
            const cloudSound = new Audio('cloud-sound.mp3');

            // const lottieFireworks = document.getElementById('lottieFireworks');

            const elements = [
                {
                    element: document.getElementById('lottieBird'),
                    name: 'lottieBird',
                    width: 50,
                    height: 120,
                    speed: 1.5,
                    verticalSpeed: (Math.random() - 0.5) * 3,
                    direction: -1,
                    rotationAngle: 0,
                    padding: 110,
                },
                {
                    element: document.getElementById('lottieBirdBlue'),
                    name: 'lottieBirdBlue',
                    width: 50,
                    height: 110,
                    speed: 2,
                    verticalSpeed: (Math.random() - 0.5) * 2,
                    direction: -1,
                    rotationAngle: 0,
                    padding: 110,
                },
                {
                    element: document.getElementById('lottieCloud'),
                    name: 'lottieCloud',
                    width: 180,
                    height: 500,
                    speed: 0.2,
                    verticalSpeed: (Math.random() - 0.5) * 0.2,
                    direction: -1,
                    rotationAngle: 0,
                    padding: -55,
                },
                {
                    element: document.getElementById('lottieCloudClear'),
                    name: 'lottieCloudClear',
                    width: 180,
                    height: 500,
                    speed: 0.1,
                    verticalSpeed: (Math.random() - 0.5) * 0.2,
                    direction: 1,
                    rotationAngle: 0,
                    padding: -55,
                },
                {
                    element: document.getElementById('lottieRocket'),
                    name: 'lottieRocket',
                    width: 70,
                    height: 70,
                    speed: 0.5, // Vertical speed
                    horizontalSpeed: 0, // No drift initially
                    positionX: 0, // Start from the bottom-left
                    positionY: headerHeight, // Start at the bottom
                    rotationAngle: 0, // No initial rotation
                    driftThreshold: headerHeight * 0.7, // Height to start drifting
                    hasDisplayedLottie: false, // Track if the Lottie animation has been shown
                }
            ];

            elements.forEach(item => {
                if (item.name === 'lottieCloudClear') {
                    item.positionX = -item.width;
                    item.positionY = Math.random() * (headerHeight + item.height);
                }
                if (item.name === 'lottieCloud') {
                    item.positionX = headerWidth;
                    item.positionY = Math.random() * (headerHeight + item.height);
                }
                else if (item.name === 'lottieRocket') {
                    item.positionX = 50;
                    item.positionY = headerHeight - 60;
                } else {
                    item.positionX = headerWidth + item.width;
                    item.positionY = Math.random() * (headerHeight + item.height);
                }

                item.element.addEventListener('click', function () {
                    if (item.name.includes('Bird')) {
                        item.direction *= -1;
                        item.rotationAngle += 180;
                        birdSound.play();
                    } else if (item.name.includes('Cloud')) {
                        item.direction *= -1;
                        cloudSound.play();
                    }
                });
            });

            function moveElement(item) {
                if (item.name === 'lottieRocket') {
                    item.positionY -= item.speed;
                    const maxTiltAngle = 30;

                    if (item.positionY <= item.driftThreshold && !item.hasTilted) {
                        item.horizontalSpeed = 0.10;
                        item.rotationAngle += 2;
                        item.positionX += item.horizontalSpeed;
                        item.hasTilted = true;
                    } else if (item.positionY <= item.driftThreshold) {
                        if (item.rotationAngle < maxTiltAngle) {
                            item.rotationAngle += 0.03;
                        }
                        if (item.rotationAngle >= maxTiltAngle) {
                            item.horizontalSpeed = 0.2;
                        }
                        item.positionX += item.horizontalSpeed;
                    }

                    // Show the Lottie animation once when the rocket reaches the top
                    // if (item.positionY <= 100 && !item.hasDisplayedLottie) {
                    //     lottieFireworks.style.display = 'block';
                    //     item.hasDisplayedLottie = true;
                    // }

                    // Reset position if the rocket goes off-screen
                    if (item.positionY + item.height < 0) {
                        item.style.display = 'none';
                        item.positionX = 50;
                        item.positionY = headerHeight - 60;
                        item.horizontalSpeed = 0;
                        item.rotationAngle = 0;
                        item.hasTilted = false;
                        item.hasDisplayedLottie = false;
                        // lottieFireworks.style.display = 'none';
                    }
                } else {
                    item.positionX += item.speed * item.direction;
                    item.positionY += item.verticalSpeed;

                    if (item.name === 'lottieCloud' || item.name === 'lottieCloudClear') {
                        if (item.positionY < item.padding) item.positionY = item.padding;
                        if (item.positionY > (headerHeight - item.height)) item.positionY = headerHeight - item.height;
                    } else {
                        if (item.positionY < -item.width) item.positionY = -item.width;
                        if (item.positionY > (headerHeight - item.height)) item.positionY = headerHeight - item.height;
                    }

                    if (Math.random() < 0.02) {
                        if (item.name === 'lottieCloud' || item.name === 'lottieCloudClear') {
                            item.verticalSpeed = (Math.random() - 0.5) * 0.3;
                        } else {
                            item.verticalSpeed = (Math.random() - 0.5) * 3;
                        }
                    }
                }

                // Apply different rotation for rocket and birds
                if (item.name === 'lottieRocket') {
                    item.element.style.transform = `translateX(${item.positionX}px) translateY(${item.positionY}px) rotate(${item.rotationAngle}deg)`;
                } else {
                    item.element.style.transform = `translateX(${item.positionX}px) translateY(${item.positionY}px) rotateY(${item.rotationAngle}deg)`;
                }

                // Flip and reset position when off-screen
                if (item.name === 'lottieCloud') {
                    if (item.positionX < -item.width && item.direction === -1) {
                        item.positionX = headerWidth;
                    }
                } else if (item.name === 'lottieCloudClear') {
                    if (item.positionX > headerWidth && item.direction === 1) {
                        item.positionX = -item.width;
                    }
                } else {
                    if (item.positionX < -item.width && item.direction === -1) {
                        item.direction = 1;
                        item.rotationAngle += 180;
                        item.positionX = -item.width;
                    }

                    if (item.positionX > headerWidth - (item.width + 120) && item.direction === 1) {
                        item.direction = -1;
                        item.rotationAngle += 180;
                        item.positionX = headerWidth - (item.width + 120);
                    }
                }

                requestAnimationFrame(() => moveElement(item));
            }

            elements.forEach(item => moveElement(item));
        });
    </script>



    {{--    <script>--}}
    {{--        document.addEventListener('DOMContentLoaded', function() {--}}
    {{--            const bird = document.getElementById('lottieBird');--}}
    {{--            const header = document.getElementById('home-page');--}}
    {{--            const headerHeight = header.offsetHeight - 80;--}}
    {{--            const headerWidth = header.offsetWidth;--}}



    {{--            // let birdPositionX = headerWidth + 50;--}}
    {{--            let birdPositionX = headerWidth;--}}
    {{--            // let birdPositionY = Math.random() * headerHeight;--}}
    {{--            let birdPositionY = 0;--}}

    {{--            console.log(headerHeight);--}}
    {{--            console.log(birdPositionY);--}}

    {{--            let birdSpeed = 2;--}}
    {{--            let verticalSpeed = (Math.random() - 0.5) * 3;--}}
    {{--            let direction = -1;--}}
    {{--            let rotationAngle = 0;--}}
    {{--            let currentPosition;--}}
    {{--            function moveBird() {--}}
    {{--                birdPositionX += birdSpeed * direction;--}}
    {{--                birdPositionY += verticalSpeed;--}}

    {{--                if (birdPositionY < -50) birdPositionY = -50;--}}
    {{--                if (birdPositionY > headerHeight) birdPositionY = headerHeight;--}}

    {{--                // Add random fluctuations to the bird's movement for a more erratic path--}}
    {{--                if (Math.random() < 0.02) {--}}
    {{--                    verticalSpeed = (Math.random() - 0.5) * 3;--}}
    {{--                }--}}

    {{--                // Update the bird's position using the transform property--}}
    {{--                bird.style.transform = `translateX(${birdPositionX}px) translateY(${birdPositionY}px) rotateY(${rotationAngle}deg)`;--}}

    {{--                // If the bird moves off-screen to the left, flip it horizontally and change direction to the right--}}
    {{--                if (birdPositionX < -60 && direction === -1) {--}}
    {{--                    direction = 1;  // Change direction to right--}}
    {{--                    rotationAngle += 180;  // Rotate the bird horizontally by 180 degrees when it changes direction--}}
    {{--                    bird.style.transform = `translateX(${birdPositionX}px) translateY(${birdPositionY}px) rotateY(${rotationAngle}deg)`; // Flip and rotate horizontally--}}
    {{--                    // birdPositionX = birdPositionX;  // Reset to start position on the left--}}
    {{--                    // birdPositionY = Math.random() * window.innerHeight;  // Optionally randomize vertical position--}}
    {{--                }--}}

    {{--                // If the bird moves off-screen to the right, flip it horizontally and change direction to the left--}}
    {{--                if (birdPositionX > headerWidth&& direction === 1) {--}}
    {{--                    direction = -1;  // Change direction to left--}}
    {{--                    rotationAngle += 180;  // Rotate the bird horizontally by 180 degrees when it changes direction--}}
    {{--                    bird.style.transform = `translateX(${birdPositionX}px) translateY(${birdPositionY}px) rotateY(${rotationAngle}deg)`; // Flip and rotate horizontally--}}
    {{--                    // birdPositionX = birdPositionX + 20;  // Reset to start position on the right--}}
    {{--                    // birdPositionY = Math.random() * window.innerHeight;  // Optionally randomize vertical position--}}
    {{--                }--}}
    {{--                requestAnimationFrame(moveBird);--}}
    {{--            }--}}

    {{--            moveBird();--}}
    {{--        });--}}
    {{--    </script>--}}

@endpush
<!-- Header-Area-End -->

