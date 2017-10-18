<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>madeBETA &mdash; a curated pool of active, skilled talent</title>
        <link rel="shortcut icon" href="<?php echo Config::get('URL'); ?>icons/cd-logo.svg">
        <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/foundation.css">
        <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/app.css">
    </head>
    <body>
        <header class="cd-auto-hide-header">
        <div class="logo">
            <a href="<?php echo Config::get('URL'); ?>"><img src="<?php echo Config::get('URL'); ?>icons/cd-logo.svg"></a>
        </div>

        <nav class="cd-primary-nav">
            <a href="#cd-navigation" class="nav-trigger">
                <span>
				<em aria-hidden="true"></em>
			</span>
            </a>

            <ul id="cd-navigation">
                <?php if (Session::userIsLoggedIn()) { ?>

                    <?php if (Session::get("user_account_type") == 1) { ?>
                        <li><?php if (View::checkForActiveController($filename, "index")) ?>
                            <a href="<?php echo Config::get('URL'); ?>discover/">Discover</a></li>
                        <li><?php if (View::checkForActiveController($filename, "index")) ?>
                            <a href="<?php echo Config::get('URL'); ?>home/talent">Jobs</a></li>
                        <li><?php if (View::checkForActiveController($filename, "index")) ?>
                            <a href="<?php echo Config::get('URL'); ?>profile/index/">Notifications</a></li>
                        <li><?php if (View::checkForActiveController($filename, "index")) ?>
                            <a href="<?php echo Config::get('URL'); ?>user/index/">Me</a></li>
                        <li><?php if (View::checkForActiveController($filename, "login")) ?>
                            <a href="<?php echo Config::get('URL'); ?>login/logout">Sign out</a></li>
                        <li <?php if (View::checkForActiveControllerAndAction($filename, "register/index/")) { echo ' class="active" '; } ?> >
                            <a class="button small" style="margin-bottom: 0px !important; margin-top: -9px !important; color: #ffffff !important;" href="<?php echo Config::get('URL'); ?>entry/">+ add work</a>
                        </li>
                    <?php } ?>
                        <?php if (Session::get("user_account_type") == 7) { ?>
                        <li><?php if (View::checkForActiveController($filename, "index")) ?>
                            <a href="<?php echo Config::get('URL'); ?>home/talent">Overview</a></li>
                        <li><?php if (View::checkForActiveController($filename, "index")) ?>
                            <a href="<?php echo Config::get('URL'); ?>profile/index/">Edit company profile</a></li>
                        <li><?php if (View::checkForActiveController($filename, "index")) ?>
                            <a href="<?php echo Config::get('URL'); ?>user/index">Settings</a></li>
                        <li><?php if (View::checkForActiveController($filename, "login")) ?>
                            <a href="<?php echo Config::get('URL'); ?>login/logout">Sign out</a></li>
                        <li <?php if (View::checkForActiveControllerAndAction($filename, "register/index/")) { echo ' class="active" '; } ?> >
                            <a class="button small" style="margin-bottom: 0px !important; margin-top: -9px !important; color: #ffffff !important;" href="<?php echo Config::get('URL'); ?>entry/index/">+ add work</a>
                        </li>
                    <?php } ?>
                <?php } else { ?>
                    <!-- for not logged in users -->
                    <li <?php if (View::checkForActiveControllerAndAction($filename, "login/index/")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>login/index/">Students</a>
                    </li>
                    <li <?php if (View::checkForActiveControllerAndAction($filename, "register/index/")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>login/index/">Educators</a>
                    </li>
                    <li <?php if (View::checkForActiveControllerAndAction($filename, "register/index/")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>register/index/">Employers</a>
                    </li>
                    <li <?php if (View::checkForActiveControllerAndAction($filename, "register/index/")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>login/index/">Sign in</a>
                    </li>
                    <li <?php if (View::checkForActiveControllerAndAction($filename, "register/index/")) { echo ' class="active" '; } ?> >
                        <a class="button small" style="margin-bottom: 0px !important; margin-top: -9px !important; color: #ffffff !important;" href="<?php echo Config::get('URL'); ?>register/index/">Get Started &mdash; free forever</a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </header>