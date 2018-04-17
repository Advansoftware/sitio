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
define('DB_NAME', 'sitio');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&V56.Zk$x4hX>aGa70f_ |9{BD$p8tP^:[oz$zmuJUkfJG5.t hB!ZLX+l#wT?K]');
define('SECURE_AUTH_KEY',  '!7HX;A{6K/GAE5WWP}Wrbp5)qc[~% <OeX:+Gj~JJZN)Uq3_Q6?8>pb($`P2spP<');
define('LOGGED_IN_KEY',    'E6{;!}5+hk)xGc i=vXaEU5Y?ku8lQ$u+2^?67TF e@1!^UPo)>C~g7MB/k[OEt9');
define('NONCE_KEY',        '/cPs?{Ml1xZMRWb4]U^;d9Q[k>/s9TFWNK$LvK9_H$>2=#-0*4c5$BlW}Q!6VRTG');
define('AUTH_SALT',        '%eh6H&<2Er9Y:@-mZ{t`?GngdW38`[;sO+@-6nZGs<064_wfCh>5TSEUW/<FL87r');
define('SECURE_AUTH_SALT', 'M<8ZjccT _UQ?2ApL0Da8#W}()PN,(RtQX8ye2g|Ot[./<tRAETf<TpU1 yv.k0l');
define('LOGGED_IN_SALT',   'E-^% Q6)~e5+Nbgs6$]GeY]~.M>o2`k)2z do^?kwP OTe}??zA+|fq{GZuc0[p^');
define('NONCE_SALT',       'akgq;[xjI?L&+JaY?OS=.u+{=3n3is4WVT,ES5GfcS.-q!& BO-jku_dR?&yz7<x');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
