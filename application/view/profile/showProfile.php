<div class="main-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <!-- echo out the system feedback (error and success messages) -->
                <?php $this->renderFeedbackMessages(); ?>
                <?php if ($this->user) { ?>
                    <div class="grid-x grid-padding-x background">
                        <div class="large-10 cell">
                            <div class="card-profile-stats">
                                <div class="card-profile-stats-intro">
                                    <?php if (isset($this->user->user_avatar_link)) { ?>
                                        <img class="card-profile-stats-intro-pic" src="<?= $this->user->user_avatar_link; ?>" />
                                    <?php } ?>
                                    <div class="card-profile-stats-intro-content">
                                        <h6><b><?= $this->user->firstname. '&nbsp;' .$this->user->surname; ?></b></h6>
                                        <label><?= $this->user->role; ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="large-2 cell">
                            <br><br>
                            <a href="" class="button hollow tiny float-right">Edit</a>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="large-2 cell">
                            <br><br>
                            <h6 class="subheader"><b>Annual</b></h6>
                        </div>
                        <div class="large-2 cell">
                            <br><br>
                            <h6 class="subheader"><b>Annual</b></h6>
                        </div>
                        <div class="large-2 cell">
                            <br><br>
                            <h6 class="subheader"><b>Annual</b></h6>
                        </div>
                        <div class="large-2 cell">
                            <br><br>
                            <h6 class="subheader"><b>Annual</b></h6>
                        </div>
                        <div class="large-2 cell">
                            <br><br>
                            <h6 class="subheader"><b>Annual</b></h6>
                        </div>
                        <div class="large-2 cell">
                            <br><br>
                            <h6 class="subheader"><b>Annual</b></h6>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="large-12 cell">
                            <br><br>
                            <h6 class="subheader"><b>Personal Information</b></h6>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x personal">
                        <div class="large-3 cell">
                            <label><b>First Name</b></label><br>
                            <label><?= $this->user->firstname; ?></label>
                        </div>
                        <div class="large-3 cell">
                            <label><b>Second Name</b></label><br>
                            <label><?= $this->user->surname; ?></label>
                        </div>
                        <div class="large-3 cell">
                            <label><b>Birth Date</b></label><br>
                            <label><?= $this->user->dob; ?></label>
                        </div>
                        <div class="large-3 cell">
                            <label><b>Gender</b></label><br>
                            <label><?= $this->user->gender; ?></label>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="large-3 cell">
                            <label><b>Race</b></label><br>
                            <label><?= $this->user->race; ?></label>
                        </div>
                        <div class="large-3 cell">
                            <label><b>Employee Number</b></label><br>
                            <label><?= $this->user->person_number; ?></label>
                        </div>
                        <div class="large-3 cell">
                            <label><b>SA ID or Passport Number</b></label><br>
                            <label><?= $this->user->identity; ?></label>
                        </div>
                    </div>
                    <hr>
                    <div class="grid-x grid-padding-x">
                        <div class="large-6 cell">
                            <label><b>Address</b></label><br>
                            <label><?= $this->user->address; ?></label>
                        </div>
                        <div class="large-3 cell">
                            <label><b>City</b></label><br>
                            <label><?= $this->user->city; ?></label>
                        </div>
                        <div class="large-3 cell">
                            <label><b>Province</b></label><br>
                            <label><?= $this->user->province; ?></label>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="large-12 cell">
                            <br><br>
                            <h6 class="subheader"><b>Contact Information</b></h6>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x personal">
                        <div class="large-3 cell">
                            <label><b>Contact</b></label><br>
                            <label><?= $this->user->phone; ?></label>
                        </div>
                        <div class="large-3 cell">
                            <label><b>Email</b></label><br>
                            <label><?= $this->user->user_email; ?></label>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
