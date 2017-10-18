<style>
  .footer{display: none;}
  .main-title{
    text-align: left !important;
    color: #FFF;
    padding-top: 280px !important;
  }
  select{
    border-bottom: 1px solid #fff;
    color: #fff !important;
  }
</style>
<?php if (!Session::userIsLoggedIn()) { ?>
  <div class="fullscreen-bg">
		<video autoplay loop muted class="fullscreen-bg__video">
			<source src="<?php echo Config::get('URL'); ?>video/film.mp4" type="video/mp4">
		</video>
  </div>
  <div class="grid-container">
    <div class="large-12 cell main-title">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
        <h2>WHAT'S YOUR STORY?</h2><br>
        </div>
      </div>
      <div class="grid-x grid-padding-x">
        <div class="large-5 cell">
          <select >
            <option style="color: #262626 !important;">I am</option>
            <option style="color: #262626 !important;">a designer</option>
            <option style="color: #262626 !important;">a connector</option>
            <option style="color: #262626 !important;">a maker</option>
            <option style="color: #262626 !important;">a storyteller</option>
            <option style="color: #262626 !important;">a technologist</option>
          </select>
        </div>
        <div class="large-5 cell">
          <select >
            <option style="color: #262626 !important;">Interested in</option>
            <option style="color: #262626 !important;">design</option>
            <option style="color: #262626 !important;">advertising</option>
            <option style="color: #262626 !important;">film</option>
            <option style="color: #262626 !important;">tv/radio</option>
            <option style="color: #262626 !important;">publishing</option>
          </select>
        </div>
        <div class="large-2 cell">
          <a href="discover/" class="expanded button small" style="padding-top: 0.8rem !important; height: 2.4375rem;"><b>Discover</b></a>
        </div>
      </div>
    </div>
	</div>
  <?php } else { ?>
    <label>I am logged in, so where to fro here?</label>
  <?php } ?>
<div class="footer-button">
    <div class="grid-x grid-padding-x align-center">
        <div class="large-6 cell">
            <label class="small subheader"><b>Made with lots of <img src="<?php echo Config::get('URL'); ?>icons/favorite_black.png" width="25"> in Pretoria.</b></label>
        </div>
        <div class="large-6 cell">
            <label class="small subheader float-right"><b>&copy; 2017 madeBETA.</b></label>
            <br><br>
        </div>
    </div>
</div>