<?php

	//$Id=$_GET['Id'];
	session_start();
	//$Id = $_POST['Id'];
	if(isset($_POST['Save_Edit']))
	{
		//echo "hi";
		$CourseTitle=$_POST['CourseTitle'];
		
		$CourseDes=$_POST['CourseDes'];
		
		$Professor=$_POST['Professor'];

		$CourseDuration = $_POST['Duration'];
		
		$Start_Date = $_POST['Start_Date'];

		$con = new MongoClient();
		if($con)
		{
			$db = $con->ICMAM;

			$edit = $db->courses;

			//echo $edit;
			
					$query = array('$set'=> (array("Title" => $CourseTitle,"Description" => $CourseDes,"Prof_Assigned"=>$Professor, "Duration"=>$CourseDuration, "Start_Date"=>$Start_Date)));

					//echo $query;
					
					$edit->update(array( "Title" => $CourseTitle),$query,array("upsert" => false));
			 		
			 		//echo "Updated";

			 		header('location: '.'../Courses.php');
				
				
		}	
		else
		{
			echo "not connected";
		}
	}


		

		
	
?>