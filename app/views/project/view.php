<?php $lang = \ibuild\App::$app->getProperty('language');?>
<?php if ($lang['code'] === 'GE'): ?>
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
                        <p>Title: <?=$project->title_geo?></p>
                        <p>Content: <?=$project->content_geo?></p>
                    </div>
                </div>
                <!-- BACK TO PORTFOLIO BUTTON ON LOADED PROJECT -->
                <a id="back-button" class="back-button btn btn-default standard-button red-button" href="/"><span class="icon icon-arrow-left"></span> Go Back</a>
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

