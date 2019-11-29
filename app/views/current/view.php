<?php $lang = \ibuild\App::$app->getProperty('language');?>
<?php if ($lang['code'] === 'GE'): ?>
    <!-- NAVIGATION -->
    <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">

        <div class="container">
            <div class="navbar-header">

                <!-- NAVBAR EXPAND COLLAPSE ON MOBILE -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">ნავიგაცია</span>
                    <span class="icon icon-menu"></span>
                </button>

                <!-- LOGO -->
                <a href="/">
                    <img src="/images/logo.png" alt="LOGO" style="height: 70px; margin-top: 5px;margin-bottom: 3px;">
                </a>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <!-- NAVIGATION LINK -->
                <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                    <li><a href="/" class="MTRegular">მთავარ გვერდზე დაბრუნება</a>
                    </li>
                    <li><a href="#section10" class="MTRegular">კონტაქტი</a>
                    </li>
                </ul>

            </div>

        </div>
        <!-- /END CONTAINER -->
    </div>
    <!-- /END NAIVATION -->
    <section class="about-us" id="section1">

        <div class="container">
            <div class="row">

                <!-- ABOUT US BOX -->
                <div class="col-lg-12 col-sm-6 overflow-box pull-right">
                    <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

                        <div class="about-content">
                            <div class="featured-image">
                                <img src="/images/<?=$current->img?>" alt="">
                                <!-- ABOUT US FEATURED IMAGE -->
                                <div class="image-border">

                                </div>
                            </div>
                            <!-- SECTION HEADING -->
                            <h3 class="section-heading text-left MTMedium"><?=$current->title_geo?></h3>

                            <!-- PARAGRAPH -->
                            <span class="text-left NusRegular"><?=$current->content_geo?></span>
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
<?php elseif($lang['code'] === 'EN'): ?>
<div class="EN">
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

                <!-- PROJECTS -->
                <div class="col-lg-12" id="portfolio-list">
                    <div class="portfolio-items grid">
                        <img src="images/<?=$project->image?>" alt="">
                        <p>Title: <?=$project->title_eng?></p>
                        <p>Content: <?=$project->content_eng?></p>
                    </div>
                </div>
                <!-- BACK TO PORTFOLIO BUTTON ON LOADED PROJECT -->
                <a id="back-button" class="back-button btn btn-default standard-button red-button" href="/"><span class="icon icon-arrow-left"></span> Go Back</a>
            </div>
        </div>
    </section>
</div>
<?php elseif($lang['code'] === 'RU'): ?>
<div class="RU">
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

                <!-- PROJECTS -->
                <div class="col-lg-12" id="portfolio-list">
                    <div class="portfolio-items grid">
                        <img src="images/<?=$project->image?>" alt="">
                        <p>Title: <?=$project->title_rus?></p>
                        <p>Content: <?=$project->content_rus?></p>
                    </div>
                </div>
                <!-- BACK TO PORTFOLIO BUTTON ON LOADED PROJECT -->
                <a id="back-button" class="back-button btn btn-default standard-button red-button" href="/"><span class="icon icon-arrow-left"></span> Go Back</a>
            </div>
        </div>
    </section>
</div>
<?php endif ?>

