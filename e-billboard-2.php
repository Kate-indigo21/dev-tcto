<?php $base_url = 'https://dev-tcto.etpbx.com/'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Billboard</title>
    <link rel="icon" type="image/svg+xml" href="<?php echo $base_url; ?>images/MSU%20Seal%20New%20%28Official%29.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <style>
        body {
            font-family: "Atkinson Hyperlegible Next", sans-serif;
            margin: 0px;
            box-sizing: border-box;
            background-color: #0a1c37;
            overflow: hidden;
        }

        a {
            color: #fff;
        }

        .data-loader img {
            display: block;
            margin: auto;
            text-align: center;
            width: 70px;
        }

        .events-content {
            position: relative;
            height: 100vh;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .events-content-text {
            position: absolute;
            top: 2%;
            left: 2%;
            width: 100%;
            height: 100%;
            /* background: rgba(10, 28, 55, 0.8); */
            padding: 30px;
            box-sizing: border-box;
            display: none;
            /* hidden initially */
        }

        .events-content-text h2 {
            font-size: 50px;
            margin-bottom: 10px;
        }

        .events-content-text span,
        .events-content-text p {
            display: block;
            font-size: 25px;
            margin-top: 5px;
        }

        /* Top-left section */
        .text-top-left {
            background: rgba(10, 28, 55, 0.7);
            padding:30px 50px;
            position: absolute;
            top: 40px;
            left: 0px;
            text-align: left;
        }

        .text-top-left h2 {
            font-size: 50px;
            margin: 0 0 10px 0;
        }

        .text-top-left span {
            display: block;
            font-size: 24px;
            margin-top: 5px;
        }

        /* Bottom-right section */
        .text-bottom-left {
            background: rgba(10, 28, 55, 0.7);
            padding: 30px 50px;
            position: absolute;
            bottom: 5%;
            right: 2%;
            margin-right: 2%;
            max-width: 55%;
            text-align: left;
        }

        .text-bottom-left p {
            font-size: 20px;
            line-height: 1.5;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
            display: -webkit-box;
            text-overflow: ellipsis;
        }
        .logo-top-right {
            position: absolute;
            top: 40px;
            right: 40px;
            width: 150px; /* Adjust as needed */
            height: auto;
            z-index: 10;
        }
    </style>
</head>

<body>
    <div class="content-container slider" id="events-billboard" data-sharepoint-list="Events" data-sort="EventDate:asc"
        data-filtered-by="DisplayToPublic:1">
        <script type="text/template" class="content-template">
            <div class="events-content" style="background: url('{{ ImageURL.Url }}') center/cover no-repeat;height:100vh;">
                <div class="events-content-text">
                <!-- <img src="<?php echo $base_url; ?>images/MSU%20Seal%20New%20(Official).png" class="logo-top-right" alt="Logo"> -->
                    <div class="text-top-left"> 
                        <h2>{{ Title }}</h2>
                        <span><b>Event Date:</b> {{ EventDate }}</span>
                        <span>{{ Location }}</span>
                    </div>
                    <div class="text-bottom-left">
                        <p>{{ Description }} </p>
                    </div>
                </div>
            </div> 
        </script>
    </div>

    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <script src="<?php echo $base_url; ?>sharepoint-integration/sharepoint-script.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            function initializeSlickSlider() {
                $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                    // Hide text from all slides before transition
                    $('.events-content-text').hide();
                });

                $('.slider').on('afterChange', function (event, slick, currentSlide) {
                    const $currentSlide = $(slick.$slides[currentSlide]);
                    const $textOverlay = $currentSlide.find('.events-content-text');

                    // Show overlay text after 2s
                    setTimeout(() => {
                        $textOverlay.fadeIn(600);
                    }, 2000);
                });

                $('.slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 8000, // 2s blank + 3s text
                    arrows: false,
                    dots: false,
                    adaptiveHeight: true,
                    fade: true,             // <<< added this line
                    cssEase: 'linear',      // <<< smoother dissolve effect
                    pauseOnHover: false,
                    pauseOnFocus: false
                });
            }

            // Wait for SharePoint content to load
            const checkExist = setInterval(function () {
                if ($('.slider .events-content').length) {
                    clearInterval(checkExist);
                    initializeSlickSlider();
                }
            }, 500);
        });
    </script>
</body>

</html>