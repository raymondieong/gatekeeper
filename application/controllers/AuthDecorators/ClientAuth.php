<?php
/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/16/2017
 * Time: 11:02 AM
 */

namespace AuthDecorators;


class ClientAuth extends Authentication
{
    /**
     * ClientAuth constructor.
     */
    public function __construct()
    {
        $controller = new \ClientController();
        parent::__construct($controller);
    }
}