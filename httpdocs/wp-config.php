<?php

	$protocol = $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ? 'https' : 'http';

	// HTTPS Fixes
	if( $protocol === 'https' ) {
		$_SERVER['HTTPS'] = 'on';
	}

	define( 'ADMIN_COOKIE_PATH', '/' );
	define( 'DB_HOST', $_SERVER['DB_HOST'] );
	define( 'DB_NAME', $_SERVER['DB_NAME'] );
	define( 'DB_USER', $_SERVER['DB_USER'] );
	define( 'DB_PASSWORD', $_SERVER['DB_PASSWORD'] );
	define( 'WP_CONTENT_DIR', __DIR__ . '/wp' );
	define( 'WP_CONTENT_URL', $protocol . '://' . $_SERVER['HTTP_HOST'] . '/wp' );
	define( 'WP_DEFAULT_THEME', 'twentyseventeen' );
	define( 'WP_HOME', $protocol . '://' . $_SERVER['HTTP_HOST'] );
	define( 'WP_SITEURL', $protocol . '://' . $_SERVER['HTTP_HOST'] . '/wordpress' );
	define( 'EMPTY_TRASH_DAYS', 7 );
	define( 'WP_POST_REVISIONS', 5 );
	define( 'IMAGE_EDIT_OVERWRITE', true );
	define( 'DISALLOW_FILE_EDIT', true );
	define( 'WP_MEMORY_LIMIT', '64M' );
	define( 'DB_CHARSET', 'utf8' );
	define( 'DB_COLLATE', '' );

	set_time_limit( 120 );

	$table_prefix = 'wp_';

	define( 'WPLANG', '' );

	define( 'WP_DEBUG', false );
	define( 'WP_DEBUG_LOG', true );

	define( 'WP_ALLOW_MULTISITE', false );
	define( 'MULTISITE', false );
	define( 'SUBDOMAIN_INSTALL', true );
	define( 'PATH_CURRENT_SITE', '/' );
	define( 'SITE_ID_CURRENT_SITE', 1 );
	define( 'BLOG_ID_CURRENT_SITE', 1 );
	define( 'DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST'] );

	if ( ! defined( 'ABSPATH' ) ) {
		define( 'ABSPATH', dirname( __FILE__ ) . '/' );
	}

	if( file_exists( 'wp-extra-config.php' ) ) {
		require_once( 'wp-extra-config.php' );
	}

	require_once ABSPATH . 'wp-settings.php';