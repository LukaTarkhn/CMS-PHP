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

                <h3 class="section-heading text-center MTMedium">
                    <span style="background: #0C2C3C; color: #fff; padding: 5px 20px; border-top-left-radius: 50px; border-bottom-right-radius: 50px">აპარტამენტების ჩაბარების კონდიცია</span>
                </h3>

                <div class="page-container" >
                    <div class="js-img-compare" style="width: 80%;">
                        <div style="display: none;">
                            <span class="images-compare-label MTRegular">დასრულებული რემონტით</span>
                            <img src="/public/images/floors/apartments/complete.jpg" alt="Before">
                        </div>
                        <div>
                            <span class="images-compare-label MTRegular">თეთრი კარკასი</span>
                            <img src="/public/images/floors/apartments/whitecarcase.jpg" alt="After">
                        </div>
                    </div>

                    <div>
                        <button class="btn js-front-btn MTRegular">დასრულებული რემონტით</button>
                        <button class="btn js-back-btn MTRegular">თეთრი კარკასი</button>
                    </div>
                        <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.15s; animation-name: fadeInRight;">

                            <div class="about-content">

                                <!-- SECTION HEADING -->
                                <h3 class="section-heading text-left MTMedium">დასრულებული რემონტით</h3>

                                <!-- PARAGRAPH -->
                                <p class="text-left NusRegular" style="font-size: 20px">
                                    აპარტამენტის ინტერიერის დიზაინი, სარემონტო მასალები, ავეჯი, ტექნიკა და აქსესუარები
                                    შეთანხმებული იქნება აპარტამენტების მმართველ კომპანიასთან, აპარტამენტი
                                    მყიდველს გადაეცემა გარემოტებულ მდგომარეობაში, მოწყობილი ავეჯით, ტექნიკითა და აქსესუარებით,
                                    რომელიც იქნება ევროპული სტანდარტის.
                                </p>
                                <div style="width: 100%; background: #D8E2E4;  border-top-left-radius: 200px; border-bottom-right-radius: 200px">
                                    <img style="width: 80%;padding-top: 10px; padding-bottom: 10px; " src="/public/images/floors/apartments/complete.jpg" alt="დასრულებული რემონტით">
                                </div>
                            </div>

                            <div class="about-content">

                                <!-- SECTION HEADING -->
                                <h3 class="section-heading text-left MTMedium">თეთრი კარკასი</h3>

                                <!-- PARAGRAPH -->
                                <p class="text-left NusRegular" style="font-size: 20px">
                                    აპარტამენტის მითითებულ კონდიციამდე მიყვანისას გამოყენებული იქნება ეკოლოგიურად სუფთა,
                                    ენერგოეფექტური და უმაღლესი ხარისხის მასალები.
                                </p>
                                <div style="width: 100%; background: #2FA695;  border-top-right-radius: 200px; border-bottom-left-radius: 200px;">
                                     <img style="width: 80%;padding-top: 10px; padding-bottom: 10px; " src="/public/images/floors/apartments/whitecarcase.jpg" alt="თეთრი კარკასი">
                                </div>
                            </div>


                            <div class="four-lines" style="margin-top: 20px">
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

            <h3 class="section-heading text-center MTMedium">
                <span style="background: #0C2C3C; color: #fff; padding: 5px 20px; border-top-left-radius: 50px; border-bottom-right-radius: 50px">APARTMENT HANDOVER CONDITIONS</span>
            </h3>

            <div class="page-container" >
                <div class="js-img-compare" style="width: 80%;">
                    <div style="display: none;">
                        <span class="images-compare-label MTRegular">TURNKEY</span>
                        <img src="/public/images/floors/apartments/complete.jpg" alt="Before">
                    </div>
                    <div>
                        <span class="images-compare-label MTRegular">FINE FINISH</span>
                        <img src="/public/images/floors/apartments/whitecarcase.jpg" alt="After">
                    </div>
                </div>

                <div>
                    <button class="btn js-front-btn MTRegular">TURNKEY</button>
                    <button class="btn js-back-btn MTRegular">FINE FINISH</button>
                </div>
                <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.15s; animation-name: fadeInRight;">

                    <div class="about-content">

                        <!-- SECTION HEADING -->
                        <h3 class="section-heading text-left MTMedium">TURNKEY</h3>

                        <!-- PARAGRAPH -->
                        <p class="text-left NusRegular" style="font-size: 20px">
                            The apartment is transferred to the Buyer in a renovated condition,
                            equipped with furniture, appliances and accessories that will be of European
                            standard. The design and materials of the apartments are coordinated
                            with the management company of th apartments.
                        </p>
                        <div style="width: 100%; background: #D8E2E4;  border-top-left-radius: 200px; border-bottom-right-radius: 200px">
                            <img style="width: 80%;padding-top: 10px; padding-bottom: 10px; " src="/public/images/floors/apartments/complete.jpg" alt="TURNKEY">
                        </div>
                    </div>

                    <div class="about-content">

                        <!-- SECTION HEADING -->
                        <h3 class="section-heading text-left MTMedium">FINE FINISH</h3>

                        <!-- PARAGRAPH -->
                        <p class="text-left NusRegular" style="font-size: 20px">
                            In the process of bringing apartments into given conditions ecologically clean, energy efficient and high quality materials were used.
                        </p>
                        <div style="width: 100%; background: #2FA695;  border-top-right-radius: 200px; border-bottom-left-radius: 200px;">
                            <img style="width: 80%;padding-top: 10px; padding-bottom: 10px; " src="/public/images/floors/apartments/whitecarcase.jpg" alt="FINE FINISH">
                        </div>
                    </div>


                    <div class="four-lines" style="margin-top: 20px">
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

            <h3 class="section-heading text-center MTMedium">
                <span style="background: #0C2C3C; color: #fff; padding: 5px 20px; border-top-left-radius: 50px; border-bottom-right-radius: 50px">УСЛОВИЯ СДАЧИ АПАРТАМЕНТОВ</span>
            </h3>

            <div class="page-container" >
                <div class="js-img-compare" style="width: 80%;">
                    <div style="display: none;">
                        <span class="images-compare-label MTRegular">РЕМОНТ "ПОД КЛЮЧ"</span>
                        <img src="/public/images/floors/apartments/complete.jpg" alt="Before">
                    </div>
                    <div>
                        <span class="images-compare-label MTRegular">ЧИСТОВАЯ ОТДЕЛКА</span>
                        <img src="/public/images/floors/apartments/whitecarcase.jpg" alt="After">
                    </div>
                </div>

                <div>
                    <button class="btn js-front-btn MTRegular">РЕМОНТ "ПОД КЛЮЧ"</button>
                    <button class="btn js-back-btn MTRegular">ЧИСТОВАЯ ОТДЕЛКА</button>
                </div>
                <div class="about-box diffuse-shadow wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.15s; animation-name: fadeInRight;">

                    <div class="about-content">

                        <!-- SECTION HEADING -->
                        <h3 class="section-heading text-left MTMedium">РЕМОНТ "ПОД КЛЮЧ"</h3>

                        <!-- PARAGRAPH -->
                        <p class="text-left NusRegular" style="font-size: 20px">
                            Апартамент передается покупателю в отремонтированном состоянии,
                            оборудованной мебелью, техникой и аксессуарами, по европейским стандартам.
                            Дизайн и материалы гостиничных апартаментов согласованы с управляющей компанией
                            апартаментов.
                        </p>
                        <div style="width: 100%; background: #D8E2E4;  border-top-left-radius: 200px; border-bottom-right-radius: 200px">
                            <img style="width: 80%;padding-top: 10px; padding-bottom: 10px; " src="/public/images/floors/apartments/complete.jpg" alt="С законченным ремонтом">
                        </div>
                    </div>

                    <div class="about-content">

                        <!-- SECTION HEADING -->
                        <h3 class="section-heading text-left MTMedium">ЧИСТОВАЯ ОТДЕЛКА</h3>

                        <!-- PARAGRAPH -->
                        <p class="text-left NusRegular" style="font-size: 20px">
                            При доведении апартамента до указанной кондиции будут использованы экологически чистые,
                            энергоэффективные и высококачественные материалы
                        </p>
                        <div style="width: 100%; background: #2FA695;  border-top-right-radius: 200px; border-bottom-left-radius: 200px;">
                            <img style="width: 80%;padding-top: 10px; padding-bottom: 10px; " src="/public/images/floors/apartments/whitecarcase.jpg" alt="ЧИСТОВАЯ ОТДЕЛКА">
                        </div>
                    </div>


                    <div class="four-lines" style="margin-top: 20px">
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
        </section>
    </div>
<?php endif ?>



