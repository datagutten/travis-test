<?php

/**
 * Compatibility with PHPUnit 6+
 */
if ( class_exists( 'PHPUnit\Runner\Version' ) ) {
    require_once dirname( __FILE__ ) . '/phpunit6-compat.php';
}

date_default_timezone_set('UTC');

require 'Dummy.php';