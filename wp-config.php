<?php
define( 'WP_HOME', 'https://vimehome.vn/' );
define( 'WP_SITEURL', 'https://vimehome.vn/' );

define( 'WP_CACHE', true );
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'vimehome' );

/** Username của database */
define( 'DB_USER', 'vimehome' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'password' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

define('DISABLE_WP_CRON', true);

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-dG!-rcvRgWeh4BCX=tB,/G{O&aWGTa tK3=}}r^bSTI&S{r&y p%0L~!27Wz_RN' );
define( 'SECURE_AUTH_KEY',  'e[%E=B7bSkH~OW;z@:NEaaNDaB7gti]>vJGjaW>q#*%Jz0=NC6PcWAcjtLy5J9fi' );
define( 'LOGGED_IN_KEY',    'lV{P9fBzVR.zBTAiX$PCqt,vX:g$c*Xjg!s-NK+S(? ;:m`xap-/2,!@c~{eSn|(' );
define( 'NONCE_KEY',        '{gUhp??/1Zi:RYl)*Al42v_;bh]WKyU6K04%eRIhAuj%:{v!9PGX+msi1.}SQ+<^' );
define( 'AUTH_SALT',        '`2aRq$)&hiNC@05Jp5PZ+,e4{}.uJ5giCBkBU#$A4iPB|ZZA89V&$,:Zs?Njhh`S' );
define( 'SECURE_AUTH_SALT', 'Sr&crpN<c_;zs^*;!_[b4 G+[SOpV>Z@3S9=[ 4GXi{GTQ=qW5Kdxq] yhG9P.XA' );
define( 'LOGGED_IN_SALT',   '>y2up^ogVuWluW?0{v23)V5ve.OKFAv?DC9aUFtNc$PjOHMUFsuHD>Wh[4B+oc W' );
define( 'NONCE_SALT',       '&A_@H6?Z0~pqC`&g662n|@M;</RI^h|3d4wO;L*Q)O3nYYfo.S-6_ffSXx]-PJ^:' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'v8p6_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
define( 'WP_DEBUG_DISPLAY', false );

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');