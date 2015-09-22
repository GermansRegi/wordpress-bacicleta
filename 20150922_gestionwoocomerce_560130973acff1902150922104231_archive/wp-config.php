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
define('DB_NAME', 'gestion');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', 'MP/&e-$DkU.Cy-{al5:)Wy)-/+{uA0;Lnuitu>]07)}c07=Oyb-7$GH;|SL57Jq9');
define('SECURE_AUTH_KEY', 'ALY/i4:NR=}]uG2X!1[!tYc%K)BX|]2IY~yn|-{MoK$|4#RfJ0e:T#q+[tI?i->u');
define('LOGGED_IN_KEY', '0eKQg#`uJEh+7*3&y:vvJ2W@:(d|wU)B1MKGCFXVA~6[MUSN1-CdHl/CsAn(u7v@');
define('NONCE_KEY', 'Vxv6e79vb9S]6AoR,d(+Km9YyV@W/ !jqS)+A&Y|7;|vCyGtzr2z0x(=?WIjrD1N');
define('AUTH_SALT', 'pXA8+#zysIwlGqhQTwQoC=d)`TrV.f0]r|+y:QT/a;u-eXuW8i0(/8S%/<:@+7h{');
define('SECURE_AUTH_SALT', '/+_JCL0(IDnCQQWkrcLY|shXx~LeD}{YTOP!!(%RqXD|TBx 7|?@yzXnZBs*>&]?');
define('LOGGED_IN_SALT', 'VLF#LXhr{6rKhPrR/g{-)!;m@]@<F=Crr:ouhN<QIv+VtZ!{]#H7f1(Y=.IPD.7Z');
define('NONCE_SALT', 'J@Cw1B9IHF5LL8-Lpj:8.*kM`2$j[A0RO;Q0~/W4cR.t8$L>-_]W~RK*K10?cuN?');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'gestion_';


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

