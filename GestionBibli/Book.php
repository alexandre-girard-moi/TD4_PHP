<?php
/**
 * Created by PhpStorm.
 * User: g17018832
 * Date: 02/10/2018
 * Time: 16:28
 */

class Book
{
    private $title;
    private $author;
    private $editor;
    private $pageNb;

    /**
     * Book constructor.
     * @param $title
     * @param $author
     * @param $editor
     * @param $pageNb
     */
    public function __construct($title, $author, $editor, $pageNb)
    {
        $this->title = $title;
        $this->author = $author;
        $this->editor = $editor;
        $this->pageNb = $pageNb;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param mixed $editor
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    /**
     * @return mixed
     */
    public function getPageNb()
    {
        return $this->pageNb;
    }

    /**
     * @param mixed $pageNb
     */
    public function setPageNb($pageNb)
    {
        $this->pageNb = $pageNb;
    }

    public function showBook()
    {
        echo  'Titre : ' . $this->title . "<br>" .
              'Auteur : ' .$this->author . "<br>" .
              'Editeur : ' . $this->editor . "<br>" .
              'Nombre de pages :' . $this->pageNb . "<br>";
    }





}