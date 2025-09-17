function fetchScienceData(page) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("scienceDataContainer").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "fetch_science_data.php?page=" + page, true);
    xhttp.send();
}

// Initially fetch the data for the first page
fetchScienceData(1);


function fetchCommerceData(page) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("commerceDataContainer").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "fetch_commerce_data.php?page=" + page, true);
    xhttp.send();
}

// Initially fetch the data for the first page
fetchCommerceData(1);