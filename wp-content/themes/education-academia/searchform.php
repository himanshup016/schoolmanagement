<?php
/**
 * Template for displaying search forms in Education_Academia
 *
 * @subpackage Education_Academia
 * @since 1.0
 * @version 0.1
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="row">
<div class="col-md-6">
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'education-academia' ); ?>" value="<?php echo esc_attr(get_search_query() ); ?>" name="s" />	
</div>
<div class="col-md-6">
	<button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>	
</div>	
</div>

</form>