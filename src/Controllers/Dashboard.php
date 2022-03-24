<?php

namespace YVYDASHBOARD\Controllers;

use \YVYDASHBOARD\Helpers\TwigViewer;

class Dashboard
{
    public function criarPagina()
    {
        add_action( 'admin_menu', function (){
            add_menu_page(
                'Mundo YVY',
                'Mundo YVY',
                'manage_options',
                'mundo-yvy',
                [$this, 'dashboardCallback'],
                plugins_url( 'yvy-dashboard/views/assets/img/icon-yvy.png' ),
                6
            );
        });
    }

    public function dashboardCallback()
    {
        if(!current_user_can('manage_options')){
            return;
        }

        $args = [];

        echo TwigViewer::render("index.html", $args);
    }
}