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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Wxq]69bm>tH%^1 pz*rr*$v<=s5S5@:_T.91BscAE4y?yV>&yD>AK8+OEA]G,=rt' );
define( 'SECURE_AUTH_KEY',  ';.9 $,idlj0lpogbk4K0^4BN@ MyVxnCsk@}x(t-+suB)fd^-Xx*8Rk,*ZzipHn=' );
define( 'LOGGED_IN_KEY',    '[tmUj8QcpJ)>3Te1$8ZM6=v){A-qT<o[|:IxIcJlrk_{9qE*y9)[8!FFWs{x[VpZ' );
define( 'NONCE_KEY',        '8iwL~ZPWHU[O=+`- d4a@N-KD%>l0(CSb{BEeE&i-vd?6>v`OlA6V<6-cgQDJl9)' );
define( 'AUTH_SALT',        'uqfUV-F@We3e`4.]5M8)Q]O3PN5X;uY)*WRMPc8_r=L^jds`3w~#r0p2!gB;pu/8' );
define( 'SECURE_AUTH_SALT', '5qMq,-raIn9=gEfv3RQ.ss@O@!_zO3Hiw4aFCK0c04z~m6x&dltxR&>e&j<_d#Ug' );
define( 'LOGGED_IN_SALT',   'LzBli?Bqzk3l<,Kg+w4AE5Z]M/gXHkUHPHW&iF@f-L/[2cQWq=<u^%AU/!%J2Xo ' );
define( 'NONCE_SALT',       '(#Ny~0EpikC)!U!7DEL16?+I/txd/w ^OcY)E{kW8{ %A,*xmM{rq2kro omDU_6' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'son_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
