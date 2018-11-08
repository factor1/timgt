<?php
define('DB_NAME', 'timgt_blog');
define('DB_USER', 'timgt_blog');
define('DB_PASSWORD', '(7P82{]TD4mG');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');
define('WP_CONTENT_DIR', dirname(__FILE__));
define('WP_CONTENT_URL', 'https://www.timgt.com/blog');

define('WP_PLUGIN_DIR', dirname(__FILE__) . '/plugins');
define('WP_PLUGIN_URL', 'https://timgt.com/blog/plugins');
define('PLUGINDIR', dirname(__FILE__) . '/plugins');


define('UPLOADS', '../media');

define('AUTH_KEY',         'ECS#K]BIeH+JwhrsYZ=@}bqZ(j_]V2]ncpKfzoRnF%R-5XFaGOWC=A@VK2GuRl5J');
define('SECURE_AUTH_KEY',  '%+AR;}L(0K,CG/!VQ}g;C[Uc8JA|&S45-I1q.gBXwii:o]~f1SZ6W*TW{9_ge%c^');
define('LOGGED_IN_KEY',    'rV<UaTrR0(&q+(*F.y5:5d_n.=RL=OHWB#)/SK$e$86Y6Zw09?_e^Lp&vxN~E(^j');
define('NONCE_KEY',        '.Ce-O-8&^,;bGO*!}EP@#V|&_EXmcy`_]DQe<r$OXBv&;BT#UPEg9LH+xb[+o3tN');
define('AUTH_SALT',        '-,N{^)iL;<BW0t0+ap:KVltqUybK7o==mlptUwQa,GrKLqNnX7up*9F{y01,-5v ');
define('SECURE_AUTH_SALT', ')g:8+%LcRn2E?pk-NY!SFldtE;-kfh>.Urw(g>3^Za/CHX7^:d[r@tBQAsw$u1E}');
define('LOGGED_IN_SALT',   'i!o;A2GI}3:;;JJI(,0:>2zCSm-Nf^5m&aZu{CKf2iSV+? E|K5VD0R:6v-`/(Cx');
define('NONCE_SALT',       '_ow&|HO:vSInH2:oL4jHV1Z.bq-gdfJcO28yZ~EI;0;VAn8!LVBVI>,GGZDuD5$0');


$table_prefix  = 'prod_wp_';


define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

