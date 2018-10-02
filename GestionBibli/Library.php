<?php
/**
 * Created by PhpStorm.
 * User: g17018832
 * Date: 02/10/2018
 * Time: 16:35
 */

class Library
{
    const MAX_BOOKS = 'max';
    private $name;
    private $address;
    private $max;
    private $tabBook;

    /**
     * Library constructor.
     * @param $name
     * @param $address
     * @param $max
     * @param $tabBook
     */
    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
        $this->max = 0;
        $this->tabBook = new SplFixedArray(self::MAX_BOOKS);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param mixed $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return mixed
     */
    public function getTabBook()
    {
        return $this->tabBook;
    }

    /**
     * @param mixed $tabBook
     */
    public function setTabBook($tabBook)
    {
        $this->tabBook = $tabBook;
    }

    public function showBook()
    {
        foreach ($this->tabBook as $livre)
        {
            echo 'Titre : ' . $livre->showBook() . "<br>";
        }
    }

    public function addBook(Book $b)
    {
        $this->tabBook[$this->max] = $b;
        $this->max += 1;
    }

    public function deleteBook(Book $b)
    {
        foreach($this->tabBook as $livre)
        {
            if($b == $livre)

        }
    }


}