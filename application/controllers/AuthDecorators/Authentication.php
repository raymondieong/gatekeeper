<?php
/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/15/2017
 * Time: 4:17 PM
 */

namespace AuthDecorators;

use application\helpers\DAO\ClientDAOImpl;
use Controller;
use DAO\AuthDAOImpl;

// TODO : DOCUMENTATION

abstract class Authentication extends Controller
{
    protected $controller;

    private $clientDAO;

    /**
     * Authentication constructor.
     * @param Controller $controller
     */
    public function __construct(Controller $controller)
    {
        $dao = new AuthDAOImpl();
        $this->clientDAO = new ClientDAOImpl();
        parent::__construct($dao);
        //$this->dao = n
        $this->controller = $controller;
    }

    protected function evaluate ($key, $username, $password) : bool
    {
        if ($key) {
            return $this->dao->validateKey($key);
        } elseif ($username && $password) {
            $client = $this->clientDAO->get($username);
            return $this->dao->decrypt($client->getAuthId(), $password);
        } else {
            return false;
        }
    }

    public function auth_get($key, $username, $password, $id)
    {
        if ($this->evaluate($key, $username, $password))
        {
            $this->REST_GET($id);
        }
    }

    public function auth_post($key, $username, $password, $json)
    {
        if ($this->evaluate($key, $username, $password))
        {
            $this->REST_POST($json);
        }
    }

    public function auth_put($key, $username, $password, $json)
    {
        if ($this->evaluate($key, $username, $password))
        {
            $this->REST_PUT($json);
        }
    }

    public function auth_delete($key, $username, $password, $json)
    {
        if ($this->evaluate($key, $username, $password))
        {
            $this->REST_DELETE($json);
        }
    }

    public function REST_GET($id)
    {
        return $this->controller->REST_GET($id);
    }

    public function REST_POST(string $json)
    {
        return $this->controller->REST_POST($json);
    }

    public function REST_PUT(string $json)

    {
        return $this->controller->REST_PUT($json);
    }

    public function REST_DELETE(string $json)
    {
        return $this->controller->REST_DELETE($json);
    }
}