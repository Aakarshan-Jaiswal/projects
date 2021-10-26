<?php
    include "includes/header.php";
?>

<!--SLIDING CARDS-->
<!--img dimensions = 200 X 200-->
<div class="py-5" >
    <div class="container">
        <div class="row">
            <div class="text-center mx-auto col-lg-8 col-10">
                <h1 class="mb-3">offers</h1>
                <div class="carousel slide carousel-fade" id="cards" data-ride="carousel" data-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active"> 
                            <div class="card bg-info" style="height:400px;">
                                <center><img class="card-image-top rounded-circle img-thumbnail " src="Login/images/aloo.jpg" style="width:200px; height:200px"></center>
                                <div class="card-body">
                                    <h4 class="card-title">FOOD NAME</h4>
                                    <p class="card-text">Description</p>
                                    <a href="#" class="btn btn-primary stretched-link">BUY NOW</a>
                                </div>    
                            </div>
                        </div>
                        <div class="carousel-item"> 
                            <div class="card bg-info" style="height:400px">
                                <center><img class="card-image-top rounded-circle img-thumbnail " src="Login/images/corn.jpg" style="width:200px; height:200px"></center>
                                <div class="card-body">
                                    <h4 class="card-title">FOOD NAME</h4>
                                    <p class="card-text">Description</p>
                                    <a href="#" class="btn btn-primary stretched-link">BUY NOW</a>
                                </div>    
                            </div>
                        </div>
                    </div>
                     <a class="carousel-control-prev" href="#cards" data-slide="prev"> 
                         <span class="carousel-control-prev-icon "></span>
                    </a> 
                    <a class="carousel-control-next" href="#cards" data-slide="next"> 
                        <span class="carousel-control-next-icon"></span> 
                    </a>
                </div>
            </div>
        </div>
    </div> 
</div>

<!--BRAND NAME-->
<div class="jumbotron jumbotron-fluid text-center">
    <h1 class="display1 font-weight-bolder">WEBSITE NAME</h1>
    <p class="lead font-weight-bold font-italic ">"tag line of website"</p>
    <a href="#" class="btn btn-primary stretched-link">KNOW MORE ABOUT US</a>
</div>

<!--ITEMS IN CARDS-->
<!--img dimensions = 275 X 183-->
<!--add a hover effect for description-->
<div class="container mx-auto row">
    <div class="container-fluid mx-auto col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="row">
            <div class="container-fluid col-6 bg-dark text-white align-items-center d-flex">
                <h3 class="text-center">Heading very vetyyyy bigggggg
                <a class="btn btn-primary stretched-link" href="#">BUY</a></h3>
            </div>
            <div class="container-fluid col-6 bg-info p-0 bg-dark">
                <img src="Login/images/paneer.jpg" class="img-fluid" style="width:275px; height:183px;" >
            </div>
        </div>
        <div class="row">
            <div class="container-fluid col-6 bg-info p-0 bg-dark ">
                <img src="Login/images/paneer.jpg" class="img-fluid" style="width:275px; height:183px;">
            </div>
            <div class="container-fluid col-6 bg-dark text-white align-items-center d-flex">
                <h3 class="text-center">Heading
                <a class="btn btn-primary stretched-link" href="#">BUY</a></h3>
                <p class="text-center text-justify">hello this is description of item</p>
            </div>
        </div>
    </div>
    <div class="container-fluid col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="row">
            <div class="container-fluid col-6 bg-dark text-white align-items-center d-flex">
                <p class="text-center ">hello this is description of item</p>
                <h3 class="text-center">Heading
                <a class="btn btn-primary stretched-link" href="#">BUY</a></h3>
            </div>
            <div class="container-fluid col-6 bg-info  p-0 bg-dark">
                <img src="Login/images/burger.jpg" class="img-fluid" style="width:275px; height:183px;">
            </div>
        </div>
        <div class="row">
            <div class="container-fluid col-6 bg-info  p-0 bg-dark">
                <img src="Login/images/aloo.jpg" class="img-fluid " style="width:275px; height:183px;">
            </div>
            <div class="container-fluid col-6 bg-dark text-white align-items-center d-flex">
                <h3 class="text-center">Heading
                <a class="btn btn-primary stretched-link" href="#">BUY</a></h3>
                <p class="text-center ">hello this is description of item</p>
            </div>
        </div>
    </div>
</div>

<!--CAROUSEL CHEFS-->
<div class="py-5" >
    <div class="container">
        <div class="row">
            <div class="text-center mx-auto col-lg-8 col-10">
                <h1 class="mb-3">HEADING</h1>
                <div class="carousel slide carousel-fade" id="carousel" data-ride="carousel" data-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active"> 
                            <img class="d-block w-100" src="https://static.pingendo.com/cover-moon.svg">
                            <h3 class=""> Name</h3>
                        </div>
                        <div class="carousel-item"> 
                            <img class="d-block w-100" src="https://static.pingendo.com/cover-bubble-light.svg"> 
                            <h3 class=""> Name</h3>
                        </div>
                        <div class="carousel-item"> 
                            <img class="d-block w-100" src="https://static.pingendo.com/cover-bubble-dark.svg">
                            <h3 class=""> Name</h3>
                        </div>
                    </div>
                    <ol class="carousel-indicators pb-4">
                        <li data-target="#carousel" data-slide-to="0" class="active"> </li>
                        <li data-target="#carousel" data-slide-to="1"> </li>
                        <li data-target="#carousel" data-slide-to="2"> </li>
                    </ol>
                     <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> 
                         <span class="carousel-control-prev-icon"></span>
                    </a> 
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> 
                        <span class="carousel-control-next-icon"></span> 
                    </a>
                </div>
            </div>
        </div>
    </div> 
</div>

<?php
    include "includes/footer.php";
?>