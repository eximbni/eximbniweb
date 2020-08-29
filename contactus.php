<!DOCTYPE html>
<html lang="en">

 <!--<![endif]-->
<head>
        <title>Best Site For imports and exports</title>
        <!-- META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="GiftShop Bootstrap HTML5 eCommerce Template">
        <meta name="author" content="Craftdzine">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!--  STYLE -->
        <link rel="stylesheet" href="css/style.css">
        <!-- ANIMATE -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- MAGNIFIC POPUP -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- FLEXSLIDER -->
        <link rel="stylesheet" href="plugins/FlexSlider1/jquery.flexslider.css">
        <!--  OWL CAROUSEL -->
        <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
        <!-- OWL CAROUSEL THEME -->
        <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
        <!-- slick -->
        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <!-- slick-theme -->
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">
        <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">   

        <script src="js/angular.min.js"></script>
        <script src="appJs/eximApp.js"></script> 
        <!-- <script src="js/angular.min.js.map"></script>   -->     
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>-->
        <!-- WEB FONTS -->
        <!-- <link href="http://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700"  rel="stylesheet" property="stylesheet" type="text/css" media="all" /> -->
        
<!--         <link href="magicscroll/magicscroll.css" rel="stylesheet" type="text/css" media="screen"/>
        <script src="magicscroll/magicscroll.js" type="text/javascript"></script> -->
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>
    <style type="text/css">
    .scroll-area{
      float:left;
      overflow-y :visible;
    }   
    .scroll-area::-webkit-scrollbar {
        display: none;
    }
    .red-text{
      color:red;
    }
    .img-banner
    {
        width: 70%;
        height: 70%;
    }
    .img-slider
    {
        width: 48.5;
    }
    tbody {
        display:block;
        height:350px;
        overflow:auto;
    }
    tbody::-webkit-scrollbar {
        display: none;
    }
    .slider-img::-webkit
    {
        width: 100%;
    }
    </style>
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </head>
    <body ng-app="eximApp" style="background: #fdfcfc; padding-right: 0px;" ng-controller="chapterCtrl" onload="getLocation()">
        <div class="container">
            <div class="row">

                <!-- Site Wraper -->
                <div class="wrapper">
                    <div class="se-pre-con"></div>

                    <!--Header -->
                    <header>
                        <!-- start topbar -->
                        <div class="topbar">
						 <div class="container">
						 <!-- div id="google_translate_element"></div -->
                                <!--ul class="topbarnav pull-left" style="width:100%">
                                   <marquee width="100%" direction="left" style="background:#f15822; color:#fff; font-size:15px;">
									Sell and Buy Leads Goes Here &nbsp Sell and Buy Leads Goes Here &nbsp Sell and Buy Leads Goes Here &nbsp
									</marquee>
                                </ul -->
								<a data-toggle="modal" data-target="#loginModal" data-backdrop="static" data-keyboard="false"><button ng-if="userid == null" class="btn btn-outline btn-round btn-success topbarnav pull-right"> Login </button></a>
                                <ul class="topbarnav pull-right" ng-if="userid != null" >

                                    <li class="linkdown">
                                        <a href="#">
                                            <i class="fa fa-user mr5"></i>
                                            <span class="hidden-xs">
                                               {{ uname }}
                                                <i class="fa fa-angle-down ml5"></i>
                                            </span>
                                        </a>
                                        
                                        <ul class="cd-link">
                                            <li ng-if="userid != null"><a href="#" ng-click="godash()" >Dashboard {{isfranchise}}</a></li>
                                            <li ng-if="is_franchise == 1"><a href="/eximbniweb/franchise/" >Franchise</a></li>
                                            <li ng-if="userid != null"><a href="#" ng-click="signout()" >Signout</a></li>
                                            <!-- <li><a data-toggle="modal" data-target="#addpackageModal" data-backdrop="static" data-keyboard="false">Add Packages </a></li> -->
                                           <!--  <li><a href="#">Register</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="linkdown">
                                        <a href="#" class="cart-item-number">
                                        </a>
                                        <ul class="cart cd-link-2">

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end topbar -->

                        <!-- start middlebar -->
                        <div class="middlebar navbar cd-navbar navbar-default">
                            <div class="container">
                                <div class="row">
                                    <div class="display-table">
                                        <div class="col-sm-3 vertical-align text-left hidden-xs">
                                            <a href="">
                                                <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" />
                                            </a>
                                        </div>
                                        <div class="col-sm-7 vertical-align text-center" >
                                            <form name="searchForm" ng-submit="globalSearch()">
                                                <div class="header-cat-block">
                                                    <div class="col-sm-6">
                                                        <input type="text" ng-model="searchText" class="form-control input-lg border-radius" placeholder="Search" required="required"> 
                                                         <!-- {{ buyleadlists_se }} -->
                                                    </div>
                                                    <div class="col-sm-3">
                                                        
                                                        <select class="form-control input-lg border-radius" id="searchOpt" ng-model="searchOpt" required="required">
                                                            <option value="" > Select </option>
                                                            <option value="category" >Category</option>
                                                            <option value="chapter" >Chapter</option>
                                                            <option value="hsncode" >HSN Code</option>
                                                        </select>
                                                      <!--  {{ sellleadlist_se }} -->
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="submit"  class="btn cd-btn top-cat-search btn-block" value="Search">
                                                    </div>  
                                                </div>
                                                    <div class="col-sm-12">
                                                        <div class="col-sm-6">
                                                            <span class="text-danger">{{ buyerrormsg}}  </span>
                                                        </div>  
                                                        <div class="col-sm-6">
                                                            <span class="text-danger">{{ sellerrormsg}}  </span>
                                                        </div>                                                           
                                                    </div>                                                  
                                            </form>
                                        </div>
                                        <div class="col-sm-2 vertical-align header-items hidden-xs">
                                            <!-- <div class="header-item mr5">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                    <sub>3</sub>
                                                </a>
                                            </div>
                                            <div class="header-item">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                                    <i class="fa fa-refresh"></i>
                                                    <sub>2</sub>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end middlebar -->
						<marquee width="100%" direction="left" style="background:#f15822; color:#fff; font-size:15px;">
									Sell and Buy Leads Goes Here &nbsp Sell and Buy Leads Goes Here &nbsp Sell and Buy Leads Goes Here &nbsp
									</marquee>
                    </header>
                    <!--End Header -->

                    <div class="container main-home-page-style mt30">
                        <div class="row">
                            <div class="home-main col-md-9 col-sm-12 col-xs-12 main-contant-right">

                                <section class="clearfix">
                                     <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div  id="mega-slider" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#mega-slider" data-slide-to="0" class="active"></li>
                                                    <li data-target="#mega-slider" data-slide-to="1"></li>
                                                    <li data-target="#mega-slider" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active beactive">
                                                        <img class="slider-img" src="img/banner/ship4.jpg" alt="...">
                                                        <div class="carousel-caption">
                                                            <h4>Welcome to EXIMBNI</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos!</p>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <img class="slider-img" src="img/banner/ship.jpg" alt="...">
                                                        <div class="carousel-caption">
                                                            <h4>100% Responsive</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos!</p>
                                                        </div>

                                                    </div>
                                                    <div class="item">
                                                        <img class="slider-img" src="img/banner/slide-1.jpg" alt="...">
                                                        <div class="carousel-caption">
                                                            <h4>100% Responsive</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sequi ipsa fugit officia eos!</p>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#mega-slider" role="button" data-slide="prev">
                                                </a>
                                                <a class="right carousel-control" href="#mega-slider" role="button" data-slide="next">
                                                </a>
                                            </div>
                                        </div>
                                        <!--div class="col-md-4 col-sm-12 col-xs-12">
                                                <div class="col-md-12 col-sm-6 banner-coll2">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="img/banner/banner1.jpg" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class=""> &nbsp;</div>
                                                <div class="col-md-12 col-sm-6 banner-coll2">
                                                    <div class="image">
                                                        <a href="#"> 
                                                            <img src="img/banner/banner2.jpg" class="img-responsive" alt="">
                                                        </a>
                                                    </div>
                                                </div>

                                        </div-->
                                    </div> 
                                </section>

                            </div>

                            <div class="col-md-3 col-sm-12 col-xs-12 home-side-bar sied-bar-left scroll-area" style="max-height: 300px;">

                                <!-- CATEGORIES WIDGET -->
                                <section class="widget mb20">
                                    <h6 class="text-uppercase bg-border">Categories <a href="#tcat" style="color:#fff">(Show all)</a> </h6>
                                    <div class="navbar-vertical" >
                                        <ul class="nav nav-stacked">
                                            <li ng-repeat="ac in acategories | limitTo : 8">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" ng-mouseover="getChaptersByCategory(ac.id)" >
                                                    {{ac.category_name}} <i class="fa fa-angle-right pull-right"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li ng-repeat="ach in achapters">
                                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" ng-mouseover="getHscodesByChapter(ach.id)" >
                                                            {{ach.chapter_name}} <i class="fa fa-angle-right pull-right"></i>
                                                        </a>
                                                        <ul class="dropdown-menu" >
                                                            <li ng-repeat="achsh in ahscodes">
                                                                <a href="#">{{achsh.hscode}}</a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
									 
                                </section>
                                <!-- END CATEGORIES WIDGET -->


                            </div>
                        </div>
                    </div>
                    
                    <div class="container main-home-page-style mt30">
                        <div class="row">

                            <div class="home-main col-md-12 col-sm-12 col-xs-12">
                                <!-- START IMAGE 2  -->
                                <section class="home-main-contant-style">
                                    <div class="widget mb20">
                                        <div class="image">
                                            <a href="#"> 
                                                <img src="img/banner/Asset 3-100.jpg" class="img-responsive" alt="" style="width: 100%;height: 180px;">
                                            </a>
                                        </div>
                                    </div>

                                </section>
                                <!-- END IMAGE 2  -->
                            </div>
                            
                        </div>
                            
                    </div>


                    <div class="container main-home-page-style mt30" id="nonsearchres">
                        <div class="row" style="margin-right: -10px;">

                            <div class="home-main col-md-6 col-sm-6 col-xs-12">
                                <!-- START PRODUCT  -->
                                <section class="home-main-contant-style">
                                    <div class="widget mb20">
                                        <h6 class="text-uppercase bg-border" style="background-color: #032f4e;border: 1px solid;border-radius: 8px;">Buy Leads  </h6>

                                        <select class="form-control" ng-model="user.buychapter"  name="chapter_buy" ng-change="buyerChapters()" style="float:right;width: 20%;margin-top: -5.30%;margin-right: 0.30px; background:orange; color:#fff">
                                            <option value=""> Select Chapter </option>
                                            <option ng-repeat="chapter in chapterList | orderBy : 'chapter_name'" value="{{ chapter.id }}" > {{ chapter.chapter_name }}</option>
                                        </select>

                                    </div>

                                    <div class="row scroll" style="margin-right : 2%;"> 
                                        <table class="table" style="margin-top: -2%; margin-left: 2.5%; max-height:100px;">
                                            <tbody>
                                                <tr style="width: 655px;border-bottom: 1.75px solid #111 !important;" ng-repeat="b in buyleadlists | orderBy : 'leadref_id'" ng-if="b.id" style="margin-right: 1%;">
                                                    <td style="background:#f15822; color:white; width:50px"> {{b.leadref_id }}</td>
                                                    <td style="width:505px">&nbsp &nbsp &nbsp <span style="color:orange"> {{b.description }}</span> </td>
                                                    <td style="width:50px"><button class="btn btn-warning" ng-click="leaDetails(b.id,b.posted_by,b.chapter_id,b.leadref_id)">Buy </button>
                                                </tr>                                                             
                                            </tbody>
                                        </table>     
                                    </div>

                                </section>

                            </div>

                            <div class="home-main col-md-6 col-sm-6 col-xs-12" >
                                <!-- START PRODUCT  -->
                                <section class="home-main-contant-style">
                                    <div class="widget mb20">
                                        <h6 class="text-uppercase bg-border" style="background-color: #f15822;border: 1px solid;border-radius: 8px;">Sell Leads</h6>

                                        <select class="form-control" ng-model="user.sellchapter" name="chapter_sell" ng-change="sellerChapters()" style="float:right;width: 20%;margin-top: -5.30%;margin-right: 0.30px;  background:blue; color:#fff">
                                           
                                            <option value=""> Select Chapter </option>
                                            <option ng-repeat="chapter in chapterList | orderBy : 'chapter_name'" value="{{ chapter.id }}" > {{ chapter.chapter_name }}</option>
                                        </select>


                                    </div>
                                        <table class="table" style="margin-top: -2%; margin-left: 0.5%; max-height:100px;">
                                            <tbody>
                                                <tr style="width: 655px; border-bottom: 1.75px solid #111 !important;" ng-repeat="sellstselect in sellleadlist | orderBy : 'leadref_id'"  ng-if="sellstselect.id" >
                                                    <td style="background:#032f4e; color:white; width:50px"> {{sellstselect.leadref_id }} </td><td style="width:505px"> <span style="color:blue"> {{sellstselect.description }}  </span></td><td style="width:50px"><button class="btn btn-primary" ng-click="sellleaDetails(sellstselect.id,sellstselect.posted_by,sellstselect.chapter_id,sellstselect.leadref_id)" >Buy</button>
                                                </tr>

                                                                                                         
                                            </tbody>
                                        </table>

                                </section>
                                <!-- END PRODUCT -->
                            </div>
                        
                        </div>

                    </div>

                    <div class="container main-home-page-style mt30" id="searchres" >
                        <div class="row" style="margin-right: -10px;">

                            <div class="home-main col-md-6 col-sm-6 col-xs-12">
                                <!-- START PRODUCT  -->
                                <section class="home-main-contant-style">
                                    <div class="widget mb20">
                                        <h6 class="text-uppercase bg-border" style="background-color: #032f4e;border: 1px solid;border-radius: 8px;">Buy Leads  </h6>

                                        <select class="form-control" ng-model="user.buychapter"  name="chapter_buy" ng-change="buyerChapters()" style="float:right;width: 20%;margin-top: -5.30%;margin-right: 0.30px;">
                                            <option value=""> Select Chapter </option>
                                            <option ng-repeat="chapter in chapterList | orderBy : 'chapter_name'" value="{{ chapter.id }}" > {{ chapter.chapter_name }}</option>
                                        </select>

                                    </div>

                                    <div class="row scroll" style="margin-right : 2%;"> 
                                        <table class="table" style="margin-top: -2%; margin-left: 2.5%; max-height:100px;">
                                            <tbody>
                                                <tr style="width: 655px;border-bottom: 1.75px solid #111 !important;" ng-repeat="b in buyleadlists_search | orderBy : 'leadref_id'" ng-if="b.id" style="margin-right: 1%;">
                                                    <td style="background:#f15822; color:white"> {{b.leadref_id }}</td>
                                                    <td>&nbsp &nbsp &nbsp <span style="color:orange"> {{b.description }}</span> </td>
                                                    <td><button class="btn btn-warning" ng-click="leaDetails(b.id)">Buy </button>
                                                </tr>                                                             
                                            </tbody>
                                        </table>     
                                    </div>

                                </section>

                            </div>

                            <div class="home-main col-md-6 col-sm-6 col-xs-12" >
                                <!-- START PRODUCT  -->
                                <section class="home-main-contant-style">
                                    <div class="widget mb20">
                                        <h6 class="text-uppercase bg-border" style="background-color: #f15822;border: 1px solid;border-radius: 8px;">Sell Leads</h6>

                                        <select class="form-control" ng-model="user.sellchapter" name="chapter_sell" ng-change="sellerChapters()" style="float:right;width: 20%;margin-top: -5.30%;margin-right: 0.30px;">
                                           
                                            <option value=""> Select Chapter </option>
                                            <option ng-repeat="chapter in chapterList | orderBy : 'chapter_name'" value="{{ chapter.id }}" > {{ chapter.chapter_name }}</option>
                                        </select>


                                    </div>
                                        <table class="table" style="margin-top: -2%; margin-left: 0.5%; max-height:100px;">
                                            <tbody>
                                                <tr style="width: 655px; border-bottom: 1.75px solid #111 !important;" ng-repeat="sellstselect in sellleadlist_search | orderBy : 'leadref_id'"  ng-if="sellstselect.id" >
                                                    <td style="background:#032f4e; color:white"> {{sellstselect.leadref_id }} </td><td> <span style="color:blue"> {{sellstselect.description }}  </span></td><td><button class="btn btn-primary" ng-click="sellleaDetails(sellstselect.id)" >Buy</button>
                                                </tr>

                                                                                                         
                                            </tbody>
                                        </table>

                                </section>
                                <!-- END PRODUCT  -->
                            </div>
                        
                        </div>

                    </div>

                                       
                    <div class="container main-home-page-style mt30" >
          <h3 style="background:#f15822; color:#fff; text-align:center; margin-bottom:15px; border-radius:15px; margin-left:70px; margin-right:70px;">Trending Categories </h3>
                       
             <div class="row" style="text-align:center" id="tcat">
             <div class="col col-md-1" style="border:2px solid grey; border-radius:10px; padding-top:5px; height:100px; weight:100px; background:#e7e7e7; text-align:center; color:#111; margin-left:70px; margin-bottom:25px;" ng-repeat="x in acategories" ng-click="getChaptersList(x.id,x.category_name)">
             {{x.category_name}}<br><img src="catimgs/{{x.id}}.svg" style="height:50px; -webkit-filter: brightness(100%);"> <br>
             </div>
            </div>
            </div>



                    <!-- START FOOTER -->
                    <footer class="footer">

                        <div class="container"> 
                            <div class="row" style="background-color: #032f4e; color: #d6cbcb;">
                                <!-- CATEGORIES WIDGET -->
                                <br>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <h6 class="text-uppercase bottom-line">Choose a country</h6>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <ul class="icons-list">
                                                <li><a href="#">America</a></li>
                                                <li><a href="#">Brazil</a></li>
                                                <li><a href="#">Chile</a></li>
                                                <li><a href="#">Denmark</a></li>
                                                <li><a href="#">Europe</a></li>
                                                <li><a href="#">France</a></li>
                                                <li><a href="#">Germany</a></li>
                                                <li><a href="#">India</a></li>
                                                <li><a href="#">Italy</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <ul class="icons-list">
                                                <li><a href="#">Japan</a></li>
                                                <li><a href="#">Kenya</a></li>
                                                <li><a href="#">Mexico</a></li>                                   
                                                <li><a href="#">New Zealand</a></li>
                                                <li><a href="#">Portugal</a></li>
                                                <li><a href="#">Russia</a></li>
                                                <li><a href="#">Singapore</a></li>
                                                <li><a href="#">United Kingdom</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END CATEGORIES WIDGET -->


                                <!-- CATEGORIES WIDGET -->
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <h6 class="text-uppercase bottom-line">Information</h6>
                                        <ul class="icons-list">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Register your business</a></li>
                                            <li><a href="#">Policy Privacy</a></li>                                        
                                        </ul>
                                    </div>
                                </div>
                                <!-- END CATEGORIES WIDGET -->

                                <!-- CATEGORIES WIDGET -->
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <h6 class="text-uppercase bottom-line">GET the</h6>
                                        <ul class="icons-list">
                                           <!--  <li><a href="#">Fashion <span class="pull-right">12</span></a></li>
                                            <li><a href="#">Women <span class="pull-right">11</span></a></li>
                                            <li><a href="#">Men <span class="pull-right">10</span></a></li>
                                            <li><a href="#">Sport <span class="pull-right">13</span></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <!-- END CATEGORIES WIDGET -->

                                <!-- CATEGORIES WIDGET -->
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="widget">
                                        <h6 class="text-uppercase bottom-line">Contact</h6>
<!--                                         <p>Lorem ipsum dolor sit amet, Nunc aliquam justo et nibh venenatis aliquet.</p>
                                        <div class="newsletter">
                                            <form method="post" action="#">
                                                <input placeholder="Email address..." name="email" class="follow-by-email-address" type="text">

                                                <a class="btn btn-product cd-cart-btn" href="#">Submit</a>
                                            </form>
                                        </div> -->
                                    </div>
                                </div>
                                <!-- CATEGORIES WIDGET -->
                            </div>

                            <!-- CONTACT WIDGET -->
                            <div class="copyright">
                                <div class="col-sm-6 pull-left">
                                    <p>Copyright &copy; 2019-2020 <a href="https://eximbni.com/eximbniweb">Eximbni.com</a>.</strong>
    All rights reserved.</p>
                                </div>

                                <div class="col-sm-6">
                                    <div class="payment pull-right">
                                        <img src="img/payment-1.png" alt="Payment-1">
                                        <img src="img/payment-2.png" alt="Payment-2">
                                        <img src="img/payment-3.png" alt="Payment-3">
                                        <img src="img/payment-4.png" alt="Payment-4">
                                        <img src="img/payment-5.png" alt="Payment-5">
                                    </div>

                                </div>

                            </div>
                        </div>
                    </footer>
                    <!-- END FOOTER-->     
                </div>
                <!-- End  Wraper -->
            </div>
        </div>       
        <!-- JQUERY LIBS -->
        <script type="text/javascript"  src="js/jquery.min.js"></script>
        <!-- BOOTSTRAP -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- OWL CAROUSEL -->
        <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>

        <script type="text/javascript" src="plugins/FlexSlider1/jquery.flexslider-min.js"></script>
        <!-- filter PORTFOLIO -->
        <script type="text/javascript" src="js/filter.js"></script>
        <!-- MAGNIFIC POPUP-->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- MAGNIFIC POPUP  -->
        <script type="text/javascript" src="js/magnific-popup.min.js"></script>
        <!-- easypiechart.min-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!-- slick-->
        <script type="text/javascript" src="js/slick.js"></script>
        <!-- slick-slider-->
        <script type="text/javascript" src="js/slick-slider.js"></script>
        <!-- CUSTOM-->
        <script type="text/javascript" src="js/custom.js"></script>
        <!-- Select2 -->
        <script src="plugins/select2/js/select2.full.min.js"></script>
        <!--[if lt IE 9]>
        <script src="respond.js"></script>
        <script src="html5shiv.js"></script>
        <![endif]-->

<!-- Start Login / Sign In Modal -->

  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="col-md-12 col-sm-6 text-center ">
                <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" />
            </div>           
        </div>
        <div class="modal-body">
            <span >{{ message }} </span>
          <form name="loginForm" ng-submit="login()">
            <div class="form-group">
                <input type="text" name="emailname" class="form-control input" placeholder="Username" ng-model="user.email" ng-pattern="eml_add" ng-required="true" autocomplete="off">
                <span class="red-text" ng-if="loginForm.emailname.$error.required && loginForm.emailname.$dirty">Username is required</span><span class="red-text" ng-show="loginForm.emailname.$error.pattern">Please enter valid username</span>
                <span ng-show="errorUserName">{{errorUserName}}</span> 
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" ng-model="user.password" ng-required="true" autocomplete="off" >
                <span ng-show="errorPassword">{{errorPassword}}</span>
            </div>
            <button type="submit" class="btn cd-btn top-cat-search btn-block" style="border-radius:50PX" > Sign In </button>
            <div class="form-group">
               <a href="#" data-toggle="modal" data-target="#forgotpassModal" data-dismiss="modal" data-backdrop="static" data-keyboard="false"> Forgot Password? </a>
            </div>
            <button type="button" class="btn btn-outline" data-toggle="modal" data-target="#signupModal" data-dismiss="modal"  data-backdrop="static" data-keyboard="false" >New to Site? Register</button>
          </form>           
        </div>

      </div>
    </div>
  </div>

<!-- End Login / Sign In Modal -->



<!-- Start Forgot Password Modal -->

  <div class="modal fade" id="forgotpassModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="col-md-12 col-sm-6 text-center ">
                <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" />
            </div>           
        </div>
        <div class="modal-body" >
          <form name="forgotpassForm" ng-submit="forgotpass()">
            <div class="form-group">
               <p align="center"> Enter The Mobile Number Associate With Your Account </p>
               <p align="center" style="color: red;"> We will send you a link to reset your password </p>
               <p > <span class="red-text"> {{ forgotpassmsg }}</span> </p>
            </div>
            <div class="form-group">
               <input type="text" class="form-control input" ng-model="user.countrycode" name="countrycode" placeholder="Enter country code" ng-pattern="country_code"  ng-required="true" autocomplete="off">
               <span class="red-text" ng-if="forgotpassForm.countrycode.$error.required && forgotpassForm.countrycode.$dirty">Country code is required</span>
               <span class="red-text" ng-show="forgotpassForm.countrycode.$error.pattern">Please enter country code</span>
            </div>
            <div class="form-group">
               <input type="text" class="form-control input" ng-model="user.mobile" name="mobile" placeholder="Enter mobile number" ng-pattern="mob_numbr" ng-required="true" autocomplete="off" >
               <span class="red-text" ng-if="forgotpassForm.mobile.$error.required && forgotpassForm.mobile.$dirty">Mobile number is required</span>
            <span class="red-text" ng-show="forgotpassForm.mobile.$error.pattern">Please enter a 10 digit number</span>
            </div>
            <button type="submit" class="btn cd-btn top-cat-search btn-block" >Get OTP</button>
            
          </form>           
        </div>

      </div>
    </div>
  </div>


<!-- End Forgot Password Modal -->


<!-- Start Forget Password OTP Verify Modal -->


  <div class="modal fade" id="optverifyModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="col-md-12 col-sm-6 text-center ">
                <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" />
            </div>           
        </div>
        <div class="modal-body" >
          <form name="verifyForm" ng-submit="verifyotp()">
            <div class="form-group">
               <p align="center"> Enter The Verification code. We just sent you on your mobile </p>
               <p  align="center" class="red-text" > {{ verifymsg }} </p>
            </div>
           
            <div class="form-group">
               <input type="text" class="form-control input" name="votp" id="votp" ng-model="votp" placeholder="Enter OTP" ng-pattern="verify_code"  ng-required="true" autocomplete="off" >
               <input type="hidden" class="form-control input" ng-model="mobileno1" name="mobileno1" value="{{ mobile}}">
               <input type="hidden" class="form-control input" ng-model="mobileno" name="mobileno" value="{{ mobile}}">
               <span class="red-text" ng-if="verifyForm.votp.$error.required && verifyForm.votp.$dirty">OTP is required</span>
               <span class="red-text" ng-show="verifyForm.votp.$error.pattern">Please enter OTP</span>
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-block" >Verify</button>
            </div>  
            
            <div class="form-group">
               <p align="center" class="red-text"  ng-click='resendotp()' > Resend OTP </p>
            </div>            
          </form>           
        </div>
      </div>
    </div>
  </div>


<!-- End Forget Password OTP Verify Modal -->



<!-- Start Set Password Modal -->


  <div class="modal fade" id="setpasswordModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="col-md-12 col-sm-6 text-center ">
                <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" />
            </div>           
        </div>
        <div class="modal-body" >
          <form name="setpasswordForm" ng-submit="setpassword()">

                <div class="form-group">
                    <label for="inputPasswordNew">New Password</label>
                    <input type="password" class="form-control" id="newpassword" ng-model="newpassword" required=""autocomplete="off" >
                </div>
                <div class="form-group">
                    <label for="inputPasswordNewVerify">Verify</label>
                    <input type="text" class="form-control" id="passwordVerify" ng-model="passwordVerify" required="" ng-change="verifyfun();" autocomplete="off">
                    <span class='text-danger'> {{ errormsgs }} </span> <span class='text-success'> {{ successmsgs }} </span>       
                </div>

            <div class="form-group">
               <button type="submit" class="btn btn-block" > Save Password </button>
            </div>  

         
          </form>           
        </div>
      </div>
    </div>
  </div>


<!-- End Set Password Modal -->





<!-- Start Sign Up Modal -->

  <div class="modal fade" id="signupModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="col-md-12 col-sm-6 text-center ">
                <!-- <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" /> -->
                <h4> Create An Account</h4>
                {{ signupmsg }}
            </div>           
        </div>
        <div class="modal-body" >
            <div class="row">
                <form name="signupFrom" ng-submit="signup()">
                    
                        <div class="form-group col-sm-12">
                          <h6 > Personal Details </h6>
                        </div>
                    <div class="row col-sm-12" style="margin-left:5px">
                        <div class="form-group col-sm-4">   
                            <input type="text" class="form-control input" ng-model="user.fullname" name="fullname" placeholder="Enter Fullname" ng-pattern="fname_valid" ng-required="true" autocomplete="off" required="required">
                            <span class="red-text" ng-if="signupFrom.fullname.$error.required && signupFrom.fullname.$dirty">Fullname is required</span><!-- <span class="red-text" ng-show="signupFrom.fullname.$error.pattern">Please enter alphabets </span> -->
                        </div>
                        <div class="form-group col-sm-4">    
                            <input type="text" class="form-control input" ng-model="user.email" name="emailname" placeholder="Email"  ng-pattern="eml_add" ng-required="true" autocomplete="off" required="required">
                            <span class="red-text" ng-if="signupFrom.emailname.$error.required && signupFrom.emailname.$dirty">Email is required</span><span class="red-text" ng-show="signupFrom.emailname.$error.pattern">Please enter valid email</span>
                        </div>

                        <div class="form-group col-sm-4">
                            <input type="password" class="form-control input" ng-model="user.password" name="password" placeholder="Enter Password" ng-pattern="password_valid" ng-required="true" autocomplete="off" required="required">
                            <span class="red-text" ng-if="signupFrom.password.$error.required && signupFrom.password.$dirty">Password is required</span><span class="red-text" ng-show="signupFrom.password.$error.pattern">Password requires one lower case letter, one upper case letter, one digit, 8-15 length, and no spaces.</span>                                               
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <h6 > Business Details </h6>
                    </div>

                    <div class="row col-sm-12" style="margin-left:5px">
                        <div class="form-group col-sm-4">
                           <input type="text" class="form-control input" ng-model="user.company" name="company" placeholder="Enter Business Name"  ng-required="true" autocomplete="off" required="required">
                        </div>

                        <div class="form-group col-sm-4">
                           <input type="text" class="form-control input" ng-model="user.address" name="address" placeholder="Enter Address"  ng-required="true" autocomplete="off" required="required">
                        </div>

                        <div class="form-group col-sm-4">
                           <input type="text" class="form-control input" ng-model="user.zipcode" name="zipcode" placeholder="Enter Zip Code"  ng-pattern="zip_code" ng-required="true" autocomplete="off" required="required">
                           <span class="red-text" ng-if="signupFrom.zipcode.$error.required && signupFrom.zipcode.$dirty">Zip code is required</span>
                            <span class="red-text" ng-show="signupFrom.zipcode.$error.pattern">Please enter zipcode</span>
                        </div>
                    </div>

                    <div class="row col-sm-12" style="margin-left:5px" >
                        <div class="form-group col-sm-4">
                           <input type="text" class="form-control input" ng-model="user.mobile" name="mobile" placeholder="Enter Mobile Number" ng-pattern="mob_numbr" ng-required="true" autocomplete="off" required="required">
                           <input type="hidden" class="form-control input" ng-model="user.long" name="long" ng-init="long=7744966820"  >
                           <input type="hidden" class="form-control input" ng-model="user.lat" name="lat" ng-init="lat=7744966820"  >
                           <input type="hidden" class="form-control input" ng-model="user.device_id" name="device_id" ng-init="device_id=7744966820"  >
                           <span class="red-text" ng-if="signupFrom.mobile.$error.required && signupFrom.mobile.$dirty">Mobile number is required</span>
                            <span class="red-text" ng-show="signupFrom.mobile.$error.pattern">Please enter mobile number</span>
                        </div>

                        <div class="form-group col-sm-4" >
                            <select class="form-control" ng-model="user.country" name="country" ng-change="countrySelected()" required="required"> 
                                <option value="">Select Country</option>
                                <option ng-repeat="country in countries | orderBy : name " value="{{ country.country_id}}"> {{ country.name }}</option>
                            </select>
                        </div>   
                        <div class="form-group col-sm-4" ><!-- ng-pattern="fname_valid"  -->
                            <select class="form-control" ng-model="user.state" name="statelist" required="required">
                                <option value="">Select State</option>
                                <option ng-repeat="soption in stateoption" value="{{soption.zone_id }}"> {{soption.name }}</option>
                                <!--  <option ng-repeat="scountry in  | orderBy : name " > {{ scountry.name }}</option> -->
                            </select>             
                        </div>
                    </div>

                    <div class="row col-sm-12" style="margin-left:5px">  
                        <div class="form-group col-sm-4"><!-- ng-pattern="fname_valid"  -->
                            <select class="form-control input" ng-model="user.user_type" name="user_type" required="required">
                                <option value="">Select User Type</option>
                                <option value="Buyer">Buyer</option>
                                <option value="Seller">Seller</option>
                                <option value="Both">Both</option>
                            </select>
                        </div>  
                        <div class="form-group col-sm-8">
                           &nbsp;
                        </div>  
                    </div>
 
                    <div class="row col-sm-12">
                        <div class="form-group col-sm-4">
                           &nbsp;
                        </div>                
                        <div class="form-group col-sm-4">
                            <!-- <button type="submit" class="btn btn-block" data-dismiss="modal">Close</button> -->
                             Already a Member? <a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal" > Sign in </a>
                        </div>                                  
                        <div class="form-group col-sm-4">
                            <button type="submit" name="signup" id="signup" class="btn cd-btn top-cat-search btn-block form-group col-sm-3" >Sign Up </button>
                           
                        </div>
                    </div>

                </form>
            </div>  
        </div>

      </div>
    </div>
  </div>


<!-- End Sign Up Modal -->

<!-- Start Signup  Verify Modal -->


  <div class="modal fade" id="signupoptverifyModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="col-md-12 col-sm-6 text-center ">
                <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" />
            </div>           
        </div>
        <div class="modal-body" >
          <form name="signupverifyForm" ng-submit="signupverifyotp()">
            <div class="form-group">
               <p align="center"> Enter The Verification code. We just sent you on your mobile </p>
               <p  align="center" class="red-text" > {{ signverifymsg + message}} </p>
            </div>
           
            <div class="form-group">
               <!--  <input type="text" class="form-control input" ng-model="storagemobile"  value="{{storagemobile}}" readonly="">
 -->
               <input type="text" class="form-control input" name="signvotp" id="signvotp" ng-model="signvotp" placeholder="Enter OTP" ng-pattern="signverify_code"  ng-required="true" autocomplete="off" >
               <span class="red-text" ng-if="signupverifyForm.signvotp.$error.required && signupverifyForm.signvotp.$dirty">OTP is required</span>
               <span class="red-text" ng-show="signupverifyForm.signvotp.$error.pattern">Please enter OTP</span>
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-block" id="verifybtn">Verify</button>
            </div>  
            <p align="center" class="red-text" id="otptimer"> </p>
            <div class="form-group">
               <p align="center" class="red-text"  ng-click='signupresendotp()' > Resend OTP </p>
            </div>            
          </form>           
        </div>
      </div>
    </div>
  </div>


<!-- End  Signup Verify Modal -->


<!-- Start Add Packages Modal -->


  <div class="modal fade" id="addpackageModal" role="dialog" style="overflow: auto;">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Subscribe Packages!</h3> {{ message }}
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" >
            <form name="addpackageForm" ng-submit="addpackage()">
                 <div class="table-responsive">
                    <table border="1" class="table" width="100%">
                        <tbody>
                            <tr>
                                <th class="col-md-3"> Features/Pack($) </th> 
                                <th ng-repeat="heads in subscriplist"> {{heads.plan_name}}</th>
                            </tr>                            
                            <tr >
                                <td class="col-md-3"> Banners</td>
                                <td ng-repeat="banr in subscriplist" > {{banr.banners}} </td>
                            </tr>
                            <tr>
                                <td class="col-md-3" > Chapters</td>
                                <td ng-repeat="cht in subscriplist" > {{cht.chapters}} 
                                    <input type="hidden" id="upgchapter_{{cht.id }}" value="{{ cht.chapters }}">
                                </td>
                            </tr>
                            <tr>
                                <td class="col-md-3"> HS Codes</td>
                                <td ng-repeat="hco in subscriplist" > {{hco.hscodes}} 
                                    <input type="hidden" id="upghscode_{{hco.id }}" value="{{ hco.hscodes }}">
                                </td>
                            </tr>  
                            <tr>
                                <td class="col-md-3" > Chat</td>
                                <td ng-repeat="cha in subscriplist" > {{cha.chat}} </td>
                            </tr>
                            <tr>
                                <td class="col-md-3"> Credits</td>
                                <td ng-repeat="crd in subscriplist" > {{crd.credits}} 
                                    <input type="hidden" id="cred_{{crd.id }}" value="{{ crd.credits }}">
                                </td>
                            </tr>
                            <tr>
                                <td class="col-md-3"> Inbox</td>
                                <td ng-repeat="inb in subscriplist" > {{inb.inbox}} </td>
                            </tr> 

                            <tr>
                                <td class="col-md-3"> Leadpost</td>
                                <td ng-repeat="lpost in subscriplist" > {{lpost.leadpost}} </td>
                            </tr>

                            <tr>
                                <td class="col-md-3"> Notifications</td>
                                <td ng-repeat="noti in subscriplist" > {{noti.notifications}} </td>
                            </tr>
                            <tr>
                                <td class="col-md-3"> Duration</td>
                                <td ng-repeat="pland in subscriplist" > {{pland.plan_duration}} 
                                    <input type="hidden" id="dura_{{pland.id }}" value="{{ pland.plan_duration }}">
                                </td>
                            </tr>  
                            <tr>
                                <td> Webinar</td>
                                <td ng-repeat="webi in subscriplist" > {{webi.webinar}} </td>
                            </tr>

                            <tr>
                                <td> </td>
                                <td ng-repeat="btnid in subscriplist" > <input type="button"  value="GET" class="btn btn-success" ng-click="getcol(btnid.id)" > </td>
                            
                            </tr> 

                        </tbody>
                    </table>

                    <div class="upgrade">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <label> Chapters <span class="">*</span></label>
                        <div class="select2-green">
                            <input type="hidden" ng-model="pack_id" id="pack_id">
                            <input type="hidden" ng-model="duration" id="duration">
                            <input type="hidden" ng-model="credits" id="credits">

                          <select  multiple="multiple" name="chapter[]" id="chapter" style="width:100%; height:170px; " ng-model="subcribechapters" ng-change="gethscode()">
                            <option value="">Select Chapters</option>
                            <option ng-repeat="chap in subcrichapterlist" value="{{ chap.id }}"> {{ chap.chapter_name }}</option>                                                                      
                          </select>
                          <input type="hidden" id="chaptermaxlength" ng-model="chaptermaxlength">
                        </div>
                      </div>
                      <!-- /.form-group -->
                    </div>

                    <div class="upgrade">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>HS Code <span class="">*</span></label>
                        <div class="select2-green">
                          <select  multiple="multiple" name="hscode[]" id="hscode" ng-model="subcribehscode" style="width:100%; height:170px;" ng-change="hscodemaxlen();" > <!-- ng-change="hscodemaxlen()" -->
                            <option value="">Select HS Code</option>
                            <option ng-repeat="shsc in subcrihscodelist" value="{{ shsc.hscode }}"> {{ shsc.hscode }}</option>

                          </select>
                          <input type="hidden" id="hscodemaxlength" ng-model="hscodemaxlength">
                        </div>
                      </div> 
                    </div>

                    <div class="row upgrade">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-block" >Add Package</button>
                        </div> 
                    </div>    

                 </div>    
            </form>
        </div>

                 
      </div>

    </div>
  </div>


<!-- End  Add Packages Modal -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<script>
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
   window.alert("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
 window.alert("Your Latitude: " + position.coords.latitude + 
  "your Longitude: " + position.coords.longitude);
}
</script>

</body>

<!-- Mirrored from demo.craftdzine.com/html/giftshop/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jan 2020 12:13:53 GMT -->
</html>