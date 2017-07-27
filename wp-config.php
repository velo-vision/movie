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
define('DB_NAME', 'pelis');

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
define('AUTH_KEY', 'O|!(!M#/|:V`fUtIRzVgjE`k9S8N(6}$c*]*<6{C4Cj:p HCg}>DH23COv=<vW+3');
define('SECURE_AUTH_KEY', ';}?b@db%lou)82K]lr1E^y<][0@>OxjMN&ENe,W=3sv7q*cA@TyD9$Q85F$p6w37');
define('LOGGED_IN_KEY', '!!miH?R{ux=Z[#R|L}-A{IguW9wB@R0r.2ED<FcFJIa0xC9jSLt?b+T/:l7.BXH%');
define('NONCE_KEY', 'z?4M+Ag]t+&V5}Yuia}c3x.YMNzz|ZJ6_KulPEV)L($R;O/}Aiqgs[ex(P)`;O%y');
define('AUTH_SALT', 'h*64li[qpJrUKtL{Fk0=E76,kB8&yjtD[0>&p2{`GBqOZg*w`W%%#1d`YYD,qZk+');
define('SECURE_AUTH_SALT', '.Ujeq<@-XL}cBQWv(PfZE7n3y<i=?Cx3c<Kz+ocAhH(Z }9K? uvRo_b5=+8q(_L');
define('LOGGED_IN_SALT', '(/RUIcq5NV+*owBizGhS7J1176=WxgY2bD:uv-yvFMlS-WsP@vcSLB$I41-SK;oN');
define('NONCE_SALT', 'IVxOZyP|Lx3mioZ^WSr1lVVGV0N[Q,bt`FGX@gDDZ`:|*SY GRgX8a<C[%aypq)D');

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

