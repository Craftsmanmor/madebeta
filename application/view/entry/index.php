<div class="main-container">
    <div class="grid-container align-center">
        <div class="grid-x grid-padding-x align-center">
            <div class="large-10 cell">
                <h2 class="text-center">Tell us some basic information about your entry:</h2>
            </div>
        </div>
        <br>
        <div class="grid-x grid-padding-x align-center">
            <div class="large-10 cell">
                <h6>Upload one or more images</h6>
                <a data-open="upload-images">Click to open</a><br>
                <label class="subheader">These images will be formatted in a slideshow when your entry is viewed. You will be able to add documents and attachments in the next step.</label>
            </div>
        </div>
        <br>
        <div class="grid-x grid-padding-x align-center">
            <div class="large-10 cell">
                <form>
                    <label><b>Choose a category</b></label>
                    <select name="entry_category">
                        <option class="subheader">Select a category</option>
                        <option>Activism &amp; Service</option>
                        <option>Agriculture &amp; Nat'l Resources</option>
                        <option>Art &amp; Design</option>
                        <option>Business</option>
                        <option>Computer Science</option>
                        <option>Creative &amp; Performance</option>
                        <option>Engineering</option>
                    </select>
                    <br>
                    <label><b>Give your entry a title</b></label>
                        <input type="text" name="entry_name" placeholder="The title helps define the entry and how users will see it" />
                        <small>The title helps define the entry and how users will see it</small>
                    <br><br>
                    <label><b>Describe your entry in more detail</b></label>
                        <textarea rows="4" name="entry_description"></textarea>
                        <small>Add as much information as you'd like.</small>
                    <br><br>
                    <table>
                        <tr>
                            <td width="80" style="padding-left: 0px;">
                                <div class="switch tiny">
                                    <input class="switch-input" id="exampleRadioSwitch1" type="checkbox" name="testGroup">
                                    <label class="switch-paddle" for="exampleRadioSwitch1">
                                        <span class="show-for-sr">Bulbasaur</span>
                                    </label>
                                </div>
                            </td>
                            <td>
                                <label for="exampleRadioSwitch1">Share on facebook</label>
                            </td>
                        </tr>
                    </table>
                    <div class="footer-button">
                        <div class="grid-x grid-padding-x align-center">
                            <div class="large-12 cell">
                                <input type="submit" class="button small float-right" autocomplete="off" value="Save and continue">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="reveal large" id="upload-images" data-reveal data-animation-in="slide-in" data-animation-out="slide-out">
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