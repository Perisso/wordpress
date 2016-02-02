<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'l;IR,}S7d?>.NljI>/^))2;:4A]Ke^9)-I5fA&(BsEZ|-,(T*79Vyut;:[?n405U');
define('SECURE_AUTH_KEY', 'VbC-ZCP%>g3w}Y=-sDkv3J iS,(aKFkkB&Q/90bA5yio.Pz,XuO(h:5bj#q>I+A+');
define('LOGGED_IN_KEY', '^+YfLnMJnOP7]jQt:AjP3`e9uazr0f+Pg]x=y88Ao[Ei.]I3H&_Igz3HBJ(wE]go');
define('NONCE_KEY', 'T5wdBDcov|35SZAgNs,)F&/ANmb6Ke46)WjQ3rhrRcs5hr-~#@=eJS7UnxK$Zn89');
define('AUTH_SALT', ']vaY:}C bkPyWN)2L+Q9!vKt.g=1|M_^)_+R55:y #OoA?ez((e@M^9lR(3?8bK=');
define('SECURE_AUTH_SALT', 'C(a#uj-9Egy] s[obm+W/6+&9|cfcVco)OA3<esG;i92aFl`d?nST#-Y+?.u*s7x');
define('LOGGED_IN_SALT', 'J[9j-3|?N-j:|S#(N#~}lEp>gn+qOG^vq6+]+x:p5A5JEJvbSKkCh9u)3Q+NT>[z');
define('NONCE_SALT', 'ot|{?pTSZ1n0VMe.vmKM{;=8LTJ{Rb;;/i-d/hy5!9=CqBe*JC- fC*eT*4wDqz{');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

