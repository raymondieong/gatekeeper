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
     * For every model class field JSON is to
     * store it's appropriate data in form of
     * stringify JSON object.
     *
     * type: string
     */
    protected $JSON;
}