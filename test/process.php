<?php
// Connect to your database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smbtjunior";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into database
$sql = "INSERT INTO test (nametest, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully, proceed to generate PDF
    require('fpdf186/fpdf.php'); // Include FPDF library

    // Create a new PDF instance
    $pdf = new FPDF();
    $pdf->AddPage();

    // Add content to the PDF
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Name: '.$name);
    $pdf->Ln();
    $pdf->Cell(40,10,'Email: '.$email);

    // Generate PDF content
    $pdfContent = $pdf->Output('', 'S');

    // Define output file path
    $outputFilePath = 'output.pdf';

    // Save PDF content to a file
    file_put_contents($outputFilePath, $pdfContent);

    // Provide download link to the generated PDF
    echo '<a href="' . $outputFilePath . '" download>Download PDF</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

