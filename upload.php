<?php
	    
	if(isset($_FILES['file'])){
		$file_name = $_FILES['file']['name'];
		$file_target = "./files/";
		$upload_path = $file_target.$file_name;
		if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_path)){
			header("Location: https://ide50-afzalsayed96.cs50.io/gallery.php");
		}else{
			echo "Failed to Upload";
		}
	}

?>