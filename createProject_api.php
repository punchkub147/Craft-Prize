<?php 
	require ('model.php');
	//print_r($userLogin);

	$user_id = $userLogin['user_id'];
	//detail
	$name = $_POST['name'];
	$description = $_POST['description'];
	//$poster = $_POST['poster'];
	//prize
	$prize1 = $_POST['prize1'];
	$prize2 = $_POST['prize2'];
	$prize3 = $_POST['prize3'];
	// attribute
	$attr_age_min = $_POST['age1'];
	$attr_age_max = $_POST['age2'];
	$attr_job = $_POST['job'];
	$attr_other = $_POST['other'];
	//contact
	$website = $_POST['website'];
	$tel = $_POST['tel'];
	//date
	$end_at = $_POST['end_at'];
	//category
	$category = $_POST['category'];
	
	require 'connectDB.php';
		
	$sql = "INSERT INTO `projects`(`user_id`, `project_name`, `project_description`, `project_poster`, `category_id`, `end_at`, `prize_1st`, `prize_2nd`, `prize_3rd`) 
			VALUES ('$user_id','$name','$description','','$category','$end_at','$prize1','$prize2','$prize3')";

	if ($mysqli->query($sql) === TRUE) {
	    //echo "Created";

	    $sql = "SELECT project_id
		        FROM projects
		        ORDER BY project_id DESC
		        LIMIT 1
		        ";
		
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
		    while ($rows = $result->fetch_assoc()) {
		    	$project_id = $rows['project_id'];
		        $sql = "INSERT INTO project_attribute(project_id,attribute_id,attribute_detail)
		        		VALUES 	('$project_id','1','$attr_job'),
		        				('$project_id','2','$attr_other'),
		        				('$project_id','3','$attr_age_min'),
		        				('$project_id','4','$attr_age_max')";

				if ($mysqli->query($sql) === TRUE) {
				    //echo "Created Attribute";
				    $sql = "INSERT INTO project_contact(project_id,contact_id,contact_detail)
			        		VALUES	('$project_id','1','$website'),
			        				('$project_id','2','$tel')";

					if ($mysqli->query($sql) === TRUE) {
					    //echo "Created Contact";
					    echo "Created Project Complete";
					    header('refresh: 3; url=myProject.php');
					    
					} else {
					    echo "Error: " . $sql . "<br>" . $mysqli->error;
					}

				} else {
				    echo "Error: " . $sql . "<br>" . $mysqli->error;
				}
		    }
		}else{
		    echo $sql;
		}
	    //$_SESSION['userLogin'] = $email;
	    //header('Location: myProject.php');
	    
	} else {
	    echo "Error: " . $sql . "<br>" . $mysqli->error;
	}

		
        $mysqli->close();
 ?>