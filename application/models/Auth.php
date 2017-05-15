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

    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\Column(type="string") */
    private $salt;

    /** @ORM\Column(type="string") */
    private $auth_string;

    /**
     * Auth constructor.
     * @param string $password
     */
    public function __construct(string $password)
    {
        parent::__construct();
        $this->encrypt($password);
    }


    /**
     * @return array
     */
    public function jsonSerialize() : array
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
     */
    private function encrypt(string $password)
    {
        // TODO : Implement algorithms for authentication
        // TODO : Generate salt

        // TODO : WARNING! -> NOT SECURE / TEMPORARY
        $saltVal = rand(10000, 99999);
        $this->salt = "$saltVal";
        $this->auth_string = base64_encode($password.$this->salt);
    }

    /**
     * @param string $password
     * @return boolean
     */
    public function authenticate(string $password) : bool
    {
        // TODO : Implement algorithms for authentication

        // TODO : WARNING! -> NOT SECURE / TEMPORARY
        return ($password.$this->salt == base64_decode($this->auth_string));
    }
}