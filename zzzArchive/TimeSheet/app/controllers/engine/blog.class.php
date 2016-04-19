<?php
/**
* Blog Class
*/
class Blog extends dbConnect
{

	public function blog()
	{
		$getBlog = mysqli_query($this->db_con, "SELECT * FROM blog");
		$rows = mysqli_fetch_array($getBlog);

		while ($blog = new BlogObject($rows)) {
			$blogName = $blog->blogName;
			$return = $blogName;
		}
		return($return);
	}
}

/**
* BlogObject
*/
class BlogObject
{
	public $blogName;
	public $blogText;
	public $blogImage;
	public $blogDate;
	function __construct($rows)
	{
		$this->blogName = $rows['blogName'];
		$this->blogText = $rows['blogText'];
		$this->blogImage = $rows['blogImage'];
		$this->blogDate = $rows['blogDate'];
	}
}
?>