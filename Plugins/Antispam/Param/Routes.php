<?php
namespace Plugins\Antispam\Param;

Use Common\Router\Router;

/**
 * @copyright (C) 2024, 299Ko
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @author Maxence Cauderlier <mx.koder@gmail.com>
 * 
 * @package 299Ko https://github.com/299Ko/299ko
 */
defined('ROOT') OR exit('Access denied!');

$router = Router::getInstance();

$router->map('GET', '/admin/antispam[/?]', 'AntispamAdminController#home', 'antispam-admin');
$router->map('POST', '/admin/antispam/saveconf[/?]', 'AntispamAdminController#save', 'antispam-saveconf');