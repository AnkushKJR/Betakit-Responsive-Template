<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betakit-bootstrap 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/logo_small.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,900;1,100;1,300&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>

    <div class="contentWrapper">
    
        <header>

            <!-- topbar -->
            <nav id="topbarSection">

                <div class="container-fluid">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                        <a class="nav-link" href="#">Sign in</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Company</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">english</a>
                        </li>
                    </ul>
                </div>

            </nav>

            <!-- navigation bar -->
            <nav class="navbar navbar-expand-lg" id="navbarSection">
                <div class="container-fluid my-2">
                <a class="navbar-brand ms-lg-5" href="#">
                    <img src="img/envato_logo.png" alt="Logo" class="d-inline-block" style="width: 180px; height: 55px;">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-start" id="navbarScroll">
                    <ul class="nav d-flex flex-column flex-lg-row " id="navbarLinks">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pages</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>

                <button type="button" class="btn me-5 py-2 px-2 fw-bold d-none d-lg-block" id="navbarButton">Get Started</button>

                </div>

            </nav>


        </header>



        <main>





            <section class="greenSection">

            </section>





            <section id="heroSection">

                <div class="container">

                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-lg-7 justify-content-center align-items-center">
                            <h2 class="display-4 fw-bold">
                                Find the Job <br>
                                that fits your life.
                            </h2>
                            <p class="mt-3" id="heroSectionPara">
                                <input type="email" class="form-control border-0 ms-2" id="heroSectionEmail" placeholder="Enter Your Email Address">
                                <button class="btn btn-lg ms-2 mt-2" id="heroSectionButton">Search</button>
                            </p>
                        </div>

                        <div class="col-lg-5 mt-5 mt-lg-0 heroImage">
                            <img src="img/homepage_img.png" alt="alt" class="img-fluid">
                        </div>

                    </div>

                </div>

            </section>





            <section class="greenSection">

            </section>





            <section class="whiteSection">

            </section>





            <section id="cardsSection">

                <div class="container">

                    <div class="row justify-content-between">
                        <div class="col-xl-5 cardsSectionHead">
                            <h2 class="fw-bolder text-center display-5">
                                Popular Categories
                            </h2>
                        </div>

                        <div class="col-xl-7 text-center text-xl-end cardsSectionPara mt-xl-4">
                            <p class="text-secondary">
                                Hiring, onboarding and compliance – that's automation without borders
                            </p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        
                        <div class="col-sm-6 col-md-3">

                            <div class="card card1 mb-3">
                                <div class="card-body">


                                    <div class="cardIcon mt-2">
                                        <span><i class="bi bi-shield"></i></span>
                                    </div>
                                    <h3 class="mt-3">Digital Marketing</h3>
                                    <div class="innerCardBlock mt-3">
                                        <p>23 Jobs Opened</p>
                                        <div class="cardCircle mb-3">
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>

                        <div class="col-sm-6 col-md-3">

                            <div class="card card2 mb-3">
                                <div class="card-body">
                                
                                    <div class="cardIcon mt-2">
                                        <span><i class="bi bi-shield"></i></span>
                                    </div>
                                    <h3 class="mt-3">Digital Marketing</h3>
                                    <div class="innerCardBlock mt-3">
                                        <p class="text-secondary">23 Jobs Opened</p>
                                        <div class="cardCircle mb-3">
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>

                        <div class="col-sm-6 col-md-3">

                            <div class="card card3 mb-3">
                                <div class="card-body">
                                
                                    <div class="cardIcon mt-2">
                                        <span><i class="bi bi-shield"></i></span>
                                    </div>
                                    <h3 class="mt-3">Digital Marketing</h3>
                                    <div class="innerCardBlock mt-3">
                                        <p class="text-secondary">23 Jobs Opened</p>
                                        <div class="cardCircle mb-3">
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>

                        <div class="col-sm-6 col-md-3">

                            <div class="card card4 mb-3">
                                <div class="card-body">
                                
                                    <div class="cardIcon mt-2">
                                        <span><i class="bi bi-shield"></i></span>
                                    </div>
                                    <h3 class="mt-3">Digital Marketing</h3>
                                    <div class="innerCardBlock mt-3">
                                        <p>23 Jobs Opened</p>
                                        <div class="cardCircle mb-3">
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>

                    </div>


                    <div class="row justify-content-center mt-3">
                        
                        <div class="d-none d-xl-block col-sm-6 col-md-3">

                            
                            
                        </div>

                        <div class="col-sm-6 col-md-3">

                            <div class="card card5 mb-3">
                                <div class="card-body">
                                
                                    <div class="cardIcon mt-2">
                                        <span><i class="bi bi-shield"></i></span>
                                    </div>
                                    <h3 class="mt-3">Digital Marketing</h3>
                                    <div class="innerCardBlock mt-3">
                                        <p>23 Jobs Opened</p>
                                        <div class="cardCircle mb-3">
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>

                        <div class="col-sm-6 col-md-3">

                            <div class="card card6 mb-3">
                                <div class="card-body">
                                
                                    <div class="cardIcon mt-2">
                                        <span><i class="bi bi-shield"></i></span>
                                    </div>
                                    <h3 class="mt-3">Digital Marketing</h3>
                                    <div class="innerCardBlock mt-3">
                                        <div class="cardJobsPara">
                                            <p>23 Jobs Opened</p>
                                        </div>
                                        <div class="cardCircle mb-3">
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>

                        <div class="d-none d-xl-block col-sm-6 col-md-3">

                            

                        </div>

                    </div>



                </div>

            </section>






            <section class="whiteSection">

            </section>






            <section id="recommendedJobsSection">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 recommendedJobsLeftPart">
                            
                            <h2 class="display-5 fw-bolder mb-5">Recommended Jobs</h2>
                            
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="recommendedHeadPara">

                                    
                                        <div class="recommendedDoubleTickHead">
                                            <div class="recommendedDoubleTick">
                                                <i class="bi bi-check2-all"></i>
                                            </div>
                                            <div class="Recommendedhead">
                                                <h3>Exclusively for Retail Chains</h3>
                                            </div>
                                        </div>

                                        <div class="recommendedPara">
                                            <div class="recommendedParaText">
                                                <p>Offer inventory, sales, order booking & other integrated solutions via our POS.</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="recommendedHeadPara">

                                    
                                        <div class="recommendedDoubleTickHead">
                                            <div class="recommendedDoubleTick">
                                                <i class="bi bi-check2-all"></i>
                                            </div>
                                            <div class="Recommendedhead">
                                                <h3>Exclusively for Retail Chains</h3>
                                            </div>
                                        </div>

                                        <div class="recommendedPara">
                                            <div class="recommendedParaText">
                                                <p>Offer inventory, sales, order booking & other integrated solutions via our POS.</p>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="recommendedHeadPara">

                                    
                                        <div class="recommendedDoubleTickHead">
                                            <div class="recommendedDoubleTick">
                                                <i class="bi bi-check2-all"></i>
                                            </div>
                                            <div class="Recommendedhead">
                                                <h3>Exclusively for Retail Chains</h3>
                                            </div>
                                        </div>

                                        <div class="recommendedPara">
                                            <div class="recommendedParaText">
                                                <p>Offer inventory, sales, order booking & other integrated solutions via our POS.</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    <div class="recommendedHeadPara">

                                    
                                        <div class="recommendedDoubleTickHead">
                                            <div class="recommendedDoubleTick">
                                                <i class="bi bi-check2-all"></i>
                                            </div>
                                            <div class="Recommendedhead">
                                                <h3>Exclusively for Retail Chains</h3>
                                            </div>
                                        </div>

                                        <div class="recommendedPara">
                                            <div class="recommendedParaText">
                                                <p>Offer inventory, sales, order booking & other integrated solutions via our POS.</p>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>
                                
                            </div>

                        </div>




                        <div class="col-lg-6 recommendedJobRightPart">


                            <div class="row mt-5">

                                <div class="col-sm-6">

                                    <div class="card text-center recCards py-2 mb-3">
                                        <div class="card-body">
                                        <div class="recCardLogo mb-4">
                                            <img src="img/Targetorate-Logo.png" alt="betakit logo" style="width: 171px; height: 46px;">
                                        </div>
                                        <div class="recCardHead">
                                            <h5 class="mb-3">Codecanyon</h5>
                                            <p>345 Jobs Opened</p>
                                        </div>
                                        <div class="btn">
                                            <div class="recButton">
                                                <div class="recButtonAmount">
                                                    <p class="mt-1">$2 567</p>
                                                </div>
                                                <div class="recButtonCircle">
                                                    <i class="bi bi-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-6">

                                    <div class="card text-center recCards py-2 mb-3">
                                        <div class="card-body">
                                        <div class="recCardLogo mb-4">
                                            <img src="img/envato_logo.png" alt="betakit logo">
                                        </div>
                                        <div class="recCardHead">
                                            <h5 class="mb-3">Ninetheme</h5>
                                            <p>345 Jobs Opened</p>
                                        </div>
                                        <div class="btn">
                                            <div class="recButton">
                                                <div class="recButtonAmount">
                                                    <p class="mt-1">$2 567</p>
                                                </div>
                                                <div class="recButtonCircle">
                                                    <i class="bi bi-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row mt-sm-4">

                                <div class="col-sm-6">

                                    <div class="card text-center recCards py-2 mb-3">
                                        <div class="card-body">
                                        <div class="recCardLogo mb-4">
                                            <img src="img/Targetorate-Logo.png" alt="betakit logo" style="width: 171px; height: 46px;">
                                        </div>
                                        <div class="recCardHead">
                                            <h5 class="mb-3">Envato Market</h5>
                                            <p>345 Jobs Opened</p>
                                        </div>
                                        <div class="btn">
                                            <div class="recButton">
                                                <div class="recButtonAmount">
                                                    <p class="mt-1">$2 567</p>
                                                </div>
                                                <div class="recButtonCircle">
                                                    <i class="bi bi-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-6">

                                    <div class="card text-center recCards py-2 mb-3">
                                        <div class="card-body">
                                        <div class="recCardLogo mb-4">
                                            <img src="img/envato_logo.png" alt="betakit logo">
                                        </div>
                                        <div class="recCardHead">
                                            <h5 class="mb-3">Audio Jungle</h5>
                                            <p>345 Jobs Opened</p>
                                        </div>
                                        <div class="btn">
                                            <div class="recButton">
                                                <div class="recButtonAmount">
                                                    <p class="mt-1">$2 567</p>
                                                </div>
                                                <div class="recButtonCircle">
                                                    <i class="bi bi-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                            
                        </div>

                    </div>
                </div>

            </section>






            <section id="imageSection">

                <div class="container">

                    <div class="row">
                        <div class="col">
                            <div class="imgBack">
                        
                                <img src="img/imageSectionBootstrap.jpg" alt="alt" class="img-fluid">
            
            
                                <div class="imgBackContent text-center">
                                    <h2 class="display-5 fw-bold">Plans Made For You <span>.</span></h2>
                                    <p>We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.</p>
                                    <a href="#" class="btn imageSectionButton">See all jobs opened</a>
                                </div>
            
                            </div>
                        </div>
                    </div>

                </div>
            </section>





            <section id="openedJobSection">

                <div class="container">
                    <div class="row text-center">

                        <div class="col">
                            <h2 class="fw-bolder display-5 mt-5">Some Opened Jobs For You</h2>
                        </div>
                        
                    </div>

                    <div class="row mt-5">

                        <div class="col-lg-4">

                            <div class="card openedJobsSectionCards mb-3">
                                <div class="card-body my-4 ms-2">

                                    <span class="buttonLike">
                                        Design
                                    </span>

                                    <div class="openedJobsHead mt-4 mb-3">
                                        <a href="#" class="fw-bold">Visual Design Intern, Animator/Illustrator</a>
                                    </div>

                                    <div class="openedJobsBlock mb-3">
                                        
                                        <div class="openedJobsBlockLogo">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <div class="openedJobsBlockLocation">
                                                <p>Morocco</p>
                                            </div>
                                        </div>
                                    
                                        <div class="openedJobsBlockLogo">
                                            <i class="bi bi-clock"></i>
                                            <div class="openedJobsBlockLocation">
                                                <p>Fulltime</p>
                                            </div>
                                        </div>
                                
                                    </div>

                                    <div class="openedJobsBlock2">

                                        <span class="openedJobsBlock2Logo">
                                            <img src="img/logo_small.png" alt="betakit small logo">
                                        </span>

                                        <p class="openedJobsBlock2Para">Ninetheme | <span> 4 Months Ago</span></p>

                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="card openedJobsSectionCards mb-3">
                                <div class="card-body my-4 ms-2">

                                    <span class="buttonLike">
                                        Design
                                    </span>

                                    <div class="openedJobsHead mt-4 mb-3">
                                        <a href="#" class="fw-bold">Visual Design Intern, Animator/Illustrator</a>
                                    </div>

                                    <div class="openedJobsBlock mb-3">
                                        
                                        <div class="openedJobsBlockLogo">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <div class="openedJobsBlockLocation">
                                                <p>Morocco</p>
                                            </div>
                                        </div>
                                    
                                        <div class="openedJobsBlockLogo">
                                            <i class="bi bi-clock"></i>
                                            <div class="openedJobsBlockLocation">
                                                <p>Fulltime</p>
                                            </div>
                                        </div>
                                
                                    </div>

                                    <div class="openedJobsBlock2">

                                        <span class="openedJobsBlock2Logo">
                                            <img src="img/logo_small.png" alt="betakit small logo">
                                        </span>

                                        <p class="openedJobsBlock2Para">Ninetheme | <span> 4 Months Ago</span></p>

                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="card openedJobsSectionCards mb-3">
                                <div class="card-body my-4 ms-2">

                                    <span class="buttonLike">
                                        Design
                                    </span>

                                    <div class="openedJobsHead mt-4 mb-3">
                                        <a href="#" class="fw-bold">Visual Design Intern, Animator/Illustrator</a>
                                    </div>

                                    <div class="openedJobsBlock mb-3">
                                        
                                        <div class="openedJobsBlockLogo">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <div class="openedJobsBlockLocation">
                                                <p>Morocco</p>
                                            </div>
                                        </div>
                                    
                                        <div class="openedJobsBlockLogo">
                                            <i class="bi bi-clock"></i>
                                            <div class="openedJobsBlockLocation">
                                                <p>Fulltime</p>
                                            </div>
                                        </div>
                                
                                    </div>

                                    <div class="openedJobsBlock2">

                                        <span class="openedJobsBlock2Logo">
                                            <img src="img/logo_small.png" alt="betakit small logo">
                                        </span>

                                        <p class="openedJobsBlock2Para">Ninetheme | <span> 4 Months Ago</span></p>

                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row mt-lg-4">

                        <div class="col-lg-4">

                            <div class="card openedJobsSectionCards mb-3 mb-lg-0">
                                <div class="card-body my-4 ms-2">

                                    <span class="buttonLike">
                                        Design
                                    </span>

                                    <div class="openedJobsHead mt-4 mb-3">
                                        <a href="#" class="fw-bold">Visual Design Intern, Animator/Illustrator</a>
                                    </div>

                                    <div class="openedJobsBlock mb-3">
                                        
                                        <div class="openedJobsBlockLogo">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <div class="openedJobsBlockLocation">
                                                <p>Morocco</p>
                                            </div>
                                        </div>
                                    
                                        <div class="openedJobsBlockLogo">
                                            <i class="bi bi-clock"></i>
                                            <div class="openedJobsBlockLocation">
                                                <p>Fulltime</p>
                                            </div>
                                        </div>
                                
                                    </div>

                                    <div class="openedJobsBlock2">

                                        <span class="openedJobsBlock2Logo">
                                            <img src="img/logo_small.png" alt="betakit small logo">
                                        </span>

                                        <p class="openedJobsBlock2Para">Ninetheme | <span> 4 Months Ago</span></p>

                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="card openedJobsSectionCards mb-3 mb-lg-0">
                                <div class="card-body my-4 ms-2">

                                    <span class="buttonLike">
                                        Design
                                    </span>

                                    <div class="openedJobsHead mt-4 mb-3">
                                        <a href="#" class="fw-bold">Visual Design Intern, Animator/Illustrator</a>
                                    </div>

                                    <div class="openedJobsBlock mb-3">
                                        
                                        <div class="openedJobsBlockLogo">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <div class="openedJobsBlockLocation">
                                                <p>Morocco</p>
                                            </div>
                                        </div>
                                    
                                        <div class="openedJobsBlockLogo">
                                            <i class="bi bi-clock"></i>
                                            <div class="openedJobsBlockLocation">
                                                <p>Fulltime</p>
                                            </div>
                                        </div>
                                
                                    </div>

                                    <div class="openedJobsBlock2">

                                        <span class="openedJobsBlock2Logo">
                                            <img src="img/logo_small.png" alt="betakit small logo">
                                        </span>

                                        <p class="openedJobsBlock2Para">Ninetheme | <span> 4 Months Ago</span></p>

                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="card openedJobsSectionCards specialCard">
                                <div class="card-body my-4 ms-2 text-center specialCardBody">
                                    
                                    <h2 class="display-6 fw-bolder">567+</h2>
                                    <p class="text-secondary">Total jobs opened</p>
                                    <a href="#" class="btn openedJobsSpecialCardButton">Explore Jobs</a>

                                </div>
                            </div>

                        </div>

                    </div>




                </div>

            </section>




            <section class="greenSectionCard">

            </section>






            <section id="sliderSection">

                <!-- <div class="container">
                    <div id="slider" class="carousel slide">
                        <div class="carousel-indicators">
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 400px;">
                            <img src="img/slider1.jpg" class="d-block w-100" alt="slider1image">
                        </div>
                        <div class="carousel-item" style="height: 400px;">
                            <img src="img/slider2.jpg" class="d-block w-100" alt="slider2image">
                        </div>
                        <div class="carousel-item" style="height: 400px;">
                            <img src="img/slider3.jpg" class="d-block w-100" alt="slider3image">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> -->

                <div class="container">
                    <div class="row mb-4">
                        <div class="col text-center sliderHead">
                            <h2 class="display-5 fw-bolder">Reach Us<span>.</span></h2>
                            <p>We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.</p>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col">
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                <div class="carousel-item active c-item">
                                    <img src="img/slider11.jpg" class="d-block w-100 c-img" alt="...">
                                    <div class="carousel-caption top-0 mt-4 d-none d-sm-block">
                                        <p class="mt-4 text-uppercase">Discover the pace of life.</p>
                                        <h2 class="display-5">Betakit- Capturing Motion</h2>
                                        <button type="button" class="btn btn-primary mt-2 px-4 py-2" data-bs-toggle="modal" data-bs-target="#contact-modal">Talk to us</button>
                                    </div>
                                </div>
                                <div class="carousel-item c-item">
                                    <img src="img/slider22.jpg" class="d-block w-100 c-img" alt="...">
                                    <div class="carousel-caption top-0 mt-4 d-none d-sm-block">
                                        <p class="mt-4 text-uppercase">Discover the pace of life.</p>
                                        <h2 class="display-5">Betakit- Capturing Motion</h2>
                                        <button class="btn btn-primary mt-2 px-4 py-2" data-bs-toggle="modal" data-bs-target="#contact-modal">Talk to us</button>
                                    </div>
                                </div>
                                <div class="carousel-item c-item">
                                    <img src="img/slider33.jpg" class="d-block w-100 c-img" alt="...">
                                    <div class="carousel-caption top-0 mt-4 d-none d-sm-block">
                                        <p class="mt-4 text-uppercase">Discover the pace of life.</p>
                                        <h2 class="display-5">Betakit- Capturing Motion</h2>
                                        <button class="btn btn-primary mt-2 px-4 py-2" data-bs-toggle="modal" data-bs-target="#contact-modal">Talk to us</button>
                                    </div>
                                </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <div class="modal fade" tabindex="-1" id="contact-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Drop in your email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>Kindly share your email address with us. Thank you for your cooperation!</p>
                            <label for="modal-email" class="form-label">Your email address:</label>
                            <input type="email" id="modal-email" class="form-control" placeholder="eg. mario@example.com">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- <div class="modal fade" id="contact-modal" tabindex="-1">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Get the Latest Updates</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, iusto? Voluptates hic qui cupiditate nostrum molestiae asperiores aspernatur aut autem rerum temporibus.</p>
                    <label for="modal-email" class="form-label">Your email address:</label>
                    <input type="email" id="modal-email" class="form-control" placeholder="eg. mario@example.com">
                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </div>
            </div> -->








            <section id="upLinkSection">

                <div class="container">

                    <div class="row justify-content-center">
                        <div class="text-center col-lg-7 upLinkHeader">
                            <div class="upLinkHead">
                                <h2 class="fw-bolder">Don't be late to buy!</h2>
                            </div>
                        </div>

                        <div class="col-lg-5 formB">
                            <form action="" method="post">

                                <?php

                                    use PHPMailer\PHPMailer\PHPMailer;
                                    use PHPMailer\PHPMailer\SMTP;
                                    use PHPMailer\PHPMailer\Exception;

                                    if(isset($_POST['send'])){

                                        $name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $phone = $_POST['phone'];
                                        $message = $_POST['message'];
                                            
                                        
                                        require 'PHPMailer/Exception.php';
                                        require 'PHPMailer/PHPMailer.php';
                                        require 'PHPMailer/SMTP.php';
                                        
                                        $mail = new PHPMailer(true);
                                        
                                        try {
                                            // Server settings
                                        
                                            $mail->isSMTP();
                                            $mail->Host = 'smtp.gmail.com';
                                            $mail->SMTPAuth = true;
                                            $mail->Username = 'anktesting01@gmail.com';
                                            $mail->Password = 'pacb mhvj uooj vboz';  // Use App Password or actual Gmail account password
                                            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                            $mail->Port = 587;
                                        
                                            // Recipients
                                            $mail->setFrom('anktesting01@gmail.com', 'Betakit Contact Form');
                                            $mail->addAddress('akanjikar999@gmail.com', 'Personal Email');
                                        
                                            // Content
                                            $mail->isHTML(true);
                                            $mail->Subject = 'Betakit Mainpage Contact form';
                                            $mail->Body = "Sender name - $name <br> Sender email - $email <br> Sender phone number - $phone <br> message - $message";
                                        
                                            $mail->send();
                                            echo '<p class="border-2 text-light text-center bg-success fw-bold px-2 py-2 rounded">Message has been sent</p>';
                                        } catch (Exception $e) {
                                            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                            echo '<p class="border-2 text-light text-center bg-danger fw-bold px-2 py-2 rounded">Message could not be sent. Mailer Error: ' . htmlspecialchars($mail->ErrorInfo) . '</p>';
                                        }
                                    }
                                    
                                ?>


                                <div class="form-group mb-2">
                                    <label for="name" class="label">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                        
                                <div class="form-group mb-2">
                                    <label for="email" class="label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                </div>

                                <div class="form-group mb-2">
                                    <label for="phone" class="label">Phone number:</label>
                                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter your number">
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label for="message" class="label">Message:</label>
                                    <textarea class="form-control" id="message" rows="4" name="message" placeholder="Enter your message"></textarea>
                                </div>
                                
                                <div class="formBtn d-flex justify-content-center">
                                    <button type="submit" class="btn btn-secondary formButton" name="send" value="send">Submit</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>

                </div>

                <div class="upLinkCircle">
                    <a href="#"><i class="bi bi-arrow-up fw-bolder"></i></a>
                </div>


            </section>





            <!-- working forms section -->

            <!-- <section id="workingForm">

                <div class="container mt-5">
                    <form>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                        </div>
                
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </section> -->


        </main>



        <footer id="mainPageFooter">

            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-3 footerCol1Wrapper">
                        <div class="footerLogo">
                            <img src="https://ninetheme.com/themes/betakit/wp-content/uploads/2020/05/logo-light.svg" alt="" style="height: 38px;">
                        </div>
                        <div class="footerPara mt-3">
                            <p class="text-white fw-lighter">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, minima?</p>
                        </div>
                    </div>
                    <div class="col-lg-3 footerCol2Wrapper">
                        <div class="footerLinkHead d-flex">
                            <div class="footerLinkHeadLogo pt-1">
                                <i class="bi bi-caret-right-fill text-white pe-2"></i>
                            </div>
                            <div class="footerLinkHeadHeading">
                                <h3 class="text-white">Company</h3>
                            </div>
                        </div>
                        <div class="footerLinkAnchor">
                            <nav class="nav d-flex flex-column ps-2 ">
                                <a class="nav-link active" href="#">About</a>
                                <a class="nav-link" href="#">Our Customers</a>
                                <a class="nav-link" href="#">Contact us</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 footerCol3Wrapper">
                        <div class="footerLinkHead d-flex">
                            <div class="footerLinkHeadLogo pt-1">
                                <i class="bi bi-caret-right-fill text-white pe-2"></i>
                            </div>
                            <div class="footerLinkHeadHeading">
                                <h3 class="text-white">Useful links</h3>
                            </div>
                        </div>
                        <div class="footerLinkAnchor">
                            <nav class="nav d-flex flex-column ps-2 ">
                                <a class="nav-link active" href="#">Media kit</a>
                                <a class="nav-link" href="#">Affiliate program</a>
                                <a class="nav-link" href="#">Services</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 footerCol4Wrapper">
                        <div class="footerLinkHead d-flex">
                            <div class="footerLinkHeadLogo pt-1">
                                <i class="bi bi-caret-right-fill text-white pe-2"></i>
                            </div>
                            <div class="footerLinkHeadHeading">
                                <h3 class="text-white">Legal</h3>
                            </div>
                        </div>
                        <div class="footerLinkAnchor">
                            <nav class="nav d-flex flex-column ps-2 ">
                                <a class="nav-link active" href="#">Terms</a>
                                <a class="nav-link" href="#">Privacy</a>
                                <a class="nav-link" href="#">Cookies</a>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="row text-center mt-3">
                    <div class="col footerCopyright">
                        <p class="text-white-50">&copy; All rights reserved.</p>
                    </div>
                </div>
            </div>

        </footer>

        <div class="circleNav">
            <a href="#"><i class="bi bi-arrow-up"></i></a>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
