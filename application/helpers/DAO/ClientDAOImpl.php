<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 3/7/2017
 * Time: 5:49 PM
 */



namespace application\helpers\DAO;

require_once(APPPATH."models/Client.php");
use models\Client;

class ClientDAOImpl implements ClientDAO
{
    /**
     * @var \Doctrine\ORM\EntityManager $em
     */
    var $em;

    /**
     * ClientDAOImpl constructor.
     */
    public function __construct()
    {
        parent::__construct();
        // Connect to Doctrine.
        $this->em = $this->doctrine->em;
    }

    public function save(Client $client)
    {
        // The object to be saved is the parameter $client of type "model/Client"
        try {
            // TODO : DOC
            $this->em->persist($client);
            // TODO : DOC
            $this->em->flush();
        } // TODO : DOC
        catch (\Exception $exception) {
            die($exception->getMessage());
        }
        // Method returns true so that the caller code can determine the success of operation.
        // Returned if no exception is thrown/handled.
        return true;
    }

    public function get($id)
    {
        // TODO: Implement get() method.

    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function update(Client $client)
    {
        // TODO: Implement update() method.
    }
}