
document.addEventListener('DOMContentLoaded', function () {

    document.getElementById('select-all').addEventListener('click', function (event) {
        const checkboxes = document.querySelectorAll('.user-checkbox');
        checkboxes.forEach(checkbox => checkbox.checked = event.target.checked);
    });
    document.getElementById('generate-report').addEventListener('click', function () {
        const selectedIds = Array.from(document.querySelectorAll('.user-checkbox:checked')).map(cb => cb.value);
        if (selectedIds.length === 0) {
            alert('Please select at least one application to generate Report.');
            return;
        }
        if (confirm('Are you sure you want to generate report of the selected application?')) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '/applications/generate';  
            form.style.display = 'none';
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = csrfToken;
            form.appendChild(csrfInput);

            selectedIds.forEach(id => {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'ids[]';
                input.value = id;
                form.appendChild(input);
            });
            document.body.appendChild(form);
            form.submit();
        }
    });
});
