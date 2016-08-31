<div class="search-box">
  <form method="get" id="searchform" action="<?php echo home_url() ; ?>/">
    <div class="search-box">
      <input class="global-search-input" placeholder="Search website here" type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" maxlength="33" />
      <i class="fa fa-search fa-lg" aria-hidden="true"></i>
    </div>
  </form>
</div>