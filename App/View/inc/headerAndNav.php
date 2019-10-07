
<header  class="ms-header ms-header-primary">
    <div class="">
    <div class="row" >
    <div class="col-9 col-sm-5 col-md-6 col-lg-5" >
        <div class="ms-title">
    <a href="<?php echo ROOT_PATH; ?>">
    <img src="<?php echo ROOT_PATH; ?>/public/logo.png" alt="Coding Keeda" width="90px" class="logoimg animated fadeInLeft animation-delay-7">      
    <h1 id="ms-heading" class="animated flip animation-delay-7" >Coding Keeda</h1>
  </a>
   </div>
     </div>
  <div class="col-3 col-sm-7 col-md-6 col-lg-7">
  <div class="right-header">
   <div class="socialmenu" >
    <ul class="socialmenulist">
  <li>
<a href="https://www.facebook.com/Codingkeeda1/" class="btn-circle btn-circle-primary animated fadeInRight "  >
<i class="zmdi zmdi-facebook"></i>
</a>
</li>
<li>
  <a href="https://github.com/ThePardeep" class="btn-circle btn-circle-primary animated fadeInRight "  >
  <i class="zmdi zmdi-github "></i>
</a>
 </li>
<li>
      <a href="https://twitter.com/coding_keeda" class="btn-circle btn-circle-primary animated fadeInRight ">
<i class="zmdi zmdi-twitter "></i>
 </a>
 </li>
    </ul>
 <a id="iconsdesignshare" class="btn-circle btn-circle-primary  animated zoomInDown animation-delay-7" href="javascript:void(0)">
<i class="zmdi zmdi-share "></i>
</a>
</div>
<a href="<?php echo ROOT_PATH; ?>/login" id="iconsdesignperson" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
<i class="zmdi zmdi-account  "></i>
</a>
<a href="javascript:void(0)" id="iconsdesignmenu" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
<i class="zmdi zmdi-menu "></i>
</a>
</div>
</div>
</div>
</div>
</header>

<!-- Navbar -->

<nav class="mys-nav nav mys-nav-primary" id="navbar">
<div class="container ">
<div class="desktopnavbar">
<div class="row ">
<div class="col-7 col-sm-11 col-md-8">
<div class="navlinklist">
<a  href="<?php echo ROOT_PATH; ?>">Home</a>
<a href="<?php echo ROOT_PATH; ?>/about">About Us</a>
<a href="<?php echo ROOT_PATH; ?>/contactus">Contact Us</a>                            
</div>
</div>

<div class="col-5 col-sm-1 col-md-4 ">

<div class="search-form">
  <form class="" action="<?php echo ROOT_PATH; ?>/search/" method="GET" >
      <input type="text" name="search_query" id="SearchQuery" class="" placeholder="Search Here ..">
      <button type="submit" id="SubmitSearchQuery" > <span> <i class="zmdi zmdi-search" ></i></span> </button>
  </form>
</div>

<div class="searchbuttonfor-mdsize">
    <div >
            <a href="javascript:void(0)"  id="searchbutton" class="btn-circle btn-circle-primary ">
                    <i class="zmdi zmdi-search "> </i>
                    </a>
    </div>
</div>

</div>
</div>
</div>
</div>
</nav>

<div class="searchformfor-mdsmsize " id="TopSearchForm">

<div class="container">
    <div>
             <div class="row">
                 <div class="col-12">
                        <div class="ms-searchform">
                                <form  action="<?php echo ROOT_PATH; ?>/search/" method="GET" >
                                        <input name="search_query" type="text" id="SearchQuery1"  placeholder="Search Here ..">
                                        <button type="submit" id="SubmitSearchQuery1" > <span> <i class="zmdi zmdi-search" ></i></span> </button>
                                </form>
                                
                        </div>
                        <hr style="border: 2px solid #00bb77;">
                 </div>
             </div>
    </div>
    
</div>

</div>

<div class="sidebar-menu">
 <div class="sidebar-linklist">
     <button class=" btn-circle btn-circle-primary " id="sidebar-linklistbtn"> <i class="zmdi zmdi-close"></i> </button>
     <ul>
         <li class="animated slideInRight" ><a href="<?php echo ROOT_PATH; ?>">Home</a></li>
         <li class="animated slideInRight" ><a href="<?php echo ROOT_PATH; ?>/contactus">Projects</a></li> 
         <li class="animated slideInRight" ><a href="<?php echo ROOT_PATH; ?>/contactus">Contact Us</a></li> 
     </ul>
    
 </div>
</div>

