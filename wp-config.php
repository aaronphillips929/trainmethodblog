<?php
# Database Configuration
define( 'DB_NAME', 'wp_trainmethod' );
define( 'DB_USER', 'trainmethod' );
define( 'DB_PASSWORD', '1fDfW-bRZanTDEzaZlLm' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '2B5~s6M|z^]pRE%XEzxHbFo[y$]bm~ua)2X4t$@?VL>UEYlz5-64Q+^ b!A]3hDo');
define('SECURE_AUTH_KEY',  '2u8ad<>v67a[(E%8r;H-@q;.g..%I]K]5?tS4;|(GIL=dOR=7I-Ao|nVbhME1Oh?');
define('LOGGED_IN_KEY',    '}XzW-wT6dLWMP9kyC-d61f3`jpCpXj/Da+pq1Ijgkn-<&HS?jw8q;Ftc8v?>MQw6');
define('NONCE_KEY',        '}{-iu=Jj)%[|+U-=  WMh5MV{T+OPMFhwZ,yaN|)_KW}F+~]=zSrnIE+?UwC7UKv');
define('AUTH_SALT',        '_OYWQTCX>0l,|.n7uuUgJ$<O*+KqPR3m/H2Zbe<wtInJ[zg<Waga_Stm:Pz@qO#T');
define('SECURE_AUTH_SALT', '+2rSw67Ra1o.Z0-bR2J_+=28#i4=/cqkLBRxPwE!35+{{~C}|!c[%w`~z$I03-#5');
define('LOGGED_IN_SALT',   'h$H@l=?+HAEmp,q+^bwr+RW|53{`R4iFY0>:-Ssx@F]]PVc=Nl#.x@64x5mF}Ye ');
define('NONCE_SALT',       ':!:0:++2F`eZ>U$A:XReZ--DqjRL#)O+7fc9@^+FPpT+r#jHE&+s`V@F#!u,C)%m');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'trainmethod' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '9ee33cac5ccd039d30d3b7b096ab3319a174c1d5' );

define( 'WPE_CLUSTER_ID', '100232' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'trainmethod.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100232', );

$wpe_special_ips=array ( 0 => '104.155.142.83', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
