<?php
/**
 * Created by Codeanywhere.
 * User: Mohammad Yazdani
 * Date: 5/4/2017
 * Time: 13:08 PM
 */
 
abstract class DAOImpl implements DAO {
	/**
     * @var \Doctrine\ORM\EntityManager $em
     */
    protected $em;

    /**
     * DAOImpl constructor.
     */
    public function __construct()
    {
        parent::__construct();
        // Connect to Doctrine.
        $this->em = $this->doctrine->em;
				$this->save($this);
    }
}