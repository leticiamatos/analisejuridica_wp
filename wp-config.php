<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_analisejuridica');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[~H3UtB{F[yEgI}yBzL=kU5*l9},ysZ#T+_g1v,dwksXhRX6S&J9TYE+Q8c#:Ihj');
define('SECURE_AUTH_KEY',  'Q/Ql26]mG:<g?_rqMYRWw&!W`Q=[,Gk3).la4BT# _=ATq>Wa+b t<K|n?6-PhPo');
define('LOGGED_IN_KEY',    '-@`-UR;NBjusy*.+.fHq$MyoX~e_4<d5+i4:(#P!a`Cvode)y1=$0:PvFzL)x11c');
define('NONCE_KEY',        '^H (LQE$OE$7Xe)KJG!pj(pNk?e hQ&dCZTH/SLNDq2a9df94.^u%~E,H(!VxhO*');
define('AUTH_SALT',        '@8J8ZF?YKEWaR!T6ri)m{ gpGMHp*UN<3W0o$[-d`?hb,`^putyAY0q(vymaOt=4');
define('SECURE_AUTH_SALT', 'WQ)F2~64H6n=BH?&(qmV<:qu-JUHa2>M,1,N>M@zNU[[fY=E5JbFi,<^=h(kFKFd');
define('LOGGED_IN_SALT',   'r06r FS6_t9D-(0!t@>:*/xN(C}2JbCv5^`>Ig+Nz`X>k|P3WK`29{1t)waSV|DZ');
define('NONCE_SALT',       'S8$q?O6=.`BfKleP!6}OE%mUvn!01&xBAzSi2ks}uOP @~=`LcMWP+gxE:C UTww');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WPCF7_VALIDATE_CONFIGURATION', false );