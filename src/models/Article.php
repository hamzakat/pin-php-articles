<?php

class Article
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

    /**
     * Get the value of title
     *
     * @return  mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of publishDate
     *
     * @return  mixed
     */
    public function getPublishDate()
    {
        $date_obj = date_create($this->publishDate);
        return date_format($date_obj, "d M Y");
    }

    /**
     * Get the value of contributorName
     *
     * @return  mixed
     */
    public function getContributorName()
    {
        return $this->contributorName;
    }

    /**
     * Get the value of text
     *
     * @return  mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get the value of id
     *
     * @return  mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
