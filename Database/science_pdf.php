<?php
// Validate and sanitize input
$applicationId = isset($_GET['application_id']) ? intval($_GET['application_id']) : 0;

// Check if the application ID is valid
if ($applicationId <= 0) {
    die("Invalid application ID");
}

require("fpdf186/fpdf.php");

// Database connection
$conn = new mysqli('localhost', 'root', '', 'smbtjunior');
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {
    // Fetch application data from the database based on the application ID
    $stmt = $conn->prepare("SELECT * FROM 11thSci WHERE id = ?");
    $stmt->bind_param("i", $applicationId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) { 

        $applicationId = $row['id'];
        // Data inserted successfully, proceed to generate PDF
        $pdf = new FPDF();  
        $pdf->AddPage(); 
        
        $pdf->AddFont("Poppins-Regular");
        $pdf->AddFont("Poppins-Bold");
        $pdf->SetFillColor(173, 216, 230);
        $pdf->SetDrawColor(178, 190, 181);
        
        
        $pdf->SetFont("Arial", "B", 18); 
        $pdf->Cell(0, 10, "S. M. B. Torgalkar Junior College , Ratnagiri", 0, 1, 'C');
        $pdf->SetFont("Arial", "B", 14); 
        $pdf->Cell(0, 10, "Online Admission Form", 0, 1, 'C');
        
        
        $pdf->SetFont("Poppins-Regular", "", 12);  
        $pdf->Cell(47.5, 10, " Application ID : ", 0, 0, 'R');
        $pdf->SetFont("Poppins-Regular", "", 12); 
        $pdf->Cell(47.5, 10, $applicationId , 0, 0, 'L');
        $pdf->SetFont("Poppins-Regular", "", 12);  
        $pdf->Cell(47.5, 10, " Faculty : ", 0, 0, 'R');
        $pdf->SetFont("Poppins-Regular", "", 12); 
        $pdf->Cell(47.5, 10, "Science", 0, 0, 'L');
        $pdf->Ln(5);
        
        //Personal Details
        $pdf->Ln();
        $pdf->SetFont("Poppins-Regular","",12); 
        $pdf->Cell(0, 10, " Personal Details", 1, 1 ,"",true);
        
        
        $pdf->SetFont("Poppins-Regular", "", 10);  
        $pdf->Cell(47.5, 10, " Name", 1, 0, 'R');
        $pdf->SetFont("Poppins-Bold", "", 10); // Reset font to regular
        $pdf->Cell(142.5, 10, $row['firstName'] . " " . $row['middleName'] . " " . $row['lastName'] , 1, 1); 
        
        
        
        $pdf->SetFont("Poppins-Regular", "", 10); // Set font to bold 
        $pdf->Cell(47.5, 10, " Date of Birth", 1, 0, 'R');
        $pdf->SetFont("Poppins-Bold", "", 10); // Reset font to regular
        $pdf->Cell(142.5, 10,  $row['dob'] , 1, 1); 
        
        $pdf->SetFont("Poppins-Regular", "", 10);
        $pdf->Cell(47.5, 10, " Email", 1, 0, 'R'); 
        $pdf->SetFont("Poppins-Bold", "", 10);
        $pdf->Cell(142.5, 10,  $row['email'] , 1, 1);
        
        
        $pdf->SetFont("Poppins-Regular", "", 10);
        $pdf->Cell(47.5, 10, " Mobile", 1, 0, 'R');
        $pdf->SetFont("Poppins-Bold", "", 10);
        $pdf->Cell(142.5, 10,  $row['mobile'], 1, 1); 
        
        
        $pdf->SetFont("Poppins-Regular", "", 10);
        $pdf->Cell(47.5, 10, " Gender", 1, 0, 'R');
        $pdf->SetFont("Poppins-Bold", "", 10);
        $pdf->Cell(142.5, 10,  $row['gender'], 1, 1); 
        
        $pdf->SetFont("Poppins-Regular", "", 10);
        $pdf->Cell(47.5, 10, " Religion", 1, 0, 'R');
        $pdf->SetFont("Poppins-Bold", "", 10);
        $pdf->Cell(142.5, 10,  $row['religion'], 1, 1);
        
        $pdf->SetFont("Poppins-Regular", "", 10);
        $pdf->Cell(47.5, 10, " Cast", 1, 0, 'R');
        $pdf->SetFont("Poppins-Bold", "", 10);
        $pdf->Cell(142.5, 10,  $row['cast'], 1, 1);
        
        $pdf->SetFont("Poppins-Regular", "", 10);
        $pdf->Cell(47.5, 10, " Category", 1, 0, 'R');
        $pdf->SetFont("Poppins-Bold", "", 10);
        $pdf->Cell(142.5, 10,  $row['category'], 1, 1);
        
        
        //New Identity Table
        $pdf->Ln(5);
        $pdf->SetFont("Poppins-Regular","",12); 
        $pdf->Cell(0, 10, " Identity Details", 1, 1 ,"",true);
        
        
        $pdf->SetFont("Poppins-Regular", "", 10);  
        $pdf->Cell(47.5, 10, " Aadhar No.", 1, 0, 'R');  
        $pdf->Cell(142.5, 10,  $row['aadhar'], 1, 1); 
        
        
        
        $pdf->Cell(47.5, 10, " SSC Passing Year", 1, 0, 'R'); 
        $pdf->Cell(142.5, 10,  $row['passingyear'], 1, 1); 
        
        
        $pdf->Cell(47.5, 10, " SSC Passing Board", 1, 0, 'R'); 
        $pdf->Cell(142.5, 10,  $row['board'], 1, 1);
        
        
        $pdf->Cell(47.5, 10, " Marks Obtained", 1, 0, 'R');
        $pdf->Cell(47.5, 10,  $row['marks'], 1, 0); 
         
        $pdf->Cell(47.5, 10, " Out of ", 1, 0, 'R');
        $pdf->Cell(47.5, 10,  isset($row['total']) ? $row['total'] : 'N/A', 1, 1); 
        
        
        $pdf->Cell(47.5, 10, " Percentage", 1, 0, 'R');
        $pdf->Cell(142.5, 10,  $row['percent']. "%", 1, 1); 
        
        
        //New Address Table
        $pdf->Ln(5);
        $pdf->SetFont("Poppins-Regular","",12); 
        $pdf->Cell(0, 10, " Address Details", 1, 1 ,"",true);
        
        
        $pdf->SetFont("Poppins-Regular", "", 10);  
        $pdf->Cell(47.5, 10, " Address Line 1", 1, 0, 'R');  
        $pdf->Cell(142.5, 10,  $row['add1'] , 1, 1); 
        
        
        
        $pdf->Cell(47.5, 10, " Address Line 2", 1, 0, 'R'); 
        $pdf->Cell(142.5, 10,  $row['add2'] , 1, 1); 
        
        
        $pdf->Cell(47.5, 10, " Area", 1, 0, 'R'); 
        $pdf->Cell(142.5, 10,  $row['area'] , 1, 1);
        
        
         
        $pdf->Cell(47.5, 10, " State", 1, 0, 'R');
        $pdf->Cell(142.5, 10,  $row['states'], 1, 1); 
        
        
        $pdf->Cell(47.5, 10, " District", 1, 0, 'R');
        $pdf->Cell(142.5, 10,  $row['district'], 1, 1); 
        
        
        $pdf->Cell(47.5, 10, " Pincode", 1, 0, 'R');
        $pdf->Cell(142.5, 10,  $row['pincode'], 1, 1); 
        
        
        // Output PDF
        $pdf->Output('output.pdf', 'D'); // 'D' to force download


    
    } else {
        echo "Application not found!";
    }

    $stmt->close();
    $conn->close();
}
?>
