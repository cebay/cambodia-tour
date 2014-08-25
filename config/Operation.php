<?php
	require("Connection.php");

	Class Operation extends Connection {
		public $contact;
		public $gallery;
		public $about;
		public $tour;

		function __construct() {
			$conn = new Connection;
		}

		function upload_file($file, $path) {

			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $file["name"]);
			$extension = end($temp);
			$is_uploaded = false;


			if ((($file["type"] == "image/gif")
			|| ($file["type"] == "image/jpeg")
			|| ($file["type"] == "image/jpg")
			|| ($file["type"] == "image/pjpeg")
			|| ($file["type"] == "image/x-png")
			|| ($file["type"] == "image/png"))
			&& ($file["size"] < 1000000)
			&& in_array($extension, $allowedExts)) {
			  if ($file["error"] > 0) {
			    echo "Return Code: " . $file["error"] . "<br>";
			  } else {
			    if (file_exists($path . $file["name"])) {
			      echo $file["name"] . " already exists. ";
			    } else {
			      move_uploaded_file($file["tmp_name"],
			      $path . $file["name"]);
			      echo "Upload success!";
			      $is_uploaded = true;
			    }
			  }
			} else {
			  echo "Invalid file";
			}
			return $is_uploaded;
		}

		function find_record($field, $table, $condition) {
			$stmt	 = sprintf(FIND_RECORD, $field, $table, $condition);
			echo "=> " . $stmt; exit(0);
			$query 	 = mysql_query($stmt);
			$records = mysql_fetch_array($query);

			return $records[0];
		}
	}

?>