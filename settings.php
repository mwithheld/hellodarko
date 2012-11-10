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
 * HelloDarko block global config file
 *
 * @package    block
 * @subpackage hellodarko
 * @copyright 2012 Mark van Hoek
 * @author Mark van Hoek
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$settings->add(new admin_setting_heading(
                'configheader',
                get_string('settings', 'block_hellodarko'),
                get_string('configheader_desc', 'block_hellodarko')
));

$settings->add(new admin_setting_configtext(
                'block_hellodarko/global_defaulturl',
                get_string('global_defaulturl_label', 'block_hellodarko'),
                get_string('global_defaulturl_desc', 'block_hellodarko'),
                get_string('config_imageurl_default', 'block_hellodarko')
));
