<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'wordpress' );
define( 'DB_PASSWORD', 'secret' );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8mb4' );
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LDl)KWh5EI(J@Dk$|K[^jjBT</3=%*_SgI!h?48ES%4Yam?g>+:`4+U|@j}uNKW*');
define('SECURE_AUTH_KEY',  '9S|RhZ1v-e?JU50xmlQs//{+p|!/5c|*sK0lu[ZD)-{-oYl* *>&E`_]okE}@XBe');
define('LOGGED_IN_KEY',    '! aSAVEX!$Ygb]S)p%]2_Mg$LC K36=ru*m$`~rPVS=uo<C&57 ]`^S87+XJag3*');
define('NONCE_KEY',        '{a{&woc|b4kD] kms2gzw.E|jk[6?g9yZ-|*ygulUjW2_4eIA2fylir8#O%~ej9-');
define('AUTH_SALT',        'V[9p<FgtwP8}0cYk8cBek~g;`fSy|(}B{C:-eI{~8|:zz>(mGrRFuM*q1j-x6MR=');
define('SECURE_AUTH_SALT', 'D-}x&obe|%<,UCI4jA:Ym+BO=wLz}jT,Su~`w)b;ZWO(9c_-[mu:(Zu[CBT:z.T=');
define('LOGGED_IN_SALT',   '+0:8)CNl4-nv.|C$3Vt!ip${^83_+TsI3k/gn:{]X~P@+01C-m)cbhO$)+/:Wj+-');
define('NONCE_SALT',       '{~DqAv}sJ,+G7}lF/njY9IkyCLq*qG/Z.)_DQ-.:f>h;&v=+s #wcYVAfHQU~<+L');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix = 'wpdev_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once( ABSPATH . 'wp-settings.php' );
