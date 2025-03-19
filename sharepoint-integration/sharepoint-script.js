
(async function () {
    const containers    = document.querySelectorAll(".content-container");
    let FETCH_DATA      = [];
    let DATA_COUNT      = 100;
    const LOADER_HTML   = `<div class="data-loader">
                                <img src="https://dev-tcto.etpbx.com/sharepoint-integration/msutcto-loader.gif">
                            </div>`;
    

    // INITIAL RELOAD
    containers.forEach((container) => {
        const listName      = container.getAttribute("data-sharepoint-list");
        const row           = container.getAttribute("data-row");
        const hasFilter     = container.getAttribute("data-filter-values") == "true"; 
        const limit         = container.getAttribute("data-limit") || ""; 
        const sort          = container.getAttribute("data-sort");
        let startFrom       = container.getAttribute("data-list-count") || 0;
        let hasData         = false;
        let orderBy         = "";
        
        if(sort){
            orderBy         = sort.replace(":", " ");  
        }
        
        let filter_columns  = "";
        let filteredBy      = container.getAttribute("data-filtered-by"); 

        if(filteredBy){
            let filteredBy_arr  = filteredBy.split(":");
            let columnName      = filteredBy_arr[0];
            let valueName       = filteredBy_arr[1];
            filter_columns      = `${columnName} eq '${valueName}'`;
        }


        if(listName == "FacultyData"){
            DATA_COUNT = 12;
        }

        let   filterDiv     = "";
        let   gridHtml      = "";
        let   footerBtn     = "";
        let template        = container.querySelector(".content-template").innerHTML;
        
        container.innerHTML += LOADER_HTML;

        async function renderContent() {
        
            try {
                
                await fetchData(listName,filter_columns,limit,orderBy);

                const items     = FETCH_DATA[listName];
                hasData         = items.length > 0;

                if(row){
                  
                    let filteredData = items.filter(item =>
                        item["ID"] && item["ID"].toString().toLowerCase().includes(row)
                    );
                           
                    for (const item of filteredData.slice(0, 1)) {
                        const contentHTML = await renderTemplate(template, item); // Wait for async rendering
                        gridHtml += contentHTML;
                    }

                } else {
                    
                    if(hasFilter){
                        // FETCH THE DEPARTMENT AND COLLEGE LIST
                            // await fetchData("Department");
                        await fetchData("College");
                        // filterDiv    = filteringSection(items,filterColumn);
                        filterDiv       = filteringSection();
                    }  

                    dataLimit   = DATA_COUNT;
                    // if(listName == "News" && limit && startFrom != 0 ){
                    if(limit && startFrom != 0 ){
                        // dataLimit   = parseFloat(limit) + 1;
                        dataLimit   = parseFloat(limit) <= 2 ? parseFloat(limit) : parseFloat(limit) + 1;
                        startFrom   = parseFloat(startFrom) - 1
                    }
                    
                    for (const item of items.slice(startFrom, dataLimit)) {
                        const contentHTML = await renderTemplate(template, item); // Wait for async rendering
                        gridHtml += contentHTML;
                    }


                    
                    footerBtn   = listName == "FacultyData" ? `<button class="load-more-btn">Load More</button>` : "";
                }
            } catch (error) {
                console.error("Error fetching data from SharePoint:", error);
                container.innerHTML = "<p>Failed to load content.</p>";
            } 
        }
 
       
 
 
        // Initialize rendering
        renderContent().then(data => {
                            container.querySelectorAll(".no-data-found").forEach(el => el.remove());
                            jQuery(".grid-item").removeClass("d-none");
                            if(hasFilter){
                                container.innerHTML += filterDiv;
                                jQuery('.filter-data').eq(1).attr("disabled", true);
                            }  
                            if(!hasData){
                                container.innerHTML = `<div class="no-data-found"> No Data Found on the List...</div>`
                            }
                            container.innerHTML += gridHtml;
                            container.innerHTML += footerBtn;
                            container.querySelectorAll(".data-loader").forEach(el => el.remove());
                            // jQuery(".data-loader").remove();
                        })
                        .catch(error => {
                            console.error('Error fetching data:', error);
                        });
        
       
    });

    async function renderTemplate(template, data) {
        const matches = template.match(/{{(.*?)}}/g);
    
        if (!matches) return template; 
    
        for (const match of matches) {
            const fieldName = match.replace(/[{}]/g, "").trim(); 
            let replacement = "";

            if (fieldName === "Pictures") {
                replacement = "https://msutawi-tawi.edu.ph/images/MSU%20Seal%20New%20(Official).png";
                if(data[fieldName] && data[fieldName]["Url"]){
                    replacement = data[fieldName]["Url"];
                }
            } else {
                replacement = data[fieldName] || "";
                
                if(fieldName.includes(".")){
                    let fieldNameArr = fieldName.split(".");
                    replacement      = fieldNameArr.reduce((obj,key) => obj && obj[key], data);
                    if(fieldNameArr[0]==="Pictures"){
                        replacement      = fieldNameArr.reduce((obj,key) => obj && obj[key], data) || "https://msutawi-tawi.edu.ph/images/MSU%20Seal%20New%20(Official).png";
                    }else if(fieldNameArr[0] ==="ImageUrl" || replacement == "undefined"){
                        replacement      = "https://msutawi-tawi.edu.ph/images/MSU%20Seal%20New%20(Official).png";
                    }
                }

                if(fieldName.includes("Date") || fieldName.includes("Created")){
                    replacement = formatDate(data[fieldName]);
                }

            }
            template        = template.replace(match, replacement);
        }
    
        return template;
    }

    async function checkFileExists(fileName) {
        // const imageFile = `https://msugensan.eacomm.com/wp-content/uploads/faculty-and-staff/${fileName}`;
        const imageFile = `./faculty-and-staff/${fileName}`;
        try {
            const response = await fetch(imageFile, { method: 'HEAD' });
            return imageFile; // Returns true if the file exists
        } catch {
            return false;
        }
    }

    function filteringSection(){
        // let departmentArr   = FETCH_DATA["Department"];
        let collegeArr      = FETCH_DATA["College"];
        // let depatmentOption = `<option value=''>ALL</option>`;
        let collegeOption   = `<option value=''>ALL</option>`;
        let selectElement   = "";
        let groupByColumn   = {};

            collegeArr.map((item,index)=>{
                collegeOption += `<option value="${item.ID}">${item.Title}</option>`;
            });

            // departmentArr.map((item,index)=>{
            //     depatmentOption += `<option value="${item.ID}">${item.Title}</option>`;
            // });

            selectElement += `<select class="filter-data" id="College">${collegeOption}</select>`;
            // selectElement += `<select class="filter-data" id="Department">${depatmentOption}</select>`;
                       
            let filterDiv = `<div class="filter">
                                ${selectElement}
                                <input name="" class="search-keyword" id="search-faculty" placeholder="Search by Last Name">
                                <button class="search-keyword-btn" >Search</button>
                            </div>`;
            return filterDiv
    }
    
    async  function fetchImage(mapId) {

        let isLinkAvailable = true;
        let imageLink       = `https://api-msu.etpbx.com/storage/FacultyDataImagesTcto/${mapId}`;

        if(!mapId){
            return "https://msutawi-tawi.edu.ph/images/MSU%20Seal%20New%20(Official).png";
        }
        
        // // fetch(imageLink)
        // //     .then(response => {
        // //         if (response.status === 404) {
        // //             isLinkAvailable = false
        // //         } 
        // //     })
        // // .catch(error => {
        // //     isLinkAvailable = false
        // // });

        try {
            const response = await fetch(imageLink);
            isLinkAvailable = response.status !== 404;
        } catch (error) {
            isLinkAvailable = false;
        }
      
        
        if (!isLinkAvailable){
            const response = await fetch('https://api-msu.etpbx.com/api/getImageFromSharepoint', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id: mapId, 
                    imagePath: "/sites/Tawitawi/Shared Documents/FacultyDataImagesTcto/",
                }),
            });
    
            if(!response.ok){
                throw new Error(`Failed to fetch image. Status: ${response.status}`);
            }
            const data = await response.blob();
            return URL.createObjectURL(data);
        }else{
            return imageLink
        }

    }

    async function fetchData(listName, filter_columns = "", count = "", orderBy = ""){
        let queryParams = {
                            select: "",
                            filter: "",
                            top: "",
                            skiptoken: ""
                        };

        switch (listName) {
            case "FacultyData":
                let top         = 13;
                let startFrom   = count > 12 ? `Paged=TRUE&p_ID=${count}` : "";
                // let startFrom   = count > 12 ? `Paged=TRUE&p_ID=35` : "";
                    queryParams = {
                                    // select: "ID,LastName,FirstName,MiddleInitial,Position,Title,Kind,Pictures,CollegeId,College/Title,College/Shortname,College/Dean,College/Address,College/ContactNumber,College/InstitutionalEmail",
                                    select: "ID,LastName,FirstName,MiddleInitial,Position,Pictures,CollegeId,College/Title,College/Shortname,College/Dean,College/Address,College/ContactNumber,College/InstitutionalEmail,AcademicRankDepartment,Education",
                                    filter: filter_columns,
                                    top: top,
                                    skiptoken: startFrom,
                                    expand: "College"
                                }
                break;
            case "Programs":
                queryParams =  {
                                select: "",
                                // select: "ID,Title,Shortname,CollegeId,ProgramDescription,College/Title, College/Shortname,College/Dean,College/Address,College/ContactNumber,College/InstitutionalEmail",
                                top: "",
                                filter: filter_columns,
                                skiptoken: "",
                                expand: ""
                                // expand: "College"
                            }
                break;
            case "Offices":
                queryParams     = {
                                    select: "ID,Title,OfficeUnderId,Head,Suffix,Designation,ContactNo,OfficeAddress,InstitutionalEmail,Description,OfficeUnder/Title",
                                    top: "",
                                    filter: filter_columns,
                                    skiptoken: "",
                                    expand: "OfficeUnder"
                                }
                break;
            case "News":
                queryParams     = {
                                    select: "",
                                    top: 50,
                                    // top: count,
                                    filter: "DisplayToPublic eq 1",
                                    skiptoken: "",
                                    // skiptoken: `Paged=TRUE&p_ID=${count}`,
                                    expand: "",
                                    orderby: orderBy
                                }
                break;
            default:
                queryParams = {
                                select: "",
                                filter: filter_columns,
                                top: count,
                                skiptoken: "",
                                orderby: orderBy
                            };
                break;
        }
 
        const tctoParams = {
                tenantName: "TCTO",
                baseUrl:
                    `https://msutawitawiedu.sharepoint.com/sites/Tawitawi/_api/web/lists/GetByTitle('${listName}')/items`,
                queryParams
            }
        const response = await fetch('https://api-msu.etpbx.com/api/getData', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                    },
                                    body: JSON.stringify({
                                        tenantName: tctoParams.tenantName,
                                        baseUrl: tctoParams.baseUrl,
                                        queryParams: tctoParams.queryParams,
                                        
                                    }),
                                });
        let data = await response.json();
        
        if (!FETCH_DATA[listName] || count == 12) {
            FETCH_DATA[listName] = []; // Initialize as an array if not already set
        }

        for (const item of data) {  
            if (item.Pictures && item.Pictures.Description) { 
                // try {
                //     const imageFile = await checkFileExists(item.Pictures.Description);
                //     if(imageFile){
                //         item["Pictures"]["Url"] = imageFile || "https://msutawi-tawi.edu.ph/images/MSU%20Seal%20New%20(Official).png";
                //     }else{
                //         let imageResponse       = await fetchImage(item.Pictures.Description);
                //         item["Pictures"]["Url"] = URL.createObjectURL(imageResponse);
                //     }
                // } catch (error) {
                //     console.error("Error fetching image:", error);
                // }
                        let imageResponse       = await fetchImage(item.Pictures.Description);
                        item["Pictures"]["Url"] = imageResponse;
                // item["Pictures"]["Url"] = "https://msutawi-tawi.edu.ph/images/MSU%20Seal%20New%20(Official).png";
            }
            FETCH_DATA[listName].push(item);
        }

        if(listName === "FacultyData" || listName === "News" ){
            const uniqueData = Array.from(
                new Map(FETCH_DATA[listName].map(item => [item.ID, item])).values()
            );
            FETCH_DATA[listName] = uniqueData;
        }

    }

    // FOR FILTERING
    async function getFilteredData(thisData, fromLoadMore = false){
       
        let thisElement     = thisData.closest(".content-container");
        
        let searchKeyword   = thisElement.find(".search-keyword").val() || null;
        let listName        = thisElement.attr("data-sharepoint-list");
        let template        = thisElement.find(".content-template").html();
        let hasData         = false;
       
        let filter          = ``;
        let columnOneName   = jQuery('.filter-data').eq(0).attr("id"); //College
        // let columnTwoName   = jQuery('.filter-data').eq(1).attr("id"); //Deparment
        let filterOneValue  = jQuery('.filter-data').eq(0).val() || null; //College
        // let filterTwoValue  = jQuery('.filter-data').eq(1).val() || null; //Deparment
        let filterCondition = [];
        

        filterOneValue && filterCondition.push(`CollegeId eq '${filterOneValue}'`);
        // filterTwoValue && filterCondition.push(`DepartmentId eq '${filterTwoValue}'`);
        searchKeyword && filterCondition.push(`LastName eq '${searchKeyword}'`);
        
        filter  = filterOneValue || searchKeyword ? filterCondition.join(" and ") : "";

        let startFrom       = thisElement.find(".grid-item").length;

        if(fromLoadMore){
            DATA_COUNT += 4;
        }else{
            DATA_COUNT = 12;
            startFrom  = 0;
            thisElement.find(".grid-item").remove();
        }

        let contentHTML     = "";
        thisElement.find(".no-result").remove();
        thisElement.find(".load-more-btn").remove();

        // For loader purpose:
        thisElement.append(LOADER_HTML);

        
        try{

            
            await fetchData(listName, filter, DATA_COUNT);
            

            const data          = FETCH_DATA[listName];
 
            // Apply "LIKE" filtering
            // const filteredData = data.filter(item =>
            //     (!filterOneValue || (item[columnOneName] && item[columnOneName].toString().toLowerCase().includes(filterOneValue.toLowerCase()))) &&
            //     (!filterTwoValue || (item[columnTwoName] && item[columnTwoName].toString().toLowerCase().includes(filterTwoValue.toLowerCase()))) &&
            //     (!searchKeyword || (item.LastName && item.LastName.toString().toLowerCase().includes(searchKeyword.toLowerCase())))
            // )
            const filteredData = data.filter(item =>
                (!filterOneValue || (item.CollegeId && item.CollegeId == filterOneValue )) &&
                // (!filterTwoValue || (item.DepartmentId && item.DepartmentId == filterTwoValue )) &&
                (!searchKeyword || (item.LastName && item.LastName.toString().toLowerCase().includes(searchKeyword.toLowerCase())))
            )
 
            hasData = filteredData.length > 0
           
            if (filteredData.length < 1) {
                thisElement.append(`<p class="no-result">No Data Found.</p>`);
            } else {
                for (const item of filteredData.slice(startFrom, DATA_COUNT)) {
                     contentHTML += await renderTemplate(template, item); // Wait for async rendering
                }

            }
            
           
        } catch (error) {
            console.log(error);
        } finally {
            hasData && thisElement.find(".no-result").remove();
            thisElement.find(".data-loader").remove();
            jQuery('.filter-data').attr("disabled",false);
            thisElement.find(".search-keyword").attr("disabled",false);
            thisElement.append(contentHTML);
            thisElement.append(thisElement.find(".grid-item").length == FETCH_DATA[listName].length  ? "" : `<button class="load-more-btn">Load More</button>`);
        }
    }

    function formatDate(dateString) {
        if(!dateString){
            return "No Date Found.";
        }

        const date          = new Date(dateString);
        const year          = date.getFullYear();
        const month         = date.toLocaleString("en-US", { month: "long" })
        const day           = String(date.getDate()).padStart(2, '0');
        let hours           = date.getHours(); // 24-hour format (e.g., 15)
        let minute          = String(date.getMinutes()).padStart(2, "0"); // 2-digit minutes (00-59)
        
        // Convert to 12-hour format
        let hour12          = hours % 12 || 12; // Convert 0 -> 12
        let ampm            = hours >= 12 ? "pm" : "am"; // Determine AM or PM
        let HFormatted      = String(hour12).padStart(2, "0"); // Ensure two-digit hour

        // const formattedDate = `${month} ${day}, ${year} ${HFormatted}:${minute} ${ampm.toUpperCase()}`;
        const formattedDate = `${month} ${day}, ${year}`;
        return formattedDate; 
    }
    
    
    jQuery(document).on("click",".search-keyword-btn", async function(e){

        getFilteredData(jQuery(this));

    });
     
    jQuery(document).on("click",".load-more-btn", async function(){

        let fromLoadMore    = true;
        getFilteredData(jQuery(this),fromLoadMore);
        
    });

    jQuery(document).on("click",".show-popup", async function(){
        let thisElement     = jQuery(this);
        let popupTarget     = thisElement.attr("data-popup-target");
        let listName        = thisElement.closest(".content-container").attr("data-sharepoint-list");
        let template        = jQuery(`#${popupTarget}`).find(".popup-template").html();
        let [columnName, 
            columnValue ]   = thisElement.attr("id").split(":");
        let data            = FETCH_DATA[listName];
        let html            = "";
        showPopup(popupTarget);
        jQuery(".popup-main-content").html(LOADER_HTML);
        // Apply "LIKE" filtering
        const filteredData = data.filter(item =>
            item[columnName].toString().toLowerCase().includes(columnValue)
        );

        try {
             html           = await renderTemplate(template,filteredData[0]);
        } catch (error) {
            console.log(error);
        } finally {
            jQuery(".popup-main-content").find(".data-loader").remove();
            jQuery(".popup-main-content").html(html);
        }
        
        

    });


    jQuery(document).on("change","#College", async function(){
        let data                = FETCH_DATA["Department"];
        let thisValue           = jQuery(this).val();
        let departmentSelect    = jQuery("#Department");
        let isDisabled          = thisValue == "";

        let fetchData           = data.filter( item =>( item.College0Id == thisValue ) );
        departmentSelect.attr("disabled", true);
        departmentSelect.empty(); 

        departmentSelect.append(jQuery("<option>", { value: "", text: "All" }));

        for(const item of fetchData){
            departmentSelect.append(jQuery("<option>", { value: item.ID, text: item.Title }));
        }
        
        departmentSelect.attr("disabled", isDisabled);
        
    });
    
 
})();


 // Function to show the popup
 function showPopup(popupTarget = "popup") {
    // document.getElementById("popup").style.display = "flex";
    document.getElementById(`${popupTarget}`).style.display = "flex";
}

// Function to close the popup
function closePopup(popupTarget = "popup") {
    document.getElementById(`${popupTarget}`).style.display = "none";
}

function removeRenderTemplate(){
    jQuery('script[type="text/template"]').remove();
}