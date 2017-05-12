<?php
/**
 * Created by PhpStorm.
 * Date: 2017-05-12
 * Time: 11:09 AM
 */
namespace models;
use Doctrine\ORM\Mapping as ORM;
require_once 'Model.php';

/**
 * @ORM\Entity(repositoryClass="Device")
 * @ORM\Table(name="device")
 *
 */
class Device extends Model
{
    /** @ORM\Column(type="int") */
    private $uid;

    /** @ORM\Column(type="Client") */
    private $client;


    /**
     * Constructor
     * @param string $uid
     * @param Client $client
     */
    public function __construct($uid, $client)
    {
        parent::__construct();
        $this->uid = $uid;
        $this->client = $client;

    }

    /**
     * @return bool
     */
    public function savedPass()
    {
        return false;
    }


}
