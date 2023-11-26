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

// $templatecontext = [
//     'copyright' => !empty($pluginsettings->copyright) ?
//         format_text($pluginsettings->copyright, FORMAT_HTML) : '',
// ];

// echo $OUTPUT->render_from_template('theme_synergylearning/footer', $templatecontext);




/**
 * Manage the footer content for the theme synergylearning footer.
 *
 * @return array $templatecontext footer template contents.
 */
function footer() {
    global $PAGE;
    $footerlogourl = theme_synergylearning_get_logo_url('footerlogo');
    $footerlogo = theme_synergylearning_get_setting('footerlogo', 'file');
    $footerlogoclass = (!empty($footerlogo)) ? 'footerlogo_class' : '';
    $copyrightfooter = theme_synergylearning_get_setting('copyright', 'format_html');


    $templatecontext = [
        "footerlogourl" => $footerlogourl,
        "footerlogo" => $footerlogo,
        "copyright" => $copyrightfooter,
        'footerlogoclass' => $footerlogo_class,
    ];

    echo $OUTPUT->render_from_template('theme_synergylearning/footer', $templatecontext);
}