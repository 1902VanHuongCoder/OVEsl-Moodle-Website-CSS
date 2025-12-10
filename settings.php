<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Global CSS Plugin - Settings page
 *
 * @package    local_paul_to_global_css
 * @copyright  2025 Your Name
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    // Create new settings page
    $settings = new admin_settingpage('local_paul_to_global_css', get_string('pluginname', 'local_paul_to_global_css'));
    
    // Add settings page to admin menu
    $ADMIN->add('localplugins', $settings);
    
    // Add custom CSS textarea setting
    $settings->add(new admin_setting_configtextarea(
        'local_paul_to_global_css/customcss',
        get_string('customcss', 'local_paul_to_global_css'),
        get_string('customcss_desc', 'local_paul_to_global_css'),
        '',
        PARAM_RAW,
        60, // Columns
        20  // Rows
    ));
    
    // Add enable/disable setting
    $settings->add(new admin_setting_configcheckbox(
        'local_paul_to_global_css/enabled',
        get_string('enabled', 'local_paul_to_global_css'),
        get_string('enabled_desc', 'local_paul_to_global_css'),
        1
    ));
}
