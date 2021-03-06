<?php
/**
 * m'Manager | Invoices Management System
 * 
 * This content is released under the Proprietary License (Proprietary)
 *
 * Copyright (c) 2017, Eric Claver AKAFFOU - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * 
 * @package m'Manager
 * @author  Eric Claver AKAFFOU
 * @copyright   Copyright (c) 2017, on'Eric Computing, Inc. (https://www.onericcomputing.com/)
 * @license https://www.mmanager.fr  Proprietary License
 * @link    https://codecanyon.net/item/mmanager-invoices-management-system/19866435?s_rank=1
 * @since   Version 1.0.0
 * @filesource
 */

namespace Mmanager\Config;
$db = [];
$return = [];
$options = null != get_option('woocommerce_mmanager_connect_config') ? json_decode(get_option('woocommerce_mmanager_connect_config'), true) : false;
if ($options) {
	$configs = $options;
	$db = $configs['db'];

	$return = [
		'db' => [
			'host' => $db['host'],
			'username' => $db['username'],
			'password' => $db['password'],
			'database' => $db['database'],
			'charset' => $db['charset']
		]
	];
}
return $return;
