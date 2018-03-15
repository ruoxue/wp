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
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'bdm273381173_db');

/** MySQL数据库用户名 */
define('DB_USER', 'bdm273381173');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'ruoxue123');

/** MySQL主机 */
define('DB_HOST', 'bdm273381173.my3w.com');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'En~w_Ha4s?4OMq_U?}1eq86n-=htjOj4@7;-Whc!W:<,G3oW5@vQws&2wbsCSGa,');
define('SECURE_AUTH_KEY',  'AbUseoV&Tu,O])c=8W%Hs,Qy,,sC`C|we{{xK9/n<*0$@Nk![xv$}i^f2?(0^=5f');
define('LOGGED_IN_KEY',    '^Z:BfIdHv3kGweF<gZ._.g6-*r-l;lOxwn5w5-i@VbNh*F{zF1pSej^+Ev1;?_ML');
define('NONCE_KEY',        'N,IH`7r!*XyVG~3!`y,oUXiOC8`PF.DqYt*fD?Qg8Y_IpC!c1]^ %VOX_B~Yfmz2');
define('AUTH_SALT',        'k^5^6j{>AFI*)|Ky=ppwy$N3Kw--3z@2?y20BNS)YqgV]`?YBK]1=m1jZ$Y])Bbm');
define('SECURE_AUTH_SALT', 'D|^ylROUyBS3;[_f1>hsmEZO{OBL~8?(r)K]p2n7ndsFwQ7zV-M!6V`g_YbL(TS<');
define('LOGGED_IN_SALT',   'rjLRec!AYJ>#))P#fBH)aD8~lmNvR<R,lrcejw:vAsY]fxCjmDYo[Z>rUj%31H3B');
define('NONCE_SALT',       'uKvQ`AL~oo]mlm([u403}]-E7cC*aU~N-v@<f#Z!8>aH2sU|H~_$OoZ|tzw.%_GM');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
