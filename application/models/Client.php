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
 * @ORM\Table(name="client")
 * 
 */
class Client extends \Model
{
    /**
    * Constructor
     * @param string $name
    */
    public function __construct($name)
    {
      parent::__construct();
      //echo $name." passed to client ctor as name!<br/>";
      $this->name = ( string ) $name;
      $this->setJSON(( string ) json_encode($this));
    }
  
    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $clientId;

    /** @ORM\Column(type="string") */
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
    public function setClientId(int $clientId)
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
    public function setName(string $name)
    {
        $this->name = $name;
    }
}