<div id="sidebar">
  <div id="profile-wrapper">
  <figure id="profile-avatar">
    <img src="<?php echo get_site_url(); ?>/wp-content/themes/brusen/images/profile_avatar.jpg"></figure>
  </div>
  <h2 class="sidebartitle">
    <?php _e('Categories'); ?>
  </h2>
  <ul>
    <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
  </ul>
  <h2 class="sidebartitle">
    <?php _e('Archives'); ?>
  </h2>
  <ul class="list-archives">
    <?php wp_get_archives('type=monthly'); ?>
  </ul>
</div>
