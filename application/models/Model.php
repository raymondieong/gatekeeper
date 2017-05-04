<?php

/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 3/24/2017
 * Time: 8:59 PM
 */

/*
 * This class is used to allow dynamic dispatch for DAO services.
 * Every model inherits the model class.
 */

/** @MappedSuperclass */
abstract class Model
{
    /*
     * For every model class field JSON is to
     * store it's appropriate data in form of
     * stringify JSON object.
     */
    /** @Column(type="string") */
    private $JSON;
  
    /** @Column(type="date")  */
    private $dateCreated;

    /** @Column(type="date")  */
    private $dateModified;
  
    /**
     * @return string
     */
    protected function getJSON() : string
    {
        return $this->JSON;
    }

    /**
     * @param string $JSON
     */
    protected function setJSON($JSON : string)
    {
        $this->JSON = $JSON;
    }
    /**
     * @return DateTime
     */
    protected function getDateCreated() : DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @param DateTime $dateCreated
     */
    protected function setDateCreated($dateCreated : DateTime)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return DateTime
     */
    protected function getDateModified() : DateTime
    {
        return $this->dateModified;
    }

    /**
     * @param DateTime $dateModified
     */
    protected function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
    }
}