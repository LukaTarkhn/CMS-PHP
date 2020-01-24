<?php $lang = \ibuild\App::$app->getProperty('language');?>
<?php if ($lang['code'] === 'GE'): ?>
    <div class="GE">
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
                    <a href="/ka">
                        <img src="/images/logo.png" alt="LOGO" class="inner-main-logo">
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navigation">
                    <!-- NAVIGATION LINK -->
                    <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                        <li><a href="/ka" class="MTRegular">მთავარ გვერდზე დაბრუნება</a>
                        </li>
                        <li><a href="#section10" class="MTRegular">კონტაქტი</a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- /END CONTAINER -->
        </div>
        <!-- /END NAIVATION -->
        <section class="our-focus bgcolor-2" id="section">
            <div class="container">
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">აპარტამენტი № <?=$apartment->apartmentno ?></h3>
                    <div class="sub-heading">
                        <span class="NusRegular">დაგვიკავშირდით ფართის შეძენასთან დაკავშირებით</span>
                    </div>
                </div>

                <div class="row focuses">
                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <a href="/images/floors/apartments/<?=$apartment->img?>" download>
                                <img src="/images/floors/apartments/<?=$apartment->img?>" class="apartmentImg">
                            </a>
                        </div>
                    </div>

                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-8 col-sm-12 col-xs-12 single-focus white-bg diffuse-shadow wow fadeInRightBig" style="height: 100%">
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
                                        <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -180px; color: #00c054; font-family: 'ArchyEDT-Bold', sans-serif;">გაყიდვაშია</h4>
                                        <br>
                                    <?php endif; ?>
                                    <!-- HEADING -->
                                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -5px; color: #64739d; font-family: 'ArchyEDT-Bold', sans-serif;">ფართობი: <?=$apartment->kvmeter?> მ2</h4>
                                </div>
                            </div>

                            <div class="row cta-bottom" style="margin-top: -20px">
                                <div class="col-lg-12">

                                    <!-- HEADING -->
                                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >ფართის შესაძენად დაგვიკავშირდით</h4>

                                    <span><br>
                                            +995 577 22 47 47 <br>
                                            +995 514 67 47 47 <br>
                                            +995 514 65 47 47 <br>
                                            realpalace2012@gmail.com <br>
                                        </span>

                                    <!-- BUTTON -->
                                    <a href="#section11" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >კონტაქტი</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
<?php elseif($lang['code'] === 'EN'): ?>
    <div class="EN">
        <!-- NAVIGATION -->
        <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">

            <div class="container">
                <div class="navbar-header">

                    <!-- NAVBAR EXPAND COLLAPSE ON MOBILE -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Navigation</span>
                        <span class="icon icon-menu"></span>
                    </button>

                    <!-- LOGO -->
                    <a href="/en">
                        <img src="/images/logo.png" alt="LOGO" class="inner-main-logo">
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navigation">
                    <!-- NAVIGATION LINK -->
                    <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                        <li><a href="/en" class="MTRegular">Return to home page</a>
                        </li>
                        <li><a href="#section10" class="MTRegular">Contact</a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- /END CONTAINER -->
        </div>
        <!-- /END NAIVATION -->
        <section class="our-focus bgcolor-2" id="section">
            <div class="container">
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">Apartment № <?=$apartment->apartmentno ?></h3>
                    <div class="sub-heading">
                        <span class="NusRegular">Contact us to purchase area</span>
                    </div>
                </div>

                <div class="row focuses" style="display: flex; flex-wrap: nowrap">
                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <a href="/images/floors/apartments/<?=$apartment->img?>" download>
                                <img src="/images/floors/apartments/<?=$apartment->img?>" class="apartmentImg">
                            </a>
                        </div>
                    </div>

                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-8 col-sm-12 col-xs-12 single-focus white-bg diffuse-shadow wow fadeInRightBig" style="height: 100%">
                        <div class="sub-heading" style="margin-top: -50px; ">
                            <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">Information</span>
                            <hr>
                        </div>
                        <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                            <div class="row cta-bottom">
                                <div class="col-lg-12">
                                    <?php if ($apartment->status == 1 ): ?>
                                        <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -180px; color: #9f1447; font-family: 'ArchyEDT-Bold', sans-serif;">Apartment № <?=$apartment->apartmentno ?> - SOLD</h4>
                                    <?php else: ?>
                                        <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -180px; color: #00c054; font-family: 'ArchyEDT-Bold', sans-serif;">For sale</h4>
                                        <br>
                                    <?php endif; ?>
                                    <!-- HEADING -->
                                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -5px; color: #64739d; font-family: 'ArchyEDT-Bold', sans-serif;">Area: <?=$apartment->kvmeter?> M2</h4>
                                </div>
                            </div>

                            <div class="row cta-bottom" style="margin-top: -20px">
                                <div class="col-lg-12">

                                    <!-- HEADING -->
                                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Contact us to purchase area</h4>

                                    <span><br>
                                            +995 577 22 47 47 <br>
                                            +995 514 67 47 47 <br>
                                            +995 514 65 47 47 <br>
                                            realpalace2012@gmail.com <br>
                                        </span>

                                    <!-- BUTTON -->
                                    <a href="#section11" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Contact</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
<?php elseif($lang['code'] === 'RU'): ?>
    <div class="RU">
        <!-- NAVIGATION -->
        <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation" role="navigation">

            <div class="container">
                <div class="navbar-header">

                    <!-- NAVBAR EXPAND COLLAPSE ON MOBILE -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Навигация</span>
                        <span class="icon icon-menu"></span>
                    </button>

                    <!-- LOGO -->
                    <a href="/ru">
                        <img src="/images/logo.png" alt="LOGO" class="inner-main-logo">
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navigation">
                    <!-- NAVIGATION LINK -->
                    <ul class="nav navbar-nav navbar-right main-navigation" id="internal-scroll">
                        <li><a href="/ru" class="MTRegular">Вернуться на главную страницу</a>
                        </li>
                        <li><a href="#section10" class="MTRegular">Контакт</a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- /END CONTAINER -->
        </div>
        <!-- /END NAIVATION -->
        <section class="our-focus bgcolor-2" id="section">
            <div class="container">
                <!-- SECTION HEADER -->
                <div class="section-header">
                    <h3 class="MTMedium">Квартира № <?=$apartment->apartmentno ?></h3>
                    <div class="sub-heading">
                        <span class="NusRegular">Свяжитесь с нами для покупки</span>
                    </div>
                </div>

                <div class="row focuses" style="display: flex; flex-wrap: nowrap">
                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <a href="/images/floors/apartments/<?=$apartment->img?>" download>
                                <img src="/images/floors/apartments/<?=$apartment->img?>" class="apartmentImg">
                            </a>
                        </div>
                    </div>

                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-8 col-sm-12 col-xs-12 single-focus white-bg diffuse-shadow wow fadeInRightBig" style="height: 100%">
                        <div class="sub-heading" style="margin-top: -50px; ">
                            <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">Информация</span>
                            <hr>
                        </div>
                        <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                            <div class="row cta-bottom">
                                <div class="col-lg-12">
                                    <?php if ($apartment->status == 1 ): ?>
                                        <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -180px; color: #9f1447; font-family: 'ArchyEDT-Bold', sans-serif;">Квартира № <?=$apartment->apartmentno ?> - ПРОДАНО</h4>
                                    <?php else: ?>
                                        <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -180px; color: #00c054; font-family: 'ArchyEDT-Bold', sans-serif;">Продается</h4>
                                        <br>
                                    <?php endif; ?>
                                    <!-- HEADING -->
                                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="margin-top: -5px; color: #64739d; font-family: 'ArchyEDT-Bold', sans-serif;">Квартира: <?=$apartment->kvmeter?> М2</h4>
                                </div>
                            </div>

                            <div class="row cta-bottom" style="margin-top: -20px">
                                <div class="col-lg-12">

                                    <!-- HEADING -->
                                    <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Свяжитесь с нами для покупки места</h4>

                                    <span><br>
                                            +995 577 22 47 47 <br>
                                            +995 514 67 47 47 <br>
                                            +995 514 65 47 47 <br>
                                            realpalace2012@gmail.com <br>
                                        </span>

                                    <!-- BUTTON -->
                                    <a href="#section11" class="btn btn-default standard-button red-button wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Контакт</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
<?php endif ?>

