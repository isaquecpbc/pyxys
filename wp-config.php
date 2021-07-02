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
define( 'DB_NAME', 'pyxys' );

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
define( 'AUTH_KEY',         '(Zl/ZU)VgUHqB8cqe?>i4 wwfw4{,:Lj-8XxD/Hz+(V4FUv+#+uY gggs`T0:8A(' );
define( 'SECURE_AUTH_KEY',  'skRRyq6sL9~YQr[Gea e?8Z#L ;4N`D32k|NbO18bEJug2d$QD:Cr;+Ps6A{FfD:' );
define( 'LOGGED_IN_KEY',    '[*X9`3/0n4+lOXg.i ,&KOm})CG/8-={uuA,Lj(u_7DRf}a9MTdh4^qO:U@ZTQ$E' );
define( 'NONCE_KEY',        'HvH p/1KgPGTk?B?_*~[|yye~^p}Hdlxh7VuE}YH{=hRol0tZGc^-fAx:Fk[8`({' );
define( 'AUTH_SALT',        'Bsi@,h#spss^87y9_ce&BLWr5h|U!RMmC[NI]-YL3!d@G?eGzX!u-oIF0P%|d!xr' );
define( 'SECURE_AUTH_SALT', 'liW1Rc `<X>cqNSrF*x>$`@_n&v;5qnTO!^k.638VLwC.=(TobQ)4:@0dX O9dbE' );
define( 'LOGGED_IN_SALT',   'Q(*U{kL2Hfh#912upMn?gjQjV45hf>xp{@|F5I7xx;iLW!L3mDhOeS72*d~]M.C?' );
define( 'NONCE_SALT',       'Bi|M6_hs)!7eq:Ju>2Y3Zl*VNUNw%fMW:p%`hTjh<!F5n_&D:lx8`S<g,$9x{zRz' );

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
