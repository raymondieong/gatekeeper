<?php
/**
 * Created by PhpStorm.
 * Date: 2017-05-12
 * Time: 11:09 AM
 */
namespace models;
use Doctrine\ORM\Mapping as ORM;
require_once 'Model.php';
require_once 'Client.php';

/**
 * @ORM\Entity(repositoryClass="Device")
 * @ORM\Table(name="device")
 *
 */
class Device extends \Model
{
    /** @ORM\Column(type="int") */
    private $uid;

    /** @ORM\Column(type="object") */
    private $client;

    /** @ORM\Column(type="boolean") */
    private $isPassSaved;

    /**
     * Constructor
     * @param int $uid
     * @param Client $client
     */
    public function __construct(int $uid, Client $client)
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
        return $this->isPassSaved;
    }

    /**
     * @return array
     */
    public function jsonSerialize() : array
    {
        return [
            'uid' => $this->uid,
            'client' => $this->client
        ];
    }


}
