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
/** A tradução do meu tema */
define ( 'WPLANG', 'pt_BR' );

/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'belezanaweb' );

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
define( 'AUTH_KEY',         '0)mH&$~3w<=xj[qL6ye t)NnFl8^yB,V>$zxe2?mRkX$8[U6J~MpYx*..@_OBN W' );
define( 'SECURE_AUTH_KEY',  ']FiE:%>cfGNb.g%?&eYy,YWprmYN`Sv7ahn;*ZU1V?W~)VMi6DL_D:q_3%b kDCK' );
define( 'LOGGED_IN_KEY',    '*))m6yA[Q/)FGiA}*tdA/>| [ao~Ex4>,.&R1FygE+~k9M@_P/iWq^E5-G[c$TP.' );
define( 'NONCE_KEY',        'bkQxQdQh.S}8IL^j*Sw`|p33=.oW0y}IWxEs~+xI}*oAk4eLOn.WY}A=wX9sk~,/' );
define( 'AUTH_SALT',        's>@FG?>-xLmP/zC/WwIeUq+}qkPss4YRsQ>0=O6 qsjsODZM%b![(atj>*UJ5YhQ' );
define( 'SECURE_AUTH_SALT', '*rn9&PMyoLD@_VV]GGjrlOC(z9{QJ2+gKt,q`ne9D PmM$/@?jRn8w4;8&+kVHVe' );
define( 'LOGGED_IN_SALT',   'Ks*qb~lS WRUz;pWQNJTvK|Ky+N>SJ4rl?n,Lsez d)mP{F!tW.)LD>Cxsw02nh/' );
define( 'NONCE_SALT',       '`!:ge_Y!>,FM`0^TKqW-yD$Xl44^y&75*-s$:T.y1P)/L3ZctbSS)1gQSi=v0SA+' );

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
