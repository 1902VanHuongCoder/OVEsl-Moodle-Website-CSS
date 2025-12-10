/**
 * Wrap gradingtable element in a scrollable wrapper
 * This allows for better horizontal scrolling on assignment grading tables
 *
 * @package    local_paul_to_global_css
 * @copyright  2025 Your Name
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

(function() {
    'use strict';

    // Wait for DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Find the gradingtable element
        var gradingTable = document.querySelector('.gradingtable');
        
        if (gradingTable) {
            // Create wrapper div
            var wrapper = document.createElement('div');
            wrapper.className = 'gradingtable-wrapper';
            
            // Insert wrapper before the gradingtable
            gradingTable.parentNode.insertBefore(wrapper, gradingTable);
            
            // Move gradingtable inside wrapper
            wrapper.appendChild(gradingTable);
            
            console.log('Gradingtable wrapped successfully');
        }
    });
})();
