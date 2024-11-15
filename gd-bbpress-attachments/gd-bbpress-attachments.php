<?php

/**
 * Plugin Name:       GD bbPress Attachments
 * Plugin URI:        https://www.dev4press.com/plugins/gd-bbpress-attachments/
 * Description:       Implement attachments upload to the topics and replies in bbPress plugin through a media library and add additional forum-based controls.
 * Author:            Milan Petrovic
 * Author URI:        https://www.dev4press.com/
 * Text Domain:       gd-bbpress-attachments
 * Version:           4.7.3
 * Requires at least: 5.9
 * Tested up to:      6.7
 * Requires PHP:      7.4
 * Requires Plugins:  bbpress
 * License:           GPLv3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 *
 * == Copyright ==
 * Copyright 2008 - 2024 Milan Petrovic (email: support@dev4press.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>
 */

if (!defined('GDBBPRESSATTACHMENTS_CAP')) {
    define('GDBBPRESSATTACHMENTS_CAP', 'activate_plugins');
}

require_once dirname(__FILE__).'/code/defaults.php';
require_once dirname(__FILE__).'/code/shared.php';
require_once dirname(__FILE__).'/code/sanitize.php';

require_once dirname(__FILE__).'/code/class.php';
require_once dirname(__FILE__).'/code/public.php';

GDATTCore::instance();
