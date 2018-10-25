<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

    <form role="search" method="get" class="search-form " action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="row form-group mt-4 justify-content-between">
            <input type="search" class="col-9 search-field form-control form-control-lg " placeholder="搜寻..." value="<?php echo get_search_query(); ?>" name="s" />
            <input type="hidden" name="category" value="9" />
            <button type="submit" class="col-2 btn btn-primary search-submit form-control form-control-lg"><span class="screen-reader-text"><?php echo _x( '搜寻', 'submit button', 'twentysixteen' ); ?></span></button>
        </div>
    </form>