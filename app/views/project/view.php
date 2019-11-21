
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
                        <img src="images/<?=$project->image?>" alt="">
                        <p>Title: <?=$project->title?></p>
                        <p>Content: <?=$project->content?></p>
                    </div>
                </div>
                <!-- BACK TO PORTFOLIO BUTTON ON LOADED PROJECT -->
                <a id="back-button" class="back-button btn btn-default standard-button red-button" href="/"><span class="icon icon-arrow-left"></span> Go Back</a>
            </div>
        </div>
    </section>

