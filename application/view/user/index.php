<div class="main-container">
    <div class="">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell" style="background: #efefef; height: 340px; position: absolute; top: 80px; right: 0; left: 0;"></div>
        </div>
    </div>
        <div class="">
            <div class="large-12 cell" style="padding-top: 261px;">
                <ul class="tabs" data-tabs="1lywe2-tabs" id="example-tabs" role="tablist">
                    <li class="tabs-title is-active" role="presentation"><a href="#panel1" aria-selected="true" role="tab" aria-controls="panel1" id="panel1-label" tabindex="0">Profile</a></li>
                    <li class="tabs-title" role="presentation"><a href="#panel2" role="tab" aria-controls="panel2" aria-selected="false" id="panel2-label" tabindex="-1">Portfolio</a></li>
                    <li class="tabs-title" role="presentation"><a href="#panel3" role="tab" aria-controls="panel3" aria-selected="false" id="panel3-label" tabindex="-1">Connections</a></li>
                    <li class="tabs-title" role="presentation"><a href="#panel4" role="tab" aria-controls="panel4" aria-selected="false" id="panel4-label" tabindex="-1">Suggestions</a></li>
                </ul>
            </div>
        </div>
        <div class="grid-x">
            <div class="large-2 cell">
            aljsajdalksdj
            </div>
        
        <div class="large-10 cell">
                <div class="tabs-content" data-tabs-content="example-tabs">
                    <div class="tabs-panel is-active" id="panel1" role="tabpanel" aria-labelledby="panel1-label">
                        <p><a data-open="upload-images">Click to open</a><br></p>
                        <p>Check me out! I'm a super cool Tab panel with text content!</p>
                    </div>
                    <div class="tabs-panel" id="panel2" role="tabpanel" aria-labelledby="panel2-label" aria-hidden="true">
                        <p>two</p>
                        <p>Check me out! I'm a super cool Tab panel with text content!</p>
                    </div>
                    <div class="tabs-panel" id="panel3" role="tabpanel" aria-labelledby="panel3-label" aria-hidden="true">
                        <p>three</p>
                        <p>Check me out! I'm a super cool Tab panel with text content!</p>
                    </div>
                    <div class="tabs-panel" id="panel4" role="tabpanel" aria-labelledby="panel4-label" aria-hidden="true">
                        <p>four</p>
                        <p>Check me out! I'm a super cool Tab panel with text content!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-container-secondary">
    <!--div class="grid-x grid-padding-x intro-banner">
        <div class="large-12 cell">
        
        </div>
    </div-->
    <div class="">
        <div class="grid-x grid-padding-x">
            <div class="large-2 cell">
                <h5 class="subheader"><b>Overview</b></h5>
                <hr>
                <h6>Education</h6><br>
                <a data-open="add-education">+ add education</a>
                <hr>
                <h6>Work experience</h6><br>
                <a data-open="add-work-experience">+ add work experience</a>
                <hr>
                <h6>Location</h6><br>
                <a data-open="add-location">+ add location</a>
            </div>
            <div class="large-10 cell">
                <div class="grid-x grid-margin-x grid-margin-y grid-padding-x">
                    <div class="large-6 box cell grid-x">
                        <div class="large-2 grid-x cell">
                            <img src="<?php echo Config::get('URL'); ?>icons/line-icon-4.svg">
                        </div>
                        <div class="large-10 cell">
                            <br>
                            <label><b>Add Work Experience</b></label><br>
                            <label>State experiences from jobs, internships, and/or co-ops</label>
                            <br><br>
                        </div>
                    </div>
                    <div class="large-6 box cell grid-x">
                        <div class="large-2 grid-x cell">
                            <img src="<?php echo Config::get('URL'); ?>icons/line-icon-4.svg">
                        </div>
                        <div class="large-10 cell">
                            <br>
                            <label><b>Add Courses</b></label><br>
                            <label>List current or past courses that you've learnt a lot from</label>
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-margin-x grid-margin-y grid-padding-x">
                    <div class="large-6 box cell grid-x">
                        <div class="large-2 grid-x cell">
                            <img src="<?php echo Config::get('URL'); ?>icons/line-icon-4.svg">
                        </div>
                        <div class="large-10 cell">
                            <br>
                            <label><b>Add Accomplishments</b></label><br>
                            <label>Show what you're made of by taking credit for the completed tasks, projects, or milestones</label>
                            <br><br>
                        </div>
                    </div>
                    <div class="large-6 box cell grid-x">
                        <div class="large-2 grid-x cell">
                            <img src="<?php echo Config::get('URL'); ?>icons/line-icon-4.svg">
                        </div>
                        <div class="large-10 cell">
                            <br>
                            <label><b>Add Clubs, Affiliations, &amp; Programs</b></label><br>
                            <label>Did you start, lead, or make intersting contributions to a student group?</label>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Education -->
<div class="reveal large" id="add-education" data-reveal data-animation-in="slide-in" data-animation-out="slide-out">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="large-6 cell">
                <label class="subheader align-center">Drag &amp; Drop images or <a href="" type="file" class="file">Browse for file to upload.</a></label>
            </div>
        </div>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- Work Experience -->
<div class="reveal large" id="add-work-experience" data-reveal data-animation-in="slide-in" data-animation-out="slide-out">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="large-6 cell">
                <label class="subheader align-center">Drag &amp; Drop images or <a href="" type="file" class="file">Browse for file to upload.</a></label>
            </div>
        </div>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- Work Experience -->
<div class="reveal large" id="add-location" data-reveal data-animation-in="slide-in" data-animation-out="slide-out">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="large-6 cell">
                <label class="subheader align-center">Drag &amp; Drop images or <a href="" type="file" class="file">Browse for file to upload.</a></label>
            </div>
        </div>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>