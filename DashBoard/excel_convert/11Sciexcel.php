<?php 
 $conn = new mysqli('localhost', 'root', '', 'smbtjunior');
 if ($conn->connect_error) {
     echo "$conn->connect_error";
     die("Connection Failed : " . $conn->connect_error);
 }


$sql="select firstName, middleName, lastName, dob, gender, religion, cast, category, marks, percent from 11thsci";
$result=mysqli_query($conn,$sql);

$finaldata=array();

while($data=mysqli_fetch_assoc($result))
{
	$finaldata[]=$data;
}

if(isset($_POST['export']))
{
	$filename = "Science". ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");
	
	$firstrow=false;
	foreach($finaldata as $data)
	{
		if(!$firstrow)
		{
			echo implode("\t",array_keys($data))."\n";
			$firstrow=true;
		}
		
		echo implode("\t",array_values($data))."\n";
		
	}
	exit;
}
