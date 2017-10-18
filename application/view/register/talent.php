<div class="main-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="large-6 cell">
                <ul class="tabs" data-tabs id="example-tabs">
                    <li class="tabs-title"><a href="<?php echo Config::get('URL'); ?>register/index">Employer</a></li>
                    <li class="tabs-title is-active"><a aria-selected="true" href="<?php echo Config::get('URL'); ?>register/talent">Talent</a></li>
                </ul>
                <h5>We Bring Job Offers to You</h5>
                <br>
                <form method="post" action="<?php echo Config::get('URL'); ?>register/talent_action">
                    <!-- the user name input field uses a HTML5 pattern check -->
                    <label class="form-label">Username</label>
                        <input type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="letters/numbers, 2 - 64 Chars (e.g. John3)" required />
                    <label class="form-label">Email address</label>
                        <input type="text" name="user_email" placeholder="john@example.com" required />
                    <label class="form-label">Password</label>
                        <input type="password" name="user_password_new" pattern=".{6,}" placeholder="6+ Characters" required autocomplete="off" />
                    <label><small>By signing up you agree to { ... } Terms of Service and Privacy Policy. You also agree to receive subsequent email and third-party communications, which you may opt out of at any time.</small></label>
                    <br><br>
                    <div class="grid-x grid-padding-x">
                        <div class="large-6 cell">
                            <label>Already have an account? <a href="<?php echo Config::get('URL'); ?>/login/index">Sign in.</a></label>
                        </div>
                        <div class="large-6 cell">
                            <input type="submit" class="button expanded" value="Get Started" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
