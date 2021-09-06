<?php include "template/header.php"; ?>
<!-- PORTFOLIO -->
<section class="portfolioSection">
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <!-- portfolio header -->
                <div class="row pageHeading">
                    <div class="col-12 d-md-block">
                        <div class="mt-5 mb-5 d-flex justify-content-center align-items-center">
                            <h1 class="title-bg text-uppercase fw-bolder position-absolute mb-0 wow animate__zoomIn">Works</h1>
                            <h1 class="title position-relative text-uppercase fw-bolder mb-0 wow animate__backInUp">My<span
                                    class="fw-bolder ss"> Portfolio</span></h1>
                        </div>
                    </div>
                </div>
                <!-- portfolio body -->
                <div class="row" id="portfolio">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- MOdal Box Only -->
<section>
    <div class="" id="portfolioModalDialog">

    </div>

</section>
<?php include "template/footer.php" ?>
<script>
    console.log(portfolio_data);
    let portfolioMainImage = portfolio_data.portfolioMainImages;
    let portfolio = document.querySelector("#portfolio");
    portfolioMainImage.map(function(el,index){
        // console.log(el);
        portfolio.innerHTML += `
            <!-- pfl-item ${el.id} -->
        <div class="col-lg-4 col-md-6  col-sm-12 snake">
        <div class="pfl_item  mb-4 px-2 py-2 overflow-hidden wow ${el.animated}">
        <div class="pfl-img">
        <img src="${el.urlToImage}" alt="">
        <div class="prtoverlay" >
        <div class="text" id="messengerShow" data-bs-toggle="modal" data-bs-target="#messengerProject${el.id}">${el.text}
        <!-- <button class="btn btn-primary" >Details</button> -->
        </div>


        </div>
        </div>
        </div>
        </div>
        `;
        });

        //modal popup with js
        let portfolioPopupBox = portfolio_data.portfolioPopupBox;
        let ModalBox = document.querySelector("#portfolioModalDialog");
        portfolioPopupBox.map(function(el,index){
            // console.log(el);
            ModalBox.innerHTML +=`
            <!-- Modal ${el.id}-->
        <div class="modal fade" id="messengerProject${el.id}" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title fw-bold">${el.projectTitle}</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <figure>
            <!-- Project Details Starts -->
        <figcaption>
        <div class="row">
        <div class="col-12 col-sm-6 mb-2">
        <i class="fas fa-file-alt pe-2 modal-icon"></i><span class="project-label fw-lighter modal-icon-title">Project : </span> <span class="fw-bold text-capitalize modal-contentType">${el.projectType}</span>
        </div>
        <div class="col-12 col-sm-6 mb-2">
        <i class="fas fa-user-alt pe-2 modal-icon"></i><span class="project-label fw-lighter modal-icon-title">Client : </span> <span class="fw-bold  text-capitalize modal-contentType">${el.client}</span>
        </div>
        <div class="col-12 col-sm-6 mb-2">
        <i class="fa fa-code pe-2 modal-icon"></i><span class="project-label fw-lighter modal-icon-title">Languages : </span> <span class="fw-bold  text-capitalize modal-contentType">${el.languages}</span>
        </div>
        <div class="col-12 col-sm-6 mb-2">
        <i class="fas fa-external-link-alt pe-2 modal-icon"></i><span class="project-label fw-lighter modal-icon-title">Preview : </span> <span class="fw-bold  text-lowercase modal-contentType"><a href="${el.href}" class="preview" target="_blank">${el.preview}</a></span>
        </div>
        </div>
        </figcaption>
            <!-- Project Details Ends -->
            <!-- Main Project Content Starts -->
        <img src="${el.urlToImage}" class="img-fluid" class="modal-img" alt="Portolio Image">
            <!-- Main Project Content Ends -->
        </figure>
        <!-- <button type="button" class="btn btn-outline-light float-end" data-bs-dismiss="modal">Close</button> -->
        </div>
        <div class="modal-footer border border-0">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
        <button type="button" class="btn btn-outline-light float-end" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
        </div>
        </div>
        `;
        })

</script>
