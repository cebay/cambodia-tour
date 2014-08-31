<?php
	class HomeNews {
		function news_id ($news_id) {
			return $news_id;
		}

		function news_title ($news_title) {
			return $news_title;
		}
		function news_desc ($news_desc) {
			return $news_desc;
		}

		function save() {

			$news_title	= $this->news_title;
			$news_desc	= $this->news_desc;

			$stmt = sprintf(HOME_NEWS_SQL_INSERT, $news_title, $news_desc);

			return mysql_query($stmt);
		}
		function update() {
			$news_id					= $this->news_id;
			$news_title			= $this->news_title;
			$news_desc				= $this->news_desc;

			$stmt 	 = sprintf(HOME_NEWS_SQL_UPDATE, $news_title, $news_desc, $news_id);
			
			return mysql_query($stmt);
		}
		function delete() {
			$news_id = $this->news_id;
			$stmt = sprintf(HOME_NEWS_SQL_DELETE, $news_id);
			return mysql_query($stmt);
		}
	}
?>