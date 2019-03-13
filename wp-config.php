<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'site' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm!O<U;VD?MC<)5@]BYvH#mf&{7d(a>`1Gd[b %5S!hrB6{@3_dPj1N>^-V9U ?L$' );
define( 'SECURE_AUTH_KEY',  'oJ~q`E(>KuAV|@Zmb7YhHq}t_>)?mIz^o_NR%Hj4M8U:[np&zHbr<j7RS=+_:Yun' );
define( 'LOGGED_IN_KEY',    'QNJViHC:;U e$MEYN!x>,(~-t0^lHcMGl1YznV|kuSdKwA4</=K{}[QZ)GB:EMM5' );
define( 'NONCE_KEY',        'DjG~kci/XQC6gi<1sDNY5_n=tz@^Z$CXj{DDj.3kM6FM*kC4IE:@;~7Hv!iLwZF4' );
define( 'AUTH_SALT',        'kS)}X*Jl@q3--[@|1hM5X9E!#>jz%ENTvG0VX+2adX?,aPE=l,!8-=$nlPz]e2=W' );
define( 'SECURE_AUTH_SALT', '1#Ryu^{ez+L&fq}x?)o(pZs61nQ#y0+=i6D#0n?$qrr} lY]|/ExQqKMEclKVVc9' );
define( 'LOGGED_IN_SALT',   'V=&tl&^WxeXrPL(bJ5Kh|)=g$NP@4-mhm8@c|d;%;K:_=_2_uO#TJ&ztpa-v-<{~' );
define( 'NONCE_SALT',       '&ws@[hU6,n%t27e9B3IBVcSNg]M,YAxIvi]QlO:Ik@n[g/B&DdxsxS-|_x#r|Mg{' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
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
