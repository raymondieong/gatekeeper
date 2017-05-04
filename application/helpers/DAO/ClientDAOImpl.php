<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 3/7/2017
 * Time: 5:49 PM
 */


// TODO : DOCS

namespace application\helpers\DAO;

require_once(APPPATH."models/Client.php");
use models\Client;

class ClientDAOImpl extends DAOImpl implements ClientDAO
{
    /**
     * ClientDAOImpl constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function save(Client $client)
    {
        // The object to be saved is the parameter $client of type "model/Client"
        try 
				{
            // TODO : DOC
            $this->em->persist($client);
            // TODO : DOC
            $this->em->flush();
        } // TODO : DOC
        catch (\Exception $exception)
				{
            die($exception->getMessage());
        }
        // Method returns true so that the caller code can determine the success of operation.
        // Returned if no exception is thrown/handled.
        return true;
    }

    public function get($id)
    {
      // TODO: Implement get() method.
      $client = null;  
			try 
			{
					$client = $this->em->getRepository('client')->find($id);	
			}
			catch (...) 
			{
			
			}
			return $client;
    }

    public function delete(Client $client)
    {
      // TODO : Implement delete() method.
			// TODO : Handle FAILURE
			$this->em->delete($client);
			$this->em->flush();
    }
    
  
	public function getByDateCreated($date : DateTime) : array
  {
		try 
		{
			$this->em->findBy(array('dateCreated' => $date));
		}
		catch (...)
		{
			
		}
  }

	public function getByDateModified($date : DateTime) : array
  {
    try 
		{
			$this->em->findBy(array('dateModified' => $date));
		}
		catch (...)
		{
			
		}
  }
  
	public function getByJSON($json : string) : \Model
  {
    try 
		{
			$this->em->findBy(array('JSON' => $json));
		}
		catch (...)
		{
			
		}
  }
}