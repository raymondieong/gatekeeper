<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 3/3/2017
 * Time: 11:29 PM
 */

namespace RESTControllers;


class ClientController extends \CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function GetClient()
    {
        // TODO : TEST
        echo "TEST GET CLIENT";
    }

    public function NewClient()
    {
        // TODO : TEST
        echo "NEW CLIENT";
    }
}