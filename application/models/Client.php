<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 3/3/2017
 * Time: 7:41 PM
 */

namespace models;

/**
 * @Entity
 * @Table(name="client")
 */
class Client extends \Model
{
    /**
    * Constructor
    */
    public function __construct($name : string) 
    {
      parent::__construct();
      this->$name = $name;
      this->setJSON(json_encode($this));
    }
  
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    private $clientId;

    /** @Column(type="string") */
    private $name;

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}