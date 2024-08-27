<?php include 'includes/header.php' ?>
<link rel="stylesheet" href="assets/css/ajay-home.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<style>
.perpallet {
    font-family: "Anton", sans-serif;
    font-weight: 400;
    font-style: normal;
}

.soda {
    --left: 0px;
    background: var(--url) var(--left), url(assets/img/bg.gif) 0 0;
    background-size: auto 100%;
    width: 550px;
    height: 350px;
    aspect-ratio: 2 / 4;
    background-blend-mode: multiply;
    transition: 0.8s;
    mask-image: url(assets/img/bg.gif);
    mask-size: auto 100%;
    border-radius: 17%;
    background-size: contain;
    background-repeat: no-repeat;
    margin-left: 7%;
    margin-bottom: 11%;
}

video {
    transition: all 0.5s ease-in-out;
    position: relative;
    z-index: 1;
}

video.fullscreen {
    position: fixed;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100%;
    z-index: 1000;
    margin: 0 !important;
}


.additional-text {
    position: absolute;
    top: 80%;
    left: 0;
    transform: translateY(-50%);
    opacity: 0;
    transition: opacity 1.5s ease, left 1.5s ease;
    color: white;
    border-radius: 5px;
    z-index: 0;
}

.hover-image {
    transition: transform 1.5s ease;
    position: relative;
}

.team-grid:hover .hover-image {
    transform: translateX(270px);
}

.team-grid:hover .additional-text {
    opacity: 1;
    left: 170px;
}
</style>
<div class="hero-2" id="hero">
    <div class="hero2-overlay"></div>
    <div class="swiper hero-slider-2" id="heroSlide2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">
                    <video id="video1" loop muted style="width: 49.5%;">
                        <source src="assets/img/hero/home_banner.mp4" type="video/mp4">
                    </video>
                    <video id="video2" loop muted style="width: 50%; margin-left: 50%;">
                        <source src="assets/img/hero/build_shoot.mp4" type="video/mp4">
                    </video>
                    <div class="container">
                        <div class="hero-style2" style="visibility: hidden;">
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Discover <span
                                    class="hero-text">The beauty of world</span></h1>
                            <p class="hero-desc" data-ani="slideinup" data-ani-delay="0.5s">Tourm an international
                                travel management company with 25 years of experience, specializing in business and
                                maritime travel.</p>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="destination.html"
                                    class="th-btn white-btn th-icon">Explore Tours</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-swiper-custom">
            <div class="swiper-pagination"></div>
            <div class="hero-icon"></div>
        </div>
    </div>
    <div class="swiper heroThumbs" style="max-width: 100%;">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner" style="width: 70%;margin-left: 17%;">
                    <div class="hero-card">
                        <div class="hero-img"><img src="assets/img/services/logistics.jpg" alt=""
                                style="border: 3px solid white;padding: 3%;"></div>
                        <div class="hero-card_content">
                            <h3 class="box-title">Sat Kabir Logistics Pvt. Ltd.</h3>
                            <h4 class="hero-card_price"><span class="currency">Logistics</span> Services</h4><a
                                href="destination-details.html" class="th-btn style2" style="background: #113d4a;">Know
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-inner" style="width: 70%;margin-left: 17%;">
                    <div class="hero-card">
                        <div class="hero-img"><img src="assets/img/hero/drain.jpg" alt=""
                                style="border: 3px solid white; padding: 3%;"></div>
                        <div class="hero-card_content">
                            <h3 class="box-title">SKL Build India Pvt. Ltd.</h3>
                            <h4 class="hero-card_price"><span class="currency">Precast</span> Solutions</h4><a
                                href="destination-details.html" class="th-btn style2" style="background: #113d4a;">Know
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- <div class="about-area position-relative overflow-hidden overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row" id="aboutAnimation">
            <div class="col-xl-7">
                <div class="img-box3">
                    <div class="img1" style="width: 61%;"><img src="assets/img/normal/about1.jpg" alt="About"></div>
                    <div class="img2" style="width: 61%;"><img src="assets/img/normal/about2.jpg" alt="About"></div>
                    <div class="img3 movingX" style="width: 51%;margin-top: 7%;"><img src="assets/img/normal/about3.jpg"
                            alt="About"></div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="ps-xl-4">
                    <div class="title-area mb-20" id="welcomeSkl"><span class="sub-title style1">Welcome To SKL</span>
                    </div>
                    <p class="pe-xl-5">There are many variations of passages of available but the majority have
                        suffered alteration in some form, by injected hum randomised words.</p>
                    <div class="about-item-wrap">
                        <div class="about-item style2">
                            <div class="about-item_img"><img src="assets/img/icon/about_1_1.svg" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Logistics Solutions</h5>
                                <p class="about-item_text">There are many variations of passages of available but
                                    the majority.</p>
                            </div>
                        </div>
                        <div class="about-item style2">
                            <div class="about-item_img"><img src="assets/img/icon/about_1_2.svg" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Build Solutions</h5>
                                <p class="about-item_text">There are many variations of passages of available but
                                    the majority.</p>
                            </div>
                        </div>
                        <div class="about-item style2">
                            <div class="about-item_img"><img src="assets/img/icon/about_1_3.svg" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Relators</h5>
                                <p class="about-item_text">There are many variations of passages of available but
                                    the majority.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-35"><a href="contact.html" class="th-btn style3 th-icon">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup movingX d-none d-xxl-block" data-top="4%" data-left="2%"><img
            src="assets/img/shape/shape_2_1.png" alt="shape"></div>
    <div class="shape-mockup jump d-none d-xxl-block" data-top="28%" data-right="5%"><img
            src="assets/img/shape/shape_2_2.png" alt="shape"></div>
    <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="2%"><img
            src="assets/img/shape/shape_2_3.png" alt="shape"></div>
    <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="18%" data-right="2%"><img
            src="assets/img/shape/shape_2_4.png" alt="shape"></div>
</div> -->

<div class="about-area position-relative overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <a href="#">
                    <div class="team-grid" style="background-color: #81a7ae;text-align: left;padding: 4%">
                        <h3 style="color:white;text-align: center;">Logistics Services</h3>
                        <p style="color:white;">We offer streamlined logistics management, ensuring optimal efficiency
                            across your supply chain. With our tailored solutions, you can focus on your core business
                            while we handle the logistics.</p>
                        <p><img src="assets/img/icon/arrow-button.png" alt="" class="hover-image"></p>
                        <span class="additional-text"><b>KNOW MORE</b></span>
                    </div>
                </a>
            </div>
            <!-- Second Section -->
            <div class="col-xl-4 col-md-4">
                <a href="#">
                    <div class="team-grid" style="background-color: #113d45;text-align: left;padding: 4%">
                        <h3 style="color:white;text-align: center;">Warehouse Services</h3>
                        <p style="color:white;">We offer streamlined logistics management, ensuring optimal efficiency
                            across your supply chain. With our tailored solutions, you can focus on your core business
                            while
                            we handle the logistics.</p>
                        <p><img src="assets/img/icon/arrow-button.png" alt="" class="hover-image"></p>
                        <span class="additional-text"><b>KNOW MORE</b></span>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-md-4">
                <a href="#">
                    <div class="team-grid" style="background-color: #81a7ae;text-align: left;padding: 4%">
                   
                        <h3 style="color:white;text-align: center;">Construction Services</h3>
                        <p style="color:white;">We offer streamlined logistics management, ensuring optimal efficiency
                            across your supply chain. With our tailored solutions, you can focus on your core business
                            while
                            we handle the logistics.</p>
                        <p><img src="assets/img/icon/arrow-button.png" alt="" class="hover-image"></p>
                        <span class="additional-text"><b>KNOW MORE</b></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="destination-area bg-top-center position-relative" id="destination-sec"
    data-bg-src="assets/img/bg/line-pattern2.png">
    <div class="container">
        <div class="title-area text-center"><span class="sub-title"></span>
            <h2 class="sec-title">SKL Group</h2>
        </div>
        <div class="row">
            <div class="destination-list-area">
                <div class="destination-list-wrap">
                    <div class="destination-list" data-bg-src="assets/img/services/warehouse.jpg">
                        <div class="destination-content">
                            <h4 class="box-title"><a href="destination-details.html">Zenith Warehousing Pvt. Ltd.</a>
                            </h4>
                            <span class="destination-subtitle">28 Listing</span>
                        </div><a href="destination-details.html" class="th-btn style2">Know More</a>
                    </div>
                </div>
                <div class="destination-list-wrap">
                    <div class="destination-list" data-bg-src="assets/img/services/realtors.jpg">
                        <div class="destination-content">
                            <h4 class="box-title"><a href="destination-details.html">SKL Realtors Pvt. Ltd.</a></h4>
                            <span class="destination-subtitle">15 Listing</span>
                        </div><a href="destination-details.html" class="th-btn style2">Know More</a>
                    </div>
                </div>
                <div class="destination-list-wrap">
                    <div class="destination-list" data-bg-src="assets/img/services/construction.jpg">
                        <div class="destination-content">
                            <h4 class="box-title"><a href="destination-details.html">SKL Build India Pvt. Ltd.</a></h4>
                            <span class="destination-subtitle">22 Listing</span>
                        </div><a href="destination-details.html" class="th-btn style2">Know More</a>
                    </div>
                </div>
                <div class="destination-list-wrap active">
                    <div class="destination-list" data-bg-src="assets/img/services/logistics.jpg">
                        <div class="destination-content">
                            <h4 class="box-title"><a href="destination-details.html">Sat Kabir Logistics Pvt. Ltd.</a>
                            </h4>
                            <span class="destination-subtitle">25 Listing</span>
                        </div><a href="destination-details.html" class="th-btn style2">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup movingX d-none d-xl-block" data-top="8%" data-left="5%"><img
            src="assets/img/shape/shape_2_1.png" alt="shape"></div>
    <div class="shape-mockup jump d-none d-xl-block" data-top="23%" data-right="4%"><img
            src="assets/img/shape/shape_2_2.png" alt="shape"></div>
    <div class="shape-mockup spin d-none d-xl-block" data-bottom="21%" data-left="4%"><img
            src="assets/img/shape/shape_2_3.png" alt="shape"></div>
    <div class="shape-mockup movingX d-none d-xl-block" data-bottom="12%" data-right="4%"><img
            src="assets/img/shape/shape_2_4.png" alt="shape"></div>
</div>

<div class="counter-sec2 space" data-bg-src="assets/img/bg/line-pattern2.png">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card" style="background-color: #113d48;">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number" style="color: white;"><span class="counter-number">12</span></h3>
                        <h6 class="counter-title" style="color: white;">Years Experience</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card" style="background-color: #113d48;">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number" style="color: white;"><span class="counter-number">97</span>%</h3>
                        <h6 class="counter-title" style="color: white;">Retention Rate</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card" style="background-color: #113d48;">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number" style="color: white;"><span class="counter-number">8</span>k</h3>
                        <h6 class="counter-title" style="color: white;">Tour Completed</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 counter-card-wrap">
                <div class="counter-card" style="background-color: #113d48;">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number" style="color: white;"><span class="counter-number">19</span>k</h3>
                        <h6 class="counter-title" style="color: white;">Happy Travellers</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup shape1 d-none d-xl-block" data-top="40%" data-left="2%"><img
            src="assets/img/shape/shape_1.png" alt="shape"></div>
    <div class="shape-mockup shape2 d-none d-xl-block" data-top="50%" data-left="2%"><img
            src="assets/img/shape/shape_2.png" alt="shape"></div>
    <div class="shape-mockup shape3 d-none d-xl-block" data-top="47%" data-left="7%"><img
            src="assets/img/shape/shape_3.png" alt="shape"></div>
    <div class="shape-mockup spin d-none d-xl-block" data-bottom="12%" data-right="19%"><img
            src="assets/img/shape/shape_2_3.png" alt="shape"></div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="30%" data-right="4%"><img
            src="assets/img/shape/shape_2_2.png" alt="shape"></div>
    <div class="shape-mockup dance2 d-none d-xl-block" data-bottom="10%" data-right="3%"><img
            src="assets/img/shape/shape_2_5.png" alt="shape"></div>
</div>
<!-- <h2 class="text">Scroll TO See Magic</h2> -->
<!-- <section id="secid">
        <h2 class="innertext">Scroll TO See Magic</h2>
    </section> -->

<div id="main">
    <div id="top">
        <h1 id="top-h1" style="top: 72.9726%">INTRODUCING</h1>
    </div>
    <div id="center">
        <div class="content">
            <h2 class="perpallet" style="text-align:center;font-size: 7.5em;background: -webkit-linear-gradient(#224e5b, #224e5b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">Per-Pallet</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p style="font-size:2rem;line-height:50px;color:#4b6f7a"><b>Lorem ipsum dolor sit
                                amet
                                consectetur
                                adipisicing elit. Itaque distinctio soluta
                                aut iure magnam libero ipsum fugit esse nulla nemo perferendis,dbwhbed dbdbd bwhbdq</b>
                        </p>
                        <button class="btn btn-lg" style="background:white;color:#4b6f7a"><b>Know More</b></button>
                    </div>
                    <div class="col-md-6"><img src="assets/img/services/logistics.jpg" alt=""
                            style="height:100%;width:80%;margin-left:15%;border-radius:20px;border: 3px solid white;padding: 1%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom">
        <h1 id="bottom-h1">INTRODUCING</h1>
    </div>
</div>

<!-- <section id="secid" class="">
        <div id="video-container">
        
            <video autoplay loop muted src="assets/img/hero/build_shoot.mp4"></video>
        </div>
        <div class="container" style="margin-top:-30%;">
            <div class="row">
                <div class="col-xl-12">
                    
                    <div class="wrapper2">
                        <p style="font-size : 5rem;color:white;z-index: 1;">We Offer</p>
                        <div class="words" style="font-size : 5rem;">
                            <span class="rotation-text">U Shape Drains</span>
                            <span class="rotation-text">Boundary Walls</span>
                            <span class="rotation-text">Real State</span>
                            <span class="rotation-text">FUN</span>
                            <span class="rotation-text">INCREDIBLE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<section id="secid">
    <h2 class="innertext perpallet">Precast</h2>
    <div class="row" style="width: 100%;margin-left: -100%;margin-top: 10%;" id="testhh">
        <div class="col-md-2"></div>
        <div class="col-md-4" id="precast-text"
            style="margin-top: 20%;font-size: 200%;color: white;line-height: 110%;opacity: 0;">
            <ul>
                <li>U-Shape Drains</li>
                <li>Boundary Walls</li>
                <li>Chambers</li>
                <li>Pillars</li>
            </ul> <br>
            <!-- <button class="btn btn-md" style="background-color: white;color: #113d4a;"><b>Know More</b></button> -->
            <button class="btn btn-lg my-2" style="background:white;color:#113d4a;font-weight: bolder;">Know
                More</button>
        </div>

        <div class="col-md-6"><img src="assets/img/banner/construction.jpg" alt="" style="padding: 20%;margin-top: 17%;">
        </div>
    </div>
    <!-- <p class="innertext">rfwnefjgrje</p> -->
</section>

<div class="gallery-area" style="margin-top: 10%;">
    <div class="container th-container">
        <div class="title-area text-center"><span class="sub-title">Make Your Tour More Pleasure</span>
            <h2 class="sec-title">Recent Gallery</h2>
        </div>
        <div class="row gy-10 gx-10 justify-content-center align-items-center">
            <div class="col-md-6 col-lg-2">
                <div class="gallery-card">
                    <div class="box-img global-img" style="padding: 0%;"><a href="assets/img/gallery/warehouse.jpg"
                            class="popup-image">
                            <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                src="assets/img/gallery/warehouse.jpg" alt="gallery image">
                        </a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="gallery-card">
                    <div class="box-img global-img" style="padding: 0%;"><a href="assets/img/gallery/gallery_1_2.jpg"
                            class="popup-image">
                            <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                src="assets/img/gallery/warehouse.jpg" alt="gallery image">
                        </a></div>
                </div>
                <div class="gallery-card">
                    <div class="box-img global-img" style="padding: 0%;"><a href="assets/img/gallery/gallery_1_3.jpg"
                            class="popup-image">
                            <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                src="assets/img/gallery/pillars.jpg" alt="gallery image">
                        </a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="gallery-card">
                    <div class="box-img global-img" style="padding: 0%;"><a href="assets/img/gallery/ushape-drain.jpg"
                            class="popup-image">
                            <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                src="assets/img/gallery/warehouse.jpg" alt="gallery image">
                        </a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="gallery-card">
                    <div class="box-img global-img" style="padding: 0%;"><a href="assets/img/gallery/ushape-drain.jpg"
                            class="popup-image">
                            <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                src="assets/img/gallery/pillars.jpg" alt="gallery image">
                        </a></div>
                </div>
                <div class="gallery-card">
                    <div class="box-img global-img" style="padding: 0%;"><a href="assets/img/gallery/boundary-wall.jpg"
                            class="popup-image">
                            <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                src="assets/img/gallery/boundary-wall.jpg" alt="gallery image">
                        </a></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <div class="gallery-card">
                    <div class="box-img global-img" style="padding: 0%;"><a href="assets/img/gallery/pillars.jpg"
                            class="popup-image">
                            <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                src="assets/img/gallery/pillars.jpg" alt="gallery image">
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-none d-xl-block" data-top="-25%" data-left="0%"><img src="assets/img/shape/line.png"
            alt="shape"></div>
    <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="3%"><img class="gmovingX"
            src="assets/img/shape/shape_4.png" alt="shape"></div>
</div>

<section class="category-area2 bg-top-center space">
    <div class="container th-container">
        <div class="title-area text-center"><span class="sub-title"></span>
            <h2 class="sec-title">Our Clients</h2>
        </div>
        <div class="swiper categorySlider2" id="categorySlide2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="category-card single2">
                        <div class="box-img global-img"><img src="assets/img/clients/test.png" alt="Image">
                        </div>
                        <h3 class="box-title"><a href="destination.html">GoodYear</a></h3><a class="line-btn"
                            href="destination.html">See more</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-card single2">
                        <div class="box-img global-img"><img src="assets/img/clients/dhl.jpeg" alt="Image">
                        </div>
                        <h3 class="box-title"><a href="destination.html">DHL</a></h3><a class="line-btn"
                            href="destination.html">See more</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-card single2">
                        <div class="box-img global-img"><img src="assets/img/clients/klassic.png" alt="Image">
                        </div>
                        <h3 class="box-title"><a href="destination.html">klassic</a></h3><a class="line-btn"
                            href="destination.html">See more</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-card single2">
                        <div class="box-img global-img"><img src="assets/img/clients/avery.png" alt="Image">
                        </div>
                        <h3 class="box-title"><a href="destination.html">Avery</a></h3><a class="line-btn"
                            href="destination.html">See more</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-card single2">
                        <div class="box-img global-img"><img src="assets/img/clients/honda.jpeg" alt="Image">
                        </div>
                        <h3 class="box-title"><a href="destination.html">Honda</a></h3><a class="line-btn"
                            href="destination.html">See more</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-card single2">
                        <div class="box-img global-img"><img src="assets/img/clients/indoco.jpeg" alt="Image">
                        </div>
                        <h3 class="box-title"><a href="destination.html">Indoco</a></h3><a class="line-btn"
                            href="destination.html">See more</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-card single2">
                        <div class="box-img global-img"><img src="assets/img/clients/kansai-nerolac.jpg" alt="Image">
                        </div>
                        <h3 class="box-title"><a href="destination.html">Nerolac</a></h3><a class="line-btn"
                            href="destination.html">See more</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-card single2">
                        <div class="box-img global-img"><img src="assets/img/clients/indoco.jpeg" alt="Image">
                        </div>
                        <h3 class="box-title"><a href="destination.html">Airbirds</a></h3><a class="line-btn"
                            href="destination.html">See more</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-card single2">
                        <div class="box-img global-img"><img src="assets/img/clients/honda.jpeg" alt="Image">
                        </div>
                        <h3 class="box-title"><a href="destination.html">Walking</a></h3><a class="line-btn"
                            href="destination.html">See more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="bg-smoke overflow-hidden space-top" id="blog-sec">
    <div class="container">
        <div class="mb-30 text-center text-md-start">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7">
                    <div class="title-area mb-md-0"><span class="sub-title">Blog and Article</span>
                        <h2 class="sec-title">News & Articles From SKL</h2>
                    </div>
                </div>
                <div class="col-md-auto"><a href="blog.html" class="th-btn style4 th-icon">See More Articles</a>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog-box th-ani">
                            <div class="blog-img global-img"><img src="assets/img/services/warehouse.jpg"
                                    alt="blog image">
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta"><a class="author" href="blog.html">July 05 2024</a> <a
                                        href="blog.html">6 min read</a></div>
                                <h3 class="box-title"><a href="blog-details.html">10 Reason why you should visit New
                                        Jersy</a></h3><a href="blog-details.html" class="th-btn style4 th-icon">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-box th-ani">
                            <div class="blog-img global-img"><img src="assets/img/services/realtors.jpg"
                                    alt="blog image">
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta"><a class="author" href="blog.html">July 06 2024</a> <a
                                        href="blog.html">7 min read</a></div>
                                <h3 class="box-title"><a href="blog-details.html">The best time to visit japan &
                                        enjoy the cherry blossoms</a></h3><a href="blog-details.html"
                                    class="th-btn style4 th-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-box th-ani">
                            <div class="blog-img global-img"><img src="assets/img/services/construction.jpg"
                                    alt="blog image">
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta"><a class="author" href="blog.html">July 07 2024</a> <a
                                        href="blog.html">8 min read</a></div>
                                <h3 class="box-title"><a href="blog-details.html">The 7 amazing destinations for
                                        adventure seekers</a></h3><a href="blog-details.html"
                                    class="th-btn style4 th-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-box th-ani">
                            <div class="blog-img global-img"><img src="assets/img/services/logistics.jpg"
                                    alt="blog image">
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta"><a class="author" href="blog.html">July 09 2024</a> <a
                                        href="blog.html">9 min read</a></div>
                                <h3 class="box-title"><a href="blog-details.html">10 Reason why you should visit New
                                        Jersy</a></h3><a href="blog-details.html" class="th-btn style4 th-icon">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-box th-ani">
                            <div class="blog-img global-img"><img src="assets/img/services/construction.jpg"
                                    alt="blog image">
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta"><a class="author" href="blog.html">July 10 2024</a> <a
                                        href="blog.html">10 min read</a></div>
                                <h3 class="box-title"><a href="blog-details.html">The best time to visit japan &
                                        enjoy the cherry blossoms</a></h3><a href="blog-details.html"
                                    class="th-btn style4 th-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog-box th-ani">
                            <div class="blog-img global-img"><img src="assets/img/services/logistics.jpg"
                                    alt="blog image">
                            </div>
                            <div class="blog-box_content">
                                <div class="blog-meta"><a class="author" href="blog.html">July 12 2024</a> <a
                                        href="blog.html">11 min read</a></div>
                                <h3 class="box-title"><a href="blog-details.html">The 7 amazing destinations for
                                        adventure seekers</a></h3><a href="blog-details.html"
                                    class="th-btn style4 th-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup shape1 d-none d-xxl-block" data-top="14%" data-right="9%"><img
            src="assets/img/shape/shape_1.png" alt="shape"></div>
    <div class="shape-mockup shape2 d-none d-xl-block" data-top="25%" data-right="6%"><img
            src="assets/img/shape/shape_2.png" alt="shape"></div>
    <div class="shape-mockup shape3 d-none d-xxl-block" data-top="15%" data-right="4%"><img
            src="assets/img/shape/shape_3.png" alt="shape"></div>
</section>
<div class="elements-sec bg-smoke overflow-hidden">
    <div class="container-fluid">
        <div class="tags-container relative"></div>
    </div>
</div>


<?php include 'includes/footer.php' ?>

<script>
// Function to play video and make it full screen on hover
function playVideoOnHover(videoElement) {
    videoElement.addEventListener('mouseover', function() {
        videoElement.play();
        videoElement.classList.add('fullscreen');
    });
    videoElement.addEventListener('mouseout', function() {
        videoElement.pause();
        videoElement.classList.remove('fullscreen');
    });
}

// Get video elements
const video1 = document.getElementById('video1');
const video2 = document.getElementById('video2');

// Apply the function to both videos
playVideoOnHover(video1);
playVideoOnHover(video2);
</script>

<script src="assets/js/ajay-gsap.js"></script>

<script>
function canvas() {
    const canvas = document.querySelector("#page3>canvas");
    const context = canvas.getContext("2d");

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    window.addEventListener("resize", function() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        render();
    });

    function files(index) {
        var data = `
./scroll-img/img1.jpg
./scroll-img/img2.jpg
./scroll-img/img3.jpg
./scroll-img/img4.jpg
./scroll-img/img5.jpg
./scroll-img/img6.jpg
./scroll-img/img7.jpg
./scroll-img/img8.jpg
./scroll-img/img9.jpg
./scroll-img/img10.jpg
./scroll-img/img11.jpg
./scroll-img/img12.jpg
./scroll-img/img13.jpg
./scroll-img/img14.jpg
./scroll-img/img15.jpg
./scroll-img/img16.jpg
./scroll-img/img17.jpg
./scroll-img/img18.jpg
./scroll-img/img19.jpg
./scroll-img/img20.jpg
./scroll-img/img21.jpg
./scroll-img/img22.jpg
./scroll-img/img23.jpg
./scroll-img/img24.jpg
./scroll-img/img25.jpg
./scroll-img/img26.jpg
./scroll-img/img27.jpg
./scroll-img/img28.jpg
./scroll-img/img29.jpg
./scroll-img/img30.jpg
./scroll-img/img31.jpg
./scroll-img/img32.jpg
./scroll-img/img33.jpg
./scroll-img/img34.jpg
./scroll-img/img35.jpg
./scroll-img/img36.jpg
./scroll-img/img37.jpg
./scroll-img/img38.jpg
./scroll-img/img39.jpg
./scroll-img/img40.jpg
./scroll-img/img41.jpg
./scroll-img/img42.jpg
./scroll-img/img43.jpg
./scroll-img/img44.jpg
./scroll-img/img45.jpg
./scroll-img/img46.jpg
./scroll-img/img47.jpg
./scroll-img/img48.jpg
./scroll-img/img49.jpg
./scroll-img/img50.jpg
./scroll-img/img51.jpg
./scroll-img/img52.jpg
./scroll-img/img53.jpg
./scroll-img/img54.jpg
./scroll-img/img55.jpg
./scroll-img/img56.jpg
./scroll-img/img57.jpg
./scroll-img/img58.jpg
./scroll-img/img59.jpg
./scroll-img/img60.jpg
./scroll-img/img61.jpg
./scroll-img/img62.jpg
./scroll-img/img63.jpg
./scroll-img/img64.jpg
./scroll-img/img65.jpg
./scroll-img/img66.jpg
./scroll-img/img67.jpg
./scroll-img/img68.jpg
./scroll-img/img69.jpg
./scroll-img/img70.jpg
./scroll-img/img71.jpg
./scroll-img/img72.jpg
./scroll-img/img73.jpg
./scroll-img/img74.jpg
./scroll-img/img75.jpg
./scroll-img/img76.jpg
./scroll-img/img77.jpg
./scroll-img/img78.jpg
./scroll-img/img79.jpg
./scroll-img/img80.jpg
./scroll-img/img81.jpg
./scroll-img/img82.jpg
./scroll-img/img83.jpg
./scroll-img/img84.jpg
`;
        return data.split("\n")[index];
    }

    const frameCount = 83;

    const images = [];
    const imageSeq = {
        frame: 1,
    };

    for (let i = 0; i < frameCount; i++) {
        const img = new Image();
        img.src = files(i);
        images.push(img);
    }

    gsap.to(imageSeq, {
        frame: frameCount - 1,
        snap: "frame",
        ease: `none`,
        scrollTrigger: {
            scrub: 0.5,
            trigger: `#page3`,
            start: `top top`,
            end: `250% top`,
            scroller: `body`,

        },
        onUpdate: render,
    });

    images[1].onload = render;

    function render() {
        scaleImage(images[imageSeq.frame], context);
    }

    function scaleImage(img, ctx) {
        var canvas = ctx.canvas;
        var hRatio = canvas.width / img.width;
        var vRatio = canvas.height / img.height;
        var ratio = Math.max(hRatio, vRatio);
        var centerShift_x = (canvas.width - img.width * ratio) / 2;
        var centerShift_y = (canvas.height - img.height * ratio) / 2;
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(
            img,
            0,
            0,
            img.width,
            img.height,
            centerShift_x,
            centerShift_y,
            img.width * ratio,
            img.height * ratio
        );
    }
    ScrollTrigger.create({
        trigger: "#page3",
        pin: true,
        scroller: `body`,
        start: `top top`,
        end: `250% top`,
        // markers: true
    });
}
canvas();
</script>

<script>
var tl = gsap.timeline({
    scrollTrigger: {
        trigger: "#main",
        //  markers:true,
        start: "50% 50%",
        end: "150% 50%",
        scrub: 2,
        pin: true
    }
});
tl
    .to("#center", {
        height: "100vh",
    }, 'a')
    .to("#top", {
        top: "-50%",
    }, 'a')
    .to("#bottom", {
        bottom: "-50%",
    }, 'a')
    .to("#top-h1", {
        top: "60%"
    }, 'a')
    .to("#bottom-h1", {
        bottom: "-30%"
    }, 'a')
    .to("#center-h1", {
        top: "-30%"
    }, 'a')
    .to(".content", {
        delay: -0.2,
        marginTop: "0%"
    })
</script>