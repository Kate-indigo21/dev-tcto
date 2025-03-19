<?php include("../includes/header.php") ?>
<div id="facultyStaff" class=" bg-msu-dark-ocean xl:pt-[80px] xs:pt-[80px]  xs:pb-[57px]">
    <div class="text-center xl:px-[12.5%] xl:mb-[40px] xs:mb-[75px] xs:px-[3.85%]  xl:bg-none">
        <h4 class="headings xl:h4 xs:h4 text-white-pure xl:mb-[80px] xs:mb-[80px]">Faculty & Staff</h4>
        <script>(() => { var e = async t => { await (await t())() }; (self.Astro || (self.Astro = {})).only = e; window.dispatchEvent(new Event("astro:only")); })();</script>
        <astro-island uid="ZuI3Kz" component-url="/_astro/FacultyAndStaff.Dg6xAVBi.js" component-export="default"
            renderer-url="/_astro/client.C6KyQvCx.js" props="{}" ssr="" client="only"
            opts="{&quot;name&quot;:&quot;FacultyAndStaff&quot;,&quot;value&quot;:true}"></astro-island>
        <div class="content-container" id="facultystaff" data-sharepoint-list="FacultyData" data-filter-values="true">
            <script type="text/template" class="content-template">
            <div class="grid-item show-popup" data-popup-target="faculty-popup" id="ID:{{ ID }}">
                <div class="faculty-content">
                    <div class="image-container">
                        <img src="{{Pictures}}" />
                    </div>
                    <div class="faculty-content-text">
                        <h2>{{LastName}}, {{FirstName}}</h2>
                        <p>{{ College.Title }}</p>
                        <p>{{Position}}</p>
                    </div>
                </div>
            </div>
      </script>
        </div>
        <div id="faculty-popup" class="popup">
            <div class="popup-content">
                <span class="close-btn" onclick="closePopup('faculty-popup')">&times;</span>
                <script type="text/template" class="popup-template">
            <div class="popup-image">
                <img src="{{ Pictures.Url }}">
            </div>
            <div class="popup-text">
                <h1>{{LastName}}, {{FirstName}}</h1>
                <h5>{{ Position }}</h5>
                <div style="margin-top:20px;">
                    <p><b>Academic Rank and Department</b></p>
                    <p>{{ College.Title }}</p>
                </div>
            </div>
        </script>
                <div class="popup-main-content"></div>
            </div>
        </div>

        <style>
            #facultystaff {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 16px;
            }

            #facultystaff .grid-item {
                background-color: #f9f9f9;
                border-radius: 20px;
            }

            #facultystaff .grid-item:hover {
                cursor: pointer;
            }

            #facultystaff .grid-item:hover h2 {
                color: #0c1c59;
            }
            .faculty-content {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
                padding: 25px;
            }
            .faculty-content .image-container {
                border-radius: 100%;
                border: 5px solid #0c1c59;
                width: 150px;
                height: 150px;
                object-fit: cover;
            }
            .faculty-content .image-container img {
                object-fit: cover;
                border-radius: 100%;
            }

            .faculty-content-text h2 {
                font-size: 16px;
                color: #0a1c37;
                font-weight: bold;
            }

            /*MOBILE RESPONSIVE */
            @media (max-width: 767px) {
                #facultystaff {
                    display: grid;
                    grid-template-columns: repeat(1, 1fr);
                    gap: 16px;
                }

                #facultystaff .image-container {
                    height: unset;
                    margin: auto;
                }

                #facultystaff .image-container img {
                    height: 100%;
                    margin: auto;
                }

                .faculty-content {
                    text-align: center;
                }
                .faculty-content {
                    display: grid;
                    grid-template-columns: repeat(1, 1fr);
                    gap: 16px;
                    padding: 25px;
                }
            }

            /* POPUP */
            .popup {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.9);
                justify-content: center;
                align-items: center;
                z-index: 9999;
            }

            .popup-content {
                background: #fff;
                padding: 0px 30px 25px 30px;
                text-align: left;
                width: 800px;
                max-height: 80vh;
                overflow-y: auto;
                border-radius: 10px;
            }

            .popup-main-content {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                gap: 15px;
            }

            .popup-image img {
                display: block;
                border-radius: 100%;
                border: 5px solid #0c1c59;
                width: 200px;
                height: 200px;
                margin: auto;
    
            }

            .popup-text {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align:center;
            }

            .popup-text h1 {
                font-size: 25px;
                font-weight: bold;
                color: #0c1c59;
            }

            .close-btn {
                position: relative;
                right: 10px;
                cursor: pointer;
                font-size: 20px;
                right: 0;
                text-align: left;
                display: flex;
                align-items: end;
                justify-content: end;
            }
        </style>
    </div>
</div> <!--             


            <div class="text-center xs:px-[66px]">
                <h3 class="headings xl:h3 xs:h4 text-msu-rusty-red ">Academic Offices</h3>
                <div class="flex flex-col gap-[20px] justify-center xl:ml-0 xs:ml-0 xl:mt-0 xs:mt-10 pt-10 ">
                    <p class="paragraph xl:p2 xs:p2 text-charcoal text-center">COLLEGE OF ARTS AND SCIENCES</p>
                    <p class="paragraph xl:p2 xs:p2 text-charcoal text-center">COLLEGE OF ISLAMIC & ARABIC STUDIES</p>
                    <p class="paragraph xl:p2 xs:p2 text-charcoal text-center">COLLEGE OF EDUCATION</p>
                    <p class="paragraph xl:p2 xs:p2 text-charcoal text-center">COLLEGE OF FISHERIES</p>
                    <p class="paragraph xl:p2 xs:p2 text-charcoal text-center">INSTITUTE OF INFORMATION & COMMUNICATIONS TECHNOLOGY</p>
                    <p class="paragraph xl:p2 xs:p2 text-charcoal text-center">INSTITUTE OF OCEANOGRAPHY & ENVIRONMENTAL SCIENCE</p>
                    
                </div> --> <!-- <ReactTable /> --> <!-- <div  class="App">
                  <ReactTable data={data} /> --> <!-- <DataTableComponent columns={columns} data={data} /> -->
<!-- <FacultySearch facultyList={facultyList} /> --> <!-- end Academic Offices -->
<?php include("../includes/footer.php") ?>