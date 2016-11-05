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
define('DB_PASSWORD', '10&comm&rce');

/** Nome do host do MySQL */
define('DB_HOST', 'dezecommerce-dev.cz8kz86guz3b.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'M{Xyxe!CHc?~aDkz{+~W=8zJ`vjuOG58qO;i,6Pni:I<M+M<8temD3kKg<&S+iV2');
define('SECURE_AUTH_KEY',  'M8K-i]w,Gtd6s_bj[&nR[2J}gDGu]ofXG:-[^4^&qTwPs-NEeQj:wbb(+c~5wbTz');
define('LOGGED_IN_KEY',    'Lf%&#7?FE>GZ(/v{nzn6lE?{yI0_Wqa25Q0Ryv|sU);t2{jsht. 2)A;ao4`:k=)');
define('NONCE_KEY',        'x.#vlQoirfo@!A1Q7uulxPYe*S4a`sL ck[W3.b,pAIW_a2L]H%WtUx&Cjc 49uD');
define('AUTH_SALT',        'j/..hZ1b1uulNmZg^eo&>!/$lX?`*j|V.,g]DblD[b*/|]_^UTtY^y.^acXFo!P.');
define('SECURE_AUTH_SALT', 'mr*[)I^+4;8)s,$7Z&+x9_4kRVg?XCgH,C>7K/h1I>Y3(%@Tdb{M9~9]9 VSM5u]');
define('LOGGED_IN_SALT',   'hz2Pap-d_Z>Li}iyP}=Eekw@2&--3s<n`9f0FRu% +}}2k;9pNVD}M2[,5H(_~b*');
define('NONCE_SALT',       'WWXq_(Y6r>IqQaBep7D_X#;]kW7,V~?K;_{D:]>i-G`!G=bcY]^Dr`*PJWI}m4,>');

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

// define( 'WPCF7_VALIDATE_CONFIGURATION', false );