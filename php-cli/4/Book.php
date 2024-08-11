<?php

abstract class Book {
    protected $title;
    protected $author;
    protected $readCount = 0;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle() {
        return "Название: " . $this->title;
    }

    public function getAuthor() {
        return "Автор: " . $this->author;
    }

    public function incrementReadCount() {
        $this->readCount++;
    }

    public function getReadCount() {
        return $this->readCount;
    }

    abstract public function getHandoutInfo();
}
