//Form Submission
document.getElementById("myForm").addEventListener("submit", function(event) {
    // Prevent the default form submission
    event.preventDefault();
    
    // Perform the form submission
    var form = event.target;
    var formData = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", form.action);
    xhr.onload = function() {
        if (xhr.status === 200) {
            // First action (process.php) is completed successfully
            
            // Second action: Redirect to another page
            window.location.href = "success.php";
        } else {
            // Handle error
            console.error("Form submission error:", xhr.statusText);
        }
    };
    xhr.send(formData);
  });