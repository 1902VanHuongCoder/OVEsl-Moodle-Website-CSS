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
 * Global CSS Plugin - Library functions
 *
 * @package    local_paul_to_global_css
 * @copyright  2025 Your Name
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Inject custom CSS file into every page
 *
 * This callback is automatically called by Moodle on every page load
 * to add custom CSS to the page.
 */
function local_paul_to_global_css_before_standard_html_head()
{
    global $CFG, $PAGE;

    echo '<!-- PAGE->pagetype: ' . $PAGE->pagetype . ' -->';

    $links = '';

    // Common CSS files for all pages
    $commonCssFiles = [
        '/local/paul_to_global_css/styles.css',
        '/local/paul_to_global_css/css/grades.css',
        '/local/paul_to_global_css/css/course-completion.css',
        '/local/paul_to_global_css/css/page-course-edit.css',
        '/local/paul_to_global_css/css/question-bank.css',
        '/local/paul_to_global_css/css/forum-discussion.css',
        '/local/paul_to_global_css/css/glossary.css',
        '/local/paul_to_global_css/css/choice-activity.css',
        '/local/paul_to_global_css/css/quiz.css',
        '/local/paul_to_global_css/css/assigment-activity.css'
    ];

    foreach ($commonCssFiles as $file) {
        $links .= '<link rel="stylesheet" type="text/css" href="' . $CFG->wwwroot . $file . '">' . "\n";
    }

    // Debug: Check pagetype and action parameter
    $action = optional_param('action', '', PARAM_ALPHA);

    // Load assign-grade.css and assigment-activity.css on assignment grader page
    // Check multiple conditions because pagetype might vary
    if (($PAGE->pagetype == 'mod-assign-view' || $PAGE->pagetype == 'mod-assign-grading' || strpos($PAGE->pagetype, 'mod-assign') !== false)
        && $action == 'grader'
    ) {
        $links .= '<link rel="stylesheet" type="text/css" href="' . $CFG->wwwroot . '/local/paul_to_global_css/css/assign-grade.css">' . "\n";
    }

    return $links;
}

/**
 * Inject custom JavaScript files into every page
 *
 * This callback is automatically called by Moodle on every page load
 * to add custom JavaScript to the page.
 *
 * @param moodle_page $page The page object
 */
function local_paul_to_global_css_before_footer()
{
    global $PAGE, $CFG;

    // Add JavaScript file to wrap gradeparent
    $PAGE->requires->js('/local/paul_to_global_css/js/wrap-gradeparent.js');
    // Add JavaScript file to wrap gradingtable (luôn luôn import)
    $PAGE->requires->js('/local/paul_to_global_css/js/wrap-gradingtable.js');
}