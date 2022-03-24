<?php

/**
 * Plugin Name: YVY - Dashboard
 * Plugin URI: https://wiki.yvybrasil.com/plugin/yvy-dashboard
 * Description: Plugin responsavel por criar o dashboard YVY
 * Author: YVY2.0
 * Author URI: https://wiki.yvybrasil.com/equipe-dev
 * version: 1.0.0
 */

namespace YVYDASHBOARD;

require_once __DIR__ . '/vendor/autoload.php';

add_action('init', function (){
    $dashboardControllers = new \YVYDASHBOARD\Controllers\Dashboard();
    $dashboardControllers->criarPagina();
});

