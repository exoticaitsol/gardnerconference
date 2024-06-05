<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'normal' );
define( 'JETPACK_WAF_SHARE_DATA', '1' );
define( 'JETPACK_WAF_SHARE_DEBUG_DATA', false );
define( 'JETPACK_WAF_DIR', '/home/u746845997/domains/exoticaitsolutions.com/public_html/gardnerconference/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', '/home/u746845997/domains/exoticaitsolutions.com/public_html/gardnerconference/wp-content/../wp-config.php' );
require_once '/home/u746845997/domains/exoticaitsolutions.com/public_html/gardnerconference/wp-content/plugins/jetpack/vendor/autoload.php';
Automattic\Jetpack\Waf\Waf_Runner::initialize();
