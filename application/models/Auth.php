<?php

/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/12/2017
 * Time: 11:45 AM
 */

namespace models;

require_once 'Model.php';

/**
 * @ORM\Entity(repositoryClass="Auth")
 * @ORM\Table(name="auth")
 *
 */
class Auth extends \Model
{

    /** @ORM\Column(type="string") */
    private $salt;

    /** @ORM\Column(type="string") */
    private $auth_string;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'dateCreated' => $this->getDateCreated()->format('Y-m-d H:i:s'),
            'dateModified' => $this->getDateModified()->format('Y-m-d H:i:s'),
            'salt' => $this->salt,
            'auth_string' => $this->auth_string
        ];
    }


    /**
     * @param string $password
     * @return bool
     */
    public function authenticate(string $password) : bool
    {
        // TODO : Implement algorithms for authentication
        return false;
    }
}