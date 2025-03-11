<?php

/**
 * brandium: Block Patterns
 *
 * @since brandium 1.0.0
 */

/**
 * Registers pattern categories for brandium
 *
 * @since brandium 1.0.0
 *
 * @return void
 */
function brandium_register_pattern_category()
{
	$block_pattern_categories = array(
		'brandium' => array('label' => __('Brandium', 'brandium')),
	);

	$block_pattern_categories = apply_filters('brandium_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'brandium_register_pattern_category', 9);
