<?php
class Book {
	private $title;
	private $author;
	private $publisher;

	public function __construct($title, $author, $publisher) {
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getAuthor() {
		return $this->author;
	}

	public function getPublisher() {
		return $this->publisher;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function setAuthor($author) {
		$this->author = $author;
	}

	public function setPublisher($publisher) {
		$this->publisher = $publisher;
	}
}
?>