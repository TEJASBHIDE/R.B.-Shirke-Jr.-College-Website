<?php
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$cast = $_POST['cast'];
$category = $_POST['category'];
$aadhar = $_POST['aadhar'];
$passingyear = $_POST['passingyear'];
$board = $_POST['board'];
$marks = $_POST['marks'];
$percent = $_POST['percent'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$area = $_POST['area'];
$states = $_POST['states'];
$district = $_POST['district'];
$pincode = $_POST['pincode'];


$filename = $_FILES['adimg']['name'];
$tempname = $_FILES['adimg']['tmp_name'];
$folder = "11thSci/Aadhar/" . $filename;
move_uploaded_file($tempname, $folder);

$filename = $_FILES['markimg']['name'];
$tempname = $_FILES['markimg']['tmp_name'];
$folder1 = "11thSci/Marksheet/" . $filename;
move_uploaded_file($tempname, $folder1);

// Database connection
$conn = new mysqli('localhost', 'root', '', 'smbtjunior');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into 11thSci(firstName,middleName,lastName,dob,email,mobile,gender,religion,cast,category,aadhar,passingyear,board,marks,percent,adimg,markimg,add1,add2,area,states,district,pincode) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
	$stmt->bind_param(
		"sssssissssiisiisssssssi",
		$firstName,
		$middleName,
		$lastName,
		$dob,
		$email,
		$mobile,
		$gender,
		$religion,
		$cast,
		$category,
		$aadhar,
		$passingyear,
		$board,
		$marks,
		$percent,
		$folder,
		$folder1,
		$add1,
		$add2,
		$area,
		$states,
		$district,
		$pincode
	);
	$stmt->execute();
	// echo $execval;
	// echo  "Registration successfully...";
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Form Submitted</title>
		<link rel="icon" href="../images/hero-img.png">
		<style>
			@font-face {
				font-family: "Raleway-regular";
				src: url(../fonts/Raleway-Regular.ttf)
			}

			@font-face {
				font-family: "Raleway-medium";
				src: url(../fonts/Raleway-Medium.ttf)
			}

			@font-face {
				font-family: "Raleway-bold";
				src: url(../fonts/Raleway-Bold.ttf)
			}

			@font-face {
				font-family: "Raleway-extrabold";
				src: url(../fonts/Raleway-ExtraBold.ttf)
			}

			@font-face {
				font-family: "Raleway-semibold";
				src: url(../fonts/Raleway-SemiBold.ttf)
			}

			@font-face {
				font-family: "Raleway-black";
				src: url(../fonts/Raleway-Black.ttf)
			}

			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			body {
				height: 100vh;
				display: flex;
				justify-content: center;
				align-items: center;
			}

			.card {
				max-width: 320px;
				border-width: 1px;
				border-color: rgba(219, 234, 254, 1);
				border-radius: 1rem;
				background-color: rgba(255, 255, 255, 1);
				padding: 1rem;
			}

			.header {
				display: flex;
				justify-content: center;
				align-items: center;
				grid-gap: 1rem;
				gap: 1rem;
			}

			.icon {
				flex-shrink: 0;
				display: flex;
				align-items: center;
				justify-content: center;
				border-radius: 9999px;
				background-color: rgba(96, 165, 250, 1);
				padding: 0.5rem;
				color: rgba(255, 255, 255, 1);
			}

			.icon svg {
				height: 1rem;
				width: 1rem;
			}

			.alert {
				font-family: "Raleway-Bold";
				font-weight: 600;
				color: rgba(107, 114, 128, 1);
			}

			.message {
				font-family: "Raleway-semibold";
				margin-top: 1rem;
				color: rgba(107, 114, 128, 1);
			}

			.actions {
				margin-top: 1.5rem;
			}

			.actions a {
				text-decoration: none;
			}

			.contact-us,
			.home {
				font-family: "Raleway-semibold";
				display: inline-block;
				border-radius: 0.5rem;
				width: 100%;
				padding: 0.75rem 1.25rem;
				text-align: center;
				font-size: 0.875rem;
				line-height: 1.25rem;
				font-weight: 600;
			}

			.home {
				font-family: "Raleway-semibold";
				background-color: rgba(59, 130, 246, 1);
				color: rgba(255, 255, 255, 1);
			}

			.home:hover {
				background-color: rgba(17, 104, 245, 1);
			}

			.contact-us {
				margin-top: 0.5rem;
				background-color: rgba(249, 250, 251, 1);
				color: rgba(107, 114, 128, 1);
				transition: all 0.15s ease;
			}

			.contact-us:hover {
				background-color: rgb(230, 231, 233);
			}
		</style>
	</head>

	<body>
		<div class="card">
			<div class="header">
				<span class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd"
							d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
							clip-rule="evenodd"></path>
					</svg>
				</span>
				<p class="alert">Applied Successfully</p>
			</div>

			<p class="message">
				Your Admission application in our college has been successfully submitted...!
			</p>

			<div class="actions">
				<a href="../index.html" class="home"> Home </a>

				<a href="../Feedback.html" class="contact-us"> Contact Us </a>
			</div>
		</div>
	</body>

	</html>

	<?php
	$stmt->close();
	$conn->close();
}
?>