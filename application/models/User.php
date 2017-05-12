<?php

/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/12/2017
 * Time: 11:36 AM
 */

namespace models;

require_once 'Model.php';

/**
 * @ORM\Entity(repositoryClass="User")
 * @ORM\Table(name="user")
 *
 */
class User extends \Model
{

    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /** @ORM\Column(type="object") */
    private $data;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->data = null;
    }


    /**
     * @return string
     */
    public function getData() : string
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData(string $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function jsonSerialize() : array
    {
        return [
            'id' => $this->id,
            'dateCreated' => $this->getDateCreated()->format('Y-m-d H:i:s'),
            'dateModified' => $this->getDateModified()->format('Y-m-d H:i:s'),
            // TODO : Change after 'Data' class is complete.
            'data' => "data string [TEST]"
        ];
    }
}