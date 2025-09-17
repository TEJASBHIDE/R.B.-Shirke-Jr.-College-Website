
function toggleSection(className) {
    var div = document.querySelector('.' + className);
    var allSections = document.querySelectorAll('.science11, .science12, .commerce11, .commerce12');
    allSections.forEach(function(section) {
        if (section.classList.contains(className)) {
            if (section.style.display === 'none') {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        } else {
            section.style.display = 'none';
        }
    });
}

function downloadPDF(pdfUrl, pdfName) {
    var link = document.createElement('a');
    link.href = pdfUrl;
    link.download = pdfName;
    link.click();
}