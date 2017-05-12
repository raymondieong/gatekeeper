<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 3/3/2017
 * Time: 7:41 PM
 */

namespace models;

use Doctrine\ORM\Mapping as ORM;
require_once 'Model.php';


// TODO : Find non-casting solution

/**
 * @ORM\Entity(repositoryClass="Client")
 * @ORM\Table(name="client",uniqueConstraints={@ORM\UniqueConstraint(name="search_idx", columns={"username"})}, uniqueConstraints={@ORM\UniqueConstraint(name="search_idx", columns={"email"})})
 * 
 */
class Client extends \Model
{

    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $username;

    /** @ORM\Column(type="string") */
    private $email;

    /** @ORM\Column(type="object") */
    public $auth; // TODO : Provide operation method

    /** @ORM\Column(type="object") */
    public $user; // TODO : provide operation method

    /**
    * Constructor
     * @param string $username
     * @param string $email
    */
    public function __construct(string $username, string $email)
    {
        parent::__construct();
        //echo $name." passed to client ctor as name!<br/>";
        $this->username = $username;
        $this->email = $email;
      
        $this->setJSON(json_encode($this->jsonSerialize()));
    }

    /**
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }


  
    public function jsonSerialize() : array
    {
        return [
            'id' => $this->id,
            'dateCreated' => $this->getDateCreated()->format('Y-m-d H:i:s'),
            'dateModified' => $this->getDateModified()->format('Y-m-d H:i:s'),
            'username' => $this->username,
            'email' => $this->email
        ];
    }
}