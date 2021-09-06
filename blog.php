<?php include "template/header.php"; ?>
<!-- Blog -->
<section class="blogSection">
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <!-- blog header -->
                <div class="row pageHeading">
                    <div class="col-12 d-md-block">
                        <div class="mt-5 mb-5 d-flex justify-content-center align-items-center">
                            <h1 class="title-bg text-uppercase fw-bolder position-absolute mb-0 wow animate__zoomIn">Posts</h1>
                            <h1 class="title position-relative text-uppercase fw-bolder mb-0 wow animate__backInUp">My<span
                                    class="fw-bolder ss"> Blog</span></h1>
                        </div>
                    </div>
                </div>
                <ul id="filterButtons" class="wow animate__fadeInRight">
                    <li  class="list activeList" data-filter="all">All</li>
                    <li  class="list" data-filter="webDevelopment">WebDev</li>
                    <li  class="list" data-filter="frontEnd" >FrontEnd</li>
                    <li  class="list" data-filter="backEnd">BackEnd</li>
                    <li  class="list" data-filter="graphic">Graphic</li>
                    <li  class="list" data-filter="general">General</li>
                </ul>
                <!-- portfolio body -->
                <div class="row" id="blog">
                    <!-- <div class="filter"></div> -->
                </div>
            </div>
            <nav class="">
                <ul class="pagination justify-content-center mt-4 ">
                    <li class="page-item prev disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true" class="prevLink">&laquo;</span>
                        </a>
                    </li>
                    <!-- <li><a href="#">page<span class="page-num"></span></a></li> -->
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item next">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true" class="nextLink">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </div>
</section>
<?php include "template/footer.php" ?>
<script>
    let filterButtons = document.getElementById('filterButtons');
    let list = document.getElementsByClassName('list');
    let blog=document.querySelector("#blog");
    let blogMainContents = blog_data.blogMainContents;
    let itemBox = document.getElementsByClassName("itemBox");
    let filter=document.querySelectorAll(".filter");
    for(let i=0;i<list.length;i++){
        list[i].addEventListener('click',function(){

            for(let j=0;j<list.length;j++){
                list[j].classList.remove('activeList');
            }
            this.classList.add('activeList');
            toshow();
            let dataFilter = this.getAttribute('data-filter');
            // blog.filter(itemBox);
            function filterSelection(c){
                for(let k=0;k<itemBox.length;k++){
                    itemBox[k].classList.remove('show');
                    itemBox[k].classList.add('hide');

                    console.log(dataFilter);
                    if(itemBox[k].getAttribute('data-item')==dataFilter ||
                        itemBox[k].getAttribute('data-item2')==dataFilter || itemBox[k].getAttribute('data-item3')==dataFilter ||
                        dataFilter=='all')
                    {
                        itemBox[k].classList.remove('hide');
                        itemBox[k].classList.add('show');
                    }
                }
            }
            filterSelection();
        });
    };


    //product titleနဲ့textတွေကို short string အရေအတွက် သတ်မှတ်ပေးချင်လို့
    function toShort(str,max=50){
        if(str.length > max ){
            return str.substring(0,max)+" ..."
        }
        return str;
    };


    function toshow(x){
        blog.innerHTML = '';
        blogMainContents.map(function(el,index){
            // console.log(el);
            blog.innerHTML += `
            <!-- blog-item ${el.id} -->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 px-md-1 px-lg-3 itemBox" data-item="${el.data_item}" data-item2="${el.data_item2}" data-item3="${el.data_item3}" >
            <div class="card blogcard wow  animate__zoomIn">
            <div class="card-img">
            <a href="${el.href}" target="_blank">
            <img src="${el.urlToImage}" class="card-img-top" alt="...">
            </a>
            </div>
            <div class="divider"></div>
            <div class="card-body">
            <a href="${el.href}" target="_blank">
            <h6 class="card-title">${toShort(el.title,45)}</h6>
            <p class="card-text">${toShort(el.text,105)}</p>
            </a>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            <ul class="p-0 react">
            <li>${el.react}</li>
            </ul>

            </div>
            <div class="card-footer d-flex justify-content-between align-item-center">
                ${el.date}
            <span>${el.readtime}</span>
            </div>
            </div>
            </div>

            `;
        });
    }
toshow();
</script>