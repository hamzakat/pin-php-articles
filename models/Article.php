<?php

class Article implements JsonSerializable
{
    private $id;
    private $title;
    private $publishDate;
    private $contributorName;
    private $text;
    // private $comments = array();

    public function __construct($id, $title, $publishDate, $contributorName, $text)
    {
        $this->id = $id;
        $this->title = $title;
        $this->publishDate = $publishDate;
        $this->contributorName = $contributorName;
        $this->text = $text;
    }

    public function jsonSerialize()
    {
        return (object) get_object_vars($this);
    }
}
