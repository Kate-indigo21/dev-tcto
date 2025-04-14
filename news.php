<?php include("includes/header.php") ?>
<div class="flex flex-col xl:mx-[240px] xs:mx-[20px] xl:mt-20">
    <h3 class="headings xl:h3 xs:h5 text-center">News</h3>
    <!-- NEWS SHAREPOINT LIST -->
    <div class="content-container" id="news-headline-page" data-sharepoint-list="News" data-sort="Created:desc"
        data-limit="1" data-sort="Created:desc">
        <script type="text/template" class="content-template">
                                <!-- Place your HTML code here -->
        <div class="news-page-content">
            <div class="image-container news-headline-image">
                <img src="{{ ImageURL.Url }}" />
            </div>
            <div class="news-page-text">
                <h1 class="show-popup" id="ID:{{ ID }}" data-popup-target="news-popup">{{ Title }}</h1>
                <p>{{ Description }}</p>
            </div>
        </div>
        </script>
    </div>
</div>
<div class="flex justify-center xl:mx-[240px] xs:mx-5 mt-[100px] mb-[100px]">
    <!-- NEWS SHAREPOINT LIST -->
    <div class="content-container" id="news-page" data-sharepoint-list="News" data-list-count="1"
        data-sort="Created:desc">
        <script type="text/template" class="content-template">
        <!-- Place your HTML code here -->
        <div class="news-page-content">
            <div class="image-container">
                <img src="{{ ImageURL.Url }}" />
            </div>
            <div class="news-page-text">
                <h1 class="show-popup" id="ID:{{ ID }}" data-popup-target="news-popup">{{ Title }}</h1>
                <p>{{ Description }}</p>
            </div>
        </div>
        </script>
    </div>
    <div id="news-popup" class="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup('news-popup')">&times;</span>
            <script type="text/template" class="popup-template">
                        <div class="popup-image">
                            <img src="{{ ImageURL.Url }}">
                        </div>
                        <div class="popup-text">
                            <h1>{{ Title }}</h1>
                            <p>{{ BodyText }}</p>
                        </div>
                    </script>
            <div class="popup-main-content"></div>
        </div>
    </div>
    <style>
        #news-page {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            padding: 10px 50px;
        }

        .news-page-content {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            padding: 10px 50px;
        }

        .news-page-content img {
            width: 100%;
            height: 200px;
            object-position: center;
            object-fit: cover;
        }
        .news-headline-image img {
            height: 350px;
        }
        .news-page-text {
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: center;
            line-height: normal;
            color: #fff;
        }

        .news-page-text h1 {
            font-family: Merchant;
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
        }

        .news-page-text h1:hover {
            cursor: pointer;
            color: #007aff;
        }

        .news-page-text p {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 100%;
            color: #999999;
        }

        /* POPUP */
        #news-popup .popup-content {
            background: #fff;
            padding: 0px 30px 25px 30px;
            text-align: left;
            width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            border-radius: 10px;
        }
        #news-popup .popup-image img {
            width: 100%;
            height: 400px;
            object-fit:cover;
            object-position: center;
            margin-bottom: 20px;
        }
        #news-popup .popup-text h1 {
            font-family: Merchant;
            font-size: 25px;
            font-weight: bold;
            color: #0c1c59;
            margin-bottom: 15px;
        }
    </style>
</div>
<?php include("includes/footer.php") ?>