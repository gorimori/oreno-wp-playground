<?php

/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'oreno-wp-db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'ore');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'oreno-wp-password');

/** MySQL のホスト名 */
define('DB_HOST', '0.0.0.0');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`r#LZ6M6!2a_Lse.mKgY0,f|%,NlW,QoQi_xh/-N+E R|+{h~-3JVJ6#xnH4~0h4');
define('SECURE_AUTH_KEY',  'HBY*fm?2Ig]QS^FvkXKkZW0-%S$O1b/;~Z+|f9fIfoogo;zj&;aB;$o,Q(dqq@^T');
define('LOGGED_IN_KEY',    'ZYK=~*a}cnBs)cQoy&]E0j{!X@,BrTy<>YJE>4,bfmFb[A):+[^i@fF6KnLs?2<1');
define('NONCE_KEY',        'v;ZGW&*+pKSfHeS,Rq[LCGoQ=/)o~$5bPj|#.@>l VX,%v6UT:taLL!0{%xV/4(Q');
define('AUTH_SALT',        'NrR]+bZG@B4lJn5fWM_1eK*3m.#J O_T<Os_^#9WH4U}:;-N% ,<&`gd?:OKz<q^');
define('SECURE_AUTH_SALT', '{2YV~4*SVj[?dOO(dVJr EEpB]ezH3]7.H)]4b.*E AU1LoL[O,rl[[s6b$im-Sc');
define('LOGGED_IN_SALT',   'aL1rG7 <,i4Z3dq7i:xJL;xD:)Aads-`5t(ih#&G.TS0j=may_,vJ``g+Xt`FE+/');
define('NONCE_SALT',       'S =8Q(xZUtmcs .3Wxl7uLd6E~@(H(t=G|8}R+c0K9P~A@*Z+>je`2^4H5Nme-^m');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
