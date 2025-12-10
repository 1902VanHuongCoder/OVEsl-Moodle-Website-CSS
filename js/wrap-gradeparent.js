/**
 * Wrap .gradeparent element with a new div container
 *
 * @package    local_paul_to_global_css
 * @copyright  2025 Your Name
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

document.addEventListener('DOMContentLoaded', function() {
    // Find the gradeparent element
    var gradeparent = document.querySelector('.gradeparent');
    
    if (gradeparent) {
        // Create new wrapper div
        var wrapper = document.createElement('div');
        wrapper.className = 'gradeparent-wrapper';
        
        // Insert wrapper before gradeparent
        gradeparent.parentNode.insertBefore(wrapper, gradeparent);
        
        // Move gradeparent inside wrapper
        wrapper.appendChild(gradeparent);
        
        console.log('Gradeparent wrapped successfully');
    }
});





