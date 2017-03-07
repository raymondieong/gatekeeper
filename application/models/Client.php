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
class Client extends \CI_Model
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    private $clientId;

    /** @Column(type="integer") */
    private $uid;

    /** @Column(type="string") */
    private $name;

    /** @Column(type="date")  */
    private $dateCreated;

    /** @Column(type="date")  */
    private $dateModified;
}