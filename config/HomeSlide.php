<?php
	class HomeSlide {
		function slide_id ($slide_id) {
			return $slide_id;
		}

		function slide_image ($slide_image) {
			return $slide_image;
		}

		function save() {

			$slide_image 	= $this->slide_image;

			$stmt = sprintf(HOME_SLIDE_SQL_INSERT, $slide_image);
			return mysql_query($stmt);
		}
		
		function delete() {
			$slide_id = $this->slide_id;
			$stmt = sprintf(HOME_SLIDE_SQL_DELETE, $slide_id);
			return mysql_query($stmt);
		}
	}
?>