<?php

namespace YVYDASHBOARD\Controllers;

abstract class BaseController
{
    protected $baseURL = WP_PLUGIN_URL . '/yvy-dashboard';
    protected $assetsBaseURL = WP_PLUGIN_URL . '/yvy-dashboard/views/assets';
}