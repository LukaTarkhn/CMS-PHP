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
    <section class="our-focus bgcolor-2" id="section2">
        <div class="container">
            <!-- SECTION HEADER -->
            <div class="section-header">
                    <h3 class="MTMedium">აპარტამენტი № <?=$apartment->apartmentno ?></h3>
                    <div class="sub-heading">
                        <span class="NusRegular">დაგვიკავშირდით ფართის შეძენასთან დაკავშირებით</span>
                    </div>
            </div>

            <div class="row focuses" style="display: flex; flex-wrap: nowrap">
                <!-- SINGLE FOCUS COLUMN -->
                <div class="col-lg-7 col-sm-7 col-xs-7">
                    <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <a href="/images/floors/apartments/<?=$apartment->img?>" download>
                                <img src="/images/floors/apartments/<?=$apartment->img?>" alt="" style="width: 100%">
                            </a>
                    </div>
                </div>

                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-7 col-sm-7 col-xs-7 single-focus white-bg diffuse-shadow wow fadeInRightBig" style="height: 100%">
                        <div class="sub-heading" style="margin-top: -50px; ">
                            <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">ინფორმაცია</span>
                            <hr>
                        </div>
                        <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                            <div class="row cta-bottom">
                                <div class="col-lg-12">
                                    <?php if ($apartment->status == 1 ): ?>
                                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -180px; color: #9f1447; font-family: 'ArchyEDT-Bold', sans-serif;">აპარტამენტი № <?=$apartment->apartmentno ?> - უკვე გაყიდულია</h4>
                                    <?php else: ?>
                                        <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -180px; color: #00c054; font-family: 'ArchyEDT-Bold', sans-serif;">არ არის გაყიდული</h4>
                                        <br>
                                    <?php endif; ?>
                                    <!-- HEADING -->
                                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -5px; color: #64739d; font-family: 'ArchyEDT-Bold', sans-serif;">ფართობი: <?=$apartment->kvmeter?> მ2</h4>
                                </div>
                            </div>

                            <div class="row cta-bottom" style="margin-top: -20px">
                                <div class="col-lg-12">

                                    <!-- HEADING -->
                                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;">ფართის შესაძენად დაგვიკავშირდით</h4>

                                    <span><br>
                                        +995 577 22 47 47 <br>
                                        +995 514 67 47 47 <br>
                                        +995 514 65 47 47 <br>
                                        realpalace2012@gmail.com <br>
                                    </span>

                                    <!-- BUTTON -->
                                    <a href="#section11" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;">კონტაქტი</a>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </section>
<?php endif ?>

