<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/export/servers/nginx/html/wordpress/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wordpress' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'root' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'yamato123' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wTKXYvFI?X{69dX-,h%G /3r[P,/op$N&?./z~q^zl0h*[d7.[lAMm?ey<7W;f0:' );
define( 'SECURE_AUTH_KEY',  '>|+nizCYPQUE8j.{*X+p{= t<tr>;?k{8);8.8ZpK?We7,fQ-L>&SdGZ(1a+Mh/+' );
define( 'LOGGED_IN_KEY',    ',:Djz~_)-*+3Y/g-; 5OYNGt*F._GH`4hQ-$KT4*D^s5T<a98 d0cPeoGP0aY^43' );
define( 'NONCE_KEY',        '%C7F}`mWeZYk](5vM8AW$A4x*paVP297_OX%G,|1Kt>[{bAJz0MK)EpCp(K2E9ky' );
define( 'AUTH_SALT',        'm*GYwSD!UVc}Nhe6D7*>-#!{E/HT%op,yK.Msh5cC!m4uW=jl:viay3W:Nw}7ZN?' );
define( 'SECURE_AUTH_SALT', 'llG`,<wfz>K1/Xp#PqR+x82q@Gl/y~Hlc{{WN*O}tvD?IPdHS3XeG9O]kppU+d$p' );
define( 'LOGGED_IN_SALT',   'hYPE0>&**+_bu]v/$4/?M;tpeK7zp!k_rD@(e0K#=}5PDk&tWyYuE}WM;4x{bX3V' );
define( 'NONCE_SALT',       '[uWR^j3yZ<W1t<rDOJWkn=unGadC%dN`=k`c*Z1:da=(&|[B6})pFd~)V,W8) 1-' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问文档。
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );

define("FS_METHOD","direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);