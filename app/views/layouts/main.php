<!DOCTYPE html>
<html lang="en">

<head>
    <!-- TITLE AND META -->
    <?=$this->getMeta();?>
    <meta property="og:site_name" content="Real Palace - სამშენებლო კომპანია" />
    <meta property="og:title" content="Black Sea Towers" />
    <meta property="og:image" content="../images/backgrounds/1.jpg" />
    <meta property="og:url" content="https://realpalace.ge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- FAV ICONS and WEBFONT -->
    <link rel="icon" href="/images/favicons/favicon.png">
    <link type='text/css' rel="stylesheet" href="/admintemp/plugins/fontawesome-free/css/all.min.css">
    <link type='text/css' rel="stylesheet" href="/fonts/archyedt-bold.min.css" style="font-display: swap;">


    <!-- ICON FONT -->
    <link type='text/css' rel="stylesheet" href="/public/assets/icons/styles.css">

    <!-- Third Party CSS including Bootstrap -->
    <link type='text/css' rel="stylesheet" href="/public/css/third-party.css">
    <!-- STYLESHEETS -->
    <link type='text/css' rel="stylesheet" href="/public/css/styles.css">
    <link type='text/css' rel="stylesheet" href="/public/css/responsive.css">

    <!--[if lt IE 9]>
    <script type='text/javascript' src="/public/js/html5shiv.js"></script>
    <![endif]-->

</head>
<?php $lang = \ibuild\App::$app->getProperty('language');?>
<?php if ($lang['code'] === 'GE'): ?>
    <body>

    <!-- =========================
     PRE LOADER
    ============================== -->
    <div class="preloader">
        <div class="status">
            <div class="loader">
                <svg class="circular" viewbox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    </div>

    <div class="content">
        <?=$content?>
    </div>

    <!-- =========================
     SECTION: SUBSCRIBE FORM
    ============================== -->
    <section id="section11" class="subscribe-section">
        <!-- HEADING -->
        <h3 class=" wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >ჩვენ დაგირეკავთ</h3>
        <h6 class="callsuccess green-text MTMedium" style="background: #e5f2f9">მადლობა, ჩვენ მალე დაგირეკავთ</h6>
        <h6 class="callerror red-text"></h6>
        <!-- SUBSCRIBE FORM -->
        <form id="call-form" class="call-form mailchimp wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <input style="font-family: CITI-Nus-Regular;" type="text" id="phone" name="phone" placeholder="ტელეფონის ნომერი" class="input-box bg-color1" required>
            <button type="submit" value="Send" class="btn btn-default standard-button red-button" style="font-family: 'ArchyEDT-Bold', sans-serif;" >დამირეკეთ</button>
        </form>

        <!-- ERROR AND SUCCESS MESSAGE - AUTO GENERATED BY MAILCHIMP-->
        <div class="mailchimp-error red-text">
        </div>

        <div class="mailchimp-success green-text">
        </div>

    </section>


    <!-- =========================
     SECTION: CONTACT US
    ============================== -->
    <section class="get-in-touch" id="section10">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 style="font-family: 'ArchyEDT-Bold', sans-serif;" >დაგვიკავშირდით</h3>
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <!-- MAIL SUCCESS MESSAGE - ERROR MESSAGE AVAILABLE IN custom.js -->
                    <h6 class="success green-text MTMedium" style="background: #e5f2f9">თქვენი შეტყობინება გადმოგზავნილია, მალე გიპასუხებთ</h6>
                    <h6 class="error red-text"></h6>

                    <form id="contact-form" class="contact-form">
                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="name" name="name" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="სახელი" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <input type="email" id="email" name="email" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="თქვენი ელ.ფოსტა" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="subject" name="subject" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="სათაური" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="phone" name="phone" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="ტელეფონის ნომერი" required>
                            </div>

                            <div class="col-lg-12">
                                <textarea name="message" id="message" class="input-field" rows="8" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="შეტყობინება დაწერეთ აქ" required></textarea>
                            </div>

                            <button type="submit" value="Send" class="btn btn-default standard-button red-button" style="font-family: 'ArchyEDT-Bold', sans-serif;" >გადაგზავნა</button>
                        </div>
                    </form>

                </div>
            </div>

            <!-- FOOTER -->
            <div class="row no-gutters">
                <div class="footer clearfix">

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <div >
                                <img src="/images/logo.png" alt="" style="height: 130px"> <!-- LOGO -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <h6 class="green-text MTRegular">ოფისის მისამართი</h6>
                            <p class="white-text NusMedium">
                                ბათუმი, ჟ. შარტავას ქ. 16
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <h6 style="color: #00acea" class="MTRegular">დაგვიკავშირდით</h6>
                            <p class="white-text">
                                +995 577 22 47 47 <br>
                                +995 514 67 47 47 <br>
                                +995 514 65 47 47 <br>
                                realpalace2012@gmail.com
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <h6 class="yellow-text MTRegular">სოც.ქსელები</h6>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/BuildingCompanyREALPALACE/"><span class="icon icon-sb-facebook"></span></a>
                                <a href=""><span class="icon icon-sb-instagram"></span></a>
                            </div>
                        </div>
                    </div>
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
    </section>
<?php elseif($lang['code'] === 'EN'):  ?>
    <body>

    <!-- =========================
     PRE LOADER
    ============================== -->
    <div class="preloader">
        <div class="status">
            <div class="loader">
                <svg class="circular" viewbox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    </div>

    <div class="content">
        <?=$content?>
    </div>

    <!-- =========================
     SECTION: SUBSCRIBE FORM
    ============================== -->
    <section id="section11" class="subscribe-section">

        <!-- HEADING -->
        <h3 class=" wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >We call you</h3>
        <h6 class="callsuccess green-text MTMedium" style="background: #e5f2f9">Thanks, we will call you soon</h6>
        <h6 class="callerror red-text"></h6>
        <!-- SUBSCRIBE FORM -->
        <form id="call-form"  class="call-form mailchimp wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <input style="font-family: CITI-Nus-Regular;" type="text" id="phone" name="phone" placeholder="Phone number" class="input-box bg-color1" required>
            <button type="submit" value="Send" class="btn btn-default standard-button red-button" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Call me</button>
        </form>

        <!-- ERROR AND SUCCESS MESSAGE - AUTO GENERATED BY MAILCHIMP-->
        <div class="mailchimp-error red-text">
        </div>

        <div class="mailchimp-success green-text">
        </div>

    </section>


    <!-- =========================
     SECTION: CONTACT US
    ============================== -->
    <section class="get-in-touch" id="section10">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 style="font-family: 'ArchyEDT-Bold', sans-serif;" >Contact us</h3>
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <!-- MAIL SUCCESS MESSAGE - ERROR MESSAGE AVAILABLE IN custom.js -->
                    <h6 class="success green-text MTMedium" style="background: #e5f2f9">Your message has been send, we will reply soon</h6>
                    <h6 class="error red-text"></h6>

                    <form id="contact-form" class="contact-form">
                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="name" name="name" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="Name" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <input type="email" id="email" name="email" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="Email" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="subject" name="subject" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="Subject" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="phone" name="phone" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="Phone number" required>
                            </div>

                            <div class="col-lg-12">
                                <textarea name="message" id="message" class="input-field" rows="8" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="text here" required></textarea>
                            </div>

                            <button type="submit" value="Send" class="btn btn-default standard-button red-button" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Send</button>
                        </div>
                    </form>

                </div>
            </div>

            <!-- FOOTER -->
            <div class="row no-gutters">
                <div class="footer clearfix">

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <div >
                                <img src="/images/logo.png" alt="" style="height: 130px"> <!-- LOGO -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <h6 class="green-text MTRegular">Address</h6>
                            <p class="white-text NusMedium">
                                Batumi, Zh. Shartava str. 16
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <h6 style="color: #00acea" class="MTRegular">Contact us</h6>
                            <p class="white-text">
                                +995 577 22 47 47 <br>
                                +995 514 67 47 47 <br>
                                +995 514 65 47 47 <br>
                                realpalace2012@gmail.com
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <h6 class="yellow-text MTRegular">Social networks</h6>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/BuildingCompanyREALPALACE/"><span class="icon icon-sb-facebook"></span></a>
                                <a href=""><span class="icon icon-sb-instagram"></span></a>
                            </div>
                        </div>
                    </div>
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
    </section>

<?php elseif($lang['code'] === 'RU'):  ?>
    <body>

    <!-- =========================
     PRE LOADER
    ============================== -->
    <div class="preloader">
        <div class="status">
            <div class="loader">
                <svg class="circular" viewbox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    </div>

    <div class="content">
        <?=$content?>
    </div>

    <!-- =========================
     SECTION: SUBSCRIBE FORM
    ============================== -->
    <section id="section11" class="subscribe-section">

        <!-- HEADING -->
        <h3 class=" wow fadeInLeft" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Мы вам перезвоним</h3>
        <h6 class="callsuccess green-text MTMedium" style="background: #e5f2f9">Спасибо, мы скоро вам перезвоним</h6>
        <h6 class="callerror red-text"></h6>
        <!-- SUBSCRIBE FORM -->
        <form id="call-form" class="call-form mailchimp wow fadeInRight" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
            <input style="font-family: CITI-Nus-Regular;" type="text" id="phone" name="phone" placeholder="Номер телефона" class="input-box bg-color1" required>
            <button type="submit" value="Send" class="btn btn-default standard-button red-button" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Позвоните мне</button>
        </form>

        <!-- ERROR AND SUCCESS MESSAGE - AUTO GENERATED BY MAILCHIMP-->
        <div class="mailchimp-error red-text">
        </div>

        <div class="mailchimp-success green-text">
        </div>

    </section>


    <!-- =========================
     SECTION: CONTACT US
    ============================== -->
    <section class="get-in-touch" id="section10">
        <div class="container">

            <!-- SECTION HEADER -->
            <div class="section-header">
                <h3 style="font-family: 'ArchyEDT-Bold', sans-serif;" >Свяжитесь с нами</h3>
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">

                    <!-- MAIL SUCCESS MESSAGE - ERROR MESSAGE AVAILABLE IN custom.js -->
                    <h6 class="successText green-text MTMedium" style="background: #e5f2f9">Ваше сообщение было отправлено, мы скоро ответим</h6>
                    <h6 class="error red-text"></h6>

                    <form id="contact-form" class="contact-form">
                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="name" name="name" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="Имя" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <input type="email" id="email" name="email" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="Электронный адрес" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="subject" name="subject" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="Тема" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="phone" name="phone" class="input-field" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="Номер телефона" required>
                            </div>

                            <div class="col-lg-12">
                                <textarea name="message" id="message" class="input-field" rows="8" style="font-family: 'ArchyEDT-Bold', sans-serif;"  placeholder="Текст тут" required></textarea>
                            </div>

                            <button type="submit" value="Send" class="btn btn-default standard-button red-button" style="font-family: 'ArchyEDT-Bold', sans-serif;" >Отправить</button>
                        </div>
                    </form>

                </div>
            </div>

            <!-- FOOTER -->
            <div class="row no-gutters">
                <div class="footer clearfix">

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <div >
                                <img src="/images/logo.png" alt="" style="height: 130px"> <!-- LOGO -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <h6 class="green-text MTRegular">Адрес офиса</h6>
                            <p class="white-text NusMedium">
                                Батуми, Ж. Шартава, ул. 16
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <h6 style="color: #00acea" class="MTRegular">Свяжитесь с нами</h6>
                            <p class="white-text">
                                +995 577 22 47 47 <br>
                                +995 514 67 47 47 <br>
                                +995 514 65 47 47 <br>
                                realpalace2012@gmail.com
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-col">
                            <h6 class="yellow-text MTRegular">Социальные сети</h6>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/BuildingCompanyREALPALACE/"><span class="icon icon-sb-facebook"></span></a>
                                <a href=""><span class="icon icon-sb-instagram"></span></a>
                            </div>
                        </div>
                    </div>
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
    </section>

<?php endif;  ?>
    <!-- =========================
 JS SCRIPTS
============================== -->
    <script type='text/javascript' src="/public/js/jquery-1.11.3.min.js"></script>
    <script type='text/javascript' src="/public/js/third-party-scripts.js"></script>
    <script type='text/javascript' src="/public/js/custom.js"></script>
    <script type='text/javascript' src="/public/js/main.js"></script>
    <script type='text/javascript' src="/public/js/jquery.min.js"></script>
    <script type='text/javascript' src="/public/js/wow.min.js"></script>

    </body>
</html>
