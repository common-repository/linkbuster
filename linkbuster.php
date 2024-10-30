<?php
/*
Plugin Name: Link Buster
Version: 0.1
*/

class LinkBusterWidget extends WP_Widget {
	
	function LinkBusterWidget() {
		$widget_ops = array('classname' => 'LinkBusterWidget', 'description' => 'Blocks all links inside a specified element.' );
		$this->WP_Widget('LinkBusterWidget', 'Link Buster', $widget_ops);
	}

	function form($instance) {
	    $instance = wp_parse_args( (array) $instance, array( 'csspath' => '' ) );
		$csspath = $instance['csspath'];
?>
  <p><label for="<?php echo $this->get_field_id('csspath'); ?>">CSS Path: <input class="widefat" id="<?php echo $this->get_field_id('csspath'); ?>" name="<?php echo $this->get_field_name('csspath'); ?>" type="text" value="<?php echo attribute_escape($csspath); ?>" /></label></p>
<?php
	}

	function update($new_instance, $old_instance) {
   		$instance = $old_instance;
   		$instance['csspath'] = $new_instance['csspath'];
   		return $instance;
   	}

	function widget($args, $instance){
	extract($args, EXTR_SKIP);
?>
<script>jQuery(document).ready(function($) { var cssPath = '<?php echo $instance['csspath'] ?> a'; $(cssPath).each(function () { var $this = $(this), href = $this.attr('href'); $this.attr('href', '#'); }) });</script>
<?php
	}
}
add_action( 'widgets_init', create_function('', 'return register_widget("LinkBusterWidget");') );?>
