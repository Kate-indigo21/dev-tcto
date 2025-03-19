<?php $base_url = 'http://localhost/msutcto/'; ?>
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
        .container {
            display: flex;
            width: 100%;
            height: 70vh;
        }

        /* Left column (Video) */
        .video-container {
            width: 80%;
            height: 100%;
        }

        .video-container iframe {
            width: 100%;
            height: 100%;
        }

        /* Right column (Events) */
        .events-container {
            width: 20%;
            padding: 20px;
            overflow-y: auto;
            max-height: 70vh;
            overflow: hidden;
        }

        .events-container h1 {
            background: #800000;
            text-align: center;
            color: #fff;
            margin-top: 0px;
            padding: 5px;
        }

        #events-billboard {
            color: #fff;
        }

        #events-billboard .events-content img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        #events-billboard .events-content h2 {
            font-size: 25px;
        }

        #events-billboard .events-content p {
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
        }
        /* NEWS */
        .news-container {
            width: 100%;
            height: 30vh;
        }
        .news-container h1 {
            background: #800000;
            text-align: center;
            color: #fff;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 5px;
        }
        #news-billboard {
            display: flex;
            gap: 20px;
            overflow: hidden;
            position: relative;
        }
        .news-content {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 16px;
            animation: moveNewsHorizontal 30s linear infinite;
            min-width: 800px;
        }
        .news-content-text h2 {
            font-size: 23px;
            font-weight: bold;
            color: #fff;
        }
        .news-content-text p {
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
        }

        @keyframes moveNewsVertical {
            0% {
                transform: translateY(-180vh);
            }

            100% {
                transform: translateY(70vh);
            }
        }

        @keyframes moveNewsHorizontal {
            0% {
                transform: translateX(2000px);
            }

            100% {
                transform: translateX(-2000px);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Left Column: Video -->
        <div class="video-container">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Kb-4JL1ZIpM?autoplay=1&loop=1"
                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
            </iframe>
            </iframe>
        </div>
        <!-- Right Column: Events -->
        <div class="events-container">
            <h1>EVENTS</h1>
            <div class="content-container slider" id="events-billboard" data-sharepoint-list="Events"
                data-sort="EventDate:asc" data-filtered-by="DisplayToPublic:1">
                <script type="text/template" class="content-template">
                <div class="events-content">
                    <div class="image-container">
                        <img src="{{ ImageURL.Url }}"/>
                    </div>
                    <div class="events-content-text">
                        <h2>{{ Title }}</h2>
                        <span><b>Event Date:</b> {{ EventDate }}</span>
                        <span>{{ Location }}</span>
                        <p>{{ Description }} </p>
                    </div>
                </div> 
            </script>
            </div>
        </div>
    </div>
    <div class="news-container">
        <h1>NEWS</h1>
        <div class="content-container" id="news-billboard" data-sharepoint-list="News" data-sort="Created:asc"
            data-filtered-by="DisplayToPublic:1">
            <script type="text/template" class="content-template">
        <div class="news-content">
            <div class="news-content-text">
                <h2>{{ Title }}</h2>
                <p>{{ Description }}</p>
            </div>
        </div>
    </script>
        </div>
    </div>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?php echo $base_url; ?>sharepoint-integration/sharepoint-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            function initializeSlickSlider() {
                $('.slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: false,
                    dots: false,
                    adaptiveHeight: true
                });
            }

            // Wait for SharePoint content to be loaded before initializing the slider
            var checkExist = setInterval(function () {
                if ($('.slider .events-content').length) {
                    clearInterval(checkExist);
                    initializeSlickSlider();
                }
            }, 500);

            var checkExist = setInterval(function () {
                if ($('.slider .events-content').length) {
                    clearInterval(checkExist);
                    console.log("SharePoint content detected, initializing Slick...");
                    initializeSlickSlider();
                }
            }, 500);
        });
    </script>
</body>

</html>