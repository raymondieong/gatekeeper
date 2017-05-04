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
     * @param string $name
    */
    public function __construct(string $name)
    {
      $this->$name = $name;
      $this->setJSON(json_encode($this));
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
    public function getClientId() : int
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     */
    public function setClientId(int $clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}