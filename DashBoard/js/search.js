document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('searchInput');
    const tables = document.querySelectorAll('.fl-table');

    console.log("Search input:", searchInput);
    console.log("Tables:", tables);

    searchInput.addEventListener('input', function(e) {
        const searchString = e.target.value.toLowerCase();
        console.log("Search string:", searchString);
        tables.forEach(table => {
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
            Array.from(rows).forEach(row => {
                const cells = row.getElementsByTagName('td');
                let found = false;
                Array.from(cells).forEach(cell => {
                    const cellText = cell.textContent.toLowerCase();
                    if (cellText.includes(searchString)) {
                        found = true;
                    }
                });
                if (found) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
});
