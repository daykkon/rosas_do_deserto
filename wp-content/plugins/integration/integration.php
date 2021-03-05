<?php

/**
 * Plugin Name:       Integração | API EXTERNA
 * Plugin URI:        https://daykkon.com.br
 * Description:       Teste de aprentação de dados externos dentro da área administrativa do WordPress
 * Version:           1.0
 * Requires at least: 5.6.2
 * Requires PHP:      7.2
 * Author:            Juliano Duarte
 * Author URI:        https://daykkon.com.br
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       integration
 */

if(!defined('ABSPATH')) {
    die('Invalid request.');
}

class Integration {

    public function __construct() {

    }

    public function activate() { 

    }
    
    public function deactivate() {
    
    }
    
    public function uninstall() {
    
    }    

}

if(class_exists('Integration')) {
    $modulo = new Integration();
}
register_activation_hook( __FILE__, array($modulo, 'activate'));
register_deactivation_hook( __FILE__, array($modulo, 'deactivate'));
register_uninstall_hook( __FILE__, array($modulo, 'uninstall'));