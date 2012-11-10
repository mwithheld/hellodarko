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

defined('MOODLE_INTERNAL') || die();

/**
 * HelloDarko block backup task
 *
 * @package    block
 * @subpackage hellodarko
 * @copyright 2012 Mark van Hoek
 * @author Mark van Hoek
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class backup_hellodarko_block_task extends backup_block_task {

    /**
     * Get file areas used for this block
     * @return array File areas used for this block
     */
    public function get_fileareas() {
        return array(); // No fileareas used for this block.
    }

    /**
     * Get attributes that need encoding for safe backup
     * @return array attributes that need encoding for safe backup
     */
    public function get_configdata_encoded_attributes() {
        return array(); // No particular settings for this block.
    }

    /**
     * Define (add) particular settings this activity can have
     */
    protected function define_my_settings() {
        // No particular settings for this block.
    }

    /**
     * Define (add) particular steps this activity can have
     */
    protected function define_my_steps() {
        // No special steps needed.
    }

    /**
     * Code the transformations to perform in the activity in
     * order to get transportable (encoded) links
     * Currently no special handling of links to/from this block
     *
     * @param $content string Content in which to encode links
     * @return string The encoded content
     */
    static public function encode_content_links($content) {
        return $content;
    }

}
