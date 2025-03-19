<?php include("../includes/header.php") ?>
<div class="flex flex-col xl:mx-[240px] xs:mx-[20px] xl:mt-20">
    <h3 class="headings xl:h3 xs:h5 text-center">Articles</h3>
    <!-- NEWS SHAREPOINT LIST -->
    <div class="content-container" id="news-headline-page" data-sharepoint-list="News" data-list-count="1"
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
<div class="flex justify-center xl:mx-[240px] xs:mx-5 mt-[120px]">
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
</main>
</body>

</html> <!-- <div class="flex gap-[30px] justify-center mt-[40px] ">
                <a href="#" class=" bg-white xl:py-[10px] xl:px-[10px] xl:hidden xs:block xs:py-[8px] xs:px-[8px] rounded-[40px] border-white border-2"></a>
                <a href="#" class="border-transparent xl:py-[10px] xl:hidden xs:block xl:px-[10px] xs:py-[8px] xs:px-[8px] rounded-[40px] border-white border-2"></a>
                <a href="#" class="border-transparent xl:py-[10px] xl:hidden xs:block xl:px-[10px] xs:py-[8px] xs:px-[8px] rounded-[40px] border-white border-2"></a>
            </div> --> <!-- <div class="flex justify-center mt-20">
                <div class="flex xl:flex-row xs:flex-col w-[1440px]">
                    <div class="flex xl:flex-col  xl:gap-[30px] justify-center xs:flex-row xs:gap-[60px] ">
                        <div class="flex xl:flex-col xs:flex-col xl:gap-[30px]  relative">
                            
                            <p class="paragraph p1 text-white-pure xl:text-left xs:text-center xs:mb-[7px]">Categories</p>


                            <div class="flex xl:flex-col xl:gap-5">
                                
                                <p class="paragraph p2 text-titanium xl:block xs:hidden">Events</p>
                                <p class="paragraph p2 text-titanium xl:block xs:hidden">News</p>
                                <p class="paragraph p2 text-titanium xl:block xs:hidden">Academic</p>
                                <p class="paragraph p2 text-titanium xl:block xs:hidden">Ceremonies</p>
                                <p class="paragraph p2 text-titanium xl:block xs:hidden">Administrative</p>

                                
                                <select class="rounded-[40px] flex xs:flex-col xs:msu-drop-white-shadow xs:ml-[14px] xs:w-[181px]  text-white-pure xs:px-[9px] xs:py-[9px]  gap-5 xl:hidden xs:block">
                                    
                                    <option class="paragraph p2 text-black-pure">Events</option>
                                    <option class="paragraph p2 text-black-pure">News</option>
                                    <option class="paragraph p2 text-black-pure">Academic</option>
                                    <option class="paragraph p2 text-black-pure">Ceremonies</option>
                                    <option class="paragraph p2 text-black-pure">Administrative</option>
                                </select>

                            </div>
                        </div>
                        
                        <div class="flex xl:flex-col xs:flex-col xl:gap-[30px] relative  xs:ml-[50px]">
                            <p class="paragraph p1 text-white-pure xl:text-left xs:text-center xs:mb-[7px] ">Date</p>
                            <div class="flex flex-col gap-5">
                                <p class="paragraph p2 text-titanium xl:block xs:hidden">2024</p>
                                <p class="paragraph p2 text-titanium xl:block xs:hidden">2023</p>
                                <p class="paragraph p2 text-titanium xl:block xs:hidden">2022</p>
                                <p class="paragraph p2 text-titanium xl:block xs:hidden">2021</p>
                                <p class="paragraph p2 text-titanium xl:block xs:hidden">2020</p>


                                <select class="rounded-[40px] flex xs:flex-col xs:msu-drop-white-shadow xs:ml-[14px] xs:w-[120px]  text-white-pure xs:px-[9px] xs:py-[9px]  gap-5 xl:hidden xs:block">
                                    
                                    <option class="paragraph p2 text-black-pure">10/11/24</option>
                                    <option class="paragraph p2 text-black-pure">10/11/2023</option>
                                    <option class="paragraph p2 text-black-pure">10/11/2022</option>
                                    <option class="paragraph p2 text-black-pure">10/11/2021</option>
                                    <option class="paragraph p2 text-black-pure">10/11/2020</option>
                                </select>

                                <div class="flex flex-col xl:gap-5 xl:ml-[10px]">
                                    <p class="paragraph p2 text-titanium xl:block xs:hidden">December</p>
                                    <p class="paragraph p2 text-titanium xl:block xs:hidden">November</p>
                                    <p class="paragraph p2 text-titanium xl:block xs:hidden">October</p>
                                    <p class="paragraph p2 text-titanium xl:block xs:hidden">September</p>
                                    <p class="paragraph p2 text-titanium xl:block xs:hidden">August</p>
                                    <p class="paragraph p2 text-titanium xl:block xs:hidden">July</p>
                                    <p class="paragraph p2 text-titanium xl:block xs:hidden">June</p>
                                </div>

                                
                                
                            </div>
                        </div>
                        <div class="flex flex-col min-w-max  bottom-0 xl:block xs:hidden">
                            <p class="paragraph p2 text-titanium">Can’t see what you’re looking for?</p>
                            <button class="paragraph p2 text-white-pure w-full border py-[10px] mt-[10px] rounded-[40px]">Search</button>
                        </div>
                    </div>
                    <div class="flex xl:flex-col xl:ml-[235px]  xs:flex-col xs:mx-[20px] xl:gap-[32px] xs:gap-[31px] xs:mt-[49px]">
                        <div class="flex">
                            <img src="/images/article-blank-1.png" alt="" class="xl:h-[120px] xs:h-[136px] object-cover object-center" />
                            <div class="flex flex-col ml-[22px]">
                                <h5 class="headings h5 max-w-[599px]">Sample title search of a document, article</h5>
                                <p class="paragraph p2 text-silver max-w-[599px] mt-[10px]">Lorem ipsum dolor sit amet consectetur. Ac sem cursus facilisis facilisis orci erat ut. Pulvinar consectetur quisque sollicitudin morbi feugiat. Elementum nisl quis rhoncus cras neque et pulvinar id.</p>
                                <div class="flex max-w-[599px] mt-[10px]">
                                    <p class="paragraph p2 text-titanium">Article</p>
                                    <p class="paragraph p2 text-titanium ml-5">2021 Feb 01</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/images/article-blank-1.png" alt="" class="xl:h-[120px] xs:h-[136px] object-cover object-center" />
                            <div class="flex flex-col ml-[22px]">
                                <h5 class="headings h5 max-w-[599px]">Sample title search of a document, article</h5>
                                <p class="paragraph p2 text-silver max-w-[599px] mt-[10px]">Lorem ipsum dolor sit amet consectetur. Ac sem cursus facilisis facilisis orci erat ut. Pulvinar consectetur quisque sollicitudin morbi feugiat. Elementum nisl quis rhoncus cras neque et pulvinar id.</p>
                                <div class="flex max-w-[599px] mt-[10px]">
                                    <p class="paragraph p2 text-titanium">Article</p>
                                    <p class="paragraph p2 text-titanium ml-5">2021 Feb 01</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/images/article-blank-1.png" alt="" class="xl:h-[120px] xs:h-[136px] object-cover object-center" />
                            <div class="flex flex-col ml-[22px]">
                                <h5 class="headings h5 max-w-[599px]">Sample title search of a document, article</h5>
                                <p class="paragraph p2 text-silver max-w-[599px] mt-[10px]">Lorem ipsum dolor sit amet consectetur. Ac sem cursus facilisis facilisis orci erat ut. Pulvinar consectetur quisque sollicitudin morbi feugiat. Elementum nisl quis rhoncus cras neque et pulvinar id.</p>
                                <div class="flex max-w-[599px] mt-[10px]">
                                    <p class="paragraph p2 text-titanium">Article</p>
                                    <p class="paragraph p2 text-titanium ml-5">2021 Feb 01</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/images/article-blank-1.png" alt="" class="xl:h-[120px] xs:h-[136px] object-cover object-center" />
                            <div class="flex flex-col ml-[22px]">
                                <h5 class="headings h5 max-w-[599px]">Sample title search of a document, article</h5>
                                <p class="paragraph p2 text-silver max-w-[599px] mt-[10px]">Lorem ipsum dolor sit amet consectetur. Ac sem cursus facilisis facilisis orci erat ut. Pulvinar consectetur quisque sollicitudin morbi feugiat. Elementum nisl quis rhoncus cras neque et pulvinar id.</p>
                                <div class="flex max-w-[599px] mt-[10px]">
                                    <p class="paragraph p2 text-titanium">Article</p>
                                    <p class="paragraph p2 text-titanium ml-5">2021 Feb 01</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/images/article-blank-1.png" alt="" class="xl:h-[120px] xs:h-[136px] object-cover object-center" />
                            <div class="flex flex-col ml-[22px]">
                                <h5 class="headings h5 max-w-[599px]">Sample title search of a document, article</h5>
                                <p class="paragraph p2 text-silver max-w-[599px] mt-[10px]">Lorem ipsum dolor sit amet consectetur. Ac sem cursus facilisis facilisis orci erat ut. Pulvinar consectetur quisque sollicitudin morbi feugiat. Elementum nisl quis rhoncus cras neque et pulvinar id.</p>
                                <div class="flex max-w-[599px] mt-[10px]">
                                    <p class="paragraph p2 text-titanium">Article</p>
                                    <p class="paragraph p2 text-titanium ml-5">2021 Feb 01</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/images/article-blank-1.png" alt="" class="xl:h-[120px] xs:h-[136px] object-cover object-center" />
                            <div class="flex flex-col ml-[22px]">
                                <h5 class="headings h5 max-w-[599px]">Sample title search of a document, article</h5>
                                <p class="paragraph p2 text-silver max-w-[599px] mt-[10px]">Lorem ipsum dolor sit amet consectetur. Ac sem cursus facilisis facilisis orci erat ut. Pulvinar consectetur quisque sollicitudin morbi feugiat. Elementum nisl quis rhoncus cras neque et pulvinar id.</p>
                                <div class="flex max-w-[599px] mt-[10px]">
                                    <p class="paragraph p2 text-titanium">Article</p>
                                    <p class="paragraph p2 text-titanium ml-5">2021 Feb 01</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/images/article-blank-1.png" alt="" class="xl:h-[120px] xs:h-[136px] object-cover object-center" />
                            <div class="flex flex-col ml-[22px]">
                                <h5 class="headings h5 max-w-[599px]">Sample title search of a document, article</h5>
                                <p class="paragraph p2 text-silver max-w-[599px] mt-[10px]">Lorem ipsum dolor sit amet consectetur. Ac sem cursus facilisis facilisis orci erat ut. Pulvinar consectetur quisque sollicitudin morbi feugiat. Elementum nisl quis rhoncus cras neque et pulvinar id.</p>
                                <div class="flex max-w-[599px] mt-[10px]">
                                    <p class="paragraph p2 text-titanium">Article</p>
                                    <p class="paragraph p2 text-titanium ml-5">2021 Feb 01</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-20">
                <p class="paragraph p2 text-titanium mr-[30px]">Pages</p>
                <a href="" class="paragraph p2 text-titanium mr-5">1</a>
                <a href="" class="paragraph p2 text-titanium mr-5">2</a>
                <a href="" class="paragraph p2 text-titanium mr-5">3</a>
                <a href="" class="paragraph p2 text-titanium mr-5">4</a>
                <a href="" class="paragraph p2 text-titanium mr-5">5</a>
                <a href="" class="paragraph p2 text-titanium mr-5">6</a>
                <a href="" class="paragraph p2 text-titanium mr-5">7</a>
                <a href="" class="paragraph p2 text-titanium mr-5">8</a>
            </div> -->
<div class="video-wrapper mt-[120px]">
    <div class="video-container"> <iframe width="100%" height="980"
            src="https://www.youtube.com/embed/0C7f8iq6f_w?autoplay=0&mute=0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
        </iframe> </div>
</div>
<?php include("../includes/footer.php") ?>