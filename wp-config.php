<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'antonella' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd:iAt4fmlK.$HfOO9)LIO`uz98j!#59qv}j#L Ze-n,!^G:Ch4qFRu3O)NQdk!{*' );
define( 'SECURE_AUTH_KEY',  '1mhNuYQn)Y2dJ^C0jvgd11Nl`jE9o=-IvYz{YcnJYwe|K4vS}6(  GLXf%?<F,lY' );
define( 'LOGGED_IN_KEY',    '/w6<;&t=Zw;~MSUE|gW4bI aTY%Pw0S;[xQk$(e%7+%HgwE_[Y(fV|=>b{5Lbl~y' );
define( 'NONCE_KEY',        'pya^PHlw5ks%yA`Hs2wSSG.VunZ&tiu:K`-aKpA^dutQ-d4f:KN3L3MQMwMWclB)' );
define( 'AUTH_SALT',        'bB&3P^7C(#L3?mu(y HQ:r9XmCoNY{J<tY?JDYw|U<J)a8-Tg>^~vN.jO?v!)Pce' );
define( 'SECURE_AUTH_SALT', '}8BY/C>0:RCO{M#c.N8h;z.RCZx{F[c_h-M/DtWj)qe(ciX{@!8=bZ/W{voE#ZT*' );
define( 'LOGGED_IN_SALT',   '&Xr8f^bF((2:NO[p:X;hmLMdWY: uRYEVybPEy.#yNFk;/qiE2G=xK eY%r@W(X1' );
define( 'NONCE_SALT',       '.G-TY>I,5^$?D8v; ^zOZ.oB|DT1b|H7sQ4dQX}?Qy#fR6FREd,O|o?l;st+ZH#&' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
