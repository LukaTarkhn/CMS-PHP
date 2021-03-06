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
                    <?php if ($floor->parking != 1):  ?>
                        <h3 class="MTMedium">სართული <?=$floor->floor ?></h3>
                        <div class="sub-heading">
                            <span class="NusRegular">აირჩიეთ თქვენთვის სასურველი ბინის ფართობი</span>
                        </div>
                    <?php elseif ($floor->parking == 1): ?>
                        <h3 class="MTMedium">პარკინგის სართული <?=$floor->id ?></h3>
                        <div class="sub-heading">
                            <span class="NusRegular">დაგვიკავშირდით პარკინგის თაობაზე</span>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="row focuses" style="display: flex; flex-wrap: wrap; justify-content: center" >
                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <?php if ($floor->parking != 1 && $floor->id > 11):  ?>
                                <a href="/images/floors/gegma.jpg" download>
                                    <img src="/images/floors/gegma.jpg" alt="" style="width: 100%">
                                </a>
                            <?php elseif ($floor->parking == 1): ?>
                                <a href="/images/floors/parking/<?=$floor->img?>" download>
                                    <img src="/images/floors/parking/<?=$floor->img?>" alt="" style="width: 100%">
                                </a>
                            <?php elseif ($floor->id < 12): ?>
                                <a href="/images/floors/<?=$floor->img?>" download>
                                    <img src="/images/floors/<?=$floor->img?>" alt="" style="width: 100%">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($floor->parking != 1 && $floor->floor != 0 && $floor->floor != 1):  ?>
                        <!-- SINGLE FOCUS COLUMN -->
                        <div class="col-lg-7 col-sm-12 col-xs-12 single-focus white-bg diffuse-shadow wow fadeInRightBig" style="height: 100%">
                            <div class="sub-heading" style="margin-top: -50px; ">
                                <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">აირჩიეთ ბინა</span>
                                <hr>
                            </div>
                            <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                                <?php  foreach ($apartments as $apartment): ?>
                                    <?php if ($floor->floor == $apartment->floorid):  ?>
                                        <?php if ($apartment->status == 1):  ?>
                                            <a href="/ka/apartment/<?=$apartment->id?>" class="soldbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;"  title="გაყიდულია">
                                                <div class="onHoverImageInner">
                                                    <img src="/images/floors/apartments/<?=$apartment->img?>" style="width: 100%; border-radius: 10px" alt="Image not found" />
                                                </div>
                                                აპარტამენტი №<?=$apartment->apartmentno?>/<?=$apartment->kvmeter?>მ2
                                            </a>
                                        <?php elseif ($apartment->status == 0): ?>
                                            <a href="/ka/apartment/<?=$apartment->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;"  title="არის გაყიდვაში">
                                                <div class="onHoverImageInner">
                                                    <img src="/images/floors/apartments/<?=$apartment->img?>" style="width: 100%; border-radius: 10px" alt="Image not found" />
                                                </div>
                                                აპარტამენტი №<?=$apartment->apartmentno?>/<?=$apartment->kvmeter?>მ2
                                            </a>
                                        <?php elseif ($apartment->status == 2): ?>
                                            <a href="/ka/apartment/<?=$apartment->id?>" class="bookedbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;"  title="დაჯავშნილია">
                                                <div class="onHoverImageInner">
                                                    <img src="/images/floors/apartments/<?=$apartment->img?>" style="width: 100%; border-radius: 10px" alt="Image not found" />
                                                </div>
                                                აპარტამენტი №<?=$apartment->apartmentno?>/<?=$apartment->kvmeter?>მ2
                                            </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    <?php endif; ?>

                    <?php if ($floor->parking == 1 || $floor->floor == 0 || $floor->floor == 1):  ?>
                        <div class="row cta-bottom">
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
                    <?php endif; ?>
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
                    <?php if ($floor->parking != 1):  ?>
                        <h3 class="MTMedium">Floor <?=$floor->floor ?></h3>
                        <div class="sub-heading">
                            <span class="NusRegular">Choose the apartment you want</span>
                        </div>
                    <?php elseif ($floor->parking == 1): ?>
                        <h3 class="MTMedium">Parking floor <?=$floor->id ?></h3>
                        <div class="sub-heading">
                            <span class="NusRegular">Contact us about parking</span>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="row focuses" style="display: flex; flex-wrap: wrap; justify-content: center" >
                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <?php if ($floor->parking != 1 && $floor->id > 11):  ?>
                                <a href="/images/floors/gegma.jpg" download>
                                    <img src="/images/floors/gegma.jpg" alt="" style="width: 100%">
                                </a>
                            <?php elseif ($floor->parking == 1): ?>
                                <a href="/images/floors/parking/<?=$floor->img?>" download>
                                    <img src="/images/floors/parking/<?=$floor->img?>" alt="" style="width: 100%">
                                </a>
                            <?php elseif ($floor->id < 12): ?>
                                <a href="/images/floors/<?=$floor->img?>" download>
                                    <img src="/images/floors/<?=$floor->img?>" alt="" style="width: 100%">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($floor->parking != 1 && $floor->floor != 0 && $floor->floor != 1):  ?>
                        <!-- SINGLE FOCUS COLUMN -->
                        <div class="col-lg-7 col-sm-12 col-xs-12 single-focus white-bg diffuse-shadow wow fadeInRightBig" style="height: 100%">
                            <div class="sub-heading" style="margin-top: -50px; ">
                                <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">Select an apartment</span>
                                <hr>
                            </div>
                            <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                                <?php  foreach ($apartments as $apartment): ?>
                                    <?php if ($floor->floor == $apartment->floorid):  ?>
                                        <?php if ($apartment->status == 1):  ?>
                                            <a href="/en/apartment/<?=$apartment->id?>" class="soldbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;"  title="SOLD">
                                                <div class="onHoverImageInner">
                                                    <img src="/images/floors/apartments/<?=$apartment->img?>" style="width: 100%; border-radius: 10px" alt="Image not found" />
                                                </div>
                                                Apartment №<?=$apartment->apartmentno?>/<?=$apartment->kvmeter?>M2
                                            </a>
                                        <?php elseif ($apartment->status == 0): ?>
                                            <a href="/en/apartment/<?=$apartment->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;"  title="Not sold">
                                                <div class="onHoverImageInner">
                                                    <img src="/images/floors/apartments/<?=$apartment->img?>" style="width: 100%; border-radius: 10px" alt="Image not found" />
                                                </div>
                                                Apartment №<?=$apartment->apartmentno?>/<?=$apartment->kvmeter?>M2
                                            </a>
                                        <?php elseif ($apartment->status == 2): ?>
                                            <a href="/en/apartment/<?=$apartment->id?>" class="bookedbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;"  title="Booked">
                                                <div class="onHoverImageInner">
                                                    <img src="/images/floors/apartments/<?=$apartment->img?>" style="width: 100%; border-radius: 10px" alt="Image not found" />
                                                </div>
                                                Apartment №<?=$apartment->apartmentno?>/<?=$apartment->kvmeter?>M2
                                            </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    <?php endif; ?>

                    <?php if ($floor->parking == 1 || $floor->floor == 0 || $floor->floor == 1):  ?>
                        <div class="row cta-bottom">
                            <div class="col-lg-12">

                                <!-- HEADING -->
                                <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Contact us to purchase space</h4>

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
                    <?php endif; ?>
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
                    <?php if ($floor->parking != 1):  ?>
                        <h3 class="MTMedium">Этаж <?=$floor->floor ?></h3>
                        <div class="sub-heading">
                            <span class="NusRegular">Выберите квартиру, которую вы хотите</span>
                        </div>
                    <?php elseif ($floor->parking == 1): ?>
                        <h3 class="MTMedium">Парковочный этаж <?=$floor->id ?></h3>
                        <div class="sub-heading">
                            <span class="NusRegular">Свяжитесь с нами по поводу парковки</span>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="row focuses" style="display: flex; flex-wrap: wrap; justify-content: center" >
                    <!-- SINGLE FOCUS COLUMN -->
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="wow fadeInLeftBig" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
                            <?php if ($floor->parking != 1 && $floor->id > 11):  ?>
                                <a href="/images/floors/gegma.jpg" download>
                                    <img src="/images/floors/gegma.jpg" alt="" style="width: 100%">
                                </a>
                            <?php elseif ($floor->parking == 1): ?>
                                <a href="/images/floors/parking/<?=$floor->img?>" download>
                                    <img src="/images/floors/parking/<?=$floor->img?>" alt="" style="width: 100%">
                                </a>
                            <?php elseif ($floor->id < 12): ?>
                                <a href="/images/floors/<?=$floor->img?>" download>
                                    <img src="/images/floors/<?=$floor->img?>" alt="" style="width: 100%">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($floor->parking != 1 && $floor->floor != 0 && $floor->floor != 1):  ?>
                        <!-- SINGLE FOCUS COLUMN -->
                        <div class="col-lg-7 col-sm-12 col-xs-12 single-focus white-bg diffuse-shadow wow fadeInRightBig" style="height: 100%">
                            <div class="sub-heading" style="margin-top: -50px; ">
                                <span style="font-family: 'ArchyEDT-Bold', sans-serif; color: #64739d;">Выберите квартиру</span>
                                <hr>
                            </div>
                            <div data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="display: flex; flex-wrap: wrap; justify-content: center">

                                <?php  foreach ($apartments as $apartment): ?>
                                    <?php if ($floor->floor == $apartment->floorid):  ?>
                                        <?php if ($apartment->status == 1):  ?>
                                            <a href="/ru/apartment/<?=$apartment->id?>" class="soldbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;"  title="ПРОДАНО">
                                                <div class="onHoverImageInner">
                                                    <img src="/images/floors/apartments/<?=$apartment->img?>" style="width: 100%; border-radius: 10px" alt="Image not found" />
                                                </div>
                                                Квартира №<?=$apartment->apartmentno?>/<?=$apartment->kvmeter?>М2
                                            </a>
                                        <?php elseif ($apartment->status == 0): ?>
                                            <a href="/ru/apartment/<?=$apartment->id?>" class="floorbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;"  title="Продается">
                                                <div class="onHoverImageInner">
                                                    <img src="/images/floors/apartments/<?=$apartment->img?>" style="width: 100%; border-radius: 10px" alt="Image not found" />
                                                </div>
                                                Квартира №<?=$apartment->apartmentno?>/<?=$apartment->kvmeter?>М2
                                            </a>
                                        <?php elseif ($apartment->status == 2): ?>
                                            <a href="/ru/apartment/<?=$apartment->id?>" class="bookedbutton" style="font-family: 'ArchyEDT-Bold', sans-serif;"  title="Забронировано">
                                                <div class="onHoverImageInner">
                                                    <img src="/images/floors/apartments/<?=$apartment->img?>" style="width: 100%; border-radius: 10px" alt="Image not found" />
                                                </div>
                                                Квартира №<?=$apartment->apartmentno?>/<?=$apartment->kvmeter?>М2
                                            </a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    <?php endif; ?>

                    <?php if ($floor->parking == 1 || $floor->floor == 0 || $floor->floor == 1):  ?>
                        <div class="row cta-bottom">
                            <div class="col-lg-12">

                                <!-- HEADING -->
                                <h4 class="wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Свяжитесь с нами для покупки</h4>

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
                    <?php endif; ?>
                </div>
        </section>
    </div>
<?php endif ?>

