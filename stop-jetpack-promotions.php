<?php

/*
Plugin Name: Stop Jetpack Promotions
Plugin URI: https://github.com/JayWood/stop-jetpack-promotions
Description: Stops Jetpack promotions entirely.
Version: 1.0.0
Author: JayWood
Author URI: https://plugish.com
License: GPL2
Network: true
*/

namespace com\plugish\stop_jetpack_promotions;

/**
 * Yes it's that easy to disable the new plugin search feature... seriously, but you're here, so now you know!
 */
add_filter( 'jetpack_show_promotions', '__return_false' );