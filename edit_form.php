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
 * Instance config form for the HelloDarko block
 *
 * @package    block
 * @subpackage hellodarko
 * @copyright 2012 Mark van Hoek
 * @author Mark van Hoek
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_hellodarko_edit_form extends block_edit_form {

    protected function specific_definition($mform) {
        $mform->addElement('header', 'configheader', get_string('settings', 'block_hellodarko'));

        $mform->addElement('text', 'config_imageurl', get_string('config_imageurl_label', 'block_hellodarko'));
        $dirtyurl = get_string('config_imageurl_default', 'block_hellodarko');
        $mform->setDefault('config_imageurl', clean_param($dirtyurl, PARAM_URL));
        $mform->setType('config_imageurl', PARAM_URL);
    }

}