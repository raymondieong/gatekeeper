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

abstract class Model
{
    /*
     * getJSON is implemented for every model class to
     * return appropriate data in form of JSON string.
     *
     * return type: string
     */
    abstract protected function getJSON();
}