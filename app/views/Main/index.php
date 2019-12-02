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
                    <div class="content-2">
                        <span class="four" style="font-family: 'ArchyEDT-Bold', sans-serif;">
                            ჩვენ ვართ <br>
                            <img class="imgfour" src="/images/logo.png" alt="REAL PALACE">
                        </span>
                        <span class="five" style="font-family: 'ArchyEDT-Bold', sans-serif;">ჩვენ ვაშენებთ ხარისხიანად</span>
                        <span class="six" style="font-family: 'ArchyEDT-Bold', sans-serif;">ჩვენ ვზრუნავთ ჩვენს კლიენტებზე</span>
                    </div>
            </div>
        </div>

    </section>

    <!-- =========================
     SECTION: ABOUT US
    ============================== -->
    <section class="about-us" id="section1">

        <div class="container">
            <div class="row">

                <!-- FEATURED IMAGE AREA -->
                <div class="col-lg-6 visible-lg">
                    <div class="featured-image red-gradient-overlay">
                        <img src="images/aboutus.jfif" alt="">
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
                   <span class="NusRegular">დაათვალიერეთ და შეიძინეთ ბინები</span>
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
                        <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">აირჩიეთ სართული</span>
                        <hr>
                    </div>
                    <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                        <?php  foreach ($floors as $floor): ?>
                            <?php if ($floor->parking != 1):  ?>
                                <a href="/floor/<?=$floor->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;">
                                    <div class="onHoverImage"><img src="images/floors/<?=$floor->img?>" style="width: 100%" /></div>
                                    სართული <?=$floor->floor?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <?php $parkingfloor = 0 ?>
                        <?php  foreach ($floors as $floor): ?>
                            <?php $parkingfloor = $parkingfloor + 1 ?>
                            <?php if ($floor->parking == 1):  ?>
                                <a href="/floor/<?=$floor->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;">
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
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/PTYyM6xyedg?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=0" frameborder="0" allowfullscreen>
                        </iframe> <!-- KEEP &amp;autoplay="0" AT THE END -->

                    </div>
                </div>
            </div>

            <!-- PLAY BUTTON -->
            <a class="play-button" data-toggle="collapse" href="#video-expand"><span class="icon icon-music-play-button"></span></a>

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
                                            <span class="icon icon-plus"></span>
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
                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;">შეიძინე შენი ახალი ბინა ჩვენთან</h4>

                    <!-- BUTTON -->
                    <a href="#section11" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;">კონტაქტი</a>

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
                    <div class="regular-post green-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

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
    <section class="home fixed-bg" id="home">

        <div class="color-overlay">
            <!-- COLOR OVERLAY -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-12">

                        <!-- INTRO HEADING -->
                        <h1 class="intro white-text text-center">We design things with love and passion.</h1>
                        <!-- CALL TO ACTION -->
                        <div class="cta smooth-scroll">
                            <a href="#section3" class="btn btn-default standard-button red-button">Our Works</a>
                            <a href="#section2" class="btn btn-default standard-button green-button">Services</a>
                        </div>

                    </div>
                </div>

                <div class="row text-center">

                    <!-- 3 FEATURES ON HOMEPAGE -->
                    <div class="home-features">

                        <!-- SINGLE FEATURE -->
                        <div class="col-md-4 col-sm-4">
                            <div class="single-feature">
                                <div class="icon green-text">
                                    <span class="icon icon-money-regular"></span>
                                    <!-- ICON -->
                                </div>
                                <h6 class="green-text uppercase">Fixed Price Projects</h6>
                            </div>
                        </div>

                        <!-- SINGLE FEATURE -->
                        <div class="col-md-4 col-sm-4">
                            <div class="single-feature">
                                <div class="icon purple-text">
                                    <span class="icon icon-clock-regular"></span>
                                    <!-- ICON -->
                                </div>
                                <h6 class="purple-text uppercase">Receive On Time</h6>
                            </div>
                        </div>

                        <!-- SINGLE FEATURE -->
                        <div class="col-md-4 col-sm-4">
                            <div class="single-feature">
                                <div class="icon yellow-text">
                                    <span class="icon icon-happy-smiley-streamline"></span>
                                    <!-- ICON -->
                                </div>
                                <h6 class="yellow-text uppercase">Satisfaction Guranteed</h6>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END OF 3 FEATURES -->

            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: ABOUT US
    ============================== -->
    <section class="about-us" id="section1">

        <div class="container">
            <div class="row">

                <!-- FEATURED IMAGE AREA -->
                <div class="col-lg-6 visible-lg">
                    <div class="featured-image red-gradient-overlay">
                        <img src="images/about-us.jpg" alt="">
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
                            <h2 class="section-heading text-left">About Us.</h2>

                            <!-- PARAGRAPH -->
                            <?php if ($aboutus):  ?>
                                <?php foreach ($aboutus as $about):  ?>
                                    <p class="text-left"><?=$about->content_eng?></p>
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
     SECTION: VIDEO SECTION
    ============================== -->

    <section class="video-play fixed-bg">
        <div class="color-overlay">

            <!-- HEADING -->
            <h3 class="white-text wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Explore Our Awesomeness</h3>

            <div class="row collapse" id="video-expand">
                <div class="col-md-8 col-md-offset-2">
                    <div class="embed-responsive embed-responsive-16by9">

                        <!-- EMBED VIDEO -->
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/PTYyM6xyedg?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=0" frameborder="0" allowfullscreen>
                        </iframe> <!-- KEEP &amp;autoplay="0" AT THE END -->

                    </div>
                </div>
            </div>

            <!-- PLAY BUTTON -->
            <a class="play-button" data-toggle="collapse" href="#video-expand"><span class="icon icon-music-play-button"></span></a>

            <!-- TEXT -->
            <div class="play-text text white-text wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <span class="click-play show">Click to play the video</span>
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
                    <h2>Finished projects</h2>
                    <div class="sub-heading">
                        We understand your requirement and provide quality works.
                    </div>
                </div>

                <div class="row">

                    <!-- PROJECT LOADING ICON -->
                    <div id="loader">
                        <div class="loader-icon">
                            <div class="loader">
                                <svg class="circular" viewbox="25 25 50 50">
                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- PROJECTS -->
                    <div class="col-lg-12" id="portfolio-list">
                        <div class="portfolio-items grid">

                            <!-- SINGLE PROJECT -->
                            <?php foreach ($finishedProjects as $finishedProject):  ?>
                                <figure class="effect-zoe wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                                    <!-- PROJECT IMAGE and LINK -->
                                    <a href="project/<?=$finishedProject->id?>" title="Click to view details" class="more"><img src="images/projects/1.jpg" alt="">
                                        <p class="description">
                                            <span class="icon icon-plus"></span>
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
                                            <h6 class="dark-text"><?=$finishedProject->title_eng?></h6>	<!-- PROJECT TITLE -->
                                        </div>
                                    </figcaption>
                                </figure>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <!-- LOADED PROJECT WILL SHOW HERE -->
                    <div id="loaded-content">
                    </div>
                    <!-- BACK TO PORTFOLIO BUTTON ON LOADED PROJECT -->
                    <a id="back-button" class="back-button btn btn-default standard-button red-button" href="#"><span class="icon icon-arrow-left"></span> Go Back</a>
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
                            <span class="icon icon-graph-regular"></span>
                        </div>

                        <h5 class="white-text">12,458+</h5>
                        <div class="stats-text">
                            Projects Completed
                        </div>

                        <div class="bottom-icon red-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.30s">

                        <div class="stats-icon green-text">
                            <span class="icon icon-add-user-regular"></span>
                        </div>

                        <h5 class="white-text">1,796+</h5>
                        <div class="stats-text">
                            Satisfied Clients
                        </div>

                        <div class="bottom-icon green-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.45s">

                        <div class="stats-icon purple-text">
                            <span class="icon icon-like"></span>
                        </div>

                        <h5 class="white-text">1,000+</h5>
                        <div class="stats-text">
                            Positive Feedbacks
                        </div>

                        <div class="bottom-icon purple-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="1s">

                        <div class="stats-icon yellow-text">
                            <span class="icon icon-gift-regular"></span>
                        </div>

                        <h5 class="white-text">1,500+</h5>
                        <div class="stats-text">
                            Freebies Released
                        </div>

                        <div class="bottom-icon yellow-text">
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

            <!-- SECTION NUMBER -->
            <div class="section-number centered-number">
                05
            </div>

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h2>Work Steps.</h2>
                <div class="sub-heading">
                    We understand your requirement and provide quality works.
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
                                <h4 class="text-left">Project Understanding</h4>
                                <p class="text-left">
                                    Buyer strategy incubator niche market startup. Entrepreneur non disclosure agreement MVP traction beta social media investor accelerator.
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
                                <h4 class="text-left">Research &amp; Planning</h4>
                                <p class="text-left">
                                    Buyer strategy incubator niche market startup. Entrepreneur non disclosure agreement MVP traction beta social media investor accelerator.
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
                                <h4 class="text-left">Wireframe &amp; Design</h4>
                                <p class="text-left">
                                    Buyer strategy incubator niche market startup. Entrepreneur non disclosure agreement MVP traction beta social media investor accelerator.
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
                                <h4 class="text-left">Development</h4>
                                <p class="text-left">
                                    Buyer strategy incubator niche market startup. Entrepreneur non disclosure agreement MVP traction beta social media investor accelerator.
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

                <!-- SECTION NUMBER -->
                <div class="section-number centered-number">
                    07
                </div>

                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h2 class="white-text">Testimonials.</h2>
                    <div class="sub-heading white-text">
                        We understand your requirement and provide quality works.
                    </div>
                </div>

                <div id="feedbacks" class="owl-carousel owl-theme">

                    <!-- START FIRST FEEDBACK -->
                    <div class="row">
                        <div class="single-feedback clearfix">

                            <!-- CLIENT IMAGE FOR LARGE SCREEN -->
                            <div class="col-lg-4 visible-lg">
                                <div class="client-image wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                                    <img src="images/feedbacks/client-1.jpg" alt="">
                                    <div class="image-border">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="feedback-content white-bg clearfix">

                                    <div class="q-sign top">
                                        “
                                    </div>

                                    <blockquote class="clearfix">
                                        <p class="text-left">
                                            Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership equity series A financing network effects user experience crowdsource. Burn rate stock bootstrapping direct mailing release client traction creative facebook monetization crowdfunding rockstar.
                                        </p>

                                        <cite class="pull-left text-left">
                                            <!-- CLIENT IMAGE FOR SMALL SCREEN -->
                                            <div class="client-image hidden-lg">
                                                <img src="images/feedbacks/client-1.jpg" alt="">
                                            </div>

                                            <div class="client-details">

                                                <div class="signature">
                                                    <img src="images/feedbacks/signature-1.png" alt="">
                                                </div>

                                                <h6 class="dark-text">Melina Albrecht</h6>
                                                <div class="extra-small-text">
                                                    Founder, TingTong
                                                </div>

                                            </div>

                                        </cite>
                                    </blockquote>

                                    <div class="q-sign bottom">
                                        ”
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
                    </div> <!-- END FIRST FEEDBACK -->

                    <!-- START SECOND FEEDBACK -->
                    <div class="row">
                        <div class="single-feedback clearfix">

                            <!-- CLIENT IMAGE FOR LARGE SCREEN -->
                            <div class="col-lg-4 visible-lg">
                                <div class="client-image wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                                    <img src="images/feedbacks/client-2.jpg" alt="">
                                    <div class="image-border">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="feedback-content white-bg clearfix">

                                    <div class="q-sign top">
                                        “
                                    </div>

                                    <blockquote class="clearfix">
                                        <p class="text-left">
                                            Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership equity series A financing network effects user experience crowdsource. Burn rate stock bootstrapping direct mailing release client traction creative facebook monetization crowdfunding rockstar.
                                        </p>

                                        <cite class="pull-left text-left">

                                            <div class="client-image hidden-lg">
                                                <img src="images/feedbacks/client-2.jpg" alt="">
                                            </div>

                                            <div class="client-details">
                                                <div class="signature">
                                                    <img src="images/feedbacks/signature-2.png" alt="">
                                                </div>

                                                <h6 class="dark-text">Alexander Weiß</h6>

                                                <div class="extra-small-text">
                                                    Founder, TingTong
                                                </div>

                                            </div>
                                        </cite>
                                    </blockquote>

                                    <div class="q-sign bottom">
                                        ”
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
                    </div> <!-- END SECOND FEEDBACK -->


                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: FEATURES / WHY SELECT US
    ============================== -->
    <section class="features" id="section8">
        <div class="container">

            <!-- SECTION NUMBER -->
            <div class="section-number centered-number">
                08
            </div>

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h2>Why Select Us?</h2>
                <div class="sub-heading">
                    We understand your requirement and provide quality works.
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
                            <h6>Business<br/>Growth</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Success scrum project funding marketing seed money prototype innovator direct hackathon android angel investor.
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
                            <h6>Unlimited<br/>Revisions</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Technology founders churn rate niche market long tail release iteration burn rate backing. Churn rate accelerator.
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
                            <h6>Ultimate<br/>Perfection</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership.
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
                            <h6>Smart<br/>Experience</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Success scrum project funding marketing seed money prototype innovator direct hackathon android angel investor.
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
                            <h6>Strict<br/>Deadline</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Technology founders churn rate niche market long tail release iteration burn rate backing. Churn rate accelerator.
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
                            <h6>Reputed<br/>Company</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership.
                        </p>
                    </div>
                </div>

            </div>

            <!-- CALL TO ACTION -->
            <div class="row cta-bottom">
                <div class="col-lg-12">

                    <!-- HEADING -->
                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Start your journey with us now</h4>

                    <!-- BUTTON -->
                    <a href="" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Get Started</a>

                </div>
            </div>


        </div>
    </section>

    <!-- =========================
     SECTION: BLOG
    ============================== -->
    <section class="blog bgcolor-2" id="section9">
        <div class="container">

            <!-- SECTION NUMBER -->
            <div class="section-number centered-number">
                09
            </div>

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h2>Our Blog</h2>
                <div class="sub-heading">
                    We understand your requirement and provide quality works.
                </div>
            </div>

            <div class="row blog-posts">

                <!-- FEATURED POST -->
                <div class="col-lg-6 col-md-6">
                    <div class="featured-post red-line-bottom white-bg diffuse-shadow text-left">

                        <!-- FEATURED IMAGE -->
                        <div class="post-featured-image dark-gradient-overlay">
                            <img src="images/blog/featured-image.jpg" alt="Blog featured image">
                        </div>

                        <!-- POST AUTHOR AND DATE -->
                        <div class="post-info">
                            <div class="author uppercase red-text strong">
                                Damian Schreiber
                            </div>
                            <div class="date extra-small-text white-text">
                                December 10, 2015
                            </div>
                        </div>

                        <!-- POST TITLE AND DETAILS -->
                        <div class="post-content">
                            <a href="">
                                <h5 class="post-title">
                                    Facebook’s CNN livestream will test its place in the second screen era </h5>
                            </a>
                            <p>
                                Traction seed money infographic accelerator pivot value proposition ownership business-to-consumer iteration market analytics paradigm
                            </p>
                        </div>

                    </div>
                </div>

                <!-- REGULAR POSTS -->
                <div class="col-lg-6 col-md-6">
                    <!-- SINGLE POST -->
                    <div class="regular-post green-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                        <!-- AUTHOR AND DATE -->
                        <div class="post-info">
                            <div class="green-text uppercase">
                                Damian Schreiber
                            </div>
                            <div class="date extra-small-text">
                                December 10, 2015
                            </div>
                        </div>

                        <!-- POST TITLE AND DETAILS -->
                        <div class="post-content">
                            <a href="">
                                <h6 class="post-title">Google Street View adds virtual reality support</h6>
                            </a>
                            <div>
                                Traction seed money infographic accelerator pivot value proposition ownership business-to-consumer iteration market analytics paradigm
                            </div>
                        </div>
                    </div>

                    <!-- SINGLE POST -->
                    <div class="regular-post purple-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.25s">

                        <!-- AUTHOR AND DATE -->
                        <div class="post-info">
                            <div class="purple-text uppercase">
                                Damian Schreiber
                            </div>
                            <div class="date extra-small-text">
                                December 10, 2015
                            </div>
                        </div>

                        <!-- POST TITLE AND DETAILS -->
                        <div class="post-content">
                            <a href="">
                                <h6 class="post-title">Google Street View adds virtual reality support</h6>
                            </a>
                            <div>
                                Traction seed money infographic accelerator pivot value proposition ownership business-to-consumer iteration market analytics paradigm
                            </div>
                        </div>
                    </div>

                    <!-- SINGLE POST -->
                    <div class="regular-post yellow-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.35s">

                        <!-- AUTHOR AND DATE -->
                        <div class="post-info">
                            <div class="yellow-text uppercase">
                                Damian Schreiber
                            </div>
                            <div class="date extra-small-text">
                                December 10, 2015
                            </div>
                        </div>

                        <!-- POST TITLE AND DETAILS -->
                        <div class="post-content">
                            <a href="">
                                <h6 class="post-title">Google Street View adds virtual reality support</h6>
                            </a>
                            <div>
                                Traction seed money infographic accelerator pivot value proposition ownership business-to-consumer iteration market analytics paradigm
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</div>
<?php elseif($lang['code'] === 'RU'):  ?>
<div class="RU">
    <section class="home fixed-bg" id="home">

        <div class="color-overlay">
            <!-- COLOR OVERLAY -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-12">

                        <!-- INTRO HEADING -->
                        <h1 class="intro white-text text-center">We design things with love and passion.</h1>
                        <!-- CALL TO ACTION -->
                        <div class="cta smooth-scroll">
                            <a href="#section3" class="btn btn-default standard-button red-button">Our Works</a>
                            <a href="#section2" class="btn btn-default standard-button green-button">Services</a>
                        </div>

                    </div>
                </div>

                <div class="row text-center">

                    <!-- 3 FEATURES ON HOMEPAGE -->
                    <div class="home-features">

                        <!-- SINGLE FEATURE -->
                        <div class="col-md-4 col-sm-4">
                            <div class="single-feature">
                                <div class="icon green-text">
                                    <span class="icon icon-money-regular"></span>
                                    <!-- ICON -->
                                </div>
                                <h6 class="green-text uppercase">Fixed Price Projects</h6>
                            </div>
                        </div>

                        <!-- SINGLE FEATURE -->
                        <div class="col-md-4 col-sm-4">
                            <div class="single-feature">
                                <div class="icon purple-text">
                                    <span class="icon icon-clock-regular"></span>
                                    <!-- ICON -->
                                </div>
                                <h6 class="purple-text uppercase">Receive On Time</h6>
                            </div>
                        </div>

                        <!-- SINGLE FEATURE -->
                        <div class="col-md-4 col-sm-4">
                            <div class="single-feature">
                                <div class="icon yellow-text">
                                    <span class="icon icon-happy-smiley-streamline"></span>
                                    <!-- ICON -->
                                </div>
                                <h6 class="yellow-text uppercase">Satisfaction Guranteed</h6>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END OF 3 FEATURES -->

            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: ABOUT US
    ============================== -->
    <section class="about-us" id="section1">

        <div class="container">
            <div class="row">

                <!-- FEATURED IMAGE AREA -->
                <div class="col-lg-6 visible-lg">
                    <div class="featured-image red-gradient-overlay">
                        <img src="images/about-us.jpg" alt="">
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
                            <h2 class="section-heading text-left">About Us.</h2>

                            <!-- PARAGRAPH -->
                            <?php if ($aboutus):  ?>
                                <?php foreach ($aboutus as $about):  ?>
                                    <p class="text-left"><?=$about->content_rus?></p>
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

            <!-- SECTION NUMBER -->
            <div class="section-number centered-number">
                02
            </div>

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h2>Our Focus.</h2>
                <div class="sub-heading">
                    We understand your requirement and provide quality works.
                </div>
            </div>

            <div class="row focuses">

                <!-- SINGLE FOCUS COLUMN -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-focus white-bg diffuse-shadow red-line-bottom wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <!-- ICON -->
                        <div class="icon red-text">
                            <span class="icon icon-basic-postcard-multiple"></span>
                        </div>
                        <!-- HEADING -->
                        <h5>Web Design</h5>
                        <!-- DETAILS -->
                        <p>
                            Analytics release series A financing launch party interaction design android angel investor.
                        </p>
                    </div>
                </div>

                <!-- SINGLE FOCUS COLUMN -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-focus white-bg diffuse-shadow green-line-bottom wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <!-- ICON -->
                        <div class="icon green-text">
                            <span class="icon icon-basic-map"></span>
                        </div>
                        <!-- HEADING -->
                        <h5>UX Design</h5>
                        <!-- DETAILS -->
                        <p>
                            Analytics release series A financing launch party interaction design android angel investor.
                        </p>
                    </div>
                </div>

                <!-- SINGLE FOCUS COLUMN -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-focus white-bg diffuse-shadow purple-line-bottom wow fadeInDown" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <!-- ICON -->
                        <div class="icon purple-text">
                            <span class="icon icon-camera-regular"></span>
                        </div>
                        <!-- HEADING -->
                        <h5>Photogrpahy</h5>
                        <!-- DETAILS -->
                        <p>
                            Analytics release series A financing launch party interaction design android angel investor.
                        </p>
                    </div>
                </div>

                <!-- SINGLE FOCUS COLUMN -->
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-focus white-bg diffuse-shadow yellow-line-bottom wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                        <!-- ICON -->
                        <div class="icon yellow-text">
                            <span class="icon icon-unie16d"></span>
                        </div>
                        <!-- HEADING -->
                        <h5>App Development</h5>
                        <!-- DETAILS -->
                        <p>
                            Analytics release series A financing launch party interaction design android angel investor.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: VIDEO SECTION
    ============================== -->

    <section class="video-play fixed-bg">
        <div class="color-overlay">

            <!-- HEADING -->
            <h3 class="white-text wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Explore Our Awesomeness</h3>

            <div class="row collapse" id="video-expand">
                <div class="col-md-8 col-md-offset-2">
                    <div class="embed-responsive embed-responsive-16by9">

                        <!-- EMBED VIDEO -->
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/PTYyM6xyedg?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=0" frameborder="0" allowfullscreen>
                        </iframe> <!-- KEEP &amp;autoplay="0" AT THE END -->

                    </div>
                </div>
            </div>

            <!-- PLAY BUTTON -->
            <a class="play-button" data-toggle="collapse" href="#video-expand"><span class="icon icon-music-play-button"></span></a>

            <!-- TEXT -->
            <div class="play-text text white-text wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                <span class="click-play show">Click to play the video</span>
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
                    <h2>Finished projects</h2>
                    <div class="sub-heading">
                        We understand your requirement and provide quality works.
                    </div>
                </div>

                <div class="row">

                    <!-- PROJECT LOADING ICON -->
                    <div id="loader">
                        <div class="loader-icon">
                            <div class="loader">
                                <svg class="circular" viewbox="25 25 50 50">
                                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- PROJECTS -->
                    <div class="col-lg-12" id="portfolio-list">
                        <div class="portfolio-items grid">

                            <!-- SINGLE PROJECT -->
                            <?php foreach ($finishedProjects as $finishedProject):  ?>
                                <figure class="effect-zoe wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                                    <!-- PROJECT IMAGE and LINK -->
                                    <a href="project/<?=$finishedProject->id?>" title="Click to view details" class="more"><img src="images/projects/<?=$finishedProject->img?>" alt="">
                                        <p class="description">
                                            <span class="icon icon-plus"></span>
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
                                            <h6 class="dark-text"><?=$finishedProject->title_rus?></h6>	<!-- PROJECT TITLE -->
                                        </div>
                                    </figcaption>
                                </figure>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <!-- LOADED PROJECT WILL SHOW HERE -->
                    <div id="loaded-content">
                    </div>
                    <!-- BACK TO PORTFOLIO BUTTON ON LOADED PROJECT -->
                    <a id="back-button" class="back-button btn btn-default standard-button red-button" href="#"><span class="icon icon-arrow-left"></span> Go Back</a>
                </div>
            </div>
        </section>
    <?php endif;  ?>
    <!-- =========================
     SECTION: TEAM
    ============================== -->
    <section class="team bgcolor-2" id="section4">
        <div class="container">

            <!-- SECTION NUMBER -->
            <div class="section-number centered-number">
                04
            </div>

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h2>Our Team.</h2>
                <div class="sub-heading">
                    We understand your requirement and provide quality works.
                </div>
            </div>

            <div class="row">

                <!-- TEAM MEMBER LIST -->
                <div class="member-list">

                    <!-- SINGLE MEMBER -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-member red-line-bottom diffuse-shadow wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <div class="member-pic red-gradient-overlay">
                                <div class="gradient">
                                    <img src="images/team-members/1.jpg" alt="">
                                    <!-- MEMBER IMAGE -->
                                </div>
                            </div>
                            <h6 class="red-text">Michael Schmitt</h6>
                            <!-- MEMBER NAME -->
                            <div class="extra-small-text">
                                Founder &amp; CEO
                            </div>
                        </div>
                    </div>

                    <!-- SINGLE MEMBER -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-member green-line-bottom diffuse-shadow wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <div class="member-pic green-gradient-overlay">
                                <div class="gradient">
                                    <img src="images/team-members/2.jpg" alt="">
                                    <!-- MEMBER IMAGE -->
                                </div>
                            </div>
                            <h6 class="green-text">Michael Schmitt</h6>
                            <!-- MEMBER NAME -->
                            <div class="extra-small-text">
                                Founder &amp; CEO
                            </div>
                        </div>
                    </div>

                    <!-- SINGLE MEMBER -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-member purple-line-bottom diffuse-shadow wow fadeInDown" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <div class="member-pic purple-gradient-overlay">
                                <div class="gradient">
                                    <img src="images/team-members/3.jpg" alt="">
                                    <!-- MEMBER IMAGE -->
                                </div>
                            </div>
                            <h6 class="purple-text">Michael Schmitt</h6>
                            <!-- MEMBER NAME -->
                            <div class="extra-small-text">
                                Founder &amp; CEO
                            </div>
                        </div>
                    </div>

                    <!-- SINGLE MEMBER -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-member yellow-line-bottom diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <div class="member-pic yellow-gradient-overlay">
                                <div class="gradient">
                                    <img src="images/team-members/4.jpg" alt="">
                                    <!-- MEMBER IMAGE -->
                                </div>
                            </div>
                            <h6 class="yellow-text">Michael Schmitt</h6>
                            <!-- MEMBER NAME -->
                            <div class="extra-small-text">
                                Founder &amp; CEO
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

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
                            <span class="icon icon-graph-regular"></span>
                        </div>

                        <h5 class="white-text">12,458+</h5>
                        <div class="stats-text">
                            Projects Completed
                        </div>

                        <div class="bottom-icon red-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.30s">

                        <div class="stats-icon green-text">
                            <span class="icon icon-add-user-regular"></span>
                        </div>

                        <h5 class="white-text">1,796+</h5>
                        <div class="stats-text">
                            Satisfied Clients
                        </div>

                        <div class="bottom-icon green-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.45s">

                        <div class="stats-icon purple-text">
                            <span class="icon icon-like"></span>
                        </div>

                        <h5 class="white-text">1,000+</h5>
                        <div class="stats-text">
                            Positive Feedbacks
                        </div>

                        <div class="bottom-icon purple-text">
                            <span class="icon icon-circle-slelected"></span>
                        </div>

                    </div>

                    <!-- STAT -->
                    <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="1s">

                        <div class="stats-icon yellow-text">
                            <span class="icon icon-gift-regular"></span>
                        </div>

                        <h5 class="white-text">1,500+</h5>
                        <div class="stats-text">
                            Freebies Released
                        </div>

                        <div class="bottom-icon yellow-text">
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

            <!-- SECTION NUMBER -->
            <div class="section-number centered-number">
                05
            </div>

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h2>Work Steps.</h2>
                <div class="sub-heading">
                    We understand your requirement and provide quality works.
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
                                <h4 class="text-left">Project Understanding</h4>
                                <p class="text-left">
                                    Buyer strategy incubator niche market startup. Entrepreneur non disclosure agreement MVP traction beta social media investor accelerator.
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
                                <h4 class="text-left">Research &amp; Planning</h4>
                                <p class="text-left">
                                    Buyer strategy incubator niche market startup. Entrepreneur non disclosure agreement MVP traction beta social media investor accelerator.
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
                                <h4 class="text-left">Wireframe &amp; Design</h4>
                                <p class="text-left">
                                    Buyer strategy incubator niche market startup. Entrepreneur non disclosure agreement MVP traction beta social media investor accelerator.
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
                                <h4 class="text-left">Development</h4>
                                <p class="text-left">
                                    Buyer strategy incubator niche market startup. Entrepreneur non disclosure agreement MVP traction beta social media investor accelerator.
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

                <!-- SECTION NUMBER -->
                <div class="section-number centered-number">
                    07
                </div>

                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h2 class="white-text">Testimonials.</h2>
                    <div class="sub-heading white-text">
                        We understand your requirement and provide quality works.
                    </div>
                </div>

                <div id="feedbacks" class="owl-carousel owl-theme">

                    <!-- START FIRST FEEDBACK -->
                    <div class="row">
                        <div class="single-feedback clearfix">

                            <!-- CLIENT IMAGE FOR LARGE SCREEN -->
                            <div class="col-lg-4 visible-lg">
                                <div class="client-image wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                                    <img src="images/feedbacks/client-1.jpg" alt="">
                                    <div class="image-border">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="feedback-content white-bg clearfix">

                                    <div class="q-sign top">
                                        “
                                    </div>

                                    <blockquote class="clearfix">
                                        <p class="text-left">
                                            Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership equity series A financing network effects user experience crowdsource. Burn rate stock bootstrapping direct mailing release client traction creative facebook monetization crowdfunding rockstar.
                                        </p>

                                        <cite class="pull-left text-left">
                                            <!-- CLIENT IMAGE FOR SMALL SCREEN -->
                                            <div class="client-image hidden-lg">
                                                <img src="images/feedbacks/client-1.jpg" alt="">
                                            </div>

                                            <div class="client-details">

                                                <div class="signature">
                                                    <img src="images/feedbacks/signature-1.png" alt="">
                                                </div>

                                                <h6 class="dark-text">Melina Albrecht</h6>
                                                <div class="extra-small-text">
                                                    Founder, TingTong
                                                </div>

                                            </div>

                                        </cite>
                                    </blockquote>

                                    <div class="q-sign bottom">
                                        ”
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
                    </div> <!-- END FIRST FEEDBACK -->

                    <!-- START SECOND FEEDBACK -->
                    <div class="row">
                        <div class="single-feedback clearfix">

                            <!-- CLIENT IMAGE FOR LARGE SCREEN -->
                            <div class="col-lg-4 visible-lg">
                                <div class="client-image wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                                    <img src="images/feedbacks/client-2.jpg" alt="">
                                    <div class="image-border">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="feedback-content white-bg clearfix">

                                    <div class="q-sign top">
                                        “
                                    </div>

                                    <blockquote class="clearfix">
                                        <p class="text-left">
                                            Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership equity series A financing network effects user experience crowdsource. Burn rate stock bootstrapping direct mailing release client traction creative facebook monetization crowdfunding rockstar.
                                        </p>

                                        <cite class="pull-left text-left">

                                            <div class="client-image hidden-lg">
                                                <img src="images/feedbacks/client-2.jpg" alt="">
                                            </div>

                                            <div class="client-details">
                                                <div class="signature">
                                                    <img src="images/feedbacks/signature-2.png" alt="">
                                                </div>

                                                <h6 class="dark-text">Alexander Weiß</h6>

                                                <div class="extra-small-text">
                                                    Founder, TingTong
                                                </div>

                                            </div>
                                        </cite>
                                    </blockquote>

                                    <div class="q-sign bottom">
                                        ”
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
                    </div> <!-- END SECOND FEEDBACK -->


                </div>
            </div>
        </div>
    </section>

    <!-- =========================
     SECTION: FEATURES / WHY SELECT US
    ============================== -->
    <section class="features" id="section8">
        <div class="container">

            <!-- SECTION NUMBER -->
            <div class="section-number centered-number">
                08
            </div>

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h2>Why Select Us?</h2>
                <div class="sub-heading">
                    We understand your requirement and provide quality works.
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
                            <h6>Business<br/>Growth</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Success scrum project funding marketing seed money prototype innovator direct hackathon android angel investor.
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
                            <h6>Unlimited<br/>Revisions</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Technology founders churn rate niche market long tail release iteration burn rate backing. Churn rate accelerator.
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
                            <h6>Ultimate<br/>Perfection</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership.
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
                            <h6>Smart<br/>Experience</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Success scrum project funding marketing seed money prototype innovator direct hackathon android angel investor.
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
                            <h6>Strict<br/>Deadline</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Technology founders churn rate niche market long tail release iteration burn rate backing. Churn rate accelerator.
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
                            <h6>Reputed<br/>Company</h6>	<!-- HEADING -->
                        </div>

                        <!-- FEATURE DETAILS -->
                        <p>
                            Deployment ownership non-disclosure agreement vesting period crowdfunding success influencer partnership.
                        </p>
                    </div>
                </div>

            </div>

            <!-- CALL TO ACTION -->
            <div class="row cta-bottom">
                <div class="col-lg-12">

                    <!-- HEADING -->
                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Start your journey with us now</h4>

                    <!-- BUTTON -->
                    <a href="" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">Get Started</a>

                </div>
            </div>


        </div>
    </section>

    <!-- =========================
     SECTION: BLOG
    ============================== -->
    <section class="blog bgcolor-2" id="section9">
        <div class="container">

            <!-- SECTION NUMBER -->
            <div class="section-number centered-number">
                09
            </div>

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h2>Our Blog</h2>
                <div class="sub-heading">
                    We understand your requirement and provide quality works.
                </div>
            </div>

            <div class="row blog-posts">

                <!-- FEATURED POST -->
                <div class="col-lg-6 col-md-6">
                    <div class="featured-post red-line-bottom white-bg diffuse-shadow text-left">

                        <!-- FEATURED IMAGE -->
                        <div class="post-featured-image dark-gradient-overlay">
                            <img src="images/blog/featured-image.jpg" alt="Blog featured image">
                        </div>

                        <!-- POST AUTHOR AND DATE -->
                        <div class="post-info">
                            <div class="author uppercase red-text strong">
                                Damian Schreiber
                            </div>
                            <div class="date extra-small-text white-text">
                                December 10, 2015
                            </div>
                        </div>

                        <!-- POST TITLE AND DETAILS -->
                        <div class="post-content">
                            <a href="">
                                <h5 class="post-title">
                                    Facebook’s CNN livestream will test its place in the second screen era </h5>
                            </a>
                            <p>
                                Traction seed money infographic accelerator pivot value proposition ownership business-to-consumer iteration market analytics paradigm
                            </p>
                        </div>

                    </div>
                </div>

                <!-- REGULAR POSTS -->
                <div class="col-lg-6 col-md-6">
                    <!-- SINGLE POST -->
                    <div class="regular-post green-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                        <!-- AUTHOR AND DATE -->
                        <div class="post-info">
                            <div class="green-text uppercase">
                                Damian Schreiber
                            </div>
                            <div class="date extra-small-text">
                                December 10, 2015
                            </div>
                        </div>

                        <!-- POST TITLE AND DETAILS -->
                        <div class="post-content">
                            <a href="">
                                <h6 class="post-title">Google Street View adds virtual reality support</h6>
                            </a>
                            <div>
                                Traction seed money infographic accelerator pivot value proposition ownership business-to-consumer iteration market analytics paradigm
                            </div>
                        </div>
                    </div>

                    <!-- SINGLE POST -->
                    <div class="regular-post purple-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.25s">

                        <!-- AUTHOR AND DATE -->
                        <div class="post-info">
                            <div class="purple-text uppercase">
                                Damian Schreiber
                            </div>
                            <div class="date extra-small-text">
                                December 10, 2015
                            </div>
                        </div>

                        <!-- POST TITLE AND DETAILS -->
                        <div class="post-content">
                            <a href="">
                                <h6 class="post-title">Google Street View adds virtual reality support</h6>
                            </a>
                            <div>
                                Traction seed money infographic accelerator pivot value proposition ownership business-to-consumer iteration market analytics paradigm
                            </div>
                        </div>
                    </div>

                    <!-- SINGLE POST -->
                    <div class="regular-post yellow-line-bottom white-bg diffuse-shadow text-left wow fadeInUp" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.35s">

                        <!-- AUTHOR AND DATE -->
                        <div class="post-info">
                            <div class="yellow-text uppercase">
                                Damian Schreiber
                            </div>
                            <div class="date extra-small-text">
                                December 10, 2015
                            </div>
                        </div>

                        <!-- POST TITLE AND DETAILS -->
                        <div class="post-content">
                            <a href="">
                                <h6 class="post-title">Google Street View adds virtual reality support</h6>
                            </a>
                            <div>
                                Traction seed money infographic accelerator pivot value proposition ownership business-to-consumer iteration market analytics paradigm
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</div>
<?php endif;  ?>
