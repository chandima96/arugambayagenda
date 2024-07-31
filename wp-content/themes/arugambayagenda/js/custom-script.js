document.addEventListener('DOMContentLoaded', function() {
    // Get URL parameters
    const params = new URLSearchParams(window.location.search);

    // Get form elements
    const form = document.querySelector('form.wpcf7-form');
    if (!form) return; // Exit if no form found

    // Set hidden fields' values
    form.querySelector('input[name="page_title"]').value = params.get('page_title') || '';
    form.querySelector('input[name="date"]').value = params.get('date') || '';
    form.querySelector('input[name="time"]').value = params.get('time') || '';
    form.querySelector('input[name="pax"]').value = params.get('pax') || '';
    form.querySelector('input[name="kids"]').value = params.get('kids') || '';
    form.querySelector('input[name="total_amount"]').value = params.get('total_amount') || '';
});
