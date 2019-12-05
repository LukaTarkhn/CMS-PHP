<!-- =========================
 SECTION: HOME / HOMEPAGE
============================== -->
<?php $lang = \ibuild\App::$app->getProperty('language');?>
<?php if ($lang['code'] === 'GE'): ?>
    <div class="GE">
    <!-- NAVIGATION -->
    <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">

        <div class="container">
            <div class="navbar-header">

                <!-- NAVBAR EXPAND COLLAPSE ON MOBILE -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation" style="height: 35px; width: 35px; position: relative">
                    <span class="sr-only">ნავიგაცია</span>
                    <span class="icon icon-menu" style="font-size: 25px; position:absolute; top:3px; right: 4px;"></span>
                </button>

                <!-- LOGO -->
                <a href="/">
                    <img src="/images/logo.png" alt="LOGO" style="position: absolute; height: 70px; top: 2px;bottom: 3px;left: 100px">
                </a>

                <select id="languages" class="form-control" style="max-width: 60px; position: absolute; right: 10px; top: 20px;">
                    <?php new \app\widgets\languages\Languages(); ?>
                </select>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <!-- NAVIGATION LINK -->
                <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                    <li><a href="#home" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">მთავარი</a>
                    </li>
                    <li><a href="#section1" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">ჩვენ შესახებ</a>
                    </li>
                    <li><a href="#section2" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">ბინების დათვალიერება</a>
                    </li>
                    <li><a href="#section3" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">დასრულებული პროექტები</a>
                    </li>
                    <li><a href="#section8" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">რატომ ჩვენ</a>
                    </li>
                    <li><a href="#section9" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">მიმდინარე სამუშაოები</a>
                    </li>
                    <li><a href="#section10" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">კონტაქტი</a>
                    </li>
                </ul>

            </div>

        </div>
        <!-- /END CONTAINER -->
    </div>
    <!-- /END NAIVATION -->
    <div class="headcontent">
        <section class="home fixed-bg" id="home">
            <div class="color-overlay-home">
                <!-- COLOR OVERLAY -->
                <div class="container">
                    <!-- CALL TO ACTION -->
                    <div class="cta smooth-scroll" style="margin-top: 130px;">
                        <div class="social-btns">
                            <a class="btn_ facebook tooltip" href="#section2" title="ბინების დათვალიერება">
                                <i class="fa fa-building" aria-hidden="true"></i>
                            </a>
                            <a class="btn_ google tooltip" href="#section4"  style="margin-top: 15px;" title="მშენებლობა პირდაპირ ეთერში">
                                <i class="fa fa-play" aria-hidden="true" style="margin-left:5px"></i>
                            </a>
                            <a class="btn_ skype tooltip" href="#section11"  style="margin-top: 15px;" title="ჩვენ დაგიკავშირდებით">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
<!--                    <div class="content-2">-->
<!--                        <span class="four" style="font-family: 'ArchyEDT-Bold', sans-serif;" >-->
<!--                            ჩვენ ვართ <br>-->
<!--                            <img class="imgfour" src="/images/logo.png" alt="REAL PALACE">-->
<!--                        </span>-->
<!--                        <span class="five" style="font-family: 'ArchyEDT-Bold', sans-serif;" >ჩვენ ვაშენებთ ხარისხიანად</span>-->
<!--                        <span class="six" style="font-family: 'ArchyEDT-Bold', sans-serif;" >ჩვენ ვზრუნავთ ჩვენს კლიენტებზე</span>-->
<!--                    </div>-->
                </div>
            </div>

        </section>
    </div>

    <!-- =========================
     SECTION: ABOUT US
    ============================== -->
    <section class="about-us" id="section1">

        <div class="container">
            <div class="row">

                <!-- FEATURED IMAGE AREA -->
                <div class="col-lg-6 visible-lg">
                    <div class="featured-image red-gradient-overlay">
                        <img src="images/aboutus.jpg" alt="">
                        <!-- ABOUT US FEATURED IMAGE -->
                        <div class="image-border">

                        </div>
                    </div>
                </div>

                <!-- ABOUT US BOX -->
                <div class="col-lg-7 col-sm-12 overflow-box pull-right">
                    <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                        <div class="about-content">

                            <!-- SECTION HEADING -->
                            <h3 class="section-heading text-left MTMedium">ჩვენ შესახებ</h3>

                            <!-- PARAGRAPH -->
                            <?php if ($aboutus):  ?>
                                <?php foreach ($aboutus as $about):  ?>
                                    <p class="text-left NusRegular"><?=$about->content_geo?></p>
                                <?php endforeach;?>
                            <?php endif;  ?>
                        </div>

                        <div class="four-lines">
                            <div class="line red-line-bottom">
                            </div>
                            <div class="line green-line-bottom">
                            </div>
                            <div class="line purple-line-bottom">
                            </div>
                            <div class="line yellow-line-bottom">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: SERVICES
    ============================== -->
    <section class="our-focus bgcolor-2" id="section2">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 class="MTMedium">ბინების დათვალიერება</h3>
                <div class="sub-heading">
                   <span class="NusRegular">დაათვალიერეთ და შეიძინეთ ბინები <b style="color: #64739d">Black Sea Tower</b>-ში</span>
                </div>
            </div>

            <div class="row focuses" style="display: flex; flex-wrap: nowrap">
                <!-- SINGLE FOCUS COLUMN -->
                <div class="col-lg-7 col-sm-7 col-xs-7">
                    <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <img src="images/forsell/forsell.png" alt="" style="width: 100%; margin-top: 25%">
                    </div>
                </div>
                <!-- SINGLE FOCUS COLUMN -->
                <div class="col-lg-7 col-sm-7 col-xs-7 single-focus white-bg diffuse-shadow wow fadeInRightBig">
                    <div class="sub-heading" style="margin-top: -50px; ">
                        <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">აირჩიეთ სართული</span>
                        <hr>
                    </div>
                    <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                        <?php  foreach ($floors as $floor): ?>
                            <?php if ($floor->parking != 1):  ?>
                                <a href="/floor/<?=$floor->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;" >
                                    <div class="onHoverImage"><img src="images/floors/<?=$floor->img?>" style="width: 100%" /></div>
                                    სართული <?=$floor->floor?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <?php $parkingfloor = 0 ?>
                        <?php  foreach ($floors as $floor): ?>
                            <?php $parkingfloor = $parkingfloor + 1 ?>
                            <?php if ($floor->parking == 1):  ?>
                                <a href="/floor/<?=$floor->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;" >
                                    <div class="onHoverImage"><img src="images/floors/parking/<?=$floor->img?>" style="width: 100%" /></div>
                                    პარკინგი <?=$parkingfloor?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
    </section>

    <!-- =========================
     SECTION: VIDEO SECTION
    ============================== -->

    <section id="section4" class="video-play fixed-bg">
        <div class="color-overlay">

            <!-- HEADING -->
            <h3 class="white-text wow fadeInLeft MTMedium" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">მშენებლობა პირდაპირ ეთერში</h3>

            <div class="row collapse" id="video-expand">
                <div class="col-md-8 col-md-offset-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <!-- EMBED VIDEO -->
                        <iframe id="embed" class="embed-responsive-item" width="560" height="315"  src="about:blank" frameborder="0" allowfullscreen>
                        </iframe> <!-- KEEP &amp;autoplay="0" AT THE END -->
                    </div>
                </div>
            </div>

            <!-- PLAY BUTTON -->
            <a class="play-button" id="play-button" data-toggle="collapse" href="#video-expand"><span class="icon icon-music-play-button"></span></a>

            <!-- TEXT -->
            <div class="play-text text white-text wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <span class="click-play show NusMedium">დააკლიკეთ ვიდეოს ჩასართავად</span>
            </div>

        </div>
    </section>

    <!-- =========================
     SECTION: FINISHED PROJECTS
    ============================== -->
    <?php if ($finishedProjects):  ?>
        <section class="portfolio white-bg" id="section3">

            <div class="container">
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">დასრულებული პროექტები</h3>
                    <div class="sub-heading NusRegular">
                        ჩვენს მიერ შესრულებული პროექტების ჩამონათვალი, რომლებმაც უკვე იპოვეს თავისი მაცხოვრებელი
                    </div>
                </div>

                <div class="row">
                    <!-- PROJECTS -->
                    <div class="col-lg-12" id="portfolio-list">
                        <div class="portfolio-items grid">

                            <!-- SINGLE PROJECT -->
                            <?php foreach ($finishedProjects as $finishedProject):  ?>
                                <figure class="effect-zoe wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                                    <!-- PROJECT IMAGE and LINK -->
                                    <a href="/project/<?=$finishedProject->id?>" title="Click to view details">
                                        <img src="images/<?=$finishedProject->img?>" alt="">
                                        <p class="description">
                                            <span class="fa fa-eye"></span>
                                        </p>
                                    </a>

                                    <figcaption>
                                        <div class="four-lines">
                                            <div class="line red-line-bottom">
                                            </div>
                                            <div class="line green-line-bottom">
                                            </div>
                                            <div class="line purple-line-bottom">
                                            </div>
                                            <div class="line yellow-line-bottom">
                                            </div>
                                        </div>

                                        <div class="caption-text">
                                            <h6 class="dark-text NusMedium"><?=$finishedProject->title_geo?></h6>	<!-- PROJECT TITLE -->
                                        </div>
                                    </figcaption>
                                </figure>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;  ?>

    <!-- =========================
     SECTION: STATS
    ============================== -->
    <section class="stats fixed-bg">
        <div class="color-overlay">
            <div class="container">
                <div class="row">

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                        <div class="stats-icon red-text">
                            <span class="icon icon-cloud"></span>
                        </div>

                        <h5 class="white-text">6</h5>
                        <div class="stats-text MTRegular">
                            დასრულებული პროექტები
                        </div>

                        <div class="bottom-icon red-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.30s">

                        <div class="stats-icon green-text">
                            <span class="icon icon-way"></span>
                        </div>

                        <h5 class="white-text">2</h5>
                        <div class="stats-text MTRegular">
                           მიმდინარე პროექტები
                        </div>

                        <div class="bottom-icon green-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.45s">

                        <div class="stats-icon purple-text">
                            <span class="icon icon-graph-regular"></span>
                        </div>

                        <h5 class="white-text">1000+</h5>
                        <div class="stats-text MTRegular">
                            გაყიდული ბინები
                        </div>

                        <div class="bottom-icon purple-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="1s">

                        <div class="stats-icon green-text">
                            <span class="icon icon-like"></span>
                        </div>

                        <h5 class="white-text">500+</h5>
                        <div class="stats-text MTRegular">
                            დასაქმებულთა რაოდენობა
                        </div>

                        <div class="bottom-icon green-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: WORK STEPS
    ============================== -->
    <section class="work-steps" id="section5">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 class="MTMedium">სამუშაო ნაბიჯები</h3>
                <div class="sub-heading NusRegular">
                    ჩვენ ყოველთვის ვაღწევთ უმაღლეს ხარისხს
                </div>
            </div>

            <div class="row steps">
                <div class="col-lg-6 col-lg-offset-3">

                    <!-- STEP 1 -->
                    <div class="step step-1-image clearfix">
                        <div class="step-box-left diffuse-shadow red-line-bottom white-bg wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                            <div class="step-number">
                                01
                            </div>
                            <!-- STEP NUMBER -->

                            <div class="content-area">
                                <h5 class="text-left MTRegular">პროექტის შედგენა</h5>
                                <p class="text-left NusRegular">
                                    პროექტი იგეგმება დიდი ყურადღებით, გათვალისწინებულია ყველა ნიუანსი. პროექტის დაგეგმვაში ჩართულია ყველა საჭირო კომპეტენტური პირი.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- STEP 2 -->
                    <div class="step step-2-image clearfix">
                        <div class="step-box-right diffuse-shadow green-line-bottom white-bg wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.25s">

                            <div class="step-number">
                                02
                            </div>
                            <!-- STEP NUMBER -->

                            <div class="content-area">
                                <h5 class="text-left MTRegular">ტერიტორიის შესწავლა</h5>
                                <p class="text-left NusRegular">
                                    ხდება ტერიტორიის შესწავლა ზომების დადგენა და გრუნტის შესწავლა გაუთვალისწინებელი შემთხვევების თავიდან ასარიდებლად.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- STEP 3 -->
                    <div class="step step-3-image clearfix">
                        <div class="step-box-left diffuse-shadow purple-line-bottom white-bg wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.35s">

                            <div class="step-number">
                                03
                            </div>
                            <!-- STEP NUMBER -->

                            <div class="content-area">
                                <h5 class="text-left MTRegular">გეგმა და პროექტის დიზაინი</h5>
                                <p class="text-left NusRegular">
                                    ხდება კორპუსის, სართულების და ბინების ნახაზების შედგენ ამის შემდეგ იქმენა 3D დიზაინი, ამ საქმიანობაში ასევე უმაღლესი დონის სპეციალისტები არიან ჩართული.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- STEP 2 -->
                    <div class="step step-4-image clearfix">
                        <div class="step-box-right diffuse-shadow yellow-line-bottom white-bg wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.45s">

                            <div class="step-number">
                                04
                            </div>
                            <!-- STEP NUMBER -->

                            <div class="content-area">
                                <h5 class="text-left MTRegular">მშენებლობა</h5>
                                <p class="text-left NusRegular">
                                    მშენებლობა იწყება ყველა ეტაპის წარმატებით გავლის შემდეგ, დაწყებული მშენებლობა არის მაღალი ხარისხის და ვადებში ჩაბარების გარანტი.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: TESTIMONIALS
    ============================== -->
    <section class="testimonials fixed-bg" id="section7">
        <div class="color-overlay">
            <div class="container">

                <!-- SECTION HEADER -->
                <div class="section-header">
                    <div class="sub-heading white-text" style="font-family: 'ArchyEDT-Bold', sans-serif; letter-spacing: 2px; color: orange">
                       ჩვენ ვაშენებთ უახლესი ტექნოლოგიებისა და საუკეთესო მასალის გამოყენებით
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: FEATURES / WHY SELECT US
    ============================== -->
    <section class="features" id="section8">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 class="MTMedium">რატომ ჩვენ?</h3>
                <div class="sub-heading NusMedium">
                    ჩვენ ვითვალისწინებთ მშენებლობაში კლიენტის მოთხოვნებსა და სურვილებს
                </div>
            </div>

            <div class="row feature-grid wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon red-text">
                                <span class="icon icon-graph2"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">მიზეზი 1</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            მიზეზის აღწერა
                        </p>
                    </div>
                </div>

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon green-text">
                                <span class="icon icon-edit"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">მიზეზი 2</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            მიზეზის აღწერა
                        </p>
                    </div>
                </div>

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon purple-text">
                                <span class="icon icon-exapnd2"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">მიზეზი 3</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            მიზეზის აღწერა
                        </p>
                    </div>
                </div>

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon yellow-text">
                                <span class="icon icon-display1"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">მიზეზი 4</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            მიზეზის აღწერა
                        </p>
                    </div>
                </div>

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon red-text">
                                <span class="icon icon-date"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">მიზეზი 5</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            მიზეზის აღწერა
                        </p>
                    </div>
                </div>

                <!-- SINGLE FEATURE -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="feature-box text-left">

                        <div class="feature-header">
                            <div class="icon green-text">
                                <span class="icon icon-medal"></span>	<!-- FEATURE ICON -->
                            </div>
                            <h6 class="MTRegular">მიზეზი 6</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p class="NusRegular">
                            მიზეზის აღწერა
                        </p>
                    </div>
                </div>

            </div>

            <!-- CALL TO ACTION -->
            <div class="row cta-bottom">
                <div class="col-lg-12">

                    <!-- HEADING -->
                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >შეიძინე შენი ახალი ბინა ჩვენთან</h4>

                    <!-- BUTTON -->
                    <a href="#section11" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >კონტაქტი</a>

                </div>
            </div>


        </div>
    </section>

    <!-- =========================
     SECTION: BLOG
    ============================== -->
    <?php if ($currentWorks):  ?>
    <section class="blog bgcolor-2" id="section9">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 class="MTMedium">მიმდინარე სამუშაოები</h3>
                <div class="sub-heading NusMedium">
                    ყოველთვის იქნებით ინფორმირებული მიმდინარე სამუშაოების შესახებ
                </div>
            </div>

            <div class="row blog-posts">
                <?php foreach ($currentWorks as $currentWork):  ?>
                <!-- REGULAR POSTS -->
                <div class="col-lg-6 col-md-6" style="display: flex; flex-wrap: wrap">
                    <!-- SINGLE POST -->
                    <div class="regular-post green-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="width: 100%; min-height: 270px;">

                        <!-- POST TITLE AND DETAILS -->
                        <div class="post-content">
                            <img style="height: 130px; width: 100%;" src="images/<?=$currentWork->img?>" alt="">
                            <a href="/current/<?=$currentWork->id?>">
                                <h6 class="post-title MTMedium"><?=$currentWork->title_geo?></h6>
                            </a>
                            <div>
                                <span class="NusRegular"><?=substr($currentWork->content_geo, 0, 500)?></span>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE POST -->
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif;  ?>
</div>
<?php elseif($lang['code'] === 'EN'):  ?>
    <div class="EN">
        <!-- NAVIGATION -->
        <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">

            <div class="container">
                <div class="navbar-header">

                    <!-- NAVBAR EXPAND COLLAPSE ON MOBILE -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation" style="height: 35px; width: 35px; position: relative">
                        <span class="sr-only">Navigation</span>
                        <span class="icon icon-menu" style="font-size: 25px; position:absolute; top:3px; right: 4px;"></span>
                    </button>

                    <!-- LOGO -->
                    <a href="/">
                        <img src="/images/logo.png" alt="LOGO" style="position: absolute; height: 70px; top: 2px;bottom: 3px;left: 100px">
                    </a>

                    <select id="languages" class="form-control" style="max-width: 60px; position: absolute; right: 10px; top: 20px;">
                        <?php new \app\widgets\languages\Languages(); ?>
                    </select>
                </div>

                <div class="navbar-collapse collapse" id="navigation">
                    <!-- NAVIGATION LINK -->
                    <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                        <li><a href="#home" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Home</a>
                        </li>
                        <li><a href="#section1" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">About us</a>
                        </li>
                        <li><a href="#section2" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Apartments</a>
                        </li>
                        <li><a href="#section3" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Our projects</a>
                        </li>
                        <li><a href="#section8" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Why us?</a>
                        </li>
                        <li><a href="#section9" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Ongoing work</a>
                        </li>
                        <li><a href="#section10" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Contact</a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- /END CONTAINER -->
        </div>
        <!-- /END NAIVATION -->
        <div class="headcontent">
            <section class="home fixed-bg" id="home">
                <div class="color-overlay-home">
                    <!-- COLOR OVERLAY -->
                    <div class="container">
                        <!-- CALL TO ACTION -->
                        <div class="cta smooth-scroll" style="top: 130px">
                            <div class="social-btns">
                                <a class="btn_ facebook tooltip" href="#section2" title="Apartments">
                                    <i class="fa fa-building" aria-hidden="true"></i>
                                </a>
                                <a class="btn_ google tooltip" href="#section4"  style="margin-top: 15px;" title="Building in live">
                                    <i class="fa fa-play" aria-hidden="true" style="margin-left:5px"></i>
                                </a>
                                <a class="btn_ skype tooltip" href="#section11"  style="margin-top: 15px;" title="We call you">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>

        <!-- =========================
         SECTION: ABOUT US
        ============================== -->
        <section class="about-us" id="section1">

            <div class="container">
                <div class="row">

                    <!-- FEATURED IMAGE AREA -->
                    <div class="col-lg-6 visible-lg">
                        <div class="featured-image red-gradient-overlay">
                            <img src="images/aboutus.jpg" alt="">
                            <!-- ABOUT US FEATURED IMAGE -->
                            <div class="image-border">

                            </div>
                        </div>
                    </div>

                    <!-- ABOUT US BOX -->
                    <div class="col-lg-7 col-sm-12 overflow-box pull-right">
                        <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                            <div class="about-content">

                                <!-- SECTION HEADING -->
                                <h3 class="section-heading text-left MTMedium">About us</h3>

                                <!-- PARAGRAPH -->
                                <?php if ($aboutus):  ?>
                                    <?php foreach ($aboutus as $about):  ?>
                                        <p class="text-left NusRegular"><?=$about->content_eng?></p>
                                    <?php endforeach;?>
                                <?php endif;  ?>
                            </div>

                            <div class="four-lines">
                                <div class="line red-line-bottom">
                                </div>
                                <div class="line green-line-bottom">
                                </div>
                                <div class="line purple-line-bottom">
                                </div>
                                <div class="line yellow-line-bottom">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================
         SECTION: SERVICES
        ============================== -->
        <section class="our-focus bgcolor-2" id="section2">
            <div class="container">
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">Apartments</h3>
                    <div class="sub-heading">
                        <span class="NusRegular">Choose your apartment</span>
                    </div>
                </div>

                <div class="row focuses" style="display: flex; flex-wrap: nowrap">
                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-7 col-sm-7 col-xs-7">
                        <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <img src="images/forsell/forsell.png" alt="" style="width: 100%">
                        </div>
                    </div>
                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-7 col-sm-7 col-xs-7 single-focus white-bg diffuse-shadow wow fadeInRightBig">
                        <div class="sub-heading" style="margin-top: -50px; ">
                            <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">Choose floor</span>
                            <hr>
                        </div>
                        <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                            <?php  foreach ($floors as $floor): ?>
                                <?php if ($floor->parking != 1):  ?>
                                    <a href="/floor/<?=$floor->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;" >
                                        <div class="onHoverImage"><img src="images/floors/<?=$floor->img?>" style="width: 100%" /></div>
                                        Floor <?=$floor->floor?>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            <?php $parkingfloor = 0 ?>
                            <?php  foreach ($floors as $floor): ?>
                                <?php $parkingfloor = $parkingfloor + 1 ?>
                                <?php if ($floor->parking == 1):  ?>
                                    <a href="/floor/<?=$floor->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;" >
                                        <div class="onHoverImage"><img src="images/floors/parking/<?=$floor->img?>" style="width: 100%" /></div>
                                        Parking <?=$parkingfloor?>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
        </section>

        <!-- =========================
         SECTION: VIDEO SECTION
        ============================== -->

        <section id="section4" class="video-play fixed-bg">
            <div class="color-overlay">

                <!-- HEADING -->
                <h3 class="white-text wow fadeInLeft MTMedium" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Building in live video</h3>

                <div class="row collapse" id="video-expand">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="embed-responsive embed-responsive-16by9">
                            <!-- EMBED VIDEO -->
                            <iframe id="embed" class="embed-responsive-item" width="560" height="315" src="about:blank" frameborder="0" allowfullscreen>
                            </iframe> <!-- KEEP &amp;autoplay="0" AT THE END -->
                        </div>
                    </div>
                </div>

                <!-- PLAY BUTTON -->
                <a class="play-button" data-toggle="collapse" href="#video-expand"><span class="icon icon-music-play-button"></span></a>

                <!-- TEXT -->
                <div class="play-text text white-text wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <span class="click-play show NusMedium">Click to play</span>
                </div>

            </div>
        </section>

        <!-- =========================
         SECTION: FINISHED PROJECTS
        ============================== -->
        <?php if ($finishedProjects):  ?>
            <section class="portfolio white-bg" id="section3">

                <div class="container">
                    <!-- SECTION HEADER -->
                    <div class="section-header">
                        <h3 class="MTMedium">Our projects</h3>
                        <div class="sub-heading NusRegular">
                            List of projects we have completed
                        </div>
                    </div>

                    <div class="row">
                        <!-- PROJECTS -->
                        <div class="col-lg-12" id="portfolio-list">
                            <div class="portfolio-items grid">

                                <!-- SINGLE PROJECT -->
                                <?php foreach ($finishedProjects as $finishedProject):  ?>
                                    <figure class="effect-zoe wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                                        <!-- PROJECT IMAGE and LINK -->
                                        <a href="/project/<?=$finishedProject->id?>" title="Click to view details">
                                            <img src="images/<?=$finishedProject->img?>" alt="">
                                            <p class="description">
                                                <span class="fa fa-eye"></span>
                                            </p>
                                        </a>

                                        <figcaption>
                                            <div class="four-lines">
                                                <div class="line red-line-bottom">
                                                </div>
                                                <div class="line green-line-bottom">
                                                </div>
                                                <div class="line purple-line-bottom">
                                                </div>
                                                <div class="line yellow-line-bottom">
                                                </div>
                                            </div>

                                            <div class="caption-text">
                                                <h6 class="dark-text NusMedium"><?=$finishedProject->title_eng?></h6>	<!-- PROJECT TITLE -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;  ?>

        <!-- =========================
         SECTION: STATS
        ============================== -->
        <section class="stats fixed-bg">
            <div class="color-overlay">
                <div class="container">
                    <div class="row">

                        <!-- STAT -->
                        <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                            <div class="stats-icon red-text">
                                <span class="icon icon-cloud"></span>
                            </div>

                            <h5 class="white-text">6</h5>
                            <div class="stats-text MTRegular">
                                Completed projects
                            </div>

                            <div class="bottom-icon red-text">
                                <span class="icon icon-circle-slelected"></span>
                            </div>

                        </div>

                        <!-- STAT -->
                        <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.30s">

                            <div class="stats-icon green-text">
                                <span class="icon icon-way"></span>
                            </div>

                            <h5 class="white-text">2</h5>
                            <div class="stats-text MTRegular">
                                Ongoing projects
                            </div>

                            <div class="bottom-icon green-text">
                                <span class="icon icon-circle-slelected"></span>
                            </div>

                        </div>

                        <!-- STAT -->
                        <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.45s">

                            <div class="stats-icon purple-text">
                                <span class="icon icon-graph-regular"></span>
                            </div>

                            <h5 class="white-text">1000+</h5>
                            <div class="stats-text MTRegular">
                                Sold apartments
                            </div>

                            <div class="bottom-icon purple-text">
                                <span class="icon icon-circle-slelected"></span>
                            </div>

                        </div>

                        <!-- STAT -->
                        <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="1s">

                            <div class="stats-icon green-text">
                                <span class="icon icon-like"></span>
                            </div>

                            <h5 class="white-text">500+</h5>
                            <div class="stats-text MTRegular">
                                Number of employees
                            </div>

                            <div class="bottom-icon green-text">
                                <span class="icon icon-circle-slelected"></span>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- =========================
         SECTION: WORK STEPS
        ============================== -->
        <section class="work-steps" id="section5">
            <div class="container">
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">Working steps</h3>
                    <div class="sub-heading NusRegular">
                        We always achieve the highest quality
                    </div>
                </div>

                <div class="row steps">
                    <div class="col-lg-6 col-lg-offset-3">

                        <!-- STEP 1 -->
                        <div class="step step-1-image clearfix">
                            <div class="step-box-left diffuse-shadow red-line-bottom white-bg wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                                <div class="step-number">
                                    01
                                </div>
                                <!-- STEP NUMBER -->

                                <div class="content-area">
                                    <h5 class="text-left MTRegular">პროექტის შედგენა</h5>
                                    <p class="text-left NusRegular">
                                        პროექტი იგეგმება დიდი ყურადღებით, გათვალისწინებულია ყველა ნიუანსი. პროექტის დაგეგმვაში ჩართულია ყველა საჭირო კომპეტენტური პირი.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- STEP 2 -->
                        <div class="step step-2-image clearfix">
                            <div class="step-box-right diffuse-shadow green-line-bottom white-bg wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.25s">

                                <div class="step-number">
                                    02
                                </div>
                                <!-- STEP NUMBER -->

                                <div class="content-area">
                                    <h5 class="text-left MTRegular">ტერიტორიის შესწავლა</h5>
                                    <p class="text-left NusRegular">
                                        ხდება ტერიტორიის შესწავლა ზომების დადგენა და გრუნტის შესწავლა გაუთვალისწინებელი შემთხვევების თავიდან ასარიდებლად.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- STEP 3 -->
                        <div class="step step-3-image clearfix">
                            <div class="step-box-left diffuse-shadow purple-line-bottom white-bg wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.35s">

                                <div class="step-number">
                                    03
                                </div>
                                <!-- STEP NUMBER -->

                                <div class="content-area">
                                    <h5 class="text-left MTRegular">გეგმა და პროექტის დიზაინი</h5>
                                    <p class="text-left NusRegular">
                                        ხდება კორპუსის, სართულების და ბინების ნახაზების შედგენ ამის შემდეგ იქმენა 3D დიზაინი, ამ საქმიანობაში ასევე უმაღლესი დონის სპეციალისტები არიან ჩართული.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- STEP 2 -->
                        <div class="step step-4-image clearfix">
                            <div class="step-box-right diffuse-shadow yellow-line-bottom white-bg wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.45s">

                                <div class="step-number">
                                    04
                                </div>
                                <!-- STEP NUMBER -->

                                <div class="content-area">
                                    <h5 class="text-left MTRegular">მშენებლობა</h5>
                                    <p class="text-left NusRegular">
                                        მშენებლობა იწყება ყველა ეტაპის წარმატებით გავლის შემდეგ, დაწყებული მშენებლობა არის მაღალი ხარისხის და ვადებში ჩაბარების გარანტი.
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- =========================
         SECTION: TESTIMONIALS
        ============================== -->
        <section class="testimonials fixed-bg" id="section7">
            <div class="color-overlay">
                <div class="container">

                    <!-- SECTION HEADER -->
                    <div class="section-header">
                        <div class="sub-heading white-text" style="font-family: 'ArchyEDT-Bold', sans-serif; letter-spacing: 2px; color: orange">
                            We build with the latest technologies and with the best materials
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================
         SECTION: FEATURES / WHY SELECT US
        ============================== -->
        <section class="features" id="section8">
            <div class="container">

                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">Why us?</h3>
                    <div class="sub-heading NusMedium">
                        We consider the requirements and wishes of the client in construction
                    </div>
                </div>

                <div class="row feature-grid wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon red-text">
                                    <span class="icon icon-graph2"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 1</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon green-text">
                                    <span class="icon icon-edit"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 2</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon purple-text">
                                    <span class="icon icon-exapnd2"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 3</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon yellow-text">
                                    <span class="icon icon-display1"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 4</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon red-text">
                                    <span class="icon icon-date"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 5</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon green-text">
                                    <span class="icon icon-medal"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 6</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                </div>

                <!-- CALL TO ACTION -->
                <div class="row cta-bottom">
                    <div class="col-lg-12">

                        <!-- HEADING -->
                        <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Buy your new apartment with us</h4>

                        <!-- BUTTON -->
                        <a href="#section11" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Contact</a>

                    </div>
                </div>


            </div>
        </section>

        <!-- =========================
         SECTION: BLOG
        ============================== -->
        <?php if ($currentWorks):  ?>
            <section class="blog bgcolor-2" id="section9">
                <div class="container">

                    <!-- SECTION HEADER -->
                    <div class="section-header">
                        <h3 class="MTMedium">Ongoing work</h3>
                        <div class="sub-heading NusMedium">
                            You will always be informed about current work
                        </div>
                    </div>

                    <div class="row blog-posts">
                        <?php foreach ($currentWorks as $currentWork):  ?>
                            <!-- REGULAR POSTS -->
                            <div class="col-lg-6 col-md-6" style="display: flex; flex-wrap: wrap">
                                <!-- SINGLE POST -->
                                <div class="regular-post green-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="width: 100%; min-height: 270px;">

                                    <!-- POST TITLE AND DETAILS -->
                                    <div class="post-content">
                                        <img style="height: 130px; width: 100%;" src="images/<?=$currentWork->img?>" alt="">
                                        <a href="/current/<?=$currentWork->id?>">
                                            <h6 class="post-title MTMedium"><?=$currentWork->title_eng?></h6>
                                        </a>
                                        <div>
                                            <span class="NusRegular"><?=substr($currentWork->content_eng, 0, 500)?></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE POST -->
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif;  ?>
    </div>
<?php elseif($lang['code'] === 'RU'):  ?>
    <div class="RU">
        <!-- NAVIGATION -->
        <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">

            <div class="container">
                <div class="navbar-header">

                    <!-- NAVBAR EXPAND COLLAPSE ON MOBILE -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation" style="height: 35px; width: 35px; position: relative">
                        <span class="sr-only">Навигация</span>
                        <span class="icon icon-menu" style="font-size: 25px; position:absolute; top:3px; right: 4px;"></span>
                    </button>

                    <!-- LOGO -->
                    <a href="/">
                        <img src="/images/logo.png" alt="LOGO" style="position: absolute; height: 70px; top: 2px;bottom: 3px;left: 100px">
                    </a>

                    <select id="languages" class="form-control" style="max-width: 60px; position: absolute; right: 10px; top: 20px;">
                        <?php new \app\widgets\languages\Languages(); ?>
                    </select>
                </div>

                <div class="navbar-collapse collapse" id="navigation">
                    <!-- NAVIGATION LINK -->
                    <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                        <li><a href="#home" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Главный</a>
                        </li>
                        <li><a href="#section1" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">О нас</a>
                        </li>
                        <li><a href="#section2" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Обзор квартир</a>
                        </li>
                        <li><a href="#section3" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Завершенные проекты</a>
                        </li>
                        <li><a href="#section8" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Почему мы</a>
                        </li>
                        <li><a href="#section9" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Текущие работы</a>
                        </li>
                        <li><a href="#section10" class="MTRegular" style="font-size: 0.8vw;padding-left: 2px">Контакт</a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- /END CONTAINER -->
        </div>
        <!-- /END NAIVATION -->
        <div class="headcontent">
            <section class="home fixed-bg" id="home">
                <div class="color-overlay-home">
                    <!-- COLOR OVERLAY -->
                    <div class="container">
                        <!-- CALL TO ACTION -->
                        <div class="cta smooth-scroll" style="margin-top: 130px;">
                            <div class="social-btns">
                                <a class="btn_ facebook tooltip" href="#section2" title="Обзор квартир">
                                    <i class="fa fa-building" aria-hidden="true"></i>
                                </a>
                                <a class="btn_ google tooltip" href="#section4"  style="margin-top: 15px;" title="Строительство живой эфир">
                                    <i class="fa fa-play" aria-hidden="true" style="margin-left:5px"></i>
                                </a>
                                <a class="btn_ skype tooltip" href="#section11"  style="margin-top: 15px;" title="Мы свяжемся с вами">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <!--                    <div class="content-2">-->
                        <!--                        <span class="four" style="font-family: 'ArchyEDT-Bold', sans-serif;" >-->
                        <!--                            ჩვენ ვართ <br>-->
                        <!--                            <img class="imgfour" src="/images/logo.png" alt="REAL PALACE">-->
                        <!--                        </span>-->
                        <!--                        <span class="five" style="font-family: 'ArchyEDT-Bold', sans-serif;" >ჩვენ ვაშენებთ ხარისხიანად</span>-->
                        <!--                        <span class="six" style="font-family: 'ArchyEDT-Bold', sans-serif;" >ჩვენ ვზრუნავთ ჩვენს კლიენტებზე</span>-->
                        <!--                    </div>-->
                    </div>
                </div>

            </section>
        </div>

        <!-- =========================
         SECTION: ABOUT US
        ============================== -->
        <section class="about-us" id="section1">

            <div class="container">
                <div class="row">

                    <!-- FEATURED IMAGE AREA -->
                    <div class="col-lg-6 visible-lg">
                        <div class="featured-image red-gradient-overlay">
                            <img src="images/aboutus.jpg" alt="">
                            <!-- ABOUT US FEATURED IMAGE -->
                            <div class="image-border">

                            </div>
                        </div>
                    </div>

                    <!-- ABOUT US BOX -->
                    <div class="col-lg-7 col-sm-12 overflow-box pull-right">
                        <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                            <div class="about-content">

                                <!-- SECTION HEADING -->
                                <h3 class="section-heading text-left MTMedium">О нас</h3>

                                <!-- PARAGRAPH -->
                                <?php if ($aboutus):  ?>
                                    <?php foreach ($aboutus as $about):  ?>
                                        <p class="text-left NusRegular"><?=$about->content_rus?></p>
                                    <?php endforeach;?>
                                <?php endif;  ?>
                            </div>

                            <div class="four-lines">
                                <div class="line red-line-bottom">
                                </div>
                                <div class="line green-line-bottom">
                                </div>
                                <div class="line purple-line-bottom">
                                </div>
                                <div class="line yellow-line-bottom">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================
         SECTION: SERVICES
        ============================== -->
        <section class="our-focus bgcolor-2" id="section2">
            <div class="container">
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">Обзор квартир</h3>
                    <div class="sub-heading">
                        <span class="NusRegular">Просмотрите и купите квартиры</span>
                    </div>
                </div>

                <div class="row focuses" style="display: flex; flex-wrap: nowrap">
                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-7 col-sm-7 col-xs-7">
                        <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <img src="images/forsell/forsell.png" alt="" style="width: 100%">
                        </div>
                    </div>
                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-7 col-sm-7 col-xs-7 single-focus white-bg diffuse-shadow wow fadeInRightBig">
                        <div class="sub-heading" style="margin-top: -50px; ">
                            <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">Выберите этаж</span>
                            <hr>
                        </div>
                        <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                            <?php  foreach ($floors as $floor): ?>
                                <?php if ($floor->parking != 1):  ?>
                                    <a href="/floor/<?=$floor->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;" >
                                        <div class="onHoverImage"><img src="images/floors/<?=$floor->img?>" style="width: 100%" /></div>
                                        Этаж <?=$floor->floor?>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>

                            <?php $parkingfloor = 0 ?>
                            <?php  foreach ($floors as $floor): ?>
                                <?php $parkingfloor = $parkingfloor + 1 ?>
                                <?php if ($floor->parking == 1):  ?>
                                    <a href="/floor/<?=$floor->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;" >
                                        <div class="onHoverImage"><img src="images/floors/parking/<?=$floor->img?>" style="width: 100%" /></div>
                                        Парковка <?=$parkingfloor?>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
        </section>

        <!-- =========================
         SECTION: VIDEO SECTION
        ============================== -->

        <section id="section4" class="video-play fixed-bg">
            <div class="color-overlay">

                <!-- HEADING -->
                <h3 class="white-text wow fadeInLeft MTMedium" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Строительство живой эфир</h3>

                <div class="row collapse" id="video-expand">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="embed-responsive embed-responsive-16by9">
                            <!-- EMBED VIDEO -->
                            <iframe id="embed" class="embed-responsive-item" width="560" height="315" src="about:blank" frameborder="0" allowfullscreen>
                            </iframe> <!-- KEEP &amp;autoplay="0" AT THE END -->
                        </div>
                    </div>
                </div>

                <!-- PLAY BUTTON -->
                <a class="play-button" data-toggle="collapse" href="#video-expand"><span class="icon icon-music-play-button"></span></a>

                <!-- TEXT -->
                <div class="play-text text white-text wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                    <span class="click-play show NusMedium">Нажмите, чтобы включить видео</span>
                </div>

            </div>
        </section>

        <!-- =========================
         SECTION: FINISHED PROJECTS
        ============================== -->
        <?php if ($finishedProjects):  ?>
            <section class="portfolio white-bg" id="section3">

                <div class="container">
                    <!-- SECTION HEADER -->
                    <div class="section-header">
                        <h3 class="MTMedium">Завершенные проекты</h3>
                        <div class="sub-heading NusRegular">
                            Список проектов, которые мы уже завершили
                        </div>
                    </div>

                    <div class="row">
                        <!-- PROJECTS -->
                        <div class="col-lg-12" id="portfolio-list">
                            <div class="portfolio-items grid">

                                <!-- SINGLE PROJECT -->
                                <?php foreach ($finishedProjects as $finishedProject):  ?>
                                    <figure class="effect-zoe wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                                        <!-- PROJECT IMAGE and LINK -->
                                        <a href="/project/<?=$finishedProject->id?>" title="Click to view details">
                                            <img src="images/<?=$finishedProject->img?>" alt="">
                                            <p class="description">
                                                <span class="fa fa-eye"></span>
                                            </p>
                                        </a>

                                        <figcaption>
                                            <div class="four-lines">
                                                <div class="line red-line-bottom">
                                                </div>
                                                <div class="line green-line-bottom">
                                                </div>
                                                <div class="line purple-line-bottom">
                                                </div>
                                                <div class="line yellow-line-bottom">
                                                </div>
                                            </div>

                                            <div class="caption-text">
                                                <h6 class="dark-text NusMedium"><?=$finishedProject->title_eng?></h6>	<!-- PROJECT TITLE -->
                                            </div>
                                        </figcaption>
                                    </figure>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;  ?>

        <!-- =========================
         SECTION: STATS
        ============================== -->
        <section class="stats fixed-bg">
            <div class="color-overlay">
                <div class="container">
                    <div class="row">

                        <!-- STAT -->
                        <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                            <div class="stats-icon red-text">
                                <span class="icon icon-cloud"></span>
                            </div>

                            <h5 class="white-text">6</h5>
                            <div class="stats-text MTRegular">
                                Завершенные проекты
                            </div>

                            <div class="bottom-icon red-text">
                                <span class="icon icon-circle-slelected"></span>
                            </div>

                        </div>

                        <!-- STAT -->
                        <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.30s">

                            <div class="stats-icon green-text">
                                <span class="icon icon-way"></span>
                            </div>

                            <h5 class="white-text">2</h5>
                            <div class="stats-text MTRegular">
                                Текущие проекты
                            </div>

                            <div class="bottom-icon green-text">
                                <span class="icon icon-circle-slelected"></span>
                            </div>

                        </div>

                        <!-- STAT -->
                        <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.45s">

                            <div class="stats-icon purple-text">
                                <span class="icon icon-graph-regular"></span>
                            </div>

                            <h5 class="white-text">1000+</h5>
                            <div class="stats-text MTRegular">
                                Проданные квартиры
                            </div>

                            <div class="bottom-icon purple-text">
                                <span class="icon icon-circle-slelected"></span>
                            </div>

                        </div>

                        <!-- STAT -->
                        <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="1s">

                            <div class="stats-icon green-text">
                                <span class="icon icon-like"></span>
                            </div>

                            <h5 class="white-text">500+</h5>
                            <div class="stats-text MTRegular">
                                Количество сотрудников
                            </div>

                            <div class="bottom-icon green-text">
                                <span class="icon icon-circle-slelected"></span>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- =========================
         SECTION: WORK STEPS
        ============================== -->
        <section class="work-steps" id="section5">
            <div class="container">
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">Шаги</h3>
                    <div class="sub-heading NusRegular">
                        Мы всегда достигаем высочайшего качества
                    </div>
                </div>

                <div class="row steps">
                    <div class="col-lg-6 col-lg-offset-3">

                        <!-- STEP 1 -->
                        <div class="step step-1-image clearfix">
                            <div class="step-box-left diffuse-shadow red-line-bottom white-bg wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                                <div class="step-number">
                                    01
                                </div>
                                <!-- STEP NUMBER -->

                                <div class="content-area">
                                    <h5 class="text-left MTRegular">პროექტის შედგენა</h5>
                                    <p class="text-left NusRegular">
                                        პროექტი იგეგმება დიდი ყურადღებით, გათვალისწინებულია ყველა ნიუანსი. პროექტის დაგეგმვაში ჩართულია ყველა საჭირო კომპეტენტური პირი.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- STEP 2 -->
                        <div class="step step-2-image clearfix">
                            <div class="step-box-right diffuse-shadow green-line-bottom white-bg wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.25s">

                                <div class="step-number">
                                    02
                                </div>
                                <!-- STEP NUMBER -->

                                <div class="content-area">
                                    <h5 class="text-left MTRegular">ტერიტორიის შესწავლა</h5>
                                    <p class="text-left NusRegular">
                                        ხდება ტერიტორიის შესწავლა ზომების დადგენა და გრუნტის შესწავლა გაუთვალისწინებელი შემთხვევების თავიდან ასარიდებლად.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- STEP 3 -->
                        <div class="step step-3-image clearfix">
                            <div class="step-box-left diffuse-shadow purple-line-bottom white-bg wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.35s">

                                <div class="step-number">
                                    03
                                </div>
                                <!-- STEP NUMBER -->

                                <div class="content-area">
                                    <h5 class="text-left MTRegular">გეგმა და პროექტის დიზაინი</h5>
                                    <p class="text-left NusRegular">
                                        ხდება კორპუსის, სართულების და ბინების ნახაზების შედგენ ამის შემდეგ იქმენა 3D დიზაინი, ამ საქმიანობაში ასევე უმაღლესი დონის სპეციალისტები არიან ჩართული.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- STEP 2 -->
                        <div class="step step-4-image clearfix">
                            <div class="step-box-right diffuse-shadow yellow-line-bottom white-bg wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.45s">

                                <div class="step-number">
                                    04
                                </div>
                                <!-- STEP NUMBER -->

                                <div class="content-area">
                                    <h5 class="text-left MTRegular">მშენებლობა</h5>
                                    <p class="text-left NusRegular">
                                        მშენებლობა იწყება ყველა ეტაპის წარმატებით გავლის შემდეგ, დაწყებული მშენებლობა არის მაღალი ხარისხის და ვადებში ჩაბარების გარანტი.
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- =========================
         SECTION: TESTIMONIALS
        ============================== -->
        <section class="testimonials fixed-bg" id="section7">
            <div class="color-overlay">
                <div class="container">

                    <!-- SECTION HEADER -->
                    <div class="section-header">
                        <div class="sub-heading white-text" style="font-family: 'ArchyEDT-Bold', sans-serif; letter-spacing: 2px; color: orange">
                            Мы строим с использованием новейших технологий и лучших материалов
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================
         SECTION: FEATURES / WHY SELECT US
        ============================== -->
        <section class="features" id="section8">
            <div class="container">

                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">Почему мы?</h3>
                    <div class="sub-heading NusMedium">
                        Мы учитываем требования и пожелания клиента в строительстве
                    </div>
                </div>

                <div class="row feature-grid wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon red-text">
                                    <span class="icon icon-graph2"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 1</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon green-text">
                                    <span class="icon icon-edit"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 2</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon purple-text">
                                    <span class="icon icon-exapnd2"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 3</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon yellow-text">
                                    <span class="icon icon-display1"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 4</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon red-text">
                                    <span class="icon icon-date"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 5</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                    <!-- SINGLE FEATURE -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="feature-box text-left">

                            <div class="feature-header">
                                <div class="icon green-text">
                                    <span class="icon icon-medal"></span>	<!-- FEATURE ICON -->
                                </div>
                                <h6 class="MTRegular">მიზეზი 6</h6>	<!-- HEADING -->
                            </div>

                            <!-- FEATURE DETAILS -->
                            <p class="NusRegular">
                                მიზეზის აღწერა
                            </p>
                        </div>
                    </div>

                </div>

                <!-- CALL TO ACTION -->
                <div class="row cta-bottom">
                    <div class="col-lg-12">

                        <!-- HEADING -->
                        <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Купите новую квартиру у нас</h4>

                        <!-- BUTTON -->
                        <a href="#section11" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Контакт</a>

                    </div>
                </div>


            </div>
        </section>

        <!-- =========================
         SECTION: BLOG
        ============================== -->
        <?php if ($currentWorks):  ?>
            <section class="blog bgcolor-2" id="section9">
                <div class="container">

                    <!-- SECTION HEADER -->
                    <div class="section-header">
                        <h3 class="MTMedium">Текущие работы</h3>
                        <div class="sub-heading NusMedium">
                            Вы всегда будете в курсе текущей работы
                        </div>
                    </div>

                    <div class="row blog-posts">
                        <?php foreach ($currentWorks as $currentWork):  ?>
                            <!-- REGULAR POSTS -->
                            <div class="col-lg-6 col-md-6" style="display: flex; flex-wrap: wrap">
                                <!-- SINGLE POST -->
                                <div class="regular-post green-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="width: 100%; min-height: 270px;">

                                    <!-- POST TITLE AND DETAILS -->
                                    <div class="post-content">
                                        <img style="height: 130px; width: 100%;" src="images/<?=$currentWork->img?>" alt="">
                                        <a href="/current/<?=$currentWork->id?>">
                                            <h6 class="post-title MTMedium"><?=$currentWork->title_rus?></h6>
                                        </a>
                                        <div>
                                            <span class="NusRegular"><?=substr($currentWork->content_rus, 0, 500)?></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- SINGLE POST -->
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif;  ?>
    </div>
<?php endif;  ?>
