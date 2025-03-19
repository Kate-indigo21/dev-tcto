<?php include("includes/header.php") ?>
<div class="relative bg-black-pure w-full xl:px-[12.5%] xs:px-[3.85%] py-10 z-0">
    <astro-island uid="2dMDvD" prefix="r1" component-url="/_astro/CarouselMain.CXGVrz8M.js" component-export="default"
        renderer-url="/_astro/client.C6KyQvCx.js" props="{}" ssr="" client="visible"
        opts='{"name":"CarouselMain","value":true}' await-children="">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="z-0">
                        <img src="images/banner/banner1.jpg" />
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!--astro:end-->
    </astro-island>
</div>
<!-- <div class="flex xl:flex-row xs:flex-col justify-center xl:bottom-[80px] xl:h-[640px] xl:mx-[12.5%] xs:mx-0 relative">
            <div class="bg-msu-deep-ocean flex xl:flex-row xs:flex-col justify-center xl:pr-5">
                {
                    <div>
                        <img src={ urlForImage(latestFeaturedArticle.mainImage.asset.url).url() } alt="" class="xl:w-[960px] xl:h-[720px] xs:h-[480px] xs:w-full object-cover object-center" />
                        <div class="grid justify-center xl:absolute xl:top-[519px] xs:relative xl:px-10 xs:px-5 xl:py-5 xs:pt-10 xl:bg-[rgba(0,0,0,0.3)] xs:bg-none rounded-r-lg">
                            <a href={`/${latestFeaturedArticle.slug.current}`}>
                                <h4 class="headings xl:h4 xs:h5 xl:max-w-[680px] xl:max-h-[86px] overflow-hidden whitespace-normal text-ellipsis" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                    { latestFeaturedArticle.title }
                                </h4>
                            </a>
                            <p class="paragraph p2 mt-5 text-white-pure xl:max-w-[680px] xl:max-h-[60px] xs:max-h-[95px] overflow-hidden whitespace-normal text-ellipsis" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                { latestFeaturedArticle.body[0].children[0].text }
                            </p>
                        </div>
                    </div>
                }
                
                <div class="grid justify-center xl:mt-[-20px] xs:mt-[40px] mx-5 xl:pb-0 xs:pb-20">
                    {
                        threeLatestArticles.map((article: {
                            title: unknown; 
                                body: [
                                        {
                                                children: [
                                                        {
                                                                text: unknown;
                                                        }
                                                ]
                                        }
                                ];
                                mainImage: {
                                        asset: {
                                                url: string
                                        };
                                };
                                slug: {
                                        current: unknown;
                                };
                        }) => (
                            <div class="flex mt-10">
                                <img src={ urlForImage(article.mainImage.asset.url).url() } alt="" class="xl:h-[200px] xl:w-[200px] xs:h-[175px] xs:w-[175px] object-cover object-center" />
                                <div class="ml-5">
                                    <a href={`/${article.slug.current}`}><h5 class="headings xl:h5 xs:h6 xl:max-w-[220px] xl:max-h-[48px] xs:max-w-[165px] xs:max-h-[29px] overflow-hidden whitespace-normal text-ellipsis" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{ article.title }</h5></a>
                                    <p class="paragraph p2 xl:max-w-[220px] xl:max-h-[141px] xs:max-w-[165px] xs:max-h-[140px] text-titanium xl:mt-[15px] xs:mt-[10px] max-h-[156px] overflow-hidden whitespace-normal text-ellipsis" style="display: -webkit-box; -webkit-line-clamp: 7; -webkit-box-orient: vertical;">
                                        { article.body[0].children[0].text }
                                    </p>
                                </div>
                            </div>
                        ))
                    }
                </div>
            </div>
        </div> -->
<div class="bg-black-pure w-full xl:px-[12.5%] xs:px-[3.85%]">
    <h5 class="headings h5 text-center xl:pt-[27px] xs:pt-[30px]">
        Upcoming Events
    </h5>

    <div class="grid xl:grid-cols-4 md:grid-cols-2 xs:grid-cols-1 mt-[27px]"></div>
</div>
<div class="xl:campuslife-bg-img xs:bg-transparent">
    <div class="flex xl:flex-row xs:flex-col xl:px-[12.5%] xs:px-[3.85%] pt-20 xl:bg-none xs:campuslife-bg-img">
        <h3 class="headings xl:h3 xs:h4 xl:w-[414px] xl:text-jusity xs:text-center">
            Experience MSU-TCTO’s Campus Life
        </h3>
        <div class="xs:ml-0 xl:mt-0 xs:mt-10">
            <p class="paragraph xl:p1 xs:p2 xl:w-[840px] text-titanium xl:mb-[41px] xs:mb-[58px] xl:ml-10">
                As an innovative research university, MSU-TCTO
                offers a vibrant campus life at the heart of the
                Sulu Archipelago. Experience diverse cultures,
                engage in the rich heritage of Tawi-Tawians, and
                participate in community engagements. Your campus
                experiences will change your mind and enrich your
                heart forever.
            </p>
            <div class="flex xl:flex-row xs:flex-col justify-center">
                <a href="<?php echo $base_url; ?>campus.php"
                    class="bg-msu-maroon text-white-pure xl:py-[14.5px] xs:py-5 xl:w-[360px] text-center rounded-[40px] paragraph xl:p1 xs:p2">Explore
                    The Campus</a>
                <!-- <a href="/campus" class="text-white-pure xl:py-[14.5px] xs:py-5 xl:w-[360px] text-center rounded-[40px] xl:ml-10 xl:mt-0 xs:mt-[10px] paragraph xl:p1 xs:p2 border">Campus History</a> -->
            </div>
        </div>
        <div class="bg-gradient-ocean h-20 rotate-180 xs:block xl:hidden"></div>
    </div>
    <div
        class="flex xl:flex-row xs:flex-col justify-center xl:mt-[86px] xl:pb-[141px] xs:pb-[85px] xl:px-[12.5%] xs:px-[3.85%]">
        <div class="xs:mb-[61px] xl:mb-0">
            <img src="images/student_center/image1.png" class="w-full" alt="" />
            <div class="m-5">
                <h5 class="headings h5 text-white-pure">
                    Explore Academic Programs
                </h5>
                <div class="flex flex-col gap-[5px] paragraph p2 text-white-pure mt-[10px]">
                    <a href="<?php echo $base_url; ?>programs/coed.php">Education</a>
                    <a href="<?php echo $base_url; ?>programs/cof.php">Fishery</a>
                    <a href="<?php echo $base_url; ?>programs/iict.php">Information Technology</a>
                    <a href="<?php echo $base_url; ?>programs/cias.php">Islamic & Arabic Studies</a>
                    <a href="<?php echo $base_url; ?>programs/ioes.php">Oceanography</a>
                    <a href="<?php echo $base_url; ?>programs/cas.php">Science and Arts</a>
                </div>
            </div>
        </div>
        <div class="xs:mb-[61px] xl:mb-0">
            <img src="images/admission_scholarship/image1.png" class="w-full" alt="" />
            <div class="m-5">
                <h5 class="headings h5 text-white-pure mt-5">
                    Admission and Scholarships
                </h5>
                <div class="flex flex-col gap-[5px] paragraph p2 text-white-pure mt-[10px]">
                    <!-- <a href="#">SASE</a> -->
                    <a href="/admissions">Freshmen</a>
                    <a href="/admissions">Transferee</a>
                    <a href="/admissions">Returning / Shifting</a>
                    <a href="/admissions">Remedial Program</a>
                    <a href="/admissions">Student Fees</a>
                    <a href="/admissions">Scholarships and Grants</a>
                </div>
            </div>
        </div>
        <div>
            <img src="images/administrative_office/image1.png" class="w-full" alt="" />
            <div class="m-5">
                <h5 class="headings h5 text-white-pure mt-5">
                    Visit Our Offices
                </h5>
                <div class="flex flex-col gap-[5px] paragraph p2 text-white-pure mt-[10px]">
                    <a href="/offices">Office of the Chancellor</a>
                    <a href="/offices">Admin and Finance</a>
                    <a href="/offices">Planning and Development</a>
                    <a href="/offices">Administrative Offices</a>
                    <a href="/offices">Academic Offices</a>
                    <a href="/offices">Roster of Faculties</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Chancellor Message -->
<div class="xl:home-fold-06-gb-img xs:bg-gradient flex xl:flex-row xs:flex-col justify-center xl:px-[12.5%] xs:px-0">

    <img src="images/fold-06%20chancy1.png" alt="" class="mt-[280px] h-[1258px] xl:block xs:hidden" />
    <div class="xl:ml-[76px]">
        <div
            class="flex flex-col justify-center items-center xl:bg-none xs:home-fold-06-gb-img xl:w-[680px] xs:w-full relative">
            <h3
                class="headings xl:h3 xs:h4 text-msu-deep-ocean xl:pt-[80px] xs:pt-[80px] xl:max-w-full xs:max-w-[350px]">
                We help you take your first step towards
                <span class="bg-msu-deep-ocean text-msu-gold px-[10px] pt-[10px]">SUCCESS!</span>
            </h3>
            <img src="images/fold-06%20chancy1.png" alt="" class="mt-[84px] h-[498px] xl:hidden xs:block" />
            <div class="bg-gradient-white absolute top-[769px] h-20 w-full rotate-180 xl:hidden xs:block"></div>
        </div>
        <div class="xl:bg-transparent xs:bg-white-pure xl:w-[680px] xs:w-full xl:px-0 xs:px-[3.85%] xs:pb-[40px]">
            <h4 class="headings xl:h4 xs:h5 text-msu-maroon xl:mt-[75px] xs:pt-5 text-center">
                A Message from the Chancellor
            </h4>
            <p class="paragraph xl:p1 xs:p2 text-black-pure mt-[12px]">
                Dear Dolphins,
            </p>
            <p class="paragraph xl:p1 xs:p2 text-black-pure mt-[12px]">
                We are thrilled to announce a significant milestone
                in our journey towards redefining education in the
                digital age.
            </p>
            <p class="paragraph xl:p1 xs:p2 text-black-pure mt-[12px]">
                Today, we officially launch our brand-new website as
                we enter a new era of digitalization and digital
                transformation. This also a realization of our
                vision of a society where education knows no
                boundaries, where learning is accessed at the tip of
                your fingertips. Our official website serves as a
                gateway to connectivity, opening a world of
                knowledge and immense opportunities.
            </p>
            <p class="paragraph xl:p1 xs:p2 text-black-pure mt-[12px]">
                Crafted from collaborative efforts of our
                stakeholders, this website represents a pivotal step
                towards a future where knowledge sharing, research
                collaboration, faculty and student partnerships, and
                international linkages are more prominent than ever
                before.
            </p>
            <p class="paragraph xl:p1 xs:p2 text-black-pure mt-[12px]">
                As we continue our mission of Creating Opportunities
                and Transforming Lives, we are eternally grateful
                for your unwavering support and enthusiasm in our
                pursuit to adapt to digital transformation and take
                our first steps towards global connectivity,
                strengthening educational innovation for our faculty
                and staff, and introducing new ways of remote
                learning for our students.
            </p>
            <p class="paragraph xl:p1 xs:p2 text-black-pure mt-[12px]">
                With this, we hope to bring Tawi-Tawi to the World
                to reconnect our Global Dolphins and forge
                international linkages.
            </p>
            <h5 class="headings xl:h5 xs:h6 text-graphite mt-[12px]">
                Chancellor Mary Joyce Z. Guinto-Sali
            </h5>
        </div>
        <!-- <div class="flex xl:flex-row xs:flex-col xl:gap-[40px] xs:gap-[10px] text-center xl:bg-transparent xs:bg-white-pure pt-[45px] xl:px-0 xs:px-[3.85%] pb-[40px] justify-center">
            <a href="#chancellor_contact" class="paragraph xl:p1 xs:p2 bg-msu-maroon text-white-pure xl:py-[12.5px] xs:py-[20.5px] xl:px-[50px] rounded-[40px]">Contact Us</a>
            <a href="/offices#administrative" class="paragraph xl:p1 xs:p2 text-msu-maroon xl:py-[12.5px] xs:py-[20.5px] px-[30.5px] xl:px-[50px] rounded-[40px] border border-msu-maroon">Administrative Offices</a>

        </div> -->
    </div>
</div>
<!-- end Chancellor Message -->
<!-- fold 05 gazette -->
<div class="bg-msu-deep-ocean xl:px-[12.5%] xs:px-[3.85%] xl:pt-10 xs:pt-20 xl:pb-[101px] xs:pb-[95px] text-center">
    <h3 class="headings xl:h3 xs:h4 text-white-pure">The Pub</h3>
    <div class="flex xl:flex-row xs:flex-col justify-center items-center">
        <div class="xl:mt-10 xs:mt-20">
            <h4 class="headings xl:h4 xs:h5 text-white-pure xl:mb-[20px]">
                <a href="/gazette">Gazette</a>
            </h4>
            <div class="relative z-0 xl:w-[480px] xs:w-[300px]">
                <!-- Add msu-drop-shadow on other image other than this gazette -->
                <a href="files/w8lfrsa6/production/950c76c7184cf0f91bf55a6402cc66c1709805d0.pdf" target="_blank"><img
                        src="images/w8lfrsa6/production/bd7c00b1b0e627d772d7f9643f40f6341c385f12-544x704.jpg"
                        class="absolute xl:w-[412px] xs:w-[392px] z-20" alt="" /></a>
                <img src="images/w8lfrsa6/production/fe3bd1b420ba4c958c082640e3bd15ca62cb058b-542x705.jpg"
                    class="absolute xl:w-[412px] xs:w-[392px] top-[15px] left-[15px] z-10" alt="" />
                <img src="images/w8lfrsa6/production/46a5ba312bf76705bc08cd9e64d6635bc138682a-546x705.jpg"
                    class="absolute xl:w-[412px] xs:w-[392px] top-[30px] left-[30px] z-0" alt="" />
            </div>
            <div class="xl:max-w-[480px] xs:max-w-[350px] text-left">
                <p class="paragraph p2 text-titanium xl:mt-[650px] xs:mt-[470px] xl:h-[80px] xs:h-[80px] overflow-hidden whitespace-normal text-ellipsis"
                    style="
                                    display: -webkit-box;
                                    -webkit-line-clamp: 4;
                                    -webkit-box-orient: vertical;
                                ">
                    Nurul Iman, the new Islamic center of the
                    University, was formally inaugurated on March
                    10, 2023. It is one of the University projects
                    initiated by the current Chancellor, Prof. Mary
                    Joyce Z. Guinto-Sali, Ph.D.
                </p>
            </div>
        </div>
        <div class="xl:mt-10 xs:mt-20 xl:ml-[240px]">
            <h4 class="headings xl:h4 xs:h5 text-white-pure xl:mb-[20px]">
                <a href="/annual-reports">Annual Report</a>
            </h4>
            <div class="relative z-0 xl:w-[480px] xs:w-[300px]">
                <!-- Add msu-drop-shadow on other image other than this gazette -->
                <a href="files/w8lfrsa6/production/88217cea193fbea5a35c58b076bee80a26e8dac9.pdf" target="_blank"><img
                        src="images/w8lfrsa6/production/fa8dbc94beb1c66c83f6c42215e641721468d890-473x643.png"
                        class="absolute xl:w-[412px] xs:w-[392px] z-20" alt="" /></a>
                <img src="images/w8lfrsa6/production/dd71b4d173dd443f64976f4c264d739d0cf5aff3-473x643.png"
                    class="absolute xl:w-[412px] xs:w-[392px] top-[15px] left-[15px] z-10" alt="" />
                <img src="images/w8lfrsa6/production/864cc799b99455ce215fdb26e00e5fd85c90f855-473x643.png"
                    class="absolute xl:w-[412px] xs:w-[392px] top-[30px] left-[30px] z-0" alt="" />
            </div>
            <div class="xl:max-w-[480px] xs:max-w-[350px] text-left">
                <p class="paragraph p2 text-titanium xl:mt-[650px] xs:mt-[470px] xl:h-[80px] xs:h-[80px] overflow-hidden whitespace-normal text-ellipsis"
                    style="
                                    display: -webkit-box;
                                    -webkit-line-clamp: 4;
                                    -webkit-box-orient: vertical;
                                ">
                    MSU-TCTO has faced the COVID-19 pandemic with
                    resiliency and vigor despite the challenges and
                    restrictions. The university took the
                    opportunity to continue its efforts in improving
                    university governance by strengthening good
                    practices, implementing sound fiscal policies,
                    providing smooth transition to distance learning
                    conditions, and establishing more linkages with
                    other institutions.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end fold 05 gazette -->
<!-- fold 06 -->
<div class="video-wrapper">
    <div class="video-container">
        <iframe width="20%" height="20%" src="https://www.youtube.com/embed/Kb-4JL1ZIpM?autoplay=0&mute=0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
        </iframe>
    </div>
</div>
<?php include("includes/footer.php") ?>