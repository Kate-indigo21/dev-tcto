<?php include("../includes/header.php") ?>
<div class="absolute top-[180px] w-full">
    <div class="h-[40px] xl:px-[12.5%] xs:px-[3.85%]">
        <p class="paragraph p2 py-[10px] text-titanium xl:block xs:hidden"><a href="/home">Home</a> / <a
                href="../publications.html">Publications</a> / Gazette </p>
    </div> -->
    <div class="xl:pt-[80px]">
        <h3 class="headings xl:h3 xs:h4 text-white-pure text-center xs:mb-[45px]">Gazette</h3>
        <div class="flex xl:flex-row xs:flex-col xl:ml-[480px] xl:mt-[80px] ">
            <div class="flex "> <img
                    src="../images/w8lfrsa6/production/bd7c00b1b0e627d772d7f9643f40f6341c385f12-544x704.jpg"
                    class="xl:w-[412px] xl:px-[0%] xs:px-[100px] xl:mr-[68px] xs:mb-[45px] " alt=""> </div>
            <div class="flex flex-col mt-[20px] xl:text-start xs:text-start">
                <div class="flex  xl:max-w-[480px] xl:px-[47px] xs:px-[124px] xs:justify-center  ">
                    <h4 class="headings xl:h4 xs:h5 text-write-pure">2023, April</h4>
                </div>
                <div class="flex xl:flex-col xs:flex-col xl:max-w-[480px] xs:px-[47px]">
                    <p class="paragraph p2 text-white-pure mt-[40px] xl:max-h-[400px] xs:max-h-[62px] overflow-hidden">
                        Nurul Iman, the new Islamic center of the University, was formally inaugurated on March
                        10, 2023. It is one of the University projects initiated by the current Chancellor,
                        Prof. Mary Joyce Z. Guinto-Sali, Ph.D. </p>
                </div>
            </div>
        </div> <!-- <div class="flex xs:justify-center xs:my-[32px] xs:mx-[74px] xl:hidden xs:block  ">
                    <a href="#" class="bg-gradient-sky-space text-white-pure  xs:py-5  xs:px-[61.5px] rounded-[40px] paragraph xl:p1 xs:p2 xl:hidden xs:block">Read Now</a>
                </div> --> <!-- <div class="flex gap-[30px] justify-center mt-[40px] ">
                    <a href="#" class=" bg-white xl:py-[10px] xl:px-[10px] xl:hidden xs:block xs:py-[8px] xs:px-[8px] rounded-[40px] border-white border-2"></a>
                    <a href="#" class="border-transparent xl:py-[10px] xl:hidden xs:block xl:px-[10px] xs:py-[8px] xs:px-[8px] rounded-[40px] border-white border-2"></a>
                    <a href="#" class="border-transparent xl:py-[10px] xl:hidden xs:block xl:px-[10px] xs:py-[8px] xs:px-[8px] rounded-[40px] border-white border-2"></a>
                </div> -->
        <div class="flex xs:flex-col xs:items-center xs:mt-[48px]  xl:mt-[0px] ">
            <div class="flex">
                <p class="paragraph xs:p2 text-white-pure   xl:hidden xs:block">PREVIOUS RELEASES</p>
            </div> <!-- <div class="flex">
                        <select class=" flex  xs:flex-col xs:msu-drop-white-shadow  xs:w-[181px]  text-white-pure xs:px-[19px] xs:py-3 rounded-[40px] xl:hidden xs:block">
                            {
                                yearGazette.map((gazette) => {
                                    if (x !== getYear(gazette.publishedAt)) {
                                        x = getYear(gazette.publishedAt);
                                        return <option class="paragraph p2 text-black-pure">{ getYear(gazette.publishedAt) }</option>
                                    }
                                })
                            }
                        </select>
                    </div>  -->
        </div>
    </div> <!-- <div class=" xl:flex-row xs:flex-col bg-msu-ocean mt-[49px] flex xl:pl-[242px] mb-[120px]">
                <div class="flex xl:flex-col xs:flex-col xl:mr-[10px] xs:mr-[0px] ">
                    <p id="gazette" class="paragraph p1 text-white-pure pt-[71px] pb-5 xl:block xs:hidden">Previous Releases</p>
                    {
                        yearGazette.map((gazette) => {
                            if (x !== getYear(gazette.publishedAt)) {
                                x = getYear(gazette.publishedAt);
                                return <p id="2022" class="paragraph p2 text-white-pure pt-5 xl:block xs:hidden">{ getYear(gazette.publishedAt) }</p>
                            }
                        })
                    }
                </div>
                <div id="gazette" class="flex xl:justify-center xl:mt-[140px] xs:mt-[40px]  ">
                    <div class="flex xl:flex-col ">
                        
                        <div id="2022" class="flex xl:flex-row  xs:flex-col xl:gap-[20px]">
                            <div id="4thQuarther" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] xs:mx-[30px] ">
                                <div class="flex flex-col">
                                    <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2022, 4th Quarter</p>
                                    <img src="/images/gazette1.png" class="xl:w-[220px] xs:w-[1000px]" alt="">
                                </div> 
                                <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                                    
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                        <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">Sample title search of a document, article</h6>
                                    </div>  
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                   
                                        <p id="gazetteBody" class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] ">
                                            Lorem ipsum dolor sit amet consectetur. Consequat neque interdum ut tristique habitant sapien.
                                            Facilisis eros mauris imperdiet nibh adipiscing sit sed sed. Vestibulum mattis netus interdum vitae pellentesque.
                                        </p>
                                     </div> 
                                  
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                        <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">Article</p>
                                        <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2021 Feb 01</p>
                                    </div> 
                                </div> 
                         
                            </div>
                            <div id="3rdQuarther" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] xs:mx-[30px] ">
                                <div class="flex flex-col">
                                    <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2022, 3rd Quarter</p>
                                    <img src="/images/gazette1.png" class="xl:w-[220px] xs:w-[1000px]" alt="">
                                </div> 
                                <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                                    
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                        <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">Sample title search of a document, article</h6>
                                    </div>  
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                   
                                        <p id="gazetteBody" class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] ">
                                            Lorem ipsum dolor sit amet consectetur. Consequat neque interdum ut tristique habitant sapien.
                                            Facilisis eros mauris imperdiet nibh adipiscing sit sed sed. Vestibulum mattis netus interdum vitae pellentesque.
                                        </p>
                                     </div> 
                                  
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                        <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">Article</p>
                                        <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2021 Feb 01</p>
                                    </div> 
                                </div> 
                         
                            </div>
                            <div id="2ndQuarther" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] xs:mx-[30px] ">
                                <div class="flex flex-col">
                                    <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2022, 2nd Quarter</p>
                                    <img src="/images/gazette1.png" class="xl:w-[220px] xs:w-[1000px]" alt="">
                                </div> 
                                <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                                    
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                        <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">Sample title search of a document, article</h6>
                                    </div>  
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                   
                                        <p id="gazetteBody" class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] ">
                                            Lorem ipsum dolor sit amet consectetur. Consequat neque interdum ut tristique habitant sapien.
                                            Facilisis eros mauris imperdiet nibh adipiscing sit sed sed. Vestibulum mattis netus interdum vitae pellentesque.
                                        </p>
                                     </div> 
                                  
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                        <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">Article</p>
                                        <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2021 Feb 01</p>
                                    </div> 
                                </div> 
                         
                            </div>
                            <div id="1stQuarther" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] xs:mx-[30px] ">
                                <div class="flex flex-col">
                                    <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2022, 1st Quarter</p>
                                    <img src="/images/gazette1.png" class="xl:w-[220px] xs:w-[1000px]" alt="">
                                </div> 
                                <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                                    
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                        <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">Sample title search of a document, article</h6>
                                    </div>  
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                   
                                        <p id="gazetteBody" class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] ">
                                            Lorem ipsum dolor sit amet consectetur. Consequat neque interdum ut tristique habitant sapien.
                                            Facilisis eros mauris imperdiet nibh adipiscing sit sed sed. Vestibulum mattis netus interdum vitae pellentesque.
                                        </p>
                                     </div> 
                                  
                                    <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                                        <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">Article</p>
                                        <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2021 Feb 01</p>
                                    </div> 
                                </div> 
                         
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex xs:flex-col xs:items-center xs:mt-[48px] xs:gap-[9px] xl:mt-[0px] ">
                    <div class="flex">
                        <p class="paragraph xs:p2 text-white-pure   xl:hidden xs:block">Can’t see what you’re looking for?</p>
                    </div> 
                    <div class="flex">
                        <a href="#" class="bg-gradient-sky-space text-white-pure  xs:py-5  xs:px-[74px] rounded-[40px] paragraph xl:p1 xs:p2 xl:hidden xs:block">Search Article</a>
                    </div> 
                    
                </div>
    
            </div> --> <!-- <GazetteTab client:visible /> -->
    <div class="flex justify-center xl:py-[71px] xs:pt-[48px] my-5">
        <div class="flex xl:flex-col">
            <p class="paragraph p1 text-white-pure  xl:ml-[12px] xl:block xs:hidden mb-10">Previous Releases</p>
            <div class="grid xl:grid-cols-6 xs:grid-cols-1">
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2023
                        </p> <a href="../files/w8lfrsa6/production/950c76c7184cf0f91bf55a6402cc66c1709805d0.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/bd7c00b1b0e627d772d7f9643f40f6341c385f12-544x704.jpg"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                April 2023
                            </h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                Nurul Iman, the new Islamic center of the University, was formally inaugurated
                                on March 10, 2023. It is one of the University projects initiated by the current
                                Chancellor, Prof. Mary Joyce Z. Guinto-Sali, Ph.D. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2023</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2023
                        </p> <a href="../files/w8lfrsa6/production/717a681f2f25151a1dde8f044a80d51dd4c77e94.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/fe3bd1b420ba4c958c082640e3bd15ca62cb058b-542x705.jpg"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                March 2023
                            </h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                The Development Academy of the Philippines and MSU-TCTO signed a Memorandum of
                                Agreement on the establishment of the DAP Field Office in Tawi Tawi on March 7,
                                2023 at the Sabdani Bulante Conference Room. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2023</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2023
                        </p> <a href="../files/w8lfrsa6/production/c47e7c92b3e846e98fbb216e6cad6ea094385fbf.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/46a5ba312bf76705bc08cd9e64d6635bc138682a-546x705.jpg"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                February
                                2023</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                The College of Islamic and Arabic Studies launched Hijab Awareness Campaign with
                                a short activity on February 1 at the Student Center. The activity aims to
                                promote the importance of wearing hijab and raise awareness against Islamic
                                radicalism and extremism. Chancellor Mary Joyce Guinto-Sali and College Dean
                                Almira Hadji graced the activity and assisted the students in the proper way of
                                wearing the Hijab. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2023</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2023
                        </p> <a href="../files/w8lfrsa6/production/116465e8b9335d82c10be66ad41545a73b6b73cd.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/bb7c3e7da1adc36d2dd8f95e480e0a0728e37af1-544x706.jpg"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                January 2023
                            </h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                Chancellor Dr. Mary Joyce Z. Guinto-Sali signed the Memorandum of Understanding
                                between the University and the Marine Battalion Landing Team 12 to conduct
                                “Pagsumadja: Defending Peace and Sustaining Moral Governance through Islamic
                                Teachings,” a fellowship program among local imams and gurus of Tawi-Tawi on
                                January 30 at the Sabdani J. Bulante Hall, Conference Room. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2023</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2022
                        </p> <a href="../files/w8lfrsa6/production/b6664a23b245e3651153182f609d14ec9d2929af.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/54144b2897b89d15a967f9d1bc3651e055b36473-545x704.jpg"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                October -
                                Decemeber 2022</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                TCTO CAS Sibutu Extension Inaugurates New 6-Classroom School Building </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2022</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2022
                        </p> <a href="../files/w8lfrsa6/production/8a7c8da736da5aa8ff22b465b8a025dbd3a66fc4.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/8dbdb7d3903995b0ec286f3958440821d6992832-544x712.jpg"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                July -
                                September 2022</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                University Chancellor Dr. Mary Joyce Z. Guinto-Sali was honored as one of the
                                Regional Winners (BARMM) in the in the Search for Outstanding Government Workers
                                for 2022 by the Civil Service Commission. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2022</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2022
                        </p> <a href="../files/w8lfrsa6/production/1c062dde851603c53ed353530514c490480bd221.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/b82159ecb455b4a2b6aa930ba71e11e5545604f1-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                April - June
                                2022</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                “The IOES has been pivotal in all environmental programs of the University. With
                                the rehabilitation of its home, it is only fitting that we remember and honor
                                the university’s first regular chancellor and the Father of the Institute, Dr.
                                Filemon G. Romero,” </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2022</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2022
                        </p> <a href="../files/w8lfrsa6/production/b59bd44008c570151002ec3236429037c97d76a0.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/8f181ae9b2d4298431dad2ea9553a4f1a893f96b-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                January -
                                March 2022</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                During the virtual program, MSU-TCTO was awarded as </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2022</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2021
                        </p> <a href="../files/w8lfrsa6/production/130665d263680815a653810a714d2837723baf48.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/b97350636d6833a78eabf80773e29b6a90bfc2ba-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                July -
                                December 2021</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                2021, 2nd Semester </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2021</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2021
                        </p> <a href="../files/w8lfrsa6/production/3d2db66e9867ce2cbb3efa7b0fa8366fc0ca51e4.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/67a11ad98933b59e7b7cb942eb2c5bef32ade465-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                January -
                                June 2021</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                Datu Esma Mikee P. Maruhom </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2021</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2020
                        </p> <a href="../files/w8lfrsa6/production/b274e42881483fe7ca70ecd62b27f80e02d1c43c.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/cfe06f8b31ab015a95f61b5dcb8d6e1c4c47b3a2-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                July -
                                December 2020</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                Dr. Richard N. Muallil, director of </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2020</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2020
                        </p> <a href="../files/w8lfrsa6/production/f29fc3ae89a28a3a23cc7cb01f643da9782a2421.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/833b70a45b66570179d11a747bc8c8d37eb66105-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                January -
                                March 2020</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                2020, 1st Semester </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2020</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2019
                        </p> <a href="../files/w8lfrsa6/production/bf58ee789534bd60f9020142b317f8318a27c97a.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/7b829c0bdfbec91061da000a65243e24d9b4993e-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                October -
                                December, 2019</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                Theuniversityrecognizestheimportanceof
                                theroleplayedbyteachers-theirdedicationand
                                commitment in educating the future generations. On
                                October 1, 2019, the college joined in the celebration
                                of the World Teachers’ Day to honor the selfless and
                                dedicated teachers of the university. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2019</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2019
                        </p> <a href="../files/w8lfrsa6/production/49e20d12f093844401f2c122ee5c8968c736135f.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/7129ac8838d852481ffa83320e3ea40d23ca8f62-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                July -
                                September 2019</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                The newly purchased equipment, which arrived on July 8, is the official project
                                of the Class of 2019 for MSU-TCTO. It is funded by the recent commencement
                                ceremony’s Guest of Honor and Speaker, Provincial Governor Yshmael Sali. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2019</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2019
                        </p> <a href="../files/w8lfrsa6/production/9ffdd332bbbc72305463db9d2e004cb1ac4e3ad6.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/e8ae5519d032608db99ecb6230494f5dd04a2075-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                April - June
                                2019</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                2019, 2nd Quarter </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2019</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2019
                        </p> <a href="../files/w8lfrsa6/production/9fd18204e281305ab529f3df95799c1435e350d0.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/177c89c9ff996f15dce114b9cbccf687b6f0e6fd-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                January -
                                March 2019</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                2019, 1st Quarter </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2019</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2018
                        </p> <a href="../files/w8lfrsa6/production/f59ba233b6888bad068f53f2b54eb2cd4b0f7250.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/ff3d2e7b1e287581c03265e9602afe40cc29ed8f-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                October -
                                December 2018</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                A delegation of MSU-TCTO administrators, faculty, and staff, headed by
                                Chancellor Mary Joyce Guinto-Sali, attended the International Conference on
                                Environment and Forest Conservation (ICEFC 2018) at Dakak Beach Resort, Dapitan,
                                in Zamboanga del Norte from November 18-21, 2018. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2018</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2018
                        </p> <a href="../files/w8lfrsa6/production/9f38712120a30ef792ee4d588d8235f7916ab91a.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/9a2c8fbdf9f4e0f32cd276a8b3f15e68a3d63c9d-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                July -
                                September 2018</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                Chancellor Guinto-Sali delivers her first State of the University Address. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2018</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2018
                        </p> <a href="../files/w8lfrsa6/production/551c1a2f4dc61a2605c40b97399539a3efceba21.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/d81b0a8b2c673154702952289f484b27d2454faa-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                April - June
                                2018</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                Celebrating MSU-TCTO’s 46th Commencement Exercises and the Gawad Chancellor’s
                                Awardees. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2018</p>
                        </div>
                    </div>
                </div>
                <div id="2022" class="flex xl:flex-col xl:gap-[2px] xs:gap-[30px] mx-5">
                    <div class="flex flex-col">
                        <p id="gazetteDate" class="paragraph p2 text-white-pure xl:ml-[12px] xl:block xs:hidden">2018
                        </p> <a href="../files/w8lfrsa6/production/773225dc6a8fd7c1178a6ee17322b0d6e1a2c5f3.pdf"
                            target="_blank"><img
                                src="../images/w8lfrsa6/production/39b92d5d4e0199cd79737b6586ae573dda9d1ed1-473x643.png"
                                class="xl:max-w-[203px] xl:max-h-[286px] xs:max-w-[110px] xs:max-h-[155px]" alt=""></a>
                    </div>
                    <div class="flex xl:flex-col xs:flex-col xl:py-[0px] xs:py-[10px] xs:gap-[10px]  xl:gap-[0px] ">
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <h6 id="gazetteTitle" class="headings h6 text-white-pure xl:ml-[12px] xl:hidden xs:block">
                                January -
                                March 2018</h6>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteBody"
                                class="paragraph p2 text-silver xl:ml-[12px] xl:w-[205px] xl:max-h-[160px] xs:max-h-[80px] overflow-hidden ">
                                The &#39;Joyce&#39; of TCTO: A year and beyond. </p>
                        </div>
                        <div class="flex xl:flex-col xs:flex-row xs:gap-[37px]">
                            <p id="gazetteDate" class="paragraph p2 text-silver  xl:hidden xs:block">2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- fold Main video -->
    <div class="video-wrapper">
        <div class="video-container"> <iframe width="20%" height="20%"
                src="https://www.youtube.com/embed/Kb-4JL1ZIpM?autoplay=0&mute=0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
            </iframe> </div>
    </div> <!-- end Main video -->
    <?php include("../includes/footer.php") ?>