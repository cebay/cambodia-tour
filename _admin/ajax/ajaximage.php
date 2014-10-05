<?php

$path = "../../images/ajax/";
//$name = $_FILES['h_student_photo']['name'];
//echo .' - '.;

//echo move_uploaded_file($_FILES['h_student_photo']['tmp_name'],$_FILES['h_student_photo']['name']);
	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['logo_upload']['name'];
			$size = $_FILES['logo_upload']['size'];

			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['logo_upload']['tmp_name'];
							
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
									require_once('../../config/class.php');
									$opr->contact->update_logo($actual_image_name);
									
									echo '<img src="../../images/ajax/'.$actual_image_name.'" />';

								}
							else
								echo "failed";
						}
						else
						echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>