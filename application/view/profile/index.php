<div class="main-container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <!-- echo out the system feedback (error and success messages) -->
                <?php $this->renderFeedbackMessages(); ?>
                <table class="overview-table">
                    <thead>
                    <tr>
                        <td>Id</td>
                        <td>Avatar</td>
                        <td>Username</td>
                        <td>User's email</td>
                        <td>Activated ?</td>
                        <td>Link to user's profile</td>
                    </tr>
                    </thead>
                    <?php foreach ($this->users as $user) { ?>
                        <tr class="<?= ($user->user_active == 0 ? 'inactive' : 'active'); ?>">
                            <td><?= $user->user_id; ?></td>
                            <td class="avatar">
                                <?php if (isset($user->user_avatar_link)) { ?>
                                    <img class="avatar-image" src="<?= $user->user_avatar_link; ?>" />
                                <?php } ?>
                            </td>
                            <td><?= $user->user_name; ?></td>
                            <td><?= $user->user_email; ?></td>
                            <td><?= ($user->user_active == 0 ? 'No' : 'Yes'); ?></td>
                            <td>
                                <a href="<?= Config::get('URL') . 'profile/showProfile/' . $user->user_id; ?>">Profile</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
