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
 * Form for editing HTML block instances.
 *
 * @package   block_activity_completion
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_activity_completion extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_activity_completion');
    }

   

    function get_content() {

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $filename = "../course/log.html"; 
        if(strlen(file_get_contents($filename)) <= 1000){
            $this->content->text = file_get_contents($filename);
        }else{
            $this->content->text = "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
            <script>$(\"document\").ready(function() {
                $(\"#bcc\").animate({ scrollTop: $(\"#bcc\").height()+500 }, 2000);
                return false;
              });</script><span id='bcc' style='height: 200px; overflow-y: scroll; float: left'>".file_get_contents($filename)."</span>";
        }
        return $this->content;
    }

   
}
