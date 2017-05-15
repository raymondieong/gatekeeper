<?php
/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/15/2017
 * Time: 4:17 PM
 */

namespace AuthDecorators;

use Controller;

// TODO : DOCUMENTATION

abstract class Authentication extends Controller
{
    private $controller;

    /**
     * Authentication constructor.
     * @param Controller $controller
     */
    public function __construct($controller)
    {
        parent::__construct();
        //$this->dao = n
        $this->controller = $controller;
    }

    public abstract function auth_get($key, $username, $password, $id);

    public abstract function auth_post($key, $username, $password, $json);

    public abstract function auth_put($key, $username, $password, $json);

    public abstract function auth_delete($key, $username, $password, $json);
}