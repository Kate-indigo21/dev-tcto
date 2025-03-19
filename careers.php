<?php include("includes/header.php") ?>
<div class="bg-msu-ocean text-center xl:px-[12.5%] xl:pt-[80px] xs:pt-[0px] xs:px-[3.85%] xl:pb-[68px] xs:pb-[48px]">
    <div class="flex gap-[239px] ">
        <div class="flex w-full mt-10 mb-20">
            <div class="flex flex-col gap-[60px] "> <!-- <div class="flex flex-col ">   
                                    
                                    <div class="flex relative xl:mt-0 xs:mt-[15px] xl:w-fit xs:w-full xl:mb-[30px] xs:mb-[20px]">
                                        <input type="search" name="" value="Search for open positions" id=""
                                             class="bg-transparent border xs:rounded-[20px] xl:rounded-[40px] xs:w-full xl:w-[960px]  xl:py-[25px] xs:py-[12px] pl-12 pr-4  text-white-pure" />
                                        <img src="/images/search.png" alt="" class="absolute xl:top-[25px] xs:top-[12px] left-3 xl:hidden xs:block" />
                                    </div>

                            </div> -->
                <div class="flex flex-col xl:gap-[40px] xs:gap-[40px]">
                    <div class="flex flex-col gap-[10px]"> <!-- <h4 class="headings text-white-pure h4 mb-[10px] text-center">
                                            Open positions
                                        </h4>  --> <!-- <div class="flex xl:gap-[30px] xs:gap-[20px] mb-[10px]">  
                                        <p class="paragraph text-msu-crimson-ground p2 text-left ">
                                            All
                                        </p> 
                                        <p class="paragraph text-titanium p2 text-left ">
                                            Administrative
                                        </p> 
                                        <p class="paragraph text-titanium p2 text-left">
                                            Academic
                                        </p> 
    
                                    </div> -->
                        <div class="flex">
                            <p class="paragraph text-titanium p2 text-left"> <!-- 26 positions -->
                                <!-- 0 results -->
                            </p>
                        </div>
                    </div>
                    <div class="table-container">
                        <h4 class="headings text-black h4 mb-[10px] text-center bg-white">
                            Open positions
                        </h4>
                        <div class="positions-header">
                            <div>No.</div>
                            <div>Positions</div>
                            <div>Salary Grade</div>
                            <div>Monthly Salary</div>
                            <div>Degree</div>
                            <div>Managements</div>
                            <div>Experience</div>
                            <div>Eligibility</div>
                        </div>
                        <div class="content-container" id="positions" data-sharepoint-list="OpenPositions">
                            <script type="text/template" class="content-template">
                                    <div class="positions-body">
                                        <p>{{ ID }}</p>
                                        <p>{{ Title }}</p>
                                        <p>{{ SalaryGrade }}</p>
                                        <p>{{ MonthlySalary }}</p>
                                        <p>{{ Degree }}</p>
                                        <p>{{ Managements }}</p>
                                        <p>{{ Experience }}</p>
                                        <p>{{ Eligibility }}</p>
                                    </div>    
                                </script>
                        </div>
                        <style>
                            #positions {
                                margin-top: 0px;
                            }
                            .positions-header {
                                display: grid;
                                grid-template-columns: repeat(8, 1fr);
                                gap: 15px;
                                background: #75140c;
                                color: #fff;
                                font-weight: bold;
                                font-size: 18px;
                                padding: 15px;
                                text-align: left;
                            }
                            .positions-body {
                                display: grid;
                                grid-template-columns: repeat(8, 1fr);
                                gap: 15px;
                                background: #fff;
                                padding: 15px;
                                text-align: left;
                                border-bottom: 1px solid #ebebeb;
                            }
                        </style>
                    </div>
                    <div class="mt-10 text-left">
                        <p class="paragraph p2 text-white-pure mb-5">Interested and qualified applicants should
                            signify their interest in writing. Attach the following documents to the application
                            letter and send to the address below not later than May 14, 2024.</p>
                        <ul class="ml-5 mb-5">
                            <li>
                                <p class="paragraph p2 text-white-pure">1. Fully accomplished Personal Data
                                    Sheet (PDS) with recent passport-sized picture (CS Form No. 212, Revised
                                    2017) which can be downloaded at <a
                                        href="https://csc.gov.ph/downloads/category/223-csc-form-212-revised-2017-personal-data-sheet"
                                        target="_blank" class="text-msu-crimson-ground">www.csc.gov.ph</a>;</p>
                            </li>
                            <li>
                                <p class="paragraph p2 text-white-pure ">2. Performance rating in the last
                                    rating period (if applicable);</p>
                            </li>
                            <li>
                                <p class="paragraph p2 text-white-pure">3. Certified photocopy of certificate of
                                    eligibility/rating/license; and</p>
                            </li>
                            <li>
                                <p class="paragraph p2 text-white-pure">4. Certified photocopy of Transcript of
                                    Records/ other credentials.</p>
                            </li>
                        </ul>
                        <p class="paragraph p2 text-white-pure mb-10">QUALIFIED APPLICANTS are advised to hand
                            in or send through courier/email their application to:</p>
                        <div class="text-center w-[400px] ml-10 mb-10 ">
                            <p class="paragraph p2 text-white-pure underline"><strong>Chancellor MARY JOYCE Z.
                                    GUINTO-SALI, Ph.D.</strong></p>
                            <p class="paragraph p2 text-white-pure underline">Thru: Dir. IBRAHIM S. MIGUEL</p>
                            <p class="paragraph p2 text-white-pure underline">HRDO, MSU-TCTO, Sanga-Sanga,
                                Bongao, Tawi-Tawi</p>
                            <p class="paragraph p2 text-white-pure underline"><a
                                    href="mailto:hrdo@msutawi-tawi.edu.ph?subject=Application%20Letter"
                                    class="text-msu-crimson-ground">hrdo@msutawi-tawi.edu.ph</a></p>
                        </div>
                        <p class="paragraph p2 text-white-pure mb-5">APPLICATIONS WITH INCOMPLETE DOCUMENTS
                            SHALL NOT BE ENTERTAINED.</p>
                    </div>
                </div> <!-- <div class="flex">
                                <p class="paragraph text-titanium p2 mr-[30px] text-left">
                                    Page
                                </p> 
                                <p class="paragraph text-msu-crimson-ground p2 mr-[20px] text-left">
                                    0
                                </p> 
                                <p class="paragraph text-msu-crimson-ground p2 mr-[20px] text-left">
                                    1
                                </p> 
                                <p class="paragraph text-titanium p2 mr-[20px] text-left">
                                    2
                                </p> 
                                <p class="paragraph text-titanium p2 mr-[20px] text-left">
                                    3
                                </p> 
                                <p class="paragraph text-titanium p2 mr-[20px] text-left">
                                    4
                                </p> 
                                <p class="paragraph text-titanium p2 mr-[20px] text-left">
                                    5
                                </p> 
                                <p class="paragraph text-titanium p2 mr-[20px] text-left">
                                    6
                                </p> 
                                <p class="paragraph text-titanium p2 mr-[20px] text-left">
                                    7
                                </p> 
                                <p class="paragraph text-titanium p2 mr-[20px] text-left">
                                    8
                                </p>
                            </div> -->
            </div>
        </div> <!-- <div class="flex flex-col xl:block xs:hidden xl:pt-[260px]">
                    
                    <p class="paragraph text-white-pure p1  mb-[30px] text-left">
                        Classification
                    </p>
                    <p class="paragraph text-white-pure p2 mb-[20px] text-left">
                        Academic
                    </p>
                    <p class="paragraph text-white-pure p2 text-left">
                        Administrative
                    </p>

                    
                    <p class="paragraph text-white-pure p1 mt-[80px] mb-[30px] text-left">
                        Position
                    </p>
                    <p class="paragraph text-white-pure p2 mb-[20px] text-left">
                        Full time
                    </p>
                    <p class="paragraph text-white-pure p2 text-left">
                        Part time
                    </p>

                    
                    <p class="paragraph text-white-pure p1 mt-[80px] mb-[30px] text-left">
                        Office
                    </p>
                    <p class="paragraph text-white-pure p2 mb-[20px] text-left">
                        Chancellorship
                    </p>
                    <p class="paragraph text-white-pure p2 mb-[20px] text-left">
                        Vice-Chancellorship
                    </p>
                    <p class="paragraph text-white-pure p2 text-left">
                        College
                    </p>

                    
                    <p class="paragraph text-white-pure p1 mt-[80px] mb-[30px] text-left">
                        College
                    </p>
                    <p class="paragraph text-white-pure p2 mb-[20px] text-left">
                        CAS
                    </p>
                    <p class="paragraph text-white-pure p2 mb-[20px] text-left">
                        CIAS
                    </p>
                    <p class="paragraph text-white-pure p2 mb-[20px] text-left">
                        COED
                    </p>
                    <p class="paragraph text-white-pure p2 mb-[20px] text-left">
                        COF
                    </p>
                    <p class="paragraph text-white-pure p2 mb-[20px] text-left">
                        IICT
                    </p>
                    <p class="paragraph text-white-pure p2 text-left">
                        IOES
                    </p>
                </div> -->
    </div>
</div> <!-- end fold 02 -->
<?php include("includes/footer.php") ?>