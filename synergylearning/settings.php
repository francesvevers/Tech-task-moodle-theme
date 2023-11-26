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
 * @package   theme_synergylearning
 * @copyright 2016 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// This is used for performance, we don't need to know about these settings on every page in Moodle, only when
// we are looking at the admin settings pages.
if ($ADMIN->fulltree) {

    // Boost provides a nice setting page which splits settings onto separate tabs. We want to use it here.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingsynergylearning', get_string('configtitle', 'theme_synergylearning'));

    // Each page is a tab - the second is the "Footer"  tab.
    $page = new admin_settingpage('theme_synergylearning_footer', get_string('footer', 'theme_synergylearning'));

    // Footer logo setting.
    $name = 'theme_synergylearning/footerlogo';
    $title = get_string('footerlogo', 'theme_synergylearning');
    $description = get_string('footerlogo_desc', 'theme_synergylearning');
    // This creates the new setting.
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'footerlogo');
    // This function will copy the image into the data_root location it can be served from.
    $setting->set_updatedcallback('theme_synergylearning_update_settings_images');
    // We always have to add the setting to a page for it to have any effect.
    $page->add($setting);

    // Copyright.
    $name = 'theme_synergylearning/copyright_footer';
    $title = get_string('copyright', 'theme_synergylearning');
    $description = '';
    $default = get_string('copyright_default', 'theme_synergylearning');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $page->add($setting);

    // Must add the page after defining all the settings!
    $settings->add($page);
}
