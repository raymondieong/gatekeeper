<?php

/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/15/2017
 * Time: 12:55 PM
 */

use \Restserver\Libraries\REST_Controller;

abstract class Controller extends REST_Controller
{
    protected $dao;

    abstract public function REST_GET ($id);
    abstract public function REST_POST (string $json);
    abstract public function REST_PUT (string $json);
    abstract public function REST_DELETE (string $json);

    public function index () { echo "Access Denied!"; }

    public function index_post () { echo "Access Denied!"; }

    public function index_get () { echo "Access Denied!"; }

    public function index_put () { echo "Access Denied!"; }

    public function index_delete () { echo "Access Denied!"; }
}