/**
 * Improve UI for admin roles assign page
 * - Remove table-hover class from assigningrole table
 * - Replace text arrows with modern FontAwesome icons in Add/Remove buttons
 *
 * @package    local_paul_to_global_css
 * @copyright  2025 Your Name
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

(function() {
    'use strict';

    /**
     * Remove table-hover class from assigningrole table
     */
    function removeTableHoverClass() {
        // Correct table id is "assigningrole" not "assignrole"
        var assignTable = document.getElementById('assigningrole');
        if (assignTable && assignTable.classList.contains('table-hover')) {
            assignTable.classList.remove('table-hover');
            console.log('table-hover class removed from assigningrole table');
        }
    }

    function removeTableHoverClassAtEntryLocalAssignRole() {
        var assignTable = document.getElementById("assignrole"); 
        if (assignTable && assignTable.classList.contains("table-hover")) {
            assignTable.classList.remove("table-hover");
            console.log("table-hover class removed from assignrole table");
        }
     }

    /**
     * Replace text arrows with FontAwesome icons in Add/Remove buttons
     */
    function replaceArrowsWithIcons() {
        // Add custom styles for icons using CSS pseudo-elements
        var style = document.createElement('style');
        style.textContent = `
            /* Add arrow icon before Add button */
            input[name="add"]::before {
                content: "\\f060";
                font-family: "FontAwesome", "Font Awesome 5 Free", "Font Awesome 6 Free";
                font-weight: 900;
                margin-right: 8px;
            }
            
            /* Add arrow icon after Remove button */
            input[name="remove"]::after {
                content: "\\f061";
                font-family: "FontAwesome", "Font Awesome 5 Free", "Font Awesome 6 Free";
                font-weight: 900;
                margin-left: 8px;
            }
        `;
        document.head.appendChild(style);
        
        console.log('Arrow icons CSS added successfully');
    }

    /**
     * Initialize all improvements
     */
    function init() {
        removeTableHoverClass();
        replaceArrowsWithIcons();
        removeTableHoverClassAtEntryLocalAssignRole();
    }

    // Execute when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
