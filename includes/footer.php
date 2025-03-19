       <!-- FooterNaV -->
            <div class="bg-msu-deep-ocean text-white-pure">
                <div class="mb-[60px] xl:mt-[80px] xs:mt-[40px]">
					<div class="flex xl:flex-row xs:flex-col justify-center xl:px-[240px] xs:px-[15px] xl:mb-[140px] xs:mb-[58px] xl:gap-[40px] xs:gap-[10px]">
						<!-- NEWS SHAREPOINT LIST -->
						<div class="content-container" id="news-container" data-sharepoint-list="News" data-list-count="1" data-limit="3" data-sort="Created:desc">  
							<script type="text/template" class="content-template"> 
								<!-- Place your HTML code here -->  
								<div class="news-content">
									<div class="image-container news-image">
										<img src="{{ ImageURL.Url }}"/>
									</div>
									<div class="news-content-text">
										<h1 class="show-popup" id="ID:{{ ID }}" data-popup-target="news-popup">{{ Title }}</h1>
										<p>{{ Description }}</p>
									</div>
								</div>
							</script>  
						</div> 
					</div>
					<style>
						#news-container {
							display: grid;
							grid-template-columns: repeat(3, 1fr); 
							gap: 16px;
						}
						.news-content {
							display: grid;
							grid-template-columns: repeat(2, 1fr); 
							gap: 10px;
						}
						.news-image img {
							width: 200px;
							height: 200px;
							object-fit: cover;
						}
						.news-content-text h1 {
							font-size: 26px;
							line-height: normal;
							display: -webkit-box;
							-webkit-line-clamp: 3;   /* Limit to 3 lines */
							-webkit-box-orient: vertical;
							overflow: hidden;
							text-overflow: ellipsis;
							width: 100%;
						}
						.news-content-text p {
							font-size: 16px;
							color: #999999;
							line-height: normal;
							display: -webkit-box;
							-webkit-line-clamp: 5;   /* Limit to 3 lines */
							-webkit-box-orient: vertical;
							overflow: hidden;
							text-overflow: ellipsis;
							width: 100%;
						}
						@media (max-width: 992px) {
							#news-container {
								grid-template-columns: repeat(1, 1fr); 
							}
							.news-content {
								grid-template-columns: repeat(2, 1fr); 
							}
							.news-image img {
								margin: auto;
							}
						}
					</style>
                    <!-- <div
                        class="flex xl:flex-row xs:flex-col justify-center xl:px-[240px] xs:px-[15px] xl:mb-[140px] xs:mb-[58px] xl:gap-[40px] xs:gap-[10px]"
                    >
						
                        <div class="flex mb-[40px]">
                            <img
                                src="images/w8lfrsa6/production/96dff6e1d1dba20c40b8e2062beebd834bdd844f-526x526.png"
                                alt=""
                                class="xl:h-[200px] xl:w-[200px] xs:h-[180px] xs:w-[180px] object-cover object-center"
                            />
                            <div class="ml-5">
                                <a
                                    href="congratulations-to-honorable-amenah-flaminiano-pangandaman-secretary-of-the-department-of-budget.html"
                                    ><h5
                                        class="xl:h5 xs:h6 max-w-[155px] xl:max-h-[48px] xs:max-h-[29px] overflow-hidden whitespace-normal text-ellipsis"
                                        style="
                                            display: -webkit-box;
                                            -webkit-line-clamp: 2;
                                            -webkit-box-orient: vertical;
                                        "
                                    >
                                        Congratulations to Honorable Amenah
                                        Flaminiano Pangandaman, Secretary of the
                                        Department of Budget and Management and
                                        Member of the MSU Board of Regents
                                    </h5></a
                                >
                                <p
                                    class="paragraph xl:p2 xs:p3 max-w-[155px] text-titanium mt-[15px] max-h-[142px] overflow-hidden whitespace-normal text-ellipsis"
                                    style="
                                        display: -webkit-box;
                                        -webkit-line-clamp: 7;
                                        -webkit-box-orient: vertical;
                                    "
                                >
                                    Congratulations to Honorable Amenah
                                    Flaminiano Pangandaman, Secretary of the
                                    Department of Budget and Management and
                                    Member of the MSU Board of Regents, on her
                                    conferment of the degree of Doctor of
                                    Philosophy in Economics (Honoris Causa) by
                                    the Mindanao State University.
                                </p>
                            </div>
                        </div>
                        <div class="flex mb-[40px]">
                            <img
                                src="images/w8lfrsa6/production/8091a10984964742a4b2d696ed97596bd35e9197-1920x1080.jpg"
                                alt=""
                                class="xl:h-[200px] xl:w-[200px] xs:h-[180px] xs:w-[180px] object-cover object-center"
                            />
                            <div class="ml-5">
                                <a
                                    href="mindanao-state-university-tawi-tawi-college-of-technology-and-oceanography-msu-tcto-and.html"
                                    ><h5
                                        class="xl:h5 xs:h6 max-w-[155px] xl:max-h-[48px] xs:max-h-[29px] overflow-hidden whitespace-normal text-ellipsis"
                                        style="
                                            display: -webkit-box;
                                            -webkit-line-clamp: 2;
                                            -webkit-box-orient: vertical;
                                        "
                                    >
                                        Mindanao State University – Tawi-Tawi
                                        College of Technology and Oceanography
                                        (MSU-TCTO) and Universitas Muhammadiyah
                                        Yogyakarta (UMY), Indonesia, have signed
                                        two Memoranda of Agreement (MOAs) to
                                        establish faculty and student exchange
                                        programs
                                    </h5></a
                                >
                                <p
                                    class="paragraph xl:p2 xs:p3 max-w-[155px] text-titanium mt-[15px] max-h-[142px] overflow-hidden whitespace-normal text-ellipsis"
                                    style="
                                        display: -webkit-box;
                                        -webkit-line-clamp: 7;
                                        -webkit-box-orient: vertical;
                                    "
                                >
                                    Almadulillah!
                                </p>
                            </div>
                        </div>
                        <div class="flex mb-[40px]">
                            <img
                                src="images/w8lfrsa6/production/dc318f78e299b1a90325bab15c3c4a524baf5b2a-526x526.png"
                                alt=""
                                class="xl:h-[200px] xl:w-[200px] xs:h-[180px] xs:w-[180px] object-cover object-center"
                            />
                            <div class="ml-5">
                                <a
                                    href="we-would-like-to-congratulate-mr-jerimy-i-edubos-a-dedicated-staff-at-the-office-of-the-dean-of.html"
                                    ><h5
                                        class="xl:h5 xs:h6 max-w-[155px] xl:max-h-[48px] xs:max-h-[29px] overflow-hidden whitespace-normal text-ellipsis"
                                        style="
                                            display: -webkit-box;
                                            -webkit-line-clamp: 2;
                                            -webkit-box-orient: vertical;
                                        "
                                    >
                                        We would like to congratulate Mr. Jerimy
                                        I. Edubos, a dedicated staff at the
                                        Office of the Dean of the College of
                                        Arts and Sciences
                                    </h5></a
                                >
                                <p
                                    class="paragraph xl:p2 xs:p3 max-w-[155px] text-titanium mt-[15px] max-h-[142px] overflow-hidden whitespace-normal text-ellipsis"
                                    style="
                                        display: -webkit-box;
                                        -webkit-line-clamp: 7;
                                        -webkit-box-orient: vertical;
                                    "
                                >
                                    We would like to congratulate Mr. Jerimy I.
                                    Edubos, a dedicated staff at the Office of
                                    the Dean of the College of Arts and
                                    Sciences, on his designation as the new
                                    Station Manager of 94.1 DXNH FM Nutriskwela
                                    Radyo Kasannangan, as stated in Special
                                    Order No. 181-OC, series of 2025.
                                </p>
                            </div>
                        </div>
                    </div> -->
                    <img
                        src="<?php echo $base_url; ?>images/rectangle.png"
                        alt=""
                        class="max-w-full h-[20px] absolute xs:hidden 3xl:block"
                    />
                    <div
                        class="flex xl:flex-row gap-[25px] xs:flex-col justify-center xl:items-stretch xs:items-center xl:mx-[12.5%] xs:mx-[3.85%]"
                    >
                        <div
                            class="flex xl:mt-0 xs:mt-10 xl:ml-[70px] xs:ml-0 xl:gap-[25px]"
                        >
                            <ul class="xl:min-w-[170px]">
                                <li>
                                    <h5 class="headings h5 w-200 mb-2">
                                        University
                                    </h5>
                                </li>
                                <li>
                                    <a
                                        href="/campus"
                                        class="paragraph p2 text-titanium mb-1"
                                        >History
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/campus#mv"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Mission / Vision
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/campus#hymn"
                                        class="paragraph p2 text-titanium mb-1"
                                        >University Hymn
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/articles"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Articles
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/gazette"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Gazette
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="academic-calendar.html"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Events
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/annual-reports"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Annual Report
                                    </a>
                                </li>
                            </ul>
                            <ul
                                class="xl:ml-[70px] xs:ml-[52px] xl:min-w-[170px]"
                            >
                                <li>
                                    <h5 class="headings h5 w-200 mb-2">
                                        Admissions
                                    </h5>
                                </li>
                                <!-- <li><a href="#" class="paragraph p2 text-titanium mb-1">MSU SASE </a></li>	 -->
                                <li>
                                    <a
                                        href="/admissions#freshmen"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Freshmen
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/admissions#transferee"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Transferee
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/admissions#shifting"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Returning / Shifting
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/admissions#remedial"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Remedial Program
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/admissions#fees"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Student Fees
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/admissions#scholarship"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Scholarships & Grants
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="flex xl:mt-0 xs:mt-10 xl:ml-[70px] xs:ml-0 xl:gap-[25px]"
                        >
                            <ul class="xl:min-w-[170px]">
                                <li>
                                    <h5 class="headings h5 w-200 mb-2">
                                        Programs
                                    </h5>
                                </li>
                                <li>
                                    <a
                                        href="/cas"
                                        class="paragraph p2 text-titanium mb-1"
                                        >CAS
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/cias"
                                        class="paragraph p2 text-titanium mb-1"
                                        >CIAS
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/cof"
                                        class="paragraph p2 text-titanium mb-1"
                                        >COF
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/coed"
                                        class="paragraph p2 text-titanium mb-1"
                                        >COED
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/iict"
                                        class="paragraph p2 text-titanium mb-1"
                                        >IICT
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/ioes"
                                        class="paragraph p2 text-titanium mb-1"
                                        >IOES
                                    </a>
                                </li>
                            </ul>
                            <ul
                                class="xl:ml-[70px] xs:ml-[52px] xl:min-w-[170px]"
                            >
                                <li>
                                    <h5 class="headings h5 w-200 mb-2">
                                        Offices
                                    </h5>
                                </li>
                                <li>
                                    <a
                                        href="/offices#administrative"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Administrative</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="/offices#academic"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Academic</a
                                    >
                                </li>
                                <!-- <li><a href="/offices#facultyStaff" class="paragraph p2 text-titanium mb-1">Faculty and Staff </a></li> -->
                                <li>
                                    <a
                                        href="/cas"
                                        class="paragraph p2 text-titanium mb-1"
                                        >CAS
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/cias"
                                        class="paragraph p2 text-titanium mb-1"
                                        >CIAS
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/cof"
                                        class="paragraph p2 text-titanium mb-1"
                                        >COF
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/coed"
                                        class="paragraph p2 text-titanium mb-1"
                                        >COED
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/iict"
                                        class="paragraph p2 text-titanium mb-1"
                                        >IICT
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="/ioes"
                                        class="paragraph p2 text-titanium mb-1"
                                        >IOES
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="xl:mt-0 xs:mt-10 xl:ml-[70px] xs:ml-0 xl:gap-[25px] xl:min-w-[170px]"
                        >
                            <h5
                                class="headings h5 w-200 mb-2 xl:text-left xs:text-center"
                            >
                                Legal
                            </h5>
                            <div
                                class="flex xl:flex-col xs:flex-row xl:items-start xs:items-center xl:gap-0 xs:gap-[137px]"
                            >
                                <div class="flex flex-col min-w-[70px]">
                                    <!-- <a href="#" class="paragraph p2 text-titanium mb-1">Terms </a>
						<a href="#" class="paragraph p2 text-titanium mb-1">Privacy </a> -->
                                    <a
                                        href="ra-6060.html"
                                        class="paragraph p2 text-titanium mb-1"
                                        >RA 6060
                                    </a>
                                </div>
                                <div class="flex flex-col min-w-[70px]">
                                    <a
                                        href="kra2.html"
                                        class="paragraph p2 text-titanium mb-1"
                                        >KRA2
                                    </a>
                                    <a
                                        href="https://drive.google.com/file/d/1-5n1f8z0ax3PJh9Lip8AI6FrHGgG4u-X/view"
                                        class="paragraph p2 text-titanium mb-1"
                                        >Citizen's Charter
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end FooterNaV -->
            <!-- Footer -->
            <div
                class="bg-msu-deep-ocean text-white-pure justify-center xl:px-[12.5%] xs:px-[3.85%] xl:pt-20 xs:pt-10"
            >
                <div
                    class="flex flex-col justify-center items-center text-center"
                >
                    <img
                        src="<?php echo $base_url; ?>images/MSU%20Seal%20New%20%28Official%29.png"
                        alt=""
                        class="xl:h-[170px] xs:h-[127px] mb-10"
                    />
                    <div>
                        <h4 class="headings xl:h4 xs:h5">
                            Mindanao State University
                        </h4>
                        <p class="paragraph xl:p1 xs:p2">
                            Tawi-Tawi College of Technology and Oceanography
                        </p>
                    </div>
                </div>
                <div
                    id="govlogo"
                    class="flex xl:gap-5 xs:gap-3 xl:mt-20 xs:mt-9 xl:mb-[70px] xs:mb-[80px] justify-center"
                >
                    <img
                        src="<?php echo $base_url; ?>images/Republika%20ng%20pilipinas.png"
                        alt=""
                        class="xl:h-[100px] xs:h-[75px]"
                    />
                    <a href="transparency-seal.html"
                        ><img
                            src="<?php echo $base_url; ?>images/transparency_seal.png"
                            alt=""
                            class="xl:h-[100px] xs:h-[75px]"
                    /></a>
                    <a href="https://www.foi.gov.ph/" target="_blank"
                        ><img
                            src="<?php echo $base_url; ?>images/FOI-logo.png"
                            alt=""
                            class="xl:h-[100px] xs:h-[75px]"
                    /></a>
                    <a
                        href="https://pia.gov.ph/news/2023/07/16/pbbm-promotes-bagong-pilipinas-brand-of-governance-leadership-campaign"
                        target="_blank"
                        ><img
                            src="<?php echo $base_url; ?>images/Bagong-Pilipinas.png"
                            alt=""
                            class="xl:h-[100px] xs:h-[75px]"
                    /></a>
                </div>
                <div
                    class="flex xl:flex-row xs:flex-col justify-center xl:text-left xs:text-center xl:items-start xs:items-center"
                >
                    <div
                        class="flex flex-col max-w-[300px] xl:mr-[174px] xs:mr-0 xl:gap-[30px] xs:gap-[30px] xs:mb-[50px]"
                    >
                        <div class="xs:mb-10">
                            <div class="headings h5 mb-[10px]">
                                University Address
                            </div>
                            <div class="paragraph p2 text-titanium">
                                Boheh Sallang, Sanga-Sanga Bongao, Tawi-Tawi
                                7500
                            </div>
                        </div>
                        <div class="" id="mainoffice_contact">
                            <div class="headings h5 mb-[10px]">
                                Manila Office
                            </div>
                            <div class="paragraph p2 text-titanium">
                                MSU Manila Information and Liaison Office Rm
                                203, Leticia Bldg. 1804 Taft Avenue Corner J.
                                Nakpil St. Malate, Manila
                            </div>
                        </div>
                    </div>
                    <div class="flex xl:gap-[54px] xs:gap-[20px]">
                        <div class="flex flex-col xl:mr-10 xs:mr-0">
                            <div class="mb-[50px]" id="chancellor_contact">
                                <div
                                    class="headings xl:h5 xs:h6 xl:mb-[10px] xs:mb-[5px]"
                                >
                                    Chancellor
                                </div>
                                <div
                                    class="paragraph xl:p2 xs:p3 text-titanium"
                                >
                                    +63 917 310 7843 <br /><br />
                                    chancellor@msutawi-tawi.edu.ph
                                </div>
                            </div>
                            <div id="admission_contact">
                                <div
                                    class="headings xl:h5 xs:h6 xl:mb-[10px] xs:mb-[5px]"
                                >
                                    Admissions
                                </div>
                                <div
                                    class="paragraph xl:p2 xs:p3 text-titanium"
                                >
                                    +63 909 982 6063<br /><br />
                                    msutctoao@msutawi-tawi.edu.ph
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col xs:mr-0">
                            <div class="mb-[50px]" id="registrar_contact">
                                <div
                                    class="headings xl:h5 xs:h6 xl:mb-[10px] xs:mb-[5px]"
                                >
                                    Registrar
                                </div>
                                <div
                                    class="paragraph xl:p2 xs:p3 text-titanium"
                                >
                                    +63 951 064 5611 <br /><br />
                                    registraroffice@msutawi-tawi.edu.ph
                                </div>
                            </div>
                            <div id="guidance_contact">
                                <div
                                    class="headings xl:h5 xs:h6 xl:mb-[10px] xs:mb-[5px]"
                                >
                                    Guidance
                                </div>
                                <div
                                    class="paragraph xl:p2 xs:p3 text-titanium"
                                >
                                    +63 905 792 5924 <br /><br />
                                    guidanceoffice@msutawi-tawi.edu.ph
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-col xl:max-w-[360px] xs:max-w-[240px] xl:mt-0 xs:mt-10 xl:ml-14 xs:ml-0"
                    >
                        <div class="paragraph xl:p1 xs:p2 text-titanium mb-5">
                            For other inquiries regarding biddings for projects
                            and other business transactions please visit the
                            link below
                        </div>
                        <a
                            href="bidding.html"
                            class="bg-msu-maroon text-white-pure xl:py-[14.5px] xs:py-5 xl:px-[85.5px] xs:px-[61.5px] rounded-[40px] paragraph xl:p1 xs:p2"
                            >Project Biddings</a
                        >
                    </div>
                </div>
                <div class="flex gap-[33.33px] mt-8 justify-center">
                    <!-- <a href="#"><img src="/images/social media/linkin.png" alt=""></img></a>
			<a href="#"><img src="/images/social media/instagram.png" alt=""></img></a> -->
                    <a href="https://web.facebook.com/msutcto"
                        ><img src="<?php echo $base_url; ?>images/social%20media/facebook.png" alt=""
                    /></a>
                    <!-- <a href="#"><img src="/images/social media/tweeter.png" alt=""></img></a> -->
                    <a href="https://www.youtube.com/@oippmsu-tcto7771"
                        ><img src="<?php echo $base_url; ?>images/social%20media/youtube.png" alt=""
                    /></a>
                </div>
                <div
                    class="flex flex-col justify-center items-center xl:mt-[55px] xs:mt-[45px] pb-10"
                >
                    <div class="flex xl:flex-row xs:flex-col">
                        <p class="paragraph p2 text-center text-white">
                            <a href="https://www.facebook.com/msutcto"
                                >© 2023 Mindanao State University Tawi-Tawi
                                College of Technology and Oceanography All
                                rights reserved.</a
                            >
                        </p>
                    </div>
                    <div>
                        <!-- <p class="paragraph p2 text-center text-charcoal mt-3">All rights reserved.</p> -->
                    </div>
                </div>
            </div>
            <!-- end Footer -->
        </main>
		<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script src="<?php echo $base_url; ?>sharepoint-integration/sharepoint-script.js"></script>
    </body>
</html>
