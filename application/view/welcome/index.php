<div class="main-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">

                <h1>Welcome</h1>
                <div class="box">
                    <!-- echo out the system feedback (error and success messages) -->
                    <?php $this->renderFeedbackMessages(); ?>

                    <h3>What happens here ?</h3>
                    <p>
                        This is the homepage. As no real URL-route (like /register/index) is provided, the app uses the default
                        controller and the default action, defined in application/config/config.php, by default it's
                        IndexController and index()-method. So, the app will load application/controller/IndexController.php and
                        run index() from that file. Easy. That index()-method (= the action) has just one line of code inside
                        ($this->view->render('index/index');) that loads application/view/index/index.php, which is basically
                        this text you are reading right now.
                        <button class="button" data-open="welcome">Click to open</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="reveal full" id="welcome" data-reveal>
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center main-container">
            <div class="large-6 cell">
                <div class="orbit" role="region" aria-label="" data-orbit>
                    <li class="orbit-slide">
                        <div>
                            <h2 class="">Get Started</h2>
                            <h6>Put your hard work on display, it's free and easy.</h6>
                            <br>
                            <a href="" class="small button expanded">Start now</a>
                        </div>
                    </li>
                    <li class="orbit-slide">
                        <div>
                            <h2 class="">Get Recognized</h2>
                            <h6>Get credit for what you can do, not just your qualification.</h6>
                            <br>
                            <a href="" class="small button expanded">Start now</a>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>