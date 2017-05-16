<?php
/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/15/2017
 * Time: 4:21 PM
 */

namespace AuthDecorators;

class UserAuth extends Authentication
{
    /**
     * UserAuth constructor.
     */
    public function __construct()
    {
        $controller = new \UserController();
        parent::__construct($controller);
    }
}