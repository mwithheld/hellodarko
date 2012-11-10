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
 * HelloDarko block
 *
 * A simple Hello world block written for MoodleRooms
 * There is an image url in the languag file, or you can set the
 * default image URL globally (Settings > Plugins > Blocks > HelloDarko),
 * or you can set the image URL in the block instance.
 *
 * @package    block
 * @subpackage hellodarko
 * @copyright 2012 Mark van Hoek
 * @author Mark van Hoek
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_hellodarko extends block_base {

    public function init() {
        $this->title = get_string('blocktitle', 'block_hellodarko');
    }

    public function get_content() {
        if (!empty($this->content)) {
            return $this->content;
        }
        $this->populate_config();

        $this->content->text = get_string('imagehtml', 'block_hellodarko', $this->content->imageurl);

        $this->content->footer = get_string('blockfooter', 'block_hellodarko');

        return $this->content;
    }

    /**
     * UTILITY FUNCTIONS========================================================
     */

    /**
     * Populate $this->content and its variables from config, global, or default
     * @return void
     */
    public function populate_config() {
        if (empty($this->content)) {
            $this->content = new stdClass;
        }

        // Function coalesce() is used to get the first non-empty image URL from this list below.
        $dirtyurl = $this->coalesce($this->config->imageurl,
                get_config('block_hellodarko', 'global_defaulturl'),
                get_string('config_imageurl_default', 'block_hellodarko')
                );
        $this->content->imageurl = clean_param($dirtyurl, PARAM_URL);
    }

    /**
     * Return the first non-empty value from a set of arguments passed to this function
     * Note this uses empty() and not is_null()
     * @link http://stackoverflow.com/questions/1013493/coalesce-function-for-php Code source
     * @return mixed The first non-blank argument in the list you passed in.
     */
    protected function coalesce() {
        $args = func_get_args();
        foreach ($args as $arg) {
            if (!empty($arg)) {
                return $arg;
            }
        }
        return $args[0];
    }

}

