<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline navbar-form navbar-right">
    <fieldset>
    <div class="input-group">
      <input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
      <span class="input-group-btn">
        <button type="submit" class="btn btn-default"><i class="fa fa-search fa-lg"></i></button>
      </span>
    </div>
    </fieldset>
</form>
